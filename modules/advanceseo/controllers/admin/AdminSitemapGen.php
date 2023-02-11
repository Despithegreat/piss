<?php
/**
* 2007-2021 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2021 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class AdminSitemapGenController extends ModuleAdminController {

	public $cron = false;
	private $sql_checks = array();
	const HOOK_ADD_URLS_SM = 'SitemapAppendUrls';
	public function __construct()
	{
		$this->bootstrap = true;
		$shop_collection = Shop::getShops(true);
		$this->context = Context::getContext();
		parent::__construct();
		$this->type_array = array('home', 'meta', 'product', 'category', 'manufacturer', 'supplier', 'cms', 'module');
		$gsitemap_last_export = Configuration::get('GSITEMAP_LAST_EXPORT');
		$cdn_use = (int)Configuration::get('GSITEMAP_CDN_OPT');
		$cdn_use_html = ($cdn_use > 0) ? ' checked="checked"' : '';
		$ping_use = (int)Configuration::get('GSITEMAP_PING_SE_OPT');
		$ping_se_use_html = ($ping_use > 0) ? ' checked="checked"' : '';
		$gsitemap_store_url = 'http://'.Tools::getShopDomain(false, true).__PS_BASE_URI__;
		$store_metas = Meta::getMetasByIdLang((int)$this->context->cookie->id_lang);
		$gsitemap_links = $this->getSitemapRaw();
		$this->context->smarty->assign(
                                array(
                                    'gsitemap_links' => $gsitemap_links,
									'gsitemap_store_url' => $gsitemap_store_url,
									'gsitemap_store_url_shopid' => (int)$this->context->shop->id,
									'advanceseo_token' => Tools::getAdminToken('advanceseo'),
									'gsitemap_last_export' => $gsitemap_last_export,
									'store_metas' => $store_metas,
									'cdn_use' => $cdn_use,
									'cdn_use_html' => $cdn_use_html,
									'ping_use' => $ping_use,
									'ping_se_use_html' => $ping_se_use_html
                                )
                            );
		$_html = $this->context->smarty->fetch(_PS_MODULE_DIR_.'advanceseo/views/templates/admin/sitemaps.tpl');
		$sitemap = array(
						 array(
							'name' => $this->l('All URLs'),
							'value' => 0
						 ),
						 array(
							'name' => $this->l('Only CMS Pages URL'),
							'value' => 1
						 ),
						 array(
							'name' => $this->l('Only Product Pages URL'),
							'value' => 2
						 ),
						 array(
							'name' => $this->l('Only Category Pages URL'),
							'value' => 3
						 )
						 );
		$frequency = array(
						 array(
							'name' => $this->l('always'),
							'value' => 'always'
						 ),
						 array(
							'name' => $this->l('hourly'),
							'value' => 'hourly'
						 ),
						 array(
							'name' => $this->l('daily'),
							'value' => 'daily'
						 ),
						 array(
							'name' => $this->l('weekly'),
							'value' => 'weekly'
						 ),
						 array(
							'name' => $this->l('monthly'),
							'value' => 'monthly'
						 ),
						 array(
							'name' => $this->l('yearly'),
							'value' => 'yearly'
						 ),
						 array(
							'name' => $this->l('never'),
							'value' => 'never'
						 )
						 );
		$shops = array();
		foreach ($shop_collection as $shop) {
			$each = array(
				'name' => $shop['name'],
				'value' => $shop['id_shop']
			 );
			array_push($shops, $each);
		}
		$this->fields_options = [
            'general' => [
                'title' => $this->l('Current Sitemaps'),
                'info' => $_html,
            ],
			'generate' => [
                'title' => $this->l('Generate New Sitemaps'),
                'fields' => [
                    'sitemap' => [
                        'title' => $this->l('Sitemap to generate:'),
                        'cast' => 'intval',
                        'type' => 'select',
                        'identifier' => 'value',
                        'list' => $sitemap,
                    ],
					'fmm_sitemap_shop' => [
                        'title' => $this->l('Select Shop:'),
                        'cast' => 'intval',
                        'type' => 'select',
                        'identifier' => 'value',
                        'list' => $shops,
                    ],
					'gsitemap_frequency' => [
                        'title' => $this->l('Update Frequency:'),
                        'type' => 'select',
                        'identifier' => 'value',
                        'list' => $frequency,
                    ],
					'opts' => [
                        'title' => $this->l('Select Options:'),
                        'type' => 'opts',
                    ],
					'pages' => [
                        'title' => $this->l('Select Pages you DO NOT want in sitemap.'),
                        'type' => 'pages',
                    ],
                ],
                'submit' => ['title' => $this->l('Generate'),
							 'name' => 'submitGensm'],
            ],
        ];
	}
	
	protected function normalizeDirectory($directory)
	{
		$last = $directory[Tools::strlen($directory) - 1];

		if (in_array($last, array('/', '\\')))
		{
			$directory[Tools::strlen($directory) - 1] = DIRECTORY_SEPARATOR;
			return $directory;
		}

		$directory .= DIRECTORY_SEPARATOR;
		return $directory;
	}

	public function postProcess()
	{
		if (Tools::isSubmit('submitGensm')) {
			$shop = (int)Tools::getValue('fmm_sitemap_shop');
			$images_included_cdn = (int)Tools::getValue('images_included_cdn');
			$images_included_ping_se = (int)Tools::getValue('images_included_ping_se');
			Configuration::updateValue('GSITEMAP_CDN_OPT', $images_included_cdn);
			Configuration::updateValue('GSITEMAP_PING_SE_OPT', $images_included_ping_se);
			Configuration::updateValue('GSITEMAP_FREQUENCY', pSQL(Tools::getValue('gsitemap_frequency')));
			Configuration::updateValue('GSITEMAP_INDEX_CHECK', '');
			Configuration::updateValue('GSITEMAP_CHECK_IMAGE_FILE', pSQL(Tools::getValue('images_included')));
			$type_sitemap = (int)Tools::getValue('sitemap');
			$meta = '';
			if (Tools::getValue('gsitemap_meta')) {
				$meta .= implode(', ', Tools::getValue('gsitemap_meta'));
			}
			Configuration::updateValue('GSITEMAP_DISABLE_LINKS', $meta);
			if ($shop > 0) {
				$this->emptySitemap($shop);
				$this->createSitemap($shop, $type_sitemap);
			}
			else {
				$this->emptySitemap();
				$this->createSitemap(false, $type_sitemap);
			}
		}
		parent::postProcess();
	}

	public function emptySitemap($id_shop = 0)
	{
		if (!isset($this->context))
			$this->context = new Context();
		if ($id_shop != 0)
			$this->context->shop = new Shop((int)$id_shop);
		$links = Db::getInstance()->ExecuteS('SELECT * FROM `'._DB_PREFIX_.'gsitemap_sitemap` WHERE id_shop = '.(int)$this->context->shop->id);
		if ($links)
		{
			foreach ($links as $link)
				@unlink($this->normalizeDirectory(_PS_ROOT_DIR_).$link['link']);

			return Db::getInstance()->Execute('DELETE FROM `'._DB_PREFIX_.'gsitemap_sitemap` WHERE id_shop = '.(int)$this->context->shop->id);
		}

		return true;
	}

	private function _getHomeLink(&$link_sitemap, $lang, &$index, &$i)
	{
		if (Configuration::get('PS_SSL_ENABLED') && Configuration::get('PS_SSL_ENABLED_EVERYWHERE'))
			$protocol = 'https://';
		else
			$protocol = 'http://';

		return $this->_addLinkToSitemap(
			$link_sitemap, array(
				'type' => 'home',
				'page' => 'home',
				'link' => $protocol.Tools::getShopDomainSsl(false).$this->context->shop->getBaseURI().(method_exists('Language', 'isMultiLanguageActivated') ? Language::isMultiLanguageActivated() ? $lang['iso_code'].'/' : '' : ''),
				'image' => false
			), $lang['iso_code'], $index, $i, -1
		);
	}

	private function _getMetaLink(&$link_sitemap, $lang, &$index, &$i, $id_meta = 0)
	{
		if (method_exists('ShopUrl', 'resetMainDomainCache'))
			ShopUrl::resetMainDomainCache();

		if (version_compare(_PS_VERSION_, '1.6', '>='))
			$metas = Db::getInstance()->ExecuteS('SELECT * FROM `'._DB_PREFIX_.'meta` WHERE `configurable` > 0 AND `id_meta` >= '.(int)$id_meta.' ORDER BY `id_meta` ASC');
		else
			$metas = Db::getInstance()->ExecuteS('SELECT * FROM `'._DB_PREFIX_.'meta` WHERE `id_meta` >= '.(int)$id_meta.' ORDER BY `id_meta` ASC');
		foreach ($metas as $meta)
		{
			$url = '';
			if (!in_array($meta['id_meta'], explode(',', Configuration::get('GSITEMAP_DISABLE_LINKS'))))
			{
				$url_rewrite = Db::getInstance()->getValue('SELECT url_rewrite, id_shop FROM `'._DB_PREFIX_.'meta_lang` WHERE `id_meta` = '.(int)$meta['id_meta'].' AND `id_shop` ='.(int)$this->context->shop->id.' AND `id_lang` = '.(int)$lang['id_lang']);
				Dispatcher::getInstance()->addRoute($meta['page'], (isset($url_rewrite) ? $url_rewrite : $meta['page']), $meta['page'], $lang['id_lang']);
				$uri_path = Dispatcher::getInstance()->createUrl($meta['page'], $lang['id_lang'], array(), (bool)Configuration::get('PS_REWRITING_SETTINGS'));
				$url .= Tools::getShopDomainSsl(true).(($this->context->shop->virtual_uri) ? __PS_BASE_URI__.$this->context->shop->virtual_uri : __PS_BASE_URI__).(Language::isMultiLanguageActivated() ? $lang['iso_code'].'/' : '').ltrim($uri_path, '/');

				if (!$this->_addLinkToSitemap(
					$link_sitemap, array(
						'type' => 'meta',
						'page' => $meta['page'],
						'link' => $url,
						'image' => false
					), $lang['iso_code'], $index, $i, $meta['id_meta']
				))
					return false;
			}
		}

		return true;
	}

	private function _getProductLink(&$link_sitemap, $lang, &$index, &$i, $id_product = 0)
	{
		$link = new Link();
		if (method_exists('ShopUrl', 'resetMainDomainCache'))
			ShopUrl::resetMainDomainCache();

		$products_id = Db::getInstance()->executeS('SELECT `id_product` FROM `'._DB_PREFIX_.'product_shop` WHERE `id_product` >= '.(int)$id_product.' AND `active` = 1 AND `id_shop`='.$this->context->shop->id.' ORDER BY `id_product` ASC');

		foreach ($products_id as $product_id)
		{
			$product = new Product((int)$product_id['id_product'], false, (int)$lang['id_lang']);

			$url = $link->getProductLink($product, $product->link_rewrite, htmlspecialchars(strip_tags($product->category)), $product->ean13, (int)$lang['id_lang'], (int)$this->context->shop->id, 0, true);

			$id_image = Product::getCover((int)$product_id['id_product']);
			if (isset($id_image['id_image']))
			{
				$img_type = (Tools::version_compare(_PS_VERSION_, '1.7.0.0', '>=') == true) ? ImageType::getFormattedName('large') : ImageType::getFormatedName('large');
				$image_link = $this->context->link->getImageLink($product->link_rewrite, $product->id.'-'.(int)$id_image['id_image'], $img_type);
				$image_link = (!in_array(rtrim(Context::getContext()->shop->virtual_uri, '/'), explode('/', $image_link))) ? str_replace(
					array(
						'https',
						Context::getContext()->shop->domain.Context::getContext()->shop->physical_uri
					), array(
						'http',
						Context::getContext()->shop->domain.Context::getContext()->shop->physical_uri.Context::getContext()->shop->virtual_uri
					), $image_link
				) : $image_link;
			}
			$file_headers = (Configuration::get('GSITEMAP_CHECK_IMAGE_FILE')) ? @get_headers($image_link) : true;
			$image_product = array();
			if (isset($image_link) && ($file_headers[0] != 'HTTP/1.1 404 Not Found' || $file_headers === true))
				$image_product = array(
					'title_img' => htmlspecialchars(strip_tags($product->name)),
					'caption' => htmlspecialchars(strip_tags($product->description_short)),
					'link' => $image_link
				);
			if (!$this->_addLinkToSitemap(
				$link_sitemap, array(
					'type' => 'product',
					'page' => 'product',
					'lastmod' => $product->date_upd,
					'link' => $url,
					'image' => $image_product
				), $lang['iso_code'], $index, $i, $product_id['id_product']
			))
				return false;

			unset($image_link);
		}

		return true;
	}

	private function _getCategoryLink(&$link_sitemap, $lang, &$index, &$i, $id_category = 0)
	{
		$link = new Link();
		if (method_exists('ShopUrl', 'resetMainDomainCache'))
			ShopUrl::resetMainDomainCache();

		$categories_id = Db::getInstance()->ExecuteS(
			'SELECT c.id_category FROM `'._DB_PREFIX_.'category` c
				INNER JOIN `'._DB_PREFIX_.'category_shop` cs ON c.`id_category` = cs.`id_category`
				WHERE c.`id_category` >= '.(int)$id_category.' AND c.`active` = 1 AND c.`id_category` != 1 AND c.id_parent > 0 AND c.`id_category` > 0 AND cs.`id_shop` = '.(int)$this->context->shop->id.' ORDER BY c.`id_category` ASC'
		);

		foreach ($categories_id as $category_id)
		{
			$category = new Category((int)$category_id['id_category'], (int)$lang['id_lang']);
			$url = $link->getCategoryLink($category, urlencode($category->link_rewrite), (int)$lang['id_lang']);

			if ($category->id_image)
			{
				$img_type = (Tools::version_compare(_PS_VERSION_, '1.7.0.0', '>=') == true) ? ImageType::getFormattedName('category') : ImageType::getFormatedName('category');
				$image_link = $this->context->link->getCatImageLink($category->link_rewrite, (int)$category->id_image, $img_type);
				$image_link = (!in_array(rtrim(Context::getContext()->shop->virtual_uri, '/'), explode('/', $image_link))) ? str_replace(
					array(
						'https',
						Context::getContext()->shop->domain.Context::getContext()->shop->physical_uri
					), array(
						'http',
						Context::getContext()->shop->domain.Context::getContext()->shop->physical_uri.Context::getContext()->shop->virtual_uri
					), $image_link
				) : $image_link;
			}
			$file_headers = (Configuration::get('GSITEMAP_CHECK_IMAGE_FILE')) ? @get_headers($image_link) : true;
			$image_category = array();
			if (isset($image_link) && ($file_headers[0] != 'HTTP/1.1 404 Not Found' || $file_headers === true))
				$image_category = array(
					'title_img' => htmlspecialchars(strip_tags($category->name)),
					'link' => $image_link
				);

			if (!$this->_addLinkToSitemap(
				$link_sitemap, array(
					'type' => 'category',
					'page' => 'category',
					'lastmod' => $category->date_upd,
					'link' => $url,
					'image' => $image_category
				), $lang['iso_code'], $index, $i, (int)$category_id['id_category']
			))
				return false;

			unset($image_link);
		}

		return true;
	}

	private function _getManufacturerLink(&$link_sitemap, $lang, &$index, &$i, $id_manufacturer = 0)
	{
		$link = new Link();
		if (method_exists('ShopUrl', 'resetMainDomainCache'))
			ShopUrl::resetMainDomainCache();
		$manufacturers_id = Db::getInstance()->ExecuteS(
			'SELECT m.`id_manufacturer` FROM `'._DB_PREFIX_.'manufacturer` m
			INNER JOIN `'._DB_PREFIX_.'manufacturer_lang` ml on m.`id_manufacturer` = ml.`id_manufacturer`'.
			($this->tableColumnExists(_DB_PREFIX_.'manufacturer_shop') ? ' INNER JOIN `'._DB_PREFIX_.'manufacturer_shop` ms ON m.`id_manufacturer` = ms.`id_manufacturer` ' : '').
			' WHERE m.`active` = 1  AND m.`id_manufacturer` >= '.(int)$id_manufacturer.
			($this->tableColumnExists(_DB_PREFIX_.'manufacturer_shop') ? ' AND ms.`id_shop` = '.(int)$this->context->shop->id : '').
			' AND ml.`id_lang` = '.(int)$lang['id_lang'].
			' ORDER BY m.`id_manufacturer` ASC'
		);
		foreach ($manufacturers_id as $manufacturer_id)
		{
			$manufacturer = new Manufacturer((int)$manufacturer_id['id_manufacturer'], $lang['id_lang']);
			$url = $link->getManufacturerLink($manufacturer, $manufacturer->link_rewrite, $lang['id_lang']);
			$img_type = (Tools::version_compare(_PS_VERSION_, '1.7.0.0', '>=') == true) ? ImageType::getFormattedName('medium') : ImageType::getFormatedName('medium');
			$image_link = 'http'.(Configuration::get('PS_SSL_ENABLED') && Configuration::get('PS_SSL_ENABLED_EVERYWHERE') ? 's' : '').'://'.Tools::getMediaServer(_THEME_MANU_DIR_)._THEME_MANU_DIR_.((!file_exists(_PS_MANU_IMG_DIR_.'/'.(int)$manufacturer->id.'-'.$img_type.'.jpg')) ? $lang['iso_code'].'-default' : (int)$manufacturer->id).'-'.$img_type.'.jpg';
			$image_link = (!in_array(rtrim(Context::getContext()->shop->virtual_uri, '/'), explode('/', $image_link))) ? str_replace(
				array(
					'https',
					Context::getContext()->shop->domain.Context::getContext()->shop->physical_uri
				), array(
					'http',
					Context::getContext()->shop->domain.Context::getContext()->shop->physical_uri.Context::getContext()->shop->virtual_uri
				), $image_link
			) : $image_link;

			$file_headers = (Configuration::get('GSITEMAP_CHECK_IMAGE_FILE')) ? @get_headers($image_link) : true;
			$manifacturer_image = array();
			if ($file_headers[0] != 'HTTP/1.1 404 Not Found' || $file_headers === true)
				$manifacturer_image = array(
					'title_img' => htmlspecialchars(strip_tags($manufacturer->name)),
					'caption' => htmlspecialchars(strip_tags($manufacturer->short_description)),
					'link' => $image_link
				);
			if (!$this->_addLinkToSitemap(
				$link_sitemap, array(
					'type' => 'manufacturer',
					'page' => 'manufacturer',
					'lastmod' => $manufacturer->date_upd,
					'link' => $url,
					'image' => $manifacturer_image
				), $lang['iso_code'], $index, $i, $manufacturer_id['id_manufacturer']
			))
				return false;
		}

		return true;
	}

	private function _getSupplierLink(&$link_sitemap, $lang, &$index, &$i, $id_supplier = 0)
	{
		$link = new Link();
		if (method_exists('ShopUrl', 'resetMainDomainCache'))
			ShopUrl::resetMainDomainCache();
		$suppliers_id = Db::getInstance()->ExecuteS(
			'SELECT s.`id_supplier` FROM `'._DB_PREFIX_.'supplier` s
			INNER JOIN `'._DB_PREFIX_.'supplier_lang` sl ON s.`id_supplier` = sl.`id_supplier` '.
			($this->tableColumnExists(_DB_PREFIX_.'supplier_shop') ? 'INNER JOIN `'._DB_PREFIX_.'supplier_shop` ss ON s.`id_supplier` = ss.`id_supplier`' : '').'
			WHERE s.`active` = 1 AND s.`id_supplier` >= '.(int)$id_supplier.
			($this->tableColumnExists(_DB_PREFIX_.'supplier_shop') ? ' AND ss.`id_shop` = '.(int)$this->context->shop->id : '').'
			AND sl.`id_lang` = '.(int)$lang['id_lang'].'
			ORDER BY s.`id_supplier` ASC'
		);
		foreach ($suppliers_id as $supplier_id)
		{
			$supplier = new Supplier((int)$supplier_id['id_supplier'], $lang['id_lang']);
			$url = $link->getSupplierLink($supplier, $supplier->link_rewrite, $lang['id_lang']);
			$img_type = (Tools::version_compare(_PS_VERSION_, '1.7.0.0', '>=') == true) ? ImageType::getFormattedName('medium') : ImageType::getFormatedName('medium');
			$image_link = 'http://'.Tools::getMediaServer(_THEME_SUP_DIR_)._THEME_SUP_DIR_.((!file_exists(_THEME_SUP_DIR_.'/'.(int)$supplier->id.'-'.$img_type.'.jpg')) ? $lang['iso_code'].'-default' : (int)$supplier->id).'-'.$img_type.'.jpg';
			$image_link = (!in_array(rtrim(Context::getContext()->shop->virtual_uri, '/'), explode('/', $image_link))) ? str_replace(
				array(
					'https',
					Context::getContext()->shop->domain.Context::getContext()->shop->physical_uri
				), array(
					'http',
					Context::getContext()->shop->domain.Context::getContext()->shop->physical_uri.Context::getContext()->shop->virtual_uri
				), $image_link
			) : $image_link;

			$file_headers = (Configuration::get('GSITEMAP_CHECK_IMAGE_FILE')) ? @get_headers($image_link) : true;
			$supplier_image = array();
			$img_type = (Tools::version_compare(_PS_VERSION_, '1.7.0.0', '>=') == true) ? ImageType::getFormattedName('medium') : ImageType::getFormatedName('medium');
			if ($file_headers[0] != 'HTTP/1.1 404 Not Found' || $file_headers === true)
				$supplier_image = array(
					'title_img' => htmlspecialchars(strip_tags($supplier->name)),
					'link' => 'http'.(Configuration::get('PS_SSL_ENABLED') ? 's' : '').'://'.Tools::getMediaServer(_THEME_SUP_DIR_)._THEME_SUP_DIR_.((!file_exists(_THEME_SUP_DIR_.'/'.(int)$supplier->id.'-'.$img_type.'.jpg')) ? $lang['iso_code'].'-default' : (int)$supplier->id).'-'.$img_type.'.jpg'
				);
			if (!$this->_addLinkToSitemap(
				$link_sitemap, array(
					'type' => 'supplier',
					'page' => 'supplier',
					'lastmod' => $supplier->date_upd,
					'link' => $url,
					'image' => $supplier_image
				), $lang['iso_code'], $index, $i, $supplier_id['id_supplier']
			))
				return false;
		}

		return true;
	}

	private function _getCmsLink(&$link_sitemap, $lang, &$index, &$i, $id_cms = 0)
	{
		$link = new Link();
		if (method_exists('ShopUrl', 'resetMainDomainCache'))
			ShopUrl::resetMainDomainCache();
		$cmss_id = Db::getInstance()->ExecuteS(
			'SELECT c.`id_cms` FROM `'._DB_PREFIX_.'cms` c INNER JOIN `'._DB_PREFIX_.'cms_lang` cl ON c.`id_cms` = cl.`id_cms` '.
			($this->tableColumnExists(_DB_PREFIX_.'supplier_shop') ? 'INNER JOIN `'._DB_PREFIX_.'cms_shop` cs ON c.`id_cms` = cs.`id_cms` ' : '').
			'INNER JOIN `'._DB_PREFIX_.'cms_category` cc ON c.id_cms_category = cc.id_cms_category AND cc.active = 1
				WHERE c.`active` =1 AND c.`indexation` =1 AND c.`id_cms` >= '.(int)$id_cms.
			($this->tableColumnExists(_DB_PREFIX_.'supplier_shop') ? ' AND cs.id_shop = '.(int)$this->context->shop->id : '').
			' AND cl.`id_lang` = '.(int)$lang['id_lang'].
			' ORDER BY c.`id_cms` ASC'
		);

		if (is_array($cmss_id))
			foreach ($cmss_id as $cms_id)
			{
				$cms = new CMS((int)$cms_id['id_cms'], $lang['id_lang']);
				$cms->link_rewrite = urlencode((is_array($cms->link_rewrite) ? $cms->link_rewrite[(int)$lang['id_lang']] : $cms->link_rewrite));
				$url = $link->getCMSLink($cms, null, null, $lang['id_lang']);

				if (!$this->_addLinkToSitemap(
					$link_sitemap, array(
						'type' => 'cms',
						'page' => 'cms',
						'link' => $url,
						'image' => false
					), $lang['iso_code'], $index, $i, $cms_id['id_cms']
				))
					return false;
			}

		return true;
	}

	private function _getModuleLink(&$link_sitemap, $lang, &$index, &$i, $num_link = 0)
	{
		$modules_links = Hook::exec(self::HOOK_ADD_URLS_SM, array('lang' => $lang), null, true);
		if (empty($modules_links) || !is_array($modules_links))
			return true;
		$links = array();
		foreach ($modules_links as $module_links)
			$links = array_merge($links, $module_links);
		foreach ($module_links as $n => $link)
		{
			if ($num_link > $n)
				continue;
			$link['type'] = 'module';
			if (!$this->_addLinkToSitemap($link_sitemap, $link, $lang['iso_code'], $index, $i, $n))
				return false;
		}
		return true;
	}

	public function createSitemap($id_shop = 0, $type_of_sitemap = 0)
	{
		if (@fopen($this->normalizeDirectory(_PS_ROOT_DIR_).'/test.txt', 'w') == false)
		{
			$this->context->smarty->assign('google_maps_error', $this->l('An error occured while trying to check your file permissions. Please adjust your permissions to allow PrestaShop to write a file in your root directory.'));

			return false;
		}
		else {
			@unlink($this->normalizeDirectory(_PS_ROOT_DIR_).'test.txt');
		}

		if ($id_shop != 0) {
			$this->context->shop = new Shop((int)$id_shop);
		}

		$type = Tools::getValue('type') ? Tools::getValue('type') : '';
		$languages = Language::getLanguages(true, $id_shop);
		$lang_stop = Tools::getValue('lang') ? true : false;
		$id_obj = Tools::getValue('id') ? (int)Tools::getValue('id') : 0;
		foreach ($languages as $lang)
		{
			$i = 0;
			$index = (Tools::getValue('index') && Tools::getValue('lang') == $lang['iso_code']) ? (int)Tools::getValue('index') : 0;
			if ($lang_stop && $lang['iso_code'] != Tools::getValue('lang')) {
				continue;
			}
			elseif ($lang_stop && $lang['iso_code'] == Tools::getValue('lang')) {
				$lang_stop = false;
			}
			if ($type_of_sitemap > 0 && $type_of_sitemap == 1) {//only CMS pages
				$this->type_array = array('home', 'cms');
			}
			elseif ($type_of_sitemap > 0 && $type_of_sitemap == 2) {//only product urls
				$this->type_array = array('home', 'product');
			}
			elseif ($type_of_sitemap > 0 && $type_of_sitemap == 3) {//only category urls
				$this->type_array = array('home', 'category');
			}
			$link_sitemap = array();
			foreach ($this->type_array as $type_val)
			{
				if ($type == '' || $type == $type_val)
				{
					$function = '_get'.Tools::ucfirst($type_val).'Link';
					if (!$this->$function($link_sitemap, $lang, $index, $i, $id_obj)) {
						return false;
					}
					$type = '';
					$id_obj = 0;
				}
			}
			$this->_recursiveSitemapCreator($link_sitemap, $lang['iso_code'], $index);

			$index = 0;
		}

		$this->_createIndexSitemap();
		Configuration::updateValue('GSITEMAP_LAST_EXPORT', date('r'));
		$ping_se = (int)Configuration::get('GSITEMAP_PING_SE_OPT');
		if ($ping_se > 0) {
			Tools::file_get_contents('http://www.google.com/webmasters/sitemaps/ping?sitemap='.urlencode('http'.(Configuration::get('PS_SSL_ENABLED') ? 's' : '').'://'.Tools::getShopDomain(false, true).$this->context->shop->physical_uri.$this->context->shop->virtual_uri.$this->context->shop->id.'_index_sitemap.xml'));
			Tools::file_get_contents('https://www.google.com/webmasters/sitemaps/ping?sitemap='.urlencode('http'.(Configuration::get('PS_SSL_ENABLED') ? 's' : '').'://'.Tools::getShopDomain(false, true).$this->context->shop->physical_uri.$this->context->shop->virtual_uri.$this->context->shop->id.'_index_sitemap.xml'));
			Tools::file_get_contents('https://www.bing.com/ping?sitemap='.urlencode('http'.(Configuration::get('PS_SSL_ENABLED') ? 's' : '').'://'.Tools::getShopDomain(false, true).$this->context->shop->physical_uri.$this->context->shop->virtual_uri.$this->context->shop->id.'_index_sitemap.xml'));
		}

		if ($this->cron) {
			die();
		}
	}

	private function _saveSitemapLink($sitemap)
	{
		if ($sitemap)
			return Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'gsitemap_sitemap` (`link`, id_shop) VALUES (\''.pSQL($sitemap).'\', '.(int)$this->context->shop->id.')');

		return false;
	}

	private function _recursiveSitemapCreator($link_sitemap, $lang, &$index)
	{
		if (!count($link_sitemap))
			return false;

		$sitemap_link = $this->context->shop->id.'_'.$lang.'_'.$index.'_sitemap.xml';
		$write_fd = fopen($this->normalizeDirectory(_PS_ROOT_DIR_).$sitemap_link, 'w');

		fwrite($write_fd, '<?xml version="1.0" encoding="UTF-8"?>'."\r\n".'<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">'."\r\n");
		foreach ($link_sitemap as $file)
		{
			fwrite($write_fd, '<url>'."\r\n");
			$lastmod = (isset($file['lastmod']) && !empty($file['lastmod'])) ? date('c', strtotime($file['lastmod'])) : null;
			$this->_addSitemapNode($write_fd, htmlspecialchars(strip_tags($file['link'])), $this->_getPriorityPage($file['page']), Configuration::get('GSITEMAP_FREQUENCY'), $lastmod);
			if ($file['image'])
			{
				$base_protocol = 'http'.(Configuration::get('PS_SSL_ENABLED') ? 's' : '').'://';
				$shop_domain = $base_protocol.Tools::getShopDomain(false, true);
				$cdn_use = (int)Configuration::get('GSITEMAP_CDN_OPT');
				$img_media_file = $base_protocol.Tools::getMediaServer($file['image']['link']);
				
				if ($cdn_use > 0) {
					$img_cdn_file = str_replace($shop_domain, $img_media_file, $file['image']['link']);
					$this->_addSitemapNodeImage(
						$write_fd, htmlspecialchars(strip_tags($img_cdn_file)), isset($file['image']['title_img']) ? htmlspecialchars(
							str_replace(
								array(
									"\r\n",
									"\r",
									"\n"
								), '', strip_tags($file['image']['title_img'])
							)
						) : '', isset($file['image']['caption']) ? htmlspecialchars(
							str_replace(
								array(
									"\r\n",
									"\r",
									"\n"
								), '', strip_tags($file['image']['caption'])
							)
						) : ''
					);
				}
				else {
					$this->_addSitemapNodeImage(
						$write_fd, htmlspecialchars(strip_tags($file['image']['link'])), isset($file['image']['title_img']) ? htmlspecialchars(
							str_replace(
								array(
									"\r\n",
									"\r",
									"\n"
								), '', strip_tags($file['image']['title_img'])
							)
						) : '', isset($file['image']['caption']) ? htmlspecialchars(
							str_replace(
								array(
									"\r\n",
									"\r",
									"\n"
								), '', strip_tags($file['image']['caption'])
							)
						) : ''
					);
				}
			}
			fwrite($write_fd, '</url>'."\r\n");
		}
		fwrite($write_fd, '</urlset>'."\r\n");
		fclose($write_fd);
		$this->_saveSitemapLink($sitemap_link);
		$index++;

		return true;
	}

	private function _getPriorityPage($page)
	{
		return Configuration::get('GSITEMAP_PRIORITY_'.Tools::strtoupper($page)) ? Configuration::get('GSITEMAP_PRIORITY_'.Tools::strtoupper($page)) : 0.1;
	}

	private function _addSitemapNode($fd, $loc, $priority, $change_freq, $last_mod = null)
	{
		fwrite($fd, '<loc>'.(Configuration::get('PS_REWRITING_SETTINGS') ? '<![CDATA['.$loc.']]>' : $loc).'</loc>'."\r\n".'<priority>'.number_format($priority, 1, '.', '').'</priority>'."\r\n".($last_mod ? '<lastmod>'.date('c', strtotime($last_mod)).'</lastmod>' : '')."\r\n".'<changefreq>'.$change_freq.'</changefreq>'."\r\n");
	}

	private function _addSitemapNodeImage($fd, $link, $title, $caption)
	{
		fwrite($fd, '<image:image>'."\r\n".'<image:loc>'.(Configuration::get('PS_REWRITING_SETTINGS') ? '<![CDATA['.$link.']]>' : $link).'</image:loc>'."\r\n".'<image:caption><![CDATA['.$caption.']]></image:caption>'."\r\n".'<image:title><![CDATA['.$title.']]></image:title>'."\r\n".'</image:image>'."\r\n");
	}

	private function _createIndexSitemap()
	{
		$sitemaps = Db::getInstance()->ExecuteS('SELECT `link` FROM `'._DB_PREFIX_.'gsitemap_sitemap` WHERE id_shop = '.$this->context->shop->id);
		if (!$sitemaps)
			return false;

		$xml = '<?xml version="1.0" encoding="UTF-8"?><sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></sitemapindex>';
		$xml_feed = new SimpleXMLElement($xml);

		foreach ($sitemaps as $link)
		{
			$sitemap = $xml_feed->addChild('sitemap');
			$sitemap->addChild('loc', 'http'.(Configuration::get('PS_SSL_ENABLED') && Configuration::get('PS_SSL_ENABLED_EVERYWHERE') ? 's' : '').'://'.Tools::getShopDomain(false, true).__PS_BASE_URI__.$link['link']);
			$sitemap->addChild('lastmod', date('c'));
		}
		file_put_contents($this->normalizeDirectory(_PS_ROOT_DIR_).$this->context->shop->id.'_index_sitemap.xml', $xml_feed->asXML());

		return true;
	}

	private function tableColumnExists($table_name, $column = null)
	{
		if (array_key_exists($table_name, $this->sql_checks))
			if (!empty($column) && array_key_exists($column, $this->sql_checks[$table_name]))
				return $this->sql_checks[$table_name][$column];
			else
				return $this->sql_checks[$table_name];

		$table = Db::getInstance()->ExecuteS('SHOW TABLES LIKE \''.$table_name.'\'');
		if (empty($column))
			if (count($table) < 1)
				return $this->sql_checks[$table_name] = false;
			else
				$this->sql_checks[$table_name] = true;

		else
		{
			$table = Db::getInstance()->ExecuteS('SELECT * FROM `'.$table_name.'` LIMIT 1');

			return $this->sql_checks[$table_name][$column] = array_key_exists($column, current($table));
		}

		return true;
	}

	public function _addLinkToSitemap(&$link_sitemap, $new_link, $lang, &$index, &$i)
	{
		if ($i <= 25000 && memory_get_usage() < 100000000)
		{
			$link_sitemap[] = $new_link;
			$i++;

			return true;
		}
		else
		{
			$this->_recursiveSitemapCreator($link_sitemap, $lang, $index);
		}
	}
	
	public function getSitemapRaw()
	{
		return Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'gsitemap_sitemap`');
	}
}


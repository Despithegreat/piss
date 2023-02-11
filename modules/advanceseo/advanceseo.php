<?php
/**
 * AdvanceSeo
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @author    FMM Modules
 * @copyright Copyright 2021 © FMM Modules
 * @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 * @category  FMM Modules
 * @package   AdvanceSeo
*/

if (!defined('_PS_VERSION_'))
	exit;
if (!defined('_MYSQL_ENGINE_'))
	define('_MYSQL_ENGINE_', 'MyISAM'); 
include_once(dirname(__FILE__).'/model/SeoInternalLinkingModel.php');
class AdvanceSeo extends Module {
	const HOOK_ADD_URLS_SM = 'SitemapAppendUrls';

	public function __construct()
	{
		$this->name = 'advanceseo';
		$this->tab = 'seo';
		$this->version = '2.4.3';
		$this->author = 'FMM Modules';
		$this->displayName = $this->l('Advance SEO');
		$this->description = $this->l('Advance SEO Module for PrestaShop');
		$this->module_key = '195ac542acd4ad04a3d2fff3937194d1';
		$this->author_address = '0xcC5e76A6182fa47eD831E43d80Cd0985a14BB095';
		$this->bootstrap = true;
		$this->tabClass = 'AdminAdvanceSeo';
		parent::__construct();
	}

	public function install()
	{
		$this->installConfiguration();
		return parent::install()
		&& $this->registerHook('header')
		&& $this->registerHook('displayBackOfficeHeader')
		&& $this->registerHook('displayIndexFollow')
		&& $this->registerHook('displayAdminProductsExtra')
		&& $this->registerHook('actionProductUpdate')
		&& $this->registerHook('filterCategoryContent')
		&& $this->registerHook('filterCmsContent')
		&& $this->registerHook('displayTop')
		&& $this->installDb()
		&& $this->_installSitemapHook()
		&& $this->overridePs17()
		&& $this->installTab();
	}

	private function _installSitemapHook()
	{
		$hook = new Hook();
		$hook->name = self::HOOK_ADD_URLS_SM;
		$hook->title = 'Append URLs';
		$hook->description = 'This hook allows a module to add URLs to a generated sitemap';
		$hook->position = true;
		return $hook->save();
	}
	
	public function uninstall()
	{
		if (!parent::uninstall())
			return false;
		$this->uninstallTab();
		$hook = new Hook(Hook::getIdByName(self::HOOK_ADD_URLS_SM));
		if (Validate::isLoadedObject($hook))
			$hook->delete();
		$this->dropDatabase();
		$this->putDefaultPs17();
		return true;
	}

	private function installDb()
	{
		Db::getInstance()->execute('CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'gsitemap_sitemap` (`link` varchar(255) DEFAULT NULL, `id_shop` int(11) DEFAULT 0) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;');
		Db::getInstance()->execute('CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'redirects` (
				`id_redirects` int(10) NOT NULL auto_increment,
				`type` int(10) NOT NULL,
				`url_from` varchar(255) NOT NULL,
				`url_to` varchar(500) NOT NULL,
				PRIMARY KEY (`id_redirects`))');
		Db::getInstance()->execute('CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'indexfollow` (
				`id_indexfollow` int(10) NOT NULL auto_increment,
				`page_type` varchar(255) NOT NULL,
				`id` int(10) NOT NULL,
				`index` int(10) NOT NULL,
				`follow` int(10) NOT NULL,
				PRIMARY KEY (`id_indexfollow`))');
		Db::getInstance()->execute('CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'seointernallinking` (
				`id_seointernallinking` int(10) NOT NULL auto_increment,
				`target` int(10) NOT NULL DEFAULT 0,
				`color` varchar(255) NOT NULL,
				`rel` int(10) NOT NULL DEFAULT 0,
				`replacements` int(10) NOT NULL DEFAULT 0,
				`types` varchar(255) NOT NULL,
				`active` int(10) unsigned NOT NULL,
				PRIMARY KEY (`id_seointernallinking`))');
		Db::getInstance()->execute('CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'seointernallinking_shop` (
                    `id_seointernallinking` int(10) NOT NULL,
                    `id_shop` int(10) NOT NULL,
                    PRIMARY KEY (`id_seointernallinking`, `id_shop`),
                    KEY `id_shop` (`id_shop`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;');
		Db::getInstance()->execute('CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'seointernallinking_lang` (
                    `id_seointernallinking` int(10) NOT NULL,
                    `id_lang` int(10) NOT NULL,
					`title` varchar(255) NOT NULL,
					`url` varchar(255) NOT NULL,
					`keywords` text,
                    PRIMARY KEY (`id_seointernallinking`, `id_lang`),
                    KEY `id_shop` (`id_lang`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;');
		return true;
	}

	private function dropDatabase()
	{
		return (Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'redirects`')
				&& Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'indexfollow`')
				&& Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'seointernallinking`')
				&& Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'seointernallinking_shop`')
				&& Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'seointernallinking_lang`')
				&& $this->clearHtaccessFile());
	}

	public function clearHtaccessFile()
	{
		$path = _PS_ROOT_DIR_.'/.htaccess';
		$content = Tools::file_get_contents($path);
		if (preg_match('#^(.*)\#begin_redirects.*\#end_redirects[^\n]*(.*)$#s', $content, $m))
		{
			if ($write_fd = @fopen($path, 'w'))
			{
				fwrite($write_fd, $m[1]);
				fclose($write_fd);
			}
		}
		return true;
	}

	private function installTab()
	{
		$tab = new Tab();
		$tab->class_name = $this->tabClass;
		$tab->id_parent = 0;
		$tab->module = $this->name;
		$tab->name[(int)(Configuration::get('PS_LANG_DEFAULT'))] = $this->l('Advance SEO');
		$tab->add();

		$subtab00 = new Tab();
		$subtab00->class_name = 'AdminAdvSeoConfig';
		$subtab00->id_parent = Tab::getIdFromClassName($this->tabClass);
		$subtab00->module = $this->name;
		$subtab00->name[(int)(Configuration::get('PS_LANG_DEFAULT'))] = $this->l('SEO Configuration');
		$subtab00->add();
		
		$subtab01 = new Tab();
		$subtab01->class_name = 'AdminAdvSeoExternalLinks';
		$subtab01->id_parent = Tab::getIdFromClassName($this->tabClass);
		$subtab01->module = $this->name;
		$subtab01->name[(int)(Configuration::get('PS_LANG_DEFAULT'))] = $this->l('External Links Nofollow');
		$subtab01->add();
		
		$subtab02 = new Tab();
		$subtab02->class_name = 'AdminInternalLinking';
		$subtab02->id_parent = Tab::getIdFromClassName($this->tabClass);
		$subtab02->module = $this->name;
		$subtab02->name[(int)(Configuration::get('PS_LANG_DEFAULT'))] = $this->l('SEO Internal Linking');
		$subtab02->add();
		
		$subtab = new Tab();
		$subtab->class_name = 'AdminSitemapGen';
		$subtab->id_parent = Tab::getIdFromClassName($this->tabClass);
		$subtab->module = $this->name;
		$subtab->name[(int)(Configuration::get('PS_LANG_DEFAULT'))] = $this->l('Sitemap Generator');
		$subtab->add();

		$subtab2 = new Tab();
		$subtab2->class_name = 'AdminRobotsGen';
		$subtab2->id_parent = Tab::getIdFromClassName($this->tabClass);
		$subtab2->module = $this->name;
		$subtab2->name[(int)(Configuration::get('PS_LANG_DEFAULT'))] = $this->l('Robots Generator');
		$subtab2->add();

		$subtab3 = new Tab();
		$subtab3->class_name = 'AdminUrlRedirects';
		$subtab3->id_parent = Tab::getIdFromClassName($this->tabClass);
		$subtab3->module = $this->name;
		$subtab3->name[(int)(Configuration::get('PS_LANG_DEFAULT'))] = $this->l('Manage Redirects');
		$subtab3->add();
		
		$subtab4 = new Tab();
		$subtab4->class_name = 'AdminIndexFollow';
		$subtab4->id_parent = Tab::getIdFromClassName($this->tabClass);
		$subtab4->module = $this->name;
		$subtab4->name[(int)(Configuration::get('PS_LANG_DEFAULT'))] = $this->l('Manage Index-Follow');
		$subtab4->add();
		
		$subtab5 = new Tab();
		$subtab5->class_name = 'AdminSocialTags';
		$subtab5->id_parent = Tab::getIdFromClassName($this->tabClass);
		$subtab5->module = $this->name;
		$subtab5->name[(int)(Configuration::get('PS_LANG_DEFAULT'))] = $this->l('Manage Social Tags');
		$subtab5->add();
		return true;
	}

	private function overridePs17()
	{
		if (Tools::version_compare(_PS_VERSION_, '1.7.0.0', '>=') == true) {
			if (file_exists(_PS_ROOT_DIR_.'/themes/'._THEME_NAME_.'/templates/_partials/head.tpl'))
				rename(_PS_ROOT_DIR_.'/themes/'._THEME_NAME_.'/templates/_partials/head.tpl', _PS_ROOT_DIR_.'/themes/'._THEME_NAME_.'/templates/_partials/fmm_head.tpl');
			Tools::copy(_PS_MODULE_DIR_.'advanceseo/views/templates/front/head.tpl', _PS_ROOT_DIR_.'/themes/'._THEME_NAME_.'/templates/_partials/head.tpl');
		}
		if (Tools::version_compare(_PS_VERSION_, '1.7.0.0', '<') == true) {
            Tools::copy(_PS_MODULE_DIR_.'advanceseo/includes/CmsController.php', _PS_OVERRIDE_DIR_.'controllers/front/CmsController.php');
            if (file_exists(_PS_CACHE_DIR_.'class_index.php')) {
                rename(_PS_CACHE_DIR_.'class_index.php', _PS_CACHE_DIR_.'class_index'.rand(pow(10, 3 - 1), pow(10, 3) - 1).'.php');
            }
        }
		return true;
	}
	
	private function putDefaultPs17()
	{
		if (Tools::version_compare(_PS_VERSION_, '1.7.0.0', '>=') == true)
		{
			if (file_exists(_PS_ROOT_DIR_.'/themes/'._THEME_NAME_.'/templates/_partials/head.tpl'))
				unlink(_PS_ROOT_DIR_.'/themes/'._THEME_NAME_.'/templates/_partials/head.tpl');
			rename(_PS_ROOT_DIR_.'/themes/'._THEME_NAME_.'/templates/_partials/fmm_head.tpl', _PS_ROOT_DIR_.'/themes/'._THEME_NAME_.'/templates/_partials/head.tpl');
		}
		if (Tools::version_compare(_PS_VERSION_, '1.7.0.0', '<') == true) {
            unlink(_PS_OVERRIDE_DIR_.'controllers/front/CmsController.php');
        }
		return true;
	}
	
	public function uninstallTab()
	{
		$id_tab = (int)Tab::getIdFromClassName('AdminAdvanceSeo');
		if ($id_tab) {
			$tab = new Tab($id_tab);
			return $tab->delete();
		}
		else {
			return true;
		}
	}

	public function getContent()
	{
		$this->_html = '';
		$this->errors = '';
		$languages = Language::getLanguages(true);
		$tab_module = Tools::getValue('tab_module');
		if (empty($tab_module) || !$tab_module) {
			$tab_module = 0;
		}
		$this->smarty->assign(
                array(
                    '__html' => $this->_html,
					'tab_module' => $tab_module,
					'__errors' => $this->errors
                )
            );
		$this->postProcess();
		if (Tools::isSubmit('submitConfigurationHome') || Tools::isSubmit('submitConfigurationCat') || Tools::isSubmit('submitConfigurationPrd')
			|| Tools::isSubmit('submitConfigurationCms') || Tools::isSubmit('submitConfigurationGoogleSocial') ||
			Tools::isSubmit('submitConfigurationGooglePage') || Tools::isSubmit('submitConfigurationFav') || Tools::isSubmit('submitConfigurationKeys')) {
			 $this->_html .= $this->displayConfirmation($this->l('The settings have been updated.'));
		}
		$this->smarty->assign(
                array(
                    '__html' => $this->_html,
					'tab_module' => $tab_module,
					'__errors' => $this->errors
                )
            );
		return $this->_displayForm();
	}
	
	protected function postProcess()
    {
		if (Tools::isSubmit('submitConfigurationHome') || Tools::isSubmit('submitConfigurationCat') || Tools::isSubmit('submitConfigurationPrd')
			|| Tools::isSubmit('submitConfigurationCms') || Tools::isSubmit('submitConfigurationGoogleSocial') || Tools::isSubmit('submitConfigurationGooglePage')
			|| Tools::isSubmit('submitConfigurationFav') || Tools::isSubmit('submitConfigurationKeys')) {
			$FME_DEFAULT_HOME_TITLE 			= Tools::getValue('FME_DEFAULT_HOME_TITLE', Configuration::get('FME_DEFAULT_HOME_TITLE'));
			$FME_DEFAULT_HOME_DESCRIPTION		= Tools::getValue('FME_DEFAULT_HOME_DESCRIPTION', Configuration::get('FME_DEFAULT_HOME_DESCRIPTION'));
			$FME_DEFAULT_HOME_KEYWORDS			= Tools::getValue('FME_DEFAULT_HOME_KEYWORDS', Configuration::get('FME_DEFAULT_HOME_KEYWORDS'));
			
			$FME_DEFAULT_PRODUCT_TITLE 			= Tools::getValue('FME_DEFAULT_PRODUCT_TITLE');
			$FME_DEFAULT_PRODUCT_DESCRIPTION	= Tools::getValue('FME_DEFAULT_PRODUCT_DESCRIPTION');
			$FME_DEFAULT_PRODUCT_KEYWORDS		= Tools::getValue('FME_DEFAULT_PRODUCT_KEYWORDS');
			//$FME_PRODUCT_META_TITLE				= Tools::getValue('FME_PRODUCT_META_TITLE');
			
			$FME_DEFAULT_CATEGORY_TITLE 		= Tools::getValue('FME_DEFAULT_CATEGORY_TITLE');
			$FME_DEFAULT_CATEGORY_DESCRIPTION	= Tools::getValue('FME_DEFAULT_CATEGORY_DESCRIPTION');
			$FME_DEFAULT_CATEGORY_KEYWORDS		= Tools::getValue('FME_DEFAULT_CATEGORY_KEYWORDS');
			//$FME_CATEGORY_META_TITLE			= Tools::getValue('FME_CATEGORY_META_TITLE');
			
			$FME_DEFAULT_CMS_TITLE 				= Tools::getValue('FME_DEFAULT_CMS_TITLE');
			$FME_DEFAULT_CMS_DESCRIPTION		= Tools::getValue('FME_DEFAULT_CMS_DESCRIPTION');
			$FME_DEFAULT_CMS_KEYWORDS			= Tools::getValue('FME_DEFAULT_CMS_KEYWORDS');
			//$FME_CMS_META_TITLE					= Tools::getValue('FME_CMS_META_TITLE');
			
			$FME_SINGLE_MIN_LENGTH 				= Tools::getValue('FME_SINGLE_MIN_LENGTH');
			$FME_SINGLE_MIN_OCCUR				= Tools::getValue('FME_SINGLE_MIN_OCCUR');
			$FME_2WORDS_MIN_LENGTH				= Tools::getValue('FME_2WORDS_MIN_LENGTH');
			$FME_2WORDS_MIN_PHRASE_LENGTH		= Tools::getValue('FME_2WORDS_MIN_PHRASE_LENGTH');
			$FME_2WORDS_MIN_PHRASE_OCCUR 		= Tools::getValue('FME_2WORDS_MIN_PHRASE_OCCUR');
			$FME_3WORDS_MIN_LENGTH				= Tools::getValue('FME_3WORDS_MIN_LENGTH');
			$FME_3WORDS_MIN_PHRASE_LENGTH		= Tools::getValue('FME_3WORDS_MIN_PHRASE_LENGTH');
			$FME_3WORDS_MIN_PHRASE_OCCUR		= Tools::getValue('FME_3WORDS_MIN_PHRASE_OCCUR');
			if (Tools::isSubmit('submitConfigurationGoogleSocial')) {
				Configuration::updateValue('GOOGLE_SOCIAL_PROF', (int)Tools::getValue('GOOGLE_SOCIAL_PROF'));
				Configuration::updateValue('GOOGLE_SOCIAL_LOGO', Tools::getValue('GOOGLE_SOCIAL_LOGO'));
				Configuration::updateValue('GOOGLE_SOCIAL_PHONE', Tools::getValue('GOOGLE_SOCIAL_PHONE'));
				Configuration::updateValue('GOOGLE_SOCIAL_FB', Tools::getValue('GOOGLE_SOCIAL_FB'));
				Configuration::updateValue('GOOGLE_SOCIAL_TW', Tools::getValue('GOOGLE_SOCIAL_TW'));
				Configuration::updateValue('GOOGLE_SOCIAL_INS', Tools::getValue('GOOGLE_SOCIAL_INS'));
				Configuration::updateValue('GOOGLE_SOCIAL_GPLUS', Tools::getValue('GOOGLE_SOCIAL_GPLUS'));
				Configuration::updateValue('GOOGLE_SOCIAL_LIN', Tools::getValue('GOOGLE_SOCIAL_LIN'));
				Configuration::updateValue('GOOGLE_SOCIAL_YT', Tools::getValue('GOOGLE_SOCIAL_YT'));
			}
			if (Tools::isSubmit('submitConfigurationGooglePage')) {
				Configuration::updateValue('GOOGLE_SN', (int)Tools::getValue('GOOGLE_SN'));
				Configuration::updateValue('GOOGLE_SB', (int)Tools::getValue('GOOGLE_SB'));
				Configuration::updateValue('GOOGLE_SN_NAME', Tools::getValue('GOOGLE_SN_NAME'));
				Configuration::updateValue('GOOGLE_SN_ALT', Tools::getValue('GOOGLE_SN_ALT'));
			}
			if (Tools::isSubmit('submitConfigurationHome')) {
				Configuration::updateValue('FME_DEFAULT_HOME_TITLE', $FME_DEFAULT_HOME_TITLE);
				Configuration::updateValue('FME_DEFAULT_HOME_DESCRIPTION', $FME_DEFAULT_HOME_DESCRIPTION);
				Configuration::updateValue('FME_DEFAULT_HOME_KEYWORDS', $FME_DEFAULT_HOME_KEYWORDS);
			}
			
			if (Tools::isSubmit('submitConfigurationPrd')) {
				Configuration::updateValue('FME_DEFAULT_PRODUCT_TITLE', $FME_DEFAULT_PRODUCT_TITLE);
				Configuration::updateValue('FME_DEFAULT_PRODUCT_DESCRIPTION', $FME_DEFAULT_PRODUCT_DESCRIPTION);
			}
			//Configuration::updateValue('FME_PRODUCT_META_TITLE', $FME_PRODUCT_META_TITLE);
			if (Tools::isSubmit('submitConfigurationCat')) {
				Configuration::updateValue('FME_DEFAULT_CATEGORY_TITLE', $FME_DEFAULT_CATEGORY_TITLE);
				Configuration::updateValue('FME_DEFAULT_CATEGORY_DESCRIPTION', $FME_DEFAULT_CATEGORY_DESCRIPTION);
			}
			//Configuration::updateValue('FME_CATEGORY_META_TITLE', $FME_CATEGORY_META_TITLE);
			if (Tools::isSubmit('submitConfigurationCms')) {
				Configuration::updateValue('FME_DEFAULT_CMS_TITLE', $FME_DEFAULT_CMS_TITLE);
				Configuration::updateValue('FME_DEFAULT_CMS_DESCRIPTION', $FME_DEFAULT_CMS_DESCRIPTION);
			}
			if (Tools::isSubmit('submitConfigurationFav')) {
				$this->updateOptionPsFavicon();
			}

			if (Tools::isSubmit('submitConfigurationKeys')) {
				Configuration::updateValue('FME_SINGLE_MIN_LENGTH', $FME_SINGLE_MIN_LENGTH);
				Configuration::updateValue('FME_SINGLE_MIN_OCCUR', $FME_SINGLE_MIN_OCCUR);
				Configuration::updateValue('FME_2WORDS_MIN_LENGTH', $FME_2WORDS_MIN_LENGTH);
				Configuration::updateValue('FME_2WORDS_MIN_PHRASE_LENGTH', $FME_2WORDS_MIN_PHRASE_LENGTH);
				Configuration::updateValue('FME_2WORDS_MIN_PHRASE_OCCUR', $FME_2WORDS_MIN_PHRASE_OCCUR);
				Configuration::updateValue('FME_3WORDS_MIN_LENGTH', $FME_3WORDS_MIN_LENGTH);
				Configuration::updateValue('FME_3WORDS_MIN_PHRASE_LENGTH', $FME_3WORDS_MIN_PHRASE_LENGTH);
				Configuration::updateValue('FME_3WORDS_MIN_PHRASE_OCCUR', $FME_3WORDS_MIN_PHRASE_OCCUR);
				Configuration::updateValue('FME_DEFAULT_PRODUCT_KEYWORDS', $FME_DEFAULT_PRODUCT_KEYWORDS);
				Configuration::updateValue('FME_DEFAULT_CATEGORY_KEYWORDS', $FME_DEFAULT_CATEGORY_KEYWORDS);
				Configuration::updateValue('FME_DEFAULT_CMS_KEYWORDS', $FME_DEFAULT_CMS_KEYWORDS);
			}
			$values = array();
			$languages = Language::getLanguages(false);
			//Multi-lang fields
			foreach ($languages as $lang) {
				$values['FME_HOME_META_TITLE'][$lang['id_lang']] = Tools::getValue('FME_HOME_META_TITLE_'.$lang['id_lang'], Configuration::get('FME_HOME_META_TITLE', $lang['id_lang']));
				$values['FME_HOME_META_DESCRIPTION'][$lang['id_lang']] = Tools::getValue('FME_HOME_META_DESCRIPTION_'.$lang['id_lang'], Configuration::get('FME_HOME_META_DESCRIPTION', $lang['id_lang']));
				$values['FME_HOME_META_KEYWORDS'][$lang['id_lang']] = Tools::getValue('FME_HOME_META_KEYWORDS_'.$lang['id_lang'], Configuration::get('FME_HOME_META_KEYWORDS', $lang['id_lang']));
				$values['FME_CATEGORY_META_TITLE'][$lang['id_lang']] = Tools::getValue('FME_CATEGORY_META_TITLE_'.$lang['id_lang'], Configuration::get('FME_CATEGORY_META_TITLE', $lang['id_lang']));
				$values['FME_CATEGORY_META_DESCRIPTION'][$lang['id_lang']] = Tools::getValue('FME_CATEGORY_META_DESCRIPTION_'.$lang['id_lang'], Configuration::get('FME_CATEGORY_META_DESCRIPTION', $lang['id_lang']));
				$values['FME_PRODUCT_META_TITLE'][$lang['id_lang']] = Tools::getValue('FME_PRODUCT_META_TITLE_'.$lang['id_lang'], Configuration::get('FME_PRODUCT_META_TITLE', $lang['id_lang']));
				$values['FME_PRODUCT_META_DESCRIPTION'][$lang['id_lang']] = Tools::getValue('FME_PRODUCT_META_DESCRIPTION_'.$lang['id_lang'], Configuration::get('FME_PRODUCT_META_TITLE', $lang['id_lang']));
				$values['FME_CMS_META_TITLE'][$lang['id_lang']] = Tools::getValue('FME_CMS_META_TITLE_'.$lang['id_lang'], Configuration::get('FME_CMS_META_TITLE', $lang['id_lang']));
				$values['FME_CMS_META_DESCRIPTION'][$lang['id_lang']] = Tools::getValue('FME_CMS_META_DESCRIPTION_'.$lang['id_lang'], Configuration::get('FME_CMS_META_DESCRIPTION', $lang['id_lang']));
			}
			Configuration::updateValue('FME_HOME_META_TITLE', $values['FME_HOME_META_TITLE']);
			Configuration::updateValue('FME_HOME_META_DESCRIPTION', $values['FME_HOME_META_DESCRIPTION']);
			Configuration::updateValue('FME_HOME_META_KEYWORDS', $values['FME_HOME_META_KEYWORDS']);
			Configuration::updateValue('FME_PRODUCT_META_TITLE', $values['FME_PRODUCT_META_TITLE']);
			Configuration::updateValue('FME_CATEGORY_META_TITLE', $values['FME_CATEGORY_META_TITLE']);
			Configuration::updateValue('FME_CMS_META_TITLE', $values['FME_CMS_META_TITLE']);
			Configuration::updateValue('FME_PRODUCT_META_DESCRIPTION', $values['FME_PRODUCT_META_DESCRIPTION']);
			Configuration::updateValue('FME_CATEGORY_META_DESCRIPTION', $values['FME_CATEGORY_META_DESCRIPTION']);
			Configuration::updateValue('FME_CMS_META_DESCRIPTION', $values['FME_CMS_META_DESCRIPTION']);
			$pretty_urls = Module::isEnabled('prettyurls');
			$FME_PRODUCT_URL_RULE = Tools::getValue('FME_PRODUCT_URL_RULE');
			$FME_PRODUCT_URL_RULE = str_replace(' ', '-', $FME_PRODUCT_URL_RULE);
			if (Tools::isSubmit('submitConfigurationPrd')) {
				if (!empty($FME_PRODUCT_URL_RULE) && !strpos($FME_PRODUCT_URL_RULE, '{id}') && $pretty_urls != true) {
					$this->errors = $this->displayError($this->l('Product URL rule must have {id}'));
					return $this->errors.$this->_displayForm();
				}
				elseif (!empty($FME_PRODUCT_URL_RULE) && !strpos($FME_PRODUCT_URL_RULE, '{rewrite}')) {
					$this->errors = $this->displayError($this->l('Product URL rule must have {rewrite}'));
					return $this->errors.$this->_displayForm();
				}
				elseif (!empty($FME_PRODUCT_URL_RULE) && !strpos($FME_PRODUCT_URL_RULE, 'id_product_attribute') && Tools::version_compare(_PS_VERSION_, '1.7.0.0', '>=') == true && $pretty_urls != true) {
					$this->errors = $this->displayError($this->l('Product URL rule must have {id_product_attribute}'));
					return $this->errors.$this->_displayForm();
				}
				elseif (!empty($FME_PRODUCT_URL_RULE)) {
					Configuration::updateValue('FME_PRODUCT_URL_RULE', $FME_PRODUCT_URL_RULE);
					Configuration::updateValue('PS_ROUTE_product_rule', $FME_PRODUCT_URL_RULE);
				}
			}
		}
	}
	
	public function installConfiguration()
	{
			Configuration::updateValue('FME_DEFAULT_HOME_TITLE', 0);
			Configuration::updateValue('FME_DEFAULT_HOME_DESCRIPTION', 0);
			Configuration::updateValue('FME_DEFAULT_HOME_KEYWORDS', 0);
			Configuration::updateValue('FME_HOME_META_TITLE', '');
			Configuration::updateValue('FME_HOME_META_DESCRIPTION', '');
			Configuration::updateValue('FME_HOME_META_KEYWORDS', '');
			Configuration::updateValue('FME_DEFAULT_PRODUCT_TITLE', 0);
			Configuration::updateValue('FME_DEFAULT_PRODUCT_DESCRIPTION', 0);
			Configuration::updateValue('FME_DEFAULT_PRODUCT_KEYWORDS', 0);
			Configuration::updateValue('FME_PRODUCT_META_TITLE', 'productname - productcategory - shoptitle');
			Configuration::updateValue('FME_DEFAULT_CATEGORY_TITLE', 0);
			Configuration::updateValue('FME_DEFAULT_CATEGORY_DESCRIPTION', 0);
			Configuration::updateValue('FME_DEFAULT_CATEGORY_KEYWORDS', 0);
			Configuration::updateValue('FME_CATEGORY_META_TITLE', 'categoryname - parentcategory - shoptitle');
			Configuration::updateValue('FME_DEFAULT_CMS_TITLE', 0);
			Configuration::updateValue('FME_DEFAULT_CMS_DESCRIPTION', 0);
			Configuration::updateValue('FME_DEFAULT_CMS_KEYWORDS', 0);
			Configuration::updateValue('FME_CMS_META_TITLE', 'pagetitle - shoptitle');
			Configuration::updateValue('FME_SINGLE_MIN_LENGTH', 4);
			Configuration::updateValue('FME_SINGLE_MIN_OCCUR', 3);
			Configuration::updateValue('FME_2WORDS_MIN_LENGTH', 0);
			Configuration::updateValue('FME_2WORDS_MIN_PHRASE_LENGTH', 0);
			Configuration::updateValue('FME_2WORDS_MIN_PHRASE_OCCUR', 0);
			Configuration::updateValue('FME_3WORDS_MIN_LENGTH', 0);
			Configuration::updateValue('FME_3WORDS_MIN_PHRASE_LENGTH', 0);
			Configuration::updateValue('FME_3WORDS_MIN_PHRASE_OCCUR', 0);
			return true;
	}
	
	private function _displayForm()
	{
		$languages = Language::getLanguages(true);
		$required_params = (Tools::version_compare(_PS_VERSION_, '1.7.0.0', '>=') == true) ? '{id},{id_product_attribute},{rewrite}' : '{id},{rewrite}';
		$PRD_URL_RULE = Configuration::get('FME_PRODUCT_URL_RULE');
		$PRD_URL_RULE = (empty($PRD_URL_RULE)) ? Configuration::get('PS_ROUTE_product_rule') : $PRD_URL_RULE;
		$PRD_URL_RULE = (empty($PRD_URL_RULE)) ? '{category:/}{id}{-:id_product_attribute}-{rewrite}{-:ean13}.html' : $PRD_URL_RULE;
		$type = (Tools::version_compare(_PS_VERSION_, '1.7.0.0', '>=') == true) ? 'ps17' : 'ps16';
		$this->context->smarty->assign(array(
											'_ps_ver' => $type,
											 'general_form' => $this->generalFormStart(),
											 'general_form_i' => $this->generalFormOne(),
											 'general_form_ii' => $this->generalFormTwo(),
											 'general_form_iii' => $this->generalFormThree(),
											 'general_form_iv' => $this->generalFormFour(),
											 'google_form_i' => $this->googleFormOne(),
											 'google_form_ii' => $this->googleFormTwo(),
											 'keywords_form_i' => $this->keywordsFormOne(),
											 ));
		return $this->display(__FILE__, 'views/templates/admin/configure.tpl');
	}
	
	public function keywordsFormOne()
    {
		$type = (Tools::version_compare(_PS_VERSION_, '1.6.0.0', '>=') == true) ? 'switch' : 'radio';
		$fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Auto Keywords Generator'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(
					array(
					'type' => $type,
					'label' => $this->l('Generate keywords for Products'),
					'name' => 'FME_DEFAULT_PRODUCT_KEYWORDS',
					'required' => false,
					'is_bool' => true,
					'values' => array(
						array(
							'id' => 'seo_on',
							'value' => 1,
							'label' => $this->l('Yes')
							),
						array(
							'id' => 'seo_off',
							'value' => 0,
							'label' => $this->l('No')
							)
						)
					),
					array(
					'type' => $type,
					'label' => $this->l('Generate keywords for Categories'),
					'name' => 'FME_DEFAULT_CATEGORY_KEYWORDS',
					'required' => false,
					'is_bool' => true,
					'values' => array(
						array(
							'id' => 'seo_on',
							'value' => 1,
							'label' => $this->l('Yes')
							),
						array(
							'id' => 'seo_off',
							'value' => 0,
							'label' => $this->l('No')
							)
						)
					),
					array(
					'type' => $type,
					'label' => $this->l('Generate keywords for CMS Pages'),
					'name' => 'FME_DEFAULT_CMS_KEYWORDS',
					'required' => false,
					'is_bool' => true,
					'values' => array(
						array(
							'id' => 'seo_on',
							'value' => 1,
							'label' => $this->l('Yes')
							),
						array(
							'id' => 'seo_off',
							'value' => 0,
							'label' => $this->l('No')
							)
						)
					),
                    array(
                        'type' => 'text',
                        'lang' => false,
                        'label' => $this->l('Single Word Minimum Length'),
                        'name' => 'FME_SINGLE_MIN_LENGTH',
                        'desc' => $this->l('Minimum length of single words you want to target as keyword. For example the word "butter" length is 6 so if we enter 6 here it will ignore all words whos length is less than 6.')
						.'<br/><span style="color:#25b9d7;">'.$this->l('Recomended value is 3 or 4').'</span>',
                    ),
					array(
                        'type' => 'text',
                        'lang' => false,
                        'label' => $this->l('Single Word Minimum Occurance'),
                        'name' => 'FME_SINGLE_MIN_OCCUR',
                        'desc' => $this->l('Minimum occurance of single words, like for example the word "butter" must repeat X times in descriptions to qualify for keywords.').
						'<br/><span style="color:#25b9d7;">'.$this->l('Recomended value is 1').'</span>',
                    ),
					array(
                        'type' => 'text',
                        'lang' => false,
                        'label' => $this->l('Two Words Minimum Length'),
                        'name' => 'FME_2WORDS_MIN_LENGTH',
                        'desc' => $this->l('Minimum length of two words you want to target as keyword. For example the word "butter knife" length is 12 so if we enter 12 here it will ignore all words whos length is less than 12.')
						.'<br/><span style="color:#25b9d7;">'.$this->l('Recomended value is 8 or 10').'</span>',
                    ),
					array(
                        'type' => 'text',
                        'lang' => false,
                        'label' => $this->l('Two Words Minimum Occurance'),
                        'name' => 'FME_2WORDS_MIN_PHRASE_OCCUR',
                        'desc' => $this->l('Minimum occurance of two words, like for example the word "butter knife" must repeat X times in descriptions to qualify for keywords.').
						'<br/><span style="color:#25b9d7;">'.$this->l('Recomended value is 1').'</span>',
                    ),
					array(
                        'type' => 'text',
                        'lang' => false,
                        'label' => $this->l('Three Words Minimum Length'),
                        'name' => 'FME_3WORDS_MIN_LENGTH',
                        'desc' => $this->l('Minimum length of three words you want to target as keyword. For example the word "buy butter knife" length is 16 so if we enter 16 here it will ignore all words whos length is less than 16.')
						.'<br/><span style="color:#25b9d7;">'.$this->l('Recomended value is 10 or 12').'</span>',
                    ),
					array(
                        'type' => 'text',
                        'lang' => false,
                        'label' => $this->l('Three Words Minimum Occurance'),
                        'name' => 'FME_3WORDS_MIN_PHRASE_OCCUR',
                        'desc' => $this->l('Minimum occurance of three words, like for example the word "buy butter knife" must repeat X times in descriptions to qualify for keywords.').
						'<br/><span style="color:#25b9d7;">'.$this->l('Recomended value is 1').'</span>',
                    ),
                ),
				'description' => 'This generator uses descriptions of products/categories/cms pages to collect all keywords according to the above settings.',
				'warning' => 'You can use Cron Job Link to refresh the meta elements with any frequency you want: <strong>'._PS_BASE_URL_SSL_.__PS_BASE_URI__.'?fc=module&module=advanceseo&controller=cron&action=1&token='.Tools::encrypt($this->name).'</strong>',
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ),
        );
		
		$lang = new Language((int) Configuration::get('PS_LANG_DEFAULT'));
        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->default_form_language = $lang->id;
        $helper->module = $this;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $helper->identifier = 'id_' . $this->table;
        $helper->submit_action = 'submitConfigurationKeys';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false) . '&configure=' . $this->name . '&tab_module=keywords&module_name=' . $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'uri' => $this->getPathUri(),
            'fields_value' => $this->getFormConfigs(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm(array($fields_form));
	}
	
	public function generalFormStart()
    {
		$image_url = _PS_IMG_ . 'favicon.ico';
        //$image_url = ImageManager::thumbnail($image_url, 'favicon.png', 30, 'png', true, false);
		$fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Favicon'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(
                    array(
                        'type' => 'file',
                        'label' => $this->l('Favicon'),
                        'name' => 'PS_FAVICON',
                        'thumb' => $image_url ? $image_url : false,
                        'size' => 300,
                        'hint' => $this->l('Upload an Image type ICO from your computer.'),
                    ),
                ),
				'description' => 'Use this favicon generator on <a href="https://addons.prestashop.com/create-favicon.php?pab=1" target="_blank">PrestaShop Marketplace</a>
				to boost your brand image!',
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ),
        );
		
		$lang = new Language((int) Configuration::get('PS_LANG_DEFAULT'));
        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->default_form_language = $lang->id;
        $helper->module = $this;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $helper->identifier = 'id_' . $this->table;
        $helper->submit_action = 'submitConfigurationFav';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false) . '&configure=' . $this->name . '&tab_module=general&module_name=' . $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'uri' => $this->getPathUri(),
            'fields_value' => $this->getFormConfigs(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm(array($fields_form));
	}
	
	public function updateOptionPsFavicon()
    {
        $id_shop = Context::getContext()->shop->id;
        if ($id_shop == Configuration::get('PS_SHOP_DEFAULT')) {
            $this->uploadIco('PS_FAVICON', _PS_IMG_DIR_.'favicon.ico');
        }
        if ($this->uploadIco('PS_FAVICON', _PS_IMG_DIR_.'favicon-'.(int)$id_shop.'.ico')) {
            Configuration::updateValue('PS_FAVICON', 'favicon-'.(int)$id_shop.'.ico');
        }

        Configuration::updateGlobalValue('PS_FAVICON', 'favicon.ico');
        //Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', false) . '&configure=' . $this->name . '&tab_module=general&module_name=' . $this->name);
    }
	
	protected function uploadIco($name, $dest)
    {
		if (Tools::version_compare(_PS_VERSION_, '1.7.8.0', '<') == true) {
			if (Tools::version_compare(_PS_VERSION_, '1.7.0.0', '>=') == true) {
				$this->errors[] = array();
			}
			else {
				$this->errors = array();
			}
		}
        if (isset($_FILES[$name]['tmp_name']) && !empty($_FILES[$name]['tmp_name'])) {
            // Check ico validity
            if ($error = ImageManager::validateIconUpload($_FILES[$name])) {
                $this->errors[] = $error;
            } elseif (!copy($_FILES[$name]['tmp_name'], $dest)) {
                // Copy new ico
                $this->errors[] = sprintf(Tools::displayError('An error occurred while uploading the favicon: cannot copy file "%s" to folder "%s".'), $_FILES[$name]['tmp_name'], $dest);
            }
        }
		if ($this->errors && !empty($this->errors)) {
			return $this->errors;
		}
		else {
			return true;
		}
    }
	
	public function generalFormOne()
    {
		$type = (Tools::version_compare(_PS_VERSION_, '1.6.0.0', '>=') == true) ? 'switch' : 'radio';
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Home Page SEO'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(
					array(
					'type' => $type,
					'label' => $this->l('Enable Below Title?'),
					'name' => 'FME_DEFAULT_HOME_TITLE',
					'required' => false,
					'is_bool' => true,
					'values' => array(
						array(
							'id' => 'seo_on',
							'value' => 1,
							'label' => $this->l('Yes')
							),
						array(
							'id' => 'seo_off',
							'value' => 0,
							'label' => $this->l('No')
							)
						)
					),
                    array(
                        'type' => 'text',
                        'lang' => true,
                        'label' => $this->l('Home Meta Title'),
                        'name' => 'FME_HOME_META_TITLE',
                        'desc' => $this->l('Please enter a short but meaningful title.'),
                    ),
					array(
					'type' => $type,
					'label' => $this->l('Enable Below Description?'),
					'name' => 'FME_DEFAULT_HOME_DESCRIPTION',
					'required' => false,
					'is_bool' => true,
					'values' => array(
						array(
							'id' => 'seo_on',
							'value' => 1,
							'label' => $this->l('Yes')
							),
						array(
							'id' => 'seo_off',
							'value' => 0,
							'label' => $this->l('No')
							)
						)
					),
                    array(
                        'type' => 'text',
                        'lang' => true,
                        'label' => $this->l('Home Meta Description'),
                        'name' => 'FME_HOME_META_DESCRIPTION',
                        'desc' => $this->l('Please enter a short but meaningful description.'),
                    ),
					array(
					'type' => $type,
					'label' => $this->l('Enable Below Keywords?'),
					'name' => 'FME_DEFAULT_HOME_KEYWORDS',
					'required' => false,
					'is_bool' => true,
					'values' => array(
						array(
							'id' => 'seo_on',
							'value' => 1,
							'label' => $this->l('Yes')
							),
						array(
							'id' => 'seo_off',
							'value' => 0,
							'label' => $this->l('No')
							)
						)
					),
                    array(
                        'type' => 'text',
                        'lang' => true,
                        'label' => $this->l('Home Meta Keywords'),
                        'name' => 'FME_HOME_META_KEYWORDS',
                        'desc' => $this->l('Please enter keywords separated by comma , .'),
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ),
        );

        $lang = new Language((int) Configuration::get('PS_LANG_DEFAULT'));

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->default_form_language = $lang->id;
        $helper->module = $this;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $helper->identifier = 'id_' . $this->table;
        $helper->submit_action = 'submitConfigurationHome';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false) . '&configure=' . $this->name . '&tab_module=general&module_name=' . $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'uri' => $this->getPathUri(),
            'fields_value' => $this->getFormConfigs(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm(array($fields_form));
    }
	
	public function generalFormTwo()
    {
		$type = (Tools::version_compare(_PS_VERSION_, '1.6.0.0', '>=') == true) ? 'switch' : 'radio';
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Category Page SEO'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(
					array(
					'type' => $type,
					'label' => $this->l('Enable Below Title?'),
					'name' => 'FME_DEFAULT_CATEGORY_TITLE',
					'required' => false,
					'is_bool' => true,
					'values' => array(
						array(
							'id' => 'seo_on',
							'value' => 1,
							'label' => $this->l('Yes')
							),
						array(
							'id' => 'seo_off',
							'value' => 0,
							'label' => $this->l('No')
							)
						)
					),
                    array(
                        'type' => 'text',
                        'lang' => true,
                        'label' => $this->l('Category Meta Title'),
                        'name' => 'FME_CATEGORY_META_TITLE',
                        'desc' => $this->l('Any text of your choice with these keywords can be used: ').'<a href="javascript:void(0);" onclick="appendThisTag(this);">categoryname</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">parentcategory</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">shoptitle</a>',
                    ),
					array(
					'type' => $type,
					'label' => $this->l('Enable Below Description?'),
					'name' => 'FME_DEFAULT_CATEGORY_DESCRIPTION',
					'required' => false,
					'is_bool' => true,
					'values' => array(
						array(
							'id' => 'seo_on',
							'value' => 1,
							'label' => $this->l('Yes')
							),
						array(
							'id' => 'seo_off',
							'value' => 0,
							'label' => $this->l('No')
							)
						)
					),
                    array(
                        'type' => 'text',
                        'lang' => true,
                        'label' => $this->l('Category Meta Description'),
                        'name' => 'FME_CATEGORY_META_DESCRIPTION',
                        'desc' => $this->l('Any text of your choice with these keywords can be used: ').'<a href="javascript:void(0);" onclick="appendThisTag(this);">categoryname</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">parentcategory</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">shoptitle</a>',
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ),
        );

        $lang = new Language((int) Configuration::get('PS_LANG_DEFAULT'));

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->default_form_language = $lang->id;
        $helper->module = $this;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $helper->identifier = 'id_' . $this->table;
        $helper->submit_action = 'submitConfigurationCat';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false) . '&configure=' . $this->name . '&tab_module=general&module_name=' . $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'uri' => $this->getPathUri(),
            'fields_value' => $this->getFormConfigs(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm(array($fields_form));
    }
	
	public function generalFormThree()
    {
		$type = (Tools::version_compare(_PS_VERSION_, '1.6.0.0', '>=') == true) ? 'switch' : 'radio';
		$required_params = (Tools::version_compare(_PS_VERSION_, '1.7.0.0', '>=') == true) ? '{id},{id_product_attribute},{rewrite}' : '{id},{rewrite}';
		$PRD_URL_RULE = Configuration::get('FME_PRODUCT_URL_RULE');
		$PRD_URL_RULE = (empty($PRD_URL_RULE)) ? Configuration::get('PS_ROUTE_product_rule') : $PRD_URL_RULE;
		$PRD_URL_RULE = (empty($PRD_URL_RULE)) ? '{category:/}{id}{-:id_product_attribute}-{rewrite}{-:ean13}.html' : $PRD_URL_RULE;
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Product Page SEO'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(
					array(
					'type' => $type,
					'label' => $this->l('Enable Below Title?'),
					'name' => 'FME_DEFAULT_PRODUCT_TITLE',
					'required' => false,
					'is_bool' => true,
					'values' => array(
						array(
							'id' => 'seo_on',
							'value' => 1,
							'label' => $this->l('Yes')
							),
						array(
							'id' => 'seo_off',
							'value' => 0,
							'label' => $this->l('No')
							)
						)
					),
                    array(
                        'type' => 'text',
                        'lang' => true,
                        'label' => $this->l('Product Meta Title'),
                        'name' => 'FME_PRODUCT_META_TITLE',
                        'desc' => $this->l('Any text of your choice with these keywords can be used: ').'<a href="javascript:void(0);" onclick="appendThisTag(this);">productname</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">productcategory</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">productdesc</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">productshortdesc</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">productreference</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">productmanufacturer</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">productfeature</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">productretailpricewithtax</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">productretailpricewithouttax</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">productspecificpricewithtax</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">productspecificpricewithouttax</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">productreduction</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">shoptitle</a>',
                    ),
					array(
					'type' => $type,
					'label' => $this->l('Enable Below Description?'),
					'name' => 'FME_DEFAULT_PRODUCT_DESCRIPTION',
					'required' => false,
					'is_bool' => true,
					'values' => array(
						array(
							'id' => 'seo_on',
							'value' => 1,
							'label' => $this->l('Yes')
							),
						array(
							'id' => 'seo_off',
							'value' => 0,
							'label' => $this->l('No')
							)
						)
					),
                    array(
                        'type' => 'text',
                        'lang' => true,
                        'label' => $this->l('Product Meta Description'),
                        'name' => 'FME_PRODUCT_META_DESCRIPTION',
                        'desc' => $this->l('Any text of your choice with these keywords can be used: ').'<a href="javascript:void(0);" onclick="appendThisTag(this);">productname</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">productcategory</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">productdesc</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">productshortdesc</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">productreference</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">productmanufacturer</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">productfeature</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">productretailpricewithtax</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">productretailpricewithouttax</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">productspecificpricewithtax</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">productspecificpricewithouttax</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">productreduction</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">shoptitle</a>',
                    ),
					array(
                        'type' => 'text',
                        'lang' => false,
                        'label' => $this->l('Product URL Rule'),
                        'name' => 'FME_PRODUCT_URL_RULE',
						'placeholder' => $PRD_URL_RULE,
						'default_value' => $PRD_URL_RULE,
                        'desc' => $this->l('Please use dash - for spaces and / where needed.').'<br/>'.$this->l('Any of the below parameters can be used: ').'<a href="javascript:void(0);" onclick="appendThisTag(this);">{id}</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">{id_product_attribute}</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">{rewrite}</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">{ean13}</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">{category}</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">{categories}</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">{tags}</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">{reference}</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">{manufacturer}</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">{meta_keywords}</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">{meta_title}</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">{supplier}</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">{price}</a>'.
						'<br/><span style="color:#e50b70">'.$required_params.' '.$this->l('Are required parameters.').'</span>',
                    ),
                ),
				'description' => 'Note: The Product URL Rule will not remove IDs, if you wish to remove IDs than please use this module
				<a href="https://addons.prestashop.com/en/url-redirects/16633-pretty-urls-remove-ids-numbers-for-seo-friendly-url.html" target="_blank">Pretty URLs</a>',
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ),
        );

        $lang = new Language((int) Configuration::get('PS_LANG_DEFAULT'));

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->default_form_language = $lang->id;
        $helper->module = $this;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $helper->identifier = 'id_' . $this->table;
        $helper->submit_action = 'submitConfigurationPrd';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false) . '&configure=' . $this->name . '&tab_module=general&module_name=' . $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'uri' => $this->getPathUri(),
            'fields_value' => $this->getFormConfigs(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm(array($fields_form));
    }
	
	public function generalFormFour()
    {
		$type = (Tools::version_compare(_PS_VERSION_, '1.6.0.0', '>=') == true) ? 'switch' : 'radio';
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('CMS Page SEO'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(
					array(
					'type' => $type,
					'label' => $this->l('Enable Below Title?'),
					'name' => 'FME_DEFAULT_CMS_TITLE',
					'required' => false,
					'is_bool' => true,
					'values' => array(
						array(
							'id' => 'seo_on',
							'value' => 1,
							'label' => $this->l('Yes')
							),
						array(
							'id' => 'seo_off',
							'value' => 0,
							'label' => $this->l('No')
							)
						)
					),
                    array(
                        'type' => 'text',
                        'lang' => true,
                        'label' => $this->l('CMS Meta Title'),
                        'name' => 'FME_CMS_META_TITLE',
                        'desc' => $this->l('Any text of your choice with these keywords can be used: ').'<a href="javascript:void(0);" onclick="appendThisTag(this);">pagetitle</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">shoptitle</a>',
                    ),
					array(
					'type' => $type,
					'label' => $this->l('Enable Below Description?'),
					'name' => 'FME_DEFAULT_CMS_DESCRIPTION',
					'required' => false,
					'is_bool' => true,
					'values' => array(
						array(
							'id' => 'seo_on',
							'value' => 1,
							'label' => $this->l('Yes')
							),
						array(
							'id' => 'seo_off',
							'value' => 0,
							'label' => $this->l('No')
							)
						)
					),
                    array(
                        'type' => 'text',
                        'lang' => true,
                        'label' => $this->l('CMS Meta Description'),
                        'name' => 'FME_CMS_META_DESCRIPTION',
                        'desc' => $this->l('Any text of your choice with these keywords can be used: ').'<a href="javascript:void(0);" onclick="appendThisTag(this);">pagetitle</a>,
						<a href="javascript:void(0);" onclick="appendThisTag(this);">shoptitle</a>',
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ),
        );

        $lang = new Language((int) Configuration::get('PS_LANG_DEFAULT'));

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->default_form_language = $lang->id;
        $helper->module = $this;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $helper->identifier = 'id_' . $this->table;
        $helper->submit_action = 'submitConfigurationCms';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false) . '&configure=' . $this->name . '&tab_module=general&module_name=' . $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'uri' => $this->getPathUri(),
            'fields_value' => $this->getFormConfigs(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm(array($fields_form));
    }
	
	public function googleFormOne()
    {
		$type = (Tools::version_compare(_PS_VERSION_, '1.6.0.0', '>=') == true) ? 'switch' : 'radio';
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Google Social Profile'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(
					array(
					'type' => $type,
					'label' => $this->l('Enable?'),
					'name' => 'GOOGLE_SOCIAL_PROF',
					'required' => false,
					'is_bool' => true,
					'values' => array(
						array(
							'id' => 'seo_on',
							'value' => 1,
							'label' => $this->l('Yes')
							),
						array(
							'id' => 'seo_off',
							'value' => 0,
							'label' => $this->l('No')
							)
						)
					),
                    array(
                        'type' => 'text',
                        'lang' => false,
                        'label' => $this->l('Store Logo URL'),
                        'name' => 'GOOGLE_SOCIAL_LOGO',
                        'desc' => $this->l('Logo will be shown on Google Search page.'),
						'placeholder' => 'https://www.domain.com/img/logo.png'
                    ),
					array(
                        'type' => 'text',
                        'lang' => false,
                        'label' => $this->l('Phone Number'),
                        'name' => 'GOOGLE_SOCIAL_PHONE',
                        'desc' => $this->l('Customer Service phone number will be shown on Google Search page.'),
						'placeholder' => '+1-234-567-890'
                    ),
					array(
                        'type' => 'text',
                        'lang' => false,
                        'label' => $this->l('Facebook Profile'),
                        'name' => 'GOOGLE_SOCIAL_FB',
                        'desc' => $this->l('Only use Profile name(like prestashop) from URL https://www.facebook.com/prestashop.'),
						'placeholder' => 'prestashop'
                    ),
					array(
                        'type' => 'text',
                        'lang' => false,
                        'label' => $this->l('Twitter Profile'),
                        'name' => 'GOOGLE_SOCIAL_TW',
                        'desc' => $this->l('Only use Profile name(like PrestaShop)'),
						'placeholder' => 'PrestaShop'
                    ),
					array(
                        'type' => 'text',
                        'lang' => false,
                        'label' => $this->l('Instagram Profile'),
                        'name' => 'GOOGLE_SOCIAL_INS',
                        'desc' => $this->l('Only use Profile name(like prestaShop)'),
						'placeholder' => 'prestaShop'
                    ),
					array(
                        'type' => 'text',
                        'lang' => false,
                        'label' => $this->l('Linkedin Profile'),
                        'name' => 'GOOGLE_SOCIAL_LIN',
                        'desc' => $this->l('Only use Profile name(like prestaShop)'),
						'placeholder' => 'prestaShop'
                    ),
					array(
                        'type' => 'text',
                        'lang' => false,
                        'label' => $this->l('YouTube Profile'),
                        'name' => 'GOOGLE_SOCIAL_YT',
                        'desc' => $this->l('Only use Profile name(like prestaShop)'),
						'placeholder' => 'prestaShop'
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ),
        );

        $lang = new Language((int) Configuration::get('PS_LANG_DEFAULT'));

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->default_form_language = $lang->id;
        $helper->module = $this;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $helper->identifier = 'id_' . $this->table;
        $helper->submit_action = 'submitConfigurationGoogleSocial';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false) . '&configure=' . $this->name . '&tab_module=google&module_name=' . $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'uri' => $this->getPathUri(),
            'fields_value' => $this->getFormConfigs(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm(array($fields_form));
    }
	
	public function googleFormTwo()
    {
		$type = (Tools::version_compare(_PS_VERSION_, '1.6.0.0', '>=') == true) ? 'switch' : 'radio';
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Google Company Profile'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(
					array(
					'type' => $type,
					'label' => $this->l('Enable Search Bar?'),
					'name' => 'GOOGLE_SB',
					'required' => false,
					'desc' => $this->l('Show search bar if your website is searched on Google, for example search ebay.com and see results'),
					'is_bool' => true,
					'values' => array(
						array(
							'id' => 'seo_on',
							'value' => 1,
							'label' => $this->l('Yes')
							),
						array(
							'id' => 'seo_off',
							'value' => 0,
							'label' => $this->l('No')
							)
						)
					),
					array(
					'type' => $type,
					'label' => $this->l('Enable Site Name?'),
					'name' => 'GOOGLE_SN',
					'required' => false,
					'desc' => $this->l('Show site/company name if your website is searched on Google, for example search ebay.com and see results'),
					'is_bool' => true,
					'values' => array(
						array(
							'id' => 'seo_on',
							'value' => 1,
							'label' => $this->l('Yes')
							),
						array(
							'id' => 'seo_off',
							'value' => 0,
							'label' => $this->l('No')
							)
						)
					),
                    array(
                        'type' => 'text',
                        'lang' => false,
                        'label' => $this->l('Website Name'),
                        'name' => 'GOOGLE_SN_NAME',
                        'desc' => $this->l('Try to use unique which does not pre exists.'),
						'placeholder' => 'ACME Corporation'
                    ),
					array(
                        'type' => 'text',
                        'lang' => false,
                        'label' => $this->l('Alternate Website Name'),
                        'name' => 'GOOGLE_SN_ALT',
                        'desc' => $this->l('Alternate Name incase first name is already taken.'),
						'placeholder' => 'UK ACME Corporation'
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ),
        );

        $lang = new Language((int) Configuration::get('PS_LANG_DEFAULT'));

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->default_form_language = $lang->id;
        $helper->module = $this;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $helper->identifier = 'id_' . $this->table;
        $helper->submit_action = 'submitConfigurationGooglePage';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false) . '&configure=' . $this->name . '&tab_module=google&module_name=' . $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'uri' => $this->getPathUri(),
            'fields_value' => $this->getFormConfigs(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm(array($fields_form));
    }
	
	public function getFormConfigs()
    {
		$languages = Language::getLanguages(false);
        $fields = array();
		foreach ($languages as $lang) {
			$fields['FME_HOME_META_TITLE'][$lang['id_lang']] = Tools::getValue(
                'FME_HOME_META_TITLE_'.$lang['id_lang'],
                Configuration::get(
                    'FME_HOME_META_TITLE',
                    $lang['id_lang']
                )
            );
			$fields['FME_HOME_META_DESCRIPTION'][$lang['id_lang']] = Tools::getValue(
                'FME_HOME_META_DESCRIPTION_'.$lang['id_lang'],
                Configuration::get(
                    'FME_HOME_META_DESCRIPTION',
                    $lang['id_lang']
                )
            );
			$fields['FME_HOME_META_KEYWORDS'][$lang['id_lang']] = Tools::getValue(
                'FME_HOME_META_KEYWORDS_'.$lang['id_lang'],
                Configuration::get(
                    'FME_HOME_META_KEYWORDS',
                    $lang['id_lang']
                )
            );
			$fields['FME_CATEGORY_META_TITLE'][$lang['id_lang']] = Tools::getValue(
                'FME_CATEGORY_META_TITLE_'.$lang['id_lang'],
                Configuration::get(
                    'FME_CATEGORY_META_TITLE',
                    $lang['id_lang']
                )
            );
			$fields['FME_CATEGORY_META_DESCRIPTION'][$lang['id_lang']] = Tools::getValue(
                'FME_CATEGORY_META_DESCRIPTION_'.$lang['id_lang'],
                Configuration::get(
                    'FME_CATEGORY_META_DESCRIPTION',
                    $lang['id_lang']
                )
            );
			$fields['FME_PRODUCT_META_TITLE'][$lang['id_lang']] = Tools::getValue(
                'FME_PRODUCT_META_TITLE_'.$lang['id_lang'],
                Configuration::get(
                    'FME_PRODUCT_META_TITLE',
                    $lang['id_lang']
                )
            );
			$fields['FME_PRODUCT_META_DESCRIPTION'][$lang['id_lang']] = Tools::getValue(
                'FME_PRODUCT_META_DESCRIPTION_'.$lang['id_lang'],
                Configuration::get(
                    'FME_PRODUCT_META_DESCRIPTION',
                    $lang['id_lang']
                )
            );
			$fields['FME_CMS_META_TITLE'][$lang['id_lang']] = Tools::getValue(
                'FME_CMS_META_TITLE_'.$lang['id_lang'],
                Configuration::get(
                    'FME_CMS_META_TITLE',
                    $lang['id_lang']
                )
            );
			$fields['FME_CMS_META_DESCRIPTION'][$lang['id_lang']] = Tools::getValue(
                'FME_CMS_META_DESCRIPTION_'.$lang['id_lang'],
                Configuration::get(
                    'FME_CMS_META_DESCRIPTION',
                    $lang['id_lang']
                )
            );
		}
        $fields['FME_DEFAULT_HOME_TITLE'] = (int)Configuration::get('FME_DEFAULT_HOME_TITLE');
		$fields['FME_DEFAULT_HOME_DESCRIPTION'] = (int)Configuration::get('FME_DEFAULT_HOME_DESCRIPTION');
		$fields['FME_DEFAULT_HOME_KEYWORDS'] = (int)Configuration::get('FME_DEFAULT_HOME_KEYWORDS');
		$fields['FME_DEFAULT_CATEGORY_TITLE'] = (int)Configuration::get('FME_DEFAULT_CATEGORY_TITLE');
		$fields['FME_DEFAULT_CATEGORY_DESCRIPTION'] = (int)Configuration::get('FME_DEFAULT_CATEGORY_DESCRIPTION');
		$fields['FME_DEFAULT_PRODUCT_TITLE'] = (int)Configuration::get('FME_DEFAULT_PRODUCT_TITLE');
		$fields['FME_DEFAULT_PRODUCT_DESCRIPTION'] = (int)Configuration::get('FME_DEFAULT_PRODUCT_DESCRIPTION');
		$fields['FME_DEFAULT_CMS_TITLE'] = (int)Configuration::get('FME_DEFAULT_CMS_TITLE');
		$fields['FME_DEFAULT_CMS_DESCRIPTION'] = (int)Configuration::get('FME_DEFAULT_CMS_DESCRIPTION');
		$fields['GOOGLE_SOCIAL_PROF'] = (int)Configuration::get('GOOGLE_SOCIAL_PROF');
		$fields['GOOGLE_SOCIAL_LOGO'] = Configuration::get('GOOGLE_SOCIAL_LOGO');
		$fields['GOOGLE_SOCIAL_PHONE'] = Configuration::get('GOOGLE_SOCIAL_PHONE');
		$fields['GOOGLE_SOCIAL_FB'] = Configuration::get('GOOGLE_SOCIAL_FB');
		$fields['GOOGLE_SOCIAL_TW'] = Configuration::get('GOOGLE_SOCIAL_TW');
		$fields['GOOGLE_SOCIAL_INS'] = Configuration::get('GOOGLE_SOCIAL_INS');
		$fields['GOOGLE_SOCIAL_LIN'] = Configuration::get('GOOGLE_SOCIAL_LIN');
		$fields['GOOGLE_SOCIAL_YT'] = Configuration::get('GOOGLE_SOCIAL_YT');
		$fields['GOOGLE_SB'] = Configuration::get('GOOGLE_SB');
		$fields['GOOGLE_SN'] = Configuration::get('GOOGLE_SN');
		$fields['GOOGLE_SN_NAME'] = Configuration::get('GOOGLE_SN_NAME');
		$fields['GOOGLE_SN_ALT'] = Configuration::get('GOOGLE_SN_ALT');
		$fields['FME_SINGLE_MIN_LENGTH'] = (int)Configuration::get('FME_SINGLE_MIN_LENGTH');
		$fields['FME_SINGLE_MIN_OCCUR'] = (int)Configuration::get('FME_SINGLE_MIN_OCCUR');
		$fields['FME_2WORDS_MIN_LENGTH'] = (int)Configuration::get('FME_2WORDS_MIN_LENGTH');
		$fields['FME_2WORDS_MIN_PHRASE_OCCUR'] = (int)Configuration::get('FME_2WORDS_MIN_PHRASE_OCCUR');
		$fields['FME_3WORDS_MIN_LENGTH'] = (int)Configuration::get('FME_3WORDS_MIN_LENGTH');
		$fields['FME_3WORDS_MIN_PHRASE_OCCUR'] = (int)Configuration::get('FME_3WORDS_MIN_PHRASE_OCCUR');
		$fields['FME_PRODUCT_URL_RULE'] = Configuration::get('FME_PRODUCT_URL_RULE');
		$fields['FME_DEFAULT_PRODUCT_KEYWORDS'] = (int)Configuration::get('FME_DEFAULT_PRODUCT_KEYWORDS');
		$fields['FME_DEFAULT_CATEGORY_KEYWORDS'] = (int)Configuration::get('FME_DEFAULT_CATEGORY_KEYWORDS');
		$fields['FME_DEFAULT_CMS_KEYWORDS'] = (int)Configuration::get('FME_DEFAULT_CMS_KEYWORDS');
        return $fields;
    }
	
	public function hookHeader()
	{
		$context = Context::getContext();
		$id_lang = (int)$context->language->id;
		$product_id = Tools::getValue('id_product');
		$category_id = Tools::getValue('id_category');
		$cms_id = Tools::getValue('id_cms');	
		$page_name = Dispatcher::getInstance()->getController();
		//$page = array();
		/* BOF Home Page SEO */
		if ($page_name == 'index')
		{
			$meta_tags = Meta::getHomeMetas($id_lang, 'index');
			if (Configuration::get('FME_DEFAULT_HOME_TITLE') > 0) {
				$meta_title = Configuration::get('FME_HOME_META_TITLE', $id_lang);
			}
			else {
				$meta_title = $meta_tags['meta_title'];
			}
			
			//Get Home Meta Keywords
			if (Configuration::get('FME_DEFAULT_HOME_KEYWORDS') > 0) {
				$meta_keywords = Configuration::get('FME_HOME_META_KEYWORDS', $id_lang);
			}
			else {
				$meta_keywords = $meta_tags['meta_keywords'];
			}
			if (Configuration::get('FME_DEFAULT_HOME_DESCRIPTION') > 0) {
				$meta_description = Configuration::get('FME_HOME_META_DESCRIPTION', $id_lang);
			}
			else {
				$meta_description = $meta_tags['meta_description'];
			}
			$context->smarty->assign('meta_title', $meta_title);
			$context->smarty->assign('meta_keywords', $meta_keywords);
			$context->smarty->assign('meta_description', $meta_description);
		}
		elseif ($product_id)
		{
			$meta_tags = Meta::getMetaTags($id_lang, 'product');
			if (Configuration::get('FME_DEFAULT_PRODUCT_TITLE') > 0) {
				$meta_title = self::fmeProductTitle($product_id);
			}
			else {
				$meta_title = $meta_tags['meta_title'];
			}
			if (Configuration::get('FME_DEFAULT_PRODUCT_KEYWORDS') > 0) {
				$meta_keywords = self::fmeProductKeywords($product_id);
			}
			else {
				$meta_keywords = $meta_tags['meta_keywords'];
			}
			if (Configuration::get('FME_DEFAULT_PRODUCT_DESCRIPTION') > 0) {
				$meta_description = self::fmeProductDescription($product_id);
			}
			else {
				$meta_description = $meta_tags['meta_description'];
			}
				$context->smarty->assign('meta_title', $meta_title);
				$context->smarty->assign('meta_keywords', $meta_keywords);
				$context->smarty->assign('meta_description', $meta_description);
			}
			elseif ($category_id) {
				$meta_tags = Meta::getMetaTags($id_lang, 'category');
				if (Configuration::get('FME_DEFAULT_CATEGORY_TITLE') > 0) {
					$meta_title = self::fmeCategoryTitle($category_id);
				}
				else {
					$meta_title = $meta_tags['meta_title'];
				}
				if (Configuration::get('FME_DEFAULT_CATEGORY_KEYWORDS') > 0) {
					$meta_keywords = self::fmeCategoryKeywords($category_id);
				}
				else {
					$meta_keywords = $meta_tags['meta_keywords'];
				}
				if (Configuration::get('FME_DEFAULT_CATEGORY_DESCRIPTION') > 0) {
					$meta_description = self::fmeCategoryDescription($category_id);
				}
				else {
					$meta_description = $meta_tags['meta_description'];
				}
				$context->smarty->assign('meta_title', $meta_title);
				$context->smarty->assign('meta_keywords', $meta_keywords);
				$context->smarty->assign('meta_description', $meta_description);
				}
				elseif ($cms_id)
				{
					$meta_tags = Meta::getMetaTags($id_lang, 'cms');
					if (Configuration::get('FME_DEFAULT_CMS_TITLE') > 0) {
						$meta_title = self::fmeCmsTitle($cms_id);
					}
					else {
						$meta_title = $meta_tags['meta_title'];
					}
					if (Configuration::get('FME_DEFAULT_CMS_KEYWORDS') > 0) {
						$meta_keywords = self::fmeCmsKeywords($cms_id);
					}
					else {
						$meta_keywords = $meta_tags['meta_keywords'];
					}
					if (Configuration::get('FME_DEFAULT_CMS_DESCRIPTION') > 0) {
						$meta_description = self::fmeCmsDescription($cms_id);
					}
					else {
						$meta_description = $meta_tags['meta_description'];
					}
					$context->smarty->assign('meta_title', $meta_title);
					$context->smarty->assign('meta_keywords', $meta_keywords);
					$context->smarty->assign('meta_description', $meta_description);
				}
		}

	public static function fmeProductTitle($product_id)
	{
		$fmeTitle = '';
		$context = Context::getContext();
		$id_lang = (int)$context->language->id;
		$FME_PRODUCT_META_TITLE = Configuration::get('FME_PRODUCT_META_TITLE', $id_lang);
		$product = new Product((int)$product_id, true, (int)$id_lang);
		$productname = self::getProductName($product_id);
		$productcategory = self::getProductCategory($product_id);
		$productdesc = Tools::getDescriptionClean($product->description);
		$productshortdesc = Tools::getDescriptionClean($product->description_short);
		$shoptitle = Configuration::get('PS_SHOP_NAME');
		$productreference = $product->reference;
		$productmanufacturer = $product->manufacturer_name;
		$productfeature = $product->getFeaturesStatic($product_id);
		$productfeatures_collection = array();
		$productretailpricewithtax = Product::getPriceStatic($product_id, true, null, 2, null, false, false);
		$productretailpricewithtax = Tools::displayPrice($productretailpricewithtax);
		$productretailpricewithouttax = Product::getPriceStatic($product_id, false, null, 2, null, false, false);
		$productretailpricewithouttax = Tools::displayPrice($productretailpricewithouttax);
		$productspecificpricewithtax = Product::getPriceStatic($product_id, true, null, 2);
		$productspecificpricewithtax = Tools::displayPrice($productspecificpricewithtax);
		$productspecificpricewithouttax = Product::getPriceStatic($product_id, false, null, 2);
		$productspecificpricewithouttax = Tools::displayPrice($productspecificpricewithouttax);
		$productreduction = Product::getPriceStatic($product_id, true, null, 2, null, true);
		$productreduction = Tools::displayPrice($productreduction);
		if (!empty($productfeature)) {
			foreach ($productfeature as $feature) {
				$feature_one = Feature::getFeature($id_lang, $feature['id_feature']);
				$feature_two = new FeatureValue($feature['id_feature_value'], $id_lang);
				$feature_complete = $feature_one['name'].':'.$feature_two->value;
				array_push($productfeatures_collection, $feature_complete);
			}
			$productfeature = implode(',', $productfeatures_collection);
		}
		else {
			$productfeature = '';
		}
		$search_arr = array('productname',
							'productcategory',
							'shoptitle',
							'productdesc',
							'productshortdesc',
							'productreference',
							'productmanufacturer',
							'productfeature',
							'productretailpricewithtax',
							'productretailpricewithouttax',
							'productspecificpricewithtax',
							'productspecificpricewithouttax',
							'productreduction');
		$replace_arr = array($productname,
							 $productcategory,
							 $shoptitle,
							 $productdesc,
							 $productshortdesc,
							 $productreference,
							 $productmanufacturer,
							 $productfeature,
							 $productretailpricewithtax,
							 $productretailpricewithouttax,
							 $productspecificpricewithtax,
							 $productspecificpricewithouttax,
							 $productreduction);
		$fmeTitle = str_replace($search_arr, $replace_arr, $FME_PRODUCT_META_TITLE);
		return $fmeTitle;
	}

	public static function fmeProductTitleByType($product_id, $type)
	{
		$fmeTitle = '';
		$context = Context::getContext();
		$id_lang = (int)$context->language->id;
		$FME_PRODUCT_META_TITLE = Configuration::get($type);
		$product = new Product((int)$product_id, true, (int)$id_lang);
		$productname = self::getProductName($product_id);
		$productcategory = self::getProductCategory($product_id);
		$productdesc = Tools::getDescriptionClean($product->description);
		$productshortdesc = Tools::getDescriptionClean($product->description_short);
		$shoptitle = Configuration::get('PS_SHOP_NAME');
		$productreference = $product->reference;
		$productmanufacturer = $product->manufacturer_name;
		$productfeature = $product->getFeaturesStatic($product_id);
		$productfeatures_collection = array();
		$productretailpricewithtax = Product::getPriceStatic($product_id, true, null, 2, null, false, false);
		$productretailpricewithtax = Tools::displayPrice($productretailpricewithtax);
		$productretailpricewithouttax = Product::getPriceStatic($product_id, false, null, 2, null, false, false);
		$productretailpricewithouttax = Tools::displayPrice($productretailpricewithouttax);
		$productspecificpricewithtax = Product::getPriceStatic($product_id, true, null, 2);
		$productspecificpricewithtax = Tools::displayPrice($productspecificpricewithtax);
		$productspecificpricewithouttax = Product::getPriceStatic($product_id, false, null, 2);
		$productspecificpricewithouttax = Tools::displayPrice($productspecificpricewithouttax);
		$productreduction = Product::getPriceStatic($product_id, true, null, 2, null, true);
		$productreduction = Tools::displayPrice($productreduction);

		if (!empty($productfeature)) {
			foreach ($productfeature as $feature) {
				$feature_one = Feature::getFeature($id_lang, $feature['id_feature']);
				$feature_two = new FeatureValue($feature['id_feature_value'], $id_lang);
				$feature_complete = $feature_one['name'].':'.$feature_two->value;
				array_push($productfeatures_collection, $feature_complete);
			}
			$productfeature = implode(',', $productfeatures_collection);
		}
		else {
			$productfeature = '';
		}
		$search_arr = array('productname',
							'productcategory',
							'shoptitle',
							'productdesc',
							'productshortdesc',
							'productreference',
							'productmanufacturer',
							'productfeature',
							'productretailpricewithtax',
							'productretailpricewithouttax',
							'productspecificpricewithtax',
							'productspecificpricewithouttax',
							'productreduction');
		$replace_arr = array($productname,
							 $productcategory,
							 $shoptitle,
							 $productdesc,
							 $productshortdesc,
							 $productreference,
							 $productmanufacturer,
							 $productfeature,
							 $productretailpricewithtax,
							 $productretailpricewithouttax,
							 $productspecificpricewithtax,
							 $productspecificpricewithouttax,
							 $productreduction);
		$fmeTitle = str_replace($search_arr, $replace_arr, $FME_PRODUCT_META_TITLE);
		return $fmeTitle;
	}
	
	public static function fmeProductKeywords($product_id)
	{
		$context = Context::getContext();
		$id_lang = (int)$context->language->id;
		$description = Db::getInstance()->GetRow('SELECT l.`description` AS `desc` 
			FROM `'._DB_PREFIX_.'product` AS p
			INNER JOIN `'._DB_PREFIX_.'product_lang` AS l ON (l.`id_product` = p.`id_product`)
			AND l.`id_lang` = '.(int)$id_lang.' WHERE p.`id_product` = '.(int)$product_id );		
		$description = $description['desc'];		
		return self::getAutoKeyWords($description);
	}

	public static function fmeProductDescription($product_id)
	{
		$fmeTitle = '';
		$context = Context::getContext();
		$id_lang = (int)$context->language->id;
		$FME_PRODUCT_META_DESCRIPTION = Configuration::get('FME_PRODUCT_META_DESCRIPTION', $id_lang);
		$product = new Product((int)$product_id, true, (int)$id_lang);
		$productname = self::getProductName($product_id);
		$productcategory = self::getProductCategory($product_id);
		$productdesc = Tools::getDescriptionClean($product->description);
		$productshortdesc = Tools::getDescriptionClean($product->description_short);
		$shoptitle = Configuration::get('PS_SHOP_NAME');
		$productreference = $product->reference;
		$productmanufacturer = $product->manufacturer_name;
		$productfeature = $product->getFeaturesStatic($product_id);
		$productfeatures_collection = array();
		$productretailpricewithtax = Product::getPriceStatic($product_id, true, null, 2, null, false, false);
		$productretailpricewithtax = Tools::displayPrice($productretailpricewithtax);
		$productretailpricewithouttax = Product::getPriceStatic($product_id, false, null, 2, null, false, false);
		$productretailpricewithouttax = Tools::displayPrice($productretailpricewithouttax);
		$productspecificpricewithtax = Product::getPriceStatic($product_id, true, null, 2);
		$productspecificpricewithtax = Tools::displayPrice($productspecificpricewithtax);
		$productspecificpricewithouttax = Product::getPriceStatic($product_id, false, null, 2);
		$productspecificpricewithouttax = Tools::displayPrice($productspecificpricewithouttax);
		$productreduction = Product::getPriceStatic($product_id, true, null, 2, null, true);
		$productreduction = Tools::displayPrice($productreduction);

		if (!empty($productfeature)) {
			foreach ($productfeature as $feature) {
				$feature_one = Feature::getFeature($id_lang, $feature['id_feature']);
				$feature_two = new FeatureValue($feature['id_feature_value'], $id_lang);
				$feature_complete = $feature_one['name'].':'.$feature_two->value;
				array_push($productfeatures_collection, $feature_complete);
			}
			$productfeature = implode(',', $productfeatures_collection);
		}
		else {
			$productfeature = '';
		}
		$search_arr = array('productname',
							'productcategory',
							'shoptitle',
							'productdesc',
							'productshortdesc',
							'productreference',
							'productmanufacturer',
							'productfeature',
							'productretailpricewithtax',
							'productretailpricewithouttax',
							'productspecificpricewithtax',
							'productspecificpricewithouttax',
							'productreduction');
		$replace_arr = array($productname,
							 $productcategory,
							 $shoptitle,
							 $productdesc,
							 $productshortdesc,
							 $productreference,
							 $productmanufacturer,
							 $productfeature,
							 $productretailpricewithtax,
							 $productretailpricewithouttax,
							 $productspecificpricewithtax,
							 $productspecificpricewithouttax,
							 $productreduction);
		$fmeTitle = str_replace($search_arr, $replace_arr, $FME_PRODUCT_META_DESCRIPTION);
		return $fmeTitle;
	}

	public static function fmeCategoryTitle($category_id)
	{
		$fmeTitle = '';
		$context = Context::getContext();
		$id_lang = (int)$context->language->id;
		$FME_CATEGORY_META_TITLE = Configuration::get('FME_CATEGORY_META_TITLE', $id_lang);
		$categoryname = self::getCategoryName($category_id);
		$parentcategory = self::getParentCategory($category_id);
		$shoptitle = Configuration::get('PS_SHOP_NAME');
		$search_arr = array('categoryname', 'parentcategory', 'shoptitle');
		$replace_arr = array($categoryname, $parentcategory, $shoptitle);
		$fmeTitle = str_replace($search_arr, $replace_arr, $FME_CATEGORY_META_TITLE);
		return $fmeTitle;
	}

	public static function fmeCategoryKeywords($id_category)
	{
		$context = Context::getContext();
		$id_lang = (int)$context->language->id;
		$description = Db::getInstance()->GetRow('SELECT `description` FROM `'._DB_PREFIX_.'category_lang`
			WHERE `id_category` = '.(int)$id_category.' AND `id_lang` = '.(int)$id_lang );
		$catdesc = strip_tags($description['description']);
		return self::getAutoKeyWords($catdesc);
	}

	public static function fmeCategoryDescription($id_category)
	{
		$fmeTitle = '';
		$context = Context::getContext();
		$id_lang = (int)$context->language->id;
		$FME_CATEGORY_META_TITLE = Configuration::get('FME_CATEGORY_META_DESCRIPTION', $id_lang);
		$categoryname = self::getCategoryName($id_category);
		$parentcategory = self::getParentCategory($id_category);
		$shoptitle = Configuration::get('PS_SHOP_NAME');
		$search_arr = array('categoryname', 'parentcategory', 'shoptitle');
		$replace_arr = array($categoryname, $parentcategory, $shoptitle);
		$fmeTitle = str_replace($search_arr, $replace_arr, $FME_CATEGORY_META_TITLE);
		return $fmeTitle;
	}
	
	public static function fmeCmsTitle($cms_id)
	{
		$fmeTitle = '';
		$context = Context::getContext();
		$id_lang = (int)$context->language->id;
		$FME_PRODUCT_META_TITLE = Configuration::get('FME_CMS_META_TITLE', $id_lang);
		$pagetitle = self::getCmsPageName($cms_id);
		$shoptitle = Configuration::get('PS_SHOP_NAME');
		$search_arr = array('pagetitle', 'shoptitle');
		$replace_arr = array($pagetitle, $shoptitle);
		$fmeTitle = str_replace($search_arr, $replace_arr, $FME_PRODUCT_META_TITLE);
		return $fmeTitle;
	}

	public static function fmeCmsKeywords($product_id)
	{
		$context = Context::getContext();
		$id_lang = (int)$context->language->id;
		$page_id = $product_id;
		$description = Db::getInstance()->GetRow('SELECT `content`
			FROM `'._DB_PREFIX_.'cms_lang`
			WHERE `id_cms` = '.(int)$page_id.' AND `id_lang` = '.(int)$id_lang );
		return self::getAutoKeyWords($description['content']);
	}

	public static function fmeCmsDescription($page_id)
	{
		$fmeTitle = '';
		$context = Context::getContext();
		$id_lang = (int)$context->language->id;
		$FME_PRODUCT_META_TITLE = Configuration::get('FME_CMS_META_DESCRIPTION', $id_lang);
		$pagetitle = self::getCmsPageName($page_id);
		$shoptitle = Configuration::get('PS_SHOP_NAME');
		$search_arr = array('pagetitle', 'shoptitle');
		$replace_arr = array($pagetitle, $shoptitle);
		$fmeTitle = str_replace($search_arr, $replace_arr, $FME_PRODUCT_META_TITLE);
		return $fmeTitle;
	}
	
	public static function getProductCategory($product_id)
	{
		$context = Context::getContext();
		$id_lang = (int)$context->language->id;
		$category_name = Db::getInstance()->GetRow('SELECT c.`name` AS `cname` 
			FROM `'._DB_PREFIX_.'product` AS p
			INNER JOIN `'._DB_PREFIX_.'category_lang` AS c ON (p.`id_category_default` = c.`id_category`)
			WHERE c.id_lang = '.(int)$id_lang.' AND p.`id_product` = '.(int)$product_id );
		return $category_name['cname'];
	}

	
	public static function getProductName($product_id)
	{
		$context = Context::getContext();
		$id_lang = (int)$context->language->id;
		$ptitle = Db::getInstance()->GetRow('SELECT l.`name` AS `pname` 
			FROM `'._DB_PREFIX_.'product` AS p
			INNER JOIN `'._DB_PREFIX_.'product_lang` AS l ON (l.`id_product` = p.`id_product`)
			AND l.`id_lang` = '.(int)$id_lang.' WHERE p.`id_product` = '.(int)$product_id );
		return $ptitle['pname'];
	}
	
	public static function getCategoryName($id_category)
	{
		$context = Context::getContext();
		$id_lang = (int)$context->language->id;
		$cname = Db::getInstance()->GetRow('SELECT `name`
			FROM `'._DB_PREFIX_.'category_lang`
			WHERE `id_category` = '.(int)$id_category.'
			AND `id_lang` = '.(int)$id_lang.'');
		return $cname['name']; 
	}

	public static function getParentCategory($id_category)
	{ 
		$context = Context::getContext();
		$id_lang = (int)$context->language->id;
		$cname = Db::getInstance()->GetRow('SELECT cl.`name` as `cname`
			FROM `'._DB_PREFIX_.'category` AS c
			INNER JOIN `'._DB_PREFIX_.'category_lang` AS cl ON (cl.`id_category` = c.`id_parent`)
			WHERE c.`id_category` = '.(int)$id_category.' AND cl.`id_lang` = '.(int)$id_lang );
		return $cname['cname']; 
		}
	
	public function getCmsPageName($id_page)
	{
		$context = Context::getContext();
		$id_lang = (int)$context->language->id;
		$title = Db::getInstance()->GetRow('SELECT `meta_title`
				FROM `'._DB_PREFIX_.'cms_lang` WHERE `id_cms` = '.(int)$id_page.' AND `id_lang` = '.(int)$id_lang );
		return $title['meta_title'];
		}

	public static function getAutoKeyWords($text)
	{
		require_once _PS_MODULE_DIR_.'advanceseo/includes/class.colossal-mind-mb-keyword-generator.php';
		$context = Context::getContext();
		$compatibles = array('en_US', 'en_GB', 'fr_FR', 'de_DE', 'it_IT', 'nl_NL', 'es_ES');
		$lang_code = $context->language->locale;
		$lang_code = str_replace('-', '_', $lang_code);
		if (in_array($lang_code, $compatibles)) {
			$params = array();
			$params['lang'] = $lang_code;
			$params['content'] = $text;
			$params['encoding'] = 'utf-8';
			header('Content-type: text/html; charset=utf-8');
			$params['min_word_length'] = Configuration::get('FME_SINGLE_MIN_LENGTH');  // min length of single words
			$params['min_word_occur'] = Configuration::get('FME_SINGLE_MIN_OCCUR');  // min occur of single words
			$params['min_2words_length'] = Configuration::get('FME_2WORDS_MIN_LENGTH');  // min length of words for 2 word phrases; value 0 will DISABLE !!!
			$params['min_2words_phrase_length'] = Configuration::get('FME_2WORDS_MIN_PHRASE_LENGTH'); // min length of 2 word phrases
			$params['min_2words_phrase_occur'] = Configuration::get('FME_2WORDS_MIN_PHRASE_OCCUR');  // min occur of 2 words phrase
			$params['min_3words_length'] = Configuration::get('FME_3WORDS_MIN_LENGTH');  // min length of words for 3 word phrases; value 0 will DISABLE !!!
			$params['min_3words_phrase_length'] = Configuration::get('FME_3WORDS_MIN_PHRASE_LENGTH'); // min length of 3 word phrases
			$params['min_3words_phrase_occur'] = Configuration::get('FME_3WORDS_MIN_PHRASE_OCCUR');  // min occur of 3 words phrase
			$keyword = new colossal_mind_mb_keyword_gen($params);
			$autoKeywords = $keyword->get_keywords();
			return $autoKeywords;
		}
		else {
			return null;
		}
	}
	
	public function hookDisplayBackOfficeHeader()
	{
		$this->context->controller->addCSS($this->_path.'views/css/admin.css');
		$this->context->controller->addJS($this->_path.'views/js/advseo.js');
	}

	public function hookDisplayTop($params)
	{
		$sp_fb = Configuration::get('GOOGLE_SOCIAL_FB');
		$sp_fb = empty($sp_fb) ? '' : 'http://www.facebook.com/'.$sp_fb;
		$sp_tw = Configuration::get('GOOGLE_SOCIAL_TW');
		$sp_tw = empty($sp_tw) ? '' : 'http://www.twitter.com/'.$sp_tw;
		$sp_in = Configuration::get('GOOGLE_SOCIAL_INS');
		$sp_in = empty($sp_in) ? '' : 'http://instagram.com/'.$sp_in;
		$sp_gp = Configuration::get('GOOGLE_SOCIAL_GPLUS');
		$sp_gp = empty($sp_gp) ? '' : 'http://plus.google.com/'.$sp_gp;
		$sp_lin = Configuration::get('GOOGLE_SOCIAL_LIN');
		$sp_lin = empty($sp_lin) ? '' : 'http://www.linkedin.com/in/'.$sp_lin;
		$sp_yt = Configuration::get('GOOGLE_SOCIAL_YT');
		$sp_yt = empty($sp_yt) ? '' : 'http://www.youtube.com/user/'.$sp_yt;
		$google_sp_array = array('google_sp_fb' => $sp_fb,
				'google_sp_tw' => $sp_tw,
				'google_sp_ins' => $sp_in,
				'google_sp_gplus' => $sp_gp,
				'google_sp_link' => $sp_lin,
				'google_sp_yt' => $sp_yt,
				);

		$google_sp_array = array_filter($google_sp_array);
		$page_name = Dispatcher::getInstance()->getController();
		$ps_version = (Tools::version_compare(_PS_VERSION_, '1.7.0.0', '>=') == true) ? 1 : 0;
		$this->smarty->assign(array(
				'google_sp' => (int)Configuration::get('GOOGLE_SOCIAL_PROF'),
				'web_url' => _PS_BASE_URL_.__PS_BASE_URI__,
				'sp_logo' => Configuration::get('GOOGLE_SOCIAL_LOGO'),
				'sp_phone' => Configuration::get('GOOGLE_SOCIAL_PHONE'),
				'google_sp_array' => $google_sp_array,
				'GOOGLE_SB' => (int)Configuration::get('GOOGLE_SB'),
				'GOOGLE_SN' => (int)Configuration::get('GOOGLE_SN'),
				'GOOGLE_SN_NAME' => Configuration::get('GOOGLE_SN_NAME'),
				'GOOGLE_SN_ALT' => Configuration::get('GOOGLE_SN_ALT'),
				'_page_name' => $page_name,
				'ps_version' => (int)$ps_version
			));
		if (Tools::version_compare(_PS_VERSION_, '1.7.0.0', '>=') == true) {
			$this->context->smarty->assign(array('shop_name' => Configuration::get('PS_SHOP_NAME')));
		}
		return $this->display(__FILE__, 'google_sp.tpl');
	}
	
	public function hookDisplayIndexFollow($params)
    {
		$existance = 0;
		$follow_flag = 0;
		$index_flag = 0;
		$page_name = Dispatcher::getInstance()->getController();
		$enable_disable = (int)Configuration::get('FMM_ENABLE_INDEXFOLLOW_SYS');
		if ($page_name == 'cms') {
			$id_cms = (int)Tools::getValue('id_cms');
			$id_cms_category = (int)Tools::getValue('id_cms_category');
			if ($id_cms > 0 && $id_cms_category <= 0) {
				$follow_flag = (int)$this->getFlagVal('follow', 'cms_pages', $id_cms);
				$index_flag = (int)$this->getFlagVal('index', 'cms_pages', $id_cms);
			}
			elseif ($id_cms <= 0 && $id_cms_category > 0) {
				$follow_flag = (int)$this->getFlagVal('follow', 'cms_category', $id_cms_category);
				$index_flag = (int)$this->getFlagVal('index', 'cms_category', $id_cms_category);
			}
		}
		elseif ($page_name == 'category') {
			$id_category = (int)Tools::getValue('id_category');
			$follow_flag = (int)$this->getFlagVal('follow', 'category', $id_category);
			$index_flag = (int)$this->getFlagVal('index', 'category', $id_category);
		}
		elseif ($page_name == 'product') {
			$id_product = (int)Tools::getValue('id_product');
			$follow_flag = (int)$this->getFlagVal('follow', 'product', $id_product);
			$index_flag = (int)$this->getFlagVal('index', 'product', $id_product);
			$existance = (int)$this->getFlagExistance($id_product);
		}
		if ($page_name != 'cms' && $page_name != 'category' && $existance <= 0) {
			$enable_disable = 1;
		}
		//Twitter Cards block
		$id_product = (int)Tools::getValue('id_product');
		$id_language = (int)Context::getContext()->language->id;
		$enable_twt = (int)Configuration::get('FMM_ENABLE_TAGS_TWITTER');
		$twitter_username = Configuration::get('FMM_TWITTER_USER_NAME');
		if ($id_product > 0) {
			$fmm_twitter_title = $this->fmeProductTitleByType($id_product, 'FMM_TWITTER_TITLE');
			$twitter_description = $this->fmeProductTitleByType($id_product, 'FMM_TWITTER_DESCRIPTION');
			$prd = new Product((int)$id_product, true, (int)$id_language);
			$prd->id_product_attribute = (int)Product::getDefaultAttribute($prd->id) > 0 ? (int)Product::getDefaultAttribute($prd->id) : 0;
			$_cover = ((int)$prd->id_product_attribute > 0) ? Product::getCombinationImageById((int)$prd->id_product_attribute, $id_language) : Product::getCover($prd->id);
			if (!is_array($_cover)) {
			   $_cover = Product::getCover($prd->id);
			}
			$prd->id_image = $_cover['id_image'];
			//Facebook Card
			$currency = Context::getContext()->currency;
			$prd_link = Context::getContext()->link->getProductLink($prd);
			$fmm_fb_card = (int)Configuration::get('FMM_ENABLE_TAGS_FACEBOOK');
			$fmm_fb_title = $this->fmeProductTitleByType($id_product, 'FMM_FACEBOOK_TITLE');
			$fmm_fb_description = $this->fmeProductTitleByType($id_product, 'FMM_FACEBOOK_DESCRIPTION');
			$fb_admin_id = (int)Configuration::get('FMM_FACEBOOK_ADMIN_ID');
			$fmm_price_tax_exc = Product::getPriceStatic($id_product, false, null, 2, null, false, false);
			$fmm_price_amount = Product::getPriceStatic($id_product, true, null, 2, null, false, false);
			$fmm_currency_iso_code = $currency->iso_code;
			$this->smarty->assign(array(
				'enable_indexfollow' => $enable_disable,
				'fmm_prd_id' => $id_product,
				'follow_flag' => (int)$follow_flag,
				'index_flag' => (int)$index_flag,
				'fmm_twitter_cards' => $enable_twt,
				'fmm_twitter_username' => $twitter_username,
				'fmm_twitter_title' => $fmm_twitter_title,
				'twitter_description' => $twitter_description,
				'fmm_prd_img_link_rew' => $prd->link_rewrite,
				'fmm_prd_img_id' => $prd->id_image,
				'fmm_fb_card' => $fmm_fb_card,
				'fmm_fb_title' => $fmm_fb_title,
				'fmm_fb_description' => $fmm_fb_description,
				'fmm_shoptitle' => Configuration::get('PS_SHOP_NAME'),
				'fmm_price_tax_exc' => $fmm_price_tax_exc,
				'fmm_price_amount' => $fmm_price_amount,
				'fmm_currency_iso_code' => $fmm_currency_iso_code,
				'fmm_prd_link' => $prd_link,
				'fb_admin_id' => $fb_admin_id
			));
		}
		else {
			$this->smarty->assign(array(
				'enable_indexfollow' => $enable_disable,
				'fmm_prd_id' => $id_product,
				'follow_flag' => (int)$follow_flag,
				'index_flag' => (int)$index_flag,
				'fmm_twitter_cards' => 1,
				'fmm_fb_card' => 1
			));
		}
		return $this->display(__FILE__, 'views/templates/hook/head.tpl');
    }
	
	public function hookDisplayAdminProductsExtra($params)
    {
        $id_product = (int)Tools::getValue('id_product');
		$id_product = ($id_product <= 0) ? (int)$params['id_product'] : $id_product;
		$existance = (int)$this->getFlagExistance($id_product);
		$existance_value = array('index' => 0, 'follow' => 0);
		if ($existance > 0) {
			$existance_value['index'] = (int)$this->getFlagVal('index', 'product', $id_product);
			$existance_value['follow'] = (int)$this->getFlagVal('follow', 'product', $id_product);
		}
		$enable_title = (int)Configuration::get('FME_DEFAULT_PRODUCT_TITLE');
		$enable_desc = (int)Configuration::get('FME_DEFAULT_PRODUCT_DESCRIPTION');
		$enable_keys = (int)Configuration::get('FME_DEFAULT_PRODUCT_KEYWORDS');
		$meta_title = $this->fmeProductTitle($id_product);
		$meta_desc = $this->fmeProductDescription($id_product);
		$meta_keys = $this->fmeProductKeywords($id_product);
		$rating = 3;
		if (empty($meta_title) && $enable_title > 0) {
			$meta_title = $this->l('Empty');
		}
		elseif ($enable_title <= 0) {
			$meta_title = $this->l('Disabled');
			$rating = $rating - 1;
		}
		
		if (empty($meta_desc) && $enable_desc > 0) {
			$meta_desc = $this->l('Empty');
		}
		elseif ($enable_desc <= 0) {
			$meta_desc = $this->l('Disabled');
			$rating = $rating - 1;
		}
		
		if (empty($meta_keys) && $enable_keys > 0) {
			$meta_keys = $this->l('Empty');
		}
		elseif ($enable_keys <= 0) {
			$meta_keys = $this->l('Disabled');
			$rating = $rating - 1;
		}
		if ($rating <= 0) {
			$comment = $this->l('bad');
		}
		elseif ($rating > 0 && $rating <= 2) {
			$comment = $this->l('average');
		}
		else {
			$comment = $this->l('good');
		}
		$this->context->smarty->assign(array(
			'ps_version' => (int)(Tools::version_compare(_PS_VERSION_, '1.7.0.0', '>=') ? 1 : 0),
			'existance' => $existance,
			'existance_value' => $existance_value,
			'fmm_seo_meta_title' => $meta_title,
			'fmm_seo_meta_desc' => $meta_desc,
			'fmm_seo_meta_keys' => $meta_keys,
			'fmm_seo_rating' => $rating,
			'fmm_seo_rating_comment' => $comment
        ));
		return $this->display($this->_path, 'views/templates/admin/product_tab.tpl');
	}
	
	public function hookActionProductUpdate()
    {
        $id_product = Tools::getValue('id_product');
        $existance = (int)Tools::getValue('control_index_follow');
		$update = (int)$this->getFlagExistance($id_product);
		$index = (int)Tools::getValue('prd_index');
		$follow = (int)Tools::getValue('prd_follow');
		if ($update > 0 && $existance > 0) {
			//Already record exists-just update
			Db::getInstance()->update('indexfollow',
			array(
				'index' => (int)$index,
				'follow' => (int)$follow), 'id = '.(int)$id_product.' AND `page_type` = "product"'
			);
		}
		elseif ($update > 0 && $existance <= 0) {
			Db::getInstance()->delete(
				'indexfollow',
				'`page_type` = "product" AND id = '.(int)$id_product
			);
		}
		elseif ($update <= 0 && $existance > 0) {
			Db::getInstance()->insert('indexfollow',
			array(
				'page_type' => 'product',
				'index' => (int)$index,
				'follow' => (int)$follow,
				'id' => (int)$id_product)
			);
		}
    }
	
	private function getFlagVal($field, $page, $id)
    {
		return Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue('SELECT `'.pSQL($field).'`
		FROM '._DB_PREFIX_.'indexfollow
		WHERE `id` = '.(int)$id.'
		AND `page_type` = "'.pSQL($page).'"');
    }
	
	private function getFlagExistance($id)
    {
		return Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue('SELECT `id_indexfollow`
		FROM '._DB_PREFIX_.'indexfollow
		WHERE `id` = '.(int)$id.'
		AND `page_type` = "product"');
    }
	
	public function hookFilterCategoryContent($params)
	{
		$page_name = 'category';
		if (isset($params['object']['description']) && !empty($params['object']['description'])) {
			$params['object']['description'] = $this->getFilterContent($page_name, $params['object']['description']);
		}
		
		return $params;
	}
	
	public function hookFilterCmsContent($params)
	{
		$page_name = 'cms';
		if (isset($params['object']['content']) && !empty($params['object']['content'])) {
			$params['object']['content'] = $this->getFilterContent($page_name, $params['object']['content']);
		}
		
		return $params;
	}
	
	public function getFilterContent($page_name, $io)
	{
		$class = new SeoInternalLinkingModel;
		$id_shop = (int)$this->context->shop->id;
		$id_lang = (int)$this->context->language->id;
		$rules = $class->getActiveRule($page_name, $id_lang, $id_shop);
		if (!empty($rules)) {
			foreach ($rules as $rule) {
				$terminate = (int)$rule['replacements'];
				$title = empty($rule['title']) ? '' : ' title="'.$rule['title'].'"';
				$color = empty($rule['color']) ? 'color:inherit;' : 'color:'.$rule['color'];
				$target = ((int)$rule['target'] > 0) ? ' target="_blank"' : '';
				$rel = ((int)$rule['rel'] > 0) ? ' rel="nofollow"' : '';
				if ((int)strpos($rule['keywords'], ',') <= 0) {//if its a single word
					$regex = '/(<([\w]+)[^>]*>)?(?<txt>\\b'.$rule['keywords'].'\\b)/ui';
					preg_match_all($regex, $io, $match, PREG_SET_ORDER|PREG_OFFSET_CAPTURE);
					if (!empty($match)) {
						$offset_collection = array();
						foreach ($match as $stick) {
							if (empty($stick['2'][0])) {
								array_push($offset_collection, $stick['3'][1]);
							}
						}
						if (!empty($offset_collection)) {
							$a_tag = '<a href="'.$rule['url'].'"'.$title.$target.$rel.' style="'.$color.'">';
							$a_tag_close = '</a>';
							$size_diff = Tools::strlen($a_tag) + Tools::strlen($a_tag_close);
							$it = 0;
							foreach ($offset_collection as $pos) {
								$new_html_tag = $a_tag.$rule['keywords'].$a_tag_close;
								if ($it > 0) {
									if ($terminate > 0 && $it >= $terminate) {//break if max number reaches limit
										break;
									}
									$size_diff_calc = $size_diff * $it;
									$pos = $pos + $size_diff_calc;
								}
								$io = substr_replace($io, $new_html_tag, $pos, Tools::strlen($rule['keywords']));
								$it++;
							}
						}
							
					}
				}
				else {
					$keys_array = explode(',', $rule['keywords']);
					foreach ($keys_array as $keyword) {
						$regex = '/(<([\w]+)[^>]*>)?(?<txt>\\b'.$keyword.'\\b)/ui';
						preg_match_all($regex, $io, $match, PREG_SET_ORDER|PREG_OFFSET_CAPTURE);
						if (!empty($match)) {
							$offset_collection = array();
							foreach ($match as $stick) {
								if (empty($stick['2'][0])) {
									array_push($offset_collection, $stick['3'][1]);
								}
							}
							if (!empty($offset_collection)) {
								$a_tag = '<a href="'.$rule['url'].'"'.$title.$target.$rel.' style="'.$color.'">';
								$a_tag_close = '</a>';
								$size_diff = Tools::strlen($a_tag) + Tools::strlen($a_tag_close);
								$it = 0;
								foreach ($offset_collection as $pos) {
									$new_html_tag = $a_tag.$keyword.$a_tag_close;
									if ($it > 0) {
										if ($terminate > 0 && $it >= $terminate) {//break if max number reaches limit
											break;
										}
										$size_diff_calc = $size_diff * $it;
										$pos = $pos + $size_diff_calc;
									}
									$io = substr_replace($io, $new_html_tag, $pos, Tools::strlen($keyword));
									$it++;
								}
							}
						}
					}
				}
			}
		}
		return $io;
	}
}

<?php
/**
* 2007-2018 PrestaShop
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
*  @copyright 2007-2018 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class AdminIndexFollowController extends ModuleAdminController {
	
	public function __construct()
    {
        $this->bootstrap = true;
        $this->show_toolbar = false;
        $this->context = Context::getContext();

        parent::__construct();
    }
	
	public function initContent()
    {
        parent::initContent();
        $this->content = $this->renderForm();
        $this->context->smarty->assign(array('content' => $this->content));
    }
	
	public function renderForm()
    {
		$ps_version = (Tools::version_compare(_PS_VERSION_, '1.7.0.0', '>=') == true) ? 1 : 0;
		$default_language = Configuration::get('PS_LANG_DEFAULT');
		$enable = (int)Configuration::get('FMM_ENABLE_INDEXFOLLOW_SYS');
		$cms_categories = $this->getSimpleCategories($default_language);
		$cms_pages = $this->getCMSPages($default_language);
		$categories = Category::getSimpleCategories($default_language);
		//getAllCategoriesName(null, $default_language, true, null, false);
		if (!empty($cms_categories)) {
			foreach ($cms_categories as &$cat) {
				$cat['indexed'] = (int)$this->getDbVal('index', 'cms_category', $cat['id_cms_category']);
				$cat['followed'] = (int)$this->getDbVal('follow', 'cms_category', $cat['id_cms_category']);
			}
		}
		if (!empty($cms_pages)) {
			foreach ($cms_pages as &$cms) {
				$cms['indexed'] = (int)$this->getDbVal('index', 'cms_pages', $cms['id_cms']);
				$cms['followed'] = (int)$this->getDbVal('follow', 'cms_pages', $cms['id_cms']);
			}
		}
		if (!empty($categories)) {
			foreach ($categories as &$category) {
				$category['indexed'] = (int)$this->getDbVal('index', 'category', $category['id_category']);
				$category['followed'] = (int)$this->getDbVal('follow', 'category', $category['id_category']);
			}
		}
		//dump($categories);exit;
		$this->context->smarty->assign(array(
			'ps_version' => (int)$ps_version,
            'action' => self::$currentIndex.'&token='.$this->token,
			'control_index_follow' => $enable,
			'cms_categories' => $cms_categories,
			'cms_pages' => $cms_pages,
			'categories' => $categories
        ));
		parent::renderForm();
		return $this->context->smarty->fetch(dirname(__FILE__).'/../../views/templates/admin/form.tpl');
	}
	
	public function postProcess()
    {
		if (Tools::isSubmit('submitIndexFollow')) {
			$enable = (int)Tools::getValue('control_index_follow');
			Configuration::updateValue('FMM_ENABLE_INDEXFOLLOW_SYS', $enable);
			$cms_cats_follow = Tools::getValue('cms_category_follow');
			$cms_category_index = Tools::getValue('cms_category_index');
			$cms_pages_follow = Tools::getValue('cms_pages_follow');
			$cms_pages_index = Tools::getValue('cms_pages_index');
			$category_follow = Tools::getValue('category_follow');
			$category_index = Tools::getValue('category_index');
			Db::getInstance()->delete(
				'indexfollow',
				'`page_type` = "cms_category"'
			);
			Db::getInstance()->delete(
				'indexfollow',
				'`page_type` = "cms_pages"'
			);
			Db::getInstance()->delete(
				'indexfollow',
				'`page_type` = "category"'
			);
			if (!empty($cms_cats_follow)) {
				foreach ($cms_cats_follow as $key => $follow) {
					Db::getInstance()->insert('indexfollow',
					array(
						'page_type' => 'cms_category',
						'follow' => (int)$follow,
						'id' => (int)$key)
					);
				}
				foreach ($cms_category_index as $key => $index) {
					Db::getInstance()->update('indexfollow',
					array(
						'index' => (int)$index), 'id = '.(int)$key.' AND `page_type` = "cms_category"'
					);
				}
			}
			if (!empty($cms_pages_follow)) {
				foreach ($cms_pages_follow as $key => $follow) {
					Db::getInstance()->insert('indexfollow',
					array(
						'page_type' => 'cms_pages',
						'follow' => (int)$follow,
						'id' => (int)$key)
					);
				}
				foreach ($cms_pages_index as $key => $index) {
					Db::getInstance()->update('indexfollow',
					array(
						'index' => (int)$index), 'id = '.(int)$key.' AND `page_type` = "cms_pages"'
					);
				}
			}
			if (!empty($category_follow)) {
				foreach ($category_follow as $key => $follow) {
					Db::getInstance()->insert('indexfollow',
					array(
						'page_type' => 'category',
						'follow' => (int)$follow,
						'id' => (int)$key)
					);
				}
				foreach ($category_index as $key => $index) {
					Db::getInstance()->update('indexfollow',
					array(
						'index' => (int)$index), 'id = '.(int)$key.' AND `page_type` = "category"'
					);
				}
			}
		}
        return parent::postProcess();
    }
	
	public static function getSimpleCategories($id_lang)
    {
        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
		SELECT c.`id_cms_category`, cl.`name`
		FROM `'._DB_PREFIX_.'cms_category` c
		LEFT JOIN `'._DB_PREFIX_.'cms_category_lang` cl ON (c.`id_cms_category` = cl.`id_cms_category`)
		WHERE cl.`id_lang` = '.(int)$id_lang.'
		GROUP BY c.`id_cms_category`
		ORDER BY cl.`name`');
    }
	
	private function getDbVal($field, $page, $id)
    {
		return Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue('SELECT `'.pSQL($field).'`
		FROM '._DB_PREFIX_.'indexfollow
		WHERE `id` = '.(int)$id.'
		AND `page_type` = "'.pSQL($page).'"');
    }
	
	public static function getCMSPages($idLang = null, $idCmsCategory = null, $active = true, $idShop = null)
    {
        $sql = new DbQuery();
        $sql->select('*');
        $sql->from('cms', 'c');

        if ($idLang) {
            if ($idShop) {
                $sql->innerJoin('cms_lang', 'l', 'c.id_cms = l.id_cms AND l.id_lang = '.(int) $idLang.' AND l.id_shop = '.(int) $idShop);
            } else {
                $sql->innerJoin('cms_lang', 'l', 'c.id_cms = l.id_cms AND l.id_lang = '.(int) $idLang);
            }
        }

        if ($idShop) {
            $sql->innerJoin('cms_shop', 'cs', 'c.id_cms = cs.id_cms AND cs.id_shop = '.(int) $idShop);
        }

        if ($active) {
            $sql->where('c.active = 1');
        }

        if ($idCmsCategory) {
            $sql->where('c.id_cms_category = '.(int) $idCmsCategory);
        }
		$sql->groupBy('c.id_cms');
        $sql->orderBy('position');

        return Db::getInstance()->executeS($sql);
    }
}


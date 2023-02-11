<?php
/**
* 2007-2019 PrestaShop
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
*  @copyright 2007-2019 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class AdminInternalLinkingController extends ModuleAdminController
{
    public function __construct()
    {
        $this->className = 'SeoInternalLinkingModel' ;
        $this->table = 'seointernallinking' ;
        $this->deleted = false;
        $this->identifier = 'id_seointernallinking' ;
        $this->lang = true ;
        $this->bootstrap = true ;
        $this->explicitSelect = true ;
        $this->context = Context::getContext();
        parent::__construct();
        $this->fields_list = array(
            'id_seointernallinking' => array('title' => $this->l('ID'),
                'align' => 'center', 'class' => 'fixed-width-xs'
            ),
            'title' => array('title' => $this->l('Title'), 'align' => 'center', 'lang' => true),
            'active' => array('title' => $this->l('Enabled'), 'align' => 'center', 'type' => 'bool')
        );
        $this->bulk_actions = array(
            'delete' => array(
                'text' => $this->l('Delete selected'),
                'confirm' => $this->l('Delete selected items?'),
                'icon' => 'icon-trash'
            )
        );
    }
    
    public function renderList()
    {
        $this->addRowAction('edit');
        $this->addRowAction('delete');
        return parent::renderList();
    }
    
    public function renderForm()
    {
        $obj = $this->loadObject(true);
        $type = (Tools::version_compare(_PS_VERSION_, '1.7.0.0', '<') == true) ? 'radio' : 'switch';
        $types = array('index', 'cms', 'category', 'product');
        $this->fields_form = array(
            'tinymce' => false,
            'legend' => array(
                'title' => $this->l('Add/Edit SEO Internal Linking'),
                'icon' => 'icon-link'
            ),
            'input' => array(
                    array(
                        'type' => $type,
                        'label' => $this->l('Status'),
                        'name' => 'active',
                        'required' => true,
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Disabled')
                            )
                        )
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Title'),
                        'name' => 'title',
                        'lang' => true,
                        'required' => false,
                        'hint' => $this->l('Invalid characters:').' <>;=#{}',
                        'desc' => $this->l('It will be also used as title attribute of href tag.'),
                    ),
                    array(
                        'type' => 'color',
                        'label' => $this->l('Link Color'),
                        'name' => 'color',
                        'desc' => $this->l('It will be color of href tag.'),
                    ),
                    array(
                    'type' => $type,
                    'label' => $this->l('Open in new window'),
                    'name' => 'target',
                    'is_bool' => true,
                    'values' => array(
                        array(
                           'id' => 'active_on',
                           'value' => 1,
                           'label' => $this->l('Yes')
                        ),
                        array(
                           'id' => 'active_off',
                           'value' => 0,
                           'label' => $this->l('No')
                        )
                    )
                ),
                    array(
                        'type' => $type,
                        'label' => $this->l('Add Nofollow'),
                        'name' => 'rel',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Yes')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('No')
                            )
                        )
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Number of replacements'),
                        'name' => 'replacements',
                        'lang' => false,
                        'col' => 4,
                        'placeholder' => 'integer only',
                        'required' => false,
                        'hint' => $this->l('Invalid characters:').' <>;=#{}',
                        'desc' => $this->l(
                            'Number of replacments per page, if this value is
                            1 than only first found text will be linked.'
                        ),
                    ),
                    array(
                        'type' => 'checkbox',
                        'name' => 'types',
                        'label' => $this->l('Target Page Types'),
                        'required' => true,
                        'values' => array(
                            'query' => array(
                                array('id' => 'index',
                                      'name' => $this->l('Home Page'),
                                      'val' => 'index'),
                                array('id' => 'cms',
                                      'name' => $this->l('CMS Pages'),
                                      'val' => 'cms'),
                                array('id' => 'product',
                                      'name' => $this->l('Product Pages'),
                                      'val' => 'product'),
                                array('id' => 'category',
                                      'name' => $this->l('Category Pages'),
                                      'val' => 'category'),
                            ),
                            'id' => 'val',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Target Link'),
                        'name' => 'url',
                        'lang' => true,
                        'required' => true,
                        'hint' => $this->l('Invalid characters:').' <>;=#{}',
                        'desc' => $this->l('It will used as link for href tag.'),
                    ),
                    array(
                        'type' => 'tags',
                        'label' => $this->l('Keywords'),
                        'name' => 'keywords',
                        'lang' => true,
                        'required' => true,
                        'hint' => $this->l('Invalid characters:').' <>;=#{}',
                        'desc' => $this->l('To add words, write something, and then press the "Enter" key OR comma.'),
                    ),
                ),
            'submit' => array(
                'title' => $this->l('Save'),
                ),
            );
        if (Shop::isFeatureActive()) {
            $this->fields_form['input'][] = array(
                'type' => 'shop',
                'label' => $this->l('Shop association'),
                'name' => 'checkBoxShopAsso',
            );
        }
        if ($obj->id) {
            $stack = $obj->types;
            $stack = explode(',', $stack);
            foreach ($types as $type) {
                if (is_array($stack) && in_array($type, $stack)) {
                    $this->fields_value['types_'.$type] = true;
                }
            }
        }
        return parent::renderForm();
    }
    
    public function init()
    {
        parent::init();
        Shop::addTableAssociation($this->table, array('type' => 'shop'));
        if (Shop::getContext() == Shop::CONTEXT_SHOP) {
            $this->_join .= ' LEFT JOIN `'._DB_PREFIX_.
            'seointernallinking_shop` sa ON (a.`id_seointernallinking` = sa.`id_seointernallinking` AND sa.id_shop = '.
            (int)$this->context->shop->id.') ';
        }
        if (Shop::getContext() == Shop::CONTEXT_SHOP && Shop::isFeatureActive()) {
            $this->_where = ' AND sa.`id_shop` = '.(int)Context::getContext()->shop->id;
        }
    }
    
    public function initProcess()
    {
        // unused $action = Tools::getValue('action'); removed
        return parent::initProcess();
    }
    
    public function setMedia($isNewTheme = false)
    {
        parent::setMedia($isNewTheme);
        $this->addjQueryPlugin('tagify', null, false);
    }
}

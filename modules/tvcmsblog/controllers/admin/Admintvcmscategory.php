<?php
/**
* 2007-2022 PrestaShop
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2022 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/
class AdmintvcmscategoryController extends ModuleAdminController
{
    public function __construct()
    {
        $this->table = 'tvcmscategory';
        $this->className = 'TvcmsCategoryClass';
        $this->lang = true;
        $this->deleted = false;
        $this->module = 'tvcmsblog';
        $this->explicitSelect = true;
        $this->_defaultOrderBy = 'position';
        $this->allow_export = false;
        $this->_defaultOrderWay = 'DESC';
        $this->bootstrap = true;
        if (Shop::isFeatureActive()) {
            Shop::addTableAssociation($this->table, ['type' => 'shop']);
        }
        parent::__construct();
        $this->fields_list = [
            'id_tvcmscategory' => [
                'title' => $this->l('ID'),
                'width' => 100,
                'type' => 'text',
            ],
            'name' => [
                    'title' => $this->l('Category Name'),
                    'width' => 60,
                    'type' => 'text',
            ],
            'link_rewrite' => [
                    'title' => $this->l('URL Rewrite'),
                    'width' => 220,
                    'type' => 'text',
            ],
            'position' => [
                'title' => $this->l('Position'),
                'align' => 'left',
                'position' => 'position',
            ],
            'active' => [
                'title' => $this->l('Status'),
                'active' => 'status',
                'type' => 'bool',
                'orderby' => false,
            ],
        ];
        $this->bulk_actions = [
            'delete' => [
                'text' => $this->l('Delete selected'),
                'icon' => 'icon-trash',
                'confirm' => $this->l('Delete selected items?'),
            ],
        ];
        parent::__construct();
    }

    public function init()
    {
        $tmp = Tools::getValue('id_tvcmscategory');
        if (Tools::getIsset('deletetvcmscategory') && !empty($tmp)) {
            $sql = 'SELECT * FROM `' . _DB_PREFIX_ . 'tvcmscategory` WHERE '
            . ' `id_tvcmscategory` = ' . $tmp;
            $res = Db::getInstance()->executeS($sql);
            if (file_exists(TVCMSBLOG_IMG_DIR . $res[0]['category_img'])) {
                unlink(TVCMSBLOG_IMG_DIR . $res[0]['category_img']);
            }

            $categories = TvcmsImageTypeClass::getAllImageTypes();
            foreach ($categories as $category) {
                if (file_exists(TVCMSBLOG_IMG_DIR . $category['name'] . '-' . $res[0]['category_img'])) {
                    unlink(TVCMSBLOG_IMG_DIR . $category['name'] . '-' . $res[0]['category_img']);
                }
            }
        }

        parent::init();
        $this->_join = 'LEFT JOIN ' . _DB_PREFIX_ . 'tvcmscategory_shop sbp ON a.id_tvcmscategory=sbp.id_tvcmscategory '
            . '&& sbp.id_shop IN(' . implode(',', Shop::getContextListShopID()) . ')';
        $this->_select = 'sbp.id_shop';
        $this->_defaultOrderBy = 'a.position';
        $this->_defaultOrderWay = 'DESC';
        if (Shop::isFeatureActive() && Shop::getContext() != Shop::CONTEXT_SHOP) {
            $this->_group = 'GROUP BY a.id_tvcmscategory';
        }
        $this->_where = ' AND a.category_type = "category" ';
        $this->_select = 'a.position position';
    }

    public function setMedia($isNewTheme = false)
    {
        parent::setMedia();
        $this->addJqueryUi('ui.widget');
        $this->addJqueryPlugin('tagify');
        $this->addJqueryPlugin('select2');
    }

    public function renderForm()
    {
        $id_tvcmscategory = Tools::getValue('id_tvcmscategory');
        $category_img_temp = '';
        if (isset($id_tvcmscategory) && !empty($id_tvcmscategory)) {
            $tvcmscategoryclass = new TvcmsCategoryClass($id_tvcmscategory);
            if (isset($tvcmscategoryclass->category_img) && !empty($tvcmscategoryclass->category_img)) {
                $category_img_temp = '<img src="' . TVCMSBLOG_IMG_URI . $tvcmscategoryclass->category_img
                    . '" height="110" width="auto"><br>';
            }
        }
        $this->fields_form = [
            'legend' => [
                'title' => $this->l('JHPTemplate Blog Category'),
            ],
            'input' => [
                [
                    'type' => 'hidden',
                    'name' => 'category_type',
                ],
                [
                    'type' => 'text',
                    'label' => $this->l('Category Name'),
                    'name' => 'name',
                    'id' => 'name', // for copyMeta2friendlyURL compatibility
                    'class' => 'copyMeta2friendlyURL',
                    'desc' => $this->l('Enter Your Category Name'),
                    'lang' => true,
                ],
                [
                    'type' => 'textarea',
                    'label' => $this->l('Category Description'),
                    'name' => 'description',
                    'autoload_rte' => true,
                    'rows' => 5,
                    'cols' => 40,
                    'lang' => true,
                    'desc' => $this->l('Please Enter Category Description'),
                ],
                [
                    'type' => 'file',
                    'label' => $this->l('Category Feature Image'),
                    'name' => 'category_img',
                    'desc' => $category_img_temp . $this->l('Please upload category feature image from your computer.'),
                ],
                [
                    'type' => 'select',
                    'label' => $this->l('Select Category Group'),
                    'name' => 'category_group',
                    'options' => [
                        'query' => TvcmsCategoryClass::serializeCategory(),
                        'id' => 'id',
                        'name' => 'name',
                    ],
                ],
                [
                    'type' => 'text',
                    'label' => $this->l('Meta Title'),
                    'name' => 'title',
                    'desc' => $this->l('Enter Your Category Meta Title for SEO'),
                    'lang' => true,
                ],
                [
                    'type' => 'textarea',
                    'label' => $this->l('Meta Description'),
                    'name' => 'meta_description',
                    'desc' => $this->l('Enter Your Category Meta Description for SEO'),
                    'lang' => true,
                ],
                [
                    'type' => 'tags',
                    'label' => $this->l('Meta Keyword'),
                    'name' => 'keyword',
                    'desc' => $this->l('Enter Your Category Meta Keyword for SEO. Seperate by comma(,)'),
                    'lang' => true,
                ],
                [
                    'type' => 'text',
                    'label' => $this->l('URL Rewrite'),
                    'name' => 'link_rewrite',
                    'desc' => $this->l('Enter Your Category URL for SEO URL'),
                    'lang' => true,
                ],
                [
                    'type' => 'switch',
                    'label' => $this->l('Status'),
                    'name' => 'active',
                    'required' => false,
                    'class' => 't',
                    'is_bool' => true,
                    'values' => [
                        [
                            'id' => 'active',
                            'value' => 1,
                            'label' => $this->l('Enabled'),
                        ],
                        [
                            'id' => 'active',
                            'value' => 0,
                            'label' => $this->l('Disabled'),
                        ],
                    ],
                ],
            ],
            'submit' => [
                'title' => $this->l('Save'),
                'class' => 'btn btn-default pull-right',
            ],
        ];
        if (Shop::isFeatureActive()) {
            $this->fields_form['input'][] = [
                'type' => 'shop',
                'label' => $this->l('Shop association:'),
                'name' => 'checkBoxShopAsso',
            ];
        }
        if (!($tvcmscategoryclass = $this->loadObject(true))) {
            return;
        }
        if (isset($tvcmscategoryclass->category_type) && !empty($tvcmscategoryclass->category_type)) {
            $this->fields_value['category_type'] = $tvcmscategoryclass->category_type;
        } else {
            $this->fields_value['category_type'] = 'category';
        }
        $this->tpl_form_vars = [
            'active' => $this->object->active,
            'PS_ALLOW_ACCENTED_CHARS_URL', (int) Configuration::get('PS_ALLOW_ACCENTED_CHARS_URL'),
        ];
        Media::addJsDef(['PS_ALLOW_ACCENTED_CHARS_URL' => (int) Configuration::get('PS_ALLOW_ACCENTED_CHARS_URL')]);

        return parent::renderForm();
    }

    public function renderList()
    {
        if (isset($this->_filter) && trim($this->_filter) == '') {
            $this->_filter = $this->original_filter;
        }
        $this->addRowAction('edit');
        $this->addRowAction('delete');

        return parent::renderList();
    }

    public function initToolbar()
    {
        parent::initToolbar();
    }

    public function processPosition()
    {
        if ($this->tabAccess['edit'] !== '1') {
            $this->errors[] = Tools::displayError('You do not have permission to edit this.');
        } elseif (!Validate::isLoadedObject($object = new TvcmsCategoryClass((int) Tools::getValue(
            $this->identifier,
            Tools::getValue('id_tvcmscategory', 1)
        )))) {
            $this->errors[] = Tools::displayError('An error occurred while updating the status for an object.') . ' <b>' .
            $this->table . '</b> ' . Tools::displayError('(cannot load object)');
        }
        if (!$object->updatePosition((int) Tools::getValue('way'), (int) Tools::getValue('position'))) {
            $this->errors[] = Tools::displayError('Failed to update the position.');
        } else {
            $object->regenerateEntireNtree();
            Tools::redirectAdmin(self::$currentIndex . '&' . $this->table . 'Orderby=position&' . $this->table
                . 'Orderway=asc&conf=5' . (($id_tvcmscategory = (int) Tools::getValue($this->identifier)) ? ('&'
                    . $this->identifier . '=' . $id_tvcmscategory) : '') . '&token='
                . Tools::getAdminTokenLite('Admintvcmscategory'));
        }
    }

    public function ajaxProcessUpdatePositions()
    {
        $id_tvcmscategory = (int) Tools::getValue('id');
        $way = (int) Tools::getValue('way');
        $positions = Tools::getValue($this->table);
        if (is_array($positions)) {
            foreach ($positions as $key => $value) {
                $pos = explode('_', $value);
                if ((isset($pos[1]) && isset($pos[2])) && ($pos[2] == $id_tvcmscategory)) {
                    $position = $key + 1;

                    break;
                }
            }
        }
        $tvcmscategoryclass = new TvcmsCategoryClass($id_tvcmscategory);
        if (Validate::isLoadedObject($tvcmscategoryclass)) {
            if (isset($position) && $tvcmscategoryclass->updatePosition($way, $position)) {
                Hook::exec('action' . $this->className . 'Update');
                exit(true);
            } else {
                exit('{"hasError" : true, errors : "Can not update tvcmscategoryclass position"}');
            }
        } else {
            exit('{"hasError" : true, "errors" : "This tvcmscategoryclass can not be loaded"}');
        }
    }
}

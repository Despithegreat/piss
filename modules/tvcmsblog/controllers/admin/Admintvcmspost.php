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
class AdmintvcmspostController extends ModuleAdminController
{
    public function __construct()
    {
        $this->table = 'tvcmsposts';
        $this->className = 'TvcmsPostsClass';
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
            'id_tvcmsposts' => [
                    'title' => $this->l('Id'),
                    'width' => 100,
                    'type' => 'text',
            ],
            'post_title' => [
                    'title' => $this->l('Post Title'),
                    'width' => 60,
                    'type' => 'text',
            ],
            'post_excerpt' => [
                    'title' => $this->l('Excerpt'),
                    'width' => 220,
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
                'width' => 60,
                'align' => 'center',
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
        $tmp = Tools::getValue('id_tvcmsposts');
        if (Tools::getIsset('deletettvcmsposts') && !empty($tmp)) {
            $res = TvcmsPostsClass::getSinglePost($tmp);
            $categories = TvcmsImageTypeClass::getAllImageTypes();

            if (file_exists(TVCMSBLOG_IMG_DIR . $res['post_img'])) {
                unlink(TVCMSBLOG_IMG_DIR . $res['post_img']);
            }
            foreach ($categories as $category) {
                if (file_exists(TVCMSBLOG_IMG_DIR . $category['name'] . '-' . $res['post_img'])) {
                    unlink(TVCMSBLOG_IMG_DIR . $category['name'] . '-' . $res['post_img']);
                }
            }

            $img = explode(',', $res['gallery']);
            foreach ($img as $img_type) {
                if (file_exists(TVCMSBLOG_IMG_DIR . $img_type)) {
                    unlink(TVCMSBLOG_IMG_DIR . $img_type);
                }
                foreach ($categories as $category) {
                    if (file_exists(TVCMSBLOG_IMG_DIR . $category['name'] . '-' . $img_type)) {
                        unlink(TVCMSBLOG_IMG_DIR . $category['name'] . '-' . $img_type);
                    }
                }
            }
        }

        parent::init();
        $this->_join = 'LEFT JOIN ' . _DB_PREFIX_ . 'tvcmsposts_shop sbp ON a.id_tvcmsposts=sbp.id_tvcmsposts '
            . '&& sbp.id_shop IN(' . implode(',', Shop::getContextListShopID()) . ')';
        $this->_select = 'sbp.id_shop';
        $this->_defaultOrderBy = 'a.position';
        $this->_defaultOrderWay = 'DESC';
        $this->_where = ' AND a.post_type = "post" ';
        if (Shop::isFeatureActive() && Shop::getContext() != Shop::CONTEXT_SHOP) {
            $this->_group = 'GROUP BY a.id_tvcmsposts';
        }
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
        $id_tvcmsposts = Tools::getValue('id_tvcmsposts');
        // $audio_temp = '';
        $video_temp = '';
        $gallery_temp = '';
        $gallery_temp_str = '';
        $post_img_temp = '';
        if (isset($id_tvcmsposts) && !empty($id_tvcmsposts)) {
            $tvcmspostsclass = new TvcmsPostsClass($id_tvcmsposts);
            /*if (isset($tvcmspostsclass->audio) && !empty($tvcmspostsclass->audio)) {
                $audio_temp = @explode(",", $tvcmspostsclass->audio);
            }*/
            if (isset($tvcmspostsclass->video) && !empty($tvcmspostsclass->video)) {
                $video_temp = @explode(',', $tvcmspostsclass->video);
            }
            if (isset($tvcmspostsclass->gallery) && !empty($tvcmspostsclass->gallery)) {
                $gallery_temp = @explode(',', $tvcmspostsclass->gallery);
                $gallery_temp_str = $tvcmspostsclass->gallery;
            }
            if (isset($tvcmspostsclass->post_img) && !empty($tvcmspostsclass->post_img)) {
                $post_img_temp = '<img src="' . TVCMSBLOG_IMG_URI . $tvcmspostsclass->post_img . '" height="110" '
                    . 'width="auto"><br>';
            }
        }
        $this->fields_form = [
            'legend' => [
                'title' => $this->l('Add New Post'),
            ],
            'input' => [
                [
                    'type' => 'hidden',
                    'name' => 'post_type',
                ],
                [
                    'type' => 'text',
                    'label' => $this->l('Post Title'),
                    'name' => 'post_title',
                    'id' => 'name',
                    'class' => 'copyMeta2friendlyURL',
                    'desc' => $this->l('Enter Your Blog Post Title'),
                    'lang' => true,
                ],
                [
                    'type' => 'radio',
                    'label' => $this->l('Post Type'),
                    'name' => 'post_format',
                    'required' => false,
                    'class' => 't',
                    'is_bool' => true,
                    'values' => [
                        [
                            'id' => 'standrad',
                            'value' => 'standrad',
                            'label' => $this->l('Image'),
                        ],
                        [
                            'id' => 'gallery',
                            'value' => 'gallery',
                            'label' => $this->l('Gallery'),
                        ],
                        [
                            'id' => 'video',
                            'value' => 'video',
                            'label' => $this->l('Video'),
                        ],
                        // array(
                        //     'id' => 'audio',
                        //     'value' => 'audio',
                        //     'label' => $this->l('Audio')
                        // )
                    ],
                ],
                [
                    'type' => 'textarea',
                    'label' => $this->l('Post Excerpt'),
                    'name' => 'post_excerpt',
                    'desc' => $this->l('Enter Your Blog Post Excerpt'),
                    'lang' => true,
                ],
                [
                    'type' => 'textarea',
                    'label' => $this->l('Post Content'),
                    'name' => 'post_content',
                    'desc' => $this->l('Enter Your Blog Post Content'),
                    'lang' => true,
                    'autoload_rte' => true,
                ],
                [
                    'type' => 'file',
                    'label' => $this->l('Post Feature Image'),
                    'name' => 'post_img',
                    'desc' => $post_img_temp . $this->l('Please Upload Feature Image From Your Computer.'),
                ],
                [
                    'type' => 'select',
                    'label' => $this->l('Select Default Category'),
                    'name' => 'category',
                    'options' => [
                        'query' => TvcmsCategoryClass::serializeCategory(),
                        'id' => 'id',
                        'name' => 'name',
                    ],
                ],
                // array(
                //     'type' => 'checkbox',
                //     'label' => $this->l('Select Categories'),
                //     'name' => 'extra_categories',
                //     'values' => array(
                //         'query' => TvcmsCategoryClass::serializeCategory(false),
                //         'id' => 'id',
                //         'name' => 'name'
                //     )
                // ),
                [
                    'type' => 'select',
                    'label' => $this->l('Select Related Products'),
                    'name' => 'related_products',
                    'options' => [
                        'query' => self::getallproducts(),
                        'id' => 'id',
                        'name' => 'name',
                    ],
                ],
                [
                    'type' => 'text',
                    'label' => $this->l('Meta Title'),
                    'name' => 'meta_title',
                    'desc' => $this->l('Enter Your Post Meta Title for SEO'),
                    'lang' => true,
                ],
                [
                    'type' => 'tags',
                    'label' => $this->l('Meta Tag'),
                    'name' => 'meta_tag',
                    'desc' => $this->l('Enter Your Post Meta Tag. Seperate by comma(,)'),
                ],
                [
                    'type' => 'textarea',
                    'label' => $this->l('Meta Description'),
                    'name' => 'meta_description',
                    'desc' => $this->l('Enter Your Post Meta Description for SEO'),
                    'lang' => true,
                ],
                [
                    'type' => 'tags',
                    'label' => $this->l('Meta Keyword'),
                    'name' => 'meta_keyword',
                    'desc' => $this->l('Enter Your Post Meta Keyword for SEO. Seperate by comma(,)'),
                    'lang' => true,
                ],
                [
                    'type' => 'text',
                    'label' => $this->l('URL Rewrite'),
                    'name' => 'link_rewrite',
                    'desc' => $this->l('Enter Your Post Url for SEO'),
                    'lang' => true,
                ],
                [
                    'type' => 'gallery',
                    'label' => $this->l('Gallery'),
                    'name' => 'gallery_temp',
                    'defaults' => $gallery_temp,
                    'defaults_str' => $gallery_temp_str,
                    'url' => TVCMSBLOG_IMG_URI,
                    'desc' => $this->l('Please give Image url for Gallery post. seperate by comma(,). '
                            . 'You can add Any Kind of Image URL.'),
                ],
                [
                    // 'type' => 'textarea',
                    'type' => 'text_multiple',
                    'label' => $this->l('Video'),
                    'name' => 'video_temp',
                    'defaults' => $video_temp,
                    'desc' => $this->l('Enter Youtube Embed Link Other Link is Not Valid.'),
                ],
                // array(
                //     // 'type' => 'textarea',
                //     'type' => 'text_multiple',
                //     'label' => $this->l('Audio'),
                //     'name' => 'audio_temp',
                //     'defaults' => $audio_temp,
                //     'desc' => $this->l('Please give Audio url for Audio post. seperate by comma(,). '
                //         .'You can add any kind of anudio sourch.'),
                // ),
                [
                    'type' => 'select',
                    'label' => $this->l('Comment Status'),
                    'name' => 'comment_status',
                    'options' => [
                        'query' => [
                                [
                                    'id' => 'open',
                                    'name' => 'Open',
                                ],
                                [
                                    'id' => 'close',
                                    'name' => 'Closed',
                                ],
                                [
                                    'id' => 'disable',
                                    'name' => 'Disabled',
                                ],
                            ],
                        'id' => 'id',
                        'name' => 'name',
                    ],
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
        if (!($tvcmspostsclass = $this->loadObject(true))) {
            return;
        }
        $this->setdefaultvalue($tvcmspostsclass);
        $this->fields_form['submit'] = [
            'title' => $this->l('Save'),
            'class' => 'btn btn-default pull-right',
        ];
        $this->tpl_form_vars = [
            'active' => $this->object->active,
            'PS_ALLOW_ACCENTED_CHARS_URL', (int) Configuration::get('PS_ALLOW_ACCENTED_CHARS_URL'),
        ];
        Media::addJsDef(['PS_ALLOW_ACCENTED_CHARS_URL' => (int) Configuration::get('PS_ALLOW_ACCENTED_CHARS_URL')]);

        return parent::renderForm();
    }

    public function setdefaultvalue($obj)
    {
        if (isset($obj->post_type) && !empty($obj->post_type)) {
            $this->fields_value['post_type'] = $obj->post_type;
        } else {
            $this->fields_value['post_type'] = 'post';
        }
        if (isset($obj->post_format) && !empty($obj->post_format)) {
            $this->fields_value['post_format'] = $obj->post_format;
        } else {
            $this->fields_value['post_format'] = 'standrad';
        }
        if (isset($obj->active) && !empty($obj->active)) {
            $this->fields_value['active'] = $obj->active;
        } else {
            $this->fields_value['active'] = 1;
        }
        if (isset($obj->id) && !empty($obj->id)) {
            $this->fields_value['meta_tag'] = TvcmsPostsClass::getPostTags($obj->id);
        } else {
            $this->fields_value['meta_tag'] = '';
        }
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

    public static function getallproducts()
    {
        $rslt = [];
        $rslt[0]['id'] = 0;
        $rslt[0]['name'] = 'Select Products';
        $id_lang = (int) Context::getContext()->language->id;
        $sql = 'SELECT p.`id_product`, pl.`name`
                FROM `' . _DB_PREFIX_ . 'product` p
                ' . Shop::addSqlAssociation('product', 'p') . '
                LEFT JOIN `' . _DB_PREFIX_ . 'product_lang` pl ON (p.`id_product` = pl.`id_product` '
                    . Shop::addSqlRestrictionOnLang('pl') . ')
                WHERE pl.`id_lang` = ' . (int) $id_lang . ' ORDER BY pl.`name`';
        $products = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
        if (isset($products)) {
            $i = 1;
            foreach ($products as $r) {
                $rslt[$i]['id'] = $r['id_product'];
                $rslt[$i]['name'] = $r['name'];
                ++$i;
            }
        }

        return $rslt;
    }

    public function initToolbar()
    {
        parent::initToolbar();
    }

    public function processPosition()
    {
        if ($this->tabAccess['edit'] !== '1') {
            $this->errors[] = Tools::displayError('You do not have permission to edit this.');
        } elseif (!Validate::isLoadedObject($object = new TvcmsPostsClass((int) Tools::getValue(
            $this->identifier,
            Tools::getValue('id_tvcmsposts', 1)
        )))) {
            $this->errors[] = Tools::displayError('An error occurred while updating the status for an object.') . ' <b>' .
                $this->table . '</b> ' . Tools::displayError('(cannot load object)');
        }
        if (!$object->updatePosition((int) Tools::getValue('way'), (int) Tools::getValue('position'))) {
            $this->errors[] = Tools::displayError('Failed to update the position.');
        } else {
            $object->regenerateEntireNtree();
            Tools::redirectAdmin(self::$currentIndex . '&' . $this->table . 'Orderby=position&' . $this->table
                . 'Orderway=asc&conf=5' . (($id_tvcmsposts = (int) Tools::getValue($this->identifier)) ? ('&'
                    . $this->identifier . '=' . $id_tvcmsposts) : '') . '&token='
                . Tools::getAdminTokenLite('Admintvcmscategory'));
        }
    }

    public function ajaxProcessUpdatePositions()
    {
        $id_tvcmsposts = (int) Tools::getValue('id');
        $way = (int) Tools::getValue('way');
        $positions = Tools::getValue($this->table);
        if (is_array($positions)) {
            foreach ($positions as $key => $value) {
                $pos = explode('_', $value);
                if ((isset($pos[1]) && isset($pos[2])) && ($pos[2] == $id_tvcmsposts)) {
                    $position = $key + 1;

                    break;
                }
            }
        }
        $tvcmspostsclass = new TvcmsPostsClass($id_tvcmsposts);
        if (Validate::isLoadedObject($tvcmspostsclass)) {
            if (isset($position) && $tvcmspostsclass->updatePosition($way, $position)) {
                Hook::exec('action' . $this->className . 'Update');
                exit(true);
            } else {
                exit('{"hasError" : true, errors : "Can not update tvcmspostsclass position"}');
            }
        } else {
            exit('{"hasError" : true, "errors" : "This tvcmspostsclass can not be loaded"}');
        }
    }
}

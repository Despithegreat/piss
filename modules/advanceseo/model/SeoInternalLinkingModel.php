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

class SeoInternalLinkingModel extends ObjectModel
{
    public $id_seointernallinking;
    public $title;
    public $active;
    public $rel;
    public $types;
    public $color;
    public $url;
    public $keywords;
    public $replacements;
    public $target;
    
    public static $definition = array(
        'table' => 'seointernallinking',
        'primary' => 'id_seointernallinking',
        'multilang' => true,
        'fields' => array(
            'id_seointernallinking' => array('type' => self::TYPE_INT),
            'active' => array('type' => self::TYPE_BOOL),
            'color' => array('type' => self::TYPE_STRING),
            'title' => array('type' => self::TYPE_STRING, 'lang' => true),
            'url' => array('type' => self::TYPE_STRING, 'lang' => true),
            'keywords' => array('type' => self::TYPE_STRING, 'lang' => true),
            'types' => array('type' => self::TYPE_STRING),
            'rel' => array('type' => self::TYPE_INT),
            'replacements' => array('type' => self::TYPE_INT),
            'target' => array('type' => self::TYPE_INT),
        ),
    );
    
    public function add($autoDate = true, $nullValues = false)
    {
        $types = array('index', 'cms', 'category', 'product');
        $selected_types = array();
        foreach ($types as $type) {
            $val = Tools::getValue('types_'.$type);
            if ($val && !empty($val)) {
                array_push($selected_types, $val);
            }
        }
        if (!empty($selected_types)) {
            $selected_types = implode(',', $selected_types);
            $this->types = $selected_types;
        }

        return parent::add($autoDate, true);
    }
    
    public function update($nullValues = false)
    {
        $types = array('index', 'cms', 'category', 'product');
        $selected_types = array();
        foreach ($types as $type) {
            $val = Tools::getValue('types_'.$type);
            if ($val && !empty($val)) {
                array_push($selected_types, $val);
            }
        }
        if (!empty($selected_types)) {
            $selected_types = implode(',', $selected_types);
            $this->types = $selected_types;
        }

        return parent::update($nullValues);
    }
    
    public static function getActiveRule($page, $id_lang, $id_shop)
    {
        return Db::getInstance()->executeS('SELECT a.*, l.`title`, l.`keywords`, l.`url`
            FROM `'._DB_PREFIX_.'seointernallinking` a
			LEFT JOIN `'._DB_PREFIX_.'seointernallinking_shop` b
			ON (a.`id_seointernallinking` = b.`id_seointernallinking`)
            LEFT JOIN `'._DB_PREFIX_.'seointernallinking_lang` l
			ON (a.`id_seointernallinking` = l.`id_seointernallinking` AND l.`id_lang` = '.(int)$id_lang.')
            WHERE a.`types` LIKE (\'%'.pSQL($page).'%\')
            AND a.`active` > 0
			AND b.`id_shop` = '.(int)$id_shop);
    }
}

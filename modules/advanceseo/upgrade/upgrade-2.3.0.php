<?php
/**
* DISCLAIMER
*
* Do not edit or add to this file.
* You are not authorized to modify, copy or redistribute this file.
* Permissions are reserved by FME Modules.
*
*  @author    FMM Modules
*  @copyright FME Modules 2019
*  @license   Single domain
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_2_3_0($module)
{
    $return = true;
    $module->registerHook('filterCategoryContent');
	$module->registerHook('filterCmsContent');
    $return = Db::getInstance()->execute('CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'seointernallinking` (
            `id_seointernallinking` int(10) NOT NULL auto_increment,
            `target` int(10) NOT NULL DEFAULT 0,
            `color` varchar(255) NOT NULL,
            `rel` int(10) NOT NULL DEFAULT 0,
            `replacements` int(10) NOT NULL DEFAULT 0,
            `types` varchar(255) NOT NULL,
            `active` int(10) unsigned NOT NULL,
            PRIMARY KEY (`id_seointernallinking`))');
    $return &= Db::getInstance()->execute('CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'seointernallinking_shop` (
                `id_seointernallinking` int(10) NOT NULL,
                `id_shop` int(10) NOT NULL,
                PRIMARY KEY (`id_seointernallinking`, `id_shop`),
                KEY `id_shop` (`id_shop`)
        ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;');
    $return &= Db::getInstance()->execute('CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'seointernallinking_lang` (
                `id_seointernallinking` int(10) NOT NULL,
                `id_lang` int(10) NOT NULL,
                `title` varchar(255) NOT NULL,
                `url` varchar(255) NOT NULL,
                `keywords` text,
                PRIMARY KEY (`id_seointernallinking`, `id_lang`),
                KEY `id_shop` (`id_lang`)
        ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;');
    if (Tools::version_compare(_PS_VERSION_, '1.7.0.0', '<') == true) {
            Tools::copy(_PS_MODULE_DIR_.'advanceseo/includes/CmsController.php', _PS_OVERRIDE_DIR_.'controllers/front/CmsController.php');
            if (file_exists(_PS_CACHE_DIR_.'class_index.php')) {
                rename(_PS_CACHE_DIR_.'class_index.php', _PS_CACHE_DIR_.'class_index'.rand(pow(10, 3 - 1), pow(10, 3) - 1).'.php');
            }
        }
    $module->installOverrides();
    $tab = new Tab();
    $tab->class_name = 'AdminInternalLinking';
    $tab->id_parent = Tab::getIdFromClassName('AdminAdvanceSeo');
    $tab->module = 'advanceseo';
    $tab->name[(int)(Configuration::get('PS_LANG_DEFAULT'))] = $module->l('SEO Internal Linking');
    $tab->add();
    return $return;
}

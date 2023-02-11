<?php
/**
* DISCLAIMER
*
* Do not edit or add to this file.
* You are not authorized to modify, copy or redistribute this file.
* Permissions are reserved by FME Modules.
*
*  @author    FMM Modules
*  @copyright FME Modules 2018
*  @license   Single domain
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_1_7_0($module)
{
    Db::getInstance()->execute('CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'indexfollow` (
				`id_indexfollow` int(10) NOT NULL auto_increment,
				`page_type` varchar(255) NOT NULL,
				`id` int(10) NOT NULL,
				`index` int(10) NOT NULL,
				`follow` int(10) NOT NULL,
				PRIMARY KEY (`id_indexfollow`))');
    $tab = new Tab();
    $tab->class_name = 'AdminIndexFollow';
    $tab->id_parent = Tab::getIdFromClassName('AdminAdvanceSeo');
    $tab->module = 'advanceseo';
    $tab->name[(int)(Configuration::get('PS_LANG_DEFAULT'))] = $module->l('Manage Index-Follow');
    $tab->add();
    $tab_ii = new Tab();
    $tab_ii->class_name = 'AdminSocialTags';
    $tab_ii->id_parent = Tab::getIdFromClassName('AdminAdvanceSeo');
    $tab_ii->module = 'advanceseo';
    $tab_ii->name[(int)(Configuration::get('PS_LANG_DEFAULT'))] = $module->l('Manage Social Tags');
    $tab_ii->add();
    return ($module->registerHook('displayIndexFollow'));
}

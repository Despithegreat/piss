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

function upgrade_module_2_1_2($module)
{
    $tab = new Tab();
    $tab->class_name = 'AdminAdvSeoConfig';
    $tab->id_parent = Tab::getIdFromClassName('AdminAdvanceSeo');
    $tab->module = 'advanceseo';
    $tab->name[(int)(Configuration::get('PS_LANG_DEFAULT'))] = $module->l('SEO Configuration');
    $tab->add();
    return true;
}

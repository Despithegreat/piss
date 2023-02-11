<?php
/**
 * 2007-2019 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */
include_once(_PS_MODULE_DIR_.'advanceseo/model/SeoInternalLinkingModel.php');
class IndexController extends IndexControllerCore
{
    /*
    * module: advanceseo
    * date: 2023-02-03 17:11:34
    * version: 2.4.3
    */
    public $php_self = 'index';
    /*
    * module: advanceseo
    * date: 2023-02-03 17:11:34
    * version: 2.4.3
    */
    public function initContent()
    {
        parent::initContent();
        if (Tools::version_compare(_PS_VERSION_, '1.7.0.0', '<')) {
            $this->addJS(_THEME_JS_DIR_.'index.js');
            $io = Hook::exec('displayHome');
            if (Module::isEnabled('advanceseo') == true) {
                $page_name = Dispatcher::getInstance()->getController();
                $module = Module::getInstanceByName('advanceseo');
                $io = $module->getFilterContent($page_name, $io);
            }
            $this->context->smarty->assign(array('HOOK_HOME' => $io,
                'HOOK_HOME_TAB' => Hook::exec('displayHomeTab'),
                'HOOK_HOME_TAB_CONTENT' => Hook::exec('displayHomeTabContent')
            ));
            $this->setTemplate(_PS_THEME_DIR_.'index.tpl');
        } else {
            $io = Hook::exec('displayHome');
            if (Module::isEnabled('advanceseo') == true) {
                $page_name = Dispatcher::getInstance()->getController();
                $module = Module::getInstanceByName('advanceseo');
                $io = $module->getFilterContent($page_name, $io);
            }
            $this->context->smarty->assign(array(
                'HOOK_HOME' => $io,
            ));
            $this->setTemplate('index');
        }
    }
}

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

class AdminSocialTagsController extends ModuleAdminController {
	
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
		$enable_twt = (int)Configuration::get('FMM_ENABLE_TAGS_TWITTER');
		$enable_fb = (int)Configuration::get('FMM_ENABLE_TAGS_FACEBOOK');
		$twitter_username = Configuration::get('FMM_TWITTER_USER_NAME');
		$twitter_title = Configuration::get('FMM_TWITTER_TITLE');
		$twitter_description = Configuration::get('FMM_TWITTER_DESCRIPTION');
		$facebook_title = Configuration::get('FMM_FACEBOOK_TITLE');
		$facebook_description = Configuration::get('FMM_FACEBOOK_DESCRIPTION');
		$fb_admin_id = Configuration::get('FMM_FACEBOOK_ADMIN_ID');
		//dump($categories);exit;
		$this->context->smarty->assign(array(
			'ps_version' => (int)$ps_version,
            'action' => self::$currentIndex.'&token='.$this->token,
			'control_st_twittwer' => $enable_twt,
			'control_st_fb' => $enable_fb,
			'twitter_username' => $twitter_username,
			'twitter_title' => $twitter_title,
			'twitter_description' => $twitter_description,
			'facebook_title' => $facebook_title,
			'facebook_description' => $facebook_description,
			'fb_admin_id' => $fb_admin_id
        ));
		parent::renderForm();
		return $this->context->smarty->fetch(dirname(__FILE__).'/../../views/templates/admin/form_tags.tpl');
	}
	
	public function postProcess()
    {
		if (Tools::isSubmit('submitSocialTags')) {
			$enable_twt = (int)Tools::getValue('control_st_twittwer');
			$enable_fb = (int)Tools::getValue('control_st_fb');
			$twitter_username = Tools::getValue('twitter_username');
			$twitter_title = Tools::getValue('twitter_title');
			$twitter_description = Tools::getValue('twitter_description');
			$facebook_title = Tools::getValue('facebook_title');
			$facebook_description = Tools::getValue('facebook_description');
			$fb_admin_id = Tools::getValue('fb_admin_id');
			if (strpos($twitter_username, '@') === false) {
				$twitter_username = '@'.$twitter_username;
			}
			Configuration::updateValue('FMM_ENABLE_TAGS_TWITTER', $enable_twt);
			Configuration::updateValue('FMM_ENABLE_TAGS_FACEBOOK', $enable_fb);
			Configuration::updateValue('FMM_TWITTER_USER_NAME', $twitter_username);
			Configuration::updateValue('FMM_TWITTER_TITLE', $twitter_title);
			Configuration::updateValue('FMM_TWITTER_DESCRIPTION', $twitter_description);
			Configuration::updateValue('FMM_FACEBOOK_TITLE', $facebook_title);
			Configuration::updateValue('FMM_FACEBOOK_DESCRIPTION', $facebook_description);
			Configuration::updateValue('FMM_FACEBOOK_ADMIN_ID', $fb_admin_id);
		}
        return parent::postProcess();
    }

}


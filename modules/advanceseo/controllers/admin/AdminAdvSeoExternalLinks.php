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

class AdminAdvSeoExternalLinksController extends ModuleAdminController {

	public function __construct()
	{
		$this->bootstrap = true;
		$this->context = Context::getContext();
		$this->show_toolbar = false;
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
		$type = (Tools::version_compare(_PS_VERSION_, '1.6.0.0', '>=')) ? 'switch' : 'radio';
		$fields_form_i = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('External Links Nofollow Settings'),
                    'icon' => 'icon-cogs'
                ),
                'input' => array(
                    array(
						'type' => $type,
						'class' => 't',
						'is_bool' => true,
						'label' => $this->l('Enable External Links nofollow:'),
						'name'  => 'FMM_ADVSEO_EXT_NOFOLLOW',
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
							),
					),
					array(
						'type' => $type,
						'class' => 't',
						'is_bool' => true,
						'label' => $this->l('Overwrite External Links nofollow/follow:'),
						'name'  => 'FMM_ADVSEO_EXT_NOFOLLOW_OVERWRITE',
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
							),
					),
					array(
                    'type' => 'radio',
                    'label' => $this->l('External Link follow/nofollow?'),
                    'name' => 'FMM_ADVSEO_REL_VALUE',
                    'values' => array(
                        array(
                            'id' => 'nofollow',
                            'value' => 0,
                            'label' => $this->l('nofollow'),
                        ),
                        array(
                            'id' => 'follow',
                            'value' => 1,
                            'label' => $this->l('follow'),
                        ),
                    ),
                ),
					array(
						'type' => $type,
						'class' => 't',
						'is_bool' => true,
						'label' => $this->l('Enable External Links target:'),
						'name'  => 'FMM_ADVSEO_EL_TARGET',
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
							),
					),
					array(
						'type' => $type,
						'class' => 't',
						'is_bool' => true,
						'label' => $this->l('Overwrite External Links target:'),
						'name'  => 'FMM_ADVSEO_EL_TARGET_OVERWRITE',
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
							),
					),
					array(
                    'type' => 'radio',
                    'label' => $this->l('External Link Open?'),
                    'name' => 'FMM_ADVSEO_TARGET_VAL',
                    'values' => array(
                        array(
                            'id' => '_blank',
                            'value' => 0,
                            'label' => $this->l('New Window'),
                        ),
                        array(
                            'id' => '_self',
                            'value' => 1,
                            'label' => $this->l('Same Window'),
                        ),
                    ),
                ),
				array(
                    'type' => 'checkbox',
                    'name' => 'FMM_ADVSEO_EXTRAS_ATTR',
					'label' => $this->l('Add extra rel attributes'),
                    'values' => array(
                        'query' => array(
                            array('id' => '0',
								  'name' => $this->l('Add external'),
								  'val' => '1'),
							array('id' => '1',
								  'name' => $this->l('Add noopener'),
								  'val' => '2'),
							array('id' => '2',
								  'name' => $this->l('Add noreferrer'),
								  'val' => '3'),
                        ),
                        'id' => 'id',
                        'name' => 'name',
                    ),
                ),
				array(
                    'type' => 'textarea',
                    'label' => $this->l('Exclude Domains'),
                    'name' => 'FMM_ADVSEO_EXCLUDE_DOMAINS',
                    'required' => false,
                    'cols' => 15,
                    'rows' => 3,
                    'hint' => 'google.com,yahoo.com,msn.com',
					'desc' => $this->l('Do NOT use http, https OR www. Separate multiple values with comma , and with no spaces after OR before.'),
                ),
                ),
                'submit' => array(
                    'title' => $this->l('Save')
                )
            ),
        );
		$helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitAdvSeoExternalLinks';
        $helper->currentIndex = self::$currentIndex;
        $helper->token = Tools::getAdminTokenLite('AdminAdvSeoExternalLinks');
        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id
        );
        return $helper->generateForm(array($fields_form_i));
	}
	
	public function getConfigFieldsValues()
    {
        $fields = array();
		$fields['FMM_ADVSEO_EXT_NOFOLLOW'] = (int)Configuration::get('FMM_ADVSEO_EXT_NOFOLLOW');
		$fields['FMM_ADVSEO_EL_TARGET'] = (int)Configuration::get('FMM_ADVSEO_EL_TARGET');
		$fields['FMM_ADVSEO_TARGET_VAL'] = (int)Configuration::get('FMM_ADVSEO_TARGET_VAL');
		$fields['FMM_ADVSEO_EXT_NOFOLLOW_OVERWRITE'] = (int)Configuration::get('FMM_ADVSEO_EXT_NOFOLLOW_OVERWRITE');
		$fields['FMM_ADVSEO_EL_TARGET_OVERWRITE'] = (int)Configuration::get('FMM_ADVSEO_EL_TARGET_OVERWRITE');
		$fields['FMM_ADVSEO_REL_VALUE'] = (int)Configuration::get('FMM_ADVSEO_REL_VALUE');
		$fields['FMM_ADVSEO_EXTRAS_ATTR_0'] = Configuration::get('FMM_ADVSEO_EXTRAS_ATTR_0');
		$fields['FMM_ADVSEO_EXTRAS_ATTR_1'] = Configuration::get('FMM_ADVSEO_EXTRAS_ATTR_1');
		$fields['FMM_ADVSEO_EXTRAS_ATTR_2'] = Configuration::get('FMM_ADVSEO_EXTRAS_ATTR_2');
		$fields['FMM_ADVSEO_EXCLUDE_DOMAINS'] = Configuration::get('FMM_ADVSEO_EXCLUDE_DOMAINS');
		return $fields;
	}
	
	public function postProcess()
    {
        if (Tools::isSubmit('submitAdvSeoExternalLinks')) {
			$nofollow_state = (int)Tools::getValue('FMM_ADVSEO_EXT_NOFOLLOW');
			$target_state = (int)Tools::getValue('FMM_ADVSEO_EL_TARGET');
			$excludes = Tools::getValue('FMM_ADVSEO_EXCLUDE_DOMAINS');
			Configuration::updateValue('FMM_ADVSEO_EXT_NOFOLLOW', $nofollow_state);
			Configuration::updateValue('FMM_ADVSEO_EL_TARGET', $target_state);
			Configuration::updateValue('FMM_ADVSEO_EXT_NOFOLLOW_OVERWRITE', (int)Tools::getValue('FMM_ADVSEO_EXT_NOFOLLOW_OVERWRITE'));
			Configuration::updateValue('FMM_ADVSEO_TARGET_VAL', (int)Tools::getValue('FMM_ADVSEO_TARGET_VAL'));
			Configuration::updateValue('FMM_ADVSEO_EL_TARGET_OVERWRITE', (int)Tools::getValue('FMM_ADVSEO_EL_TARGET_OVERWRITE'));
			Configuration::updateValue('FMM_ADVSEO_REL_VALUE', (int)Tools::getValue('FMM_ADVSEO_REL_VALUE'));
			Configuration::updateValue('FMM_ADVSEO_EXTRAS_ATTR_0', (int)Tools::getValue('FMM_ADVSEO_EXTRAS_ATTR_0'));
			Configuration::updateValue('FMM_ADVSEO_EXTRAS_ATTR_1', (int)Tools::getValue('FMM_ADVSEO_EXTRAS_ATTR_1'));
			Configuration::updateValue('FMM_ADVSEO_EXTRAS_ATTR_2', (int)Tools::getValue('FMM_ADVSEO_EXTRAS_ATTR_2'));
			Configuration::updateValue('FMM_ADVSEO_EXCLUDE_DOMAINS', $excludes);
			if (!file_exists(_PS_OVERRIDE_DIR_.'classes'.DIRECTORY_SEPARATOR.'controller'.DIRECTORY_SEPARATOR.'FrontController.php') && ($nofollow_state > 0 || $target_state > 0)) {
				Tools::copy(_PS_MODULE_DIR_.'advanceseo'.DIRECTORY_SEPARATOR.'includes'.DIRECTORY_SEPARATOR.'FrontController.php',
							_PS_OVERRIDE_DIR_.'classes'.DIRECTORY_SEPARATOR.'controller'.DIRECTORY_SEPARATOR.'FrontController.php');
				Tools::generateIndex();
				Tools::clearSmartyCache();
				if (Tools::version_compare(_PS_VERSION_, '1.7.0.0', '>=')) {
					Tools::clearSf2Cache();
				}
			}
			Tools::redirectAdmin(self::$currentIndex.'&conf=5&token='.$this->token);
		}
		parent::postProcess();
	}
}
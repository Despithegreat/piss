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

class AdminUrlRedirectsController extends ModuleAdminController {

	public function __construct()
	{
		$this->className = 'UrlRedirects';
		$this->table = 'redirects';
		$this->identifier = 'id_redirects';
		$this->lang = false;
		$this->bootstrap = true;
		$this->explicitSelect = true;
		$this->context = Context::getContext();
		parent::__construct();
		$this->fields_list = array(
			'id_redirects' => array('title' => $this->l('ID'), 'align' => 'center', 'width' => 30),
			'url_from' => array('title' => $this->l('Target URI')),
			'url_to' => array('title' => $this->l('Point To URL')),
			'type' => array('title' => $this->l('Type'), 'align' => 'center')
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

	public function init()
	{
		require_once($this->module->getLocalPath().'model/RedirectsModel.php');
		parent::init();
	}

	public function renderForm()
	{
		$array_types = array(
				array('value' => 301, 'name' => $this->l('301 Moved Permanently')),
				array('value' => 302, 'name' => $this->l('302 Moved Temporarily')),
				array('value' => 303, 'name' => $this->l('303 Other Source'))
			);
			$this->fields_form = array(
			'tinymce' => true,
			'legend' => array(
				'title' => $this->l('Manage Redirects'),
				'icon' => 'icon-cog'
			),
			'input' => array(
				array(
					'type' => 'select',
					'label' => $this->l('Redirect Type'),
					'name' => 'type',
					'options' => array(
						'query' => $array_types,
						'id' => 'value',
						'name' => 'name'
					),
					'required' => true
				),
				array(
					'type' => 'text',
					'label' => $this->l('Target URI'),
					'name' => 'url_from',
					'required' => true,
					'desc' => $this->l('Use only URI like /aboutus OR /help-us'),
					'hint' => $this->l('Invalid characters:').' <>;=#{}',
				),
				array(
					'type' => 'text',
					'label' => $this->l('Point to URL'),
					'name' => 'url_to',
					'required' => true,
					'hint' => $this->l('Invalid characters:').' <>;=#{}',
				)
			),
			'submit' => array(
				'title' => $this->l('Save'),
				'name' => 'submitRedirects'
				),
		);
		return parent::renderForm();
	}

	public function postProcess()
	{
		$obj = new UrlRedirects;
		$path = _PS_ROOT_DIR_.'/.htaccess';

		if (Tools::isSubmit('submitRedirects') || Tools::isSubmit('deleteredirects') || Tools::isSubmit('submitOptionsredirects'))
		{
			parent::postProcess();
			$old_htaccess_content = Tools::file_get_contents($path);
			$redirectsCollection = $obj->getAllRedirects();

			if (file_exists($path))
			{
				$content = Tools::file_get_contents($path);
				if (preg_match('#^(.*)\#begin_redirects.*\#end_redirects[^\n]*(.*)$#s', $content, $m))
				{
					if (!$write_fd = @fopen($path, 'w'))
					{
						$this->errors[] = Tools::displayError('.htaccess not found OR not editable.');
						return false;
					}
					elseif ($write_fd = @fopen($path, 'w'))
					{
						fwrite($write_fd, $m[1]);
						fwrite($write_fd, "\n#begin_redirects\n");

						foreach ($redirectsCollection as $_redirect)
						fwrite($write_fd, 'Redirect '.$_redirect['type'].' '.$_redirect['url_from'].' '.$_redirect['url_to']."\n");

						fwrite($write_fd, "#end_redirects\n");
						fclose($write_fd);
					}
				}
				else
				{
					if (!$write_fd = @fopen($path, 'w'))
					{
						$this->errors[] = Tools::displayError('.htaccess not found OR not editable.');
						return false;
					}
					elseif ($write_fd = @fopen($path, 'w'))
					{
						fwrite($write_fd, $old_htaccess_content);
						fwrite($write_fd, "\n#begin_redirects\n");
						foreach ($redirectsCollection as $_redirect)
						fwrite($write_fd, 'Redirect '.$_redirect['type'].' '.$_redirect['url_from'].' '.$_redirect['url_to']."\n");
						fwrite($write_fd, "#end_redirects\n");
						fclose($write_fd);
					}
				}
			}
			else
			{
				$this->errors[] = Tools::displayError('.htaccess not found OR not editable.');
				return false;
			}
		}
		elseif (Tools::isSubmit('submitBulkdeleteredirects'))
		{
			$redirectsBox = Tools::getValue('redirectsBox');
			$obj->dropAll($redirectsBox);
			$this->clearHtaccessFile();
		}
	}

	public function clearHtaccessFile()
	{
		$path = _PS_ROOT_DIR_.'/.htaccess';
		$content = Tools::file_get_contents($path);
		if (preg_match('#^(.*)\#begin_redirects.*\#end_redirects[^\n]*(.*)$#s', $content, $m))
		{
			if ($write_fd = @fopen($path, 'w'))
			{
				fwrite($write_fd, $m[1]);
				fclose($write_fd);
			}
		}
		return true;
	}
}


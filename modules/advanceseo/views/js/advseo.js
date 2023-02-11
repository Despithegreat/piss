/**
 * FMM AdvSEO
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 *  @author    FME Modules
 *  @copyright 2021 fmemodules.com All right reserved
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  @category  FMM Modules
 *  @package   Customfields
 */

function selectAll() {
  $('#advseo_pages_excl .gsitemap_metas').prop('checked', true);
}

function UnSelectAll() {
  $('#advseo_pages_excl .gsitemap_metas').prop('checked', false);
}

function appendThisTag(el) {
  var tag_product = $(el).text();
  var input_current_value = $(el).parent().parent().find("input:visible").val();
  $(el).parent().parent().find("input:visible").val(input_current_value+tag_product);
	}
function appendThisTagRule(el) {
  var _tag_product = $(el).attr("title");
  var _input_current_value = $(el).parent().parent().find("input").val();
  $(el).parent().parent().find("input").val(_input_current_value+_tag_product);
}

$(document).ready(function()
{
  if (help_class_name && help_class_name === 'AdminModules') {
    if (tab_module && tab_module.length > 1) {
      if (tab_module === 'google') {
        $('#head_tabs li a.google').click();
      }
      else if (tab_module === 'general') {
        $('#head_tabs li a.general').click();
      }
      else if (tab_module === 'keywords') {
        $('#head_tabs li a.keywords').click();
      }
    }
  }
});
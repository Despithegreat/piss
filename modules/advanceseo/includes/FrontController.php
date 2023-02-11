<?php
/**
 * 2007-2021 PrestaShop and Contributors
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
 * @copyright 2007-2021 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

class FrontController extends FrontControllerCore
{
    protected function smartyOutputContent($content)
    {
        $this->context->cookie->write();

        $html = '';

        if (is_array($content)) {
            foreach ($content as $tpl) {
                $html .= $this->context->smarty->fetch($tpl, null, $this->getLayout());
            }
        } else {
            $html = $this->context->smarty->fetch($content, null, $this->getLayout());
        }
        $adv_seo_nofollow = (int)Configuration::get('FMM_ADVSEO_EXT_NOFOLLOW');
        $adv_seo_target = (int)Configuration::get('FMM_ADVSEO_EL_TARGET');
        if (Module::isEnabled('advanceseo') == true && ($adv_seo_nofollow > 0 || $adv_seo_target > 0)) {
            $regex = '/<a[^A-Za-z](.*?)>(.*?)<\/a[\s+]*>/is';
            preg_match_all($regex, $html, $match, PREG_SET_ORDER);
            if (!empty($match)) {
                foreach ($match as $lnk) {
                    if (isset($lnk[0]) && isset($lnk[1])) {
                        $html_tag = $lnk[0];
                        $href_etc = $lnk[1];
                        $flat_text = $lnk[2];
                        $href_foreign = $this->checkHrefState($href_etc);
                        $extra_tags = '';
                        if (!preg_match('/mailto/', $href_etc)) {//nofollow attribute
                            if ($href_foreign <= 0) {//only add it to foreign links
                                $adv_seo_nofollow_value = (int)Configuration::get('FMM_ADVSEO_REL_VALUE');
                                $adv_seo_target_value = (int)Configuration::get('FMM_ADVSEO_TARGET_VAL');
                                $adv_seo_nofollow_overwrite = (int)Configuration::get('FMM_ADVSEO_EXT_NOFOLLOW_OVERWRITE');
                                $adv_seo_target_overwrite = (int)Configuration::get('FMM_ADVSEO_EL_TARGET_OVERWRITE');
                                $adv_seo_external = (int)Configuration::get('FMM_ADVSEO_EXTRAS_ATTR_0');
                                $adv_seo_nopener = (int)Configuration::get('FMM_ADVSEO_EXTRAS_ATTR_1');
                                $adv_seo_noreferrer = (int)Configuration::get('FMM_ADVSEO_EXTRAS_ATTR_2');
                                $rel_attr_check = $this->checkRelState($href_etc);
                                $rel_extras = '';
                                if ($adv_seo_external > 0 && !preg_match('/external/', $rel_attr_check)) {
                                    $rel_extras .= ' external';
                                }
                                if ($adv_seo_nopener > 0 && !preg_match('/noopener/', $rel_attr_check)) {
                                    $rel_extras .= ' noopener';
                                }
                                if ($adv_seo_noreferrer > 0 && !preg_match('/noreferrer/', $rel_attr_check)) {
                                    $rel_extras .= ' noreferrer';
                                }
                                if ($adv_seo_nofollow > 0 && !preg_match('/rel/', $href_etc)) {
                                    if ($adv_seo_nofollow_value > 0) {
                                        $extra_tags .= ' rel="follow'.$rel_extras.'"';
                                    }
                                    else {
                                        $extra_tags .= ' rel="nofollow'.$rel_extras.'"';
                                    }
                                }
                                elseif ($adv_seo_nofollow > 0 && $adv_seo_nofollow_overwrite > 0 && preg_match('/rel/', $href_etc)) {//with overwrite settings
                                    $href_etc = $this->cleanRelAttr($href_etc);
                                    if ($adv_seo_nofollow_value > 0) {
                                        $rel_attr_check = str_replace('nofollow', 'follow', $rel_attr_check);
                                        $extra_tags .= ' rel="'.$rel_attr_check.$rel_extras.'"';
                                    }
                                    else {
                                        if ((int)strpos($rel_attr_check, 'nofollow') > 0) {
                                            $extra_tags .= ' rel="'.$rel_attr_check.$rel_extras.'"';
                                        }
                                        else {
                                            $rel_attr_check = str_replace('follow', 'nofollow', $rel_attr_check);
                                            $extra_tags .= ' rel="'.$rel_attr_check.$rel_extras.'"';
                                        }
                                    }
                                }
                                if ($adv_seo_target > 0 && !preg_match('/target/', $href_etc)) {//target attribute
                                    if ($adv_seo_target_value > 0) {
                                        $extra_tags .= ' target="_self"';
                                    }
                                    else{
                                        $extra_tags .= ' target="_blank"';
                                    }
                                }
                                elseif ($adv_seo_target > 0 && $adv_seo_target_overwrite > 0 && preg_match('/target/', $href_etc)) {//edit target
                                    $target_attr_check = $this->checkTargetState($href_etc);
                                    $href_etc = $this->cleanTargetAttr($href_etc);
                                    if ($adv_seo_target_value > 0) {
                                        $target_attr_check = str_replace('_blank', '_self', $target_attr_check);
                                        $extra_tags .= ' target="'.$target_attr_check.'"';
                                    }
                                    else {
                                        if ((int)strpos($target_attr_check, '_blank') > 0) {
                                            $extra_tags .= ' target="'.$target_attr_check.'"';
                                        }
                                        else {
                                            $target_attr_check = str_replace('_self', '_blank', $target_attr_check);
                                            $extra_tags .= ' target="'.$target_attr_check.'"';
                                        }
                                    }
                                }
                                if (!empty($extra_tags)) {
                                    if ((int)strpos($extra_tags, 'nono') > 0) {
                                        $extra_tags = str_replace('nono', 'no', $extra_tags);
                                    }
                                    $new_html_tag = '<a '.$href_etc.$extra_tags.'>'.$flat_text.'</a>';
                                    $html = str_replace($html_tag, $new_html_tag, $html);
                                }
                            }
                        }
                    }
                }
            }
        }
        Hook::exec('actionOutputHTMLBefore', array('html' => &$html));
        echo trim($html);
    }
    
    private function checkHrefState($href_etc)
    {
        $excluded = trim(Configuration::get('FMM_ADVSEO_EXCLUDE_DOMAINS'));
        preg_match('/href="([^"]+)"/', $href_etc, $match);//just catch href
        if (isset($match[1])) {
                $href_link = $match[1];
                if ($href_link == '#') {
                    return true;
                }
            
            if (!empty($excluded)) {//for excluded domains
                if ((int)strpos($excluded, ',') > 0) {
                    $excluded = explode(',', $excluded);
                    foreach ($excluded as $exc) {
                        if ((int)strpos($href_link, $exc) > 0) {
                            return true;
                        }
                    }
                }
                else {
                    if ((int)strpos($href_link, $excluded) > 0) {
                        return true;
                    }
                }
            }
            $base_url = $this->context->shop->getBaseURL(false, false);
            $base_url = explode(':', $base_url);
            $base_url = end($base_url);
            $base_url = ltrim($base_url, '/');
            return (int)strpos($href_link, $base_url);
        }
    }
    
    private function checkRelState($href_etc)
    {
        preg_match('/rel="([^"]+)"/', $href_etc, $match);//just catch rel attribute
        if (isset($match[1])) {
            return $match[1];
        }
    }
    
    private function cleanRelAttr($href_etc)
    {
        preg_match('/rel="([^"]+)"/', $href_etc, $match);//just catch rel attribute
        $href_etc = str_replace($match[0], '', $href_etc);
        return $href_etc;
    }
    
    private function checkTargetState($href_etc)
    {
        preg_match('/target="([^"]+)"/', $href_etc, $match);//just catch target attribute
        return $match[1];
    }
    
    private function cleanTargetAttr($href_etc)
    {
        preg_match('/target="([^"]+)"/', $href_etc, $match);//just catch target attribute
        $href_etc = str_replace($match[0], '', $href_etc);
        return $href_etc;
    }
}

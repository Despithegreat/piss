<?php
/**
* 2007-2022 PrestaShop
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2022 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/
class TvcmsProductCommentCriterion
{
    /**
     * Add a Comment Criterion
     *
     * @return bool succeed
     */
    public static function add($id_lang, $name)
    {
        if (!Validate::isUnsignedId($id_lang) ||
            !Validate::isMessage($name)) {
            exit(Tools::displayError());
        }

        return Db::getInstance()->execute('
        INSERT INTO `' . _DB_PREFIX_ . 'tvcmsproduct_comment_criterion`
        (`id_lang`, `name`) VALUES(
        ' . (int) $id_lang . ',
        \'' . pSQL($name) . '\')');
    }

    /**
     * Link a Comment Criterion to a product
     *
     * @return bool succeed
     */
    public static function addToProduct($id_tvcmsproduct_comment_criterion, $id_product)
    {
        if (!Validate::isUnsignedId($id_tvcmsproduct_comment_criterion) ||
            !Validate::isUnsignedId($id_product)) {
            exit(Tools::displayError());
        }

        return Db::getInstance()->execute('
        INSERT INTO `' . _DB_PREFIX_ . 'tvcmsproduct_comment_criterion_product`
        (`id_tvcmsproduct_comment_criterion`, `id_product`) VALUES(
        ' . (int) $id_tvcmsproduct_comment_criterion . ',
        ' . (int) $id_product . ')');
    }

    /**
     * Add grade to a criterion
     *
     * @return bool succeed
     */
    public static function addGrade($id_tvcmsproduct_comment, $id_tvcmsproduct_comment_criterion, $grade)
    {
        if (!Validate::isUnsignedId($id_tvcmsproduct_comment) ||
            !Validate::isUnsignedId($id_tvcmsproduct_comment_criterion)) {
            exit(Tools::displayError());
        }
        if ($grade < 0) {
            $grade = 0;
        } elseif ($grade > 10) {
            $grade = 10;
        }

        return Db::getInstance()->execute('
        INSERT INTO `' . _DB_PREFIX_ . 'tvcmsproduct_comment_grade`
        (`id_tvcmsproduct_comment`, `id_tvcmsproduct_comment_criterion`, `grade`) VALUES(
        ' . (int) $id_tvcmsproduct_comment . ',
        ' . (int) $id_tvcmsproduct_comment_criterion . ',
        ' . (int) $grade . ')');
    }

    /**
     * Update criterion
     *
     * @return bool succeed
     */
    public static function update($id_tvcmsproduct_comment_criterion, $id_lang, $name)
    {
        if (!Validate::isUnsignedId($id_tvcmsproduct_comment_criterion) ||
            !Validate::isUnsignedId($id_lang) ||
            !Validate::isMessage($name)) {
            exit(Tools::displayError());
        }

        return Db::getInstance()->execute('
        UPDATE `' . _DB_PREFIX_ . 'tvcmsproduct_comment_criterion` SET
        `name` = \'' . pSQL($name) . '\'
        WHERE `id_tvcmsproduct_comment_criterion` = ' . (int) $id_tvcmsproduct_comment_criterion . ' AND
        `id_lang` = ' . (int) $id_lang);
    }

    /**
     * Get criterion by Product
     *
     * @return array Criterion
     */
    public static function getByProduct($id_product, $id_lang)
    {
        if (!Validate::isUnsignedId($id_product) ||
            !Validate::isUnsignedId($id_lang)) {
            exit(Tools::displayError());
        }

        return Db::getInstance()->executeS('
        SELECT pcc.`id_tvcmsproduct_comment_criterion`, pcc.`name`
        FROM `' . _DB_PREFIX_ . 'tvcmsproduct_comment_criterion` pcc
        INNER JOIN `' . _DB_PREFIX_ . 'tvcmsproduct_comment_criterion_product` pccp ON '
             . 'pcc.`id_tvcmsproduct_comment_criterion` = pccp.`id_tvcmsproduct_comment_criterion`
        WHERE pccp.`id_product` = ' . (int) $id_product . ' AND 
        pcc.`id_lang` = ' . (int) $id_lang);
    }

    /**
     * Get Criterions
     *
     * @return array Criterions
     */
    public static function get($id_lang)
    {
        if (!Validate::isUnsignedId($id_lang)) {
            exit(Tools::displayError());
        }

        return Db::getInstance()->executeS('
        SELECT pcc.`id_tvcmsproduct_comment_criterion`, pcc.`name`
          FROM `' . _DB_PREFIX_ . 'tvcmsproduct_comment_criterion` pcc
        WHERE pcc.`id_lang` = ' . (int) $id_lang . '
        ORDER BY pcc.`name` ASC');
    }

    /**
     * Delete product criterion by product
     *
     * @return bool succeed
     */
    public static function deleteByProduct($id_product)
    {
        if (!Validate::isUnsignedId($id_product)) {
            exit(Tools::displayError());
        }

        return Db::getInstance()->execute('
        DELETE FROM `' . _DB_PREFIX_ . 'tvcmsproduct_comment_criterion_product`
        WHERE `id_product` = ' . (int) $id_product);
    }

    /**
     * Delete all reference of a criterion
     *
     * @return bool succeed
     */
    public static function delete($id_tvcmsproduct_comment_criterion)
    {
        if (!Validate::isUnsignedId($id_tvcmsproduct_comment_criterion)) {
            exit(Tools::displayError());
        }
        $result = Db::getInstance()->execute('
        DELETE FROM `' . _DB_PREFIX_ . 'tvcmsproduct_comment_grade`
        WHERE `id_tvcmsproduct_comment_criterion` = ' . (int) $id_tvcmsproduct_comment_criterion);
        if ($result === false) {
            return $result;
        }
        $result = Db::getInstance()->execute('
        DELETE FROM `' . _DB_PREFIX_ . 'tvcmsproduct_comment_criterion_product`
        WHERE `id_tvcmsproduct_comment_criterion` = ' . (int) $id_tvcmsproduct_comment_criterion);
        if ($result === false) {
            return $result;
        }

        return Db::getInstance()->execute('
        DELETE FROM `' . _DB_PREFIX_ . 'tvcmsproduct_comment_criterion`
        WHERE `id_tvcmsproduct_comment_criterion` = ' . (int) $id_tvcmsproduct_comment_criterion);
    }
}

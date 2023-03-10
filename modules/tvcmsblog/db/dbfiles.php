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
*  @copyright 2007-2022 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/
$querys = [];

$querys[] = 'CREATE TABLE  IF NOT EXISTS `' . _DB_PREFIX_ . "tvcmscategory` (
    `id_tvcmscategory` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `category_group` int(10) NOT NULL DEFAULT '0',
    `category_img` varchar(300) NOT NULL DEFAULT '',
    `category_type` varchar(300) NOT NULL DEFAULT '',
    `position`int(10) NOT NULL,
    `active` int(10) NOT NULL,
    PRIMARY KEY (`id_tvcmscategory`)
) ENGINE=" . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8';

$querys[] = 'CREATE TABLE  IF NOT EXISTS `' . _DB_PREFIX_ . "tvcmsposts_view` (
    `id_tvcmsposts` int(10) unsigned NOT NULL,
    `ipadress` varchar(350) NOT NULL DEFAULT '',
    `id_view` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (`id_view`)
) ENGINE=" . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8';

$querys[] = 'CREATE TABLE  IF NOT EXISTS `' . _DB_PREFIX_ . "tvcmscategory_lang` (
    `id_tvcmscategory` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `id_lang` int(10) unsigned NOT NULL ,
    `name` varchar(350) NOT NULL DEFAULT '',
    `link_rewrite` varchar(350) NOT NULL DEFAULT '',
    `title` varchar(350) NOT NULL DEFAULT '',
    `description` longtext,
    `meta_description` longtext,
    `keyword` text,
    PRIMARY KEY (`id_tvcmscategory`, `id_lang`)
) ENGINE=" . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8';

$querys[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'tvcmscategory_shop` (
    `id_tvcmscategory` int(11) NOT NULL,
    `id_shop` int(11) UNSIGNED NOT NULL,
    PRIMARY KEY (`id_tvcmscategory`,`id_shop`)
)ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8';

$querys[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . "tvcmsposts` (
    `id_tvcmsposts` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `post_author` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
    `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
    `comment_status` varchar(20) NOT NULL DEFAULT 'open',
    `post_password` varchar(20) NOT NULL DEFAULT '',
    `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
    `post_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
    `category` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
    `post_type` varchar(20) NOT NULL DEFAULT 'post',
    `post_format` varchar(20) NOT NULL DEFAULT 'post',
    `post_img` varchar(300) NOT NULL DEFAULT '',
    `video` longtext NOT NULL,
    `audio` longtext NOT NULL,
    `gallery` longtext NOT NULL,
    `related_products` text NOT NULL,
    `comment_count` bigint(20) NOT NULL DEFAULT '0',
    `position`int(10) NOT NULL ,
    `active` int(10) NOT NULL,
    PRIMARY KEY (`id_tvcmsposts`)
) ENGINE=" . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8';

$querys[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . "tvcmsposts_lang` (
    `id_tvcmsposts` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `id_lang` int(10) unsigned NOT NULL ,
    `post_title` text NOT NULL,
    `meta_title` varchar(300) NOT NULL DEFAULT '',
    `meta_description` longtext NOT NULL,
    `meta_keyword` longtext NOT NULL,
    `post_content` longtext NOT NULL,
    `post_excerpt` text NOT NULL,
    `link_rewrite` varchar(400) NOT NULL DEFAULT '',
    PRIMARY KEY (`id_tvcmsposts`, `id_lang`)
) ENGINE=" . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8';

$querys[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'tvcmsposts_shop` (
    `id_tvcmsposts` int(11) NOT NULL,
    `id_shop` int(11) UNSIGNED NOT NULL,
    PRIMARY KEY (`id_tvcmsposts`,`id_shop`)
)ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8';

$querys[] = 'CREATE TABLE  IF NOT EXISTS `' . _DB_PREFIX_ . "tvcmspostmeta` (
    `id_tvcmspostmeta` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `id_tvcmsposts` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
    `meta_key` varchar(255) DEFAULT NULL,
    `meta_value` longtext,
    PRIMARY KEY (`id_tvcmspostmeta`)
) ENGINE=" . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8';

$querys[] = 'CREATE TABLE  IF NOT EXISTS `' . _DB_PREFIX_ . "tvcms_image_type`(
    `id_tvcms_image_type` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` varchar(100) DEFAULT NULL,
    `width` int(11) UNSIGNED NOT NULL DEFAULT '0',
    `height` int(11) UNSIGNED NOT NULL DEFAULT '0',
    `id_shop` int(11) UNSIGNED NOT NULL DEFAULT '0',
    `active` int(11) UNSIGNED NOT NULL DEFAULT '1',
    PRIMARY KEY (`id_tvcms_image_type`)
) ENGINE=" . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8';

$querys[] = 'CREATE TABLE  IF NOT EXISTS `' . _DB_PREFIX_ . "tvcms_category_post`(
    `id_tvcms_category_post` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `id_post` int(11) UNSIGNED NOT NULL DEFAULT '0',
    `id_category` int(11) UNSIGNED NOT NULL DEFAULT '0',
    `type` varchar(100) DEFAULT NULL,
    PRIMARY KEY (`id_tvcms_category_post`)
) ENGINE=" . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8';

$querys[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'tvcms_comments`(
    `id_tvcms_comments` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` varchar(256) DEFAULT NULL,
    `email` varchar(90) DEFAULT NULL,
    `subject` varchar(256) DEFAULT NULL,
    `website` varchar(128) DEFAULT NULL,
    `content` text,
    `id_parent` int(11) DEFAULT NULL,
    `id_post` int(11) DEFAULT NULL,
    `id_customer` int(11) DEFAULT NULL,
    `id_guest` int(11) DEFAULT NULL,
    `active` int(11) DEFAULT NULL,
    `position` int(11) DEFAULT NULL,
    `uniqueid` int(11) DEFAULT NULL,
    `created` datetime NOT NULL,
    `updated` datetime NOT NULL,
    PRIMARY KEY (`id_tvcms_comments`)
) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8';

$querys_u = [];

$querys_u[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'tvcmsposts`';
$querys_u[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'tvcmspostmeta`';
$querys_u[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'tvcmscategory`';
$querys_u[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'tvcmsposts_lang`';
$querys_u[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'tvcmscategory_lang`';
$querys_u[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'tvcmsposts_shop`';
$querys_u[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'tvcmscategory_shop`';
$querys_u[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'tvcms_image_type`';
$querys_u[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'tvcms_category_post`';
$querys_u[] = 'DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'tvcms_comments`';

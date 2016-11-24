<?php
/**
 * 2007-2016 PrestaShop
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
 *  @copyright 2007-2016 PrestaShop SA
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */

if (!defined('TMP_DS')) {
    define('TMP_DS', DIRECTORY_SEPARATOR);
}

require_once dirname(__FILE__).TMP_DS.'..'.TMP_DS.'..'.TMP_DS.'..'.TMP_DS.'config'.TMP_DS.'config.inc.php';
include_once dirname(__FILE__).TMP_DS.'..'.TMP_DS.'..'.TMP_DS.'..'.TMP_DS.'init.php';

if (!Configuration::get('EBAY_SECURITY_TOKEN') || Tools::getValue('token') != Configuration::get('EBAY_SECURITY_TOKEN')) {
    die('INVALID TOKEN');
}

if (Module::isInstalled('ebay')) {
    $module = Module::getInstanceByName('ebay');

    if (version_compare(_PS_VERSION_, '1.5', '<')) {
        $enable = $module->active;
    } else {
        $enable = Module::isEnabled('ebay');
    }

    if ($enable) {
        $validator = new EbayDbValidator();

        if (Tools::getValue('action') == 'getNbTable') {
            echo (int) $validator->getNbTable();
        } else if (Tools::getValue('action') == 'checkSpecific' && Tools::getValue('value')) {
            if ($validator->checkSpecificTable((int) Tools::getValue('value'))) {
                echo Tools::jsonEncode($validator->getLog());
            } else {
                echo Tools::jsonEncode(array('finish' => array(array('status' => 'stop', 'action' => 'End of checking'))));
            }

        } else if (Tools::getValue('action') == 'checkAll') {
            $validator->checkDatabase();
            echo Tools::jsonEncode($validator->getLog());
        }

    }
}

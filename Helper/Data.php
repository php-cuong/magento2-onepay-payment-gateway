<?php
/**
 * GiaPhuGroup Co., Ltd.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the GiaPhuGroup.com license that is
 * available through the world-wide-web at this URL:
 * https://www.giaphugroup.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    PHPCuong
 * @package     PHPCuong_OnePay
 * @copyright   Copyright (c) 2018-2019 GiaPhuGroup Co., Ltd. All rights reserved. (http://www.giaphugroup.com/)
 * @license     https://www.giaphugroup.com/LICENSE.txt
 */

namespace PHPCuong\OnePay\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    const ONEPAY_DOMESTIC_CARD_PAYMENT_URL = 'payment/onepay_domestic/payment_url';
    const ONEPAY_DOMESTIC_CARD_ACCESS_CODE = 'payment/onepay_domestic/access_code';
    const ONEPAY_DOMESTIC_CARD_MERCHANT_ID = 'payment/onepay_domestic/merchant_id';
    const ONEPAY_DOMESTIC_CARD_HASH_CODE = 'payment/onepay_domestic/hash_code';
    const ONEPAY_INTERNATIONAL_CARD_PAYMENT_URL = 'payment/onepay_international/payment_url';
    const ONEPAY_INTERNATIONAL_CARD_ACCESS_CODE = 'payment/onepay_international/access_code';
    const ONEPAY_INTERNATIONAL_CARD_MERCHANT_ID = 'payment/onepay_international/merchant_id';
    const ONEPAY_INTERNATIONAL_CARD_HASH_CODE = 'payment/onepay_international/hash_code';

    /**
     * Retrieve the OnePay Domestic card payment URL
     *
     * @return string
     */
    public function getDomesticCardPaymentUrl()
    {
        return $this->scopeConfig->getValue(
            self::ONEPAY_DOMESTIC_CARD_PAYMENT_URL,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Retrieve the OnePay Domestic card access code
     *
     * @return string
     */
    public function getDomesticCardAccessCode()
    {
        return $this->scopeConfig->getValue(
            self::ONEPAY_DOMESTIC_CARD_ACCESS_CODE,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Retrieve the OnePay Domestic card merchant id
     *
     * @return string
     */
    public function getDomesticCardMerchantId()
    {
        return $this->scopeConfig->getValue(
            self::ONEPAY_DOMESTIC_CARD_MERCHANT_ID,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Retrieve the OnePay Domestic card hash code
     *
     * @return string
     */
    public function getDomesticCardHashCode()
    {
        return $this->scopeConfig->getValue(
            self::ONEPAY_DOMESTIC_CARD_HASH_CODE,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Retrieve the OnePay International card payment URL
     *
     * @return string
     */
    public function getInternationalCardPaymentUrl()
    {
        return $this->scopeConfig->getValue(
            self::ONEPAY_INTERNATIONAL_CARD_PAYMENT_URL,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Retrieve the OnePay International card access code
     *
     * @return string
     */
    public function getInternationalCardAccessCode()
    {
        return $this->scopeConfig->getValue(
            self::ONEPAY_INTERNATIONAL_CARD_ACCESS_CODE,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Retrieve the OnePay International card merchant id
     *
     * @return string
     */
    public function getInternationalCardMerchantId()
    {
        return $this->scopeConfig->getValue(
            self::ONEPAY_INTERNATIONAL_CARD_MERCHANT_ID,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Retrieve the OnePay International card hash code
     *
     * @return string
     */
    public function getInternationalCardHashCode()
    {
        return $this->scopeConfig->getValue(
            self::ONEPAY_INTERNATIONAL_CARD_HASH_CODE,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
}

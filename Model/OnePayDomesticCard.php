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

namespace PHPCuong\OnePay\Model;

class OnePayDomesticCard extends \Magento\Payment\Model\Method\AbstractMethod
{
    const PAYMENT_METHOD_ONEPAY_DOMESTIC_CARD_CODE = 'onepay_domestic';

    /**
     * Payment method code
     *
     * @var string
     */
    protected $_code = self::PAYMENT_METHOD_ONEPAY_DOMESTIC_CARD_CODE;

    /**
     * Availability option
     *
     * @var bool
     */
    protected $_isOffline = true;
}

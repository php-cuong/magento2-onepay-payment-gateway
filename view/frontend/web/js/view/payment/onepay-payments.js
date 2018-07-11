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
define([
  'uiComponent',
  'Magento_Checkout/js/model/payment/renderer-list'
  ], function (Component, rendererList) {
    'use strict';
    rendererList.push(
      {
        type: 'onepay_domestic',
        component: 'PHPCuong_OnePay/js/view/payment/method-renderer/onepay-domestic'
      },
      {
        type: 'onepay_international',
        component: 'PHPCuong_OnePay/js/view/payment/method-renderer/onepay-international'
      }
    );
    /** Add view logic here if needed */
    return Component.extend({});
  }
);

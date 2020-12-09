<?php

chdir('../../');

require_once 'includes/application_top.php';
error_reporting(E_ALL);
ini_set('display_errors', true);
require_once 'includes/modules/payment/amazon_pay/amazon_pay.php';

$checkoutHelper = new \AlkimAmazonPay\CheckoutHelper();
$checkoutSession = $checkoutHelper->createCheckoutSession();
echo json_encode(['amazonCheckoutSessionId'=>$checkoutSession->getCheckoutSessionId()]);

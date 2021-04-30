<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


$merchantId = "";
$password = "";
$brandId = "";
$country = "";
$currency = "";
$credit_card_token = "";
$customer_it_token = "";
$forceSecurePayment="true";
//Additional Parameters that can be used
/*

$firstTimeTransaction="false";

$merchantFreeText="Some free text";
$operatorId="";
$userDevice="";
$userAgent="";
$merchantLandingPageRedirectMethod="";
$bankMid="";

*/

/*
Card On File Parameters
Transactions that are initiated by stored payment card credentials, stored either by the merchant or in the IPG Gateway, must be identified in the payment process through to the Card Issuers and Card Schemes. 
By their nature, these transactions, where the cardholder is not present at the point of initiation, will not have card or cardholder authentication data accompanying the transaction. 
To enable the Schemes and Issuers to assess risk and determine potential fraud accurately, new indicators and processes have been introduced to provide greater clarity into transactions using stored credentials.

$cardOnFileType="";
$cardOnFileInitiator="";
$cardOnFileInitialTransactionId="";
$mmrpBillPayment="Recurring";
$mmrpCustomerPresent="BillPayment";
$mmrpOriginalMerchantTransactionId="BillPayment";




*/


$credit_card_number = "5454545454545454";
$credit_card_expiry_month = "12";
$credit_card_expiry_year = "2025";
$credit_card_cvv = "111";
$credit_card_name = "John Doe";
$paymentSolutionId = "";
$amount = "20";
$merchantTxId = 'EXAMPLE_'.time();

function getSiteDomain() {
  $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
  $domainName = $_SERVER['HTTP_HOST'];
  return $protocol.$domainName;
}

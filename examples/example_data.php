<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// My Deets 800145    u16q9rZ02bW0jqTjxH8t    800145000
//899996  u16q9rZ02bW0jqTjxH8t 899996000 Hungrrr
//800443	u16q9rZ02bW0jqTjxH8t	800443000
//908301    u16q9rZ02bW0jqTjxH8t	908301000 Upco
//893812    u16q9rZ02bW0jqTjxH8t	893812000
//915101	u16q9rZ02bW0jqTjxH8t	915101000
//Morris Builder PROD 915920 47c8uet2VH2UeumYprMN 915920000
//901214	KCaGwySh4gYjv8XHBETa	901214000
//UP Deets 400017 w577S336K19ns9q2CC0q 400017000
$merchantId = "800145";
$password = "u16q9rZ02bW0jqTjxH8t";
$brandId = "800145000";
$country = "ES";
$currency = "EUR";
//$credit_card_token = "";
$customer_it_token = "CustomerAccount";
$customerFirstName="John";
$customerLastName="Doe";
$customerEmail="BOIPA@BOIPA.com";
$customerPhone="0812365899";

$credit_card_number = "5454545454545454";
$credit_card_expiry_month = "12";
$credit_card_expiry_year = "2025";
$credit_card_cvv = "111";
$credit_card_name = "John Doe";
$paymentSolutionId = "";
$amount = "50.00";
$merchantTxId = 'BOIPA_'.time();

function getSiteDomain() {
  $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
  $domainName = $_SERVER['HTTP_HOST'];
  return $protocol.$domainName;
}

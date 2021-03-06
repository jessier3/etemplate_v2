<?php

// https://developer.authorize.net/hello_world.html
// user gdnwaydev123
// one password to rule them all.
// Login : 37gq8MkRTeH
// Transaction Key : 5SPjBm8A7g3N5u9x
// Key Simon

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

require_once __DIR__ . '/ApiCoreTestBase.php';

class AuthTrans extends Model
{
    protected $table = 'auth_trans';

/*

require 'vendor/autoload.php';

use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;

define("AUTHORIZENET_LOG_FILE", "phplog");

// Common setup for API credentials
$merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
$merchantAuthentication->setName("YOUR_API_LOGIN_ID");
$merchantAuthentication->setTransactionKey("YOUR_TRANSACTION_KEY");
$refId = 'ref' . time();

// Create the payment data for a credit card
$creditCard = new AnetAPI\CreditCardType();
$creditCard->setCardNumber("4111111111111111");
$creditCard->setExpirationDate("2038-12");
$paymentOne = new AnetAPI\PaymentType();
$paymentOne->setCreditCard($creditCard);

// Create a transaction
$transactionRequestType = new AnetAPI\TransactionRequestType();
$transactionRequestType->setTransactionType("authCaptureTransaction");
$transactionRequestType->setAmount(151.51);
$transactionRequestType->setPayment($paymentOne);
$request = new AnetAPI\CreateTransactionRequest();
$request->setMerchantAuthentication($merchantAuthentication);
$request->setRefId($refId);
$request->setTransactionRequest($transactionRequestType);
$controller = new AnetController\CreateTransactionController($request);
$response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);

if ($response != null) {
    $tresponse = $response->getTransactionResponse();
    if (($tresponse != null) && ($tresponse->getResponseCode() == "1")) {
        echo "Charge Credit Card AUTH CODE : " . $tresponse->getAuthCode() . "\n";
        echo "Charge Credit Card TRANS ID  : " . $tresponse->getTransId() . "\n";
    } else {
        echo "Charge Credit Card ERROR :  Invalid response\n";
    }
} else {
    echo "Charge Credit Card Null response returned";
}

 */
}

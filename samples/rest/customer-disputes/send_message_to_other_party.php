<?php

require_once('../../../autoload.php');
require_once('../../../includes/config.php');

$configArray = array(
    'ClientID' => $rest_client_id,
    'ClientSecret' => $rest_client_secret
);

$PayPal = new \angelleye\PayPal\rest\customerdisputes\CustomerDisputesAPI($configArray);

$dispute_id  = 'PP-D-5615';   // The ID of the dispute for which to send a message.

$parameters = array(
    'message' => 'Shipment is in progress.',   // The message sent by the merchant to the other party.
);

$response = $PayPal->disputes_send_message($dispute_id,$parameters);

echo "<pre>";
print_r($response);
exit;

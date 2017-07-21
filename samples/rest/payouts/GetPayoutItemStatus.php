<?php

require_once('../../../autoload.php');
require_once('../../../includes/config.php');

$configArray = array(
    'ClientID' => $rest_client_id,
    'ClientSecret' => $rest_client_secret
);

$PayPal = new angelleye\PayPal\rest\payouts\PayoutsAPI($configArray);

//## Payout Item ID you get when you create Mass payment single/batch.

$payoutItemId='CV28ACVYTVXGE';                  // Required. The ID of the Payout Item for which to show details.
// Pass data into class for processing with PayPal and load the response array into $PayPalResult
$PayPalResult = $PayPal->get_payout_item_status($payoutItemId);
// Write the contents of the response array to the screen for demo purposes.
echo "<pre>";
print_r($PayPalResult);

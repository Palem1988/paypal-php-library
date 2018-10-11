<?php

require_once('../../../autoload.php');
require_once('../../../includes/config.php');

$configArray = array(
                'ClientID' => $rest_client_id,
                'ClientSecret' => $rest_client_secret
                );

$PayPal = new \angelleye\PayPal\rest\notifications\NotificationsAPI($configArray);

$webhook_id = '4PX92259TH926993P'; //  The ID of the webhook for which to list subscriptions.


$returnArray = $PayPal->webhooks_event_types_by_id($webhook_id);

echo "<pre>";
print_r($returnArray);
<?php
// Include required library files.
require_once('../includes/config.php');
require_once('../src/PayPal/PayPal.php');
require_once('../src/PayPal/PayPal_Adaptive.php');

// Create PayPal object.
$PayPalConfig = array(
					  'Sandbox' => $sandbox,
					  'DeveloperAccountEmail' => $developer_account_email,
					  'ApplicationID' => $application_id,
					  'DeviceID' => $device_id,
					  'IPAddress' => $_SERVER['REMOTE_ADDR'],
					  'APIUsername' => $api_username,
					  'APIPassword' => $api_password,
					  'APISignature' => $api_signature,
					  'APISubject' => $api_subject
					);

$PayPal = new PayPal\PayPal_Adaptive($PayPalConfig);

// Prepare request arrays
$ExecutePaymentFields = array(
							'PayKey' => '', 								// The pay key that identifies the payment to be executed.  This is the key returned in the PayResponse message.
							'FundingPlanID' => '' 							// The ID of the funding plan from which to make this payment.
							);
							
$PayPalRequestData = array('ExecutePaymentFields' => $ExecutePaymentFields);

// Pass data into class for processing with PayPal and load the response array into $PayPalResult
$PayPalResult = $PayPal->ExecutePayment($PayPalRequestData);

// Write the contents of the response array to the screen for demo purposes.
echo '<pre />';
print_r($PayPalResult);
?>
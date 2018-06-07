<?php


$curl = curl_init('https://sandbox.expresspaygh.com/api/submit.php');

curl_setopt_array($curl, array(
			    CURLOPT_RETURNTRANSFER => 1,
			    CURLOPT_POST => 1,
			    CURLOPT_POSTFIELDS => array('merchant-id'  => 112,
											'api-key'  => 'FnKJYHDJRC0h9BfuhhPI-4Jlg7n4Fth84CdYQ7tnQ-96xO0p0iHFrys6g5Ft0Z-oEJtnCi7tNIxFWiOZ6l2',
										    'firstname'   => 'Elisha',
											'lastname'   => 'Kofi',
											'email'   => 'elishasenoo@expresspaygh.com',
											'phonenumber'   => '233269441743',
											'username'   => 'elikemo',
											'accountnumber'   => 'sd23r523sd3',
											'currency'   => 'GHS',
											'amount'   => '32',
											'order-id'   => '373839494233',
											'redirect-url'   => 'https://return.com/wewe',)
			));

$result = json_decode(curl_exec($curl));
curl_close();

//echo $result->token;

header('Location: checkout.php?token='.$result->token);
exit();

?>
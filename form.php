<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);
ini_set('error_log','/var/www/projects/ReservationTicket/my_file.log');
//include("file_with_errors.php");
$secure_token_id = md5(rand(100, 1000000) . time());
		
//print_r("this is the token\n");
//print_r($secure_token_id);
		$post = array(
			'PARTNER' => 'PayPal',
			'VENDOR' => 'tepnimitl',
			'USER' => 'demodemo',
			'PWD' => 'demo123',
			'TRXTYPE' => 'S',
			'CREATESECURETOKEN' => 'Y',

			'SECURETOKENID' => $secure_token_id,
			'AMT' => '20',
			'SILENTPOSTURL' => 'http://52.3.123.60/ReservationTicket/silent.php',
			'RETURNURL' => 'http://52.3.123.60/ReservationTicket/returnpage.php',
			'ERRORURL' => 'http://52.3.123.60/ReservationTicket/errorpage.php',
			'BILLTOFIRSTNAME' => 'Test',
			'BILLTOLASTNAME' => 'LAST',
			'BILLTOEMAIL' => 'testpaypal@tedcorp.com',
			'INVOICE' => '111222333',
			'USER1' => 'id123',
		);

		$ch = curl_init("https://pilot-payflowpro.paypal.com");
		
		curl_setopt_array($ch, array(
			CURLOPT_POST => true,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_POSTFIELDS => join('&', array_map(function($k, $v) {
				return "$k=$v";
			}, array_keys($post), array_values($post)))
		));
		
		$ret = curl_exec($ch);
		
		if (!$ret) {
			curl_error($ret);
		}
		
		parse_str($ret, $data);
		
//print_r($data);
?>
		<form action="https://payflowlink.paypal.com" method="post" >
		<input type='hidden' name='SECURETOKENID' value='<?php echo $secure_token_id;?>'></input>
		<input type='hidden' name='SECURETOKEN' value='<?php echo $data['SECURETOKEN'];?>'></input>
		<input type='hidden' name='MODE' value='TEST'></input>
<!--		<input type='hidden' name='PARTNER' value='PayPal'></input>
		<input type='hidden' name='VENDOR' value='tepnimitl'></input>
		<input type='hidden' name='USER' value='tepnimitl'></input>
		<input type='hidden' name='PWD' value='jeabjeab39'></input>
		<input type='hidden' name='SILENTPOSTURL' value='https://52.3.123.60/PaymentGateway/silent.php'></input>
		<input type='hidden' name='RETURNURL' value='https://52.3.123.60/PaymentGateway/returnpage.php'></input>
		<input type='hidden' name='TRXTYPE' value='S'></input>
		<input type='hidden' name='AMT' value='20'></input>
		<input type='hidden' name='TENDER' value='C'></input>
		<input type='hidden' name='ACCT' value='4111111111111111'></input>
		<input type='hidden' name='EXPDATE' value='1215'></input>
		<input type='hidden' name='amount' value='30'></input>
	-->	<input type='hidden' name='AMT' value='20'></input>
		<input class="btn btn-success" type="submit" value="Proceed to Checkout"></input>
		</form>

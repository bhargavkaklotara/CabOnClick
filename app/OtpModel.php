<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OtpModel extends Model
{

function sendSMS($number,$subject)
{
	$no=$number;
	$otp_code=strtoupper(bin2hex(openssl_random_pseudo_bytes(3)));

	$url ='https://contro.msg91.com/api/sendhttp.php?authkey=124797AVlytQLcZzid57d236ed&mobiles='.$no.'&message='.$otp_code.'&sender=bgvCOC&route=4&country=91';
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$returndata = curl_exec($ch);
	curl_close($ch);
		
	// if(!$returndata){
	// 	$returndata=file_get_contents($url);
	// }
	return "A SMS SENT SUCCESSFULLY TO $no";
}


}




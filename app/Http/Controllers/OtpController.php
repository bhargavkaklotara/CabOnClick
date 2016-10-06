<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserModel;
use App\OtpModel;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use App\User;

class OtpController extends Controller
{


	function sendSMS(Request $request)
	{
		
		$no=$request->mob;
		$otp_code=strtoupper(bin2hex(openssl_random_pseudo_bytes(3)));
		$url ='https://contro.msg91.com/api/sendhttp.php?authkey=124797AVlytQLcZzid57d236ed&mobiles='.$no.'&message='.$otp_code.'&sender=bgvCOC&route=4&country=91';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$returndata = curl_exec($ch);
		curl_close($ch);
		
		// if(!$returndata)
		// {
		// 	$returndata=file_get_contents($url);
		// }

		$object = new OtpModel;
		$object->mobile_no=$no;
		$object->otp_value=$otp_code;
		$object->subject="Register";
		$object->save();
		
		return "A SMS SENT SUCCESSFULLY TO $no";

	}

	function VerifySMS(Request $request){
		 $mobile=$request->mobile;
		 $subject=$request->subject;
		 $otp=$request->otp;

		$record = OtpModel::where('mobile_no',$mobile)
						   ->where('subject',$subject)				
						   ->first();


			if($record->otp_value==$otp){
				
				$id=$record->ID;
				OtpModel::where('ID',$id)->update(['verified'=>true]);
				User::where('phone_number',$mobile)->update(['verified'=>true]);
				return 'http://localhost/coc';
			}

			else{
				return 'http://localhost/coc/register';
			}
	}
}



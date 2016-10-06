<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Driver;
use Auth;
Use App\OtpModel;
use Illuminate\Support\Facades\Redirect;

class RegisterDriver extends Controller
{
    
	public function register(Request $request)
	{
		$DriverObj = new Driver();
		$DriverObj->Driver_name=$request->name;
		$DriverObj->driver_email=$request->email;
		$no=$request->mob;
		$DriverObj->driver_contact=$no;
		$DriverObj->password=password_hash($request->password,PASSWORD_DEFAULT);
		$DriverObj->save();

		$otp_code=strtoupper(bin2hex(openssl_random_pseudo_bytes(3)));

		$otpObject = new OtpModel();
		$otpObject->mobile_no = $request->mob;
		$otpObject->otp_value = $otp_code;
		$otpObject->subject=$request->subject;
		$otpObject->save();
		
		return "Driver Registerd Successfully";
	}

	public function verify_otp(Request $request){
		$otp=$request->otp;
		$mob=$request->phone;
		$subject=$request->subject;

		$record = OtpModel::where('mobile_no',$mob)
						   ->where('subject',$subject)				
						   ->first();

			if($record->otp_value==$otp){
				
				$id=$record->ID;
				OtpModel::where('ID',$id)->update(['verified'=>true]);
				Driver::where('driver_contact',$mob)->update(['verified'=>true]);
				return 'http://localhost/coc/driver_register';



			}
			else{
				return 'http://localhost/coc/register';
			}
	}

	public function login(){
		 $email=$request->email;
	   	 $password=$request->password;

    if (Auth::attempt(['email' => $email, 'password' => $password, 'verified' => 1])) {
				return redirect('/')->with('message', 'Logged In Successfully!');

		   }
    else{
			return redirect('/login')->with('message', 'Logged In Failed!');    	
    }

	}


}

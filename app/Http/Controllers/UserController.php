<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;
use App\OtpModel;
use App\User;

class UserController extends Controller
{

  public function register(Request $request){

    $UserObj = new User();
    $UserObj->name=$request->name;
    $UserObj->email=$request->email;
    $no=$request->mob;
    $UserObj->phone_number=$no;
    $UserObj->password=password_hash($request->password,PASSWORD_DEFAULT);
    $UserObj->save();

    $otp_code=strtoupper(bin2hex(openssl_random_pseudo_bytes(3)));



    $otpObject = new OtpModel();
    $no=$request->mob;
    $otpObject->sendSMS($no,"Register");
    $otpObject->mobile_no = $no;
    $otpObject->otp_value = $otp_code;
    $otpObject->subject=$request->subject;
    $otpObject->save();
    
    return "User Registerd Successfully";
  }  
  

   public function login(Request $request){
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
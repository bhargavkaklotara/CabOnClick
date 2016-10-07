<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/register', function(){
	return view('register');
});

Route::get('/login',function(){
	return view('user.login');
});
Route::get('/driverlogin',function(){
	return view('driver.DriverLogin');
});

Route::post('/login-submit',[
		'uses'=>'UserController@login',
		 'as'=>'l.submit',
	]);

Route::post('/login-driver',[
		'uses'=>'RegisterDriver@login',
		 'as'=>'D.submit',
	]);

Route::post('register/otp','UserController@register');

Route::post('regiter/otpverify','OtpController@VerifySMS');

Route::get('/driver_register',function(){
	return view('driver.register');
});

Route::post('driver_register/otp','RegisterDriver@register');
Route::post('driver_register/otp_verify','RegisterDriver@verify_otp');


?>

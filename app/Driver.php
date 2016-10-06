<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    public function cab(){
    	return $this->hasMany('App\Cab','cab_id','driver_id');
    }

    public function drivertofrom(){
    	return $this->hasMany('app\DriverToFrom','id','driver_id');
    }
}

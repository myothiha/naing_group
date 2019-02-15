<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
   public function user(){

   	return $this->belongsToMany('App\User');
   }

   public function room(){
   	return $this->belongsTo('App\Room');   	
   }
}

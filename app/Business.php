<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{

   public function businessimages()
    {
        return $this->hasMany('App\Businessimage','business_id');
    }
}
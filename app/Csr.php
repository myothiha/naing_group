<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Csr extends Model
{
    public function csrimages()
    {
        return $this->hasMany('App\Csrimage','csr_id');
    }
}

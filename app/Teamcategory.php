<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teamcategory extends Model
{
    protected $table = 'teamcategories';
    public $timestamps = false;

    public function teams()
    {
        return $this->hasMany('App\Team', 'teamcategory_id');
    }
}

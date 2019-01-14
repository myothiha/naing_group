<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table   = 'teams';
    public $timestamps =  false;

    public function teamcategories()
    {
        return $this->belongsTo('App\Teamcategory','teamcategory_id');
    }
}

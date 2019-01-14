<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

	protected $table   = 'blogs';
    public $timestamps =  false;

    public function blogcategories()
    {
        return $this->belongsTo('App\Blogcategory','blogcategory_id');
    }
}

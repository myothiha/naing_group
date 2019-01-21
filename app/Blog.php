<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

	protected $table   = 'blogs';

    public function blogcategories()
    {
        return $this->belongsTo('App\Blogcategory','blogcategory_id');
    }

    public function blogimages()
    {
        return $this->hasMany('App\Blogimage','blog_id');
    }


}

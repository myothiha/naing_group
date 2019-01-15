<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogcategory extends Model
{
	protected $table = 'blogcategories';
    public $timestamps = false;

    public function blogs()
    {
        return $this->hasMany('App\Blog', 'blogcategory_id');
    }
}

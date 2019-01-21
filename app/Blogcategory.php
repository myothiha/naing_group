<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Blogcategory
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Blog[] $blogs
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blogcategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blogcategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blogcategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blogcategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blogcategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blogcategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blogcategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Blogcategory extends Model
{
	protected $table = 'blogcategories';
    public $timestamps = false;

    public function blogs()
    {
        return $this->hasMany('App\Blog', 'blogcategory_id');
    }
}

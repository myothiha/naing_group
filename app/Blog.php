<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Blog
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $author
 * @property string|null $description
 * @property string|null $blogcategory_id
 * @property string|null $featureimage
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property-read \App\Blogcategory|null $blogcategories
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog whereBlogcategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog whereFeatureimage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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


    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'blog_tag');
    }
    
}

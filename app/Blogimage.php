<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Blogimage
 *
 * @property int $id
 * @property int $blog_id
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blogimage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blogimage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blogimage query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blogimage whereBlogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blogimage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blogimage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blogimage whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blogimage whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Blogimage extends Model
{
    //
}

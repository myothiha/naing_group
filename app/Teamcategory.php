<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Teamcategory
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Team[] $teams
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teamcategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teamcategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teamcategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teamcategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teamcategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teamcategory whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teamcategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Teamcategory extends Model
{
    protected $table = 'teamcategories';
    public $timestamps = false;

    public function teams()
    {
        return $this->hasMany('App\Team', 'teamcategory_id');
    }
}

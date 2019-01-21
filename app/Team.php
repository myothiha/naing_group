<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Team
 *
 * @property int $id
 * @property string|null $teamcategory_id
 * @property string|null $image
 * @property string|null $name
 * @property string|null $position
 * @property string|null $facebook
 * @property string|null $google
 * @property string|null $twitter
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property-read \App\Teamcategory|null $teamcategories
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Team newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Team newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Team query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Team whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Team whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Team whereGoogle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Team whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Team whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Team whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Team wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Team whereTeamcategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Team whereTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Team whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Team extends Model
{
    protected $table   = 'teams';
    public $timestamps =  false;

    public function teamcategories()
    {
        return $this->belongsTo('App\Teamcategory','teamcategory_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Milestone
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $location
 * @property string|null $date
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Milestone newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Milestone newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Milestone query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Milestone whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Milestone whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Milestone whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Milestone whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Milestone whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Milestone whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Milestone whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Milestone whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Milestone extends Model
{
    //
}

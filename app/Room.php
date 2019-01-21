<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Room
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room query()
 * @mixin \Eloquent
 */
class Room extends Model
{

    public function feature()
    {
        return $this->belongsToMany(RoomFeature::class, 'rooms_room_features');
    }
}

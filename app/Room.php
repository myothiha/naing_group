<?php

namespace App;

use app\Project;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Room
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $project_id
 * @property string $name
 * @property string $description
 * @property int $price
 * @property int $width
 * @property int $bedroom
 * @property int $bathroom
 * @property int $floor
 * @property string $video
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\RoomFeature[] $feature
 * @property-read \App\Project $project
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereBathroom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereBedroom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereFloor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereVideo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereWidth($value)
 */
class Room extends Model
{

    public function feature()
    {
        return $this->belongsToMany(RoomFeature::class, 'rooms_room_features');
    }

    public function project()
    {
        return $this->belongsTo('App\Project');
    }
    public function roomimage(){
    	return $this->hasMany('App\RoomImage');
    }

    public function floorplan(){
        return $this->belongsTo('App\FloorPlan');
    }
}

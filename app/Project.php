<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Project
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $map
 * @property string $feature_image
 * @property string $banner_image
 * @property int $project_status_id
 * @property int $project_type_id
 * @property int $city_id
 * @property int $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\City $cities
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ProjectFacilities[] $facilities
 * @property-read \App\ProjectStatus $project_statuses
 * @property-read \App\ProjectType $project_types
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereBannerImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereFeatureImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereMap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereProjectStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereProjectTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Project extends Model
{
    public function cities()
    {
        return $this->belongsTo('App\City', 'city_id');
    }

    public function project_statuses()
    {
        return $this->belongsTo('App\ProjectStatus', 'project_status_id');
    }

    public function project_types()
    {
        return $this->belongsTo('App\ProjectType', 'project_type_id');
    }

    public function facilities()
    {
        return $this->belongsToMany('App\ProjectFacilities', 'project_project_facilities', 'project_id', 'project_facilities_id');
    }

    public function rooms()
    {
        return $this->hasMany('App\Room');
    }
}

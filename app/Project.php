<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}

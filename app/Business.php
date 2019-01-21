<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Business
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $featureimage
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Businessimage[] $businessimages
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Business newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Business newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Business query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Business whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Business whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Business whereFeatureimage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Business whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Business whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Business whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Business extends Model
{

   public function businessimages()
    {
        return $this->hasMany('App\Businessimage','business_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Csr
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $featureimage
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Csrimage[] $csrimages
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Csr newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Csr newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Csr query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Csr whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Csr whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Csr whereFeatureimage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Csr whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Csr whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Csr whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Csr extends Model
{
    public function csrimages()
    {
        return $this->hasMany('App\Csrimage','csr_id');
    }
}

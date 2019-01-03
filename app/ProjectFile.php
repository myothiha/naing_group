<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\ProjectFile
 *
 * @property-read mixed $urn
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProjectFile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProjectFile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProjectFile query()
 * @mixin \Eloquent
 */
class ProjectFile extends Model
{

    public const STATUS_PENDING     = "pending";
    public const STATUS_IN_PROGRESS = "inprogress";
    public const STATUS_SUCCESS     = "success";
    public const STATUS_FAIL        = "failed";
    public const STATUS_TIMEOUT     = "timeout";

    public const UPLOAD_PATH = '/uploads/files/';

    public function getUrnAttribute()
    {
        return base64_encode($this->object_id);
    }

    public function updateStatus($status)
    {
        $this->status = $status;
        $this->save();
        return $this;
    }

    /*public function getGetStatusAttribute($value)
    {
        switch ($this->status) {
            case self::STATUS_FAIL :
                $status = 'Fail';
                break;
            case self::STATUS_COMPLETE :
                $status = 'Complete';
                break;
            case self::STATUS_PENDING :
                $status = 'Pending';
                break;
            case self::STATUS_IN_PROGRESS :
                $status = 'In Progress';
                break;
            default :
                $status = 'Error';
        }
        return $status;
    }*/

}

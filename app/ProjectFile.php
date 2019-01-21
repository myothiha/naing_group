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
 * @property int $id
 * @property string|null $title
 * @property string $bucket_key
 * @property string $object_id
 * @property string $object_key
 * @property string $sha1
 * @property string $size
 * @property string $content_type
 * @property string $location
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProjectFile whereBucketKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProjectFile whereContentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProjectFile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProjectFile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProjectFile whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProjectFile whereObjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProjectFile whereObjectKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProjectFile whereSha1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProjectFile whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProjectFile whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProjectFile whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProjectFile whereUpdatedAt($value)
 * @property int $project_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProjectFile whereProjectId($value)
 * @property-read \App\Project $project
 */
class ProjectFile extends Model
{

    public const STATUS_PENDING     = "pending";
    public const STATUS_IN_PROGRESS = "inprogress";
    public const STATUS_SUCCESS     = "success";
    public const STATUS_FAIL        = "failed";
    public const STATUS_TIMEOUT     = "timeout";

    public const UPLOAD_PATH = '/uploads/files/';

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

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

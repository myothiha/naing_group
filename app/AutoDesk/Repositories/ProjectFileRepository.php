<?php
/**
 * Created by PhpStorm.
 * User: myothiha
 * Date: 11/28/2018
 * Time: 8:30 AM
 */

namespace App\AutoDesk\Repositories;


use App\ProjectFile;
use phpDocumentor\Reflection\Types\This;

class ProjectFileRepository implements ProjectFileRepositoryInterface
{

    private $model;

    /**
     * ProjectFileRepository constructor.
     */
    public function __construct()
    {
        $this->model = new ProjectFile();
    }


    function getAll()
    {
        return $this->model->all();
    }

    function save($bucketKey, $objectId, $objectKey, $sha1, $size, $contentType, $location, $status = ProjectFile::STATUS_PENDING)
    {
        $this->model->bucket_key    = $bucketKey;
        $this->model->object_id     = $objectId;
        $this->model->object_key    = $objectKey;
        $this->model->sha1          = $sha1;
        $this->model->size          = $size;
        $this->model->content_type  = $contentType;
        $this->model->location      = $location;
        $this->model->status        = $status;
        $this->model->save();

        return $this->model;
    }
}
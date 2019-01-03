<?php
/**
 * Created by PhpStorm.
 * User: myothiha
 * Date: 11/28/2018
 * Time: 8:28 AM
 */

namespace App\AutoDesk\Repositories;

use App\ProjectFile;

interface ProjectFileRepositoryInterface
{
    function getAll();
    function save($bucketKey, $objectId, $objectKey, $sha1, $size, $contentType, $location, $status = ProjectFile::STATUS_PENDING);
}
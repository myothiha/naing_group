<?php
/**
 * Created by PhpStorm.
 * User: myo
 * Date: 11/23/2018
 * Time: 12:03 PM
 */

namespace App\AutoDesk\Services\Viewers;

use App\AutoDesk\Api\AutoDeskApi;
use App\AutoDesk\Repositories\ProjectFileRepositoryInterface;
use App\Network\Response\ResponseInterface;
use App\ProjectFile;
use Illuminate\Support\Facades\Cache;

/**
 * Class AutoDeskViewerService
 * @package App\AutoDesk\Services\Viewers
 */
class AutoDeskViewerService implements ViewerServiceInterface
{
    /**
     * @var AutoDeskApi
     */
    private $autoDesk;
    /**
     * @var ProjectFileRepositoryInterface
     */
    private $projectFileRepository;

    /**
     * AutoDeskViewerService constructor.
     * @param AutoDeskApi $autoDesk
     * @param ProjectFileRepositoryInterface $projectFileRepository
     */
    public function __construct(AutoDeskApi $autoDesk, ProjectFileRepositoryInterface $projectFileRepository)
    {
        $this->autoDesk = $autoDesk;
        $this->projectFileRepository = $projectFileRepository;
    }

    /**
     * @param $pathToFile
     * @param $filename
     * @return ProjectFile
     */
    public function upload($pathToFile, $filename): ProjectFile
    {
        $accessToken = $this->getToken();

        $response = $this->autoDesk->uploadFile($pathToFile, $accessToken, $filename);
        $responseData = $response->getContents();

        return $this->projectFileRepository->save(
            $responseData->bucketKey,
            $responseData->objectId,
            $responseData->objectKey,
            $responseData->sha1,
            $responseData->size,
            $responseData->contentType,
            $responseData->location
        );
    }

    /**
     * @param ProjectFile $projectFile
     * @return \App\Network\Response\ResponseInterface
     */
    public function postSvf(ProjectFile $projectFile)
    {
        return $this->autoDesk->derivative($this->getToken(), $projectFile->urn, $projectFile->object_key);
    }


    /**
     * @param ProjectFile $projectFile
     * @return \App\Network\Response\ResponseInterface
     */
    public function getManifest(ProjectFile $projectFile) : ResponseInterface
    {
        return $this->autoDesk->getManifest($this->getToken(), $projectFile->urn);
    }

    /**
     * @param $view
     * @param $projectFile
     * @param array $param
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function render($view, $projectFile, $param = [])
    {
        return view($view, [
            'urn' => $projectFile->urn,
            'access_token' => $this->getToken(),
            $param,
        ]);
    }

    /**
     * @return array
     */
    private function getToken()
    {
        $auth = Cache::get('autoDeskAuth') ?? $this->authenticate();
        return $auth->access_token;
    }

    /**
     * @return mixed
     */
    private function authenticate()
    {
        $response = $this->autoDesk->authenticate('data:read data:write data:create bucket:read bucket:create');
        $contents = $response->getContents();

        Cache::put('autoDeskAuth', $contents, $contents->expires_in / 60);

        return $contents;
    }
}

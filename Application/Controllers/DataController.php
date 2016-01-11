<?php
namespace Application\Controllers;

use Application\Services\StorageService;

class DataController
{
    protected $app;
    /** @var StorageService $storageService */
    protected $storageService;

    /**
     * @param mixed $app
     */
    public function setApp($app)
    {
        $this->app = $app;
    }

    /**
     * @param mixed $StorageService
     */
    public function setStorageService($StorageService)
    {
        $this->storageService = $StorageService;
    }

    public function index(){
        $dataFromFile = $this->storageService->getData();
        return 'foo';
    }
    public function saveData($data){
        exit('updating');
    }
}
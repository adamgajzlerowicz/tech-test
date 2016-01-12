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
        echo $this->app['twig']->render('index.twig.html', array('data' => $dataFromFile));
        return true;
    }
    public function saveData($data){

        if($this->storageService->saveData($data)){
            echo 'data saved<br>';
            echo '<a href="/">go back</a>';
        };
        return 'data error';
    }
}
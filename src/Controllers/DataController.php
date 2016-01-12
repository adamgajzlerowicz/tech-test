<?php
namespace Controllers;

use Services\StorageService;

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

    private function getData(){
        return $this->storageService->getData();
    }

    public function index(){
        $dataFromFile = $this->getData();
        return $this->app['twig']->render('index.twig.html', array('data' => $dataFromFile));
    }

    public function saveData($data){
        if($this->storageService->saveData($data)){
            return '<p class="info">data saved</p>';
        };
        return 'Error saving the data';
    }

    public function showAction($id){
        $data = $this->getData();
        return $this->app['twig']->render('show.twig.html', array('item' => $data[$id],'id'=>$id));
    }
}
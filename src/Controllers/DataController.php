<?php
namespace Controllers;

use Services\StorageService;
/*
 * Data Controller will take requests and use provided storage service to save the data.
 * Storage service can be replaced with, for example a database mapper.
 */
class DataController
{
    /*
     * Give access to the app DI container
     */
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

    /*
     * Using storage service return the data, abstracted as is used across the class
     */
    private function getData(){
        return $this->storageService->getData();
    }

    /*
     * Get the data from the service
     */
    public function index(){
        $dataFromFile = $this->getData();
        //use the data and render it using twig
        return $this->app['twig']->render('index.twig.html', array('data' => $dataFromFile));
    }

    /*
     * Save the data using Service.
     * As we are using only a file storage, we don't need to check the data for SQL injection
     * Data gets saved as it is, and then gets escaped on the Twig file
     */
    public function saveData($data){
        if($this->storageService->saveData($data)){
            return '<p class="info">data saved</p>';
        };
        return 'Error saving the data';
    }

    /*
     * Method returns a particular entry.
     * As relational database is not available, it gets all data from storage, and then returns only requested object
     */
    public function showAction($id){
        $data = $this->getData();
        //returns object and renders it to a Twig file
        return $this->app['twig']->render('show.twig.html', array('item' => $data[$id],'id'=>$id));
    }
}
<?php

namespace Application\Controller;

class DataController
{
    protected $app;
    protected $StorageService;

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
        $this->StorageService = $StorageService;
    }

    public function index(){

    }
}
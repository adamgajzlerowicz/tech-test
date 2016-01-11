<?php
namespace Application\Services;

class StorageService
{
    protected $app;
    /**
     * @param mixed $app
     */
    public function setApp($app)
    {
        $this->app = $app;
    }

    public function saveData(){

    }

    public function getData(){
        $filePath = $this->app['config.storage'];
        return file_get_contents();
    }
}
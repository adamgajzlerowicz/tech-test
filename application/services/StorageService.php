<?php
namespace Application\Service;

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
        return file_get_contents();
    }

}
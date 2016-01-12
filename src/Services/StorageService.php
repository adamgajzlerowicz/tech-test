<?php
namespace Services;

class StorageService
{
    protected $storageName;
    /**
     * @param mixed $storageName
     */
    public function setStorageName($storageName)
    {
        $this->storageName = $storageName;
    }

    public function getData(){
        $data = file_get_contents($this->storageName);
        return json_decode($data);
    }

    public function saveData($data){
        $data = json_encode($data);
        if(file_put_contents($this->storageName, $data)){
            return true;
        }
        return false;
    }

}
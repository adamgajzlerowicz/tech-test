<?php
namespace Services;
/*
 * Replaceable storage service that is used by controller to store, and receive data
 * Is responsible for formatting data to JSON format
 */
class StorageService
{
    //provided from Service provider (if required can be changed)
    protected $storageName;
    /**
     * @param mixed $storageName
     */
    public function setStorageName($storageName)
    {
        $this->storageName = $storageName;
    }
    /*
     * Obtains file from local drive and returns data in a form of array
     */
    public function getData(){
        $data = file_get_contents($this->storageName);
        return json_decode($data);
    }

    /*
     * Receives data in a form of array and stores it on the drive
     * If storing failed, returns false
     */
    public function saveData(Array $data){
        $data = json_encode($data);
        if(file_put_contents($this->storageName, $data)){
            return true;
        }
        return false;
    }

}
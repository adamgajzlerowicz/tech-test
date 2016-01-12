<?php

Use Services\StorageService;

class StorageServiceTest extends PHPUnit_Framework_TestCase{

    protected $service;
    public function __construct()
    {
        $this->service = new StorageService();
        $this->service->setStorageName('storage/storageTest.json');

    }

    public function testLoadData(){
        $service = $this->service;
        $data = $service->getData();
        //data returned from the service should always be an array
        $this->assertInternalType('array',$data);
    }
    public function testLoadAndSave(){
        $service = $this->service;
        $data = $service->getData();
        //data returned from the service should always be an array
        $this->assertInternalType('array',$data);
        $dataSize = count($data);

        //randomise data in the array
        $randomNumber = rand(0,$dataSize-1);
        $randomName = uniqid();
        $randomSecondName = uniqid();
        $data[$randomNumber]->firstname = $randomName;
        $data[$randomNumber]->surname = $randomSecondName;
        //if data is saved successfully, service should return true
        $response = $service->saveData($data);
        $this->assertTrue($response);
        $restoredData = $service->getData();
        //data returned from the service should always be an array
        $this->assertInternalType('array',$restoredData);
        $this->assertEquals($restoredData, $data);
    }
}
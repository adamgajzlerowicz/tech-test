<?php

Use Services\StorageService;

class StorageServiceTest extends PHPUnit_Framework_TestCase{

    public function testLoadData(){
        $service = new StorageService();
        $service->setStorageName('storage/storageTest.json');
        $data = $service->getData();
        $this->assertEquals(1, 1);
        $this->assertInternalType('array',$data);
    }
    public function testLoadAndSave(){
        $service = new Services\StorageService();
        $service->setStorageName('storage/storageTest.json');
        $data = $service->getData();
        $dataSize = count($data);
        $randomNumber = rand(0,$dataSize);
        $randomName = uniqid();
        $randomSecondName = uniqid();
        $data[$randomNumber]->firstname = $randomName;
        $data[$randomNumber]->surname = $randomSecondName;
        $service->saveData($data);
        $restoredData = $service->getData();
        $this->assertInternalType('array',$restoredData);
        $this->assertEquals($restoredData, $data);
    }
}
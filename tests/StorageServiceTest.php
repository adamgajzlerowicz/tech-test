<?php



class StorageServiceTest extends PHPUnit_Framework_TestCase{
    public function testLoadData(){
        $service = new \Services\StorageService();
        $service->setStorageName('storage/storageTest.json');
        $data = $service->getData();
        $this->assertInternalType('array',$data);
    }
}
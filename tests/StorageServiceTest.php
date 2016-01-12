<?php



class StorageServiceTest extends PHPUnit_Framework_TestCase{
    protected $service;
    public function __construct($name, array $data, $dataName)
    {
        $this->service = new \Services\StorageService();
        $this->service->setStorageName('storage/storageTest.json');
    }

    public function testLoadData(){
        $data = $this->service->getData();
        $this->assertInternalType('array',$data);
    }
    public function loadDataJuggleAndSave(){
        $data = $this->service->getData();
        $dataSize = count($data);
        $randomNumber = rand(0,$dataSize);
        $randomName = uniqid();
        $randomSecondName = uniqid();
        $data[$randomNumber]['firstname'] = $randomName;
        $data[$randomNumber]['surname'] = $randomSecondName;
        $this->service->saveData($data);

        $restoredData = $this->service->getData();
        $this->assertEquals($restoredData, $data);
    }
}
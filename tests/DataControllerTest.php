<?php

class DataControllerTest extends PHPUnit_Framework_TestCase
{

    protected $guzzle;
    public function __construct()
    {
        $this->guzzle = new GuzzleHttp\Client();
    }

    public function testIndex()
    {
//        $resp = $this->guzzle->request('GET', 'http://localhost:8888/index.php/show/3');
//        echo($resp->getStatusCode());

//        $this->assertEquals('Ibw\JobeetBundle\Controller\JobController::indexAction', $client->getRequest()->attributes->get('_controller'));
//        $this->assertEquals(200 , $client->getResponse()->getStatusCode());
//        $this->assertEquals(0, $crawler->filter('.jobs td.position:contains("Expired")')->count());
    }
}


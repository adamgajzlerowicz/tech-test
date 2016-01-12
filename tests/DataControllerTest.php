<?php

class DataControllerTest extends PHPUnit_Framework_TestCase
{

    protected $guzzle;
    public function __construct()
    {
        $this->guzzle = new GuzzleHttp\Client();
    }

    public function testRoutes()
    {
        //perform a functional test
        $resp = $this->guzzle->request('GET', 'http://localhost:8888/show/3');
        $this->assertEquals($resp->getStatusCode(), 200);
    }
}


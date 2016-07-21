<?php

namespace Convenia\tests;

use Convenia\OpenNfeio\OpenNfeio;
use PHPUnit_Framework_TestCase;

class openNfeio extends PHPUnit_Framework_TestCase
{
    public function test_ApiCallTest()
    {
        $obj = new OpenNfeio('api_key');
        $responseArray = $obj->addresses('04110001');
        $this->assertArrayHasKey('postalCode', $responseArray->get());
    }

    public function test_exceptionTest()
    {
        $this->setExpectedException('Exception');
        $obj = new OpenNfeio('api_key,');
        $responseArray = $obj->InvalidCall('04110001');
    }
}

<?php
namespace Convenia\tests;

use PHPUnit_Framework_TestCase;
use Convenia\OpenNfeio\OpenNfeio;

class tests_openNfeio extends PHPUnit_Framework_TestCase
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

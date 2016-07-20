<?php
namespace Convenia\tests;

use PHPUnit_Framework_TestCase;
use Convenia\OpenNfeio\OpenNfeio;

class tests_openNfeio extends PHPUnit_Framework_TestCase
{

	public function test_ApiCallTest()
	{
		$obj = new OpenNfeio('1hDxRYa2KDlgP6xNwx0soLxU5aQSpiC7nPk702awoLSK6mw6OhX7HZmZgVq5UtVIUH4');
		$responseArray = $obj->addresses('04110001');
		$this->assertArrayHasKey('postalCode', $responseArray->get());
	}

	public function test_exceptionTest()
	{
		$this->setExpectedException('Exception');
		$obj = new OpenNfeio('1hDxRYa2KDlgP6xNwx0soLxU5aQSpiC7nPk702awoLSK6mw6OhX7HZmZgVq5UtVIUH4');
		$responseArray = $obj->InvalidCall('04110001');
	}

}

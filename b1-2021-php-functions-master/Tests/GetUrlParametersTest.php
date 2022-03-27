<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use TypeError;

require_once __DIR__ . "/../Functions/getUrlParameters.php";

class GetUrlParametersTest  extends TestCase
{

    /**
     * @dataProvider getUrlParametersProvider
     */
    public function testGetUrlParameters(string $url, array $expected)
    {
        $this->assertSame($expected, getUrlParameters($url));
    }

    /**
     * @expectedException TypeError
     */
    public function testFailingGetUrlParameters()
    {
        getUrlParameters(["not_a_string"]);
    }

    public function getUrlParametersProvider()
    {
        return [
            ["http://www.php.net?param=test", ["param" => "test"]],
            ["http://www.php.net?param1=val1&param2=val2", ["param1" => "val1", "param2" => "val2"]],
            ["http://www.php.net?params[]=val1&params[]=val2", ["params" => ["val1", "val2"]]]
        ];
    }

}
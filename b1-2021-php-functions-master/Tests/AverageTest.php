<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use TypeError;

require_once __DIR__ . "/../Functions/average.php";

class AverageTest  extends TestCase
{

    /**
     * @dataProvider averageProvider
     */
    public function testAverage(array $values, float $expected)
    {
        $this->assertSame($expected, average($values));
    }

    /**
     * @expectedException TypeError
     */
    public function testFailingAverage()
    {
        average("not_an_array");
    }

    public function averageProvider()
    {
        return [
            [[2, 3, 4], 3],
            [[-10, 5, -4], -3],
            [[3.5], 3.5]
        ];
    }

}
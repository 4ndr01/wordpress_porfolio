<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

require_once __DIR__ . "/../Functions/temperatureConverter.php";

class TemperatureConverterTest  extends TestCase
{

    /**
     * @dataProvider temperatureConverterProvider
     */
    public function testTemperatureConverter(float $value, string $from, string $to, float $expected)
    {
        $this->assertSame($expected, temperatureConverter($value, $from, $to));
    }

    public function temperatureConverterProvider()
    {
        return [
            [5, "c", "f", 41],
            [5, "f", "c", -15],
            [-5, "k", "f", -468.67],
            [5, "f", "f", 5]
        ];
    }

}
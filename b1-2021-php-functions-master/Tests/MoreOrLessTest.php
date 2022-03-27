<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

require_once __DIR__ . "/../Functions/moreOrLess.php";

class MoreOrLessTest  extends TestCase
{

    /**
     * @dataProvider moreOrLessProvider
     */
    public function testMoreOrLess(float $input, float $search, string $expected)
    {
        $this->assertSame($expected, moreOrLess($input, $search));
    }

    public function moreOrLessProvider()
    {
        return [
            [20, 50, "+"],
            [70, 50, "-"],
            [50, 50, "="],
            [-5.2, 3.4, "+"]
        ];
    }

}
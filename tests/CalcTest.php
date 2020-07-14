<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Core\Calculator;

class CalculatorTest extends TestCase
{
    function testSum()
    {

        $calc = new Calculator();
        $this->assertEquals(
            7,
            $calc->sum(2, 5)
        );
    }
    function testNull()
    {

        $calc = new Calculator();
        $this->assertEquals(
            4,
            $calc->null(5, 1)
        );
    }
    function testApp()
    {

        $calc = new Calculator();
        $this->assertEquals(
            2,
            $calc->app(4, 2)
        );
    }
    function testUmn()
    {

        $calc = new Calculator();
        $this->assertEquals(
            10,
            $calc->umn(5, 2)
        );
    }
}

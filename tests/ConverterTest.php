<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Core\Str;

class ConverterTest extends TestCase
{
    function testCompare(): void
    {
        $str = new Str();

        $this->assertEquals(
            true,
            $str->compare("abc", "abc")
        );
        $this->assertEquals(
            false,
            $str->compare("abc1", "abc")
        );

        $this->assertIsBool(
            $str->compare("1", "1")
        );
    }
    function testInt(): void
    {
        $str = new Str();

        $this->assertEquals(
            5,
            $str->len("Hello")
        );
        $this->assertEquals(
            6,
            $str->len("Helllo")
        );
    }
}

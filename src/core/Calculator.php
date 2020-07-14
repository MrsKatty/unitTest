<?php

namespace Core;

class Calculator
{
    protected $a;
    protected $b;

    public function sum(int $a,  int $b): int
    {
        return $a + $b;
    }
    public function null(int $a,  int $b): int
    {
        return $a - $b;
    }
    public function app(int $a,  int $b): int
    {
        return $a / $b;
    }
    public function umn(int $a,  int $b): int
    {
        return $a * $b;
    }
}

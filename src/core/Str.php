<?php

namespace Core;

class Str
{
    public function compare(string $str1, string $str2)
    {

        return $str1 == $str2;
    }
    public function len(string $str)
    {
        return iconv_strlen($str);
        //return strlen($str);
    }
}

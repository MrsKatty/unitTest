<?php


include "../vendor/autoload.php";

use Core\Str;

$str = new Str();

echo $str->compare("Hello", "Hello") * 1;

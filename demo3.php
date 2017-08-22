<?php

class test
{
    public $a = 3333;
    public function __construct()
    {
        echo 111;
    }

    public static function say()
    {
        echo 2222;
    }
}

$test = new test();
echo $test['a'];

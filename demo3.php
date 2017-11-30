<?php

class test implements ArrayAccess
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

    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
    }

    public function offsetGet($offset)
    {
        return $this->$offset;
    }

    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
    }

    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
    }
}

$test = new test();
echo $test['a'];

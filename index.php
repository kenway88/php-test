<?php

class A
{
    public $a = 1;
}

class B
{
    public function __construct($a)
    {
        $this->class = $a;
        $this->class->a = 2;
    }
}
$a = new A();
$c = new B($a);
echo $a->a;

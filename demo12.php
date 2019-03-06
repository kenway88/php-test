<?php

class A
{
    public $type = 1;
}
$a = new A();
//类型的赋值是引用类型的赋值
$b = $a;
$b->type = 2;
echo $a->type;
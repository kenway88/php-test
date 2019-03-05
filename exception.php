<?php
function exp1()
{
    throw new Exception('这是第一异常');
}

try {
    exp1();
} catch (Exception $e) {
    echo $e->getMessage();
}
echo 1111;

class A
{
    private $a=1;
}
$a = new A();
echo $a->a;
<?php
function exp1()
{
    throw new OutOfBoundsException('这是第一异常');
}

try {
    exp1();
    //父类异常可以抓取子类异常
} catch (\RuntimeException $e) {
    echo
    $e->getCode(),$e->getMessage();
    var_dump($e->getTrace());
}
//echo 1111;

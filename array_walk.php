<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/11/011
 * Time: 0:08
 *
 * array_map是用来返回新数组的
 * array_walk是用于改变原数组的
 * array_map的回调函数只能调用$val不能调用$key
 * array_walk既可以调用$val也可以调用$key
 */
function myfunction(&$value,$key)
{
    $value="yellow";
}
$a=array("a"=>"red","b"=>"green","c"=>"blue");

//array_walk得返回值为bool型得true
$b = array_walk($a,"myfunction");
print_r($a);
var_dump($b);

<?php
/**
 * Created by PhpStorm.
 * User: T092
 * Date: 2017/8/24
 * Time: 16:58
 */
$a = function () {
    echo 'hello';
};
$b = function () {
    echo 'hello';
};
var_dump($a == $b);//false
/*
 * 匿名函数之间无法比较
 */

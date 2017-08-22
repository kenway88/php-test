<?php
/**
 * Created by PhpStorm.
 * User: T092
 * Date: 2016/4/6
 * Time: 17:21
 * 引用返回
 */
function &chhua()
{
    static $b="www.jb51.net";//申明一个静态变量
    $b=$b.'WEB开发';
    echo $b;
    return $b;
}

$a=chhua();//这条语句会输出　$b的值　为“www.jb51.netWEB开发”
$a="PHP";
echo "<Br>";
$a=chhua();//这条语 句会输出　$b的值　为“www.jb51.netWEB开发WEB开发”
echo "<Br>";
$a=&chhua();//这条语句会输出　$b的值　为“www.jb51.netWEB开发WEB开发WEB开发”
echo "<Br>";
$a="JS";
$a=chhua(); //这条语句会输出　$b的值　为"JSWEB开发"


//function &test()
//{
//    static $b=0;//申明一个静态变量
//    $b=$b+1;
//    echo $b;
//    return $b;
//}
//
//$a=test();//这条语句会输出　$b的值　为１
//$a=5;
//$a=test();//这 条语句会输出　$b的值　为2
//$a=&test();//这条语句会输出　$b的值　为3
//$a=5;
//$a=test(); //这条语句会输出　$b的值　为6
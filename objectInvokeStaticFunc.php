<?php
/**
 * Created by PhpStorm.
 * User: T092
 * Date: 2017/8/24
 * Time: 16:09
 */
class A{

    public function bar(){
        echo 'bar'.PHP_EOL;
    }
    public static function foo(){
        echo 'foo'.PHP_EOL;
    }
}

A::bar();//会报错
A::foo();//正确
$obj = new A();
$obj -> foo();//正确
/*
　　bar()是一个非静态方法,应该由对象来调用，但用静态来调用此方法也可以执行,而严格状态下，此方法会执行，同时报错,
　　Strict Standards: Non-static method Human::easyeat() should not be called statically in........
　　但是实例化的类是可以调用静态方法的。
*/
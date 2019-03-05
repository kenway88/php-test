<?php

/**
 * 一、概念
 * 1. 动态属性(dynamic property):没有定义的属性在被赋值之后,变为动态属性
 * 2. 动态属性的访问修饰符为public
 * 二、__get()和set__()触发条件
 * 1. 没有定义的属性：外部调用或内部方法调用都能触发
 * 2. 已定义访问修饰符为private和protected的属性:外部调用能触发，内部方法调用不能触发
 * 3. 已定义访问修饰符为public的属性(包括动态属性)：无法触发
 * 三、注意
 * 1. 触发__get()和__set()后，无论原来为何值，只能获得__get()的返回值;无论被赋予什么值，只能通过__set()
 * 方法内部赋值
 * 2. __set()若对未定义属性进行赋值，则未定义属性将变为动态属性，下次访问该属性将不再触发
 * 3. 属性只声明不赋值也算定义，这种属性拥有默认值null
 * 4. return $object->property 这个语句并不触发__get()方法
 *
 *
 * Class A
 */
class A {
    public $a = 1;
//    private $c = '我是原值';
//    public $c = '我是原值';
    public $b;
    public function __construct()
    {
//        $this->b='这是b的值';
        var_dump($this->b) ;
        var_dump($this->b) ;
    }

    public function __set($name, $value)
    {
        echo 2222;
//        $this->$name = $value;
    }

    public function __get($name)
    {
        $this->d = 2;
        return $this->d;
//        return '';
    }

    public function say()
    {
        echo $this->c;
    }

}
$b = new A();
echo $b->c;
var_dump($b);
//var_dump($b->b);
//$b->say();
//$b->c='我被赋值';
//$b->say();
//echo $b->c;

//echo $b->c;

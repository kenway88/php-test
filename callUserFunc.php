<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/23/023
 * Time: 0:57
 * 验证call_user_func()函数
 */

class A
{
    private $a = 1;
    public function sayHello()
    {
        echo 'hello'.$this->a;
    }

    public function returnHello()
    {
        return 'hello';
    }

    public function sayMore($a,$b)
    {
        echo $a.$b;
    }
}
$a = new A();
call_user_func([$a,'sayHello']);
echo '<br>';
var_dump(call_user_func([$a,'returnHello']));
echo '<br>';
call_user_func([$a,'sayMore'],'这是a','这是b');
echo '<br>';
var_dump(call_user_func('ord','a'));
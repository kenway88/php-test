<?php
/**
 * Created by PhpStorm.
 * User: T092
 * Date: 2016/4/7
 * Time: 14:07
 * 单例模式
 */
class man
{
    //保存例实例在此属性中
    private static $_instance;

    //构造函数声明为private,防止直接创建对象
    private function __construct()
    {
        echo '我被实例化了！';
    }

    //单例方法
    public static function get_instance()
    {
        if(!isset(self::$_instance))
        {
            self::$_instance=new self();
        }
        return self::$_instance;
    }

    //阻止用户复制对象实例
    public function __clone()
    {
        trigger_error('Clone is not allow' ,E_USER_ERROR);
    }

    public function test($str,$str2){
        echo $str.$str2;
    }

//    private function __destruct()
//    {
//        echo 'test';
//    }
}

function test($str,$str2){
    echo $str.$str2;
}
// 这个写法会出错，因为构造方法被声明为private
//$test = new man;

// 下面将得到Example类的单例对象
$test = man::get_instance();
test('1111',22222,'aaaaa');
//$test->test();

// 复制对象将导致一个E_USER_ERROR.
//$test_clone = clone $test;
//$test = new man();
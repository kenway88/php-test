<?php
//phpinfo();
//function test($val)
//{
//    return $val>1;
//}
//$a = array(1=>2,2=>1);
//$b = array_filter($a,'test',ARRAY_FILTER_USE_KEY);
//var_dump($b);
//$arr = array('message'=>'这是一个测试,jifjeipgjjp');
//echo json_encode($arr);
//    $client = new \Yar_Client('http://172.16.0.223:756/rpc/b2b_order');
//    $data=$client->update_line_order_status('201701091701391628',-3,'拒绝拒绝');
//    var_dump($data);
//$header='From:371711725@qq.com';
//mail('2281230070@qq.com','这是测试邮件','这是测试内容',$header);
//echo phpinfo();
//$a = array(1,2,3,4);
//$c = $a;
//$a[1] = 11;
//$a = array(1,2,3,4);
//$b = &$a[1];
//$c = $a;
//$a[1] = 11;
//echo $c[1];//11

//$a = array(1,2,3,4);
//foreach ($a as &$val){}
//foreach ($a as $val){
//    print_r($a);
//}
class A {
    public $a = 1;
//    private $c = '我是原值';
//    public $c = '我是原值';
//    private $b;
    public function __construct()
    {
        var_dump($this->b) ;
        var_dump($this->b) ;
    }

    public function __set($name, $value)
    {
        echo 2222;
        $this->$name = $value;
    }

    public function __get($name)
    {
        echo 1111;
        return '';
    }

    public function say()
    {
        echo $this->c;
    }

}
$b = new A();
var_dump($b->b);
//$b->say();
//$b->c='我被赋值';
//$b->say();
//echo $b->c;

//echo $b->c;

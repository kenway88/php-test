<?php
class One{
    public function test(){

    }
}
class Two{}
$one = new One();
$two = new Two();
$a = 'sort1';
$c = 'one';
$b = array('One','test1');
var_dump(is_callable($b));

<?php
//function myfunction($v)
//{
//    return($v*$v);
//}
//
//$a=array(1,2,3,4,5);
//print_r(array_map("myfunction",$a));
//print_r($a);
$a = [
    ['20171201120104105130','20171201120116117241'],
    ['20171201120104105030','20171201120116117341'],
    ['20171201120103104930','20171201120136118541'],
    ['20171201120102104730','20171201120114116941'],
    ['20171201120102104830','20171201120115117041'],
    ['20171201120101104630','20171201120146118741'],
    ['20171201120100104530','20171201120111116141'],
    ['20171201120058104430','20171201120108115841'],
    ['20171201120057104130','20171201120110115941'],
    ['20171201120057104230','20171201120112116441'],
    ['20171201120055103930','20171201120113116741'],
    ['20171201120055103830','20171201120113116841'],
    ['20171201120056104030','20171201120111116241'],
    ['20171201120054103630','20171201120105115441'],
    ['20171201120054103730','20171201120112116541'],
    ['20171201120052103330','20171201120105115541'],
    ['20171201120052103230','20171201120106115741']
];
$updateStr = '';
foreach ($a as $val) {
    $updateStr.= "UPDATE wapp_activity_order SET refund_no='{$val[1]}',pay_state='refund' WHERE seq_no='{$val[0]}';<br>";
}
echo $updateStr;

<?php
include 'Rss.php';
$rss = new Rss();
$rss->title = '测试Rss';
$rss->link = 'http://test.kt';
$rss->description = '这是一个测试Rss';
$rss->items = [
    ['title'=>'条目1','description'=>'描述1'],
    ['title'=>'条目2','description'=>'描述2'],
    ['title'=>'条目3','description'=>'描述3'],
];
header('Content-Type:text/xml;charset=utf-8');
echo $rss->create();
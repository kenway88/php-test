<?php
//声明文档类型
$dom = new DOMDocument('1.0','utf-8');

//创建元素节点
$appstore = $dom->createElement('appstore');
//添加子节点
$dom->appendChild($appstore);

$goods = $dom->createElement('goods');
$appstore->appendChild($goods);
$name = $dom->createElement('name');
$goods->appendChild($name);
$intro = $dom->createElement('intro');
$goods->appendChild($intro);

//创建属性节点
$goods_id = $dom->createAttribute('goods_id');
//属性节点赋值
$goods_id->value = 'g001';
$goods->appendChild($goods_id);
$goods_id = $dom->createAttribute('goods_id');

//创建文本节点
$text = $dom->createTextNode('天龙八部');
$name->appendChild($text);

//创建CDATA节点
$cdata = $dom->createCDATASection('这是一部好书&牛书');
$intro->appendChild($cdata);

/*
//直接输出
header('Content-Type:text/xml;charset=utf-8');
echo $dom->saveXML();
*/

//保存文件
echo $dom->save('03.xml')?'ok':'error';
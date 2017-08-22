<?php
$dom = new DOMDocument('1.0','utf-8');
$dom->load('./test.xml');

//删除节点
$deleteNode = $dom->getElementsByTagName('title')->item(0);
$deleteNode->parentNode->removeChild($deleteNode);
$oldNode = $dom->getElementsByTagName('title')->item(0);

/*
//简便修改方法
$replaceNode->firstChild->nodeValue = '七种武器';
*/

//替换节点
$newNode = $dom->createElement('title');
$newNode->nodeValue = '七种武器';
$oldNode->parentNode->replaceChild($newNode,$oldNode);

header('Content-Type:text/xml;charset=utf-8');
echo $dom->saveXML();
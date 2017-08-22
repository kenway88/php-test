<?php
$dom = new DOMDocument('1.0','utf-8');
$dom->load('./test.xml');
header('Content-Type:text/html;charset=utf-8');
echo $dom->getElementsByTagName('title')->item(0)->firstChild->nodeValue;

<?php
$dom = new DOMDocument('1.0','utf-8');
$dom->load('./rss2.xml');
$xpath = new DOMXPath($dom);
$sql = '//title';
$rs = $xpath->query($sql);
header('Content-type:text/html;charset=utf-8');
foreach ($rs as $v) {
    echo $v->nodeValue."<br />";
}


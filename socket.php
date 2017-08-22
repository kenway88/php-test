<?php
/**
 * Created by PhpStorm.
 * User: T092
 * Date: 2016/10/24
 * Time: 11:22
 */
$url = 'http://news.163.com/16/1024/08/C44LTP87000189FH.html';
$url = parse_url($url);
$errNo = 1;
$errStr = 'fail';
$fh = fsockopen($url['host'],80,$errNo,$errStr,3);
$requestLine = 'GET '.$url['path'].' HTTP/1.1';
$requestHeader = 'Host: '.$url['host']."\r\n".'Connection: close';
$request = implode("\r\n",array($requestLine,$requestHeader,'',''));
fwrite($fh,$request);
$content = '';
while(!feof($fh)) {
    $content .= fread($fh,1024*1024);
}
echo $content;
<?php
/**
 * Created by PhpStorm.
 * User: T092
 * Date: 2015/12/11
 * Time: 16:19
 */

$str = "Hello World";
echo str_pad($str,30,".",STR_PAD_LEFT),"\n";
$content = 'aa';
$content = str_pad($content,10,'.');
echo $content;
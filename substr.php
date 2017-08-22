<?php
/**
 * Created by PhpStorm.
 * User: T092
 * Date: 2016/4/6
 * Time: 10:29
 */
$src_str = '1234567';
$src_str = sprintf("%08d", $src_str);
echo $src_str.'<br>';
echo substr($src_str, 0, -4).'<br>';
echo  substr($src_str, -5, 3);

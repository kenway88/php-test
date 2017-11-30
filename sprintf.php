<?php
/**
 * Values true, false and null are returned as TRUE, FALSE and NULL respectively.
 * 1.解析的值如果为true,false,null，则原样返回
 * 2.如果无法解析则返回null
 */
$sequenceCode['figure'] = 4;
$count = 1;
$sequenceCodeStr = sprintf("%0{$sequenceCode['figure']}d",$count);
var_dump($sequenceCodeStr);
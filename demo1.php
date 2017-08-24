<?php

$a = [1,2,3,4];
unset($a[1]);
var_dump($a);
$a[] = 5;
var_dump($a);
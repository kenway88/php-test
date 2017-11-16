<?php
echo '<pre>';
echo ob_get_level();
ob_start();
echo 'level 1<br/> ';
ob_start();
echo   'level 2<br/> ';
ob_start();
echo  'level 3<br/> ';
$a = ob_get_status();
var_dump($a);
////ob_flush();

//ob_end_flush();
//ob_end_flush();
//ob_end_flush();
<?php
/**
 * Created by PhpStorm.
 * User: T092
 * Date: 2016/4/5
 * Time: 10:47
 */
session_start();
$_SESSION['aaa'] = 'bbbb';
session_regenerate_id(true);
echo session_id();
var_dump($_SESSION);
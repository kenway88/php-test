<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/25/025
 * Time: 0:23
 * 内置服务器的路由器脚本例子
 */
if (strpos($_SERVER['REQUEST_URI'], '/magic_method/') === false) {
    return false;
} else {
    include __DIR__ . '/MagicMethods/getAndSet.php';
}
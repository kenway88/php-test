<?php
/**
 * Created by PhpStorm.
 * User: T092
 * Date: 2015/12/30
 * Time: 11:36
 */
//var_dump(get_magic_quotes_gpc());
//$mysql = array();
//$db = mysqli_init();
//$db->real_connect('localhost', 'lorui', 'lorui.com', 'lorui_db');
/* SQL注入示例 */
//$_POST['username'] = chr(0xbf).chr(0x27).'OR username = username /*';
$str = chr(0xbf).chr(0x27).'OR username = username /*';
$encoding = mb_detect_encoding($str,array('ASCII','GB2312','UTF-8'));
$str = iconv($encoding,'GB2312//IGNORE',$str);
var_dump($str);
//var_dump($_POST['username']);
//$_POST['password'] = 'guess';
//$mysql['username'] = addslashes($_POST['username']);
//$mysql['password'] = addslashes($_POST['password']);
//$sql = "SELECT * FROM users WHERE username = '{$mysql['username']}' AND password = '{$mysql['password']}'";
//$result = $db->query($sql);
//if ($result->num_rows) {
//    /* 成功 */
//} else {
//    /* 失败 */
//}
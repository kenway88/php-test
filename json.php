<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script type="application/javascript" src="js/jquery-1.11.1.js"></script>
</head>
<body>
<?php
$a = array('one'=>1,2,3);
echo json_encode($a);
$b = "{'one':1,'0':2,'1':3}";
var_dump(json_decode($b,true));
?>
<script type="application/javascript">
//    var b = "{'one':1,'0':2,'1':3}";
//    var b = '{"one":\'1\',"0":2,"1":3}';
//    var b = '{one:1,0:2,1:3}';
    var b = '{"0":"1"}';
var b = "{\"0\":\"1\"}";
    var c = $.parseJSON(b);
console.log(typeof c[0]);
</script>
</body>
</html>
<?php
//指定图片路径
$src = 'helloweba.jpeg';
//获取图片信息
$info = getimagesize($src);
//获取图片扩展名
$type = image_type_to_extension($info[2],false);
//动态的把图片导入内存中
$fun = "imagecreatefrom{$type}";
$image = $fun('helloweba.jpeg');
//指定字体颜色
$col = imagecolorallocatealpha($image,0,0,0,0);
var_dump($col);
die;
//指定字体内容
$content = 'helloworld';
//给图片添加文字
imagestring($image,5,20,70,$content,$col);
//指定输入类型
//header('Content-type:image/png');
//动态的输出图片到浏览器中
//$func = "image{$type}";
//$func($image);
imagepng($image,'helloweba.png');
//销毁图片
imagedestroy($image);
echo '<img src="helloweba.png">';

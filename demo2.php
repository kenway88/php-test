<?php
//ָ��ͼƬ·��
$src = 'helloweba.jpeg';
//��ȡͼƬ��Ϣ
$info = getimagesize($src);
//��ȡͼƬ��չ��
$type = image_type_to_extension($info[2],false);
//��̬�İ�ͼƬ�����ڴ���
$fun = "imagecreatefrom{$type}";
$image = $fun('helloweba.jpeg');
//ָ��������ɫ
$col = imagecolorallocatealpha($image,0,0,0,0);
var_dump($col);
die;
//ָ����������
$content = 'helloworld';
//��ͼƬ�������
imagestring($image,5,20,70,$content,$col);
//ָ����������
//header('Content-type:image/png');
//��̬�����ͼƬ���������
//$func = "image{$type}";
//$func($image);
imagepng($image,'helloweba.png');
//����ͼƬ
imagedestroy($image);
echo '<img src="helloweba.png">';

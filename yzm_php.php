<?php
session_start();
@header("Content-Type:image/png");
 $code_length=5;
 $square=['width'=>100,'height'=>100];

 $img=imagecreate($square['width'], $square['height']);
 $str="1234567890qwertyuioplkjhgfdsazxcvbnm";
 for($i=0;$i<$code_length;$i++)
 {
 	$code.=$str[rand(0,35)];
 }
 $backgourd=imagecolorallocate($img, 100, 200, 50);
 $black=imagecolorallocate($img,0,0,0);
 $red=imagecolorallocate($img,242,168,101);
 for($i=0;$i<300;$i++)
 {
 	imagesetpixel($img, rand(0,$square['width']), rand(0,$square['height']), $red);

 };
ob_clean();
imagestring($img,40,20,20,$code,$black);
imagepng($img);

imagedestroy($img);
$_SESSION['check']=$code;
?>
 
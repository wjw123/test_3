<?php
@header("Content-Type:image/png");
header("content-type:text/html;charset=utf-8");
session_start();
if(isset($_FILES['upone']))
{
$local="./file/".$_FILES['upone']['name'];//原图将放在的位置
$localtion="./demo_small/".$_FILES['upone']['name'];//缩略图将放在的位置
$co=$_POST['yzm'];//获取验证码
$width=30;//缩略图宽度
$height=30;//缩略图高度
if($co==$_SESSION['check'])
{
	if(move_uploaded_file($_FILES['upone']['tmp_name'],$local))//如果原图上传成功
	{
     switch ($_FILES['upone']['type']) {//获取原图
     	case 'image/jpeg':
     		$src=imagecreatefromjpeg($local);
     		break;
     	case 'image/png':
     	    $src=imagecreatefrompng($local);
     	    break;
     	case 'image/gif':
            $src=imagecreatefromgif($local);
            break;
        default:
            break;
     }
     $sx=imagesx($src);//获取原图的宽
     $sy=imagesy($src);//获取原图的高
   $new_image=imagecreatetruecolor($width, $height);//用刚才给定的长和宽建立一张白的缩略图。
   imagecopyresized($new_image, $src, 0, 0, 0, 0, $width, $height, $sx, $sy);//把原图压到这张白图里头
   if(ImageJpeg($new_image,$localtion)||Imagegif($new_image,$localtion)||Imagepng($new_image,$localtion))
	{//转移缩略图
	echo"制作完成";
    echo"<img src='$localtion' mce_src='$localtion'>";//将缩略图显示
     }
  } 
else 
	echo" <script> alert('验证码输入错误');history.back()</script>";
	}
}
else
echo"不存在";
?>
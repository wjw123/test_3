<?php
header("content-type:text/html;charset=utf-8");
echo"问题描述1,1个球从10米的高度向上抛，初速度为向上的10米每秒，问一秒后它的坐标<br/>";
echo"问题描述2,1个球从10米的高度水平向左抛出，水平初速度为10米每秒，问1秒后它的坐标<br/>";
echo"问题描述3,1个球从20米的高度向下抛出,速度为向下的10米每秒，问1秒后它的坐标<br/>";
class slove{
	public function question()
	{
		$g=10;
		$time=1;
		$height=10;
        $v=10;
        $x=0;
        $y=$time*($height+$v)-0.5*$time*$time*$g;
        echo"坐标为"."(".$x.",".$y.")"."<br/>";
	}
	public function question2()
	{
		$g=10;
		$time=1;
		$v=10;
		$x=$v*$time;
		$y=10-0.5*$g*$time*$time;
		echo"坐标为"."(".$x.",".$y.")"."<br/>";
	}
	public function question3()
	{
		$x=0;
		$y=20-0.5*10-10;
		echo"坐标为"."(".$x.",".$y.")"."<br/>";
	}

}
$a=new slove;
$a->question();
$a->question2();
$a->question3();
$d=0;
$e=0;
   if((!is_numeric($d))||(!is_numeric($e)))
    	echo"<script>alert('输入错误');history.back();</script>";
        class solver{
    	public function add($a,$b)
    	{
    		$c=$a+$b;
    		echo $c;
    	}
    	public function jian($a,$b)
    	{
           $c=$a-$b;
           echo $c;
    	}
    	public function chen($a,$b)
    	{
    		$c=$a*$b;
    		echo $c;
    	}
        public function chu($a,$b)
        {
        	if($b==0)
        		echo"<script>alert('输入错误');history.back();</script>";
        	else
        	{
        		$c=$a/$b;
        		echo $c;
        	}
        }
    }
    $f=new solver;
    $d=$_POST['num1'];
    $e=$_POST['num2'];
?>
<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8">
	<head><title>计算器</title>
    <style type="text/css">
    input[type="text"]{
    	border-left: 0px solid #fafafa;
    	border-top: 0px solid #fdfdfd;
    	border-right: 0px solid #fdfdfd;
    	width: 120px;
    	height: 30px;
    	font-size: 30px;
    }
    </style>
	</head>
	<body>
	<form action="http://localhost/demo/demo_php/fw.php" method="POST">
	<p><input type="text" name="num1" value="<?php echo $d; ?>">
    <select name="choice">
    <option value='+'>+</option>
    <option value='-'>-</option>
    <option value='/'>/</option>
    <option value='*'>*</option>
	</select>
	<input type="text" name="num2" value="<?php echo $e; ?>">
	</p>
	<input align="center" type="submit" value="提交">
	</form>
	<footer>结果是
	<?php
    switch ($_POST['choice']) {
    	case '+':
    		$f->add($d,$e);
    		break;
    	case '-':
    	    $f->jian($d,$e);
    	    break;
    	case '*':
    	$f->chen($d,$e);
    	case '/':
    	$f->chu($d,$e);
    	default:
    		break;
    	}
    ?>

	</footer>

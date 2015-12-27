<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8">
<head><title>
calculater
</title>
<style type="text/css">
*{
	font-size: 25px;
}
#div1{
  float: left;
  width: 20%;
  height: 1000px;
}	
#div2{
	float: left;
	width: 50%;
	height: 300px;
}
input[type="text"]
{
	border: 1px solid #fafafa;
	width: 30px;
	height: 30px;
}
</style>
	</head>
	<body>
		<div id="div1"></div>
		<div id="div2">
			<p align="center"><b>复数的计算</b></p>
			<form action="http://localhost/demo/demo_php/oop.php" method="POST">
			<input type="text" name="num1" >+<input type="text" name="num2" >i
			<select name="choice">
			<option value="+">+</option>
			<option value="-">-</option>	
			</select>
			<input type="text" name="num3" >+<input type="text" name="num4">i
			<p align="center"><input type="submit" value="提交"></p>
			</form>
			<p>结果是   
			<?php
			 header("content-type:text/html;charset=utf-8");
             $a1=0;
             $a2=0;
             $b1=0;
             $b2=0;
           class calculate
          {
	      public function add($a1,$a2,$b1,$b2)
	    {
         $c1=$a1+$b1;
         $c2=$a2+$b2;
         echo"$c1+$c2*i";
	    }
	     public function delete($a1,$a2,$b1,$b2)
	    {
	 	$c1=$a1-$b1;
		$c2=$a2-$b2;
		echo"$c1+$c2*i";
	    }

        }
        $f=new calculate();
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $num3=$_POST['num3'];
        $num4=$_POST['num4'];
        switch ($_POST['choice']) {
           case '+':
            $f->add($num1,$num2,$num3,$num4);
           break;
            case '-':
            $f->delete($num1,$num2,$num3,$num4);
           default:
            break;
            }
            ?>
        </p>
		</div>
		</body>
	</HTML>
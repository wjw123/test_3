<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8">
<head>
<title>
快人一步/每日一登
</title>
<style type="text/css">
body{
	background-color: #f5f5f5;
}
*{
vertical-align: center;
font-family: "微软雅黑","Verdana","Helvetica","sans-serif";
}
#div1{
	text-align: center;
	float: left;
	width: 100%;
	height: 100px;
	font-size: 50px;
}
#div2{
	text-align: center;
	float: left;
	width: 100%;
	height: 40px;
	font-size: 10px;
	color: #112233;
}
#div3{
	float: left;
	width: 15%;
	height: 1000px;
}
#div4{
	float: left;
	width: 80%;
	height: 1000px;
}
#div5{
	float: left;
	width: 100%;
	text-align: left;
	line-height: 10px;
	height: 200px;
	font-size: 20px;
}
#div_interval{
	float: left;
	width: 100%;
	height: 50px;
}
a{
	text-decoration: none;
	display:inline-block;
	width: 13%;
	vertical-align:middle;
	height: 60px;
	text-align: center;
	vertical-align: center;
	float: left;
	margin-right: 20px;
	margin-top: 5px;
	background-color: #dddddd;
	color: black;
	line-height: 50px;
}
a:hover{
	background-color:#3498db;
	color:white;
}
#div6{
	float: left;
	width: 100%;
	text-align: left;
	line-height: 10px;
	height: 200px;
	font-size: 20px;
}
#div7{
	float: left;
	width: 100%;
	text-align: left;
	line-height: 10px;
	height: 500px;
	font-size: 20px;
}
</style>
</head>
<body>
<div id="div1">
<b>快人一步</b>
</div>
<div id="div2">
红岩网校|本服务器维护中|临时主页
</div>
<div id="div3">
</div>
<div id="div4">


<div id="div5">
<p><b style="font-size:28px;">每天不登陆不舒服斯基</b></p>	
   <?php
	header("content-type:text/html;charset=utf-8");
    include'common.php';
    $sql='select * from t_website where num=1';
    $sth=$dbk->prepare($sql);
    $sth->execute(); 
    $web=$sth->fetchALL(PDO::FETCH_ASSOC);
    foreach($web as $value)
    {
    ?>
    <a href="http://<?php echo $value['localtion']; ?>" target="_blank"><?php echo"$value[name]"; ?></a>
	<?php
    }
    ?>
    
    <a href="change.php"  target="_blank">+推荐更多</a>
    </div>


    <div id="div_interval"></div>
   

    <div id="div6">
	<p><b style="font-size:28px;">学霸们的必争之地</b></p>
	<?php
	session_start();
	$_SESSION['check']=2;
	header("content-type:text/html;charset=utf-8");
    include'common.php';
    $sql='select * from t_website where num=2';
    $sth=$dbk->prepare($sql);
    $sth->execute();
    $web=$sth->fetchALL(PDO::FETCH_ASSOC);
    foreach($web as $value)
    {
    ?>	
    <a href="http://<?php echo $value['localtion']; ?>" target="_blank"><?php echo"$value[name]"; ?></a>
	<?php 
    }
	?>
	
	<a href="change.php" >+我来推荐</a>
    </div>
    

    <div id="div_interval"></div>
    

    <div id="div7">
	<p><b style="font-size:28px;">原来学校还有这么多网址</b></p>
	<?php
	header("content-type:text/html;charset=utf-8");
    include'common.php';
    $sql='select * from t_website where num=3';
    $sth=$dbk->prepare($sql);
    $sth->execute(); 
    $web=$sth->fetchALL(PDO::FETCH_ASSOC);
    foreach($web as $value)
    {
    ?>	
	<a href="http://<?php echo $value['localtion']; ?>" target="_blank"><?php echo"$value[name]"; ?></a>
	<?php  
    }
	?>
	
	<a href="change.php" target="_blank">+我来推荐</a>		
	</div>
</div>
	</body>
	</HTML>
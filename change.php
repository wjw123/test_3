<!DOCTYPE HTML>
<HTML>
<meta chatset="utf-8">
<head>
<title>
my page
</title>
    </head>
    <body>
        <form action="http://localhost/demo/demo_php/change.php" method="POST">
        <div id="div1">
        <p>选择修改的区域</p>
        <input type="radio" name="choice" value="1" checked="checked" >上部
        <input type="radio" name="choice" value="2">中部
        <input type="radio" name="choice" value="3">下部
        <p>要增加的网址</p>
        名称:<input type="text" name='name'><br/>
        地址:<input type="text" name='local'><br/>
        <p>要删除的网址</p>
        名称:<input type="text" name='name1'><br/>
        <input type="submit" value="提交" name='submit'><br/>
        </div>
        </form>
        </body>
    </HTML>
    <?php
    header("content-type:text/html;charset=utf-8");
    include'common.php';
    $name="st";
    $local="ny";
    $name1="hs";
    $i=1;
    $number=$_POST['choice'];
    switch ($number) {
        case '1':
            $number=1;
            break;
        case '2':
            $number=2;
            break;
         case '3':
            $number=3;
            break;   
        default:
            break;
    }
    
    $sql="select * from t_website where num='$number'";
    $sth=$dbk->prepare($sql);
    $sth->execute();
    $web=$sth->fetchALL(PDO::FETCH_ASSOC);

    if(!empty($_POST['name'])&&!empty($_POST['local']))
    {
    foreach($web as $value)
    {
        if($value['name']==$_POST['name'])
        $i=0;
    }
     if($i=0)
    {
    echo"<script>alert('添加的已存在');</script>";
    }   
    else
    {
    $name=$_POST['name'];
    $local=$_POST['local'];
    $sql="insert into t_website values('$name','$local','$number')";
    $dbk->exec($sql);
    }
}
   if(!empty($_POST['name1']))
   {
    $name1=$_POST['name1'];
    foreach ($web as $value)
    {
     if($value['name']==$name1)
      { 
      $sql="delete from t_website where name='$name1' and num='$number'";
      $dbk->exec($sql);
      }
     }
     echo"<script>alert('修改已完成');location.href='http://localhost/demo/demo_php/website.php';</script>";
    }
    //else
    //echo"<script>alert('修改已完成');location.href='http://localhost/demo/demo_php/website.php';</script>"; 
    ?>

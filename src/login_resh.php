<?php
$con=mysqli_connect("localhost","root","123456","studb"); 
if(!$con){die("error:".mysqli_connect_error());} 
$text=$_POST['text'];
$pwd=$_POST['pwd'];
// session_start();
// 	$_SESSION['name'] = $text;
if($text==null||$pwd==null){
    echo "<script>alert('你不是管理员吧！')</script>";
    // die("账号和密码不能为空!");
	header('Refresh: 1; url=admin.php');  //1s后跳转
	
}

if($text==true&&$pwd==true){
  $sql='select * from login where name='."'{$text}'and password="."'$pwd';";
  $res=mysqli_query($con,$sql);
  $row=$res->num_rows; //将获取到的用户名和密码拿到数据库里面去查找匹配
  if($row!=0)
  {
	   setcookie("name",$text,time()+3600,'/');
	  header("location:main.php");
  }
  else
  {
      echo "一定要输入用户名和密码哦😀";
	  header('refresh: 1; url=admin.php');
  }
}
?>
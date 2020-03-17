<?php
//连接数据库
include 'coon.php';
$id = $_POST['id'];
//查询指定数据  
//编写查询sql语句
$sql = "select id FROM student WHERE id={$id}";
//执行查询操作、处理结果集
$result = mysqli_query($link, $sql);
if (!$result) {
    exit('请输入学生编号');  // 获取错误信息
}
// 查询完跳转到首页
header("Location:searchs.php");  


?>



<?php
include 'coon.php';
// 获取修改后的学生信息
$id = $_POST['id'];
$name = $_POST['name'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$edu = $_POST['edu'];
$check = $_POST['check'];
$tel = $_POST['tel'];
$city = $_POST['city'];
      //编写预处理sql语句
      $sql = "UPDATE `student` 
                  SET 
                       `name`= ?, 
                       `sex`= ?, 
                       `age`= ?, 
                       `edu`= ?, 
                       `check`= ?, 
                      `tel`= ?, 
                       `city`= ?
                  WHERE `id`= ?";
      //预处理SQL模板
      $stmt = mysqli_prepare($link, $sql);
      // 参数绑定，并为已经绑定的变量赋值
      mysqli_stmt_bind_param($stmt, 'ssssssss', $name, $sex, $age, $edu, $check, $tel, $city, $id);
      if ($name) {
            // 执行预处理（第1次执行）
            $result = mysqli_stmt_execute($stmt);
            //关闭连接
            mysqli_close($link);
            if ($result) {
                //修改学生成功
                  //跳转到首页
                  header("Location:main.php");
            }else{
                  exit('修改学生信息sql语句执行失败' );
            }
      }else{
            //修改学生失败
            //输出提示，跳转到首页
            echo "修改学生失败！<br><br>";
            header('Refresh: 3; url=main.php');  //3s后跳转

      }

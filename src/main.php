<?php
include 'coon.php';
//编写查询sql语句
$sql = 'SELECT * FROM student';
//执行查询操作、处理结果集
$result = mysqli_query($link, $sql);
if (!$result) {
    exit('查询sql语句执行失败。错误信息：'.mysqli_error($link));  // 获取错误信息
}
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
//编写查询数量sql语句
$sql = 'SELECT COUNT(*) FROM student';
//执行查询操作、处理结果集
$n = mysqli_query($link, $sql);
if (!$n) {
    exit('查询数量sql语句执行失败。错误信息：'.mysqli_error($link));  // 获取错误信息
}
$num = mysqli_fetch_assoc($n);
//将一维数组的值转换为一个字符串
$num = implode($num);
// $sql2 = 'select *from login';
// $add = mysqli_query($link,$sql2);
// $res = mysqli_fetch_assoc($add);
// $tr=mysqli_num_rows($res);
?>
<html>
<head>
    <meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link type="text/css" rel="stylesheet" href="css/style_index.css" />
	<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
    <title>学生疫情管理系统</title>
</head>
<style type="text/css">
	body{
		 background-image: url(images/66.jpg);
		background-size: 100%;
	}
	.main{
		 background-image: url(images/66.jpg);
		background-size: 100%;
	}
.wrapper {	
			width: 1000px;
			margin: 125px auto;
		    
        }
   h1 {
	   text-align: center;
	   }
		.add {
			margin-bottom: 20px;
			}
		.add a {
			text-decoration: none;
			color: #fff;
			background-color: #4caf50;
			padding: 6px;
			border-radius: 5px;
			}
	td {
		text-align: center;
		}
		
	td input{
			color: #1a34ca;
			font-size: 20px;
		}
		th{
			color: #081a82;
		}
</style>
<body>
	<div class="top"></div>
	<div id="header">
		<div class="logo">学生疫情管理系统</div>
		<div class="navigation">
			<ul>
			 	<li>欢迎您！</li>
				<li><a href="">admin</a></li>
				<li><a href="admin.php">退出</a></li>
			</ul>
		</div>
	</div>
	<div id="content">
		<div class="left_menu">
					<ul id="nav_dot">
	      <li>
	          <h4 class="M1"><span></span>系统公告</h4>
	          <div class="list-item none">
	            <a href=''></a>
	          </div>
	        </li>
					<li>
	          <h4  class="M7"><span></span>数据查找</h4>
	          <div class="list-item none">
	            <a href='search.php'>学生查找</a>
	          </div>
	        </li>
		
	  </ul>
			</div>
			<div class="m-right">
				<div class="right-nav">
						<ul>
								<li><img src="images/home.png"></li>
									<li style="margin-left:25px;">您当前的位置：</li>
									<li><a href="#">系统公告</a></li>
									<li>></li>
									<li><a href="#"><marquee>勤洗手，戴口罩哦😘</marquee> </a></li>
							</ul>
				</div>
				<div class="main">
					 <div class="wrapper">
					   <h1>学生疫情信息管理</h1>
					   <div class="add">
					       <a href="#">学生总数</a>&nbsp;&nbsp;&nbsp;共<?php echo $num; ?>个学生
					   </div>
					   <table width="1000" border="2" bgcolor="#00CCFF">
					       <tr>
					          <th>编号</th>
					          <th>姓名</th>
					          <th>性别</th>
					          <th>年龄</th>
					          <th>电话</th>
					          <th>当日体温是否正常</th>
							  <th>班主任电话</th>
					          <th>当前所在地</th>
							  <!-- <th>时间</th> -->
					          <th>操作</th>
							  
					       </tr>
					       <?php
					          foreach ($data as $key => $value) {
					              foreach ($value as $k => $v) {
					                 $arr[$k] = $v;
					              }
					          echo "<tr>";
					          echo "<td>{$arr['id']}</td>";
					          echo "<td>{$arr['name']}</td>";
					          echo "<td>{$arr['sex']}</td>";
					          echo "<td>{$arr['age']}</td>";
					          echo "<td>{$arr['edu']}</td>";
					          echo "<td>{$arr['check']}</td>";
					          echo "<td>{$arr['tel']}</td>";
					          echo "<td>{$arr['city']}</td>";
							  // echo "<td>{$arr['intime']}</td>";
					          echo "<td>
					                     <a href='javascript:del({$arr['id']})'>删除</a>
					                     <a href='make.php?id={$arr['id']}'>修改</a>
					                </td>";
									
					          echo "</tr>";
					          }
					          // 关闭连接
					          mysqli_close($link);
					       ?>
					   </table>   
					</div>
					<script type="text/javascript">
					   function del (id) {
					       if (confirm("确定删除此学生吗？")){
					          window.location = "del.php?id="+id;
					       }
					   }
					</script>
				</div>
			</div>
	</div>
	<div class="bottom"></div>
	<div id="footer"><p>Copyright © 2020 mayaodong. All Rights Reserved.陇ICP备19002924号</p></div>
	<script>navList(12);</script>
   
</body>
</html>
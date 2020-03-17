<?php
//连接数据库
include 'coon.php';
if(empty($_POST['id'])){
	die("请输入编号");
}
//获取id
$id = $_POST['id'];
//编写查询sql语句
$sql = "SELECT * FROM student WHERE id={$id}";
//执行查询操作、处理结果集
$result = mysqli_query($link, $sql);
if ($result->num_rows==0) {
    exit('不存在');  // 获取错误信息
}
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
//将二维数数组转化为一维数组
foreach ($data as $key => $value) {
  foreach ($value as $k => $v) {
    $arr[$k]=$v;
  }
}

?>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link type="text/css" rel="stylesheet" href="css/style_index.css" />
		<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="js/menu.js"></script>
		<title>学生疫情管理系统</title>
		<style type="text/css">
			.main{
				background-image: url(images/66.jpg);
				background-size: 100%;
			}

			.box {
				display: table;
				margin: 120px auto;
			}

			h2 {
				text-align: center;
			}
			
			th{
				color: #081a82;
			}
				
		td input{
				color: #1a34ca;
				font-size: 20px;
			}

			.add {
				margin-bottom: 20px;
			}
			.back{
				width: 40px;
				height: 40px;
				font-size: 16px;
				color: #00A5A5;
				background: #ffeb3bb3;
				border: 0;
				outline: none;
				border-radius: 25px;
				margin: 40px;
				margin-top: 20px;
			}
			.back:hover{
				cursor: pointer;
				color: #9c27b0;
				background: #9c27b04f;
			}
		</style>
	</head>
	<body>
		<!--输出定制表单-->
		<div class="top"></div>
		<div id="header">
			<div class="logo">学生疫情信息管理系统</div>
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
		            <a href=''>公告</a>
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
										<li><a href="#"></a></li>
								</ul>
					</div>
					<div class="main">
						<div class="box">
							<h2>查看学生信息</h2>
							<div class="add">
								<form action="main.php" method="post" enctype="multipart/form-data">
									<table border="2" bgcolor="#00CCFF">
										<tr>
											<th>编　　号：</th>
											<td><input type="number" name="id" size="5" value="<?php echo $arr["id"] ?>" readonly="readonly"></td>
										</tr>
										<tr>
											<th>姓　　名：</th>
											<td><input type="text" name="name" size="30" value="<?php echo $arr["name"]?>" readonly="readonly"></td>
										</tr>
										<tr>
											<th>性　　别：</th>
											<td>
												<label><input checked type="radio" name="sex" value="<?php echo $arr["sex"]?>" disabled="disabled">男</label>
												<label><input  type="radio" name="sex" value="<?php echo $arr["sex"]?>" disabled="disabled">女</label>
											</td>
										</tr>
										<tr>
											<th>年　　龄：</th>
											<td><input type="text" name="age" size="30" value="<?php echo $arr["age"]?>" readonly="readonly"></td>
										</tr>
										<tr>
											<tr>
												<th>电　话：</th>
												<td><input type="text" name="edu" size="25" value="<?php echo $arr["edu"]?>"><span id="kuang">*(必填)</span></td>
											</tr>
										</tr>
										<tr>
											<th>当日体温是否正常：</th>
											<td>
												<select name="check">
													<option selected value="">--请选择--</option>
													<option value="正常">正常</option>
													<option value="不正常">不正常</option>
												</select>
											</td>
										</tr>
										<tr>
											<th>班主任电话：</th>
											<td><input type="text" name="tel" size="30" value="<?php echo $arr["tel"]?>" readonly="readonly"></td>
										</tr>
										<tr>
											<th>当前所在地</th>
											<td><input type="text" name="city" size="30" value="<?php echo $arr["city"]?>" readonly="readonly"></td>
										</tr>
										<tr>
											<th>时间</th>
											<td><input type="text" name="city" size="30" value="<?php echo $arr["intime"]?>" readonly="readonly"></td>
										</tr>
									</table>
									<input type="button" class="back" onClick="javascript :history.back(-1);" value="返回">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="submit" class="back" value="确定">
								</form>
							</div>
						</div>
					</div>
				</div>
		</div>
		<div class="bottom"></div>
		<div id="footer"><p>Copyright © 2020 mayaodong. All Rights Reserved.陇ICP备19002924号</p></div>
		<script>navList(12);</script>
		
	</body>
</html>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link type="text/css" rel="stylesheet" href="css/style_index.css" />
		<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="js/menu.js"></script>
		<title>学生疫情管理系统</title>
		<style type="text/css">
			.main {
				background-image: url(images/66.jpg);
				background-size: 100%;
			}

			.box {
				display: table;
				margin: 120px auto;
			}

			h2 {
				text-align: center;
				font-size: 22px;
				color: #120214c7;
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
				border: 0;
				outline: none;
				border-radius: 25px;
					margin-top: 10px;
			}
			.back{
				font-size: 20px;
				color: #00A5A5;
				background: #ffeb3bb3;
				border: 0;
				outline: none;
				border-radius: 25px;
				
				margin-top: 10px;
			}
			.back:hover{
				cursor: pointer;
				color: #9c27b0;
				background: #9c27b04f;
			}
		</style>
	<!-- 	<script type="text/javascript">
			window.onload=function(){
				var cha=document.getElementById('cha').onclick=function(){
					
					if($id!==>){
						alert("查无此人");
					}
					
				}
			}
		</script> -->
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
		            <a href='search.html'>学生查找</a>
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
										<li><a href="#">完善中</a></li>
								</ul>
					</div>
					<div class="main">
						<div class="box">
							<h2>查找学生</h2>
							<div class="add">
								<form action="searchs.php" method="post" enctype="multipart/form-data">
									<table border="1" bgcolor="#00CCFF">
										<tr>
											<th>编号：</th>
											<td><input type="number" name="id" size="30" value="" autofocus="autofocus"></td>
										</tr>
									</table>
									<input type="button" class="back" onClick="javascript :history.back(-1);" value="返回">&nbsp;&nbsp;&nbsp;
									<input type="reset" class="back" value="重置">&nbsp;&nbsp;&nbsp;
									<input type="submit" class="back" value="开始查找" id="cha">&nbsp;&nbsp;&nbsp;
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

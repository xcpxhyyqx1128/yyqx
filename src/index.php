<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link type="text/css" rel="stylesheet" href="css/style_index.css" />
		<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="js/menu.js"></script>
		<title>学生疫情信息统计</title>
		<style type="text/css">
			* {
				margin: 0;
				padding: 0;
			}
           body{
			   background: rosybrown;
		   }
			.main {
				width: 75%;
				background-image: url(images/denlulogo.jpg);
				background-size: 100%;
				margin: 0 auto;
				margin-top: 40px;
				border-radius: 50px;
				
			}

			.box {
				display: table;
				margin: 120px auto;
				/* background: grey; */
			}

			h2 {
				text-align: center;
				font-size: 33px;
				color: #d2c9cc;
				margin-bottom: 30px;

			}

			.add {
				margin-bottom: 20px;
			}

			th {
				color: #081a82;
				font-size: 22px;
			}

			td input{
				color: #1a34ca;
				font-size: 20px;
			}

			.back {
				width: 40px;
				height: 40px;
				font-size: 16px;
				color: #192323;
				background: #ffeb3bb3;
				border: 0;
				outline: none;
				border-radius: 25px;
				margin: 40px;
				margin-top: 40px;
				margin-left: 60%;
			}

			.back:hover {
				cursor: pointer;
				color: #653d4b;
				background: #9c27b0;
			}
			.top #header .logo{
				width: 297px;
				height: 80px;
				margin: 0 auto;
			}
			.main .box .add #kuang {
				color: red;
				font-size: 15px;
			}
			.main .box .add #btn4 {
				color: #081a82;
				font-size: 18px;
			}
		</style>
	</head>
	<body>
		
		<!--输出表单-->
		<div class="top"></div>
		<div id="header">
			<div class="logo">学生疫情信息直报表</div>
		</div>
			<div class="main">
				<div class="box">
					<h2>本人基本信息</h2>
					<div class="add">
						<form action="adds.php" method="post" enctype="multipart/form-data">
							<table border="1" bgcolor="#00CCFF">
								<tr>
									<th>姓　　名：</th>
									<td><input type="text" name="name" size="25" id="btn1" value="" placeholder="某某某"><span id="kuang">*(必填)</span></td>
								</tr>
								<tr>
									<th>性　　别：</th>
									<td>
										<label><input checked type="radio" name="sex" value="男">男</label>
										<label><input type="radio" name="sex" value="女">女</label>
									</td>
								</tr>
								<tr>
									<th>年　　龄：</th>
									<td><input type="text" name="age" size="25" id="btn2" value=""><span id="kuang">*(必填)</span></td>
								</tr>
								<tr>
									<tr>
										<th>电　　话：</th>
										<td><input type="text" name="edu" size="25" id="btn3" value="" placeholder="常用电话"><span id="kuang">*(必填)</span></td>
									</tr>
								<tr>
									<th>当日体温是否正常：</th>
									<td>
										<select name="check" id="btn4">
											<option selected value="">--请选择--</option>
											<option value="正常">正常</option>
											<option value="不正常">不正常</option>
										</select>
										<span id="kuang">*(必选项)</span>
									</td>
								</tr>
								<tr>
									<th>班主任电话：</th>
									<td><input type="text" name="tel" size="25" id="btn5" value="" placeholder="常用电话"><span id="kuang">*(必填)</span></td>
								</tr>
								<tr>
									<th>当前所在地：</th>
									<td><input type="text" name="city" size="25" id="btn6" value=""placeholder="xx省xx市xx县"><span id="kuang">*(必填)</span></td>
								</tr>
							</table>
							<input type="submit" class="back" value="提交">&nbsp;&nbsp;&nbsp;
						</form>
					</div>
				</div>
			</div>
		</div>
		</div>
		<div class="bottom"></div>
		<div id="footer">
			<p>Copyright © 2020 mayaodong. All Rights Reserved.陇ICP备19002924号</p>
		</div>
		<!-- <script src="jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script> -->
		<script type="text/javascript">
			$(".back").click(function() {
				if ($(".main .box .add #btn1").val() == '' || $(".main .box .add #btn2").val() == '' || $(".main .box .add #btn3")
					.val() == '' || $(".main .box .add #btn4").val() == ''||$("#btn5").val()==''||$("#btn6").val()=='') {
					alert("请将个人信息填写完整");
					return  false;
				}  
				else{
					alert("上报成功");
				}
				return  true;
			})
			</script>
	</body>
</html>

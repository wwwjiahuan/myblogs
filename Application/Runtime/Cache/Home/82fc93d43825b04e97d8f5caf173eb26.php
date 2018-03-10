<?php if (!defined('THINK_PATH')) exit();?><!-- <!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>修改</title>
	</head>
	<body>
		<form action="/xiangmu/Blogs/index.php/Home/First/doupdate" method='post' enctype='multipart/form-data'>
			留言题目:<input type='text' name='title'/><br/>
			留言内容:<textarea name='content'></textarea><br/>
			附　　件:<input type='file' name='filename'/><br/>
			<input type='submit'/>
		</form>
	</body>
</html> -->

<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="/xiangmu/Blogs/Public/Css/basic.css">
		<link rel="stylesheet" href="/xiangmu/Blogs/Public/Css/myblog.css">
		<title>我的博客</title>
	</head>
	<body>
		<div id='wrapper'>

			<div id='logo'>
				<p>博客</p>
<!--<span><a href='/xiangmu/Blogs/index.php/Home/Login/login' target='_top' class='register'>登录</a>｜<a href='/xiangmu/Blogs/index.php/Home/Register/register' class='login'>注册</a></span>-->
<p class='my'>欢迎你 <?php echo (session('username')); ?> <a href='/xiangmu/Blogs/index.php/Home/Login/login' target='_top'>退出</a></p>
			</div>

			<div id='nav'>

				<ul>
	<li><a href="/xiangmu/Blogs/index.php/Home/Index/index">主页</a></li>
	<li><a href="/xiangmu/Blogs/index.php/Home/Hotpeople/hotpeople">热门人物</a></li>
	<li><a href="/xiangmu/Blogs/index.php/Home/Hot/hot">热门话题</a></li>
	<li><a href="/xiangmu/Blogs/index.php/Home/First/first">所有博客</a></li>
	<li><a href="/xiangmu/Blogs/index.php/Home/Myblog/myblog">我的博客</a></li>
</ul>
			</div>

			<div id="main">
				<div id='main_form'>
						<form action="/xiangmu/Blogs/index.php/Home/First/doupdate" method='post' enctype='multipart/form-data'>
							<p class='title'>标题:<input type='text' name='title' class='title'/></p>
							<p class='content'><span>内容:</span><textarea name='content' class='content'></textarea></p>
							<p class='file'>附件:<input type='file' name='filename' class='file'/></p>
							<p><input type='submit' class='submit' value="就点我"/></p>
						</form>
				</div>
				
			</div>

			<div id='footer'>
				<strong>©2017 Powered by <a href="http://www.52feidian.com/" target="_blank"> Feidian Studio </a> | All Rights Reserved.</strong>
			</div>
		</div>


		
	</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<link rel="shortcut icon" href="/before/blogs/Public/Images/title.png">
		<link rel="stylesheet" href="/before/blogs/Public/Css/basic.css">
		<link rel="stylesheet" href="/before/blogs/Public/Css/myblog.css">
		<title>我的博客</title>
	</head>
	<body>
		<div id='wrapper'>

			<div id='logo'>
				<p>博客</p>
<!--<span><a href='/before/blogs/index.php/Home/Login/login' target='_top' class='register'>登录</a>｜<a href='/before/blogs/index.php/Home/Register/register' class='login'>注册</a></span>-->
<p class='my'>welcome  <?php echo (session('username')); ?>  <a href='/before/blogs/index.php/Home/Login/login' target='_top'>退出</a></p>
			</div>

			<div id='nav'>

				<ul>
	<li><a href="/before/blogs/index.php/Home/Index/index">主页</a></li>
	<li><a href="/before/blogs/index.php/Home/Hotpeople/hotpeople">热门人物</a></li>
	<li><a href="/before/blogs/index.php/Home/Hot/hot">热门话题</a></li>
	<li><a href="/before/blogs/index.php/Home/First/first">所有博客</a></li>
	<li><a href="/before/blogs/index.php/Home/Myblog/myblog">我的博客</a></li>
</ul>
			</div>

			<div id="main">
				<div id='main_form'>
						<form action="/before/blogs/index.php/Home/Myblog/domyblog" method='post' enctype='multipart/form-data'>
							<p class='title'>标题:<input type='text' name='title' class='title'/></p>
							<p class='content'><span>内容:</span><textarea name='content' class='content'></textarea></p>
							<p class='file'>附件:<input type='file' name='filename' class='file'/></p>
							<p><input type='submit' class='submit' value="提交"/></p>
						</form>
				</div>
				
			</div>

			<div id='footer'>
				<strong>©2017 Powered by <a href="http://www.52feidian.com/" target="_blank"> Feidian Studio </a> | All Rights Reserved.</strong>
			</div>
		</div>


		
	</body>
</html>
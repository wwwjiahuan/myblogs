<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
	<title>Index</title>
	<link rel="shortcut icon" href="/before/blogs/Public/Images/title.png">
	<link rel="stylesheet" href="/before/blogs/Public/Css/basic.css">
	<link rel="stylesheet" href="/before/blogs/Public/Css/index.css">
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
			<div id='main_body'>
				<div id='main'>
			
					<div id='content'>
						<div id='content_box'>
							<?php if(is_array($list)): foreach($list as $key=>$vo): ?><p class='title'><!-- <span>题目:</span> --><?php echo ($vo["title"]); ?>
								<span class='time'> (<?php echo (date('Y m d H:i:s',$vo["time"])); ?>)</span></p>
								<p class='content'><!-- 内　容: --><?php echo ($vo["content"]); ?></p>
								
								<p class='username'><!-- 留言人: --><?php echo ($vo["username"]); ?></p>
								<!-- <p class='filename'>附件名:<?php echo ($vo["filename"]); ?></p> -->
								
								<!-- <p class='function'>
									<a href="/before/blogs/index.php/Home/First/update?id=<?php echo ($vo["id"]); ?>" class='update'>update</a>
									<a href="/before/blogs/index.php/Home/First/delete?id=<?php echo ($vo["id"]); ?>" class='delete'>delete</a>
								</p> -->
								<p class='line'></p><?php endforeach; endif; ?>
						<?php echo ($show); ?>
						</div>
						
					</div>

					<div id='about'>
						<div id="expert_title">
							Programmer
							<!--<img class="triangle" alt="img" src="http://static.blog.csdn.net/static/images/triangle_right.png">-->
						</div>
						<div id='about_writer'>
							<img class="head_expert" src="/before/blogs/Public/Images/my.png" alt="图片">
							<p class='writer_name'>王佳欢</p>
							<p class='writer_description'>未来web架构师</p>
							<!-- <img class="icon_l" alt="img" src="http://static.blog.csdn.net/static/images/icon_l.png">
							<img class="icon_r" alt="img" src="http://static.blog.csdn.net/static/images/icon_r.png"> -->
							<p class='writer_content'>来自华中农业大学，计科1504，沸点工作室</p>
						</div>
					</div>
				</div>
			</div>
			

			<div id='footer'>
				<strong>©2017 Powered by <a href="http://www.52feidian.com/" target="_blank"> Feidian Studio </a> | All Rights Reserved.</strong>
			</div>
		</div>
		
	</body>
</html>
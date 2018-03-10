<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
	<title>热门话题</title>
	<link rel="shortcut icon" href="/before/blogs/Public/Images/title.png">
	<link rel="stylesheet" href="/before/blogs/Public/Css/basic.css">
	<link rel="stylesheet" type="text/css" href="/before/blogs/Public/Css/hottopic.css">
	<body>
		<div id='wrapper'>

			<!-- <div id='logo'>
				<p>博客</p>
				<p class='my'>欢迎你 <?php echo (session('username')); ?> <a href='/before/blogs/index.php/Home/Loginbackstage/loginbackstage' target='_top'>退出</a></p>
			</div> -->
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
						<article class="post">				
							<div class="hover">	
								<div class="postimage">
									<img src="/before/blogs/Public/Images/post1.jpg">
									<!-- <div class="posthover"><a class="openpost" href="javascript:void(0);" data-id="2">read more</a></div> -->
								</div>
								<div class="postinfo">
									<p></p>
									<h6 class="mid-gray"><b class="dark-gray">Posted:</b> 17/9/13</h6>
									<h6 class="mid-gray"><b class="dark-gray">Author:</b> Zan</h6>
									<h6 class="mid-gray"><b class="dark-gray">Comments:</b> 3</h6>
								</div>
							</div>

							<h3>A boat</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>

						</article>

						<article class="post">				
							<div class="hover">	
								<div class="postimage">
									<img src="/before/blogs/Public/Images/post2.jpg">
									<!-- <div class="posthover"><a class="openpost" href="javascript:void(0);" data-id="2">read more</a></div> -->
								</div>
								<div class="postinfo">
									<p></p>
									<h6 class="mid-gray"><b class="dark-gray">Posted:</b> 17/9/13</h6>
									<h6 class="mid-gray"><b class="dark-gray">Author:</b> Zan</h6>
									<h6 class="mid-gray"><b class="dark-gray">Comments:</b> 3</h6>
								</div>
							</div>

							<h3>A boat</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>

						</article>

						<article class="post">				
							<div class="hover">	
								<div class="postimage">
									<img src="/before/blogs/Public/Images/post3.jpg">
									<!-- <div class="posthover"><a class="openpost" href="javascript:void(0);" data-id="2">read more</a></div> -->
								</div>
								<div class="postinfo">
									<p></p>
									<h6 class="mid-gray"><b class="dark-gray">Posted:</b> 17/9/13</h6>
									<h6 class="mid-gray"><b class="dark-gray">Author:</b> Zan</h6>
									<h6 class="mid-gray"><b class="dark-gray">Comments:</b> 3</h6>
								</div>
							</div>

							<h3>A boat</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>

						</article>
						
					</div>

					<div id='about'>
						<div class="blogs">
							<p>Blogs<img src="/before/blogs/Public/Images/bird.png"></p>
							<ul>
								<li><img src="/before/blogs/Public/Images/right.png">  Java<span>(2)</span></li>
								<li><img src="/before/blogs/Public/Images/right.png">  C++<span>(5)</span></li>
								<li><img src="/before/blogs/Public/Images/right.png">  JS<span>(9)</span></li>
								<li><img src="/before/blogs/Public/Images/right.png">  C<span>(6)</span></li>
								<li><img src="/before/blogs/Public/Images/right.png">  Python<span>(1)</span></li>
								<li><img src="/before/blogs/Public/Images/right.png">  html<span>(2)</span></li>
								<li><img src="/before/blogs/Public/Images/right.png">  CSS<span>(7)</span></li>
							</ul>
						</div>
						<div class="text">
							<h1>Text <img src="/before/blogs/Public/Images/bird.png"></h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
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
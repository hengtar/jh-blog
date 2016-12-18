<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<!DOCTYPE html>
<html>
	<head>
		<title>J H &amp; Blog</title>

		<!-- meta -->
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- css -->
		<link rel="stylesheet" href="/Public/Home/css/bootstrap.min.css">
		<link rel="stylesheet" href="/Public/Home/css/ionicons.min.css">
		<link rel="stylesheet" href="/Public/Home/css/pace.css">
	    <link rel="stylesheet" href="/Public/Home/css/custom.css">

	    <!-- js -->
	    <script src="/Public/Home/js/jquery-2.1.3.min.js"></script>
	    <script src="/Public/Home/layer/layer.js"></script>
	    <script src="/Public/Home/js/bootstrap.min.js"></script>
	    <script src="/Public/Home/js/pace.min.js"></script>
	    <script src="/Public/Home/js/modernizr.custom.js"></script>
	</head>

	<body>
		<div class="container">	
			<header id="site-header">
				<div class="row">
					<div class="col-md-4 col-sm-5 col-xs-8">
						<div class="logo">
							<h1><a href="<?php echo U('Index/index');?>"><b>J.H</b> &amp; Blog</a></h1>
						</div>
					</div><!-- col-md-4 -->
					<div class="col-md-8 col-sm-7 col-xs-4">
						<nav class="main-nav" role="navigation">
							<div class="navbar-header">
  								<button type="button" id="trigger-overlay" class="navbar-toggle">
    								<span class="ion-navicon"></span>
  								</button>
							</div>

							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  								<ul class="nav navbar-nav navbar-right">
    								<li class="cl-effect-11"><a href="<?php echo U('Index/index');?>" data-hover="J.H">J.H</a></li>
    								<li class="cl-effect-11"><a href="<?php echo U('Index/index');?>" data-hover="文">文章</a></li>
    								<li class="cl-effect-11"><a href="<?php echo U('Article/essay');?>" data-hover="随">随笔</a></li>
    								<li class="cl-effect-11"><a href="<?php echo U('Article/course');?>" data-hover="教">教程</a></li>
    								<li class="cl-effect-11"><a href="<?php echo U('Article/software');?>" data-hover="软">软件</a></li>
    								<li class="cl-effect-11"><a href="<?php echo U('Donload/index');?>" data-hover="下">下载</a></li>
    								<li class="cl-effect-11"><a href="<?php echo U('Login/index');?>" data-hover="Login">Login</a></li>
  								</ul>
							</div>
						</nav>
					</div>
				</div>
			</header>
		</div>
<script type="text/javascript">
	$(function(){
		$('#reg').click(function(){
			window.location.href="<?php echo U('Reg/index');?>";
		});
	});
</script>
		<div class="content-body">
			<div class="container">
				<div class="row">
					<main class="col-md-12">
						<h1 class="page-title">登 录 J.H</h1>
						<article class="post">
							<div class="entry-content clearfix">
								<form action="#" method="post" class="contact-form">
									<div class="row">
										<div class="col-md-6 col-md-offset-3">
											<input type="text" name="name" placeholder="UserName (账号)" required>
											<input type="password" name="email" placeholder="PassWord (密码)" required>
											<div>
												<input class="btn btn-default" type="button" value="登 录">
											</div>
											<div>
												<input class="btn btn-default" type="button" value="注 册" id="reg" >
											</div>
										</div>
									</div>	<!-- row -->
								</form>
							</div>
						</article>
					</main>
				</div>
			</div>
		</div>
		<footer id="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p class="copyright">&copy; 2016 - 2017 <a href="" target="J.H & Blog" title="J.H & Blog"></a> - Original By <a href="" title="J.H & Blog" target="J.H & Blog"></a>J.H & Blog</p>
					</div>
				</div>
			</div>
		</footer>

		<!-- Mobile Menu -->
		<div class="overlay overlay-hugeinc">
			<button type="button" class="overlay-close"><span class="ion-ios-close-empty"></span></button>
			<nav>
				<ul>
					<li><a href="index.html">主页</a></li>
					<li><a href="full-width.html">文章</a></li>
					<li><a href="about.html">随笔</a></li>
					<li><a href="contact.html">教程</a></li>
					<li><a href="contact.html">下载</a></li>
				</ul>
			</nav>
		</div>

		<script src="/Public/Home/js/script.js"></script>
	</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
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
		<div class="content-body">
			<div class="container">
				<div class="row">
					<main class="col-md-8">
						<article class="post post-1">
							<header class="entry-header">
								<h1 class="entry-title">
									<a href="<?php echo U('Article/index');?>">Shadowsocks-libev一键安装脚本（CentOS6,7）</a>
								</h1>
								<div class="entry-meta">
									<span class="post-date"><a href="#">Linux</a></span>
									<span class="post-date"><a href="#">日期 2015.11.25 </a></span>
									<span class="comments-link"><a href="#">阅读(15)</a></span> 
									<span class="comments-link"><a href="#">评论(15)</a></span> 
									<span class="comments-link"><a href="#">赞(15)</a></span> 
								</div>
							</header>
							<div class="entry-content clearfix">
								<p>shadowsocks-libev相比《Shadowsocks-python一键安装脚本（CentOS6,7、Ubuntu、Debian）》，该版本的特点是内存占用小（600k左右），低 CPU 消耗，甚至可以安装在基于OpenWRT的路由器上。

使用方法
使用root用户登录，运行以下命令：

wget http://mirrors.linuxeye.com/oneinstack.tar.gz
tar xzf oneinstack.tar.gz
cd oneinstack
./shadowsocks.sh install
如下截图：


添加多用户
./shadowsocks.sh adduser
Sorry, we have no plan to support multi port configuration. Actually you can use multiple instances instead. For example:
ss-server -c /etc/shadowsocks/config1.json -f /var/run/shadowsocks-server/pid1
ss-server -c /etc/shadowsocks/config2.json -f /var/run/shadowsocks-server/pid2
ss-server -c /etc/shadowsocks/config3.json -f /var/run/shadowsocks-server/pid3
注意：Shadowsocks libev版不能通过修改配置文件来多端口（只能开启多进程），如果你需要多端口请安装Python版；

卸载
使用 root 用户登录，运行以下命令：

./shadowsocks.sh uninstall
参考：https://teddysun.com/357.html</p>
							</div>
						</article>
					</main>
<!DOCTYPE html>
<html>
			<aside class="col-md-4">
						<div class="widget widget-recent-posts">		
							<h3 class="widget-title">&nbsp;&nbsp;最新美文</h3>		
							<ul>
								<li>
									<a href="#">&nbsp;&nbsp;J.H 工作室 开业1年</a>
								</li>
								<li>
									<a href="#">&nbsp;&nbsp;测试文章</a>
								</li>
								<li>
									<a href="#">&nbsp;&nbsp;测试文章</a>
								</li>
							</ul>
						</div>
						<div class="widget widget-category">		
							<h3 class="widget-title">&nbsp;&nbsp;随笔</h3>		
							<ul>
								<li>
									<a href="#">&nbsp;&nbsp;测试文章</a>
								</li>
								<li>
									<a href="#">&nbsp;&nbsp;测试文章</a>
								</li>
								<li>
									<a href="#">&nbsp;&nbsp;测试文章</a>
								</li>
							</ul>
						</div>
						<div class="widget widget-archives">		
							<h3 class="widget-title">&nbsp;&nbsp;教程</h3>		
							<ul>
							<li>
									<a href="#">&nbsp;&nbsp;SEO</a>
								</li>
								<li>
									<a href="#">&nbsp;&nbsp;PHP</a>
								</li>
								<li>
									<a href="#">&nbsp;&nbsp;C++</a>
								</li>
								<li>
									<a href="#">&nbsp;&nbsp;Linux</a>
								</li>
								<li>
									<a href="#">&nbsp;&nbsp;Python</a>
								</li>
							</ul>
						</div>
						<div class="widget widget-archives">		
							<h3 class="widget-title">&nbsp;&nbsp;软件</h3>		
							<ul>
							<li>
									<a href="#">&nbsp;&nbsp;脚本</a>
								</li>
								<li>
									<a href="#">&nbsp;&nbsp;源码</a>
								</li>
								<li>
									<a href="#">&nbsp;&nbsp;编译器</a>
								</li>
								<li>
									<a href="#">&nbsp;&nbsp;免费软件</a>
								</li>
							</ul>
						</div>
					</aside>
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
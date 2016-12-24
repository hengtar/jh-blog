<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title>J.H 博客管理系统</title>
    <link href="/Public/Admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/Admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/Public/Admin/css/animate.min.css" rel="stylesheet">
    <link href="/Public/Admin/css/style.min.css" rel="stylesheet">
    <link href="/Public/Admin/css/login.min.css" rel="stylesheet">
    <script type="text/javascript" src="/Public/Public/layer/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/Public/Public/layer/jquery.form.js"></script>
    <script type="text/javascript" src="/Public/Public/layer/layer.js"></script>
    <!--[if lt IE 8]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <script>
        if(window.top!==window.self){window.top.location=window.location};
    </script>
    <script type="text/javascript">
        $(function(){
            var optinos = {
                url: "<?php echo U('Login/cheklogin');?>",
                type: "post",
                dataType:'json',
                error:function(){
                            layer.msg('无法访问数据库，请检查你的数据库配置',function(){})
                        },
                success:function(res){
                    if(res.error==1){
                        layer.msg(res.msg);
                        $('#loging').html("<button class='btn btn-warning btn-block'>重新登陆</button>")
                    }else if(res.error == 2){
                        layer.msg(res.msg);
                        $('#loging').html("<button class='btn btn-info btn-block'>重新登陆</button>")
                    }else{
                        layer.msg(res.msg);
                        setTimeout(function(){window.location=res.url;},2000);
                        $('#loging').html("<button class='btn btn-danger btn-block'>正在登陆</button>")
                    }
                }
            };
            $('#doLogin').ajaxForm(optinos);
        });
    </script>

</head>

<body class="signin">
    <div class="signinpanel">
        <div class="row">
            <div class="col-sm-7">
                <div class="signin-info">
                    <div class="logopanel m-b">
                        <h1>J . H  & Blog</h1>
                    </div>
                    <div class="m-b"></div>
                    <h4>欢迎使用 <strong>J.H 博客管理系统</strong></h4>
                   
                </div>
            </div>
            <div class="col-sm-5">
                <form method="post" action="" id="doLogin">
                    <h4 class="no-margins">J.H 博客管理系统</h4>
                    <p class="m-t-md">登录</p>
                    <input type="text" class="form-control uname" placeholder="用户名" name="user" />
                    <input type="password" class="form-control pword m-b" placeholder="密码" name="pass"/>
                    <span id="loging"><button class="btn btn-success btn-block">登录</button></span>
                </form>
            </div>
        </div>
        <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
        <div class="signup-footer">
            <div class="pull-left">
                &copy; 2016 All Rights Reserved. J.H 
            </div>
        </div>
    </div>
</body>
</html>
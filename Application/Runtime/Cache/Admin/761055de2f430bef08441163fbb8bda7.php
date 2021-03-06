<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>H+ 后台主题UI框架 - 富文本编辑器</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link href="/Public/Admin/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="/Public/Admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/Public/Admin/css/animate.min.css" rel="stylesheet">
    <link href="/Public/Admin/css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="/Public/Admin/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
    <link href="/Public/Admin/css/style.min.css?v=4.0.0" rel="stylesheet"><base target="_blank">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content">
    <form method="post" action="" id="myform">
        <div class="row">
            <div class="col-sm-8">
                <div class="ibox float-e-margins">
                    <div class="ibox-title" >
                        <h5>发表文章</h5>
                    </div>
                    <div class="ibox-content no-padding" >
                       <textarea class="summernote" name="articles">
                       </textarea>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>发表文章选项</h5>
                    </div>
                    <div class="ibox-content">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">标题</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="输入标题" name="articleTit">
                                </div>
                            </div>
                           <br> <br>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">公开</label>

                                <div class="col-sm-9">
                                    <select class="form-control" name="articlePublic">
                                        <option>公开</option>
                                        <option>私人</option>
                                    </select>
                                </div>
                            </div>
                            <br> <br>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">状态</label>

                                <div class="col-sm-9">
                                    <select class="form-control" name="articleStatus">
                                        <option>草稿</option>
                                        <option>正文</option>
                                    </select>
                                </div>
                            </div>
                            <br> <br>
                           <div class="form-group has-warning">
                                <label class="col-sm-3 control-label">类型</label>

                                <div class="col-sm-9">
                                    <select class="form-control" name="articleType">
                                        <option>文章</option>
                                        <option>随笔</option>
                                        <option>教程</option>
                                        <option>软件</option>
                                    </select>
                                </div>
                            </div>
                            <br> <br>
                            <div class="form-group has-success">
                                <label class="col-sm-3 control-label">标签</label>

                                <div class="col-sm-9">
                                    <select class="form-control" name="articleLabel">
                                       <option>选择标签</option>
                                        <span id="myspan">
                                        <?php if(is_array($labelData)): $i = 0; $__LIST__ = $labelData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><option><?php echo ($vol["labels"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                            </span>
                                    </select>
                                </div>
                            </div>
                           <br> <br>
                           <div class="form-group">
                               <label class="col-sm-3 control-label">软件：</label>
                                <div class="col-sm-9">
                                    <input type="file" name="app" class="form-control">
                                </div>
                            </div>
                            <br> <br>
                            <div class="form-group has-error">
                                <label class="col-sm-3 control-label">链接</label>

                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="请输入转载链接" name="http">
                                </div>
                            </div>
                            <br> <br>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">下载</label>

                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="请输入软件下载地址" name="donload">
                                </div>
                            </div>
                            <br> <br>
                            
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="addLabel" id="labels"> <span class="input-group-btn"> <button type="button" class="btn btn-primary">添加标签
                                        </button> </span>
                                    </div>
                                </div>
                            </div>
                            <br> <br>
                            <div class="form-group">
                                  <div class="alert alert-warning">
                                      <a class="alert-link" href="notifications.html#">文章状态 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:  草稿</a>.
                                  </div>
                                  <div class="alert alert-info">
                                      <a class="alert-link" href="notifications.html#">文章公开度&nbsp;&nbsp; :  未开通</a>.
                                  </div>
                                  <div class="alert alert-danger">
                                      <a class="alert-link" href="notifications.html#">作&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;者 &nbsp;&nbsp; : &nbsp;&nbsp;J.H</a>.
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        
                        <button class="btn btn-w-m btn-primary" type="submit">确认发布</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button  class="btn btn-w-m btn-default" type="button">保存草稿</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
    <script src="/Public/Admin/js/jquery.min.js?v=2.1.4"></script>
    <script src="/Public/Admin/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="/Public/Admin/js/content.min.js?v=1.0.0"></script>
    <script src="/Public/Admin/js/plugins/summernote/summernote.min.js"></script>
    <script src="/Public/Admin/js/plugins/summernote/summernote-zh-CN.js"></script>

    <script type="text/javascript" src="/Public/Public/layer/jquery.form.js"></script>
    <script type="text/javascript" src="/Public/Public/layer/layer.js"></script>
    <script>
        $(document).ready(function(){$(".summernote").summernote({lang:"zh-CN",height:610})});var edit=function(){$("#eg").addClass("no-padding");$(".click2edit").summernote({lang:"zh-CN",focus:true})};var save=function(){$("#eg").removeClass("no-padding");var aHTML=$(".click2edit").code();$(".click2edit").destroy()};
    </script>
    <script type="text/javascript">
        $(function(){
            var o = {
                url: "<?php echo U('Article/articleAdd');?>",
                type: "post",
                dataType:'json',
                success:function(res){
                    if(res.error == 0){
                        layer.msg(res.msg);
                    }else{
                        layer.msg(res.msg);
                    }
                }
            };
            $('#myform').ajaxForm(o);
        });
    </script>
    <script>
        $('.btn.btn-primary').click(function(){
            var labels=$('#labels').val();
            $.ajax({
                url: "<?php echo U('Article/addlabel');?>",
                type: 'POST',
                dataType: 'json',
                data: {labels: labels},
                success:function(res){
                    if(res.error == 0){
                        layer.msg(res.msg);
                    }else{
                        layer.msg(res.msg);
                    }
                }
            });
        });
    </script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>

</html>
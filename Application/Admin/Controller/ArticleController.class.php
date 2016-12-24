<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends Controller 
{
	//发布文章
    public function edit()
    {
        $Model = M('labels');
        $labelData = $Model->select();
        $this->assign('labelData',$labelData);
        $this->display();
    }
    //文章列表
     public function artcileList()
    {
       $this->display();
    }
    //发布文章提交页面
    public function articleAdd()
    {
        $post = I('post.');
        $post['article'] = $_POST['articles'];
    	$model = M('article');
        $data = $model->add($post);
        if ($data){
            $res['error'] = 0;
            $res['msg'] = "添加成功";
            $this->ajaxReturn($res);
        }else{
            $res['error'] = 1;
            $res['msg'] = "添加失败";
            $this->ajaxReturn($res);
        }

    }

    public function addlabel ()
    {
        $post = I('post.');
        //dump($post['labels']);die;
        if ($post['labels'] != null){
            $Model = M('labels');
            $data = $Model->add($post);
            if ($data){
                $res['error'] = 0;
                $res['msg'] = "标签添加成功";
                // $res['data'] = $Model->select();
                $this->ajaxReturn($res);
            }else{
                $res['error'] = 1;
                $res['msg'] = "标签添加失败";
                $this->ajaxReturn($res);
            }
        }
    }
}
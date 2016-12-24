<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $Model = M('article');
        $data = $Model->select();
        $this->assign('data',$data);
        //dump($data);die;
        $this->display();
    }
}
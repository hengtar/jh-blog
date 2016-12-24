<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends BaseController {
    public function index(){
       $this->display();
    }
     public function index_v1(){
     	$newtime = getNowDate();
     	
		$this->assign('newtime',$newtime);
		
        $this->display();
    }
    //删除缓存
    public function delRun(){
        delFileByDir(APP_PATH.'Runtime/');
        $this->success('删除缓存成功！',U('index/index'));
    }
}
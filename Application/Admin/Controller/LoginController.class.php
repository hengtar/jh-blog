<?php
namespace Admin\Controller;
use Think\Model;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
    	
        $this->display();
    }
    public function cheklogin()
    {
    	//获取账号密码
    	$user = I('post.user');
    	//加密密码  详情请看 coment文件下function.php
        $pass = getPwd(I('post.pass')) ;
        if(empty($user)||empty($pass)){
                $res['error']=1;
                $res['msg']="请输入帐号密码";
                $this->ajaxReturn($res);
        }
        
        $User = M('admin_user');
        //字段映射
        $post = array(
        	'username' => $user,
        	'password' => $pass
        	);
        $data = $User->where($post)->find();
        if (!$data) {
            $res['error']=2;
            $res['msg']="账号密码不正确";
            $this->ajaxReturn($res);
        }else{
            session('id',$data['id']);
            session('username',$data['username']);
            $res['error']=0;
            $res['msg']="正在登陆中...";
            $res['url']=U('Index/index');
            $this->ajaxReturn($res);
        }

    	
    }
}
<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {
    public function _initialize(){
    	$id = session('id');
	       if (empty($id)) {
	       		header("Location: " . U('Login/index'));
	            die;
	       }
    }
}
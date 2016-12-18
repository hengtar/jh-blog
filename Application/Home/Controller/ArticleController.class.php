<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends Controller {
    public function index(){
       $this->display();
    }
    public function essay(){
       $this->display();
    }
    public function course(){
       $this->display();
    }
    public function software(){
       $this->display();
    }
}
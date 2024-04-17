<?php


namespace app\admin\controller;


use think\Controller;
use think\facade\Session;
use think\Request;

class Login extends Controller
{
    public function login(){
        return $this->view->fetch('login');
    }

    public function index(Request $request){
        $date=$request->post();
        $name=$date['name'];
        $pwd=$date['pwd'];
        if($name==''){
            return $this->error('用户名不能拿为空');
        }elseif ($pwd==''){
            return $this->error('密码不能拿为空');
        }else{
            $res=model('login')->checkit($name,$pwd);
            if($res){
                return $this->success('登录成功','/admin/admin/admin');
            }else{
                return $this->error('登录失败，用户名密码错误');
            }
        }
    }

    public function rootdown(){
        Session::delete('admin_id');
        Session::delete('admin_name');
        return $this->success('退出成功','/admin/login/login');
    }
}
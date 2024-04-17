<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/2/20
 * Time: 21:32
 */



namespace app\index\controller;
use think\Controller;
use think\facade\Session;

class Login extends Controller
{
    public function login(){

        $lists=model('product')->find_product();
        for($i=1;$i<=10;$i++) {
            $num='good'.$i;
            $goods = model('product')->findgoods($i);
            $this->view->assign($num, $goods);
        }
        $this->view->assign('login',$lists);
        return $this->view->fetch('login');
    }

    public function clear(){
        Session::delete('user_id');
        Session::delete('user_name');
        $this->success('退出成功正在返回首页','/index/login/login');
//        return redirect(url('/index/index/index'));
    }


    public function send(){
        Session::start();
        $name=Session::get('user_name');
        $code=mt_rand(100000,999999);
        Session::set('codes',$code);
        $email=$_POST['email'];
        $res=send_code_to_email($email,$code,$name);
        return $res;
    }

    public function sendsa(){
        $num=$_POST['phone'];
        $code=mt_rand(100000,999999);
        Session::set('code',$code);
        $res=sends($num,$code);
        return $res;
    }

    public function findit(){
        $id=$_POST['id'];
        $goods=model('product')->findgoods($id);
        return view('login')->assign('good',$goods);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/2/29
 * Time: 20:25
 */

namespace app\index\controller;

use app\index\validate\Registerphone;
use app\index\validate\RegisterValidate;
use think\Controller;
use think\Request;
use think\Session;

class Register extends Controller
{
    public function register(){
        return $this->fetch();
    }

    public function zhuce(Request $request){

        $DATE=$request->post();
        //判断密码是否为空
        $pwd1=$DATE['registerpwd'];
        $pwd2=$DATE['checkpwd'];
        if($pwd1!=$pwd2){
            return  $this->error('两次密码输入不一致');
        }
        $ret=$this->validate($DATE,RegisterValidate::class);
        if($ret!==true){
            return $this->error($ret);
        }
        $res = model('user')->adduser($DATE);



        if ($res == false) {
            return $this->error('该邮箱已经被注册，请重新输入');
        } else {

            return redirect(url('/index/login/login'));
        }
    }


    public function zhuceiphone(Request $request)
    {
        //获取传输过来的post数据
        $code = \think\facade\Session::pull('code');
        $date = $request->post();
        $ret = $this->validate($date, Registerphone::class);
        $codecheck = $date['checknum'];
        $iphonenum = $date['iphonenum'];
        $pwd1=$date['pwds'];
        $pwd2=$date['pwdss'];
        if($pwd1!=$pwd2){
            return  $this->error('两次密码输入不一致');
        }
        $pwd = md5($date['pwds']);
        if ($ret !== true) {
            return $this->error($ret);
        }
        $res = model('user')->checkphonenum($iphonenum);
        if ($res) {
            return $this->error('该手机已经被注册，请重新输入！！');
        } elseif ($code != $codecheck) {
            return $this->error('手机验证码错误，请重新输入！！');
        } else {
            $data = [
                'iphone' => $iphonenum,
                'password' => $pwd,
                'state'=>1
            ];
            $rqu = model('user')->addphone($data);
            return redirect(url('/index/login/login'));
        }
    }
}
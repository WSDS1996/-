<?php
namespace app\index\controller;

use app\index\model\User;
use app\index\validate\UserValidate;
use think\Controller;
use think\facade\Session;
use think\Request;
use think\Validate;

class Index extends Controller
{




    public function index()
    {
        return $this->fetch();
    }


    //检查是否登录
    public function checklogin(){
        $id=Session::get('user_id');
        if($id==''){
            return $this->error('您好，您还没有登录','/index/index/index');
        }else{
            return 1;
        }
    }


    public function login(Request $request)
    {

        $date = $request->post();
        //判断用户名密码是否为空
        $res = $this->validate($date, UserValidate::class);
        //获取提交的数据

        //判断用户名和密码是否正确
        if ($res !== true) {

            return $this->error($res);
        }

        $ret = model('user')->checkuser($date);

        if ($ret == true) {
            return redirect(url('/index/Login/login'));
        } else {
            return $this->error('用户名密码错误');
        }

    }

}

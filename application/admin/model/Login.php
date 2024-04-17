<?php


namespace app\admin\model;


use think\Db;
use think\facade\Session;
use think\Model;

class Login extends Model
{
    public function checkit($name,$pwd){
        $res=Db::table('tp_admin')->where('name',$name)->find();
        if($res['password']==$pwd){
            Session::set('admin_name',$name);
            Session::set('admin_id',$res['id']);
            return 1;
        }else{
            return 0;
        }
    }


}
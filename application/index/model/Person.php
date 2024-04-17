<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/9
 * Time: 17:36
 */

namespace app\index\model;


use think\Db;
use think\Model;

class Person extends  Model
{
    public function findimfor($id){
        $list=Db::table('tp_user')->where('id',$id)->paginate(1);
        return $list;
    }

    public function findany($tp,$user_id){
        $list=Db::table($tp)->where('id',$user_id)->paginate(1);
        return $list;
    }

    //ajax检测用户名是否可用
    public function checkname($name){
        $list=Db::table('tp_user')->where('name',$name)->find();
        return $list;
    }

    public function checknames($name){
        $list=Db::table('tp_user')->where('email',$name)->find();
        return $list;
    }

    //修改用户的昵称
    public function addname($dates){

        $req=Db::table('tp_user')->where('id',$dates['id'])->update(['name' =>$dates['name'],'update_time'=>$dates['update_time']]);
        return  $req;
    }

    //修改邮箱
    public function chagemails($datesa){

        $req=Db::table('tp_user')
            ->where('id',$datesa['id'])
            ->update(['email' =>$datesa['email'],'update_time'=>$datesa['update_time']]);

        return  $req;
    }

    //修改密码
    public function chagepwds($pwd,$id,$time){
        $req=Db::table('tp_user')
            ->where('id',$id)
            ->update(['password' =>$pwd,'update_time'=>$time]);

        return  $req;
    }

}
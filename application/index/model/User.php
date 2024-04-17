<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/2/22
 * Time: 14:27
 */

namespace app\index\model;

use think\Db;
use think\facade\Cookie;
use think\Model;

class User extends  Model
{
    //标明主键
        protected $pk='id';
    //设置表名
        protected $table='tp_user';

        protected $autoWriteTimestamp=true;
        protected $createTime = 'creat_time';
        protected $updateTime= 'update_time';
        protected  $dateFormat='Y年m月d日';

        public function checkuser(array $date){
                $arr=[
                    'email'=>$date['uname'],
                    'state'=>1
                ];
                $arr2=[
                    'iphone'=>$date['uname'],
                    'state'=>1
                ];
               $ret=$this->where($arr)->find();
                $rets=$this->where($arr2)->find();
                if($ret){
                    $id=$ret->id;
                }elseif($rets){
                    $id=$rets->id;
                }else{

                }
               if(!($ret||$rets)){
                   return false;
               }

               $pwd=$ret['password'];
               $pwds=$rets['password'];
               $inpwd=md5($date['pwd']);
            if($ret){
                if($pwd!=$inpwd){
                    return false;
                }else{
                    \think\facade\Session::set('user_name',$date['uname']);
                    \think\facade\Session::set('user_id',$id);
                    return true;
                }
            }elseif($rets){
                if ($pwds!=$inpwd){
                    return false;
                }else{
                    \think\facade\Session::set('user_name',$date['uname']);
                    \think\facade\Session::set('user_id',$id);
                    return true;
                }
            }else{
                return false;
            }
        }

        //定义添加用户的函数
        public function adduser(array $DATE){
            $ret=$this->where('email',$DATE['email'])->find();

            if($ret==true){
                return false;
            }else{

                    //添加用户数据到数据库，并返回true
                    $db=new User();
                    $inpassword=md5($DATE['registerpwd']);
                    $db->email=$DATE['email'];
//                    dump($db->name);             //需要注意的是怎么输出user
                    $db->state=1;
                    $db->password=$inpassword;
                    $db->save();
                    $user=User::where('email', $DATE['email'])->find();
                    $time=time();
                    $arrs=[
                        'id'=>$user->id,
                        'update_time'=>$time
                    ];
                    $res=Db::table('tp_address')->insert($arrs);
                     \think\facade\Session::set('user_name',$user->email);
                     \think\facade\Session::set('user_id',$user->id);
                    return true;
            }
        }


    //查询手机号是否被注册
    public function checkphonenum($num){
        $req=Db::table('tp_user')->where('iphone',$num)->find();
        return $req;
    }


    //添加手机号
    public function addphone($data){
        $req=Db::table('tp_user')->insert($data);
        $user=User::where('iphone', $data['iphone'])->find();
        $time=time();
        $arrs=[
            'id'=>$user->id,
            'update_time'=>$time
        ];
        $res=Db::table('tp_address')->insert($arrs);
        \think\facade\Session::set('user_name',$data['iphone']);
        \think\facade\Session::set('user_id',$user->id);
        return $req;
    }

    //修改密码的时候判断旧密码是否正确
    public function checkpwds($id,$pwd){
        $res=Db::table('tp_user')
            ->where('id',$id)
            ->find();

        if($res['password']==$pwd){
            return true;
        }else{
            return false;
        }

    }



    //设置一个综合查询函数，需要查询的必须为一位数组
    public function findany($array){
        $key=array_keys($array);
        $value=array_values($array);
        $res=Db::table('tp_user')
            ->where($key[0],$value[0])
            ->find();
        return $res;
    }

    public function chargeany($tp,$id,$arr){
        $res=Db::table($tp)
            ->where('id',$id)
            ->update($arr);
        return $res;
    }

}
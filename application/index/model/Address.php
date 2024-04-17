<?php


namespace app\index\model;


use think\Db;
use think\facade\Session;
use think\Model;

class Address extends   Model
{
    public function chargeany($tp,$id,$arr){
        $id=Session::get('user_id');
        $arrs=[
            'id'=>$id,
            'economize'=>$arr['economize'],
            'city'=>$arr['city'],
            'country'=>$arr['country'],
            'address'=>$arr['address'],
            'name'=>$arr['name'],
            'phone'=>$arr['phone'],
            'update_time'=>$arr['update_time']
        ];
        $ret=Db::table($tp)
            ->where('id',$id)
            ->find();
        if($ret){
            $res=Db::table($tp)
                ->where('id',$id)
                ->update($arr);
        }else{
            $d=new Address();
            $res=$d->save($arrs);
        }
        return $res;
    }
}
<?php


namespace app\index\model;


use think\Db;
use think\Model;

class Order extends Model
{
    //添加订单的函数
    public function addorder($arr){
        $add=new Order();
        $res=$add->save($arr);
        return $res;
    }

    public function findorder($id,$state){
        $arr=[
            'id'=>$id,
            'state'=>$state
        ];
        $subsql2 = Db::table('tp_shopcart')->where($arr)->paginate(3);
        return $subsql2;

    }
}
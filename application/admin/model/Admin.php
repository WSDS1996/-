<?php


namespace app\admin\model;


use think\Db;
use think\Model;

class Admin extends Model
{
    public function find_id(){
        $res=Db::table('tp_product')->where('1=1')->order('product_id desc')->find();
        $num=$res['product_id'];
        return $num;
    }


    //添加商品信息
    public function addproduct($arr){
        $res=new \app\index\model\Product();
        $res->save($arr);
    }


    public function findany($state){
        $res=Db::table('tp_product')->where('state',$state)->paginate(10);
        return $res;
    }

    public function finduser($state){
        $res=Db::table('tp_user')->where('state',$state)->paginate(10);
        return $res;
    }

    public function findorder(){
        $res=Db::table('tp_order')->where('1=1')->paginate(10);
        return $res;
    }

    public function find_orderdetail($id){
        $res=Db::table('tp_order')->where('order_id',$id)->select();
        return $res;
    }

    public function findall($id){
        $res=Db::table('tp_shopcart')->where('order_id',$id)->paginate(5);
        return $res;
    }

    //下架商品
    public function down($id){
        $arr=[
            'state'=>0
        ];
        $res=Db::table('tp_product')
            ->where('product_id',$id)
            ->update($arr);
        return $res;
    }
    public function udown($id){
        $arr=[
            'state'=>0
        ];
        $res=Db::table('tp_user')
            ->where('id',$id)
            ->update($arr);
        return $res;
    }

    //上架商品
    public function ups($id){
        $arr=[
            'state'=>1
        ];
        $res=Db::table('tp_product')
            ->where('product_id',$id)
            ->update($arr);
        return $res;
    }
    public function uups($id){
        $arr=[
            'state'=>1
        ];
        $res=Db::table('tp_user')
            ->where('id',$id)
            ->update($arr);
        return $res;
    }
}
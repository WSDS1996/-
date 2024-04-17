<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/5
 * Time: 15:33
 */

namespace app\index\controller;


use think\Controller;
use think\Db;
use think\Request;
use think\Session;

class Shopcart extends Controller
{
    public function shopcart(){
        $indexs=new Index();
        $res=$indexs->checklogin();
        if($res) {
            $userid=\think\facade\Session::get('user_id');
            $list=model('shopcart')->find($userid);
            $spend=0;
            $num=0;
            for ($i=0;$i<count($list);$i++){
                $spend=$spend+$list[$i]['cost']*$list[$i]['num'];
                $num=$num+$list[$i]['num'];
            }
            $this->view->assign('num',$num);
            $this->view->assign('spend',$spend);
            $this->view->assign('shopcart',$list);
            return $this->view->fetch('shopcart');
        }else{

        }
    }

    public function addCart(){
        $userid=\think\facade\Session::get('user_id');
        if($userid) {
            $product_id=intval($_POST['product_id']);
            $num=$_POST['num'];
            $product_imfor=model('shopcart')->find_imfor($product_id);
            $costs=$product_imfor['cost'];
            $url=$product_imfor['pic_url'];
            $desc=$product_imfor['descript'];

            $time=time();
            $arr=['id'=>$userid,'state'=>1];
            $execs=Db::table('tp_shopcart')->where($arr)->find();
            if($execs){
                $order_id =$execs['order_id'];
            }else {
                $order_id ='Tp'.$userid.$time;
            }
            $adtes=[
                'order_id'=>$order_id,
                'id'=>$userid,
                'product_id'=>$product_id,
                'cost'=>$costs,
                'updata'=>$time,
                'num'=>$num,
                'pic_url'=>$url,
                'pic_desc'=>$desc,
                'state'=>1
            ];
            $res=model('Shopcart')->add($adtes);
            return $res;
        }else{
            return 0;
        }

    }

    //删除购物车的商品
    public function del(Request $request){
        $id=\think\facade\Session::get('user_id');
        $date=$request->post();
        $product_id=$date['product_id'];
        $arr=[
            'id'=>$id,
            'product_id'=>$product_id
        ];
        $res=model('shopcart')->del($arr);
        return $res;
    }


    public function pay_get(){
        $id=\think\facade\Session::get('user_id');
        $tp='tp_shopcart';
        $time=time();
        $arr=[
            'id'=>$id,
            'state'=>1
        ];
        $list=model('shopcart')->findany($tp,$arr);
        $t='tp_address';
        $arrs=[
            'id'=>$id
        ];
        $tt=model('shopcart')->findany($t,$arrs);
        $address=$tt[0]['economize'].$tt[0]['city'].$tt[0]['country'].$tt[0]['address'];
        $arrs=[
            'update_time'=>$time,
            'cost'=>$_GET['cost'],
            'id'=>$id,
            'order_id'=>$list[0]['order_id'],
            'name'=>$tt[0]['name'],
            'address'=>$address,
            'phone'=>$tt[0]['phone']
        ];

        for ($i=0;$i<count($list);$i++){

                $product_id=$list[$i]['product_id'];
                $stock=$list[$i]['num'];
            model('product')->chargestock($product_id,$stock);
        }


        $ret=model('shopcart')->chargestate($id);
        $res=model('order')->addorder($arrs);
        if($res){
            return  $this->success('支付成功','/index/shopcart/successs');
        }
    }

    public function successs(){

        return $this->fetch();
    }


    public function dorder(){
        $id= \think\facade\Session::get('user_id');
        $product_id=$_GET['product_id'];
        $order_id=$_GET['order_id'];
        $arr1=[
            'id'=>$id,
            'product_id'=>$product_id,
            'order_id'=>$order_id
        ];
        $res=model('shopcart')->delorder($arr1);
        if($res){
            return $this->success('退货成功');
        }else{
            return $this->success('退货失败');
        }
    }
}
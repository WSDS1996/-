<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/3
 * Time: 14:00
 */

namespace app\index\model;


use think\Db;
use think\Model;

class Product extends  Model
{
    protected $pk='product_id';
    //设置表名

    protected $autoWriteTimestamp=true;
    protected $createTime = 'creat_time';
    protected $updateTime= 'update_time';
    protected  $dateFormat='Y年m月d日';

    public function find_product(){
        $list=Db::table('tp_product')->where('state',1)->paginate(9);
        return $list;
    }

    public function find_imformation($id){
        $goods=Db::table('tp_pic')->where('product_id',$id)->paginate(1);
        return $goods;
    }

    public function find_imfor($id){
        //连表查询
        $subsql = Db::table('tp_product')->where(['product_id'=>$id])->buildSql();
        $good=Db::table('tp_pic')->alias('a')->join([$subsql=> 'w'], 'a.product_id = w.product_id')->select();
        return $good;
    }

    //分类查询
    public function findgoods($id){
        $list=Db::table('tp_product')->where('category_id',$id)->select();
        return $list;
    }



    public function chargestock($product_id,$stock){
            $res=Db::table('tp_product')
                ->where('product_id',$product_id)
                ->find();
        $ress=Db::table('tp_pic')
            ->where('product_id',$product_id)
            ->find();
            $stocks =$res['stock']-$stock;
            $a=$ress['y_sales_volume']+$stock;
            $arr=[
                'stock'=>$stocks
            ];
            $arr2=[
                'y_sales_volume'=>$a
            ];
            $rr=Db::table('tp_product')
                ->where('product_id',$product_id)
                ->update($arr);

        $rrr=Db::table('tp_pic')
            ->where('product_id',$product_id)
            ->update($arr2);
    }

    public function find_goods($name){
        $where[] = ['product_name','like', '%'.$name.'%'];
        $res=Db::table('tp_product')->
            relation(true)->where($where)->find();
        return $res;
    }
}
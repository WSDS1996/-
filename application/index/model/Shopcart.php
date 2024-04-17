<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/6
 * Time: 12:45
 */

namespace app\index\model;


use think\facade\Session;
use function PHPSTORM_META\type;
use think\Db;
use think\Model;

class Shopcart extends Model
{
    protected $autoWriteTimestamp=true;
    protected $createTime = 'creat_time';
    protected $updateTime= 'update_time';

    public function find_imfor($p_id){
        $id=$p_id;
        $list=Db::table('tp_product')->where('product_id',$id)->find();
        return $list;
    }

    public function add($date){
        //判断用户购物车是否有相同的商品
        $userid=$date['id'];
        $pro_id=$date['product_id'];
        $pro_num=$date['num'];
        $a=1;
        $arr=['id'=>$userid,'product_id'=>$pro_id,'state'=>$a];
        $exec=$this->where($arr)->find();
        if($exec){
            $up_num=$pro_num+$exec['num'];
            $res=$this->where($arr)->update(['num' =>$up_num]);
        }else{
            $res=$this->insert($date);
        }
        return $res;
    }

    public function find($id){
        $arrs=['id'=>$id,
                'state'=>1
            ];
        $lists=$this->where($arrs)->select();
        return $lists;
    }

    public function del($arr){
        $lists=$this->where($arr)->delete();
        return $lists;
    }

    //综合搜寻函数
    public function findany($tp,$arr){
        $res=Db::table($tp)
            ->where($arr)
            ->select();
        return $res;
    }


    //改变购物车商品的状态
    public function chargestate($id)
    {
        $arr=['state'=>0];
        $res=Db::table('tp_shopcart')
            ->where('id',$id)
            ->update($arr);
        return $res;
    }

    public function delorder($arr1)
    {
        $arr=['state'=>2];
        $res=Db::table('tp_shopcart')
            ->where($arr1)
            ->update($arr);
        return  $res;
    }

}
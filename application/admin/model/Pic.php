<?php


namespace app\admin\model;


use think\Model;

class Pic extends Model
{
    //添加详细图片
    public function add_picurl($arr2){
        $res=new Pic();
        $res->save($arr2);
    }
}
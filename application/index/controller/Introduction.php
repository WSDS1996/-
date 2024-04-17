<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/4
 * Time: 12:13
 */

namespace app\index\controller;


use think\Request;
use function MongoDB\BSON\toJSON;
use think\Controller;

class Introduction extends Controller
{
    public function introduction(){

        $ids=$_GET['id'];
        $good=model('product')->find_imfor($ids);
        $this->view->assign('introduction',$good);
        return $this->view->fetch('introduction');
    }

    public function search(Request $request){
        $name=$request->post('index_none_header_sysc');
        if($name==''){
            return $this->error('搜索名称为空');
        }
        $goods=model('product')->find_goods($name);
        if($goods==''){
            return $this->error('没有相关商品，小二正在努力备货！！');
        }else{
            $url='/index/introduction/introduction?id='.$goods['product_id'];
            return $this->success('查找成功！！',$url);
        }
    }
}
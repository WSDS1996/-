<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/3
 * Time: 23:15
 */

namespace app\admin\controller;


use think\Controller;
use think\facade\Session;
use think\Request;

class Admin extends Controller
{
    public function admin(){
        $id=Session::get('admin_id');
        if($id==''){
            return $this->error('没有登录，请登录！！','/admin/login/login');
        }
        $state=1;
        $good=model('admin')->findany($state);
        $this->view->assign('admin',$good);
        return $this->view->fetch('admin');
    }


        //会员列表
    public function user_list(){
        $id=Session::get('admin_id');
        if($id==''){
            return $this->error('没有登录，请登录！！','/admin/login/login');
        }
        $state=1;
        $good=model('admin')->finduser($state);
        $this->view->assign('user_list',$good);
        return $this->view->fetch('user_list');
    }

    //会员小黑屋
    public function down_user(){
        $id=Session::get('admin_id');
        if($id==''){
            return $this->error('没有登录，请登录！！','/admin/login/login');
        }
        $state=0;
        $good=model('admin')->finduser($state);
        $this->view->assign('down_user',$good);
        return $this->view->fetch('down_user');
    }
    public function order_list(){
        $id=Session::get('admin_id');
        if($id==''){
            return $this->error('没有登录，请登录！！','/admin/login/login');
        }
        $good=model('admin')->findorder();
        $this->view->assign('order_list',$good);
        return $this->view->fetch('order_list');
    }

    public function recycle(){
        $id=Session::get('admin_id');
        if($id==''){
            return $this->error('没有登录，请登录！！','/admin/login/login');
        }
        $state=0;
        $good=model('admin')->findany($state);
        $this->view->assign('recycle',$good);
        return $this->view->fetch('recycle');
    }

    public function product_detail(){
        $id=Session::get('admin_id');
        if($id==''){
            return $this->error('没有登录，请登录！！','/admin/login/login');
        }
        $num=model('admin')->find_id();
        $this->view->assign('num',$num+1);
        return $this->view->fetch('product_detail');
    }

    public function order_detail(){
        $id=Session::get('admin_id');
        if($id==''){
            return $this->error('没有登录，请登录！！','/admin/login/login');
        }
        $order_id=$_GET['id'];
        $res=model('admin')->find_orderdetail($order_id);
        $tt=model('admin')->findall($order_id);
        $this->view->assign('order',$tt);
        $this->view->assign('order_detail',$res);
        return $this->view->fetch('order_detail');
    }


    public function express(){
        $id=Session::get('admin_id');
        if($id==''){
            return $this->error('没有登录，请登录！！','/admin/login/login');
        }
        return $this->view->fetch('express');
    }

    //商品下架
    public function down(Request $request){
        $date=$request->post();
        $res=model('admin')->down($date['product_id']);
        return $res;
    }
    //用户下架
    public function udown(Request $request){
        $date=$request->post();
        $res=model('admin')->udown($date['id']);
        return $res;
    }

    //商品上架
    public function ups(Request $request){
        $date=$request->post();
        $res=model('admin')->ups($date['product_id']);
        return $res;
    }
    //用户上架
    public function uups(Request $request){
        $date=$request->post();
        $res=model('admin')->uups($date['id']);
        return $res;
    }

   public function compressedImage($imgsrc, $imgdst) {
        list($width, $height, $type) = getimagesize($imgsrc);

        $new_width = $width;//压缩后的图片宽
        $new_height = $height;//压缩后的图片高

        if($width >= 600){
            $per = 600 / $width;//计算比例
            $new_width = $width * $per;
            $new_height = $height * $per;
        }

        switch ($type) {
            case 1:
                $giftype = check_gifcartoon($imgsrc);
                if ($giftype) {
                    header('Content-Type:image/gif');
                    $image_wp = imagecreatetruecolor($new_width, $new_height);
                    $image = imagecreatefromgif($imgsrc);
                    imagecopyresampled($image_wp, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                    //90代表的是质量、压缩图片容量大小
                    imagejpeg($image_wp, $imgdst, 90);
                    imagedestroy($image_wp);
                    imagedestroy($image);
                }
                break;
            case 2:
                header('Content-Type:image/jpeg');
                $image_wp = imagecreatetruecolor($new_width, $new_height);
                $image = imagecreatefromjpeg($imgsrc);
                imagecopyresampled($image_wp, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                //90代表的是质量、压缩图片容量大小
                imagejpeg($image_wp, $imgdst, 90);
                imagedestroy($image_wp);
                imagedestroy($image);
                break;
            case 3:
                header('Content-Type:image/png');
                $image_wp = imagecreatetruecolor($new_width, $new_height);
                $image = imagecreatefrompng($imgsrc);
                imagecopyresampled($image_wp, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                //90代表的是质量、压缩图片容量大小
                imagejpeg($image_wp, $imgdst, 90);
                imagedestroy($image_wp);
                imagedestroy($image);
                break;
        }
    }



    public function add_product(Request $request){
        $date=$request->post();
        $url1='/index/introduction/introduction?id='.$date['product_id'];
        $url2='/static/image/'.$date['product_id'].'.jpg';
        $url3='/static/image/'.$date['product_id'].'y1.jpg';
        $url4='/static/image/'.$date['product_id'].'y2.jpg';
        $url5='/static/image/'.$date['product_id'].'y3.jpg';
        $time=time();
        $arr=[
            'state'=>$date['state'],
            'product_id'=>$date['product_id'],
            'product_name'=>$date['product_name'],
            'category_id'=>$date['category_id'],
            'press_name'=>$date['press_name'],
            'price'=>$date['price'],
            'cost'=>$date['cost'],
            'weight'=>$date['weight'],
            'height'=>$date['height'],
            'length'=>$date['length'],
            'widght'=>$date['widght'],
            'descript'=>$date['descript'],
            'stock'=>$date['stock'],
            'url'=>$url1,
            'pic_url'=>$url2
        ];

        $arr2=[
            'product_id'=>$date['product_id'],
            'pic_desc'=>$date['descript'],
            'pic_url1'=>$url3,
            'pic_url2'=>$url4,
            'pic_url3'=>$url5,
            'update_time'=>$time,
            'stock'=>$date['stock'],
        ];
        $fileinfo1=$_FILES['myfile1'];
        $fileinfo2=$_FILES['myfile2'];
        $fileinfo3=$_FILES['myfile3'];
        $fileinfo4=$_FILES['myfile4'];
        $num1=1;
        $num2=2;
        $num3=3;
        $num4=4;
        $rel=$this->upload($fileinfo1,$date['product_id'],$num1);
        $re2=$this->upload($fileinfo2,$date['product_id'],$num2);
        $re3=$this->upload($fileinfo3,$date['product_id'],$num3);
        $re4=$this->upload($fileinfo4,$date['product_id'],$num4);

        if($rel&$re2&$re3&$re4){
            $ret=model('pic')->add_picurl($arr2);
            $res=model('admin')->addproduct($arr);
            return $this->success('成功上传商品！！');
        }else{
            return $this->error('图片上传失败，请重新上传');
        }

    }


    public function upload($fileinfo,$product_id,$num){
        if($fileinfo['error']>0){
            switch ($fileinfo['error']){
                case 1:
                    return $this->error('超出最大文件许可');
                case 2:
                    return $this->error('超出最大表单许可');
                case 3:
                    return $this->error('文件部分被上传');
                case 4:
                    return $this->error('没有选择上传文件');
                case 6:
                    return $this->error('没有找到临时目录');
                case 7:
                    return $this->error('没有错误，但是没有上传');
                case 8:
                    return $this->error('系统错误');
            }
        }

        $ext=pathinfo($fileinfo['name'],PATHINFO_EXTENSION);
        $allowext=array('jpg','jpeg','png');
        if (!in_array($ext,$allowext)){
            return $this->error('必须为jpg或者png格式的文件');
        }

        $maxsize=2097152;
        if ($fileinfo['size']>$maxsize){
            return $this->error('文件太大！！');
        }

        if (!is_uploaded_file($fileinfo['tmp_name'])){
            return $this->error('必须是http的post提交的！！');
        }

        if($num==1){
            $destination='C:/Users/Administrator/tp5.1/public/static/image/'.$product_id.'.png';
        }elseif($num==2){
            $destination='C:/Users/Administrator/tp5.1/public/static/image/'.$product_id.'y1.png';
        }elseif ($num==3){
            $destination='C:/Users/Administrator/tp5.1/public/static/image/'.$product_id.'y2.png';
        }elseif ($num==4){
            $destination='C:/Users/Administrator/tp5.1/public/static/image/'.$product_id.'y3.png';
        }

        if (!@move_uploaded_file($fileinfo['tmp_name'],$destination)){
            return $this->error('文件上传失败！！');
        }else{
            if($num==1){
                $destination='C:/Users/Administrator/tp5.1/public/static/image/'.$product_id.'.png';
                $destination1='C:/Users/Administrator/tp5.1/public/static/image/'.$product_id.'.jpg';
                $this->compressedImage($destination,$destination1);
            }elseif($num==2){
                $destination='C:/Users/Administrator/tp5.1/public/static/image/'.$product_id.'y1.png';
                $destination1='C:/Users/Administrator/tp5.1/public/static/image/'.$product_id.'y1.jpg';
                $this->compressedImage($destination,$destination1);
            }elseif ($num==3){
                $destination='C:/Users/Administrator/tp5.1/public/static/image/'.$product_id.'y2.png';
                $destination1='C:/Users/Administrator/tp5.1/public/static/image/'.$product_id.'y2.jpg';
                $this->compressedImage($destination,$destination1);
            }elseif ($num==4){
                $destination='C:/Users/Administrator/tp5.1/public/static/image/'.$product_id.'y3.png';
                $destination1='C:/Users/Administrator/tp5.1/public/static/image/'.$product_id.'y3.jpg';
                $this->compressedImage($destination,$destination1);
            }
            return 1;
        }



    }




}
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/7
 * Time: 11:12
 */

namespace app\index\controller;


use app\index\validate\pwd;
use app\index\validate\PersonValidate;
use think\facade\Request;
use think\facade\Session;
use think\Model;
use function PHPSTORM_META\type;
use think\Controller;

class person extends Controller
{
    public function person(){
        $indexs=new Index();
        $res=$indexs->checklogin();
        $time=time();
        $y=date('y',$time);
        $m=date('m',$time);
        $d=date('d',$time);
        $weekarray=array("日","一","二","三","四","五","六");
        $dd=$weekarray[date("w",$time)];
        if($res) {
            $this->view->assign('y',$y);
            $this->view->assign('m',$m);
            $this->view->assign('d',$d);
            $this->view->assign('dd',$dd);
            return $this->view->fetch('person');
        }else{

        }
    }

    public function information(){
        session_start();
        $userid=\think\facade\Session::get('user_id');
        $res=model('person')->findimfor($userid);
        $this->view->assign('information',$res);
        return $this->view->fetch('information');
    }

    public function safety(){
        return $this->fetch();
    }

    public function pay(){
        $tp='tp_address';
        $user_id=Session::get('user_id');
        $list=model('shopcart')->find($user_id);
        $spend=0;
        $num=0;
        for ($i=0;$i<count($list);$i++){
            $spend=$spend+$list[$i]['cost']*$list[$i]['num'];
            $num=$num+$list[$i]['num'];
        }
        $res=model('person')->findany($tp,$user_id);
        if($res){
            $this->view->assign('pay',$res);
        }else{
            $res=[
                'name'=>'xx',
                'economize'=>'xx',
                'city'=>'xx',
                'country'=>'xx',
                'address'=>'暂时没有任何地址信息，请填写地址'
                ];
            $this->view->assign('pay',$res);
        }
        $this->view->assign('pays',$list);
        $this->view->assign('num',$num);
        $this->view->assign('spend',$spend);
        return $this->view->fetch('pay');
    }

    public function address(){
        $tp='tp_address';
        $user_id=Session::get('user_id');
        $res=model('person')->findany($tp,$user_id);
        if($res){
            $this->view->assign('address',$res);
        }else{
            $res=[
                'name'=>'xx',
                'economize'=>'xx',
                'city'=>'xx',
                'country'=>'xx',
                'address'=>'暂时没有任何地址信息，请填写地址'
            ];
            $this->view->assign('address',$res);
        }
        return $this->view->fetch('address');
    }

    public function password(){
        return $this->fetch();
    }

    public function idcard(){
        return $this->fetch();
    }

    public function order(){
        $indexs=new Index();
        $res=$indexs->checklogin();
        $state=0;
        if($res) {
            $id=Session::get('user_id');
            $res=model('order')->findorder($id,$state);
            $this->view->assign('order',$res);
            return $this->view->fetch('order');
        }else{

        }
    }
    public function change(){
        $indexs=new Index();
        $res=$indexs->checklogin();
        $state=2;
        if($res) {
            $id=Session::get('user_id');
            $res=model('order')->findorder($id,$state);
            $this->view->assign('change',$res);
            return $this->view->fetch('change');
        }else{

        }
    }

    public function email(){
        return $this->fetch();
    }

    public function bindphone(){
        return $this->fetch();
    }

    public function setpay(){
        return $this->fetch();
    }



    public function card(\think\Request $request){
        $date=$request->post();
        $id=$id=Session::get('user_id');
        $real_name=$date['real_name'];
        $id_cards=$date['idcards'];
        $tp='tp_address';
        if($real_name==''|$id_cards==''){
            return  $this->error('请将信息输入完整！！');
        }else{
            $var='/^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}([0-9]|X)$/';
            $res=preg_match($var,$id_cards);
            if (!$res){
                return $this->error('身份证格式错误');
            }else{
                $arr=[
                    'name'=>$real_name,
                    'id_card'=>$id_cards
                    ];
                $res=model('user')->chargeany($tp,$id,$arr);
                return $this->success('修改成功');
            }
        }
    }

    //设置支付密码
    public function setpays(\think\Request $request){
        $date=$request->post();
        $tp='tp_user';
        $login_pwd=$date['login_pwd'];
        $pay_pwd=$date['pay_pwd'];
        $pay_pwd2=md5($pay_pwd);
        $check_pwd=$date['check_pwd'];
        $id=Session::get('user_id');
        $arr=['id'=>$id];
        if($login_pwd==''|$pay_pwd==''|$check_pwd==''){
            return $this->error('登录密码和支付密码不能为空');
        }elseif($check_pwd!=$pay_pwd){
            return $this->error('两次密码输入不一致');
        }elseif (strlen($pay_pwd)!=6){
            return $this->error('支付密码应该要6位');
        } else{
            $res=model('user')->findany($arr);
            if(md5($login_pwd)==$res['password']){
                $arr3=['pay_pwd'=>$pay_pwd2];
                $ret=model('user')->chargeany($tp,$id,$arr3);
                return $this->success('设置支付密码成功');
            }else{
                return $this->error('登录密码错误');
            }
        }
    }


    //更改手机号码
    public function charge_phone(\think\Request $request){
        $date=$request->post();
        $tp='tp_user';
        $id=Session::get('user_id');
        $code=Session::pull('code');
        $arr1=['id'=>$id];
        $login_pwd=md5($date['login_pwd']);
        $check=$date['check'];
        $phone=$date['phone'];

        if($check==''|$login_pwd==''|$phone==''){
            return $this->error('您还有东西没有填写哦，请填写好再试');
        }elseif ($code!=$check){
            return $this->error('验证码有误，请重新填写');
        }else{
            $arr2=['iphone'=>$phone];
            $res=model('user')->findany($arr1);
            if($res['iphone']!=''){
                return $this->error('这个手机号已经被注册');
            }elseif($login_pwd!=$res['password']){
                return $this->error('登录密码错误');
            }else{
                $arr3=['iphone'=>$phone];
                $ree=model('user')->chargeany($tp,$id,$arr3);
                return $this->success('修改手机号成功');
            }
        }
    }

    //更改用户信息
    public function changeimfor(){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $time=time();
        $dates=[
            'id'=>$id,
            'name'=>$name,
            'update_time'=>$time,
        ];
        $ret=model('person')->checkname($name);
        if(boolval($ret['id'])){
            return $this->error('用户名重复');
        }else {
            $res = model('person')->addname($dates);
            return $res;
        }
    }


    //修改收货地址
    public function charge_address(\think\Request $request){
        $date=$request->post();
        $get_name=$date['get_name'];
        $get_phone=$date['get_phone'];
        $s=$date['userProvinceId'];
        $city=$date['userCityId'];
        $q=$date['userDistrictId'];
        $time=time();
        $place=$date['place'];
        $tp='tp_address';
        $arr=[
            'economize'=>$s,
            'city'=>$city,
            'country'=>$q,
            'address'=>$place,
            'name'=>$get_name,
            'phone'=>$get_phone,
            'update_time'=>$time

        ];
        $id=Session::get('user_id');
        if ($get_name==''|$get_phone==''|$place==''|$s==11000){
            return $this->error('请将信息填写完整！！');
        }else{
            $res=model('address')->chargeany($tp,$id,$arr);
            if ($res){
                return $this->success('修改成功');
            }else{
                return $this->error('修改失败');
            }
        }
    }

    public function check(){
        $name=$_POST['name'];
        if ($name!=''){
        $res=model('person')->checkname($name);
        if(boolval($res['id'])){
            $rq=1;
        }else{
            $rq=0;
        }
         return $rq;
    }
        return -1;
    }

    //修改邮箱
    public function chagemail(){
        $email=$_POST['chagemail'];
        $code1=Session::get('codes');
        $ids=Session::get('user_id');
        $code2=$_POST['codes'];
        $times=time();
        $res=model('person')->checknames($email);
        $date=[
          'id'=>$ids,
          'email'=>$email,
          'update_time'=>$times
        ];
        if($res){
            $this->error('该邮箱已经被注册，请更改邮箱再试！！');
        }elseif ($code1==$code2){
            $rqu=model('person')->chagemails($date);
            if($rqu){
                $this->success('邮箱修改成功');
                Session::clear('codes');
            }else{
                $this->error('邮箱修改错误');
            }
        }else{
            $this->error('验证码错误，请重新输入');
        }

    }

    //修改密码的函数
    public function chagepwd()
    {
        $id = Session::get('user_id');
        $pwd = md5($_POST['pwd']);
        $newpwd = $_POST['newpwd'];
        $checkpwd = $_POST['checkpwd'];
        $times = time();

        $res = model('user')->checkpwds($id, $pwd);  //判断密码是否正确

            if ($res) {
                if($newpwd=='') {
                    $this->error('新密码为空');
                }else{
                    if ($checkpwd == $newpwd) {
                        $pwds = md5($newpwd);
                        $ruq = model('person')->chagepwds($pwds, $id, $times);
                        if ($ruq) {
                            Session::clear();
                            $this->success('修改成功，请重新登录','/index/index/index');
                        }
                    } else {
                        $this->error('两次输入的密码还是不一致');
                    }
                }
            } else {
                $this->error('原密码错误');
            }
        }

}
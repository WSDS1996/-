<?php


namespace app\index\validate;


use think\Validate;

class Registerphone extends Validate
{
    protected $rule = [
        'iphonenum'=>'require',
        'checknum'=>'require',
        'pwds'=>'require',
    ];

    /**
     * 定义错误信息
     * 格式：'字段名.规则名'	=>	'错误信息'
     *
     * @var array
     */
    protected $message = [
        'registerpwd.require'=>'用户名不能为空',
        'checkpwd.require'=>'验证码不能为空',
        'pwds.require'=>'密码不能为空',
    ];
}
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/2/29
 * Time: 20:54
 */

namespace app\index\validate;


use think\Validate;

class RegisterValidate extends  Validate
{

    protected $rule = [
        'registerpwd'=>'require',
        'checkpwd'=>'require',
    ];

    /**
     * 定义错误信息
     * 格式：'字段名.规则名'	=>	'错误信息'
     *
     * @var array
     */
    protected $message = [
        'registerpwd'=>'密码不能为空',
        'checkpwd.require'=>'两次输入的密码不一致',
    ];
}
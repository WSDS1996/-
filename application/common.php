<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

use extend\PHPMailer\PHPMailer;
use think\facade\Session;

require '../extend/PHPMailer/Exception.php';
require '../extend/PHPMailer/PHPMailer.php';
require '../extend/PHPMailer/SMTP.php';

function send_code_to_email($email,$code,$name)
{
    $toemail = $email;//定义收件人的邮箱
    $sendmail = '424195339@qq.com'; //发件人邮箱
    $sendmailpswd = "iggflodopgemcbaa"; //客户端授权密码,而不是邮箱的登录密码，就是手机发送短信之后弹出来的一长串的密码
    $send_name = '铃铛图书网';// 设置发件人信息，如邮件格式说明中的发件人，
    $to_name = $name;//设置收件人信息，如邮件格式说明中的收件人
    $mail = new PHPMailer();
    $mail->isSMTP();// 使用SMTP服务
    $mail->CharSet = "utf8";// 编码格式为utf8，不设置编码的话，中文会出现乱码
    $mail->Host = "SMTP.qq.com";// 发送方的SMTP服务器地址
    $mail->SMTPAuth = true;// 是否使用身份验证
    $mail->Username = $sendmail;//// 发送方的
    $mail->Password = $sendmailpswd;//客户端授权密码,而不是邮箱的登录密码！
    $mail->SMTPSecure = "ssl";// 使用ssl协议方式
    $mail->Port = 465;//  sina端口110或25） //qq  465 587
    $mail->setFrom($sendmail, $send_name);// 设置发件人信息，如邮件格式说明中的发件人，
    $mail->addAddress($toemail, $to_name);// 设置收件人信息，如邮件格式说明中的收件人，
    $mail->addReplyTo($sendmail, $send_name);// 设置回复人信息，指的是收件人收到邮件后，如果要回复，回复邮件将发送到的邮箱地址
    $mail->Subject = "安全验证码！";// 邮件标题
    //$code=$code;
    // session("code",$code);
    //return $code."----".session("code");
    $mail->Body = "欢迎使用铃铛图书网，您的验证码是:".$code.",有效期5分钟。任何人索取确认码均为危险行为，为了您的资金安全切勿泄露！" .date('Y-m-d H:i:s');// 邮件正文
    //$mail->AltBody = "This is the plain text纯文本";// 这个是设置纯文本方式显示的正文内容，如果不支持Html方式，就会用到这个，基本无用
    if (!$mail->send()) {

//        $this->return_msg(400, $mail->ErrorInfo);//返回数据格式自己定义的一个函数
        return 0;

        } else {
//        $this->return_msg(200, "验证码已经发送，请注意查收");
        return 1;
        }
}

function sends($iphone,$code){
    $host = "http://feginesms.market.alicloudapi.com";
    $path = "/codeNotice";
    $method = "GET";
    $appcode = "fd1831a1dc1b4a03b4286df2ff6e4a53";
    $headers = array();
    array_push($headers, "Authorization:APPCODE " . $appcode);
    $querys = "param=".$code."&phone=".$iphone."&sign=1&skin=1";
    $bodys = "";
    $url = $host . $path . "?" . $querys;

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_FAILONERROR, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HEADER, false);
    //curl_setopt($curl, CURLOPT_HEADER, true); 如不输出json, 请打开这行代码，打印调试头部状态码。
    //状态码: 200 正常；400 URL无效；401 appCode错误； 403 次数用完； 500 API网管错误
    if (1 == strpos("$".$host, "https://"))
    {
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    }
    $out_put = curl_exec($curl);
    echo $out_put;
}


?>
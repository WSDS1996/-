<?php /*a:1:{s:68:"C:\Users\Administrator\tp5.1\application\admin\view\login\login.html";i:1585808556;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>后台登录</title>
    <meta name="author" content="DeathGhost" />
    <link rel="stylesheet" type="text/css" href="/static/admin/css/style.css" />
    <style>
        body{height:100%;background:#16a085;overflow:hidden;}
        canvas{z-index:-1;position:absolute;}
    </style>
    <script src="/static/admin/js/jquery.js"></script>
    <script src="/static/admin/js/verificationNumbers.js"></script>
    <script src="/static/admin/js/Particleground.js"></script>
    <script>
        $(document).ready(function() {
            //粒子背景特效
            $('body').particleground({
                dotColor: '#5cbdaa',
                lineColor: '#5cbdaa'
            });
            //验证码
            createCode();
            //测试提交，对接程序删除即可
            $(".submit_btn").click(function(){
                validate()
                location.href="/admin/login/index";
            });
        });
    </script>
</head>
<body>
<dl class="admin_login">
    <dt>
        <strong>站点后台管理系统</strong>
        <em>Management System</em>
    </dt>
    <form method="post" action="/admin/login/index">
    <dd class="user_icon">
        <input type="text" name="name" placeholder="账号" class="login_txtbx"/>
    </dd>
    <dd class="pwd_icon">
        <input type="password" name="pwd" placeholder="密码" class="login_txtbx"/>
    </dd>
    <dd class="val_icon">
        <div class="checkcode">
            <input type="text" id="J_codetext" placeholder="验证码" maxlength="4" class="login_txtbx">
            <canvas class="J_codeimg" id="myCanvas" onclick="createCode()">对不起，您的浏览器不支持canvas，请下载最新版浏览器!</canvas>
        </div>
        <input type="button" name="checknum" value="验证码核验" class="ver_btn" onClick="validate();">
    </dd>
    <dd>
        <input type="submit" value="立即登录" class="submit_btn"/>
    </dd>
    </form>
    <dd>
        <p>© 2020-2120 铃铛图书网 版权所有</p>
        <p>长B2-20200224-xx</p>
    </dd>
</dl>
</body>
</html>

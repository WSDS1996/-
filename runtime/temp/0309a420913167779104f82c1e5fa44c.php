<?php /*a:1:{s:68:"C:\Users\Administrator\tp5.1\application\index\view\index\index.html";i:1588761911;}*/ ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>登录</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <!--<meta http-equiv="Cache-Control" content="no-siteapp" />-->

    <link rel="stylesheet" href="/static/AmazeUI-2.4.2/assets/css/amazeui.css" />
    <link href="/static/css/dlstyle.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/static/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
</head>

<body>

<div class="login-boxtitle">
    <a href="/index/login/login"><img alt="logo" src="/static/images/logobig.png" /></a>
</div>

<div class="login-banner">
    <div class="login-main">
        <div class="login-banner-bg"><span></span><img src="/static/images/big.jpg" /></div>
        <div class="login-box">

            <h3 class="title">登录书城</h3>

            <div class="clear"></div>

            <div class="login-form">
                <form action="/index/index/login" method="post">
                    <div class="user-name">
                        <label for="user"><i class="am-icon-user"></i></label>
                        <input type="text" name="uname" id="uname" placeholder="邮箱/手机/用户名">
                    </div>
                    <div class="user-pass">
                        <label for="password"><i class="am-icon-lock"></i></label>
                        <input type="password" name="pwd" id="pwd" placeholder="请输入密码">
                        <span id="checkname" style="color: red;text-align:center;float:left"></span>
                    </div>
                    <div class="am-cf">
                        <input type="submit" name="" value="登 录"  class="am-btn am-btn-primary am-btn-sm">
                    </div>
                </form>
            </div>

            <div class="login-links">
                <label for="remember-me"><input id="remember-me" type="checkbox">记住密码</label>
                <a href="#" class="am-fr">忘记密码</a>
                <a href="/index/register/register" class="zcnext am-fr am-btn-default">注册</a>
                <br />
            </div>

            <div class="partner">
                <h3>合作账号</h3>
                <div class="am-btn-group">
                    <li><a href="#"><i class="am-icon-qq am-icon-sm"></i><span>QQ登录</span></a></li>
                    <li><a href="#"><i class="am-icon-weibo am-icon-sm"></i><span>微博登录</span> </a></li>
                    <li><a href="#"><i class="am-icon-weixin am-icon-sm"></i><span>微信登录</span> </a></li>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="footer ">
    <div class="footer-hd ">
        <p>
            <a href="# ">黄山一石科技</a>
            <b>|</b>
            <a href="# ">商城首页</a>
            <b>|</b>
            <a href="# ">支付宝</a>
            <b>|</b>
            <a href="# ">物流</a>
        </p>
    </div>
    <div class="footer-bd ">
        <p>
            <a href="# ">关于公司</a>
            <a href="# ">合作伙伴</a>
            <a href="# ">联系我们</a>
            <a href="# ">网站地图</a>
            <em>© 2015-2025 huang314.cn 黄山一石版权所有</em>
        </p>
    </div>
</div>

<script>
    var checkname=document.getElementById('uname');
    checkname.onblur=function () {
        var name=checkname.value;
        if(name==''){
           document.getElementById('checkname').innerText='用户名不能为空';
        }
    }

    var checkpwd=document.getElementById('pwd');
    checkpwd.onblur=function () {
        var pwd=checkpwd.value;
        if(pwd==''){
            alert("密码不能为空");
        }
    }





    // var btn=document.getElementById(12);
    // btn.onclick=function () {
    //     alert(123);
    // }

</script>
</body>

</html>
<?php /*a:2:{s:74:"C:\Users\Administrator\tp5.1\application\index\view\shopcart\successs.html";i:1585638504;s:70:"C:\Users\Administrator\tp5.1\application\index\view\common\header.html";i:1588761708;}*/ ?>
<!DOCTYPE>
<html>

<head>
    <style>

        /*分页*/

        .pagination {}

        .pagination li {display: inline-block;margin-right: -1px;padding: 5px;border: 1px solid #e2e2e2;min-width: 20px;text-align: center;}

        .pagination li.active {background: #009688;color: #fff;border: 1px solid #009688;}

        .pagination li a {display: block;text-align: center;}

        #divcss5{margin:0 auto;width:300px;height:30px}

    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>首页</title>

    <link href="/static/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
    <link href="/static/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css" />

    <link href="/static/basic/css/demo.css" rel="stylesheet" type="text/css" />

    <link href="/static/css/hmstyle.css" rel="stylesheet" type="text/css"/>
    <link href="/static/css/skin.css" rel="stylesheet" type="text/css" />
    <script src="/static/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
    <script src="/static/AmazeUI-2.4.2/assets/js/amazeui.min.js"></script>

</head>

<body>
<div class="hmtop">
    <!--顶部导航条 -->
    <div class="am-container header">
        <ul class="message-l">
            <div class="topMessage">
                <div class="menu-hd" id="charge">
                    <?php if(app('session')->get('user_id')): ?>
                    <a href="" target="_top" class="h" >欢迎登录铃铛图书网</a>
                    <?php else: ?>
                    <a href="/index/index/index" target="_top" class="h">亲，请登录</a>
                    <a href="/index/register/register" target="_top">免费注册</a>
                    <?php endif; ?>
                </div>
            </div>
        </ul>
        <ul class="message-r">
            <div class="topMessage my-shangcheng">
                <div class="menu-hd MyShangcheng">
                    <?php if(app('session')->get('user_id')): ?>
                    <a href="/index/person/person" target="_top"><i class="am-icon-user am-icon-fw"></i><?php echo htmlentities(app('session')->get('user_name')); ?></a>
                    <?php else: ?>
                    <a href="/index/person/person" target="_top"><i class="am-icon-user am-icon-fw"></i>会员中心</a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="topMessage home">
                <div class="menu-hd"><a href="/index/person/order" target="_top" class="h">我的御书房</a></div>
            </div>
            <div class="topMessage mini-cart">
                <div class="menu-hd">
                    <a id="mc-menu-hd" href="/index/shopcart/shopcart" target="_top"><i class="am-icon-shopping-cart  am-icon-fw"></i><span>购物车</span><strong id="J_MiniCartNum" class="h">0</strong></a>
                </div>
            </div>
            <div class="topMessage favorite">
                <div class="menu-hd">
                    <?php if(app('session')->get('user_id')): ?>
                    <a href="#" target="_top"><i class="am-icon-heart am-icon-fw"></i><span>积分兑换</span></a>
                    <a href="/index/login/clear" target="_top"><i class=""></i>注销</a>
                    <?php else: ?>
                    <a href="#" target="_top"><i class="am-icon-heart am-icon-fw"></i><span>积分兑换</span></a>
                    <?php endif; ?>
                </div>
        </ul>
    </div>

    <!--悬浮搜索框-->

    <div class="nav white">
        <div class="logo"><a href="/index/index/index"><img src="/static/images/logo.png" /></a> </div>
        <div class="logoBig">
            <li><a href="/index/login/login"><img src="/static/images/logobig.png" /></a></li>
        </div>

        <div class="search-bar pr">
            <a name="index_none_header_sysc" href="#"></a>
            <form action="/index/introduction/search" method="post">
                <input id="searchInput" name="index_none_header_sysc" type="text" placeholder="搜索" autocomplete="off">
                <input id="ai-topsearch" class="submit am-btn" value="搜索" index="1" type="submit">
            </form>
        </div>
    </div>

    <div class="clear"></div>
</div>
    <link rel="stylesheet"  type="text/css" href="/static//AmazeUI-2.4.2/assets/css/amazeui.css"/>
    <link href="/static//AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
    <link href="/static//basic/css/demo.css" rel="stylesheet" type="text/css" />

    <link href="/static//css/sustyle.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/static//basic/js/jquery-1.7.min.js"></script>


<div class="clear"></div>



<div class="take-delivery">
    <div class="status">
        <h2>您已成功付款</h2>
        <div class="successInfo">
            <div class="option">
                <span class="info">您可以</span>
                <a href="/index/person/order" class="J_MakePoint">查看<span>已买到的宝贝</span></a>
                <a href="/index/login/login" class="J_MakePoint">返回<span>商城首页</span></a>
            </div>
        </div>
    </div>
</div>


<div class="footer" >
    <div class="footer-hd">
        <p>
            <a href="#">恒望科技</a>
            <b>|</b>
            <a href="#">商城首页</a>
            <b>|</b>
            <a href="#">支付宝</a>
            <b>|</b>
            <a href="#">物流</a>
        </p>
    </div>
    <div class="footer-bd">
        <p>
            <a href="#">关于恒望</a>
            <a href="#">合作伙伴</a>
            <a href="#">联系我们</a>
            <a href="#">网站地图</a>
            <em>© 2015-2025 Hengwang.com 版权所有. 更多模板 <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></em>
        </p>
    </div>
</div>


</body>
</html>

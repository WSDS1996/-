<?php /*a:4:{s:70:"C:\Users\Administrator\tp5.1\application\index\view\person\safety.html";i:1585197090;s:69:"C:\Users\Administrator\tp5.1\application\index\view\public\bases.html";i:1583568207;s:70:"C:\Users\Administrator\tp5.1\application\index\view\public\header.html";i:1588761708;s:69:"C:\Users\Administrator\tp5.1\application\index\view\public\foots.html";i:1588755984;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">

    <title>个人中心</title>

    <link href="/static/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
    <link href="/static/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">
    <link href="/static/css/personal.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://www.huangwx.cn/css/sweetalert.css">
    <script type="text/javascript" src="https://www.huangwx.cn/js/sweetalert-dev.js"></script>

</head>

<body>
<!--头 -->
<header>
    <article>
        <div class="mt-logo">
            <!--顶部导航条 -->
            <div class="am-container header">
                <ul class="message-l">
                    <div class="topMessage">
                        <div class="menu-hd">
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
                    <div class="topMessage home">
                        <div class="menu-hd">
                            <?php if(app('session')->get('user_id')): ?>
                            <a href="/index/person/person" target="_top"><i class="am-icon-user am-icon-fw"></i><?php echo htmlentities(app('session')->get('user_name')); ?></a>
                            <?php else: ?>
                            <a href="/index/person/person" target="_top"><i class="am-icon-user am-icon-fw"></i>会员中心</a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="topMessage my-shangcheng">
                        <div class="menu-hd MyShangcheng">
                            <a href="#" target="_top" class="h">我的御书房</a>
                        </div>
                    </div>
                    <div class="topMessage mini-cart">
                        <div class="menu-hd"><a id="mc-menu-hd" href="#" target="_top"><i class="am-icon-shopping-cart  am-icon-fw"></i><span>购物车</span><strong id="J_MiniCartNum" class="h">0</strong></a></div>
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
                <div class="logoBig">
                    <li><a href="/index/login/login"><img src="/static/images/logobig.png" /></a></li>
                </div>

                <div class="search-bar pr">
                    <a name="index_none_header_sysc" href=""></a>
                    <form action="/index/introduction/search" method="post">
                        <input id="searchInput" name="index_none_header_sysc" type="text" placeholder="搜索" autocomplete="off">
                        <input id="ai-topsearch" class="submit am-btn" value="搜索" index="1" type="submit">
                    </form>
                </div>
            </div>

            <div class="clear"></div>
        </div>
        </div>
    </article>
</header>

<div class="nav-table">
    <div class="long-title"><span class="all-goods">全部分类</span></div>
    <div class="nav-cont">
        <ul>
            <li class="index"><a href="/index/login/login">首页</a></li>
            <li class="qc"><a href="#">闪购</a></li>
            <li class="qc"><a href="#">限时抢</a></li>
            <li class="qc"><a href="#">团购</a></li>
            <li class="qc last"><a href="#">大包装</a></li>
        </ul>
        <div class="nav-extra">
            <i class="am-icon-user-secret am-icon-md nav-user"></i><b></b>我的福利
            <i class="am-icon-angle-right" style="padding-left: 10px;"></i>
        </div>
    </div>
</div>


<link href="/static/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
<link href="/static/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">

<link href="/static/css/personal.css" rel="stylesheet" type="text/css">
<link href="/static/css/infstyle.css" rel="stylesheet" type="text/css">
<b class="line"></b>
<div class="center">
    <div class="col-main">
        <div class="main-wrap">

            <!--标题 -->
            <div class="user-safety">
                <div class="am-cf am-padding">
                    <div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">账户安全</strong> / <small>Set&nbsp;up&nbsp;Safety</small></div>
                </div>
                <hr/>

                <!--头像 -->
                <div class="user-infoPic">

                    <div class="filePic">
                        <img class="am-circle am-img-thumbnail" src="/static/images/getAvatar.do.jpg" alt="" />
                    </div>

                    <p class="am-form-help">头像</p>

                    <div class="info-m">
                        <div><b>用户名：<i>小叮当</i></b></div>
                        <div class="u-level">
									<span class="rank r2">
							             <s class="vip1"></s><a class="classes" href="#">铜牌会员</a>
						            </span>
                        </div>
                        <div class="u-safety">
                            <a href="safety.html">
                                账户安全
                                <span class="u-profile"><i class="bc_ee0000" style="width: 60px;" width="0">60分</i></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="check">
                    <ul>
                        <li>
                            <i class="i-safety-lock"></i>
                            <div class="m-left">
                                <div class="fore1">登录密码</div>
                                <div class="fore2"><small>为保证您购物安全，建议您定期更改密码以保护账户安全。</small></div>
                            </div>
                            <div class="fore3">
                                <a href="password.html">
                                    <div class="am-btn am-btn-secondary">修改</div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <i class="i-safety-wallet"></i>
                            <div class="m-left">
                                <div class="fore1">支付密码</div>
                                <div class="fore2"><small>启用支付密码功能，为您资产账户安全加把锁。</small></div>
                            </div>
                            <div class="fore3">
                                <a href="setpay.html">
                                    <div class="am-btn am-btn-secondary">立即启用</div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <i class="i-safety-iphone"></i>
                            <div class="m-left">
                                <div class="fore1">手机验证</div>
                                <div class="fore2"><small>您验证的手机若已丢失或停用，请立即更换</small></div>
                            </div>
                            <div class="fore3">
                                <a href="bindphone.html">
                                    <div class="am-btn am-btn-secondary">换绑</div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <i class="i-safety-mail"></i>
                            <div class="m-left">
                                <div class="fore1">邮箱验证</div>
                                <div class="fore2"><small>您验证的邮箱可用于快速找回登录密码</small></div>
                            </div>
                            <div class="fore3">
                                <a href="email.html">
                                    <div class="am-btn am-btn-secondary">换绑</div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <i class="i-safety-idcard"></i>
                            <div class="m-left">
                                <div class="fore1">实名认证</div>
                                <div class="fore2"><small>用于提升账号的安全性和信任级别，认证后不能修改认证信息。</small></div>
                            </div>
                            <div class="fore3">
                                <a href="idcard.html">
                                    <div class="am-btn am-btn-secondary">认证</div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        


<!--底部-->
<div class="footer">
    <div class="footer-hd">
        <p>
            <a href="#">黄山一石科技</a>
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
            <a href="#">关于黄山一石科技</a>
            <a href="#">合作伙伴</a>
            <a href="#">联系我们</a>
            <a href="#">网站地图</a>
            <em>© 2015-2025 huang314.cn 版权所有- Collect from 黄山一石科技</em>
        </p>
    </div>
</div>

</div>

<aside class="menu">
    <ul>
        <li class="person active">
            <a href="/index/person/person">个人中心</a>
        </li>
        <li class="person">
            <a href="/index/person/information">个人资料</a>
            <ul>
                <li> <a href="/index/person/information">个人信息</a></li>
                <li> <a href="/index/person/safety">安全设置</a></li>
                <li> <a href="/index/person/address">收货地址</a></li>
            </ul>
        </li>
        <li class="person">
            <a href="/index/person/order">我的交易</a>
            <ul>
                <li><a href="/index/person/order">订单管理</a></li>
                <li> <a href="/index/person/change">退款售后</a></li>
            </ul>
        </li>
        <li class="person">
            <a href="#">我的资产</a>
            <ul>
                <li> <a href="" onclick="alert('暂时没有优惠卷业务');">优惠券 </a></li>
                <li> <a href="" onclick="alert('暂时没有红包业务');">红包</a></li>
            </ul>
        </li>

        <li class="person">
            <a href="">友商链接</a>
            <ul>
                <li> <a href="https://www.jingdong.com">京东</a></li>
                <li> <a href="https://www.tianmao.com">天猫</a></li>
                <li> <a href="https://www.vip.com">唯品会</a></li>
            </ul>
        </li>

    </ul>

</aside>
</div>
</body>

</html>
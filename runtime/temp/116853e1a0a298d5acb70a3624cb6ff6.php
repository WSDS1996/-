<?php /*a:4:{s:70:"C:\Users\Administrator\tp5.1\application\index\view\person\person.html";i:1585627449;s:69:"C:\Users\Administrator\tp5.1\application\index\view\public\bases.html";i:1583568207;s:70:"C:\Users\Administrator\tp5.1\application\index\view\public\header.html";i:1588761708;s:69:"C:\Users\Administrator\tp5.1\application\index\view\public\foots.html";i:1588755984;}*/ ?>
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


<link href="/static/css/systyle.css" rel="stylesheet" type="text/css">
<b class="line"></b>
<div class="center">
    <div class="col-main">
        <div class="main-wrap">
            <div class="wrap-left">
                <div class="wrap-list">
                    <div class="m-user">
                        <!--个人信息 -->
                        <div class="m-bg"></div>
                        <div class="m-userinfo">
                            <div class="m-baseinfo">
                                <?php if(app('session')->get('user_id')): ?>
                                <a href="information.html">
                                    <img src="/static/images/getAvatar.do.jpg">
                                </a>
                                <em class="s-name"><?php echo htmlentities(app('session')->get('user_name')); ?><span class="vip1"></em>
                                <div class="s-prestige am-btn am-round">
                                    </span>会员福利</div>
                                <?php else: ?>
                                <a href="information.html">
                                    <img src="/static/images/getAvatar.do.jpg">
                                </a>
                                <em class="s-name">(小叮当)<span class="vip1"></em>
                                <div class="s-prestige am-btn am-round">
                                    </span>会员福利</div>
                                <?php endif; ?>
                            </div>
                            <div class="m-right">
                                <div class="m-new">
                                    <a href="order.html"><i class="am-icon-bell-o"></i>快递消息</a>
                                </div>
                                <div class="m-address">
                                    <a href="address.html" class="i-trigger">我的收货地址</a>
                                </div>
                            </div>
                        </div>

                        <!--个人资产-->
                        <div class="m-userproperty">
                            <div class="s-bar">
                                <i class="s-icon"></i>个人资产
                            </div>
                            <p class="m-bonus">
                                <a href=" " onclick="alert('暂时没有红包业务');">
                                    <i><img src="/static/images/bonus.png"/></i>
                                    <span class="m-title">红包</span>
                                    <em class="m-num">0</em>
                                </a>
                            </p>
                            <p class="m-coupon">
                                <a href=" " onclick="alert('暂时没有优惠卷业务');">
                                    <i><img src="/static/images/coupon.png"/></i>
                                    <span class="m-title">优惠券</span>
                                    <em class="m-num">0</em>
                                </a>
                            </p>
                            <p class="m-bill">
                                <a href=" " onclick="alert('暂时没有大礼包业务');">
                                    <i><img src="/static/images/wallet.png"/></i>
                                    <span class="m-title">大礼包</span>
                                    <em class="m-num">0</em>
                                </a>
                            </p>
                            <p class="m-big">
                                <a href=" " onclick="swal('暂时不支持签到业务');">
                                    <i><img src="/static/images/day-to.png"/></i>
                                    <span class="m-title">签到有礼</span>
                                </a>
                            </p>
                            <p class="m-big">
                                <a href=" " onclick="swal('我们承若72小时极速发货');">
                                    <i><img src="/static/images/72h.png"/></i>
                                    <span class="m-title">72小时发货</span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="box-container-bottom"></div>

                    <!--订单 -->
                    <div class="m-order">
                        <div class="s-bar">
                            <i class="s-icon"></i>我的订单
                            <a class="i-load-more-item-shadow" href="order.html">全部订单</a>
                        </div>
                        <ul>
                            <li><a href="/index/shopcart/shopcart"><i><img src="/static/images/pay.png"/></i><span>购物车</span></a></li>
                            <li><a href="order.html"><i><img src="/static/images/send.png"/></i><span>待发货<em class="m-num">1</em></span></a></li>
                            <li><a href="order.html"><i><img src="/static/images/receive.png"/></i><span>待收货</span></a></li>
                            <li><a href="order.html"><i><img src="/static/images/comment.png"/></i><span>待评价<em class="m-num">3</em></span></a></li>
                            <li><a href="change.html"><i><img src="/static/images/refund.png"/></i><span>退换货</span></a></li>
                        </ul>
                    </div>
                    <!--九宫格-->
                    <div class="user-patternIcon">
                        <div class="s-bar">
                            <i class="s-icon"></i>我的常用
                        </div>
                        <ul>

                            <a href="/static/home/shopcart.html"><li class="am-u-sm-4"><i class="am-icon-shopping-basket am-icon-md"></i><img src="/static/images/iconbig.png"/><p>购物车</p></li></a>
                            <a href="collection.html"><li class="am-u-sm-4"><i class="am-icon-heart am-icon-md"></i><img src="/static/images/iconsmall1.png"/><p>我的收藏</p></li></a>
                            <a href="/static/home/home.html"><li class="am-u-sm-4"><i class="am-icon-gift am-icon-md"></i><img src="/static/images/iconsmall0.png"/><p>为你推荐</p></li></a>
                            <a href="comment.html"><li class="am-u-sm-4"><i class="am-icon-pencil am-icon-md"></i><img src="/static/images/iconsmall3.png"/><p>好评宝贝</p></li></a>
                            <a href="foot.html"><li class="am-u-sm-4"><i class="am-icon-clock-o am-icon-md"></i><img src="/static/images/iconsmall2.png"/><p>我的足迹</p></li></a>
                        </ul>
                    </div>
                    <!--物流 -->
                    <div class="m-logistics">

                        <div class="s-bar">
                            <i class="s-icon"></i>我的物流
                        </div>
                        <div class="s-content">
                            <ul class="lg-list"><li class="lg-item">快递小哥正在全力奔向您的城市！！！</li></ul>
<!--                            <ul class="lg-list">-->

<!--                                <li class="lg-item">-->
<!--                                    <div class="item-info">-->
<!--                                        <a href="#">-->
<!--                                            <img src="/static/images/65.jpg_120x120xz.jpg" alt="抗严寒冬天保暖隔凉羊毛毡底鞋垫超薄0.35厘米厚吸汗排湿气舒适">-->
<!--                                        </a>-->

<!--                                    </div>-->
<!--                                    <div class="lg-info">-->

<!--                                        <p>快件已从总部发出</p>-->
<!--                                        <time>2020-2-20 17:58:05</time>-->

<!--                                        <div class="lg-detail-wrap">-->
<!--                                            <a class="lg-detail i-tip-trigger" href="logistics.html">查看物流明细</a>-->
<!--                                            <div class="J_TipsCon hide">-->
<!--                                                <div class="s-tip-bar">中通快递&nbsp;&nbsp;&nbsp;&nbsp;运单号：373269427686</div>-->
<!--                                                <div class="s-tip-content">-->
<!--                                                    <ul>-->
<!--                                                        <li>快件已从 义乌 发出2015-12-20 17:58:05</li>-->
<!--                                                        <li>义乌 的 义乌总部直发车 已揽件2015-12-20 17:54:49</li>-->
<!--                                                        <li class="s-omit"><a data-spm-anchor-id="a1z02.1.1998049142.3" target="_blank" href="#">··· 查看全部</a></li>-->
<!--                                                        <li>您的订单开始处理2015-12-20 08:13:48</li>-->

<!--                                                    </ul>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->

<!--                                    </div>-->
<!--                                    <div class="lg-confirm">-->
<!--                                        <a class="i-btn-typical" href="#">确认收货</a>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <div class="clear"></div>-->

<!--                                <li class="lg-item">-->
<!--                                    <div class="item-info">-->
<!--                                        <a href="#">-->
<!--                                            <img src="/static/images/88.jpg_120x120xz.jpg" alt="礼盒袜子女秋冬 纯棉袜加厚 女式中筒袜子 韩国可爱 女袜 女棉袜">-->
<!--                                        </a>-->

<!--                                    </div>-->
<!--                                    <div class="lg-info">-->

<!--                                        <p>已签收,签收人是青年城签收</p>-->
<!--                                        <time>2015-12-19 15:35:42</time>-->

<!--                                        <div class="lg-detail-wrap">-->
<!--                                            <a class="lg-detail i-tip-trigger" href="logistics.html">查看物流明细</a>-->
<!--                                            <div class="J_TipsCon hide">-->
<!--                                                <div class="s-tip-bar">天天快递&nbsp;&nbsp;&nbsp;&nbsp;运单号：666287461069</div>-->
<!--                                                <div class="s-tip-content">-->
<!--                                                    <ul>-->

<!--                                                        <li>已签收,签收人是青年城签收2015-12-19 15:35:42</li>-->
<!--                                                        <li>【光谷关山分部】的派件员【关山代派】正在派件 电话:*2015-12-19 14:27:28</li>-->
<!--                                                        <li class="s-omit"><a data-spm-anchor-id="a1z02.1.1998049142.7" target="_blank" href="//wuliu.taobao.com/user/order_detail_new.htm?spm=a1z02.1.1998049142.7.8BJBiJ&amp;trade_id=1479374251166800&amp;seller_id=1651462988&amp;tracelog=yimaidaologistics">··· 查看全部</a></li>-->
<!--                                                        <li>您的订单开始处理2015-12-17 14:27:50</li>-->

<!--                                                    </ul>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->

<!--                                    </div>-->
<!--                                    <div class="lg-confirm">-->
<!--                                        <a class="i-btn-typical" href="#">确认收货</a>-->
<!--                                    </div>-->
<!--                                </li>-->

<!--                            </ul>-->

                        </div>

                    </div>


                </div>
            </div>
            <div class="wrap-right">

                <!-- 日历-->
                <div class="day-list">
                    <div class="s-bar">
                        <a class="i-history-trigger s-icon" href="#"></a>我的日历
                        <a class="i-setting-trigger s-icon" href="#"></a>
                    </div>
                    <div class="s-care s-care-noweather">
                        <div class="s-date">
                            <em><?php echo htmlentities($d); ?></em>
                            <span>星期<?php echo htmlentities($dd); ?></span>
                            <span>20<?php echo htmlentities($y); ?>年<?php echo htmlentities($m); ?>月</span>
                        </div>
                    </div>
                </div>
                <!--新品 -->
                <div class="new-goods">
                    <div class="s-bar">
                        <i class="s-icon"></i>今日新品
                        <a class="i-load-more-item-shadow">爆红新品</a>
                    </div>
                    <div class="new-goods-info">
                        <a class="shop-info" href="/index/introduction/introduction?id=2" target="_blank">
                            <div class="face-img-panel">
                                <img src="/static/image/2.jpg" alt="">
                            </div>
                            <span class="new-goods-num ">4</span>
                            <span class="shop-title">三国演义</span>
                        </a>
                        <a class="follow " target="_blank" href="/index/introduction/introduction?id=2">查看详情</a>
                    </div>
                </div>

                <!--热卖推荐 -->
                <div class="new-goods">
                    <div class="s-bar">
                        <i class="s-icon"></i>热卖推荐
                    </div>
                    <div class="new-goods-info">
                        <a class="shop-info" href="/index/introduction/introduction?id=3" target="_blank">
                            <div >
                                <img src="/static/image/3.jpg" alt="">
                            </div>
                            <span class="one-hot-goods">￥38.8</span>
                        </a>
                    </div>
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
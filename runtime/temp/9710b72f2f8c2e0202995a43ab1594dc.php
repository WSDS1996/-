<?php /*a:4:{s:70:"C:\Users\Administrator\tp5.1\application\index\view\person\change.html";i:1585638017;s:69:"C:\Users\Administrator\tp5.1\application\index\view\public\bases.html";i:1583568207;s:70:"C:\Users\Administrator\tp5.1\application\index\view\public\header.html";i:1588761708;s:69:"C:\Users\Administrator\tp5.1\application\index\view\public\foots.html";i:1588755984;}*/ ?>
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


<style>
    #divcss5{margin:0 auto;border:1px solid #000;width:300px;height:100px}
    ul.pagination {display: inline-block;padding: 20px;margin: 0;text-align: center}
    .pagination a{text-decoration: none;margin-right: 0px!important; text-align: center}
    ul.pagination li {display: inline;align-content: center}
    .disabled ,.pagination  .active, .pagination li a {color: black; float: left;padding: 8px 16px;text-decoration: none;transition: background-color .3s;border: 1px solid #ddd; margin: 0 4px;}
    .pagination .active{background-color: #4CAF50;color: white;border: 1px solid #4CAF50;}
    .disabled{background-color: rgba(236, 236, 236, 0.78);}
    ul.pagination  a.active {background-color: #4CAF50;color: white;border: 1px solid #4CAF50;}
    ul.pagination li a:hover:not(.active) {background-color: #ddd;}
</style>
<link href="/static/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
<link href="/static/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">

<link href="/static/css/personal.css" rel="stylesheet" type="text/css">
<link href="/static/css/orstyle.css" rel="stylesheet" type="text/css">

<script src="/static/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
<script src="/static/AmazeUI-2.4.2/assets/js/amazeui.js"></script>
<b class="line"></b>
<div class="center">
    <div class="col-main">
        <div class="main-wrap">

            <div class="user-order">

                <!--标题 -->
                <div class="am-cf am-padding">
                    <div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">退换货管理</strong> / <small>Change</small></div>
                </div>
                <hr/>

                <div class="am-tabs am-tabs-d2 am-margin" data-am-tabs>

                    <ul class="am-avg-sm-2 am-tabs-nav am-nav am-nav-tabs">
                        <li><a href="#tab2">售后管理</a></li>

                    </ul>

                    <div class="am-tabs-bd">
                        <div class="am-tab-panel am-fade" id="tab2">
                            <div class="order-top">
                                <div class="th th-item">
                                    <td class="td-inner">商品</td>
                                </div>
                                <div class="th th-orderprice th-price">
                                    <td class="td-inner">交易金额</td>
                                </div>
                                <div class="th th-changeprice th-price">
                                    <td class="td-inner">退款金额</td>
                                </div>
                                <div class="th th-status th-moneystatus">
                                    <td class="td-inner">交易状态</td>
                                </div>
                                <div class="th th-change th-changebuttom">
                                    <td class="td-inner">交易操作</td>
                                </div>
                            </div>
                            <?php if(is_array($change) || $change instanceof \think\Collection || $change instanceof \think\Paginator): $i = 0; $__LIST__ = $change;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                            <div class="order-main">
                                <div class="order-list">
                                    <div class="order-title">
                                        <div class="dd-num">订单编号：<a href="javascript:;"><?php echo htmlentities($list['order_id']); ?></a></div>
                                        <span>{}</span>
                                        <!--    <em>店铺：小桔灯</em>-->
                                    </div>
                                    <div class="order-content">
                                        <div class="order-left">
                                            <ul class="item-list">
                                                <li class="td td-item">
                                                    <div class="item-pic">
                                                        <a href="#" class="J_MakePoint">
                                                            <img src=<?php echo htmlentities($list['pic_url']); ?> class="itempic J_ItemImg">
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="item-basic-info">
                                                            <a href="#">
                                                                <p><?php echo htmlentities($list['pic_desc']); ?></p>
                                                                <p class="info-little">没有使用优惠卷
                                                                    <br/>没有使用红包</p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <ul class="td-changeorder">
                                                    <li class="td td-orderprice">
                                                        <div class="item-orderprice">
                                                            <span>交易金额：</span><?php echo htmlentities($list['cost']*$list['num']); ?>
                                                        </div>
                                                    </li>
                                                    <li class="td td-changeprice">
                                                        <div class="item-changeprice">
                                                            <span>退款金额：</span><?php echo htmlentities($list['cost']*$list['num']); ?>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </ul>

                                            <div class="change move-right">
                                                <li class="td td-moneystatus td-status">
                                                    <div class="item-status">
                                                        <p class="Mystatus">退款成功</p>

                                                    </div>
                                                </li>
                                            </div>
                                            <li class="td td-change td-changebutton">
                                                <a href="/index/introduction/introduction?id=<?php echo htmlentities($list['product_id']); ?>">
                                                    <div class="am-btn am-btn-danger anniu">
                                                        再次购买</div>
                                                </a>
                                            </li>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                        <div id="divcss5s" ><?php echo $change; ?></div>
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
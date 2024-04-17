<?php /*a:4:{s:67:"C:\Users\Administrator\tp5.1\application\index\view\person\pay.html";i:1585568284;s:68:"C:\Users\Administrator\tp5.1\application\index\view\common\base.html";i:1583301653;s:70:"C:\Users\Administrator\tp5.1\application\index\view\common\header.html";i:1588761708;s:69:"C:\Users\Administrator\tp5.1\application\index\view\common\foots.html";i:1588755897;}*/ ?>
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



    <link href="/static/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />

    <link href="/static/basic/css/demo.css" rel="stylesheet" type="text/css" />
    <link href="/static/css/cartstyle.css" rel="stylesheet" type="text/css" />

    <link href="/static/css/jsstyle.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="/static/js/address.js"></script>

<div class="clear"></div>
<div class="concent">
    <!--地址 -->
    <div class="paycont">
        <div class="address">
            <h3>确认收货地址 </h3>
            <div class="control">
                <div class="tc-btn createAddr theme-login am-btn am-btn-danger"><a href="/index/person/address">修改收货地址</a></div>
            </div>
            <div class="clear"></div>
            <ul>

                <div class="per-border"></div>
                <?php if(is_array($pay) || $pay instanceof \think\Collection || $pay instanceof \think\Paginator): $i = 0; $__LIST__ = $pay;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                <li class="user-addresslist defaultAddr">

                    <div class="address-left">
                        <div class="user DefaultAddr">
                            <span class="buy-address-detail">
                                 <span class="buy-user"><?php echo htmlentities($list['name']); ?></span>
                                <span class="buy-phone"><?php echo htmlentities($list['phone']); ?></span>
										</span>
                        </div>
                        <div class="default-address DefaultAddr">
                            <span class="buy-line-title buy-line-title-type">收货地址：</span>
                            <span class="buy--address-detail">
								   <span class="province"><?php echo htmlentities($list['economize']); ?></span>
										<span class="city"><?php echo htmlentities($list['city']); ?></span>
										<span class="dist"><?php echo htmlentities($list['country']); ?></span>
										<span class="street"><?php echo htmlentities($list['address']); ?></span>
                            </span>
                        </div>
                    </div>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <div class="per-border"></div>

            </ul>

            <div class="clear"></div>
        </div>
        <!--物流 -->
        <div class="logistics">
            <h3>物流方式</h3>
            <ul class="op_express_delivery_hot">
                <li data-value="shunfeng" class="OP_LOG_BTN  op_express_delivery_hot_bottom"><i class="c-gap-right" style="background-position:0px -180px"></i>顺丰<span></span></li>
            </ul>
        </div>
        <div class="clear"></div>

        <!--支付方式-->
        <div class="logistics">
            <h3>支付方式</h3>
            <ul class="pay-list">
                <li class="pay taobao"><img src="/static/images/zhifubao.jpg" />支付宝<span></span></li>
            </ul>
        </div>
        <div class="clear"></div>

        <!--订单 -->
        <div class="concent">
            <div id="payTable">
                <h3>确认订单信息</h3>
                <div class="cart-table-th">
                    <div class="wp">

                        <div class="th th-item">
                            <div class="td-inner">商品信息</div>
                        </div>
                        <div class="th th-price">
                            <div class="td-inner">单价</div>
                        </div>
                        <div class="th th-amount">
                            <div class="td-inner">数量</div>
                        </div>
                        <div class="th th-sum">
                            <div class="td-inner">金额</div>
                        </div>
                        <div class="th th-oplist">
                            <div class="td-inner">配送方式</div>
                        </div>

                    </div>
                </div>
                <div class="clear"></div>
                <?php if(is_array($pays) || $pays instanceof \think\Collection || $pays instanceof \think\Paginator): $i = 0; $__LIST__ = $pays;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$good): $mod = ($i % 2 );++$i;?>
                <tr class="item-list">
                    <div class="bundle  bundle-last">

                        <div class="bundle-main">
                            <ul class="item-content clearfix">
                                <div class="pay-phone">
                                    <li class="td td-item">
                                        <div class="item-pic">
                                            <a href="#" class="J_MakePoint">
                                                <img src=<?php echo htmlentities($good['pic_url']); ?> class="itempic J_ItemImg"></a>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-basic-info">
                                                <a href="#" class="item-title J_MakePoint" data-point="tbcart.8.11"><?php echo htmlentities($good['pic_desc']); ?></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="td td-info">
                                        <div class="item-props">
                                            <span class="sku-line">优惠卷：暂无可用优惠卷</span>
                                            <span class="sku-line">红包：暂无可用红包</span>
                                        </div>
                                    </li>
                                    <li class="td td-price">
                                        <div class="item-price price-promo-promo">
                                            <div class="price-content">
                                                <em class="J_Price price-now"><?php echo htmlentities($good['cost']); ?></em>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                                <li class="td td-amount">
                                    <div class="amount-wrapper ">
                                        <div class="item-amount ">
                                            <span class="phone-title">购买数量</span>
                                            <div class="sl">
                                                <span class="text_box" name="" type="text" value="3" style="width:30px;"><?php echo htmlentities($good['num']); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="td td-sum">
                                    <div class="td-inner">
                                        <em tabindex="0" class="J_ItemSum number"><?php echo htmlentities($good['num']*$good['cost']); ?></em>
                                    </div>
                                </li>
                                <li class="td td-oplist">
                                    <div class="td-inner">
                                        <span class="phone-title">配送方式</span>
                                        <div class="pay-logis">
                                            快递<b class="sys_item_freprice">包邮</b>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                            <div class="clear"></div>

                        </div>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div class="clear"></div>
        <div class="pay-total">
            <!--留言-->
            <div class="order-extra">

            </div>
            <!--优惠券 -->
            <div class="buy-agio">
                <li class="td td-coupon">

                    <span class="coupon-title">优惠券</span>
                    <select data-am-selected>
                        <option value="b" selected>
                            <div class="c-price">
                                <strong></strong>
                            </div>
                            <div class="c-limit">
                                【无可用优惠卷】
                            </div>
                        </option>
                    </select>
                </li>

                <li class="td td-bonus">

                    <span class="bonus-title">红包</span>
                    <select data-am-selected>
                        <option value="a">
                            <div class="item-info">
                                <span>无可用红包</span>
                            </div>
                            <div class="item-remainderprice">
                                <span></span><span></span>
                            </div>
                        </option>
                    </select>

                </li>

            </div>
            <div class="clear"></div>
        </div>
        <!--含运费小计 -->
        <div class="buy-point-discharge ">
            <p class="price g_price ">
                合计（含运费） <span>¥</span><em class="pay-sum"><?php echo htmlentities($spend); ?></em>
            </p>
        </div>

        <!--信息 -->
        <div class="order-go clearfix">
            <div class="pay-confirm clearfix">
                <div class="box">
                    <div tabindex="0" id="holyshit267" class="realPay"><em class="t">实付款：</em>
                        <span class="price g_price ">
                                    <span>¥</span> <em class="style-large-bold-red " id="J_ActualFee"><?php echo htmlentities($spend); ?></em>
											</span>
                    </div>

                    <div id="holyshit268" class="pay-address">
                        <?php if(is_array($pay) || $pay instanceof \think\Collection || $pay instanceof \think\Paginator): $i = 0; $__LIST__ = $pay;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                        <p class="buy-footer-address">
                            <span class="buy-line-title buy-line-title-type">寄送至：</span>
                            <span class="buy--address-detail">
								   <span class="province"><?php echo htmlentities($list['economize']); ?></span>
												<span class="city"><?php echo htmlentities($list['city']); ?></span>
												<span class="dist"><?php echo htmlentities($list['country']); ?></span>
												<span class="street"><?php echo htmlentities($list['address']); ?></span>
												</span>
                            </span>

                        </p>
                        <p class="buy-footer-address">
                            <span class="buy-line-title">收货人：</span>
                            <span class="buy-address-detail">
                                         <span class="buy-user"><?php echo htmlentities($list['name']); ?> </span>
												<span class="buy-phone"><?php echo htmlentities($list['phone']); ?></span>
												</span>
                        </p>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>

                <div id="holyshit269" class="submitOrder">
                    <div class="go-btn-wrap">
                        <a id="J_Go" href="/index/shopcart/pay_get?cost=<?php echo htmlentities($spend); ?>" class="btn-go" tabindex="0" title="点击此按钮，提交订单">提交订单</a>
                    </div>
                </div>
                <div class="clear"></div>
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
            <a href="# ">关于黄山一石</a>
            <a href="# ">合作伙伴</a>
            <a href="# ">联系我们</a>
            <a href="# ">网站地图</a>
            <em>© 2015-2025 huang314.cn 版权所有  - Collect from 黄山一石</em>
        </p>
    </div>
</div>

</div>
</div>
<!--引导 -->
<div class="navCir">
    <li class="active"><a href="home.html"><i class="am-icon-home "></i>首页</a></li>
    <li><a href="sort.html"><i class="am-icon-list"></i>分类</a></li>
    <li><a href="shopcart.html"><i class="am-icon-shopping-basket"></i>购物车</a></li>
    <li><a href="/static/person/index.html"><i class="am-icon-user"></i>我的</a></li>
</div>


<!--菜单 -->
<div class=tip>
    <div id="sidebar">
        <div id="wrap">
            <div id="prof" class="item ">
                <a href="# ">
                    <span class="setting "></span>
                </a>
                <div class="ibar_login_box status_login ">
                    <div class="avatar_box ">
                        <p class="avatar_imgbox "><img src="/static/images/no-img_mid_.jpg " /></p>
                        <ul class="user_info ">
                            <?php if(app('session')->get('user_id')): ?>
                            <li><?php echo htmlentities(app('session')->get('user_name')); ?></li>
                            <li>级别&nbsp;<b style="color: gold">钻石会员</b></li>
                            <?php else: ?>
                            <li>您还没有登录</li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="login_btnbox ">
                        <a href="# " class="login_order ">我的订单</a>
                        <a href="# " class="login_favorite ">我的收藏</a>
                    </div>
                    <i class="icon_arrow_white "></i>
                </div>

            </div>
            <div id="shopCart " class="item ">
                <a href="/index/shopcart/shopcart">
                    <span class="message "></span>
                </a>
                <p>
                    购物车
                </p>
                <p class="cart_num ">0</p>
            </div>
            <div id="asset " class="item ">
                <a href="# ">
                    <span class="view "></span>
                </a>
                <div class="mp_tooltip ">
                    我的资产
                    <i class="icon_arrow_right_black "></i>
                </div>
            </div>

            <div id="foot " class="item ">
                <a href="# ">
                    <span class="zuji "></span>
                </a>
                <div class="mp_tooltip ">
                    我的足迹
                    <i class="icon_arrow_right_black "></i>
                </div>
            </div>

            <div id="brand " class="item ">
                <a href="#">
                    <span class="wdsc "><img src="/static/images/wdsc.png " /></span>
                </a>
                <div class="mp_tooltip ">
                    我的收藏
                    <i class="icon_arrow_right_black "></i>
                </div>
            </div>

            <div id="broadcast " class="item ">
                <a href="# ">
                    <span class="chongzhi "><img src="/static/images/chongzhi.png " /></span>
                </a>
                <div class="mp_tooltip ">
                    我要充值
                    <i class="icon_arrow_right_black "></i>
                </div>
            </div>

            <div class="quick_toggle ">
                <li class="qtitem ">
                    <a href="# "><span class="kfzx "></span></a>
                    <div class="mp_tooltip ">客服中心<i class="icon_arrow_right_black "></i></div>
                </li>
                <!--二维码 -->
                <li class="qtitem ">
                    <a href="#none "><span class="mpbtn_qrcode "></span></a>
                    <div class="mp_qrcode " style="display:none; "><img src="/static/images/weixin_code_145.png " /><i class="icon_arrow_white "></i></div>
                </li>
                <li class="qtitem ">
                    <a href="#top " class="return_top "><span class="top "></span></a>
                </li>
            </div>

            <!--回到顶部 -->
            <div id="quick_links_pop " class="quick_links_pop hide "></div>

        </div>

    </div>
    <div id="prof-content " class="nav-content ">
        <div class="nav-con-close ">
            <i class="am-icon-angle-right am-icon-fw "></i>
        </div>
        <div>
            我
        </div>
    </div>
    <div id="shopCart-content " class="nav-content ">
        <div class="nav-con-close ">
            <i class="am-icon-angle-right am-icon-fw "></i>
        </div>
        <div>
            购物车
        </div>
    </div>
    <div id="asset-content " class="nav-content ">
        <div class="nav-con-close ">
            <i class="am-icon-angle-right am-icon-fw "></i>
        </div>
        <div>
            资产
        </div>

        <div class="ia-head-list ">
            <a href="# " target="_blank " class="pl ">
                <div class="num ">0</div>
                <div class="text ">优惠券</div>
            </a>
            <a href="# " target="_blank " class="pl ">
                <div class="num ">0</div>
                <div class="text ">红包</div>
            </a>
            <a href="# " target="_blank " class="pl money ">
                <div class="num ">￥0</div>
                <div class="text ">余额</div>
            </a>
        </div>

    </div>
    <div id="foot-content " class="nav-content ">
        <div class="nav-con-close ">
            <i class="am-icon-angle-right am-icon-fw "></i>
        </div>
        <div>
            足迹
        </div>
    </div>
    <div id="brand-content " class="nav-content ">
        <div class="nav-con-close ">
            <i class="am-icon-angle-right am-icon-fw "></i>
        </div>
        <div>
            收藏
        </div>
    </div>
    <div id="broadcast-content " class="nav-content ">
        <div class="nav-con-close ">
            <i class="am-icon-angle-right am-icon-fw "></i>
        </div>
        <div>
            充值
        </div>
    </div>
</div>
<script>
    window.jQuery || document.write('<script src="/static/basic/js/jquery.min.js "><\/script>');
</script>
<script type="text/javascript " src="/static/basic/js/quick_links.js "></script>
</body>

</html>
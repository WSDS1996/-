<?php /*a:2:{s:74:"C:\Users\Administrator\tp5.1\application\index\view\shopcart\shopcart.html";i:1585732169;s:70:"C:\Users\Administrator\tp5.1\application\index\view\common\header.html";i:1588761708;}*/ ?>
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
<link href="/static/css/optstyle.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="/static/js/jquery.js"></script>

<!--购物车 -->
<div class="concent">
    <div id="cartTable">
        <div class="cart-table-th">
            <div class="wp">
                <div class="th th-chk">
                    <div id="J_SelectAll1" class="select-all J_SelectAll">

                    </div>
                </div>
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
                <div class="th th-op">
                    <div class="td-inner">操作</div>
                </div>
            </div>
        </div>

        <div class="clear"></div>


<?php if(is_array($shopcart) || $shopcart instanceof \think\Collection || $shopcart instanceof \think\Paginator): $i = 0; $__LIST__ = $shopcart;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
        <tr class="item-list">
            <div class="bundle  bundle-last ">
                <div class="clear"></div>
                <div class="bundle-main">
                    <ul class="item-content clearfix">
                        <li class="td td-chk">
                        </li>
                        <li class="td td-item">
                            <div class="item-pic">
                                <a href="/index/introduction/introduction?id=<?php echo htmlentities($list['product_id']); ?>" target="_blank" data-title= class="J_MakePoint" data-point="tbcart.8.12">
                                    <img src=<?php echo htmlentities($list['pic_url']); ?> class="itempic J_ItemImg"></a>
                            </div>
                            <div class="item-info">
                                <div class="item-basic-info">
                                    <a href="/index/introduction/introduction?id=<?php echo htmlentities($list['product_id']); ?>" target="_blank" title=<?php echo htmlentities($list['pic_desc']); ?> class="item-title J_MakePoint" data-point="tbcart.8.11"><?php echo htmlentities($list['pic_desc']); ?></a>
                                </div>
                            </div>
                        </li>
                        <li class="td td-info">
                            <div class="item-props item-props-can">
                                <span class="sku-line" >优惠活动：暂未有任何优惠</span>
                            </div>
                        </li>
                        <li class="td td-price">
                            <div class="item-price price-promo-promo">
                                <div class="price-content">

                                    <div class="price-line">
                                        <em class="J_Price price-now" tabindex="0"><?php echo htmlentities($list['cost']); ?></em>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="td td-amount">
                            <div class="amount-wrapper ">
                                <div class="item-amount ">
                                    <div class="sl">
                                        <span><?php echo htmlentities($list['num']); ?></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="td td-sum">
                            <div class="td-inner">
                                <em tabindex="0" class="J_ItemSum number" id=<?php echo htmlentities($list['product_id']); ?>><?php echo htmlentities($list['cost']*$list['num']); ?></em>
                            </div>
                        </li>
                        <li class="td td-op">
                            <div class="td-inner">
                                <a href="javascript:dele(<?php echo htmlentities($list['product_id']); ?>);" data-point-url="#" class="delete">删除此书</a>
                                <span id="product_id" style="color:#ffffff;"><?php echo htmlentities($list['product_id']); ?></span>
                            </div>
                        </li>
                        <script type="text/javascript">
                            function dele(id) {
                                var date={"product_id":id};
                                url='/index/shopcart/del';
                                var success=function(reponse){
                                    if(reponse==0){
                                        alert("删除失败");
                                    }else {
                                        alert("删除成功");
                                        history.go(0);
                                    }
                                }
                                $.post(url,date,success,"json");
                            }
                        </script>

                    </ul>

                </div>
            </div>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>

    <div class="float-bar-wrapper">
        <div id="J_SelectAll2" class="select-all J_SelectAll">

        </div>
        <div class="float-bar-right">
            <div class="amount-sum">
                <span class="txt">已选商品</span>
                <em id="J_SelectedItemsCount"><?php echo htmlentities($num); ?></em><span class="txt">件</span>
                <div class="arrow-box">
                    <span class="selected-items-arrow"></span>
                    <span class="arrow"></span>
                </div>
            </div>
            <div class="price-sum">
                <span class="txt">合计:</span>
                <strong class="price">¥<em id="J_Total"><?php echo htmlentities($spend); ?></em></strong>
            </div>
            <div class="btn-area">
                <a href="/index/person/pay" id="J_Go" class="submit-btn submit-btn-disabled" aria-label="请注意如果没有选择宝贝，将无法结算">
                    <span>结&nbsp;算</span></a>
            </div>
        </div>

    </div>

    <div class="footer">
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

</div>

<!--操作页面-->

<div class="theme-popover-mask"></div>

<div class="theme-popover">
    <div class="theme-span"></div>
    <div class="theme-poptit h-title">
        <a href="javascript:;" title="关闭" class="close">×</a>
    </div>
    <div class="theme-popbod dform">
        <form class="theme-signin" name="loginform" action="" method="post">

            <div class="theme-signin-left">

                <li class="theme-options">
                    <div class="cart-title">颜色：</div>
                    <ul>
                        <li class="sku-line selected">12#川南玛瑙<i></i></li>
                        <li class="sku-line">10#蜜橘色+17#樱花粉<i></i></li>
                    </ul>
                </li>
                <li class="theme-options">
                    <div class="cart-title">包装：</div>
                    <ul>
                        <li class="sku-line selected">包装：裸装<i></i></li>
                        <li class="sku-line">两支手袋装（送彩带）<i></i></li>
                    </ul>
                </li>
                <div class="theme-options">
                    <div class="cart-title number">数量</div>
                    <dd>
                        <input class="min am-btn am-btn-default" name="" type="button" value="-" />
                        <input class="text_box" name="" type="text" value="1" style="width:30px;" />
                        <input class="add am-btn am-btn-default" name="" type="button" value="+" />
                        <span  class="tb-hidden">库存<span class="stock">1000</span>件</span>
                    </dd>

                </div>
                <div class="clear"></div>
                <div class="btn-op">
                    <div class="btn am-btn am-btn-warning">确认</div>
                    <div class="btn close am-btn am-btn-warning">取消</div>
                </div>

            </div>
            <div class="theme-signin-right">
                <div class="img-info">
                    <img src="/static/images/kouhong.jpg_80x80.jpg" />
                </div>
                <div class="text-info">
                    <span class="J_Price price-now">¥39.00</span>
                    <span id="Stock" class="tb-hidden">库存<span class="stock">1000</span>件</span>
                </div>
            </div>

        </form>
    </div>
</div>
<!--引导 -->
<div class="navCir">
    <li><a href="home.html"><i class="am-icon-home "></i>首页</a></li>
    <li><a href="sort.html"><i class="am-icon-list"></i>分类</a></li>
    <li class="active"><a href="shopcart.html"><i class="am-icon-shopping-basket"></i>购物车</a></li>
    <li><a href="/static/person/index.html"><i class="am-icon-user"></i>我的</a></li>
</div>
</body>

</html>
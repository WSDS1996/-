<?php /*a:4:{s:71:"C:\Users\Administrator\tp5.1\application\index\view\person\address.html";i:1585558757;s:69:"C:\Users\Administrator\tp5.1\application\index\view\public\bases.html";i:1583568207;s:70:"C:\Users\Administrator\tp5.1\application\index\view\public\header.html";i:1588761708;s:69:"C:\Users\Administrator\tp5.1\application\index\view\public\foots.html";i:1588755984;}*/ ?>
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
<link rel="stylesheet" type="text/css" href="/static/js/city-picker.css">

<link href="/static/css/personal.css" rel="stylesheet" type="text/css">
<link href="/static/css/addstyle.css" rel="stylesheet" type="text/css">
<script src="/static/AmazeUI-2.4.2/assets/js/jquery.min.js" type="text/javascript"></script>
<script src="/static/AmazeUI-2.4.2/assets/js/amazeui.js"></script>

<script type="text/javascript" src="/static/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/js/citydata.js"></script>
<script type="text/javascript" src="/static/js/cityPicker-1.0.0.js?v=1"></script>
<script type="text/javascript">
    $(function () {

        //模拟城市-无联动/无搜索
        var selector = $('#city-picker-selector').cityPicker({
            dataJson: cityData,
            renderMode: true,
            search: false,
            linkage: false
        })
        $('#city-picker-selector').on('choose-province.citypicker', function (event, tagert, storage) {
            console.log(storage);
        });

        //设置城市
        selector.setCityVal([{
            'id': '北京市',
            'name': '北京市'
        }, {
            'id': '北京市',
            'name': '北京市'
        }, {
            'id': '海淀区',
            'name': '海淀区'
        }]);


    });
</script>
<b class="line"></b>

<div class="center">
    <div class="col-main">
        <div class="main-wrap">

            <div class="user-address">
                <!--标题 -->

                <div class="clear"></div>
                <a class="new-abtn-type" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0}">添加新地址</a>
                <!--例子-->
                <div class="am-modal am-modal-no-btn" id="doc-modal-1">

                    <div class="add-dress">

                        <!--标题 -->
                        <div class="am-cf am-padding">
                            <div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">修改收货地址</strong> / <small>charge&nbsp;address</small></div>
                        </div>
                        <hr/>

                        <div class="am-u-md-12 am-u-lg-8" style="margin-top: 20px;">
                            <form class="am-form am-form-horizontal" action="/index/person/charge_address" method="post">
                                <?php if(is_array($address) || $address instanceof \think\Collection || $address instanceof \think\Paginator): $i = 0; $__LIST__ = $address;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                                <div class="am-form-group">
                                    <label for="user-name" class="am-form-label">收货人</label>
                                    <div class="am-form-content">
                                        <input type="text" id="user-name" name="get_name" placeholder="收货人" value=<?php echo htmlentities($list['name']); ?>>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-phone" class="am-form-label">手机号码</label>
                                    <div class="am-form-content">
                                        <input id="user-phone" name="get_phone" placeholder="手机号必填" type="text" value=<?php echo htmlentities($list['phone']); ?>>
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-address" class="am-form-label">所在地</label>
                                    <div class="am-form-content address">
                                        <div class="city-picker-selector" id="city-picker-selector">
                                            <div class="selector-item storey province">
                                                <a href="javascript:;" class="selector-name reveal">北京市</a>
                                                <input type="hidden" name="userProvinceId" class="input-price val-error" value="110000" data-required="userProvinceId">
                                                <div class="selector-list listing hide">
                                                    <ul>
                                                        <li>北京市</li>
                                                        <li>天津市</li>
                                                        <li>河北省</li>
                                                        <li>山西省</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="selector-item storey city">
                                                <a href="javascript:;" class="selector-name reveal">北京市</a>
                                                <input type="hidden" name="userCityId" class="input-price val-error" value="110100" data-required="userCityId">
                                                <div class="selector-list listing hide">
                                                    <ul>
                                                        <li>北京市</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="selector-item storey district">
                                                <a href="javascript:;" class="selector-name reveal">海淀区</a>
                                                <input type="hidden" name="userDistrictId" class="input-price val-error" value="110108" data-required="userDistrictId">
                                                <div class="selector-list listing hide">
                                                    <ul>
                                                        <li>东城区</li>
                                                        <li>西城区</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-intro" class="am-form-label">详细地址</label>
                                    <div class="am-form-content">
                                        <textarea name="place" class="" rows="3" id="user-intro" placeholder="输入详细地址"><?php echo htmlentities($list['address']); ?></textarea>
                                        <small>100字以内写出你的详细地址...</small>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <input class="am-btn am-btn-danger" type="submit" value="确认修改">
                                    </div>
                                </div>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </form>
                        </div>

                    </div>

                </div>

            </div>

            <script type="text/javascript">
                $(document).ready(function() {
                    $(".new-option-r").click(function() {
                        $(this).parent('.user-addresslist').addClass("defaultAddr").siblings().removeClass("defaultAddr");
                    });

                    var $ww = $(window).width();
                    if($ww>640) {
                        $("#doc-modal-1").removeClass("am-modal am-modal-no-btn")
                    }

                })
            </script>

            <div class="clear"></div>

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
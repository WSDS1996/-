<?php /*a:4:{s:75:"C:\Users\Administrator\tp5.1\application\admin\view\admin\order_detail.html";i:1585731373;s:68:"C:\Users\Administrator\tp5.1\application\admin\view\common\base.html";i:1585648311;s:70:"C:\Users\Administrator\tp5.1\application\admin\view\common\header.html";i:1585827206;s:69:"C:\Users\Administrator\tp5.1\application\admin\view\common\foots.html";i:1585648311;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>后台管理系统</title>
    <meta name="author" content="DeathGhost" />
    <link rel="stylesheet" type="text/css" href="/static/admin/css/style.css">
    <!--[if lt IE 9]>
    <script src="/static/admin/js/html5.js"></script>
    <![endif]-->
    <script src="/static/admin/js/jquery.js"></script>
    <script src="/static/admin/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script>

        (function($){
            $(window).load(function(){

                $("a[rel='load-content']").click(function(e){
                    e.preventDefault();
                    var url=$(this).attr("href");
                    $.get(url,function(data){
                        $(".content .mCSB_container").append(data); //load new content inside .mCSB_container
                        //scroll-to appended content
                        $(".content").mCustomScrollbar("scrollTo","h2:last");
                    });
                });

                $(".content").delegate("a[href='top']","click",function(e){
                    e.preventDefault();
                    $(".content").mCustomScrollbar("scrollTo",$(this).attr("href"));
                });

            });
        })(jQuery);
    </script>
</head>
<body>
<!--header-->
<header>
    <h1><img src="/static/admin/images/admin_logo.png"/></h1>
    <ul class="rt_nav">
        <li><a href="/index/login/login" target="_blank" class="website_icon">站点首页</a></li>
        <li><a href="#" class="clear_icon">清除缓存</a></li>
        <?php if(app('session')->get('admin_id')): ?>
        <li><a href="#" class="admin_icon"><?php echo htmlentities(app('session')->get('admin_name')); ?></a></li>
        <?php else: ?>
        <li><a href="#" class="admin_icon">DeathGhost</a></li>
        <?php endif; ?>
        <li><a href="#" class="set_icon">账号设置</a></li>
        <?php if(app('session')->get('admin_id')): ?>
        <li><a href="/admin/login/rootdown" class="quit_icon">安全退出</a></li>
        <?php else: ?>
        <li><a href="/admin/login/login" class="quit_icon">登录</a></li>
        <?php endif; ?>
    </ul>
</header>
<!--aside nav-->
<!--aside nav-->
<aside class="lt_aside_nav content mCustomScrollbar">
    <h2><a href="/admin/admin/admin">起始页</a></h2>
    <ul>
        <li>
            <dl>
                <dt>常用布局示例</dt>
                <!--当前链接则添加class:active-->
                <dd><a href="/admin/admin/admin">商品列表示例</a></dd>
                <dd><a href="/admin/admin/recycle">商品回收站示例</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>订单信息</dt>
                <dd><a href="/admin/admin/order_list">订单列表示例</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>会员管理</dt>
                <dd><a href="/admin/admin/user_list">会员列表示例</a></dd>
                <dd><a href="/admin/admin/down_user">会员小黑屋</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>配送与支付设置</dt>
                <dd><a href="/admin/admin/express">配送方式</a></dd>
            </dl>
        </li>
        <li>
            <p class="btm_infor">@中国皇Π有限公司 版权所有</p>
        </li>
    </ul>
</aside>



<section class="rt_wrap content mCustomScrollbar">
    <div class="rt_content">
        <div class="page_title">
            <h2 class="fl">订单详情示例</h2>
        </div>
        <?php if(is_array($order_detail) || $order_detail instanceof \think\Collection || $order_detail instanceof \think\Paginator): $i = 0; $__LIST__ = $order_detail;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
        <table class="table">
            <tr>
                <td>收件人：<?php echo htmlentities($list['name']); ?></td>
                <td>联系电话：<?php echo htmlentities($list['phone']); ?></td>
                <td>收件地址：<?php echo htmlentities($list['address']); ?></td>
                <td>付款时间：<?php echo htmlentities($list['update_time']); ?></td>
            </tr>
            <tr>
                <td>订单状态：<a>已付款</a></td>
                <td colspan="3">订单总价：<mark><strong>￥<?php echo htmlentities($list['cost']); ?></strong></mark></td>
            </tr>
        </table>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <table class="table">
            <?php if(is_array($order) || $order instanceof \think\Collection || $order instanceof \think\Paginator): $i = 0; $__LIST__ = $order;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$good): $mod = ($i % 2 );++$i;?>
            <tr>
                <td class="center"><img src=<?php echo htmlentities($good['pic_url']); ?> width="50" height="50"/></td>
                <td><?php echo htmlentities($good['pic_desc']); ?></td>
                <td class="center"><?php echo htmlentities($good['product_id']); ?></td>
                <td class="center"><strong class="rmb_icon"><?php echo htmlentities($good['cost']); ?></strong></td>
                <td class="center">
                    <p>优惠卷：无</p>
                    <p>红包：无</p>
                </td>
                <td class="center"><strong><?php echo htmlentities($good['num']); ?></strong></td>
                <td class="center"><strong class="rmb_icon"><?php echo htmlentities($good['cost']*$good['num']); ?></strong></td>
                <td class="center">本</td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
        <aside class="mtb" style="text-align:right;">
            <label>管理员操作：</label>
            <input type="text" class="textbox textbox_295" placeholder="管理员操作备注"/>
            <input type="button" value="打印订单" class="group_btn"/>
            <input type="button" value="确认订单" class="group_btn"/>
            <input type="button" value="付款" class="group_btn"/>
            <input type="button" value="配货" class="group_btn"/>
            <input type="button" value="发货" class="group_btn"/>
            <input type="button" value="确认收货" class="group_btn"/>
        </aside>
    </div>
</section>



</body>
</html>
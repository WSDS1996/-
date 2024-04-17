<?php /*a:4:{s:70:"C:\Users\Administrator\tp5.1\application\admin\view\admin\express.html";i:1585731944;s:68:"C:\Users\Administrator\tp5.1\application\admin\view\common\base.html";i:1585648311;s:70:"C:\Users\Administrator\tp5.1\application\admin\view\common\header.html";i:1585809809;s:69:"C:\Users\Administrator\tp5.1\application\admin\view\common\foots.html";i:1585648311;}*/ ?>
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
        <?php if(app('session')->get('user_id')): ?>
        <li><a href="#" class="admin_icon"><?php echo htmlentities(app('session')->get('user_name')); ?></a></li>
        <?php else: ?>
        <li><a href="#" class="admin_icon">DeathGhost</a></li>
        <?php endif; ?>
        <li><a href="#" class="set_icon">账号设置</a></li>
        <?php if(app('session')->get('user_id')): ?>
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
            <h2 class="fl">配送方式</h2>
            <a href="product_detail.html" class="fr top_rt_btn add_icon">添加配送方式</a>
        </div>
        <table class="table">
            <tr>
                <th>缩略图</th>
                <th>快递名称</th>
                <th>快递描述</th>
                <th>操作</th>
            </tr>
            <tr>
                <td class="center"><img src="/static/image/shentong.png" width="165" height="65"/></td>
                <td>申通快递</td>
                <td><p>上海申通物流公司拥有247个独立城市营业所，179个营业厅，1220个操作点，快递初创于1993年，是一家以经营快递为主的国内合资（民营）企业。</p></td>
                <td class="center">
                    <a href="product_detail.html" title="编辑" class="link_icon">&#101;</a>
                    <a href="#" title="删除" class="link_icon">&#100;</a>
                </td>
            </tr>
            <tr>
                <td class="center"><img src="/static/image/yuantong.png" width="165" height="65"/></td>
                <td>圆通快递</td>
                <td><p>圆通速递创建于2000年5月28日,经过近十四年的发展,已成为一家集速递、航空、电子商务等业务为一体的大型企业集团,形成了集团化、网络化、规模化、品牌化经营的新...</p></td>
                <td class="center">
                    <a href="product_detail.html" title="编辑" class="link_icon">&#101;</a>
                    <a href="#" title="删除" class="link_icon">&#100;</a>
                </td>
            </tr>
            <tr>
                <td class="center"><img src="/static/image/yunda.png" width="165" height="65"/></td>
                <td>韵达快递</td>
                <td><p>“韵达快递”品牌创立于1999年8月，总部位于中国上海，现已成为集快递、物流、电子商务配送和仓储服务为一体的全国网络型品牌快递企业，服务范围覆盖国内31个省（区、市）及港澳台地区。</p></td>
                <td class="center">
                    <a href="product_detail.html" title="编辑" class="link_icon">&#101;</a>
                    <a href="#" title="删除" class="link_icon">&#100;</a>
                </td>
            </tr>
        </table>
        <aside class="paging">
            <a>第一页</a>
            <a>1</a>
            <a>2</a>
            <a>3</a>
            <a>…</a>
            <a>1004</a>
            <a>最后一页</a>
        </aside>
    </div>
</section>



</body>
</html>
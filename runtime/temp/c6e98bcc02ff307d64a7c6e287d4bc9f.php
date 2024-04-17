<?php /*a:4:{s:72:"C:\Users\Administrator\tp5.1\application\admin\view\admin\user_list.html";i:1585741894;s:68:"C:\Users\Administrator\tp5.1\application\admin\view\common\base.html";i:1585648311;s:70:"C:\Users\Administrator\tp5.1\application\admin\view\common\header.html";i:1585827206;s:69:"C:\Users\Administrator\tp5.1\application\admin\view\common\foots.html";i:1585648311;}*/ ?>
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


<style>
    #divcss5{margin:0 auto;border:1px solid #f4fcff;width:600px;height:100px}
    ul.pagination {display: inline-block;padding: 20px;margin: 0;text-align: center}
    .pagination a{text-decoration: none;margin-right: 0px!important; text-align: center}
    ul.pagination li {display: inline;align-content: center}
    .disabled ,.pagination  .active, .pagination li a {color: black; float: left;padding: 8px 16px;text-decoration: none;transition: background-color .3s;border: 1px solid #ddd; margin: 0 4px;}
    .pagination .active{background-color: #4CAF50;color: white;border: 1px solid #4CAF50;}
    .disabled{background-color: rgba(236, 236, 236, 0.78);}
    ul.pagination  a.active {background-color: #4CAF50;color: white;border: 1px solid #4CAF50;}
    ul.pagination li a:hover:not(.active) {background-color: #ddd;}
</style>

<section class="rt_wrap content mCustomScrollbar">
    <div class="rt_content">
        <div class="page_title">
            <h2 class="fl">会员列表</h2>
        </div>
        <table class="table">
            <tr>
                <th>Id</th>
                <th>会员头像</th>
                <th>会员昵称</th>
                <th>手机号码</th>
                <th>电子邮件</th>
                <th>是否设置支付密码</th>
                <th>会员等级</th>
                <th>创建时间</th>
                <th>最后修改时间</th>
                <th>操作</th>
            </tr>
            <?php if(is_array($user_list) || $user_list instanceof \think\Collection || $user_list instanceof \think\Paginator): $i = 0; $__LIST__ = $user_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
            <tr>
                <td class="center"><?php echo htmlentities($list['id']); ?></td>
                <td class="center"><img src="/static/image/user/<?php echo htmlentities($list['id']); ?>.jpg" width="50" height="50"/></td>
                <td><?php echo htmlentities($list['name']); ?></td>
                <td class="center"><?php echo htmlentities($list['iphone']); ?></td>
                <td class="center"><?php echo htmlentities($list['email']); ?></td>
                <?php if($list['pay_pwd']): ?>
                <td class="center"><a title="成功" class="link_icon">&#89;</a></td>
                <?php else: ?>
                <td class="center"><a title="否" class="link_icon">&#88;</a></td>
                <?php endif; ?>
                <td class="center">普通会员</td>
                <td class="center">
                    <strong id="creat"><?php echo htmlentities($list['creat_time']); ?></strong>
                </td>
                <td class="center">
                    <strong ><?php echo htmlentities($list['update_time']); ?></strong>
                </td>
                <td class="center">
                    <a href="javascript:udown(<?php echo htmlentities($list['id']); ?>)" title="关入小黑屋" class="link_icon">&#100;</a>
                </td>
                <script type="text/javascript">
                    function udown(id) {
                        var date={"id":id};
                        url='/admin/admin/udown';
                        var success=function(reponse){
                            if(reponse==0){
                                alert("没有关入小黑屋！！");
                            }else {
                                alert("关入小黑屋成功！！");
                                history.go(0);
                            }
                        }
                        $.post(url,date,success,"json");
                    }
                </script>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
        <div id="divcss5"><?php echo $user_list; ?></div>
    </div>
</section>



</body>
</html>
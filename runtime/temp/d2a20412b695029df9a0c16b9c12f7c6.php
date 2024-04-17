<?php /*a:4:{s:75:"C:\Users\Administrator\tp5.1\application\index\view\person\information.html";i:1585196376;s:69:"C:\Users\Administrator\tp5.1\application\index\view\public\bases.html";i:1583568207;s:70:"C:\Users\Administrator\tp5.1\application\index\view\public\header.html";i:1588761708;s:69:"C:\Users\Administrator\tp5.1\application\index\view\public\foots.html";i:1588755984;}*/ ?>
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


<link href="/static/css/personal.css" rel="stylesheet" type="text/css">
<link href="/static/css/infstyle.css" rel="stylesheet" type="text/css">
<script src="/static/AmazeUI-2.4.2/assets/js/jquery.min.js" type="text/javascript"></script>
<script src="/static/AmazeUI-2.4.2/assets/js/amazeui.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="/static/js/sweetalert.css">
<script type="text/javascript" src="/static/js/sweetalert-dev.js"></script>

<b class="line"></b>
<div class="center">
    <div class="col-main">
        <div class="main-wrap">
            <div class="user-info">
                <!--标题 -->
                <?php if(is_array($information) || $information instanceof \think\Collection || $information instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($information) ? array_slice($information,0,1, true) : $information->slice(0,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                <div class="am-cf am-padding">
                    <div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">个人资料</strong> / <small>Personal&nbsp;information</small></div>
                </div>
                <hr/>

                <!--头像 -->
                <div class="user-infoPic">

                    <div class="filePic">
                        <input type="file" class="inputPic" allowexts="gif,jpeg,jpg,png,bmp" accept="image/*">
                        <img class="am-circle am-img-thumbnail" src="/static/images/getAvatar.do.jpg" alt="" />
                    </div>

                    <p class="am-form-help">头像</p>

                    <div class="info-m">
                        <div><b>用户名：<i><?php echo htmlentities($list['name']); ?></i></b></div>
                        <div class="u-level">
									<span class="rank r2">
							             <s class="vip1"></s><a class="classes" href="">铜牌会员</a>
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

                <!--个人信息 -->
                <div class="info-main">
                    <form class="am-form am-form-horizontal" method="post" action="/index/person/changeimfor">

                        <div class="am-form-group">
                            <label for="user-name2" class="am-form-label">昵称/姓名</label>
                            <div class="am-form-content">
                                <?php if($list['name']==''): ?>
                                <input type="text" id="user-name22" placeholder="昵称只能修改一次"  >
                                <?php else: ?>
                                <p><?php echo htmlentities($list['name']); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="am-form-group">
                            <label for="user-phone" class="am-form-label">电话</label>
                            <div class="am-form-content">
                                <?php if($list['iphone']==''): ?>
                                <p>请到<a href="safety.html">安全设置绑定手机号</a></p>
                                <?php else: ?>
                                <p><?php echo htmlentities($list['iphone']); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-email" class="am-form-label">电子邮件</label>
                            <div class="am-form-content">
                                <?php if($list['email']==''): ?>
                                <input id="user-email22" placeholder="Email" type="email">
                                <?php else: ?>
                                <p><?php echo htmlentities($list['email']); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-email" class="am-form-label">注册时间</label>
                            <div class="am-form-content">
                                <p><?php echo htmlentities(date("Y-m-d H:i:s",!is_numeric($list['creat_time'])? strtotime($list['creat_time']) : $list['creat_time'])); ?></p>
                            </div>
                        </div>
                        <div class="info-btn">
                            <div class="am-btn am-btn-danger"><a  id="change" href="javascript:change()">保存修改</a></div>
                        </div>

                    </form>

                    <script>
                        var names=document.getElementById('user-name22')
                        names.onblur= function check() {
                            var name=document.getElementById('user-name22').value;
                            var url='/index/person/check';
                            var date={"name":name};
                            var success=function(reponse){
                                if(reponse==1){
                                    swal("用户名重复");
                                }else if (reponse==-1){
                                    swal("用户名不能为空");
                                }else {
                                    swal("用户名可以用哦");
                                }
                            }
                            $.post(url,date,success,"json");
                        }

                      function change() {

                          var name=document.getElementById('user-name22').value;
                          var id=<?php echo htmlentities(app('session')->get('user_id')); ?>;
                          var url='/index/person/changeimfor';
                          var date={"id":id,"name":name};
                          var success=function(reponse){
                              if(reponse==1){
                                  swal("修改成功");
                              }else {
                                  swal("修改失败");
                              }
                          }
                          $.post(url,date,success,"json");
                      }

                    </script>

                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
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
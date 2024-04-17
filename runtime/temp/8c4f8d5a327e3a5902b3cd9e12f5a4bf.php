<?php /*a:4:{s:68:"C:\Users\Administrator\tp5.1\application\index\view\login\login.html";i:1585742310;s:68:"C:\Users\Administrator\tp5.1\application\index\view\common\base.html";i:1583301653;s:70:"C:\Users\Administrator\tp5.1\application\index\view\common\header.html";i:1588761708;s:69:"C:\Users\Administrator\tp5.1\application\index\view\common\foots.html";i:1588755897;}*/ ?>
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



<div class="banner">
    <!--轮播 -->
    <div class="am-slider am-slider-default scoll" data-am-flexslider id="demo-slider-0">
        <ul class="am-slides">
            <li class="banner1"><a href="introduction.html"><img src="/static/images/ad1.jpg" /></a></li>
            <li class="banner2"><a><img src="/static/images/ad2.jpg" /></a></li>
            <li class="banner3"><a><img src="/static/images/ad3.jpg" /></a></li>
            <li class="banner4"><a><img src="/static/images/ad4.jpg" /></a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div>
<div class="shopNav">
    <div class="slideall">

        <div class="long-title"><span class="all-goods">全部分类</span></div>
        <div class="nav-cont">
            <ul>
                <li class="index"><a href="#">首页</a></li>
                <li class="qc"><a href="#">三国</a></li>
                <li class="qc"><a href="#">水浒</a></li>
                <li class="qc"><a href="#">红楼梦</a></li>
                <li class="qc last"><a href="#">西游记</a></li>
            </ul>
            <div class="nav-extra">
                <i class="am-icon-user-secret am-icon-md nav-user"></i><b></b>恭喜发财
                <i class="am-icon-angle-right" style="padding-left: 10px;"></i>
            </div>
        </div>
        <!--侧边导航 -->
        <div id="nav" class="navfull">
            <div class="area clearfix">
                <div class="category-content" id="guide_2">

                    <div class="category">
                        <ul class="category-list" id="js_climit_li">
                            <li class="appliance js_toggle relative first">
                                <div id="book1"  class="category-info">
                                    <h3 class="category-name b-category-name"><a class="ml-22" title="1" id="book11">图书/童书</a></h3>
                                    <em>&gt;</em></div>
                                <div class="menu-item menu-in top">
                                    <div class="area-in">
                                        <div class="area-bg">
                                            <div class="menu-srot">
                                                <div class="sort-side">
                                                    <dl class="dl-sort">
                                                        <dt><span title="图书">图书</span></dt>
                                                        <?php if(is_array($good1) || $good1 instanceof \think\Collection || $good1 instanceof \think\Paginator): $i = 0; $__LIST__ = $good1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                        <dd><a title="蒸蛋糕" href=<?php echo htmlentities($goodss['url']); ?>><span><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <b class="arrow"></b>
                            </li>
                            <li class="appliance js_toggle relative">
                                <div class="category-info">
                                    <h3 class="category-name b-category-name"><a class="ml-22" title="教辅/考试">教辅/考试</a></h3>
                                    <em>&gt;</em></div>
                                <div class="menu-item menu-in top">
                                    <div class="area-in">
                                        <div class="area-bg">
                                            <div class="menu-srot">
                                                <div class="sort-side">
                                                    <dl class="dl-sort">
                                                        <dt><span title="教辅">教辅</span></dt>
                                                        <?php if(is_array($good2) || $good2 instanceof \think\Collection || $good2 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good2) ? array_slice($good2,0,4, true) : $good2->slice(0,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                        <dd><a title=<?php echo htmlentities($goodss['product_name']); ?> href=<?php echo htmlentities($goodss['url']); ?>><span><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dl>
                                                    <dl class="dl-sort">
                                                        <dt><span title="考试">考试</span></dt>
                                                        <?php if(is_array($good2) || $good2 instanceof \think\Collection || $good2 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good2) ? array_slice($good2,4,4, true) : $good2->slice(4,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                        <dd><a title=<?php echo htmlentities($goodss['product_name']); ?> href=<?php echo htmlentities($goodss['url']); ?>><span><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dl>
                                                    <dl class="dl-sort">
                                                        <dt><span title="大中小学书籍">大中小学书籍</span></dt>
                                                        <?php if(is_array($good2) || $good2 instanceof \think\Collection || $good2 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good2) ? array_slice($good2,8,4, true) : $good2->slice(8,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                        <dd><a title=<?php echo htmlentities($goodss['product_name']); ?> href=<?php echo htmlentities($goodss['url']); ?>><span><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dl>
                                                </div>
                                                <div class="brand-side">
                                                    <dl class="dl-sort"><dt><span>热门图书</span></dt>
                                                        <?php if(is_array($good2) || $good2 instanceof \think\Collection || $good2 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good2) ? array_slice($good2,20,6, true) : $good2->slice(20,6, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                        <dd><a rel="nofollow" title=<?php echo htmlentities($goodss['product_name']); ?> target="_blank" href=<?php echo htmlentities($goodss['url']); ?> rel="nofollow"><span  class ="red" ><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <b class="arrow"></b>
                            </li>
                            <li class="appliance js_toggle relative">
                                <div class="category-info">
                                    <h3 class="category-name b-category-name"><a class="ml-22" title="人文社科">人文社科</a></h3>
                                    <em>&gt;</em></div>
                                <div class="menu-item menu-in top">
                                    <div class="area-in">
                                        <div class="area-bg">
                                            <div class="menu-srot">
                                                <div class="sort-side">
                                                    <dl class="dl-sort">
                                                        <dt><span title="创新天地">创新天地</span></dt>
                                                        <?php if(is_array($good3) || $good3 instanceof \think\Collection || $good3 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good3) ? array_slice($good3,0,4, true) : $good3->slice(0,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                        <dd><a title=<?php echo htmlentities($goodss['product_name']); ?> href=<?php echo htmlentities($goodss['url']); ?>><span><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dl>
                                                    <dl class="dl-sort">
                                                        <dt><span title="人与自然">牛肉丝</span></dt>
                                                        <?php if(is_array($good3) || $good3 instanceof \think\Collection || $good3 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good3) ? array_slice($good3,4,4, true) : $good3->slice(4,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                        <dd><a title=<?php echo htmlentities($goodss['product_name']); ?> href=<?php echo htmlentities($goodss['url']); ?>><span><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dl>
                                                    <dl class="dl-sort">
                                                        <dt><span title="小香肠">无限未来</span></dt>
                                                        <?php if(is_array($good3) || $good3 instanceof \think\Collection || $good3 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good3) ? array_slice($good3,8,4, true) : $good3->slice(8,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                        <dd><a title=<?php echo htmlentities($goodss['product_name']); ?> href=<?php echo htmlentities($goodss['url']); ?>><span><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dl>
                                                </div>
                                                <div class="brand-side">
                                                    <dl class="dl-sort"><dt><span>热门图书</span></dt>
                                                        <?php if(is_array($good2) || $good2 instanceof \think\Collection || $good2 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good2) ? array_slice($good2,20,6, true) : $good2->slice(20,6, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                        <dd><a rel="nofollow" title=<?php echo htmlentities($goodss['product_name']); ?> target="_blank" href=<?php echo htmlentities($goodss['url']); ?> rel="nofollow"><span  class ="red" ><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <b class="arrow"></b>
                            </li>
                            <li class="appliance js_toggle relative">
                                <div class="category-info">
                                    <h3 class="category-name b-category-name"><a class="ml-22" title="网络文学">网络文学</a></h3>
                                    <em>&gt;</em></div>
                                <div class="menu-item menu-in top">
                                    <div class="area-in">
                                        <div class="area-bg">
                                            <div class="menu-srot">
                                                <div class="sort-side">
                                                    <dl class="dl-sort">
                                                            <dt><span title="创新天地">创新天地</span></dt>
                                                            <?php if(is_array($good4) || $good4 instanceof \think\Collection || $good4 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good4) ? array_slice($good4,0,4, true) : $good4->slice(0,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                            <dd><a title=<?php echo htmlentities($goodss['product_name']); ?> href=<?php echo htmlentities($goodss['url']); ?>><span><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                                        </dl>
                                                        <dl class="dl-sort">
                                                            <dt><span title="人与自然">人与自然</span></dt>
                                                            <?php if(is_array($good4) || $good4 instanceof \think\Collection || $good4 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good4) ? array_slice($good4,4,4, true) : $good4->slice(4,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                            <dd><a title=<?php echo htmlentities($goodss['product_name']); ?> href=<?php echo htmlentities($goodss['url']); ?>><span><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                                        </dl>
                                                        <dl class="dl-sort">
                                                            <dt><span title="无限未来">无限未来</span></dt>
                                                            <?php if(is_array($good4) || $good4 instanceof \think\Collection || $good4 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good4) ? array_slice($good4,8,4, true) : $good4->slice(8,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                            <dd><a title=<?php echo htmlentities($goodss['product_name']); ?> href=<?php echo htmlentities($goodss['url']); ?>><span><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                                        </dl>
                                                </div>
                                                <div class="brand-side">
                                                    <dl class="dl-sort"><dt><span>热门图书</span></dt>
                                                        <?php if(is_array($good2) || $good2 instanceof \think\Collection || $good2 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good2) ? array_slice($good2,20,6, true) : $good2->slice(20,6, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                        <dd><a rel="nofollow" title=<?php echo htmlentities($goodss['product_name']); ?> target="_blank" href=<?php echo htmlentities($goodss['url']); ?> rel="nofollow"><span  class ="red" ><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <b class="arrow"></b>
                            </li>
                            <li class="appliance js_toggle relative">
                                <div class="category-info">
                                    <h3 class="category-name b-category-name"><a class="ml-22" title="文学名著">文学名著</a></h3>
                                    <em>&gt;</em></div>
                                <div class="menu-item menu-in top">
                                    <div class="area-in">
                                        <div class="area-bg">
                                            <div class="menu-srot">
                                                <div class="sort-side">
                                                    <dl class="dl-sort">
                                                        <dt><span title="创新天地">创新天地</span></dt>
                                                        <?php if(is_array($good5) || $good5 instanceof \think\Collection || $good5 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good5) ? array_slice($good5,0,6, true) : $good5->slice(0,6, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                        <dd><a title=<?php echo htmlentities($goodss['product_name']); ?> href=<?php echo htmlentities($goodss['url']); ?>><span><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dl>
                                                    <dl class="dl-sort">
                                                        <dt><span title="人与自然">人与自然</span></dt>
                                                        <?php if(is_array($good5) || $good5 instanceof \think\Collection || $good5 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good5) ? array_slice($good5,6,5, true) : $good5->slice(6,5, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                        <dd><a title=<?php echo htmlentities($goodss['product_name']); ?> href=<?php echo htmlentities($goodss['url']); ?>><span><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dl>
                                                    <dl class="dl-sort">
                                                        <dt><span title="无限未来">无限未来</span></dt>
                                                        <?php if(is_array($good5) || $good5 instanceof \think\Collection || $good5 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good5) ? array_slice($good5,11,5, true) : $good5->slice(11,5, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                        <dd><a title=<?php echo htmlentities($goodss['product_name']); ?> href=<?php echo htmlentities($goodss['url']); ?>><span><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dl>
                                                </div>
                                                <div class="brand-side">
                                                    <dl class="dl-sort"><dt><span>热门图书</span></dt>
                                                        <?php if(is_array($good2) || $good2 instanceof \think\Collection || $good2 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good2) ? array_slice($good2,20,6, true) : $good2->slice(20,6, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                        <dd><a rel="nofollow" title=<?php echo htmlentities($goodss['product_name']); ?> target="_blank" href=<?php echo htmlentities($goodss['url']); ?> rel="nofollow"><span  class ="red" ><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <b class="arrow"></b>
                            </li>
                            <li class="appliance js_toggle relative">
                                <div class="category-info">
                                    <h3 class="category-name b-category-name"><a class="ml-22" title="英文书籍">英文书籍</a></h3>
                                    <em>&gt;</em></div>
                                <div class="menu-item menu-in top">
                                    <div class="area-in">
                                        <div class="area-bg">
                                            <div class="menu-srot">
                                                <div class="sort-side">
                                                    <dl class="dl-sort">
                                                        <dt><span title="创新天地">创新天地</span></dt>
                                                        <?php if(is_array($good6) || $good6 instanceof \think\Collection || $good6 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good6) ? array_slice($good6,0,4, true) : $good6->slice(0,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                        <dd><a title=<?php echo htmlentities($goodss['product_name']); ?> href=<?php echo htmlentities($goodss['url']); ?>><span><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dl>
                                                    <dl class="dl-sort">
                                                        <dt><span title="人与自然">人与自然</span></dt>
                                                        <?php if(is_array($good6) || $good6 instanceof \think\Collection || $good6 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good6) ? array_slice($good6,4,4, true) : $good6->slice(4,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                        <dd><a title=<?php echo htmlentities($goodss['product_name']); ?> href=<?php echo htmlentities($goodss['url']); ?>><span><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dl>
                                                    <dl class="dl-sort">
                                                        <dt><span title="无限未来">无限未来</span></dt>
                                                        <?php if(is_array($good6) || $good6 instanceof \think\Collection || $good6 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good6) ? array_slice($good6,8,4, true) : $good6->slice(8,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                        <dd><a title=<?php echo htmlentities($goodss['product_name']); ?> href=<?php echo htmlentities($goodss['url']); ?>><span><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dl>
                                                </div>
                                                <div class="brand-side">
                                                    <dl class="dl-sort"><dt><span>热门图书</span></dt>
                                                        <?php if(is_array($good2) || $good2 instanceof \think\Collection || $good2 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good2) ? array_slice($good2,20,6, true) : $good2->slice(20,6, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                        <dd><a rel="nofollow" title=<?php echo htmlentities($goodss['product_name']); ?> target="_blank" href=<?php echo htmlentities($goodss['url']); ?> rel="nofollow"><span  class ="red" ><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <b class="arrow"></b>
                            </li>
                            <li class="appliance js_toggle relative">
                                <div class="category-info">
                                    <h3 class="category-name b-category-name"><a class="ml-22" title="计算机世界">计算机世界</a></h3>
                                    <em>&gt;</em></div>
                                <div class="menu-item menu-in top">
                                    <div class="area-in">
                                        <div class="area-bg">
                                            <div class="menu-srot">
                                                <div class="sort-side">
                                                    <dl class="dl-sort">
                                                        <dt><span title="创新天地">创新天地</span></dt>
                                                        <?php if(is_array($good7) || $good7 instanceof \think\Collection || $good7 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good7) ? array_slice($good7,0,4, true) : $good7->slice(0,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                        <dd><a title=<?php echo htmlentities($goodss['product_name']); ?> href=<?php echo htmlentities($goodss['url']); ?>><span><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dl>
                                                    <dl class="dl-sort">
                                                        <dt><span title="人与自然">人与自然</span></dt>
                                                        <?php if(is_array($good7) || $good7 instanceof \think\Collection || $good7 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good7) ? array_slice($good7,4,4, true) : $good7->slice(4,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                        <dd><a title=<?php echo htmlentities($goodss['product_name']); ?> href=<?php echo htmlentities($goodss['url']); ?>><span><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dl>
                                                    <dl class="dl-sort">
                                                        <dt><span title="无限未来">无限未来</span></dt>
                                                        <?php if(is_array($good7) || $good7 instanceof \think\Collection || $good7 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good7) ? array_slice($good7,8,4, true) : $good7->slice(8,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                        <dd><a title=<?php echo htmlentities($goodss['product_name']); ?> href=<?php echo htmlentities($goodss['url']); ?>><span><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dl>
                                                </div>
                                                <div class="brand-side">
                                                    <dl class="dl-sort"><dt><span>热门图书</span></dt>
                                                        <?php if(is_array($good7) || $good7 instanceof \think\Collection || $good7 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good7) ? array_slice($good7,20,6, true) : $good7->slice(20,6, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                        <dd><a rel="nofollow" title=<?php echo htmlentities($goodss['product_name']); ?> target="_blank" href=<?php echo htmlentities($goodss['url']); ?> rel="nofollow"><span  class ="red" ><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <b class="arrow"></b>
                            </li>
                            <li class="appliance js_toggle relative">
                                <div class="category-info">
                                    <h3 class="category-name b-category-name"><a class="ml-22" title="哲学宗教">哲学宗教</a></h3>
                                    <em>&gt;</em></div>
                                <div class="menu-item menu-in top">
                                    <div class="area-in">
                                        <div class="area-bg">
                                            <div class="menu-srot">
                                                <div class="sort-side">
                                                    <dl class="dl-sort">
                                                        <dt><span title="创新天地">创新天地</span></dt>
                                                        <?php if(is_array($good8) || $good8 instanceof \think\Collection || $good8 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good8) ? array_slice($good8,0,4, true) : $good8->slice(0,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                        <dd><a title=<?php echo htmlentities($goodss['product_name']); ?> href=<?php echo htmlentities($goodss['url']); ?>><span><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dl>
                                                    <dl class="dl-sort">
                                                        <dt><span title="人与自然">人与自然</span></dt>
                                                        <?php if(is_array($good8) || $good8 instanceof \think\Collection || $good8 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good8) ? array_slice($good8,4,4, true) : $good8->slice(4,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                        <dd><a title=<?php echo htmlentities($goodss['product_name']); ?> href=<?php echo htmlentities($goodss['url']); ?>><span><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dl>
                                                    <dl class="dl-sort">
                                                        <dt><span title="无限未来">无限未来</span></dt>
                                                        <?php if(is_array($good8) || $good8 instanceof \think\Collection || $good8 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good8) ? array_slice($good8,8,4, true) : $good8->slice(8,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                        <dd><a title=<?php echo htmlentities($goodss['product_name']); ?> href=<?php echo htmlentities($goodss['url']); ?>><span><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dl>
                                                </div>
                                                <div class="brand-side">
                                                    <dl class="dl-sort"><dt><span>热门图书</span></dt>
                                                        <?php if(is_array($good8) || $good8 instanceof \think\Collection || $good8 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good8) ? array_slice($good8,20,6, true) : $good8->slice(20,6, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                        <dd><a rel="nofollow" title=<?php echo htmlentities($goodss['product_name']); ?> target="_blank" href=<?php echo htmlentities($goodss['url']); ?> rel="nofollow"><span  class ="red" ><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <b class="arrow"></b>
                            </li>
                            <li class="appliance js_toggle relative">
                                <div class="category-info">
                                    <h3 class="category-name b-category-name"><a class="ml-22" title="电子产品">电子产品</a></h3>
                                    <em>&gt;</em></div>
                                <div class="menu-item menu-in top">
                                    <div class="area-in">
                                        <div class="area-bg">
                                            <div class="menu-srot">
                                                <div class="sort-side">
                                                    <dl class="dl-sort">
                                                        <dt><span title="创新天地">创新天地</span></dt>
                                                        <?php if(is_array($good9) || $good9 instanceof \think\Collection || $good9 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good9) ? array_slice($good9,0,4, true) : $good9->slice(0,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                        <dd><a title=<?php echo htmlentities($goodss['product_name']); ?> href=<?php echo htmlentities($goodss['url']); ?>><span><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dl>
                                                    <dl class="dl-sort">
                                                        <dt><span title="人与自然">人与自然</span></dt>
                                                        <?php if(is_array($good9) || $good9 instanceof \think\Collection || $good9 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good9) ? array_slice($good9,4,4, true) : $good9->slice(4,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                        <dd><a title=<?php echo htmlentities($goodss['product_name']); ?> href=<?php echo htmlentities($goodss['url']); ?>><span><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dl>
                                                    <dl class="dl-sort">
                                                        <dt><span title="无限未来">无限未来</span></dt>
                                                        <?php if(is_array($good9) || $good9 instanceof \think\Collection || $good9 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good9) ? array_slice($good9,8,4, true) : $good9->slice(8,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                        <dd><a title=<?php echo htmlentities($goodss['product_name']); ?> href=<?php echo htmlentities($goodss['url']); ?>><span><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dl>
                                                </div>
                                                <div class="brand-side">
                                                    <dl class="dl-sort"><dt><span>热门图书</span></dt>
                                                        <?php if(is_array($good9) || $good9 instanceof \think\Collection || $good9 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good9) ? array_slice($good9,20,6, true) : $good9->slice(20,6, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                        <dd><a rel="nofollow" title=<?php echo htmlentities($goodss['product_name']); ?> target="_blank" href=<?php echo htmlentities($goodss['url']); ?> rel="nofollow"><span  class ="red" ><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <b class="arrow"></b>
                            </li>
                            <li class="appliance js_toggle relative last">
                                <div class="category-info">
                                    <h3 class="category-name b-category-name"><a class="ml-22" title="品牌服饰">品牌服饰</a></h3>
                                    <em>&gt;</em></div>
                                <div class="menu-item menu-in top">
                                    <div class="area-in">
                                        <div class="area-bg">
                                            <div class="menu-srot">
                                                <div class="sort-side">
                                                    <dl class="dl-sort">
                                                        <dt><span title="创新天地">创新天地</span></dt>
                                                        <?php if(is_array($good10) || $good10 instanceof \think\Collection || $good10 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good10) ? array_slice($good10,0,4, true) : $good10->slice(0,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                        <dd><a title=<?php echo htmlentities($goodss['product_name']); ?> href=<?php echo htmlentities($goodss['url']); ?>><span><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dl>
                                                    <dl class="dl-sort">
                                                        <dt><span title="人与自然">人与自然</span></dt>
                                                        <?php if(is_array($good10) || $good10 instanceof \think\Collection || $good10 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good10) ? array_slice($good10,4,4, true) : $good10->slice(4,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                        <dd><a title=<?php echo htmlentities($goodss['product_name']); ?> href=<?php echo htmlentities($goodss['url']); ?>><span><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dl>
                                                    <dl class="dl-sort">
                                                        <dt><span title="无限未来">无限未来</span></dt>
                                                        <?php if(is_array($good10) || $good10 instanceof \think\Collection || $good10 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good10) ? array_slice($good10,8,4, true) : $good10->slice(8,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                        <dd><a title=<?php echo htmlentities($goodss['product_name']); ?> href=<?php echo htmlentities($goodss['url']); ?>><span><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dl>
                                                </div>
                                                <div class="brand-side">
                                                    <dl class="dl-sort"><dt><span>热门图书</span></dt>
                                                        <?php if(is_array($good10) || $good10 instanceof \think\Collection || $good10 instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($good10) ? array_slice($good10,20,6, true) : $good10->slice(20,6, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodss): $mod = ($i % 2 );++$i;?>
                                                        <dd><a rel="nofollow" title=<?php echo htmlentities($goodss['product_name']); ?> target="_blank" href=<?php echo htmlentities($goodss['url']); ?> rel="nofollow"><span  class ="red" ><?php echo htmlentities($goodss['product_name']); ?></span></a></dd>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>


        <!--轮播-->

        <script type="text/javascript">
            (function() {
                $('.am-slider').flexslider();
            });
            $(document).ready(function() {
                $("li").hover(function() {
                    $(".category-content .category-list li.first .menu-in").css("display", "none");
                    $(".category-content .category-list li.first").removeClass("hover");
                    $(this).addClass("hover");
                    $(this).children("div.menu-in").css("display", "block")
                }, function() {
                    $(this).removeClass("hover")
                    $(this).children("div.menu-in").css("display", "none")
                });
            })
        </script>



        <!--小导航 -->

    <script type="text/javascript">
        if ($(window).width() < 640) {
            function autoScroll(obj) {
                $(obj).find("ul").animate({
                    marginTop: "-39px"
                }, 500, function() {
                    $(this).css({
                        marginTop: "0px"
                    }).find("li:first").appendTo(this);
                })
            }
            $(function() {
                setInterval('autoScroll(".demo")', 3000);
            })
        }
    </script>
</div>
<div class="shopMainbg">
    <div class="shopMain" id="shopmain">

        <!--今日推荐 -->

        <div class="am-g am-g-fixed recommendation">
            <div class="clock am-u-sm-3" ">
<!--            <img src="/static/images/2016.png "></img>-->
            <p>今日<br>推荐</p>
        </div>
        <?php if(is_array($login) || $login instanceof \think\Collection || $login instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($login) ? array_slice($login,6,3, true) : $login->slice(6,3, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lists): $mod = ($i % 2 );++$i;?>
        <div class="am-u-sm-4 am-u-lg-3 ">
            <div class="info ">
                <h3><?php echo htmlentities($lists['product_name']); ?></h3>
                <h4>开年购书赢好礼</h4>
            </div>
            <div class="recommendationMain one">
                <a href="<?php echo htmlentities($lists['url']); ?>"><img src=<?php echo htmlentities($lists['pic_url']); ?>></img></a>
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>

    </div>
    <div class="clear "></div>
    <!--热门活动 -->


    <div id="f1">
        <!--热门搜索-->

        <div class="am-container ">
            <div class="shopTitle ">
                <h4>热门书籍</h4>
                <h3>每一部书籍都是文化的传承和发展</h3>
                <div class="today-brands ">
                    <a href="# ">水浒传</a>
                    <a href="# ">三国演义</a>
                    <a href="# ">红楼梦 </a>
                    <a href="# ">我和我的祖国</a>
                    <a href="# ">聊斋</a>
                    <a href="# ">呼啸山庄</a>
                </div>
                <span class="more ">
                    <a href="# ">更多热门<i class="am-icon-angle-right" style="padding-left:10px ;" ></i></a>
                        </span>
            </div>
        </div>

        <div class="am-g am-g-fixed floodFour">
            <div class="am-u-sm-5 am-u-md-4 text-one list ">
                <div class="word">
                    <a class="outer" href="#"><span class="inner"><b class="text">读</b></span></a>
                    <a class="outer" href="#"><span class="inner"><b class="text">文</b></span></a>
                    <a class="outer" href="#"><span class="inner"><b class="text">学</b></span></a>
                    <a class="outer" href="#"><span class="inner"><b class="text">知</b></span></a>
                    <a class="outer" href="#"><span class="inner"><b class="text">名</b></span></a>
                    <a class="outer" href="#"><span class="inner"><b class="text">著</b></span></a>
                </div>
                <a href="# ">
                    <div class="outer-con ">
                        <div class="title ">
                            开抢啦！
                        </div>
                        <div class="sub-title ">
                            热门图书五折起！！
                        </div>
                    </div>
                    <img src="/static/images/act1.png " />
                </a>
                <div class="triangle-topright"></div>
            </div>
            <?php if(is_array($login) || $login instanceof \think\Collection || $login instanceof \think\Paginator): $i = 0; $__LIST__ = $login;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$lists): $mod = ($i % 2 );++$i;?>
            <div class="am-u-sm-3 am-u-md-2 text-three last big ">
                <div class="outer-con ">
                    <div class="title ">
                        <?php echo htmlentities($lists['product_name']); ?>
                    </div>
                    <div class="sub-title ">
                        ￥<?php echo htmlentities($lists['cost']); ?>/本
                    </div>
                    <i class="am-icon-shopping-basket am-icon-md  seprate"></i>
                </div>
                <a href=<?php echo htmlentities($lists['url']); ?>><img src=<?php echo htmlentities($lists['pic_url']); ?> /></a>
            </div>
            <?php endforeach; endif; else: echo "$empty" ;endif; ?>
        </div>
        <div id="divcss5"><?php echo $login; ?></div>
        <div class="clear "></div>
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
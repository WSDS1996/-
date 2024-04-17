<?php /*a:4:{s:77:"C:\Users\Administrator\tp5.1\application\admin\view\admin\product_detail.html";i:1585716321;s:68:"C:\Users\Administrator\tp5.1\application\admin\view\common\base.html";i:1585648311;s:70:"C:\Users\Administrator\tp5.1\application\admin\view\common\header.html";i:1585827206;s:69:"C:\Users\Administrator\tp5.1\application\admin\view\common\foots.html";i:1585648311;}*/ ?>
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
            <h2 class="fl">商品详情示例</h2>
            <a class="fr top_rt_btn">返回产品列表</a>
        </div>
        <form action="/admin/admin/add_product" method="post" enctype="multipart/form-data">
            <ul class="ulColumn2">
                <li>
                    <span class="item_name" style="width:120px;">商品名称：</span>
                    <input type="text" class="textbox textbox_295" name="product_name" placeholder="商品名称..."/>
                    <span class="errorTips">错误提示信息...</span>
                </li>
                <li>
                    <span class="item_name" style="width:120px;">商品货号：</span>
                    <input type="text" class="textbox" name="product_id" readonly placeholder="商品货号为:<?php echo htmlentities($num); ?>" style="font-size: 20px" value=<?php echo htmlentities($num); ?> />
                    <span class="errorTips">此文本框不可以编辑，系统自动生成！！</span>
                </li>
                <li>
                    <span class="item_name" style="width:120px;">状态：</span>
                    <select class="select" name="state">
                        <option value="1">1：上架</option>
                        <option value="0">0：下架</option>
                    </select>
                    <span class="errorTips">错误提示信息...</span>
                </li>
                <li>
                    <span class="item_name" style="width:120px;">分类：</span>
                    <select class="select" name="category_id">
                        <option>请选择书籍分类：</option>
                        <option value="1">图书/童书</option>
                        <option value="2">教辅/考试</option>
                        <option value="3">人文社科</option>
                        <option value="4">网络文学</option>
                        <option value="5">文学名著</option>
                        <option value="6">英文书籍</option>
                        <option value="7">计算机世界</option>
                        <option value="8">哲学宗教</option>
                        <option value="9">电子产品</option>
                        <option value="10 ">品牌服饰</option>
                    </select>
                    <span class="errorTips">错误提示信息...</span>
                </li>
                <li>
                    <span class="item_name" style="width:120px;">推荐：</span>
                    <label class="single_selection"><input type="radio" name="name"/>是否精品</label>
                    <label class="single_selection"><input type="radio" name="name"/>是否热销</label>
                    <label class="single_selection"><input type="radio" name="name"/>是否新品</label>
                </li>

                <li style="display: inline">
                    <span class="item_name" style="width:120px;">上传图片：</span>
                    <label class="uploadImg">
                        <input type="file" name="myfile1"/>
                        <span>上传图片1</span>
                    </label>
                </li>
                <li style="display: inline">
                    <label class="uploadImg">
                        <input type="file" name="myfile2"/>
                        <span>上传图片2</span>
                    </label>
                </li>
                <li style="display: inline">
                    <label class="uploadImg">
                        <input type="file" name="myfile3"/>
                        <span>上传图片3</span>
                    </label>
                </li>
                <li style="display: inline">
                    <label class="uploadImg">
                        <input type="file" name="myfile4"/>
                        <span>上传图片4</span>
                    </label>
                </li>

                <li>
                    <span class="item_name" style="width:120px;">产品详情：</span>
                    <input type="text" name="descript" class="textbox textbox_295" placeholder="请输入简要描述">
                </li>
                <li>
                    <span class="item_name" style="width:120px;">出版社信息：</span>
                    <input type="text" name="press_name" class="textbox textbox_295" placeholder="请输入书籍的出版社">
                </li>
                <li>
                    <span class="item_name" style="width:120px;">商品标价：</span>
                    <input type="text" name="price" class="textbox textbox_295" placeholder="请输入商品标价">
                </li>
                <li>
                    <span class="item_name" style="width:120px;">商品售价：</span>
                    <input type="text" name="cost" class="textbox textbox_295" placeholder="请输入商品售价">
                </li>
                <li>
                    <span class="item_name" style="width:120px;">商品库存：</span>
                    <input type="text" class="textbox textbox_295" placeholder="请输入商品库存">
                </li>
                <li>
                    <span class="item_name" style="width:120px;">商品标价：</span>
                    <input type="text" name="stock" class="textbox textbox_295" placeholder="请输入商品标价">
                </li>
                <li style="display: inline">
                    <span class="item_name" style="width:120px;">商品的规格：</span>
                    <input type="text" name="length" style="width: 30px;" class="textbox textbox_295" placeholder="长">X
                </li>
                <li style="display: inline">
                    <input type="text" name="weight" style="width: 30px;" class="textbox textbox_295" placeholder="宽">X
                </li>
                <li style="display: inline">
                    <input type="text" name="height" style="width: 30px;" class="textbox textbox_295" placeholder="高">
                </li>
                <li style="display: inline">
                    <input type="text" name="widght" style="width: 30px;" class="textbox textbox_295" placeholder="重量">g
                </li>
                <li>
                    <span class="item_name" style="width:120px;"></span>
                    <input type="submit" class="link_btn"/>
                </li>
            </ul>
        </form>
    </div>
</section>





</body>
</html>
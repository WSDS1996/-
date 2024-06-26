<?php /*a:1:{s:82:"C:\Users\Administrator\tp5.1\application\index\view\introduction\introduction.html";i:1588756572;}*/ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<title>商品页面</title>

	<link href="/static/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css" />
	<link href="/static/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
	<link href="/static/basic/css/demo.css" rel="stylesheet" type="text/css" />
	<link type="text/css" href="/static/css/optstyle.css" rel="stylesheet" />
	<link type="text/css" href="/static/css/style.css" rel="stylesheet" />

	<script type="text/javascript" src="/static/basic/js/jquery-1.7.min.js"></script>
	<script type="text/javascript" src="/static/basic/js/quick_links.js"></script>

	<script type="text/javascript" src="/static/AmazeUI-2.4.2/assets/js/amazeui.js"></script>
	<script type="text/javascript" src="/static/js/jquery.imagezoom.min.js"></script>
	<script type="text/javascript" src="/static/js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="/static/js/list.js"></script>

</head>

<body>
<?php if(is_array($introduction) || $introduction instanceof \think\Collection || $introduction instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($introduction) ? array_slice($introduction,0,1, true) : $introduction->slice(0,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$good): $mod = ($i % 2 );++$i;?>


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
			<div class="menu-hd"><a href="#" target="_top" class="h">我的御书房</a></div>
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
	<div class="logo"><a href="/index/index/index"><img src="/static/images/logo.png" /></a> </div>
	<div class="logoBig">
		<li><a href="/index/login/login"><img src="/static/images/logobig.png" /></a></li>
	</div>
	<div class="search-bar pr">
		<a name="index_none_header_sysc" href="#"></a>
		<form action="/index/introduction/search" method="post">
			<input id="searchInput" name="index_none_header_sysc" type="text" placeholder="搜索" autocomplete="off">
			<input id="ai-topsearch" class="submit am-btn" value="搜索"  type="submit">
		</form>
	</div>
</div>

<div class="clear"></div>
<b class="line"></b>
<div class="listMain">

	<!--分类-->
	<div class="nav-table">
		<div class="long-title"><span class="all-goods">全部分类</span></div>
		<div class="nav-cont">
			<ul>
				<li class="index"><a href="/index/login/login">首页</a></li>
				<li class="qc"><a href="#">三国</a></li>
				<li class="qc"><a href="#">水浒</a></li>
				<li class="qc"><a href="#">红楼梦</a></li>
				<li class="qc last"><a href="#">西游记</a></li>
			</ul>
			<div class="nav-extra">
				<i class="am-icon-user-secret am-icon-md nav-user"></i><b></b>我的福利
				<i class="am-icon-angle-right" style="padding-left: 10px;"></i>
			</div>
		</div>
	</div>
	<ol class="am-breadcrumb am-breadcrumb-slash">
		<li><a href="/index/login/login">首页</a></li>
		<li><a href="#">分类</a></li>
		<li class="am-active">内容</li>
	</ol>
	<script type="text/javascript">
		$(function() {});
		$(window).load(function() {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function(slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<div class="scoll">
		<section class="slider">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<img src="/static/images/01.jpg" title="pic" />
					</li>
					<li>
						<img src="/static/images/02.jpg" />
					</li>
					<li>
						<img src="/static/images/03.jpg" />
					</li>
				</ul>
			</div>
		</section>
	</div>

	<!--放大镜-->

	<div class="item-inform">
		<div class="clearfixLeft" id="clearcontent">

			<div class="box">
				<script type="text/javascript">
					$(document).ready(function() {
						$(".jqzoom").imagezoom();
						$("#thumblist li a").click(function() {
							$(this).parents("li").addClass("tb-selected").siblings().removeClass("tb-selected");
							$(".jqzoom").attr('src', $(this).find("img").attr("mid"));
							$(".jqzoom").attr('rel', $(this).find("img").attr("big"));
						});
					});
				</script>

				<div class="tb-booth tb-pic tb-s310">
					<a href="/static/images/01.jpg"><img src=<?php echo htmlentities($good['pic_url']); ?> alt="细节展示放大镜特效" rel=<?php echo htmlentities($good['pic_url']); ?> class="jqzoom" /></a>
				</div>
			</div>

			<div class="clear"></div>
		</div>

		<div class="clearfixRight">

			<!--规格属性-->
			<!--名称-->
			<div class="tb-detail-hd">
				<h1>
					<?php echo htmlentities($good['product_name']); ?>——<?php echo htmlentities($good['descript']); ?>
				</h1>
			</div>
			<div class="tb-detail-list">
				<!--价格-->
				<div class="tb-detail-price">
					<li class="price iteminfo_price">
						<dt>促销价</dt>
						<dd><em>¥</em><b class="sys_item_price"><?php echo htmlentities($good['cost']); ?></b>  </dd>
					</li>
					<li class="price iteminfo_mktprice">
						<dt>原价</dt>
						<dd><em>¥</em><b class="sys_item_mktprice"><?php echo htmlentities($good['price']); ?></b></dd>
					</li>
					<div class="clear"></div>
				</div>

				<!--地址-->
				<dl class="iteminfo_parameter freight">
					<dt>配送至</dt>
					<div class="iteminfo_freprice">
						<div class="am-form-content address">
							<select data-am-selected>
								<option value="a">各省</option>
							</select>
							<select data-am-selected>
								<option value="a">各市</option>
							</select>
							<select data-am-selected>
								<option value="a">各区</option>
							</select>
						</div>
						<div class="pay-logis">
							统一<b class="sys_item_freprice">包邮</b>
						</div>
					</div>
				</dl>
				<div class="clear"></div>

				<!--销量-->
				<ul class="tm-ind-panel">
					<li class="tm-ind-item tm-ind-sellCount canClick">
						<div class="tm-indcon"><span class="tm-label">月销量</span><span class="tm-count"><?php echo htmlentities($good['m_sales_volume']); ?></span></div>
					</li>
					<li class="tm-ind-item tm-ind-sumCount canClick">
						<div class="tm-indcon"><span class="tm-label">累计销量</span><span class="tm-count"><?php echo htmlentities($good['y_sales_volume']); ?></span></div>
					</li>
					<li class="tm-ind-item tm-ind-reviewCount canClick tm-line3">
						<div class="tm-indcon"><span class="tm-label">累计评价</span><span class="tm-count">640</span></div>
					</li>
				</ul>
				<div class="clear"></div>

				<!--各种规格-->
				<dl class="iteminfo_parameter sys_item_specpara">
					<dt class="theme-login"><div class="cart-title">可选规格<span class="am-icon-angle-right"></span></div></dt>
					<dd>
						<!--操作页面-->

						<div class="theme-popover-mask"></div>

						<div class="theme-popover">
							<div class="theme-span"></div>
							<div class="theme-poptit">
								<a href="javascript:;" title="关闭" class="close">×</a>
							</div>
							<div class="theme-popbod dform">
								<form class="theme-signin" name="loginform" action="" method="post">

									<div class="theme-signin-left">

										<div class="theme-options">
											<div class="cart-title">包装</div>
											<ul>
												<li class="sku-line selected">手袋简易套装<i></i></li>
												<li class="sku-line">精美奢华套装<i></i></li>
												<li class="sku-line">豪华礼盒套装<i></i></li>
											</ul>
										</div>
										<div class="theme-options">
											<div class="cart-title number">数量</div>
					<dd>
						<input id="min" class="am-btn am-btn-default" name="" type="button" value="-" />
						<input id="text_box" name="" type="text" value="1" style="width:30px;" />
						<input id="add" class="am-btn am-btn-default" name="" type="button" value="+" />
						<span id="Stock" class="tb-hidden">库存<span class="stock"><?php echo htmlentities($good['stock']); ?></span>件</span>
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
				<img src="/static/images/songzi.jpg" />
			</div>
			<div class="text-info">
				<span class="J_Price price-now">¥39.00</span>
				<span id="Stock" class="tb-hidden">库存<span class="stock">1000</span>件</span>
			</div>
		</div>

		</form>
	</div>
</div>

</dd>
</dl>
<div class="clear"></div>
<!--活动	-->
<div class="shopPromotion gold">
	<div class="hot">
		<dt class="tb-metatit">店铺优惠</dt>
		<div class="gold-list">
			<p>购物满2件打8折，满3件7折<span>点击领券<i class="am-icon-sort-down"></i></span></p>
		</div>
	</div>
	<div class="clear"></div>
	<div class="coupon">
		<dt class="tb-metatit">优惠券</dt>
		<div class="gold-list">
			<ul>
				<li>125减5</li>
				<li>198减10</li>
				<li>298减20</li>
			</ul>
		</div>
	</div>
</div>
</div>

<div class="pay">
	<div class="pay-opt">
		<a href="/index/login/login"><span class="am-icon-home am-icon-fw">首页</span></a>
		<a><span class="am-icon-heart am-icon-fw">收藏</span></a>

	</div>
	<li>
		<div class="clearfix tb-btn tb-btn-buy theme-login">
			<a id="LikBuy" title="返回商品首页" href="/index/login/login">返回首页</a>
		</div>
	</li>
	<li>
		<div class="clearfix tb-btn tb-btn-basket theme-login">
			<a id="LikBasket" title="加入购物车" href="javascript:addCart();"><i></i>加入购物车</a>
		</div>
	</li>
	<script type="text/javascript">
		function addCart() {
			var num=document.getElementById('product_num').innerHTML;
			var url="/index/shopcart/addcart";
			var date={"product_id":num,"num":$("#text_box").val()};
			var success=function(reponse){
				if(reponse==0){
					alert("添加失败,您还没有登录！！");
				}else {
					alert("添加成功");
				}
			}
			$.post(url,date,success,"json");
		}
	</script>

</div>

</div>

<div class="clear"></div>

</div>


<!-- introduce-->

<div class="introduce">
	<div class="browse">
		<div class="mc">
			<ul>
				<div class="mt">
					<h2>热门书籍推荐</h2>
				</div>

				<li class="first">
					<div class="p-img">
						<a  href="/index/introduction/introduction?id=1"> <img class="" src="/static/image/1.jpg"> </a>
					</div>
					<div class="p-name"><a href="/index/introduction/introduction?id=1">
						水浒传梁山108好汉，中华文化的瑰宝级名著。
					</a>
					</div>
					<div class="p-price"><strong>￥14.4</strong></div>
				</li>
				<li>
					<div class="p-img">
						<a  href="/index/introduction/introduction?id=2"> <img class="" src="/static/image/2.jpg"> </a>
					</div>
					<div class="p-name"><a href="/index/introduction/introduction?id=2">
						东汉末年分三国，草船借箭，火烧赤壁......
					</a>
					</div>
					<div class="p-price"><strong>￥28.80</strong></div>
				</li>
				<li>
					<div class="p-img">
						<a  href="/index/introduction/introduction?id=3"> <img class="" src="/static/image/3.jpg"> </a>
					</div>
					<div class="p-name"><a href="/index/introduction/introduction?id=3">
						贾府的恩怨情仇，家族的兴衰没落......
					</a>
					</div>
					<div class="p-price"><strong>￥38.8</strong></div>
				</li>
				<li>
					<div class="p-img">
						<a  href="/index/introduction/introduction?id=4"> <img class="" src="/static/image/4.jpg"> </a>
					</div>
					<div class="p-name"><a href="/index/introduction/introduction?id=4">
						四个人西天取经的故事
					</a>
					</div>
					<div class="p-price"><strong>￥48.8</strong></div>
				</li>

			</ul>
		</div>
	</div>
	<div class="introduceMain">
		<div class="am-tabs" data-am-tabs>
			<ul class="am-avg-sm-3 am-tabs-nav am-nav am-nav-tabs">
				<li class="am-active">
					<a href="#">

						<span class="index-needs-dt-txt">书籍详情</span></a>

				</li>

				<li>
					<a href="#">

						<span class="index-needs-dt-txt">全部评价</span></a>

				</li>

			</ul>

			<div class="am-tabs-bd">

				<div class="am-tab-panel am-fade am-in am-active">
					<div class="J_Brand">

						<div class="attr-list-hd tm-clear">
							<h4>产品参数：</h4></div>
						<div class="clear"></div>
						<ul id="J_AttrUL">
							<li title="">书籍名称:&nbsp;<?php echo htmlentities($good['product_name']); ?></li>
							<li title="">书籍分类:&nbsp;<?php echo htmlentities($good['category_name']); ?></li>
							<li title="">出版社:&nbsp;<?php echo htmlentities($good['press_name']); ?></li>
							<li title="">长*宽*高:&nbsp;<?php echo htmlentities($good['length']); ?>*<?php echo htmlentities($good['widght']); ?>*<?php echo htmlentities($good['height']); ?></li>
							<li title="">产品规格:&nbsp;<?php echo htmlentities($good['weight']); ?>g</li>
							<li title="">产品标准号:&nbsp;GB/T 221<?php echo htmlentities($good['product_id']); ?></li>
							<li title="">生产许可证编号：&nbsp;QS4201 1801 022<?php echo htmlentities($good['product_id']); ?></li>
							<li title="" id="product_num" style="color: #ffffff"><?php echo htmlentities($good['product_id']); ?></li>
						</ul>
						<div class="clear"></div>
					</div>

					<div class="details">
						<div class="attr-list-hd after-market-hd">
							<h4>商品细节</h4>
						</div>
						<div class="twlistNews">
							<img src=<?php echo htmlentities($good['pic_url1']); ?> />
							<img src=<?php echo htmlentities($good['pic_url2']); ?> />
							<img src=<?php echo htmlentities($good['pic_url3']); ?> />
						</div>
					</div>
					<div class="clear"></div>

				</div>

				<div class="am-tab-panel am-fade">

					<div class="actor-new">
						<div class="rate">
							<strong>100<span>%</span></strong><br> <span>好评度</span>
						</div>
						<dl>
							<dt>买家印象</dt>
							<dd class="p-bfc">
								<q class="comm-tags"><span>味道不错</span><em>(2177)</em></q>
								<q class="comm-tags"><span>颗粒饱满</span><em>(1860)</em></q>
								<q class="comm-tags"><span>口感好</span><em>(1823)</em></q>
								<q class="comm-tags"><span>商品不错</span><em>(1689)</em></q>
								<q class="comm-tags"><span>香脆可口</span><em>(1488)</em></q>
								<q class="comm-tags"><span>个个开口</span><em>(1392)</em></q>
								<q class="comm-tags"><span>价格便宜</span><em>(1119)</em></q>
								<q class="comm-tags"><span>特价买的</span><em>(865)</em></q>
								<q class="comm-tags"><span>皮很薄</span><em>(831)</em></q>
							</dd>
						</dl>
					</div>
					<div class="clear"></div>
					<div class="tb-r-filter-bar">
						<ul class=" tb-taglist am-avg-sm-4">
							<li class="tb-taglist-li tb-taglist-li-current">
								<div class="comment-info">
									<span>全部评价</span>
									<span class="tb-tbcr-num">(32)</span>
								</div>
							</li>

							<li class="tb-taglist-li tb-taglist-li-1">
								<div class="comment-info">
									<span>好评</span>
									<span class="tb-tbcr-num">(32)</span>
								</div>
							</li>

							<li class="tb-taglist-li tb-taglist-li-0">
								<div class="comment-info">
									<span>中评</span>
									<span class="tb-tbcr-num">(32)</span>
								</div>
							</li>

							<li class="tb-taglist-li tb-taglist-li--1">
								<div class="comment-info">
									<span>差评</span>
									<span class="tb-tbcr-num">(32)</span>
								</div>
							</li>
						</ul>
					</div>
					<div class="clear"></div>

					<ul class="am-comments-list am-comments-list-flip">
						<li class="am-comment">
							<!-- 评论容器 -->
							<a href="">
								<img class="am-comment-avatar" src="/static/images/hwbn40x40.jpg" />
								<!-- 评论者头像 -->
							</a>

							<div class="am-comment-main">
								<!-- 评论内容容器 -->
								<header class="am-comment-hd">
									<!--<h3 class="am-comment-title">评论标题</h3>-->
									<div class="am-comment-meta">
										<!-- 评论元数据 -->
										<a href="#link-to-user" class="am-comment-author">b***1 (匿名)</a>
										<!-- 评论者 -->
										评论于
										<time datetime="">2015年11月02日 17:46</time>
									</div>
								</header>

								<div class="am-comment-bd">
									<div class="tb-rev-item " data-id="255776406962">
										<div class="J_TbcRate_ReviewContent tb-tbcr-content ">
											摸起来丝滑柔软，不厚，没色差，颜色好看！买这个衣服还接到诈骗电话，我很好奇他们是怎么知道我买了这件衣服，并且还知道我的电话的！
										</div>
										<div class="tb-r-act-bar">
											颜色分类：柠檬黄&nbsp;&nbsp;尺码：S
										</div>
									</div>

								</div>
								<!-- 评论内容 -->
							</div>
						</li>
						<li class="am-comment">
							<!-- 评论容器 -->
							<a href="">
								<img class="am-comment-avatar" src="/static/images/hwbn40x40.jpg" />
								<!-- 评论者头像 -->
							</a>

							<div class="am-comment-main">
								<!-- 评论内容容器 -->
								<header class="am-comment-hd">
									<!--<h3 class="am-comment-title">评论标题</h3>-->
									<div class="am-comment-meta">
										<!-- 评论元数据 -->
										<a href="#link-to-user" class="am-comment-author">l***4 (匿名)</a>
										<!-- 评论者 -->
										评论于
										<time datetime="">2015年10月28日 11:33</time>
									</div>
								</header>

								<div class="am-comment-bd">
									<div class="tb-rev-item " data-id="255095758792">
										<div class="J_TbcRate_ReviewContent tb-tbcr-content ">
											没有色差，很暖和……美美的
										</div>
										<div class="tb-r-act-bar">
											颜色分类：蓝调灰&nbsp;&nbsp;尺码：2XL
										</div>
									</div>

								</div>
								<!-- 评论内容 -->
							</div>
						</li>
						<li class="am-comment">
							<!-- 评论容器 -->
							<a href="">
								<img class="am-comment-avatar" src="/static/images/hwbn40x40.jpg" />
								<!-- 评论者头像 -->
							</a>

							<div class="am-comment-main">
								<!-- 评论内容容器 -->
								<header class="am-comment-hd">
									<!--<h3 class="am-comment-title">评论标题</h3>-->
									<div class="am-comment-meta">
										<!-- 评论元数据 -->
										<a href="#link-to-user" class="am-comment-author">b***1 (匿名)</a>
										<!-- 评论者 -->
										评论于
										<time datetime="">2015年11月02日 17:46</time>
									</div>
								</header>

								<div class="am-comment-bd">
									<div class="tb-rev-item " data-id="255776406962">
										<div class="J_TbcRate_ReviewContent tb-tbcr-content ">
											摸起来丝滑柔软，不厚，没色差，颜色好看！买这个衣服还接到诈骗电话，我很好奇他们是怎么知道我买了这件衣服，并且还知道我的电话的！
										</div>
										<div class="tb-r-act-bar">
											颜色分类：柠檬黄&nbsp;&nbsp;尺码：S
										</div>
									</div>

								</div>
								<!-- 评论内容 -->
							</div>
						</li>
						<li class="am-comment">
							<!-- 评论容器 -->
							<a href="">
								<img class="am-comment-avatar" src="/static/images/hwbn40x40.jpg" />
								<!-- 评论者头像 -->
							</a>

							<div class="am-comment-main">
								<!-- 评论内容容器 -->
								<header class="am-comment-hd">
									<!--<h3 class="am-comment-title">评论标题</h3>-->
									<div class="am-comment-meta">
										<!-- 评论元数据 -->
										<a href="#link-to-user" class="am-comment-author">h***n (匿名)</a>
										<!-- 评论者 -->
										评论于
										<time datetime="">2015年11月25日 12:48</time>
									</div>
								</header>

								<div class="am-comment-bd">
									<div class="tb-rev-item " data-id="258040417670">
										<div class="J_TbcRate_ReviewContent tb-tbcr-content ">
											式样不错，初冬穿
										</div>
										<div class="tb-r-act-bar">
											颜色分类：柠檬黄&nbsp;&nbsp;尺码：L
										</div>
									</div>
								</div>
								<!-- 评论内容 -->
							</div>
						</li>

						<li class="am-comment">
							<!-- 评论容器 -->
							<a href="">
								<img class="am-comment-avatar" src="/static/images/hwbn40x40.jpg" />
								<!-- 评论者头像 -->
							</a>

							<div class="am-comment-main">
								<!-- 评论内容容器 -->
								<header class="am-comment-hd">
									<!--<h3 class="am-comment-title">评论标题</h3>-->
									<div class="am-comment-meta">
										<!-- 评论元数据 -->
										<a href="#link-to-user" class="am-comment-author">b***1 (匿名)</a>
										<!-- 评论者 -->
										评论于
										<time datetime="">2015年11月02日 17:46</time>
									</div>
								</header>

								<div class="am-comment-bd">
									<div class="tb-rev-item " data-id="255776406962">
										<div class="J_TbcRate_ReviewContent tb-tbcr-content ">
											摸起来丝滑柔软，不厚，没色差，颜色好看！买这个衣服还接到诈骗电话，我很好奇他们是怎么知道我买了这件衣服，并且还知道我的电话的！
										</div>
										<div class="tb-r-act-bar">
											颜色分类：柠檬黄&nbsp;&nbsp;尺码：S
										</div>
									</div>

								</div>
								<!-- 评论内容 -->
							</div>
						</li>
						<li class="am-comment">
							<!-- 评论容器 -->
							<a href="">
								<img class="am-comment-avatar" src="/static/images/hwbn40x40.jpg" />
								<!-- 评论者头像 -->
							</a>

							<div class="am-comment-main">
								<!-- 评论内容容器 -->
								<header class="am-comment-hd">
									<!--<h3 class="am-comment-title">评论标题</h3>-->
									<div class="am-comment-meta">
										<!-- 评论元数据 -->
										<a href="#link-to-user" class="am-comment-author">l***4 (匿名)</a>
										<!-- 评论者 -->
										评论于
										<time datetime="">2015年10月28日 11:33</time>
									</div>
								</header>

								<div class="am-comment-bd">
									<div class="tb-rev-item " data-id="255095758792">
										<div class="J_TbcRate_ReviewContent tb-tbcr-content ">
											没有色差，很暖和……美美的
										</div>
										<div class="tb-r-act-bar">
											颜色分类：蓝调灰&nbsp;&nbsp;尺码：2XL
										</div>
									</div>

								</div>
								<!-- 评论内容 -->
							</div>
						</li>
						<li class="am-comment">
							<!-- 评论容器 -->
							<a href="">
								<img class="am-comment-avatar" src="/static/images/hwbn40x40.jpg" />
								<!-- 评论者头像 -->
							</a>

							<div class="am-comment-main">
								<!-- 评论内容容器 -->
								<header class="am-comment-hd">
									<!--<h3 class="am-comment-title">评论标题</h3>-->
									<div class="am-comment-meta">
										<!-- 评论元数据 -->
										<a href="#link-to-user" class="am-comment-author">b***1 (匿名)</a>
										<!-- 评论者 -->
										评论于
										<time datetime="">2015年11月02日 17:46</time>
									</div>
								</header>

								<div class="am-comment-bd">
									<div class="tb-rev-item " data-id="255776406962">
										<div class="J_TbcRate_ReviewContent tb-tbcr-content ">
											摸起来丝滑柔软，不厚，没色差，颜色好看！买这个衣服还接到诈骗电话，我很好奇他们是怎么知道我买了这件衣服，并且还知道我的电话的！
										</div>
										<div class="tb-r-act-bar">
											颜色分类：柠檬黄&nbsp;&nbsp;尺码：S
										</div>
									</div>

								</div>
								<!-- 评论内容 -->
							</div>
						</li>
						<li class="am-comment">
							<!-- 评论容器 -->
							<a href="">
								<img class="am-comment-avatar" src="/static/images/hwbn40x40.jpg" />
								<!-- 评论者头像 -->
							</a>

							<div class="am-comment-main">
								<!-- 评论内容容器 -->
								<header class="am-comment-hd">
									<!--<h3 class="am-comment-title">评论标题</h3>-->
									<div class="am-comment-meta">
										<!-- 评论元数据 -->
										<a href="#link-to-user" class="am-comment-author">h***n (匿名)</a>
										<!-- 评论者 -->
										评论于
										<time datetime="">2015年11月25日 12:48</time>
									</div>
								</header>

								<div class="am-comment-bd">
									<div class="tb-rev-item " data-id="258040417670">
										<div class="J_TbcRate_ReviewContent tb-tbcr-content ">
											式样不错，初冬穿
										</div>
										<div class="tb-r-act-bar">
											颜色分类：柠檬黄&nbsp;&nbsp;尺码：L
										</div>
									</div>
								</div>
								<!-- 评论内容 -->
							</div>
						</li>
						<li class="am-comment">
							<!-- 评论容器 -->
							<a href="">
								<img class="am-comment-avatar" src="/static/images/hwbn40x40.jpg" />
								<!-- 评论者头像 -->
							</a>

							<div class="am-comment-main">
								<!-- 评论内容容器 -->
								<header class="am-comment-hd">
									<!--<h3 class="am-comment-title">评论标题</h3>-->
									<div class="am-comment-meta">
										<!-- 评论元数据 -->
										<a href="#link-to-user" class="am-comment-author">b***1 (匿名)</a>
										<!-- 评论者 -->
										评论于
										<time datetime="">2015年11月02日 17:46</time>
									</div>
								</header>

								<div class="am-comment-bd">
									<div class="tb-rev-item " data-id="255776406962">
										<div class="J_TbcRate_ReviewContent tb-tbcr-content ">
											摸起来丝滑柔软，不厚，没色差，颜色好看！买这个衣服还接到诈骗电话，我很好奇他们是怎么知道我买了这件衣服，并且还知道我的电话的！
										</div>
										<div class="tb-r-act-bar">
											颜色分类：柠檬黄&nbsp;&nbsp;尺码：S
										</div>
									</div>

								</div>
								<!-- 评论内容 -->
							</div>
						</li>
						<li class="am-comment">
							<!-- 评论容器 -->
							<a href="">
								<img class="am-comment-avatar" src="/static/images/hwbn40x40.jpg" />
								<!-- 评论者头像 -->
							</a>

							<div class="am-comment-main">
								<!-- 评论内容容器 -->
								<header class="am-comment-hd">
									<!--<h3 class="am-comment-title">评论标题</h3>-->
									<div class="am-comment-meta">
										<!-- 评论元数据 -->
										<a href="#link-to-user" class="am-comment-author">l***4 (匿名)</a>
										<!-- 评论者 -->
										评论于
										<time datetime="">2015年10月28日 11:33</time>
									</div>
								</header>

								<div class="am-comment-bd">
									<div class="tb-rev-item " data-id="255095758792">
										<div class="J_TbcRate_ReviewContent tb-tbcr-content ">
											没有色差，很暖和……美美的
										</div>
										<div class="tb-r-act-bar">
											颜色分类：蓝调灰&nbsp;&nbsp;尺码：2XL
										</div>
									</div>

								</div>
								<!-- 评论内容 -->
							</div>
						</li>
						<li class="am-comment">
							<!-- 评论容器 -->
							<a href="">
								<img class="am-comment-avatar" src="/static/images/hwbn40x40.jpg" />
								<!-- 评论者头像 -->
							</a>

							<div class="am-comment-main">
								<!-- 评论内容容器 -->
								<header class="am-comment-hd">
									<!--<h3 class="am-comment-title">评论标题</h3>-->
									<div class="am-comment-meta">
										<!-- 评论元数据 -->
										<a href="#link-to-user" class="am-comment-author">b***1 (匿名)</a>
										<!-- 评论者 -->
										评论于
										<time datetime="">2015年11月02日 17:46</time>
									</div>
								</header>

								<div class="am-comment-bd">
									<div class="tb-rev-item " data-id="255776406962">
										<div class="J_TbcRate_ReviewContent tb-tbcr-content ">
											摸起来丝滑柔软，不厚，没色差，颜色好看！买这个衣服还接到诈骗电话，我很好奇他们是怎么知道我买了这件衣服，并且还知道我的电话的！
										</div>
										<div class="tb-r-act-bar">
											颜色分类：柠檬黄&nbsp;&nbsp;尺码：S
										</div>
									</div>

								</div>
								<!-- 评论内容 -->
							</div>
						</li>
						<li class="am-comment">
							<!-- 评论容器 -->
							<a href="">
								<img class="am-comment-avatar" src="/static/images/hwbn40x40.jpg" />
								<!-- 评论者头像 -->
							</a>

							<div class="am-comment-main">
								<!-- 评论内容容器 -->
								<header class="am-comment-hd">
									<!--<h3 class="am-comment-title">评论标题</h3>-->
									<div class="am-comment-meta">
										<!-- 评论元数据 -->
										<a href="#link-to-user" class="am-comment-author">h***n (匿名)</a>
										<!-- 评论者 -->
										评论于
										<time datetime="">2015年11月25日 12:48</time>
									</div>
								</header>

								<div class="am-comment-bd">
									<div class="tb-rev-item " data-id="258040417670">
										<div class="J_TbcRate_ReviewContent tb-tbcr-content ">
											式样不错，初冬穿
										</div>
										<div class="tb-r-act-bar">
											颜色分类：柠檬黄&nbsp;&nbsp;尺码：L
										</div>
									</div>
								</div>
								<!-- 评论内容 -->
							</div>
						</li>

					</ul>

					<div class="clear"></div>

					<!--分页 -->
					<ul class="am-pagination am-pagination-right">
						<li class="am-disabled"><a href="#">&laquo;</a></li>
						<li class="am-active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">&raquo;</a></li>
					</ul>
					<div class="clear"></div>

					<div class="tb-reviewsft">
						<div class="tb-rate-alert type-attention">购买前请查看该商品的 <a href="#" target="_blank">购物保障</a>，明确您的售后保障权益。</div>
					</div>

				</div>

				<div class="am-tab-panel am-fade">
					<div class="like">
						<ul class="am-avg-sm-2 am-avg-md-3 am-avg-lg-4 boxes">
							<li>
								<div class="i-pic limit">
									<img src="/static/images/imgsearch1.jpg" />
									<p>【良品铺子_开口松子】零食坚果特产炒货
										<span>东北红松子奶油味</span></p>
									<p class="price fl">
										<b>¥</b>
										<strong>298.00</strong>
									</p>
								</div>
							</li>
							<li>
								<div class="i-pic limit">
									<img src="/static/images/imgsearch1.jpg" />
									<p>【良品铺子_开口松子】零食坚果特产炒货
										<span>东北红松子奶油味</span></p>
									<p class="price fl">
										<b>¥</b>
										<strong>298.00</strong>
									</p>
								</div>
							</li>
							<li>
								<div class="i-pic limit">
									<img src="/static/images/imgsearch1.jpg" />
									<p>【良品铺子_开口松子】零食坚果特产炒货
										<span>东北红松子奶油味</span></p>
									<p class="price fl">
										<b>¥</b>
										<strong>298.00</strong>
									</p>
								</div>
							</li>
							<li>
								<div class="i-pic limit">
									<img src="/static/images/imgsearch1.jpg" />
									<p>【良品铺子_开口松子】零食坚果特产炒货
										<span>东北红松子奶油味</span></p>
									<p class="price fl">
										<b>¥</b>
										<strong>298.00</strong>
									</p>
								</div>
							</li>
							<li>
								<div class="i-pic limit">
									<img src="/static/images/imgsearch1.jpg" />
									<p>【良品铺子_开口松子】零食坚果特产炒货
										<span>东北红松子奶油味</span></p>
									<p class="price fl">
										<b>¥</b>
										<strong>298.00</strong>
									</p>
								</div>
							</li>
							<li>
								<div class="i-pic limit">
									<img src="/static/images/imgsearch1.jpg" />
									<p>【良品铺子_开口松子】零食坚果特产炒货
										<span>东北红松子奶油味</span></p>
									<p class="price fl">
										<b>¥</b>
										<strong>298.00</strong>
									</p>
								</div>
							</li>
							<li>
								<div class="i-pic limit">
									<img src="/static/images/imgsearch1.jpg" />
									<p>【良品铺子_开口松子】零食坚果特产炒货
										<span>东北红松子奶油味</span></p>
									<p class="price fl">
										<b>¥</b>
										<strong>298.00</strong>
									</p>
								</div>
							</li>
							<li>
								<div class="i-pic limit">
									<img src="/static/images/imgsearch1.jpg" />
									<p>【良品铺子_开口松子】零食坚果特产炒货
										<span>东北红松子奶油味</span></p>
									<p class="price fl">
										<b>¥</b>
										<strong>298.00</strong>
									</p>
								</div>
							</li>
							<li>
								<div class="i-pic limit">
									<img src="/static/images/imgsearch1.jpg" />
									<p>【良品铺子_开口松子】零食坚果特产炒货
										<span>东北红松子奶油味</span></p>
									<p class="price fl">
										<b>¥</b>
										<strong>298.00</strong>
									</p>
								</div>
							</li>
							<li>
								<div class="i-pic limit">
									<img src="/static/images/imgsearch1.jpg" />
									<p>【良品铺子_开口松子】零食坚果特产炒货
										<span>东北红松子奶油味</span></p>
									<p class="price fl">
										<b>¥</b>
										<strong>298.00</strong>
									</p>
								</div>
							</li>
							<li>
								<div class="i-pic limit">
									<img src="/static/images/imgsearch1.jpg" />
									<p>【良品铺子_开口松子】零食坚果特产炒货
										<span>东北红松子奶油味</span></p>
									<p class="price fl">
										<b>¥</b>
										<strong>298.00</strong>
									</p>
								</div>
							</li>
							<li>
								<div class="i-pic limit">
									<img src="/static/images/imgsearch1.jpg" />
									<p>【良品铺子_开口松子】零食坚果特产炒货
										<span>东北红松子奶油味</span></p>
									<p class="price fl">
										<b>¥</b>
										<strong>298.00</strong>
									</p>
								</div>
							</li>
						</ul>
					</div>
					<div class="clear"></div>

					<!--分页 -->
					<ul class="am-pagination am-pagination-right">
						<li class="am-disabled"><a href="#">&laquo;</a></li>
						<li class="am-active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">&raquo;</a></li>
					</ul>
					<div class="clear"></div>

				</div>

			</div>

		</div>

		<div class="clear"></div>

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

</div>
</div>
<!--菜单 -->
<div class=tip>
	<div id="sidebar">
		<div id="wrap">
			<div id="prof" class="item">
				<a href="#">
					<span class="setting"></span>
				</a>
				<div class="ibar_login_box status_login">
					<div class="avatar_box">
						<p class="avatar_imgbox"><img src="/static/images/no-img_mid_.jpg" /></p>
						<ul class="user_info">
							<?php if(app('session')->get('user_id')): ?>
							<li><?php echo htmlentities(app('session')->get('user_name')); ?></li>
							<li>级别&nbsp;<b style="color: gold">钻石会员</b></li>
							<?php else: ?>
							<li>您还没有登录</li>
							<?php endif; ?>
						</ul>
					</div>
					<div class="login_btnbox">
						<a href="#" class="login_order">我的订单</a>
					</div>
					<i class="icon_arrow_white"></i>
				</div>

			</div>
			<div id="shopCart" class="item">
				<a href="/index/shopcart/shopcart">
					<span class="message"></span>
				</a>
				<p>
					购物车
				</p>
				<p class="cart_num">0</p>
			</div>

			<div id="foot" class="item">
				<a href="#">
					<span class="zuji"></span>
				</a>
				<div class="mp_tooltip">
					我的御书房
					<i class="icon_arrow_right_black"></i>
				</div>
			</div>

			<div id="brand" class="item">
				<a href="#">
					<span class="wdsc"><img src="/static/images/wdsc.png" /></span>
				</a>
				<div class="mp_tooltip">
					我的收藏
					<i class="icon_arrow_right_black"></i>
				</div>
			</div>

			<div id="broadcast" class="item">
				<a href="#">
					<span class="chongzhi"><img src="/static/images/chongzhi.png" /></span>
				</a>
				<div class="mp_tooltip">
					我要充值
					<i class="icon_arrow_right_black"></i>
				</div>
			</div>

			<div class="quick_toggle">
				<li class="qtitem">
					<a href="#"><span class="kfzx"></span></a>
					<div class="mp_tooltip">客服中心<i class="icon_arrow_right_black"></i></div>
				</li>
				<!--二维码 -->
				<li class="qtitem">
					<a href="#none"><span class="mpbtn_qrcode"></span></a>
					<div class="mp_qrcode" style="display:none;"><img src="/static/images/weixin_code_145.png" /><i class="icon_arrow_white"></i></div>
				</li>
				<li class="qtitem">
					<a href="#top" class="return_top"><span class="top"></span></a>
				</li>
			</div>

			<!--回到顶部 -->
			<div id="quick_links_pop" class="quick_links_pop hide"></div>

		</div>

	</div>
	<div id="prof-content" class="nav-content">
		<div class="nav-con-close">
			<i class="am-icon-angle-right am-icon-fw"></i>
		</div>
		<div>
			我
		</div>
	</div>
	<div id="shopCart-content" class="nav-content">
		<div class="nav-con-close">
			<i class="am-icon-angle-right am-icon-fw"></i>
		</div>
		<div>
			购物车
		</div>
	</div>
	<div id="asset-content" class="nav-content">
		<div class="nav-con-close">
			<i class="am-icon-angle-right am-icon-fw"></i>
		</div>
		<div>
			资产
		</div>

		<div class="ia-head-list">
			<a href="#" target="_blank" class="pl">
				<div class="num">0</div>
				<div class="text">优惠券</div>
			</a>
			<a href="#" target="_blank" class="pl">
				<div class="num">0</div>
				<div class="text">红包</div>
			</a>
			<a href="#" target="_blank" class="pl money">
				<div class="num">￥0</div>
				<div class="text">余额</div>
			</a>
		</div>

	</div>
	<div id="foot-content" class="nav-content">
		<div class="nav-con-close">
			<i class="am-icon-angle-right am-icon-fw"></i>
		</div>
		<div>
			足迹
		</div>
	</div>
	<div id="brand-content" class="nav-content">
		<div class="nav-con-close">
			<i class="am-icon-angle-right am-icon-fw"></i>
		</div>
		<div>
			收藏
		</div>
	</div>
	<div id="broadcast-content" class="nav-content">
		<div class="nav-con-close">
			<i class="am-icon-angle-right am-icon-fw"></i>
		</div>
		<div>
			充值
		</div>
	</div>
</div>

<?php endforeach; endif; else: echo "" ;endif; ?>
</body>

</html>
<?php /*a:1:{s:74:"C:\Users\Administrator\tp5.1\application\index\view\register\register.html";i:1588761863;}*/ ?>
<!DOCTYPE html>
<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>注册</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<meta name="renderer" content="webkit">
	<meta http-equiv="Cache-Control" content="no-siteapp" />

	<link rel="stylesheet" href="/static/AmazeUI-2.4.2/assets/css/amazeui.min.css" />
	<link href="/static/css/dlstyle.css" rel="stylesheet" type="text/css">
	<script src="/static/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
	<script src="/static/AmazeUI-2.4.2/assets/js/amazeui.min.js"></script>

</head>

<body>

<div class="login-boxtitle">
	<a href="/index/index/index"><img alt="" src="/static/images/logobig.png" /></a>
</div>

<div class="res-banner">
	<div class="res-main">
		<div class="login-banner-bg"><span></span><img src="/static/images/big.jpg" /></div>
		<div class="login-box">

			<div class="am-tabs" id="doc-my-tabs">
				<ul class="am-tabs-nav am-nav am-nav-tabs am-nav-justify">
					<li class="am-active"><a href="">邮箱注册</a></li>
					<li><a href="">手机号注册</a></li>
				</ul>

				<div class="am-tabs-bd">
					<div class="am-tab-panel am-active">
						<form method="post" action="/index/register/zhuce" id="mail">

							<div class="user-email">
								<label for="email"><i class="am-icon-envelope-o"></i></label>
								<input type="email" name="email" id="email" placeholder="请输入邮箱账号">
							</div>
							<div class="user-pass">
								<label for="password"><i class="am-icon-lock"></i></label>
								<input type="password" name="registerpwd" id="password" placeholder="设置密码">
							</div>
							<div class="user-pass">
								<label for="passwordRepeat"><i class="am-icon-lock"></i></label>
								<input type="password" name="checkpwd" id="passwordRepeat" placeholder="确认密码">
							</div>

						</form>

						<div class="login-links">
							<label for="reader-me">
								<input id="reader-me" type="checkbox"> 点击表示您同意商城《服务协议》
							</label>
						</div>
						<div class="am-cf">
							<input type="submit" form="mail" name="" value="注册" class="am-btn am-btn-primary am-btn-sm am-fl">
						</div>

					</div>

					<div class="am-tab-panel">
						<form method="post" action="/index/register/zhuceiphone" id="phonenum">
							<div class="user-phone">
								<label for="phone"><i class="am-icon-mobile-phone am-icon-md"></i></label>
								<input type="tel" name="iphonenum" id="phoness" placeholder="请输入手机号">
							</div>
							<div class="verification">
								<label for="code"><i class="am-icon-code-fork"></i></label>
								<input type="tel" name="checknum" id="code" placeholder="请输入验证码">
								<a class="btn" href="javascript:void(0);" onclick="sendMobileCode();" id="sendMobileCode">
									<span id="dyMobileButton">获取</span></a>
							</div>


							<div class="user-pass">
								<label for="password"><i class="am-icon-lock"></i></label>
								<input type="password" name="pwds" id="setpasswordiphone" placeholder="设置密码">
							</div>
							<div class="user-pass">
								<label for="passwordRepeat"><i class="am-icon-lock"></i></label>
								<input type="password" form="phonenum" name="pwdss" id="setpasswordRepeatiphone" placeholder="确认密码">
							</div>
							<div class="am-cf">
								<input type="submit" name="" value="注册" class="am-btn am-btn-primary am-btn-sm am-fl">
							</div>
						</form>
						<div class="login-links">
							<label for="reader-me">
								<input id="reader-me" type="checkbox"> 点击表示您同意商城《服务协议》
							</label>
						</div>

						<hr>
					</div>

					<script>
						$(function() {
							$('#doc-my-tabs').tabs();
						})
					</script>

				</div>
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
				<a href="# ">关于公司</a>
				<a href="# ">合作伙伴</a>
				<a href="# ">联系我们</a>
				<a href="# ">网站地图</a>
				<em>© 2015-2025 huang314.cn 黄山一石版权所有</em>
			</p>
		</div>
	</div>
<script>
	var checkname=document.getElementById('password');
	checkname.onblur=function () {
	var pwd=checkname.value;
	if(pwd==''){
	alert('密码不能为空');
	}
	}

</script>


	<script>
		var checknamerepeat=document.getElementById('passwordRepeat');
		checknamerepeat.onblur=function () {
			var pwdrepeat=checkname.value;
			if(pwdrepeat==''){
				alert('密码不能为空');
			}
		}

		var checkpwd=document.getElementById('setpasswordiphone');
		checkpwd.onblur=function () {
			var pwdrepeats=checkpwd.value;
			if(pwdrepeats==''){
				alert('密码不能为空');
			}
		}

		var checkpwdss=document.getElementById('setpasswordRepeatiphone');
		checkpwdss.onblur=function () {
			var pwdrepeats=checkpwd.value;
			var pwdrepeatss=checkpwdss.value;
			if(pwdrepeatss!=pwdrepeats){
				alert('两次密码输入不一致！');
			}
		}




	</script>

	<script type="text/javascript">
		function  sendMobileCode() {
			var times=document.getElementById('dyMobileButton');
			sendyzm(times);
		}

		function sendyzm(obj) {
			var phone = document.getElementById('phoness').value;
			var result = isphonenum(phone);
			if (result) {

				var url="/index/login/sendsa";
				var date= {'phone': phone};
				var success=function(reponse){
					if(reponse!=0){
						alert("短信发送成功");
					}else {
						alert("短信发送失败");
					}
				}
				$.post(url,date,success,"json");
				setTime(obj);//开始倒计时
			}
		}

		var timess=document.getElementById('sendMobileCode');
		var countdown = 30;
		function setTime(obj) {
			if (countdown == 0) {
				timess.onclick=function () {
					sendMobileCode();
				};
				obj.innerText=("获取");
				countdown = 30;//60秒过后button上的文字初始化,计时器初始化;
				return;
			} else {
				// timess.setAttribute('disabled', true);
				timess.onclick=function () {

				};
				obj.innerText=countdown;
				countdown--;
			}
			setTimeout(function () {
				setTime(obj)
			}, 1000) //每1000毫秒执行一次
		}

		//校验手机号是否合法
		function isphonenum(num) {
			var phonenum = num;
		//	var reg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
			var reg=/^1(?:3\d|4[4-9]|5[0-35-9]|6[67]|7[013-8]|8\d|9\d)\d{8}$/;
			if (!reg.test(phonenum)) {
				alert('请输入有效的手机号码！');
				return false;
			} else {
				return true;
			}
		}

	</script>
</body>

</html>
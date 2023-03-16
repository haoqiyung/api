<?php
include('../../../tianyi.php');
?>

<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
  <meta name="renderer" content="webkit"/>
  <title>QQ提取SID&SKEY&P_skey</title>
  <link href="//lib.baomitu.com/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="//lib.baomitu.com/jquery/1.12.4/jquery.min.js"></script>
  <script src="//lib.baomitu.com/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--[if lt IE 9]>
    <script src="//lib.baomitu.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="//lib.baomitu.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
<script src="login.js"></script>
<script src="getsid.js"></script>
</head>
<body>
<div class="container">
<div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 center-block" style="float: none;">
<div class="panel panel-primary">
	<div class="panel-heading" style="text-align: center;"><h3 class="panel-title">
		QQ提取SID&SKEY&P_skey
	</div>
	<div class="panel-body" style="text-align: center;">
		<div class="list-group">
			<div class="list-group-item"><a href="index.php">密码方式</a>｜<a href="index2.php">扫描二维码方式</a></div>
			<div class="list-group-item"><img src="https://q4.qlogo.cn/headimg_dl?dst_uin=<?php echo $kefu; ?>&spec=100" width="80px"></div>
			<div id="load" class="alert alert-info" style="display:none;"></div>
			<div id="login" class="list-group-item">
			<div class="form-group qqlogin">
			<div class="input-group"><div class="input-group-addon">QQ帐号</div>
			<input type="text" id="uin" value="" class="form-control" onkeydown="if(event.keyCode==13){submit.click()}"/>
			</div></div>
			<div class="form-group qqlogin">
			<div class="input-group"><div class="input-group-addon">QQ密码</div>
			<input type="text" id="pwd" value="" class="form-control" onkeydown="if(event.keyCode==13){submit.click()}"/>
			</div></div>
			<div class="form-group qqlogin">
			<div class="input-group">QQ密码形式：
			<label><input type="radio" name="ismd5" value="0" checked>明文</label>&nbsp;<label><input type="radio" name="ismd5" value="1">MD5</label>
			</div></div>
			<div class="form-group code" style="display:none;">
			<div id="codeimg"></div>
			<div class="input-group"><div class="input-group-addon">验证码</div>
			<input type="text" id="code" class="form-control" onkeydown="if(event.keyCode==13){submit.click()}" placeholder="输入验证码">
			</div>
			</div>
			<div class="form-group smscode" style="display:none;">
			<div class="input-group">
			<input type="text" id="sms_code" class="form-control" onkeydown="if(event.keyCode==13){submit.click()}" placeholder="输入短信验证码">
			<a class="input-group-addon" href="javascript:send_sms_code()" id="sendsms">发送验证码</a>
			</div>
			</div>
			<button type="button" id="submit" class="btn btn-primary btn-block">立即获取</button>
			<br/><a href="./">返回重新获取</a>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</body>
</html>
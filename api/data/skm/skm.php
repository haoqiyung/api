<!doctype html> 
<html> 
<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $_GET['biaoti']; ?></title>
    <script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js"></script>
    <script>
    var tox = "https://q2.qlogo.cn/headimg_dl?dst_uin=<?php echo $_GET['touxiang']; ?>&spec=5";//显示头像
    var nic = "<?php echo $_GET['nicheng']; ?>"; //收款人昵称
    var nic1 = "https://api.xingzhige.com/API/Qun/api.php?qq=<?php echo $_GET['touxiang']; ?>";
    var setting = {
        // 在以下双引号中粘贴QQ钱包收款链接
        qqUrl: "<?php echo $_GET['qq']; ?>",
        
        // 在以下双引号中粘贴微信收款链接
        wechatUrl: "<?php echo $_GET['vx']; ?>",
        
        // 在以下双引号中粘贴支付宝收款链接
        aliUrl: "<?php echo $_GET['zfb']; ?>",
        
        // 用于动态生成二维码的API，不需要修改。
        qrcodeApi: "https://api.xingzhige.com/API/Qrcode/api.php?text="    
    }
    </script>
    <style>
/* Mark By HTTPS://DWQ.IM */
*{margin:0;padding:0;font-family:Microsoft yahei}.code-item{width:100%;margin:0 auto;padding-bottom:1px;display:none;height:99.9%}.code-title{height:75pt;background-color:#f2f2f2;background-position:center;background-repeat:no-repeat;background-size:50%}.code-area,.code-footer{text-align:center}.code-footer{height:5pc;background-color:#fff;color:#666;line-height:5pc;font-size:20px;margin:-2px 2px 2px}body,html{height:100%;margin:0;font-size:16px}
body,html{height:100%;margin:0;font-size:16px}
body{font-family:-apple-system-font,YouYuan,Microsoft YaHei,Helvetica Neue,Helvetica,sans-serif}
.ui-qlogo{width:55px;height:55px;background-size:100% 100%;margin:5px;border-radius:5px}
.code-item{width:100%;display:none}
#color{background-color:#009688}
.ui-flex-pack-center{-webkit-box-pack:center}
.ui-flex-ver{-webkit-box-orient:vertical}
.ui-flex-align-center{-webkit-box-align:center}
h1,h2,h3,h4,h5{margin:0}
.ui-panel{display:-webkit-box;width:100%;-webkit-box-sizing:border-box}
.icon-weixin2{font-size:54px;color:#46a638}
h1{font-size:25px}
#ui-head{background-color:#fff;padding:10px 0}
h2{font-size:16px;font-weight:400}
.ui-tips{background-color:#fff;color:#46a638;font-size:20px;text-align:center;padding:5px 0;margin:25px auto;width:240px;border-radius:20px}
.ui-qrcode{background-color:#fff;border-radius:15px;width:230px;height:230px;margin:0 auto;text-align:center}
.ui-qrcode img{width:210px;height:210px;margin-top:10px}
.ui-paytext{border-bottom:1px dotted #fff;margin:0 auto;width:215px;height:25px}
#ui-setps{color:#fff;text-align:center;font-size:14px}
#ui-setps i{font-size:30px}
.ui-circle{background-color:#fff;border-radius:50%;color:#46a638;text-align:center;font-size:11px;width:16px;height:16px;line-height:16px;margin:0 auto;margin-bottom:10px}
#ui-setps>div{padding:15px 10px 0 10px}
.ui-box{-webkit-box-flex:1}
.ui-padtop10{padding-top:8px;width: 85px;}
@font-face{font-family:iconfont;src:url(iconfont.eot?t=1535512025124);src:url(iconfont.eot?t=1535512025124#iefix) format('embedded-opentype'),url('data:application/x-font-woff;charset=utf-8;base64,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') format('woff'),url(iconfont.ttf?t=1535512025124) format('truetype'),url(iconfont.svg?t=1535512025124#iconfont) format('svg')}
.iconfont{font-family:iconfont!important;font-size:16px;font-style:normal;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
.icon-icon-check-solid:before{content:"\e672"}
.icon-chenggong:before{content:"\e638"}
.icon-Success-Small:before{content:"\e602"}
.icon-chenggong1:before{content:"\e666"}
.icon-caozuochenggong:before{content:"\e7f8"}
.icon-changan:before{content:"\e83e"}
.icon-tianjiachenggong:before{content:"\e65e"}
.icon-erweima:before{content:"\e607"}
.icon-ic_check:before{content:"\e601"}
    </style>
</head>
<body>
    <!-- 万能收款码展示区域 -->
    <div class="code-item" id="code-all" style="background: linear-gradient(90deg,#20a0ff,#20b8ff);display:none">
	<div id="ui-head" class="ui-panel ui-flex-pack-center ui-flex-align-center">
    <img class="ui-qlogo" id="qlogo" src="">
    <div><h1><a id="mingzi" style="background: linear-gradient(90deg,#20a0ff,#20b8ff);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">名字</a></h1><h2 id="qnick"><a style="background: linear-gradient(90deg,#20a0ff,#20b8ff);-webkit-background-clip: text;-webkit-text-fill-color: transparent;"><b>扫码打赏</b></a></h2></div>
  </div>
  <div class="ui-box ui-panel ui-flex-align-center">
    <div id="ui-content" class="ui-panel ui-flex-ver ui-flex-pack-center">
      <div class="ui-tips"><a style="background: linear-gradient(90deg,#20a0ff,#20b8ff);-webkit-background-clip: text;-webkit-text-fill-color: transparent;"><b>手机扫码打赏</b></a></div>
      <br>
      <div class="ui-qrcode"><div class="code-area">
            <img id="page-url" src="">
        </div></div>
      <div class="ui-paytext"></div>
      <div id="ui-setps" class="ui-panel ui-flex-pack-center">
        <div>
          <div class="ui-circle"><a style="background: linear-gradient(90deg,#20a0ff,#20b8ff);-webkit-background-clip: text;-webkit-text-fill-color: transparent;"><b>1</b></a></div>
          <i class="icon iconfont icon-changan"></i>
          <div class="ui-padtop10"><b>截图二维码</b></div>
        </div>
        <div>
          <div class="ui-circle"><a style="background: linear-gradient(90deg,#20a0ff,#20b8ff);-webkit-background-clip: text;-webkit-text-fill-color: transparent;"><b>2</b></a></div>
          <i class="icon iconfont icon-erweima"></i>
          <div class="ui-padtop10"><b>扫描二维码</b></div>
        </div>
        <div>
          <div class="ui-circle"><a style="background: linear-gradient(90deg,#20a0ff,#20b8ff);-webkit-background-clip: text;-webkit-text-fill-color: transparent;"><b>3</b></a></div>
          <i class="icon iconfont icon-icon-check-solid"></i>
          <div class="ui-padtop10"><b>输入金额打赏</b></div>
        </div>
      </div>
    </div>
  </div>
    </div>
    
    <!-- QQ钱包二维码展示区域 -->
    <div class="code-item" id="code-qq" style="background: linear-gradient(90deg,#20a0ff,#20b8ff);display:none">
       <div id="ui-head" class="ui-panel ui-flex-pack-center ui-flex-align-center">
    <img class="ui-qlogo" id="qlogo1" src="">
    <div><h1><a id="mingzi1" style="background: linear-gradient(90deg,#20a0ff,#20b8ff);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">名字</a></h1><h2 id="qnick"><a style="background: linear-gradient(90deg,#20a0ff,#20b8ff);-webkit-background-clip: text;-webkit-text-fill-color: transparent;"><b>QQ打赏</b></a></h2></div>
  </div>
  <div class="ui-box ui-panel ui-flex-align-center">
    <div id="ui-content" class="ui-panel ui-flex-ver ui-flex-pack-center">
      <div class="ui-tips"><a style="background: linear-gradient(90deg,#20a0ff,#20b8ff);-webkit-background-clip: text;-webkit-text-fill-color: transparent;"><b>长按扫码打赏</b></a></div>
      <br>
      <div class="ui-qrcode"><div class="code-area">
            <img id="qq-url" src="">
        </div></div>
      <div class="ui-paytext"></div>
      <div id="ui-setps" class="ui-panel ui-flex-pack-center">
        <div>
          <div class="ui-circle"><a style="background: linear-gradient(90deg,#20a0ff,#20b8ff);-webkit-background-clip: text;-webkit-text-fill-color: transparent;"><b>1</b></a></div>
          <i class="icon iconfont icon-changan"></i>
          <div class="ui-padtop10"><b>长按二维码</b></div>
        </div>
        <div>
          <div class="ui-circle"><a style="background: linear-gradient(90deg,#20a0ff,#20b8ff);-webkit-background-clip: text;-webkit-text-fill-color: transparent;"><b>2</b></a></div>
          <i class="icon iconfont icon-erweima"></i>
          <div class="ui-padtop10"><b>扫描二维码</b></div>
        </div>
        <div>
          <div class="ui-circle"><a style="background: linear-gradient(90deg,#20a0ff,#20b8ff);-webkit-background-clip: text;-webkit-text-fill-color: transparent;"><b>3</b></a></div>
          <i class="icon iconfont icon-icon-check-solid"></i>
          <div class="ui-padtop10"><b>输入金额打赏</b></div>
        </div>
      </div>
    </div>
  </div>
    </div>
    
    <!-- 微信二维码展示区域 -->
    <div class="code-item" id="code-wechat" style="background: linear-gradient(90deg,#44AF35,#378F2B);display:none">
        <div id="ui-head" class="ui-panel ui-flex-pack-center ui-flex-align-center">
    <img class="ui-qlogo" id="qlogo2" src="">
    <div><h1><a id="mingzi2" style="background: linear-gradient(90deg,#44AF35,#378F2B);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">名字</a></h1><h2 id="qnick"><a style="background: linear-gradient(90deg,#44AF35,#378F2B);-webkit-background-clip: text;-webkit-text-fill-color: transparent;"><b>微信打赏</b></a></h2></div>
  </div>
  <div class="ui-box ui-panel ui-flex-align-center">
    <div id="ui-content" class="ui-panel ui-flex-ver ui-flex-pack-center">
      <div class="ui-tips"><a style="background: linear-gradient(90deg,#44AF35,#378F2B);-webkit-background-clip: text;-webkit-text-fill-color: transparent;"><b>长按扫码打赏</b></a></div>
      <br>
      <div class="ui-qrcode"><div class="code-area">
            <img id="wechat-url" src="">
        </div></div>
      <div class="ui-paytext"></div>
      <div id="ui-setps" class="ui-panel ui-flex-pack-center">
        <div>
          <div class="ui-circle"><a style="background: linear-gradient(90deg,#44AF35,#378F2B);-webkit-background-clip: text;-webkit-text-fill-color: transparent;"><b>1</b></a></div>
          <i class="icon iconfont icon-changan"></i>
          <div class="ui-padtop10"><b>长按二维码</b></div>
        </div>
        <div>
          <div class="ui-circle"><a style="background: linear-gradient(90deg,#44AF35,#378F2B);-webkit-background-clip: text;-webkit-text-fill-color: transparent;"><b>2</b></a></div>
          <i class="icon iconfont icon-erweima"></i>
          <div class="ui-padtop10"><b>扫描二维码</b></div>
        </div>
        <div>
          <div class="ui-circle"><a style="background: linear-gradient(90deg,#44AF35,#378F2B);-webkit-background-clip: text;-webkit-text-fill-color: transparent;"><b>3</b></a></div>
          <i class="icon iconfont icon-icon-check-solid"></i>
          <div class="ui-padtop10"><b>输入金额打赏</b></div>
        </div>
      </div>
    </div>
  </div>
    </div>
    <script>
    if(navigator.userAgent.match(/Alipay/i)) {
        // 支付宝
        window.location.href = setting.aliUrl; 
    } else if(navigator.userAgent.match(/MicroMessenger\//i)) {
        // 微信
        document.getElementById("qlogo2").src = tox;
        document.getElementById("mingzi2").text = nic;
        document.getElementById("wechat-url").src = setting.qrcodeApi + urlEncode(setting.wechatUrl);
        document.getElementById("code-wechat").style.display = "block";
    } else if(navigator.userAgent.match(/QQ\//i)) {
        // QQ
        document.getElementById("qlogo1").src = tox;
        document.getElementById("mingzi1").text = nic;        
        document.getElementById("qq-url").src = setting.qrcodeApi + urlEncode(setting.qqUrl);
        document.getElementById("code-qq").style.display = "block";
    } else {
        // 其它，显示“万能码”
        document.getElementById("qlogo").src = tox;
        document.getElementById("mingzi").text = nic;
        document.getElementById("page-url").src = setting.qrcodeApi + urlEncode(window.location.href);
        document.getElementById("code-all").style.display = "block";
    }
    /*****************************************
     * url编码函数
     * 输入参数：待编码的字符串
     * 输出参数：编码好的
     ****************************************/
    function urlEncode(String) {
        return encodeURIComponent(String).replace(/'/g,"%27").replace(/"/g,"%22");	
    }
    </script>

</body>
</html>

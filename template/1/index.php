<?php
//include('../../tianyi.php');
?>

<?php
$data = file_get_contents("./jiekou.json");
$result = preg_match_all('/{"标题":"(.*?)","小标题":"(.*?)","地址":"(.*?)","状态":"(.*?)"}/',$data,$v);
@$gengxin = file_get_contents("http://".$_SERVER['HTTP_HOST']."/update.php");
?>

<?php
include('./template/index.php');
?>

<!doctype html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<title><?php echo $ming; ?>API - 免费提供API服务</title>
<meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title><?php echo $ming; ?>API - 提供免费接口调用平台</title>
<meta name="description" content="<?php echo $ming; ?>API是<?php echo $ming; ?>免费提供API数据接口调用服务平台 - 我们致力于为用户提供稳定、快速的免费API数据接口服务。">
<meta name="keywords" content="莹莹API,小杰API,StarCat,VPSIDC云商务,API数据接口,API,免费接口,免费api接口调用,免费API数据调用,<?php echo $ming; ?>API">
<meta name="author" content="<?php echo $ming; ?>">
<meta name="founder" content="<?php echo $ming; ?>API">
<link rel="shortcut icon" href="https://q1.qlogo.cn/g?b=qq&nk=".$qq."&s=1">
<link href="./template/1/public/layui/other/css/site.min.css" rel="stylesheet">
<link href="./template/1/public/layui/other/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="./template/1/public/layui/other/css/layui.css">
<link href="./template/1/public/layui/other/css/oneui.css" rel="stylesheet">
<script src="https://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="./template/1/public/layui/layui.all.js"></script>
<script src="../../api/data/php/yinghua/api.php"></script>
<script>
</script>
</head>
<header class="site-header">
<nav class="nav_jsxs">
<span style="float: left;"><a class="logo_jsxs" href=""></a></span>
<a href="http://api.wuxixindong.top/">首页</a>
</nav>
</nav>
</nav>
</p> 
<div class="box-text">
<h1><?php echo $ming; ?>API</h1>
<p>稳定、快速、免费的 API 接口服务<br>
<span class="package-amount">共收录了<strong><?php echo $result; ?></strong>个接口</span>
</p>
<form action="/" method="POST">
<input class="form-control search clearable" placeholder="搜索API名称，然后回车！" name="msg"> 
<i class="fa fa-search"></i></div>
</form>
</div>
<iframe width="280" scrolling="no" height="25" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=34&icon=1&num=3"></iframe></center>
</div>
<center><span> 本站网址:</span>
<font color="red">http://<?php echo $_SERVER['HTTP_HOST'];?></font>
<img width="13" height="13" src="./template/1/css/zb.png" alt="正版认证">
</center>
</div>
当前时间：<span id=localtime></span><script type="text/javascript">function showLocale(objD)
{var str,colorhead,colorfoot;var yy = objD.getYear();
if(yy<1900) yy = yy+1900;
        var MM = objD.getMonth()+1;
    if(MM<10) MM = '0' + MM;
    var dd = objD.getDate();
    if(dd<10) dd = '0' + dd;
    var hh = objD.getHours();
    if(hh<10) hh = '0' + hh;
    var mm = objD.getMinutes();
    if(mm<10) mm = '0' + mm;
    var ss = objD.getSeconds();
    if(ss<10) ss = '0' + ss;
    var ww = objD.getDay();
    if  ( ww==0 )  colorhead="<font color=\"#FF3030\">";
    if  ( ww > 0 && ww < 6 )  colorhead="<font color=\"#FF3030\">";
    if  ( ww==6 )  colorhead="<font color=\"#FF3030\">";
    if  (ww==0)  ww="星期日";
    if  (ww==1)  ww="星期一";
    if  (ww==2)  ww="星期二";
    if  (ww==3)  ww="星期三";
    if  (ww==4)  ww="星期四";
    if  (ww==5)  ww="星期五";
    if  (ww==6)  ww="星期六";
    colorfoot="</font>"
    str = colorhead + yy + "-" + MM + "-" + dd + "丨" + hh + ":" + mm + ":" + ss + "丨" + ww + colorfoot;
    return(str);}function tick()
{var today;today = new Date();document.getElementById("localtime").innerHTML = showLocale(today);window.setTimeout("tick()", 1000);}
tick();</script>
</p>
</div>
<script async src="template/1/js/busuanzi.pure.mini.js">
</script>
<p><span style="color:#FFFFFF;">总访问量：<span id="busuanzi_value_site_pv"></span>次</p></h5>
</div>
<p><span style="color:#FFFFFF;">总访客数：<span id="busuanzi_value_site_uv"></span>人</p></h5>
</div>
<p><span style="color:#FFFFFF;">总阅读量：<span id="busuanzi_value_page_pv"></span>次</p></h5>
</div>
<h5><p><span style="color:#FFFFFF;">你的IP:<script src="http://pv.sohu.com/cityjson?ie=utf-8"></script><script type="text/javascript">document.write(returnCitySN["cip"])</script> </span></p></h5>
</div>
<p><span style="color:#FFFFFF;">你的地址:<script type="text/javascript">document.write(returnCitySN["cname"])</script></span></p>
</div>
</div>
</div>
<audio autoplay> 
</audio></i>
</header><section class="content content-boxed">
<div class="row row_jsxs" id="listApi">

<?php
include('./Template.php');
?>

</section>
<div class="col-sm-12">
<div class="block block-link-hover2 ribbon ribbon-modern ribbon-success">
<div class="block-content">
<p class="text-center" style="margin-bottom: 10px"><img src="./template/1/css/beian.jpg">
<s><?php echo $beian; ?></s></p>
<p class="text-center">本网站只提供接口服务，造成的一切后果与本网站无关!如果本站发布的内容侵犯你的利益，请联系我。发送至我的邮箱<?php echo $youxiang; ?></p>
<p class="text-center">支持多个机器人平台使用本站</p>
<p class="text-center"><span id="runtime_span"></span>
<p class="text-center"><!--时间计算-->  
<span id="showtime"></span>  
<script language="javascript">  
function show_date_time(){  
window.setTimeout("show_date_time()", 1000);  
BirthDay=new Date("<?php echo $yunhang; ?>");//这个日期是可以修改的  
today=new Date();  
timeold=(today.getTime()-BirthDay.getTime());  
sectimeold=timeold/1000  
secondsold=Math.floor(sectimeold);  
msPerDay=24*60*60*1000  
e_daysold=timeold/msPerDay  
daysold=Math.floor(e_daysold);  
e_hrsold=(e_daysold-daysold)*24;  
hrsold=Math.floor(e_hrsold);  
e_minsold=(e_hrsold-hrsold)*60;  
minsold=Math.floor((e_hrsold-hrsold)*60);  
seconds=Math.floor((e_minsold-minsold)*60); 
showtime.innerHTML="本站已经稳定运行："+daysold+"天";  
}  
show_date_time();  
</script>  </p>
</div>
</div>
</div>

<footer id="footer" class="footer hidden-print">
<div class="container">
<div class="row">
<div class="footer-about col-md-6 col-sm-12" id="about">
<h4>关于 <?php echo $ming; ?>API</h4>
<p>
<p><?php echo $ming; ?>API是<a href="http://haoqi7.github.io" target="_blank" >HaoQi工作室</a>，支持并维护的 API 接口项目，致力于为用户提供稳定、快速的免费 API 接口服务平台。</p>
<p><?php echo $ming; ?>API所含接口资源均来自<a href="/" target="_blank" >网络</a>，本站不提供任何存储服务！</p>
<p>如站内接口侵犯了贵司权益，请提供相关证明材料至件<?php echo $youxiang; ?>邮箱，本站将及时处理涉及内容，并予以回复！</p>
<p>本站提供的接口造成一切后果与<?php echo $ming; ?>API无关，望熟知！</p>
</div>
<div class="footer-links col-md-4 col-sm-12">
<h4>友情链接</h4>
<ul class="list-unstyled list-inline">
<?php
include('./template/youqing.php');
?>
                                            </ul>
</div>
<div class="footer-techs col-md-2 col-sm-12">
<h4>联系我们</h4>
<ul class="list-unstyled list-inline">
<a target="_blank" href="https://api.vvhan.com/api/qqCard?qq=<?php echo $kefu; ?>">联系站长</a>
&nbsp;|&nbsp;
<a target="_blank" href="<?php echo $qun; ?>">官方群</a>
                                            </ul>
</div>
<div class="footer-techs col-md-2 col-sm-12">
</div>
</div>
</div>
</div>
<div class="copy-right">
<span>Copyright © 2022 在线API</span>
</div>

<script type="text/javascript">document.write(unescape("%3Cspan id='cnzz_stat_icon_<?php echo $guchenyu; ?>'%3E%3C/span%3E%3Cscript src='https://s9.cnzz.com/z_stat.php%3Fid%3D<?php echo $guchenyu; ?>%26online%3D1%26show%3Dline' type='text/javascript'%3E%3C/script%3E"));</script>

<script type="text/javascript">
(function() {var coreSocialistValues = ["富强", "民主", "文明", "和谐", "自由", "平等", "公正", "法治", "爱国", "敬业", "诚信", "友善"], index = Math.floor(Math.random() * coreSocialistValues.length);document.body.addEventListener('click', function(e) {if (e.target.tagName == 'A') {return;}var x = e.pageX, y = e.pageY, span = document.createElement('span');span.textContent = coreSocialistValues[index];index = (index + 1) % coreSocialistValues.length;span.style.cssText = ['z-index: 9999999; position: absolute; font-weight: bold; color: #ff6651; top: ', y - 20, 'px; left: ', x, 'px;'].join('');document.body.appendChild(span);animate(span);});function animate(el) {var i = 0, top = parseInt(el.style.top), id = setInterval(frame, 16.7);function frame() {if (i > 180) {clearInterval(id);el.parentNode.removeChild(el);} else {i+=2;el.style.top = top - i + 'px';el.style.opacity = (180 - i) / 180;}}}}());
</script></div></div></div></div></header></div></div></section></div><script type="text/javascript" src="https://ohan.gitee.io/HanKu/HanJs/HanSnow.js"></script></body>

</div></div></div></section>

<script type="text/javascript">
var tx=new Array("欢迎访问<?php echo $ming; ?>API","本站API接口免费调用","持续更新……","等你探索","谢谢访问","调用第三方接口需自行承担风险","站长QQ:<?php echo $kefu; ?>");
var txcount=4;
var i=1;
var wo=0;
var ud=1;
function animatetitle()
{
window.document.title=tx[wo].substr(0,i)+"";
if(ud==0)i--;
if(ud==1)i++;
if(i==-1){ud=1;i=0;wo++;wo=wo%txcount;}
if(i==tx[wo].length+10){ud=0;i=tx[wo].length;}
parent.window.document.title=tx[wo].substr(0,i)+"";
setTimeout("animatetitle()",100);
}
animatetitle();
</script>

<!--灯笼特效-->
  <div class="deng-box">
    <div class="deng">
      <div class="xian"></div>
      <div class="deng-a">
        <div class="deng-b">
          <div class="deng-t">❤️</div>
        </div>
      </div>
      <div class="shui shui-a">
        <div class="shui-c"></div>
        <div class="shui-b"></div>
      </div>
    </div>
  </div>
  <div class="deng-box1">
    <div class="deng">
      <div class="xian"></div>
      <div class="deng-a">
        <div class="deng-b">
          <div class="deng-t">❤️</div>
        </div>
      </div>
      <div class="shui shui-a">
        <div class="shui-c"></div>
        <div class="shui-b"></div>
      </div>
    </div>
  </div>
  <style>
    .deng-box {
      position: fixed;
      top: -30px;
      right: -20px;
      z-index: 9999;
      pointer-events: none;
    }

    .deng-box1 {
      position: fixed;
      top: -30px;
      right对: 20px;
      z-index: 9999;
      pointer-events: none;
    }


    .deng-box1 .deng {
      position: relative;
      width: 120px;
      height: 90px;
      margin: 50px;
      background: #d8000f;
      background: rgba(216, 0, 15, 0.8);
      border-radius: 50% 50%;
      -webkit-transform-origin: 50% -100px;
      -webkit-animation: swing 5s infinite ease-in-out;
      box-shadow: -5px 5px 30px 4px rgba(252, 144, 61, 1);
    }

    .deng {
      position: relative;
      width: 120px;
      height: 90px;
      margin: 50px;
      background: #d8000f;
      background: rgba(216, 0, 15, 0.8);
      border-radius: 50% 50%;
      -webkit-transform-origin: 50% -100px;
      -webkit-animation: swing 3s infinite ease-in-out;
      box-shadow: -5px 5px 50px 4px rgba(250, 108, 0, 1);
    }

    .deng-a {
      width: 100px;
      height: 90px;
      background: #d8000f;
      background: rgba(216, 0, 15, 0.1);
      margin: 12px 8px 8px 10px;
      border-radius: 50% 50%;
      border: 2px solid #dc8f03;
    }

    .deng-b {
      width: 45px;
      height: 90px;
      background: #d8000f;
      background: rgba(216, 0, 15, 0.1);
      margin: -2px 8px 8px 26px;
      border-radius: 50% 50%;
      border: 2px solid #dc8f03;
    }

    .xian {
      position: absolute;
      top: -20px;
      left: 60px;
      width: 2px;
      height: 20px;
      background: #dc8f03;
    }

    .shui-a {
      position: relative;
      width: 5px;
      height: 20px;
      margin: -5px 0 0 59px;
      -webkit-animation: swing 4s infinite ease-in-out;
      -webkit-transform-origin: 50% -45px;
      background: #ffa500;
      border-radius: 0 0 5px 5px;
    }

    .shui-b {
      position: absolute;
      top: 14px;
      left: -2px;
      width: 10px;
      height: 10px;
      background: #dc8f03;
      border-radius: 50%;
    }

    .shui-c {
      position: absolute;
      top: 18px;
      left: -2px;
      width: 10px;
      height: 35px;
      background: #ffa500;
      border-radius: 0 0 0 5px;
    }

    .deng:before {
      position: absolute;
      top: -7px;
      left: 29px;
      height: 12px;
      width: 60px;
      content: " ";
      display: block;
      z-index: 999;
      border-radius: 5px 5px 0 0;
      border: solid 1px #dc8f03;
      background: #ffa500;
      background: linear-gradient(to right, #dc8f03, #ffa500, #dc8f03, #ffa500, #dc8f03);
    }

    .deng:after {
      position: absolute;
      bottom: -7px;
      left: 10px;
      height: 12px;
      width: 60px;
      content: " ";
      display: block;
      margin-left: 20px;
      border-radius: 0 0 5px 5px;
      border: solid 1px #dc8f03;
      background: #ffa500;
      background: linear-gradient(to right, #dc8f03, #ffa500, #dc8f03, #ffa500, #dc8f03);
    }

    .deng-t {
      font-family: 华文行楷, Arial, Lucida Grande, Tahoma, sans-serif;
      font-size: 3.2rem;
      color: #dc8f03;
      font-weight: bold;
      line-height: 85px;
      text-align: center;
    }

    .night .deng-t,
    .night .deng-box,
    .night .deng-box1 {
      background: transparent !important;
    }

    @-moz-keyframes swing {
      0% {
        -moz-transform: rotate(-10deg)
      }

      50% {
        -moz-transform: rotate(10deg)
      }

      100% {
        -moz-transform: rotate(-10deg)
      }
    }

    @-webkit-keyframes swing {
      0% {
        -webkit-transform: rotate(-10deg)
      }

      50% {
        -webkit-transform: rotate(10deg)
      }

      100% {
        -webkit-transform: rotate(-10deg)
      }

<style>
.float-radius{-moz-border-radius:2px;-webkit-border-radius:2px;border-radius:2px;}
.float-text{color:#1E90FF}
.float-box{width:50px;font-size:12px;position:fixed;right:0;bottom:0;z-index:9997;}
.float-ul,.float-ul li{margin:0;padding:0;}
.float-ul{margin-top:5px;text-align:center;line-height:1.2;list-style:none;background-color:#FFF;box-shadow:0 2px 5px #e6e6e6;}
.float-ul .iconfont{font-size:18px;line-height:18px;}
.float-ul li a{display:block;width:100%;padding:10px 0;line-height:18px;}
.float-ul li a:hover{background:linear-gradient(-125deg,
#00BFFF 0%,
#00BFFF 100%);box-shadow:0 8px 10px rgba(32,160,255,.3);color:#FFF;}
.float-ul li a.qq{-moz-border-top-left-radius:4px;-moz-border-top-right-radius:4px;border-top-left-radius:4px;border-top-right-radius:4px;position:relative;}
.float-alert-box{width:180px;height:185px;background-color:#FFF;border:1px solid #ececec;position:absolute;right:56px;top:0;z-index:9998;display:none;}
.float-qq-box{padding:20px 15px;}
.float-alert-box h6{font-size:20px;color:#f9b015;}
.float-alert-box p{line-height:24px;}
.float-ul li .float-qq-box{color:#666;}
.float-qq-btn{padding:10px;background-color:#f9b015;color:#FFF;}
</style>

</section>
<script type="text/javascript">
<script src="js/jquery.min.js"></script>
<script src="js/skel.min.js"></script>
<script src="js/util.js"></script>
<script src="js/main.js"></script>
<script src="js/love.js"></script>

<p><script data-cfasync="false" src="js/email-decode.min.js"></script></p>
</body>
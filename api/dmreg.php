<?php
include("./API.php");
include("../tianyi.php");
tongji("dmreg");
$url=$_GET['url'];//需要查询的链接
$hh=$_GET['hh']?:"\n";//换行符号(默认\n)
if(!$url){echo "".$ming."API域名注册查询".$hh."━━━━━━━━━".$hh."url 参数为空".$hh."━━━━━━━━━".$hh."Tips:".$ming."API技术支持";exit;}
$url = file_get_contents("https://api.vvhan.com/api/dm?url=".$url."");
$url = json_decode($url, true);
if($url["success"]==true){
echo "".$ming."API域名注册查询".$hh."";
echo "━━━━━━━━━".$hh."";
echo "网址：".$url["domain"]."".$hh."";
echo "".$url["message"]."".$hh."";
echo "━━━━━━━━━".$hh."";
echo "Tips:".$ming."API技术支持";
}else{
echo "".$ming."API域名注册查询".$hh."";
echo "━━━━━━━━━".$hh."";
echo "本接口正在维护！".$hh."";
echo "━━━━━━━━━".$hh."";
echo "Tips:".$ming."API技术支持";
}
?>
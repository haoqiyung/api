<?php
include("./API.php");
tongji("ip");
//文本输出编码
Header('content-type:text/html;Charset=utf-8');
//定义函数
function getIP()
{
static $realip;
//定义常量
if (isset($_SERVER)){
if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
$realip = $_SERVER["HTTP_X_FORWARDED_FOR"];
} else if (isset($_SERVER["HTTP_CLIENT_IP"])) {
$realip = $_SERVER["HTTP_CLIENT_IP"];
} else {
$realip = $_SERVER["REMOTE_ADDR"];
}
} else {
if (getenv("HTTP_X_FORWARDED_FOR")){
$realip = getenv("HTTP_X_FORWARDED_FOR");
} else if (getenv("HTTP_CLIENT_IP")) {
$realip = getenv("HTTP_CLIENT_IP");
} else {
$realip = getenv("REMOTE_ADDR");
}
}
return $realip;
}
$bool = false;
if (!$bool){   
echo getip();
}
?>
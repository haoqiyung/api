<?php
include("./API.php");
include("../tianyi.php");
tongji("qwxh");
$hh=$_GET["hh"]?:"\n";//换行符号(默认\n)
$txt='data/wenben/qwxh.txt';
$a=file($txt);
$b=count($a);
$rand=rand(0,$b);
$rand_shuchu=$a[$rand];
echo "".$ming."API趣味笑话".$hh."";
echo "━━━━━━━━━".$hh."";
echo "".$rand_shuchu."";
echo "━━━━━━━━━".$hh."";
echo "Tips:".$ming."API技术支持";
?>
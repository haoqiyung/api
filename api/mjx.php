<?php
include("./API.php");
tongji("mjx");
$txt='data/wenben/mjx.txt';
$a=file($txt);
$b=count($a);
$rand=rand(0,$b);
$rand_shuchu=$a[$rand];
echo $rand_shuchu
?>
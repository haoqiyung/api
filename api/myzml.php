<?php
include("./API.php");
tongji("myzml");
$txt='data/wenben/myzml.txt';
$a=file($txt);
$b=count($a);
$rand=rand(0,$b);
$rand_shuchu=$a[$rand];
echo $rand_shuchu
?>
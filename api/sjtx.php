<?php
include("./API.php");
tongji("sjtx");
	if($_GET["lx"] == 'a1'){
		$imgurl = 'https://api.btstu.cn/sjtx/api.php?lx=a1';
	}	
	else if($_GET["lx"] == 'b1'){
		$imgurl = 'https://api.btstu.cn/sjtx/api.php?lx=b1';
	}
    else if($_GET["lx"] == 'c1'){
        $imgurl = 'https://api.btstu.cn/sjtx/api.php?lx=c1';
    }
	else if($_GET["lx"] == 'c2'){
		$imgurl = 'https://api.btstu.cn/sjtx/api.php?lx=c2';
	}
	else if($_GET["lx"] == 'c3'){
		$imgurl = 'https://api.btstu.cn/sjtx/api.php?lx=c3';
	}
	else{
	    $imgurl = 'https://api.btstu.cn/sjtx/api.php?lx=c1';
	}
    header("Location:".$imgurl);//跳转输出图片    
?>
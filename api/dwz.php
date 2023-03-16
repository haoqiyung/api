<?php
include("./API.php");
tongji("dwz");
$url=$_REQUEST["url"];//需要生成的链接
if(!$url)
{
echo json(1001,"请输入需要缩短的网址");
}
else if(file_get_contents("http://api.ft12.com/api.php?url=".$url."&apikey=15132277427@3c69cdcee64dbeef7268e233a90956bb")=="非法网址")
{
echo json(1002,"请输入正确的网址");
}else{
echo json(1000,array( "url"=>file_get_contents("http://api.ft12.com/api.php?url=".$url."&apikey=15132277427@3c69cdcee64dbeef7268e233a90956bb")));
}
?>
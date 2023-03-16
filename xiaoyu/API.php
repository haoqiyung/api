<?php
set_time_limit(60);//最大运行时长
error_reporting(0);//防止不致命错误报错影响使用。

total();
$tianyi719="./tongji/jinri/".date("Y-m-d")."/";//一天调用统计
if(!is_dir($tianyi719))
{
mkdir($tianyi719,0777,true);
}
$route="./tongji/jinri/".date("Y-m-d")."/".date("Y-m-d").".php";
if(!file_exists($route))
{
file_put_contents($route,1);
}else{
$tongji=file_get_contents($route);
file_put_contents($route,($tongji+1));
}
$xiaoer="./tongji/jinri/".date("Y-m-d")."/fen/";//一分钟调用统计
if(!is_dir($xiaoer))
{
mkdir($xiaoer,0777,true);
}
$yingying="./tongji/jinri/".date("Y-m-d")."/fen/".date("H:i").".php";
if(!file_exists($yingying))
{
file_put_contents($yingying,1);
}else{
$tongji=file_get_contents($yingying);
file_put_contents($yingying,($tongji+1));
}
$vpsidc="./tongji/jinri/".date("Y-m-d")."/shi/";//一小时调用统计
if(!is_dir($vpsidc))
{
mkdir($vpsidc,0777,true);
}
$tianyi="./tongji/jinri/".date("Y-m-d")."/shi/".date("H:00").".php";
if(!file_exists($tianyi))
{
file_put_contents($tianyi,1);
}else{
$tongji=file_get_contents($tianyi);
file_put_contents($tianyi,($tongji+1));
}
$lengxuan="./tongji/jinri/".date("Y-m-d")."/miao/";//一秒钟调用统计
if(!is_dir($lengxuan))
{
mkdir($lengxuan,0777,true);
}
$xingmao="./tongji/jinri/".date("Y-m-d")."/miao/".date("H:i:s").".php";
if(!file_exists($xingmao))
{
file_put_contents($xingmao,1);
}else{
$tongji=file_get_contents($xingmao);
file_put_contents($xingmao,($tongji+1));
}

function total()//总调用统计
{
$cook="./tongji/zongtiaoyong/";
if(!is_dir($cook))
{
mkdir($cook,0777,true);
}
$xiaoer="./tongji/zongtiaoyong/xiaoyu.php";
if(!file_exists($xiaoer))
{
file_put_contents($xiaoer,1);
}else{
$tongji=file_get_contents($xiaoer);
file_put_contents($xiaoer,($tongji+1));
}
}

function tongji($url)
{
$anyingan="./tongji/jiekou/";//单个接口调用统计
if(!is_dir($anyingan))
{
mkdir($anyingan,0777,true);
}
$xingmaosc="./tongji/jiekou/".$url.".php";
if(!file_exists($xingmaosc))
{
file_put_contents($xingmaosc,1);
}else{
$tongji=file_get_contents($xingmaosc);
file_put_contents($xingmaosc,($tongji+1));
}
$XieJiaEXE="./tongji/jinri/".date("Y-m-d")."/";//一天接口调用统计
if(!is_dir($XieJiaEXE))
{
mkdir($XieJiaEXE,0777,true);
}
$lixinggui="./tongji/jinri/".date("Y-m-d")."/".$url.".php";
if(!file_exists($lixinggui))
{
file_put_contents($lixinggui,1);
}else{
$tongji=file_get_contents($lixinggui);
file_put_contents($lixinggui,($tongji+1));
}
}


function json($code,$msg)
{
if($_REQUEST["former"]==null){
if($code=='1000')
{

  header('Content-type: application/json');
  $json=array(
  "code"=>$code,
  "data"=>$msg,
  );
  return stripslashes(json_encode($json,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
}
else
{
  header('Content-type: application/json');
  $json=array(
  "code"=>$code,
  "msg"=>$msg,
  );
  return stripslashes(json_encode($json,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
}
}else{
if($code=='1000')
{

  header('Content-type: application/json');
  $json=array(
  "code"=>$code,
  "data"=>$msg,
  );
  return stripslashes(json_encode($json,JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
}
else
{
  header('Content-type: application/json');
  $json=array(
  "code"=>$code,
  "msg"=>$msg,
  );
  return stripslashes(json_encode($json,JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
}
}
}

function curl($url,$data=0,$header_array=0,$referer=0,$time=30,$code=0) {
 if($header_array==0) {
  $header=array("CLIENT-IP: ".getip_user(),"X-FORWARDED-FOR: ".getip_user(),'User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.106 Safari/537.36');
 } else {
  $header=array("CLIENT-IP: ".getip_user(),"X-FORWARDED-FOR: ".getip_user(),'User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.106 Safari/537.36');
  $header=array_merge($header_array,$header);
 }
//print_r($header);
 $curl=curl_init();
 curl_setopt($curl,CURLOPT_URL,$url);
 curl_setopt($curl,CURLOPT_HTTPHEADER,$header);
 if($data) {
  curl_setopt($curl,CURLOPT_POST,1);
  curl_setopt($curl,CURLOPT_POSTFIELDS,$data);
 }
 if($referer) {
  curl_setopt($curl,CURLOPT_REFERER,$referer);
 }
 curl_setopt($curl,CURLOPT_TIMEOUT,$time);
 curl_setopt($curl,CURLOPT_FOLLOWLOCATION,1);
 curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
 curl_setopt($curl,CURLOPT_SSL_VERIFYPEER, FALSE);
 curl_setopt($curl,CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($curl,CURLOPT_ENCODING,'gzip,deflate');
if($code) {
  curl_setopt($curl, CURLOPT_HEADER, 1);
  $return=curl_exec($curl);
  $code_code=curl_getinfo($curl);
  curl_close($curl);
  $code_int['exec']=substr($return,$code_code["header_size"]);
  $code_int['code']=$code_code["http_code"];
  $code_int['content_type']=$code_code["content_type"];
  $code_int['header']=substr($return,0,$code_code["header_size"]);
  return $code_int;
 } else {
  $return=curl_exec($curl);
  curl_close($curl);
  return $return;
 }
}

function getip_user() {
 if(empty($_SERVER["HTTP_CLIENT_IP"]) == false) {
  $cip = $_SERVER["HTTP_CLIENT_IP"];
 } else if(empty($_SERVER["HTTP_X_FORWARDED_FOR"]) == false) {
  $cip = $_SERVER["HTTP_X_FORWARDED_FOR"];
 } else if(empty($_SERVER["REMOTE_ADDR"]) == false) {
  $cip = $_SERVER["REMOTE_ADDR"];
 } else {
  $cip = "";
 }
 preg_match("/[\d\.]{7,15}/", $cip, $cips);
 $cip = isset($cips[0]) ? $cips[0] : "";
 unset($cips);
 return $cip;
}

?>
<?php
$qq=$_GET['qq'];
$skey=$_GET['skey'];
$pskey=$_GET['pskey'];
$token=$_GET['token'];
$get=getGTK($skey);
$url='https://web.yundong.qq.com/pushsport/index?crashFrom=40501&_wv=18950115&_wwv=265&akk=/sports/dist/index/css/home_v2.css~/sports/dist/common/css/fonts/Alternate_v2.ttf~/sports/dist/common/js/header_v2.js&client=androidQQ&uin='.$qq.'&version=8.3.5.4555&system=6.0.1&device=PD1613&density=xh&platformId=2&_lv=0&hasRedDot=0&adtag=mvip.gongneng.anroid.health.nativet&lati=0.0&logi=0.0&netType=1&model=vivo Y55L';
$cookie='p_skey='.$pskey.'; uin=o'.$qq.'; skey='.$skey.'; p_uin=o'.$qq.';';
$data=get_result($url,$cookie);
preg_match_all('/今日运动数<\/p> <div class="dial__hd-item-val"><span class="dial__hd-item-num">(.*?)</',$data,$num);
$num=$num[1][0];
preg_match_all('/openid":"(.*?)"/',$data,$openid);
$openid=$openid[1][0];
if($openid==null)
{
echo "查看步数失败，请重试!";
}
else
{
echo "你今日步数为：".$num;
}

function get_result($url,$cookie)
{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
$header = array(
'User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; vivo Y55L Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 MQQBrowser/6.2 TBS/045140 Mobile Safari/537.36 V1_AND_SQ_8.3.5_1392_YYB_D QQ/8.3.5.4555 NetType/WIFI WebP/0.3.0 Pixel/720 StatusBarHeight/48 SimpleUISwitch/0 QQTheme/1000',
'Referer: https://h5.qzone.qq.com/mqzone/profile?starttime=1589077456512&hostuin=551501951',
);
//curl_setopt($ch,CURLOPT_POST,true);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3); //设置等待时间
curl_setopt($ch, CURLOPT_TIMEOUT, 30); //设置cURL允许执行的最长秒数
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); 
curl_setopt($ch, CURLOPT_HEADER, 0); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$content = curl_exec($ch);
curl_close($ch);
return $content;
}

function getGTK($skey){
$len = strlen($skey);
$hash = 5381;
for ($i = 0; $i < $len; $i++) {
$hash += ($hash << 5 & 2147483647) + ord($skey[$i]) & 2147483647;
$hash &= 2147483647;
}
return $hash & 2147483647;
}
?>
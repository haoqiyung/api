<?php
$data = file_get_contents("./jiekou.json");
$result = preg_match_all('/{"标题":"(.*?)","小标题":"(.*?)","地址":"(.*?)","状态":"(.*?)"}/',$data,$v);
$yanse = file_get_contents("http://".$_SERVER['HTTP_HOST']."/api/yanse.php");
$second = $_REQUEST["msg"];
$z=strlen($second);
for( $i = 0 ; $i < $result && $i < $result ; $i ++ ){
$first=$v[1][$i];
$s=similar_text($first, $second);//如果此数与msg字数相同则返回。
if($z==$s){
$name=$v[1][$i];//名称
$dz=$v[2][$i];//接口介绍
$js=$v[3][$i];//接口地址
$Status=$v[4][$i];//状态
if($Status == "正常")
{
echo '<!--分割--><div class="col-sm-4"><a target="_blank" class="block block-link-hover2 ribbon ribbon-modern ribbon-success" href="'.$js.'" style="border-radius:10px;filter:alpha(Opacity=50); background-color:'.$yanse.'"><div class="ribbon-box font-w600">正常</div><div class="block-content"><div class="h4 push-5">'.$name.'</div><p class="text-muted">'.$dz.'</p></div></a></div><!--分割-->';
}else if($Status == "维护")
{
echo '<!--分割--><div class="col-sm-4"><a target="_blank" class="block block-link-hover2 ribbon ribbon-modern ribbon-danger" href="'.$js.'" style="border-radius:10px;filter:alpha(Opacity=50); background-color:'.$yanse.'"><div class="ribbon-box font-w600">维护</div><div class="block-content"><div class="h4 push-5">'.$name.'</div><p class="text-muted">'.$dz.'</p></div></a></div><!--分割-->';
}else if($Status == "停更")
{
echo '<!--分割--><div class="col-sm-4"><a target="_blank" class="block block-link-hover2 ribbon ribbon-modern ribbon-warning" href="'.$js.'" style="border-radius:10px;filter:alpha(Opacity=50); background-color:'.$yanse.'"><div class="ribbon-box font-w600">正常</div><div class="block-content"><div class="h4 push-5">'.$name.'</div><p class="text-muted">'.$dz.'</p></div></a></div><!--分割-->';
}else if($Status == "付费")
{
echo '<!--分割--><div class="col-sm-4"><a target="_blank" class="block block-link-hover2 ribbon ribbon-modern ribbon-primary" href="'.$js.'" style="border-radius:10px;filter:alpha(Opacity=50); background-color:'.$yanse.'"><div class="ribbon-box font-w600">正常</div><div class="block-content"><div class="h4 push-5">'.$name.'</div><p class="text-muted">'.$dz.'</p></div></a></div><!--分割-->';
}
}
}
?>
<?php
include('../tianyi.php');
?>

<?php @$xiaodaji = intval(file_get_contents("../api/tongji/jiekou/xiaodaji.dat")); ?>
<?php @$xiaodajix = intval(file_get_contents("../api/tongji/jinri/".date("Y-m-d")."/xiaodaji.dat")); ?>

<!doctype html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>小妲己聊天 - <?php echo $ming; ?>API</title>
<meta name="keywords" content=""/>
<meta name="description" content="">    
<link rel="stylesheet" href="./assets/css/layer.css">
<script src="https://ku.oioweb.cn/LayUI/2.5.4/layui.all.js"></script>
<style>.url{word-break:break-all;cursor:pointer;margin-left:5px;color:#777;border:none;border-radius:0;border-bottom:2px solid #5FB878;}.simpleTable{line-height:20px;padding-bottom:16px;}.linep{font-size:14px;font-weight:700;color:#555;padding-left:14px;height:16px;line-height:16px;margin-bottom:18px;position:relative;margin-top:15px;}.linep:before{content:'';width:4px;height:16px;background:#00aeff;border-radius:2px;position:absolute;left:0;top:0;}::-wexiaodajiit-scrollbar{width:9px;height:9px}::-wexiaodajiit-scrollbar-track-piece{background-color:#ebebeb;-wexiaodajiit-border-radius:4px}::-wexiaodajiit-scrollbar-thumb:vertical{height:32px;background-color:#ccc;-wexiaodajiit-border-radius:4px}::-wexiaodajiit-scrollbar-thumb:horizontal{width:32px;background-color:#ccc;-wexiaodajiit-border-radius:4px}</style>
</head>
<body>
<div class="layui-container">
<div class="layui-row">
<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
<legend>小妲己聊天API</legend>
</fieldset>
<blockquote class="layui-elem-quote">本接口总调用：<?php echo $xiaodaji; ?>次·今日调用：<?php echo $xiaodajix; ?>次</blockquote>
</div>
<div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
<ul class="layui-tab-title" style="text-align: center!important;">
<li class="layui-this">API文档</li><li>错误码参照</li><li>示例代码</li>
</ul>
<div class="layui-tab-content">
<div class="layui-tab-item layui-show">
<p class="simpleTable">
<span class="layui-badge layui-bg-black">接口地址：</span>
<span class="url" data-clipboard-text="http://<?php echo $_SERVER['HTTP_HOST'];?>/api/xiaodaji.php">http://<?php echo $_SERVER['HTTP_HOST'];?>/api/xiaodaji.php</span>
</p>
<p class="simpleTable">
<span class="layui-badge layui-bg-green">返回格式：</span>
<span class="url" data-clipboard-text="请看返回示例">请看返回示例</span>
</p>
<p class="simpleTable">
<span class="layui-badge">请求方式：</span>
<span class="url" data-clipboard-text="GET">GET</span>
</p>
<p class="simpleTable">
<span class="layui-badge layui-bg-blue">请求示例：</span>
<span class="url" data-clipboard-text="http://<?php echo $_SERVER['HTTP_HOST'];?>/api/xiaodaji.php?msg=你好">http://<?php echo $_SERVER['HTTP_HOST'];?>/api/xiaodaji.php?msg=你好</span>
</p>
<p class="linep">请求参数说明：</p> 
<table class="layui-table" lay-size="sm"> 
<thead>
<tr><th>名称</th><th>必填</th><th>说明</th></tr>
</thead>
<tbody>
<tr><td>msg</td><td>是</td><td>需要聊天内容</td></tr>
<tr><td>hh</td><td>否</td><td>换行符号(默认\n)</td></tr>
</tbody>
</table>
<p class="linep">系统级错误：</p>
<table class="layui-table" lay-size="sm">
<thead>
<tr><th>名称</th><th>说明</th></tr>
</thead>
<tbody>
<tr><td>400</td><td>请求错误！</td></tr>
<tr><td>403</td><td>请求被服务器拒绝！</td></tr>
<tr><td>405</td><td>客户端请求的方法被禁止！</td></tr>
<tr><td>408</td><td>请求时间过长！</td></tr>
<tr><td>500</td><td>服务器内部出现错误！</td></tr>
<tr><td>501</td><td>服务器不支持请求的功能，无法完成请求！</td></tr>
<tr><td>503</td><td>系统维护中！</td></tr>
</tbody>
</table>
<p class="linep">返回示例：</p>
<pre class="layui-code"><?php
//header("Content-Type:text/html;charset=UTF-8");
$result = file_get_contents("http://".$_SERVER['HTTP_HOST']."/api/xiaodaji.php?msg=你好");
echo $result;
?></pre>
</div>
<div class="layui-tab-item">
<p class="linep">错误码格式说明：</p>
<table class="layui-table" lay-size="sm">
<thead>
<tr><th>名称</th><th>类型</th><th>说明</th></tr>
</thead>
<tbody>
<tr><td>无</td><td>无</td><td>无</td></tr>
</tbody>
</table>
</div>
<div class="layui-tab-item">
<p class="linep">机器人词库示例：</p>
<pre class="layui-code"><a style="color:#fd4b5c;text-decoration:none；" target="_blank">小妲己聊天
<?php echo $ming; ?>API小妲己聊天\n
━━━━━━━━━\n
用户:@%昵称%\n
━━━━━━━━━\n
开启小妲己聊天\n
关闭小妲己聊天\n
━━━━━━━━━\n
请求示例：http://<?php echo $_SERVER['HTTP_HOST'];?>/tianyi/xiaodaji.php\n
━━━━━━━━━\n
Tips:<?php echo $ming; ?>API技术支持

开启小妲己聊天
如果:%主人%==%QQ%|%QQ%==3189402257
已开启小妲己聊天！
$写 <?php echo $ming; ?>API/%群号%/小妲己聊天 Q 1$
返回
如果尾
只有机器人的管理员才可以执行此操作！

关闭小妲己聊天
如果:%主人%==%QQ%|%QQ%==3189402257
已关闭小妲己聊天！
$写 <?php echo $ming; ?>API/%群号%/小妲己聊天 Q 0$
返回
如果尾
只有机器人的管理员才可以执行此操作！

.*
如果:$读 <?php echo $ming; ?>API/%群号%/小妲己聊天 Q 0$==1
$访问 http://<?php echo $_SERVER['HTTP_HOST'];?>/api/xiaodaji.php?msg=%参数-1%$</per>
</div>
</div>
</div>
</div>
<script src="./assets/css/clipboard.min.js"></script>
<script>
    layui.use('<?php echo $ming; ?>API', function(){ //加载code模块
        layui.code(); //引用code方法
    });
    var clipboard = new ClipboardJS('.url');
    clipboard.on('success', function(e) {
        layer.msg('复制成功！');
    });
    clipboard.on('error', function(e) {
        layer.msg('复制成功！');
    });
</script>
<script type="text/javascript" src="./assets/css/main.js"></script>
</body>
</html>
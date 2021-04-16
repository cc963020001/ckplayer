<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>ckplayer</title>
		<script type="text/javascript" src="source/ckplayer.js" charset="utf-8" data-name="ckplayer"></script>
<style type="text/css">
body,html{width:100%;height:100%;background:#000;padding:0;margin:0;overflow-x:hidden;overflow-y:hidden}
*{margin:0;border:0;padding:0;text-decoration:none}
#stats{position:fixed;top:5px;left:8px;font-size:12px;color:#fdfdfd;text-shadow:1px 1px 1px #000, 1px 1px 1px #000}
#dplayer{position:inherit}
</style>

	</head>

	<body>
<div class="video" style="width: 100%;height: 100%;"></div>
<script type="text/javascript">
    //定义一个变量：videoObject，用来做为视频初始化配置
    var videoObject = {
	container: '.video', //“#”代表容器的ID，“.”或“”代表容器的class
	variable: 'player', //播放函数名称，该属性必需设置，值等于下面的new ckplayer()的对象
	autoplay: false,//是否自动播放(true、false)
	live: true,//是否是直播
	duration: 0,//指定总时间
	video: '<?php echo $_GET['url'];?>',//视频地址
	html5m3u8: true,//PC平台上是否使用h5播放器播放m3u8
    };
    var player = new ckplayer(videoObject);//初始化播放器
</script>
	</body>

</html>
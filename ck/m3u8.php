<!DOCTYPE html>
<html>
<head>
<title>M3U8在线解析 - M3U8,M3U8在线,M3U8播放器,M3U8直播源,M3U8在线播放器</title>
<meta charset="UTF-8">
<meta name="keywords" content="M3U8,M3U8播放器,M3U8直播源,M3U8在线播放器" />
<meta name="description" content="M3U8,M3U8播放器,M3U8直播源,M3U8在线播放器" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="DPlayer/DPlayer.min.css">
<script src="DPlayer/hls.js"></script>
<script src="DPlayer/DPlayer.min.js"></script>
<style type="text/css">body,html,.panel-body{background-color:#000;padding: 0;margin: 0;width:100%;height:100%;}</style>
</head>
<body>
<div id="m3u8_video" class="panel-body"></div>
<script type="text/javascript">
var dp = new DPlayer({
    container: document.getElementById('m3u8_video'),
    autoplay: true,
	live: false,//true直播模式
	logo: 'http://dplayer.js.org/logo.png',
    video: {
        url: "<?php echo $_GET['url'];?>",
        type: 'hls'
    },
});
</script>
</body>
</html>
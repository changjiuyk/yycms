<html>
<head>
<title>Dplayer---P2P版播放器</title>
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<meta http-equiv="content-language" content="zh-CN"/>
<meta http-equiv="X-UA-Compatible" content="chrome=1"/>
<meta http-equiv="pragma" content="no-cache"/>
<meta http-equiv="expires" content="0"/>
<meta name="referrer" content="never"/>
<meta name="renderer" content="webkit"/>
<meta name="msapplication-tap-highlight" content="no"/>
<meta name="HandheldFriendly" content="true"/>
<meta name="x5-page-mode" content="app"/>
<meta name="Viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0"/>
<link rel="stylesheet" href="dplayer/DPlayer.min.css" type="text/css"/>
<style type="text/css">
body,html{width:100%;height:100%;background:#000;padding:0;margin:0;overflow-x:hidden;overflow-y:hidden}
*{margin:0;border:0;padding:0;text-decoration:none}
#stats{position:fixed;top:5px;left:8px;font-size:12px;color:#fdfdfd;text-shadow:1px 1px 1px #000, 1px 1px 1px #000}
#dplayer{position:inherit}
</style>
</head>
<body style="background:#000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" oncontextmenu=window.event.returnValue=false>
<div id="dplayer"></div>
 <script type="text/javascript" src="dplayer/hls.min.js"></script>
 <script src="dplayer/DPlayer.min.js"></script>
 <script src="dplayer/hls.min.js"></script>
 <script type="text/javascript" src="https://www.xmaocloud.com/dplayer/jquery.min.js"></script>
<script>
	var webdata = {
		set:function(key,val){
			window.sessionStorage.setItem(key,val);
		},
		get:function(key){
			return window.sessionStorage.getItem(key);
		},
		del:function(key){
			window.sessionStorage.removeItem(key);
		},
		clear:function(key){
			window.sessionStorage.clear();
		}
	};
	var _peerId = '', _peerNum = 0, _totalP2PDownloaded = 0, _totalP2PUploaded = 0;
	var m3u8url =  'https://v3.szjal.cn/20190902/VTFmZIAq/index.m3u8'
    var dp = new DPlayer({
        autoplay: true,
        container: document.getElementById('dplayer'),
      volume: 1.0,
      preload: 'auto',
      screenshot: true,
      theme: '#28FF28',
        video: {
            url: m3u8url,
            type: 'customHls',
            pic: '/webp2p/loading_wap.jpg',
            customType: {
                'customHls': function (video, player) {
                    const hls = new Hls({
                        debug: false,
                        // Other hlsjsConfig options provided by hls.js
                        p2pConfig: {
                            logLevel: 'debug',
                            live: false,
                            announce: "https://tracker.cdnbye.com:8090/v1",
                            wsSignalerAddr: 'wss://signalcloud.cdnbye.com',
                            getStats: function (totalP2PDownloaded, totalP2PUploaded, totalHTTPDownloaded) {
                                _totalP2PDownloaded = totalP2PDownloaded;
                                _totalP2PUploaded = totalP2PUploaded;
                                updateStats();
                            },
                            getPeerId: function (peerId) {
                                _peerId = peerId;
                            },
                            getPeersInfo: function (peers) {
                                _peerNum = peers.length;
                                updateStats();
                            },
                        }
                    });
                    hls.loadSource(video.src);
                    hls.attachMedia(video);
                }
            }
        }
    });
	dp.seek(webdata.get('pay'+m3u8url));
	setInterval(function(){
		webdata.set('pay'+m3u8url,dp.video.currentTime);
	},1000);
    dp.on('ended', function () {
    window.parent.postMessage('tcwlnext','*');
  });
</script>
</body>
</html>

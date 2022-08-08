	<div class="myui-foot clearfix">
	<div class="container min">
		<div class="row">
			<div class="col-pd text-center">
				<p><?php echo $yycms_a_bq;?><br><a class="fed-font-xiv" href="/baidu.xml" target="_blank">百度地图</a></p>			
				<p class="hidden-xs">
				<?php echo $yycms_a_tj;?>
				</p>	
				<p class="margin-0">
				</p>	
			</div>
		</div>
	</div>
</div>
<div class="myui-nav__tabbar <?php if( $yycms_a_dbdh == 0 ){ echo'hidden-xs' ;}?>">
       <a class="item" href="/">
		<i class="iconfont">&#xe678;</i><p class="title">首页</p>
		</a>
		<a class="item" href="/movie.html">
		<i class="iconfont">&#xe64a;</i><p class="title">电影</p>
		</a>
		<a class="item" href="/tv.html">
		<i class="iconfont">&#xe649;</i><p class="title">剧集</p>
		</a>
		<a class="item" href="/dongman.html">
		<i class="iconfont">&#xe648;</i><p class="title">动漫</p>
		</a>
		<a class="item" href="/zongyi.html">
		<i class="iconfont">&#xe64b;</i><p class="title">综艺</p>
		</a>
		<a class="item" href="/qxk-0-1.html">
		<i class="iconfont">&#xe631;</i><p class="title">抢先</p>
		</a>
		<a class="item" href="/zb.html">
		<i class="iconfont">&#xe647;</i><p class="title">直播</p>
		</a>
	</div>
	
<ul class="myui-extra clearfix">
	<li>
		<a class="backtop" href="javascript:scroll(0,0)" title="返回顶部" style="display: none;"><i class="fa fa-angle-up"></i></a>
	</li>
		<li>
		<a class="btnskin" href="javascript:;" title="切换皮肤"><i class="fa fa-windows"></i></a>
	</li>
		<li class="dropdown-hover hidden-xs">
		<a href="javascript:;" title="关注我们" onclick="MyTheme.Layer.Img('关注我们','<?php echo $records[0]['a_wximg'];?>','扫一扫关注我们')"><i class="fa fa-wechat"></i></a>
		<div class="dropdown-box right fadeInDown clearfix">
			<div class="item text-center">
				<div class="qrcode-box">
					<img src="<?php echo $records[0]['a_wximg'];?>" width="160" />
				</div>
				<p>扫一扫关注我们</p>
			</div>
		</div>
	</li>
	</ul>
<script type="text/javascript">
var ishttps = 'https:' == document.location.protocol ? true: false;
var ycurl = '<?php echo SQJK;?>';
if(ishttps){
var ycsq = 'https://' + ycurl;
}else{
var ycsq = 'http://' + ycurl;
}
</script>
<script type="text/javascript" src="/templets/yycms/js/yycmsjq1.js"></script> 
<script type="text/javascript">
	MyTheme.Images.Qrcode.Init();
	MyTheme.Link.Short();
	MyTheme.Other.Skin();
	//MyTheme.Other.Share();
	</script>
<!--百度自动推送-->
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
<div class="hide"></div>

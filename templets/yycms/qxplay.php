<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $rowqx['b_name'];?>-在线观看-<?php echo $yycms_a_name;?></title>
<meta name="keywords" content="<?php echo $rowqx['b_name'];?>,<?php echo $rowqx['b_name'];?>抢先在线观看,<?php echo $rowqx['b_name'];?>下载">
<meta name="description" content="<?php echo $rowqx['b_name'];?>,<?php echo $rowqx['b_name'];?>抢先在线观看,<?php echo $rowqx['b_name'];?>主要讲:<?php echo mb_substr(preg_replace("/<(.*?)>/si", "", $rowqx['b_jj'] ),0,85,'utf-8').'...'; ?>">
<?php
include 'head.php';
?>
<style type="text/css">
#timer{background: rgba(0, 0, 0, 0.59);padding: 5px;text-align: center;width: 30px;position: absolute;top: 5%;right: 2%;color: #fff;font-size: 16px;border-radius: 50%;height: 30px;line-height: 20px}
</style>
</head>
<body class="active">
<?php 
include 'header.php';
?>
<div class="myui-player clearfix" style="background-color: #27272f;"> 
   <div class="container"> 
    <div class="row"> 
     <div class="myui-player__item clearfix" style="background-color: #1f1f1f;"> 
       <div class="col-md-wide-75 clearfix padding-0 relative" id="player-left">
		<div class="myui-player__box player-fixed">
		<div class="tips close-box" style="background-color: #181515;">
		<!--<a class="tips-close-btn pull-right" id="gggb"><i class="fa fa-close"></i></a>-->
		<ul class="ul1" style="margin-top: 0px;">
		<li>正在播放：<?php echo $rowqx['b_name'];?></li>
		<li>自定义这是第二行文字</li>
		<li><i class="fa fa-volume-down"></i> 自定义第一行提示文字支持fa图标</li>
		</ul>
	</div>
<a class="player-fixed-off" href="javascript:;" style="display: none;"><i class="fa fa-close"></i></a> 
<div class="embed-responsive clearfix">
<div id="cms_player">
<script type="text/javascript"> 
          function run(){
        var s = document.getElementById("timer");      
        if(!s){          
            return false;
        }else{
          s.innerHTML = s.innerHTML * 1 - 1;
        }
    }
    window.setInterval("run();", 1000);
	$('#cms_player').html('<div style="text-align:center;width:100%;"><?php echo $yycms_gg_gg11;?></div><div id="timer"><?php echo $yycms_a_bfqgg;?></div>');
						    //设置延时函数
		function adsUp(){    
		$("#cms_player").html('<iframe id="video" src="/ck/index.php?url=<?php echo $qxkurl[1]; ?>"style="width:100%;border:none" allowtransparency="true" allowfullscreen="true" frameborder="0" scrolling="no"></iframe><a style="display:none" id="videourlgo" href="<?php echo $qxkurl[1]; ?>"></a>');  
         }
    //五秒钟后自动收起
    var t = setTimeout(adsUp,<?php echo $yycms_a_bfqgg*1000;?>); 
</script>    
</div>
	</div>
</div>
<ul class="myui-player__operate" style="background-color: #1b1a25;">	
		<li>
		<a class="favorite" href="javascript:void(0);"><i class="fa fa-star"></i> 收藏</a>										
	</li>
		<li>
		<a href="/gbook.html?name=<?php echo $rowqx['b_name'];?>不能观看请检查修复" target="_blank"><i class="fa fa-close"></i> 报错</a>
	</li>
		<li>
		<a href="javascript:;" onclick="window.location.reload()"><i class="fa fa-spinner"></i> 刷新</a>
	</li>
		<li class="dropdown-hover hidden-xs">
		<a href="javascript:;"><i class="fa fa-cny"></i> 打赏</a>
		<div class="dropdown-box top fadeInDown clearfix">
			<div class="item text-center">
				<p>扫码支付任意金额</p>
				<div class="qrcode-box">
					<img class="img-responsive" src="<?php echo $yycms_a_dst;?>">
				</div>
			</div>
		</div>
	</li>
		<li class="playshare dropdown-hover">
		<a class="fxsp" id="fxsp" data-url="<?php echo hqur();?><?php echo $_SERVER['REQUEST_URI'] ?>"><i class="fa fa-share font14"></i> 分享</a>
	</li>
		<li class="dropdown-hover hidden-xs">
		<a href="javascript:;"><i class="fa fa-qrcode font14"></i> 手机</a>
		<div class="dropdown-box top fadeInDown clearfix">
	<div class="item text-center">
		<p>扫一扫用手机观看</p>
				<div class="qrcode-box" style="background-color: #ffffff;">
			<img class="icon" src="/template/mytheme/statics/img/favicon.ico" width="25" height="25">
			<span id="qrcode" data-link="0" data-dark="#000000" data-light="#ffffff" title="<?php echo $rowqx['b_name'];?>" class="img-responsive"><canvas width="120" height="120" style="display: none;"></canvas></span>
		</div>
			</div>
</div>

	</li>
	<li><a id="btn-prev" onclick="btnprev()" class="disabled"><i class="fa fa-caret-up"></i> 上集</a></li> 
    <li><a id="btn-prev" onclick="btnnext()"><i class="fa fa-caret-down"></i> 下集</a></li>   
	</ul>
<style type="text/css"> .embed-responsive{ padding-bottom: 56.25%;} </style>

<a class="is-btn hidden-sm hidden-xs" id="player-sidebar-is" href="javascript:;"><i class="fa fa-angle-right"></i></a> 
<script type="text/javascript">
function xldata(urls,t){
	var videourls = document.getElementById('video');
	var xlqieh = document.getElementById('videourlgo');
	videourls.src = urls+xlqieh.href;
	$(".xianlucss").removeClass("xianlucss");
	$(t).addClass("xianlucss");
}
</script>
</div>
      <div class="col-md-wide-25 padding-0" id="player-sidebar"> 
       <div class="myui-panel margin-0 clearfix"> 
        <div class="myui-panel-box clearfix"> 
         <div class="myui-panel__head active clearfix"> 
         <h1 class="title text-fff" id="xuji"><a>1</a></h1><span id="jishu" style="display:none;"></span>
         </div> 
         <div class="text-muted"> 
          <ul class="nav nav-tabs pull-right"> 
           <li class="dropdown pb10 margin-0" style="display:none; height:auto"> <a href="javascript:;" class="padding-0 text-red" data-toggle="dropdown">换线路<i class="fa fa-angle-down"></i></a> 
            <div class="dropdown-box bottom"> 
			<div id="xluu"> 
             <ul class="item"> 
<span class="text-muted" >
<a onclick="xldata('../ck/index.php?url=',this)" data-url="../ck/index.php?url=" style="color: #333;" class="btn btn-sm xianlucss" id="xl0">默认</a>  
</span>
             </ul> 
            </div> 
			</div>
			</li> 
<li class="dropdown pb10 margin-0"> <a href="javascript:;" class="padding-0 text-red" data-toggle="dropdown">换源站 <i class="fa fa-angle-down"></i></a> 
   <div class="dropdown-box bottom"> 
    <ul class="item">
	<li class="active"><a href="#qq" data-toggle="tab" onclick="Statit("")" >本站资源</a></li>
	<li><a href="#qwzy1" data-toggle="tab" onclick="qwzy('0')">全网资源1</a></li>
	<li><a href="#qwzy2" data-toggle="tab" onclick="qwzy('1')">全网资源2</a></li>
	<li><a href="#qwzy3" data-toggle="tab" onclick="qwzy('2')">全网资源3</a></li>
	</ul> 
   </div> 
   </li>
	</ul>
	<span class='text-muted'>地区:</span>
	<a class='text-muted'>年份:</a>
	</div>
<div class="tab-content mb10">
   <div id="qq" class="dianshijua tab-pane fade in active clearfix">
    <ul class="myui-content__list playlist clearfix" id="playlist">
<?php 
for($i=0;$i<count($qxk);$i++)
{	$qxk[$i]=explode('$',$qxk[$i]);
if($qxk[$i][1]!=""){
	$ii=$i+1;
echo '<li class="col-md-3 col-sm-5 col-xs-4 active"><a href="'.$qxk[$i][1].'" class="btn1 btn btn-min btn-gray" target="ajax" data-clipboard-text="" id="'.$ii.'" p_name="'.$qxk[$i][0].'">'.$qxk[$i][0].'</a></li>';
}
}
?>
</ul>
   </div>
<div id="qwzy1" class="dianshijua tab-pane fade in clearfix"> 
   <ul class="myui-content__list playlist clearfix" id="playlist"> 
    <div id="qwzy0"></div>  
   </ul> 
  </div>
<div id="qwzy2" class="dianshijua tab-pane fade in clearfix"> 
   <ul class="myui-content__list playlist clearfix" id="playlist"> 
<div id="qwzy1"></div>  
   </ul> 
  </div>
<div id="qwzy3" class="dianshijua tab-pane fade in clearfix"> 
   <ul class="myui-content__list playlist clearfix" id="playlist"> 
   <div id="qwzy2"></div>  
   </ul> 
  </div>
  </div>
         </div> 
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <div class="container"> 
   <div class="row"> 
    <div class="col-md-wide-75 col-xs-1 padding-0"> 
     <div class="myui-panel myui-panel-bg clearfix"> 
      <div class="myui-panel-box clearfix"> 
       <div class="myui-panel_hd"> 
        <div class="myui-panel__head clearfix"> 
         <h3 class="title"> 剧情简介 </h3> 
        </div> 
       </div> 
       <div class="myui-panel_bd"> 
        <div class="col-pd text-collapse content"> 
         <span class="sketch content"<span>简介 ：</span><p class="item-desc"><?php echo $rowqx['b_jj']; ?></span>
        </div> 
       </div> 
      </div> 
     </div> 
     <!-- 剧情简介--> 
     <!--<div class="myui-panel myui-panel-bg clearfix"> 
      <div class="myui-panel-box clearfix"> 
       <div class="myui-panel_bd"> 
        <div class="col-xs-1"> 
         <div style="padding: 35px; background-color: #f5f5f5; border-radius: 5px; text-align: center;">
          <h5 class="margin-0 text-muted">广告位04</h5>
         </div> 
        </div> 
       </div> 
      </div> 
     </div>  
      猜你喜欢--> 
    </div> 
    <div class="col-md-wide-25 col-xs-1 myui-sidebar hidden-sm hidden-xs"> 
     <div class="myui-panel myui-panel-bg clearfix"> 
      <div class="myui-panel-box clearfix"> 
       <div class="myui-panel_hd"> 
        <div class="myui-panel__head clearfix"> 
         <h3 class="title">抢先榜</h3> 
        </div> 
       </div> 
       <div class="myui-panel_bd"> 
        <ul class="myui-vodlist__text col-pd clearfix"> 
<?php
$vodqxk = $mysqli->select1(0, 4, '*', 'yycms_vod', 'order by b_id desc LIMIT 0,10');
foreach ($vodqxk as $rowbd) {
echo '<li> <a href="/qxplay/'.$rowbd['b_id'].'.html" title="'.$rowbd['b_name'].'"> <span class="pull-right  text-muted visible-lg" style="color: ;"></span> <span class="badge">抢</span>'.$rowbd['b_name'].'</a> </li>';
}?>
</ul> 
       </div> 
      </div> 
     </div> 
     <!-- 热播--> 
     <div class="myui-panel myui-panel-bg clearfix"> 
      <div class="myui-panel-box clearfix"> 
       <div class="myui-panel_hd"> 
        <div class="myui-panel__head clearfix"> 
         <h3 class="title"> 电影榜 </h3> 
        </div> 
       </div> 
       <div class="myui-panel_bd"> 
        <ul class="myui-vodlist__text col-pd clearfix"> 
						<?php
						include './data/bangdan.php';
						foreach ($dybd[1] as $k=>$dyurl){
						echo '<li> <a href="/'.$dzbq.'/'.cfurl($dsjurl).'.html" title="'.$dybd[2][$k].'"><span class="pull-right  text-muted visible-lg" style="color: ;"><i class="icon-hot"></i>'.$dybdrd[1][$k].'</span> <span class="badge">'.($k+1).'</span>'.$dybd[2][$k].'</a> </li>';
						}
						?>
</ul> 
       </div> 
      </div> 
     </div>     
     <!--<div class="myui-panel myui-panel-bg clearfix"> 
      <div class="myui-panel-box clearfix"> 
       <div class="myui-panel_bd"> 
        <div class="col-xs-1"> 
         <div style="padding: 100px 35px; background-color: #f5f5f5; border-radius: 5px; text-align: center;">
          <h5 class="margin-0 text-muted">广告位08</h5>
         </div> 
        </div> 
       </div> 
      </div> 
     </div> -->
    </div> 
   </div> 
  </div> 
  <script type="text/javascript">
    	$(".MacPlayer").addClass("embed-responsive").css({"padding-bottom":"56.25%","z-index":"99"});
		$("#playleft,.dplayer-video-wrap").css({"position":"inherit","overflow":"initial"});
    </script> 
<script type="text/javascript">	
$(function(){if($.cookie("history") == null){var yycms = 'yycms';}else{var yycms = $.cookie("history");}
hrefdeal();
if(yycms.indexOf(window.location.href)!=-1){
        var json = eval("(" + $.cookie("history") + ")");	
        $.each(json, function(i,n) {
        if (n.vod_url == location.href){
		layer.msg("您上次观看到_"+n.vod_name + "_" + n.vod_partt + "");
		jiazainame(n.vod_part);
        var xuanjk=$(".xianlucss");
		document.getElementById('videourlgo').href=n.vod_urll;
		document.getElementById('video').src=xuanjk.attr("data-url")+n.vod_urll;
         }});}else{jiazainame(1);yycmslsjl('<?php echo $rowqx["b_name"];?>','<?php echo $qxkurl[1]; ?>','1',$("#1").attr("p_name"));}});
function hrefdeal(){
	var al = $('.dianshijua a');
					al.attr('class','btn btn-min btn-gray');
					var ji= new Array();
					var btnji= new Array();
					for(var g=0;g<al.length;g++){
						ji.push(al[g].href);
						btnji.push(al[g].id);
						al[g].href = 'javascript:void(0)';
						al[g].target = '_self';
						al.eq(g).attr('onclick','bofang(\''+ji[g]+'\',\''+btnji[g]+'\')');
					};
					document.getElementById('xuji').style.display='block';
					document.getElementById('xluu').style.display = 'block';}			
function bofang(mp4url,jiid){
		jiazainame(jiid)
		var xuanjk=$(".xianlucss");
		yycmslsjl('<?php echo $rowqx["b_name"];?>',mp4url,jiid,$("#"+jiid).attr("p_name"));
		document.getElementById('videourlgo').href=mp4url;
		document.getElementById('video').src=xuanjk.attr("data-url")+mp4url;};
	function jiazainame(jiid){
		var shang="btn-prev";
		var xia="btn-next";
		var name=$("#"+jiid).attr("p_name");
		var tishi="";
		if (name=="") {
			tishi=('正在播放：<?php echo $rowqx["b_name"];?> - '+$("#"+jiid).text()+'');
		}else{
			tishi = ('正在播放：<?php echo $rowqx["b_name"];?> - '+name+'');
		}
		/*if (tishi.length>30) {
			tishi=tishi.substring(0,30)+"...";
		}*/
		$(".btn-play-active").attr("style","");
		$(".btn-play-active").removeClass("btn-play-active");
		document.getElementById('xuji').innerHTML = tishi;
		document.getElementById('jishu').innerHTML = jiid;
		$("#"+jiid).addClass("btn-play-active");
		$("#"+jiid).attr("style","background: #fda807;color: #ffffff;");
		if (!IsPC()) {
			shang="btn-prev-m";
			xia="btn-next-m";
		}
		if (jiid != 1) {
			$("#"+shang).show();
		}else{
			$("#"+shang).hide();
		}
		var jitotal = $(".lipbtn").length;
		if (jiid != jitotal) {
			$("#"+xia).show();
		}else{
			$("#"+xia).hide();
		}
	}
	function IsPC() {
		var userAgentInfo = navigator.userAgent;
		var Agents = ["Android", "iPhone",
		"SymbianOS", "Windows Phone",
		"iPad", "iPod"];
		var flag = true;
		for (var v = 0; v < Agents.length; v++) {
			if (userAgentInfo.indexOf(Agents[v]) > 0) {
				flag = false;
				break;
			}
		}
		return flag;
	}
	function btnnext(){
		var obj = $(".btn-play-active");
		if(obj!=null){
			$(".btn-play-active").attr("style","");
			$(".btn-play-active").removeClass("btn-play-active");
			obj.parent().next().children(0).click();
             //$(this).focus();
             $("#"+xia).focus();
         }
     }
     function btnprev(){
     	var shang="btn-prev";
     	var xia="btn-next";
     	if (!IsPC()) {
     		shang="btn-prev-m";
     		xia="btn-next-m";
     	}
     	var obj = $(".btn-play-active");
     	if(obj!=null){
     		$(".btn-play-active").attr("style","");
     		$(".btn-play-active").removeClass("btn-play-active");
     		obj.parent().prev().children(0).click();
     		$("#"+shang).focus();
     	}
     }	 
</script>
<span class="hide xzname" data-name="<?php echo $rowqx['b_name'];?>" data-link="<?php echo $_SERVER['REQUEST_URI'] ?>" data-pic="" data-part="1" data-limit="10"></span> 	 
<?php
include 'footer.php';
?>
</body>
</html>
		
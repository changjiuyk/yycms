<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo bftitle();?></title>
<meta name="keywords" content="<?php echo bfkeywords(); ?>">
<meta name="description" content="<?php echo bfdescription(); ?>">
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
		<li>正在播放：<?php echo $bftitlezl; ?></li>
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
	$("#cms_player").html('<iframe id="video" src="<?php echo $yycms_a_mrjx.$bfypurldz;?>" style="width:100%;border:none" allowtransparency="true" allowfullscreen="true" frameborder="0" scrolling="no"></iframe><a style="display:none" id="videourlgo" href="<?php echo $bfypurldz;?>"></a>');  
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
		<a href="/gbook.html?name=<?php echo $bftitlezl; ?>不能观看请检查修复" target="_blank"><i class="fa fa-close"></i> 报错</a>
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
			<img class="icon" src="/favicon.ico" width="25" height="25">
			<span id="qrcode" data-link="0" data-dark="#000000" data-light="#ffffff" title="<?php echo $timu; ?>" class="img-responsive"><canvas width="120" height="120" style="display: none;"></canvas></span>
		</div>
			</div>
</div>

	</li>
	<li><a id="btn-prev" href="javascript:void(0)" onclick="btnprev()"><i class="fa fa-caret-up"></i> 上集</a></li> 
    <li><a id="btn-prev" href="javascript:void(0)" onclick="btnnext()"><i class="fa fa-caret-down"></i> 下集</a></li>   
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
           <li class="dropdown pb10 margin-0" style="padding-right: 15px;"> <a href="javascript:;" class="padding-0 text-red" data-toggle="dropdown">换线路<i class="fa fa-angle-down"></i></a> 
            <div class="dropdown-box bottom"> 
			<div id="xluu"> 
             <ul class="item"> 
<span class="text-muted" >
<a onclick="xldata('<?php echo $yycms_a_mrjx;?>',this)" data-url="<?php echo $yycms_a_mrjx;?>" style="color: #333;" class="btn btn-sm xianlucss" id="xl0">默认</a>  
  
<?php
$jkjk=explode("\r\n",$yycms_a_jxjk);
for($k=0;$k<count($jkjk);$k++){
$jkjk[$k]=explode('$',$jkjk[$k]);
$suzi=$k+1;
?>
<a onclick="xldata('<?php echo $jkjk[$k][1]?>',this)" data-url="<?php echo $jkjk[$k][1]?>" style="color: #333;" class="btn btn-sm  btn1"  id="xl<?php echo $suzi; ?>">线路<?php echo $suzi; ?></a>  
<?php 
}
?>

</span>
             </ul> 
            </div> 
			</div>
			</li>
<?php
if ($yplx=="dianying"){
echo '</ul><span class="text-muted">类型:'.$bflx[4][0].' '.$bflx[4][1].'</span></div><div class="tab-content mb10 dianshijua"><ul class="myui-content__list playlist clearfix" id="playlist">';
foreach ($bfyptitle as $kk => $vod){
echo '<li class="col-md-2 col-sm-5 col-xs-3 active"><a class="btn btn-min btn-gray" id="'.($kk+1).'" p_name="'.$vod.'(免费)" href="javascript:void(0)" onclick="bofang(\''.$bfypurldzd[$kk].'\',\''.($kk+1).'\')">'.$vod.'(免费)</a></li>';
}
echo '</ul></div></div>';
}else if ($yplx == 'zongyi') {
echo '<li class="dropdown pb10 margin-0"> 
		   <select id="selectyear" onchange="qieyear()">';
	foreach ($xnianfenxz[3] as $key => $value) {
		echo '<option site="'.$bfy[1].'" month="'.$xnianfenxz[2][$key].'" year="'.$xnianfenxz[1][$key].'">'.$value.'年</option>';
	}
	echo '</select>
		   </li> 
          </ul> 
          <span class="text-muted">地区:'.$g.'</span>  <a class="text-muted">年份:'.$h.'</a>
         </div>';
	echo '<div class="col-pd mb10"> <ul id="myTab" class="nav nav-tabs">';


			echo '<li class="active"><a style="color: #fff;" href="#zy'.$yue.'" data-id="0" data-toggle="tab">最新</a></li>';

	echo "</ul></div>";
	echo '<div class="tab-content mb10"><div id="mgtv" class="dianshijua tab-pane fade in active clearfix"><ul class="myui-content__list playlist clearfix" id="playlist">';

echo '</ul></div></div></div>';
}else{
	echo '<li class="dropdown pb10 margin-0"> <a href="javascript:;" class="padding-0 text-red" data-toggle="dropdown">换源站 <i class="fa fa-angle-down"></i></a> 
   <div class="dropdown-box bottom"> 
    <ul class="item">';
$bfyxz='0';
foreach ($drama as $kk => $vod){
$bfyxz++;
		if ($bfyxz==1) {
			echo '<li class="active"><a href="#'.$kk.'" data-toggle="tab">'.bfyhq($kk).'</a></li>';

		}else{
			echo '<li><a href="#'.$kk.'" data-toggle="tab">'.bfyhq($kk).'</a></li>';
		}
}
	echo '</ul> 
   </div> 
   </li>
	</ul></div>';
	echo '<div class="tab-content mb10">';
	foreach ($drama as $kk => $vod){
$i++;
if ($i==1) {
	echo '<div id="'.$kk.'" class="dianshijua tab-pane fade in active clearfix"><ul class="myui-content__list playlist clearfix" id="playlist">';
		}else{
	echo '<div id="'.$kk.'" class="dianshijua tab-pane fade in clearfix"><ul class="myui-content__list playlist clearfix" id="playlist">';
	}
foreach ($vod[0] as $key => $value){
$mmm++;
echo '<li class="col-md-3 col-sm-5 col-xs-4 active">
    <a href="javascript:void(0)" class="btn btn-min btn-gray" target="_self" data-clipboard-text="" id="'.$mmm.'" p_name="第'.$value['drama'].'集" onclick="bofang(\''.$value['url'].'\',\''.$mmm.'\')">'.$value['drama'].'</a></li>';
}
echo '</ul></div>';
}
echo "</div></div>";
}
?>

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
         <span class="sketch content"><?php echo $bfjjzl; ?></span>
        </div> 
       </div> 
      </div> 
     </div> 
     <!-- 剧情简介--> 
     <div class="myui-panel myui-panel-bg clearfix"> 
      <div class="myui-panel-box clearfix"> 
       <div class="myui-panel_hd"> 
        <div class="myui-panel__head clearfix"> 
         <h3 class="title"> 猜你喜欢 </h3> 
        </div> 
       </div> 
      <div class="flickity clearfix" data-align="left" data-next="1" data-play="1500">
<?php
if($yplx=='tv'){
foreach ($cnxhurl as $ks=>$vs){
echo '<li class="col-lg- col-md-6 col-sm-4 col-xs-3"> 
          <div class="myui-vodlist__box"> 
           <a class="myui-vodlist__thumb lazyload" href="/'.$dzbq.'/'.cfurl($vs).'.html" title="'.$cnxhtitle[$ks].'" data-original="'.$cnxhimg[$ks].'"> <span class="play hidden-xs"></span> <span class="pic-tag pic-tag-top" style="background-color: #5bb7fe;">'.$cnxhtom[$ks].'</span> <span class="pic-text text-right"></span> </a> 
           <div class="myui-vodlist__detail"> 
            <h4 class="title text-overflow"><a href="/'.$dzbq.'/'.cfurl($vs).'.html" title="'.$cnxhtitle[$ks].'">'.$cnxhtitle[$ks].'</a></h4> 
           </div> 
          </div>
		  </li>';	  
}
}else{
foreach ($cnxhurl as $ks=>$vs){
echo '<li class="col-lg- col-md-6 col-sm-4 col-xs-3"> 
          <div class="myui-vodlist__box"> 
           <a class="myui-vodlist__thumb lazyload" href="'.$vs.'" title="'.$cnxhtitle[$ks].'" data-original="'.$cnxhimg[$ks].'"> <span class="play hidden-xs"></span> <span class="pic-tag pic-tag-top" style="background-color: #5bb7fe;">'.$cnxhtom[$ks].'</span> <span class="pic-text text-right"></span> </a> 
           <div class="myui-vodlist__detail"> 
            <h4 class="title text-overflow"><a href="'.$vs.'" title="'.$cnxhtitle[$ks].'">'.$cnxhtitle[$ks].'</a></h4> 
           </div> 
          </div>
		  </li>';		  
}
}
?>
      </div>
      </div> 
     </div> 
    </div> 
    <div class="col-md-wide-25 col-xs-1 myui-sidebar hidden-sm hidden-xs"> 
     <div class="myui-panel myui-panel-bg clearfix"> 
      <div class="myui-panel-box clearfix"> 
       <div class="myui-panel_hd"> 
        <div class="myui-panel__head clearfix"> 
         <h3 class="title"><?php echo $dybdb1;?></h3> 
        </div> 
       </div> 
       <div class="myui-panel_bd"> 
        <ul class="myui-vodlist__text col-pd clearfix"> 
						<?php
						foreach ($dybdb2[1] as $k=>$dsjurl){
						echo '<li> <a href="/'.$dzbq.'/'.cfurl($dsjurl).'.html" title="'.$dybdb2[2][$k].'"><span class="pull-right  text-muted visible-lg" style="color: ;"><i class="icon-hot"></i>'.$dybdb3[$k].'</span> <span class="badge">'.($k+1).'</span>'.$dybdb2[2][$k].'</a> </li>';
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
if('<?php echo $yplx;?>'=='zongyi'){
qieyear()
}
var cat="<?php echo $nianfenxx[2];?>";
var xuanzhe="<?php echo $nianfenxx[1];?>";
function LoadList(cat,xuanzhe){
//
var tbody = "";
$("#playlist").empty();
     		$.ajax({
     			url:'https://kan.2345.com/episodeapi/newDetail/setNewEpisodeApi/',
     			data:{"id":<?php if($zyid[1]==''){echo $zdjson="1";}else{echo $zdjson=$zyid[1];};?>,"year":xuanzhe,"api":'<?php if($bfy[1]==''){echo $zdjson="all";}else{echo $zdjson=$bfy[1];};?>',"month":cat},
				type:'GET',
     			dataType : "jsonp",//数据类型为jsonp
     			async:true,
                jsonp: "callback", ///指定参数名称，默认为callback  
     			success:function(data){
				$.each(data['data'], function (infoIndex, info){
		        var trs = "";
                trs += '<li class="col-md-3 col-sm-5 col-xs-4 active"><a href="javascript:void(0)" class="btn btn-min btn-gray" target="_self" data-clipboard-text="" id="'+(infoIndex+1)+'" p_name="'+info['issue']+'" onclick="bofang(\''+info['url']+'\',\''+(infoIndex+1)+'\')">'+info['shortIssue']+'</a></li>';
		        tbody += trs;
                })
				/* type23=$.parseJSON(data['monthList']);
				$.each(type23[xuanzhe], function (yfsl, yf){
				var zyy = "";
				if (yfsl==0) {
                zyy += '<li class="active"><a style="color: #fff;" href="#zy'+yf+'" data-id="'+yf+'" data-toggle="tab">'+yf+'</a></li>';
				}else{
				zyy += '<li><a style="color: #fff;" href="#zy'+yf+'" data-id="'+yf+'" data-toggle="tab">'+yf+'</a></li>';
				}
				zydy += zyy;
                      }) */
     $("#playlist").append(tbody);
    }
});
}
$("#myTab li a").bind("click",function(){
LoadList(cat,xuanzhe);
//console.log(cat,xuanzhe);
    });
function qieyear(){
xuanzhe=$("#selectyear").find("option:selected").attr("year");
month=$("#selectyear").find("option:selected").attr("month");
LoadList(month,xuanzhe);
}
    	$(".MacPlayer").addClass("embed-responsive").css({"padding-bottom":"56.25%","z-index":"99"});
		$("#playleft,.dplayer-video-wrap").css({"position":"inherit","overflow":"initial"});
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
         }});}else{if('<?php echo $bftitlezl; ?>'){
jiazainame(1);yycmslsjl('<?php echo $bftitlezl; ?>','<?php echo $bfypurldz;?>','1',$("#1").attr("p_name"));	
return;}}});
function hrefdeal(){
document.getElementById('xuji').style.display='block';
document.getElementById('xluu').style.display = 'block';}
function bofang(mp4url,jiid){
		jiazainame(jiid)
		var xuanjk=$(".xianlucss");
		yycmslsjl('<?php echo $bftitlezl; ?>',mp4url,jiid,$("#"+jiid).attr("p_name"));
		document.getElementById('videourlgo').href=mp4url;
		document.getElementById('video').src=xuanjk.attr("data-url")+mp4url;};
	function jiazainame(jiid){
		//alert(jiid);
		var shang="btn-prev";
		var xia="btn-next";
		var name=$("#"+jiid).attr("p_name");
		var tishi="";
		if (name=="") {
			tishi=('正在播放：<?php echo $bftitlezl; ?> - '+$("#"+jiid).text()+'');
		}else{
			tishi = ('正在播放：<?php echo $bftitlezl; ?> - '+name+'');
		}
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
<span class="hide xzname" data-name="<?php echo $bftitlezl; ?>" data-link="<?php echo $_SERVER['REQUEST_URI'] ?>" data-pic="" data-part="1" data-limit="10"></span> 	
<?php
include 'footer.php';
?>
</body>
</html>
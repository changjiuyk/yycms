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
<body class="yycmsys">
<?php 
include 'header.php';
?>
<div class="container">
  <div class="row">
    <div class="col-lg-wide-75 col-md-wide-7 col-xs-1 padding-0">
      <!-- 详细信息-->
      <div class="myui-panel myui-panel-bg clearfix">
        <div class="myui-panel-box clearfix">
          <div class="col-xs-1">
            <span class="text-muted">当前位置</span>
            <i class="fa fa-angle-right text-muted"></i>
            <span class="text-muted"><?php echo $bftitlezl; ?></span></div>
          <div class="col-xs-1">
            <div class="myui-content__thumb">
              <a class="myui-vodlist__thumb picture" href="<?php echo $bfypurldz;?>" target="_blank"  title="<?php echo $bftitlezl; ?>">
                <img class="lazyload" src="<?php echo $yycms_a_jzt;?>" data-original="<?php echo $bfimgzl;?>" />
                <span class="play hidden-xs"></span>
              </a>
              <div class="bdshare bdsharebuttonbox text-center hidden-sm hidden-xs" style="margin-top: 10px; width: 220px;">
                <span class="bds_shere"></span>
                <a class="bds_qzone" data-cmd="qzone"></a>
                <a class="bds_tsina" data-cmd="tsina"></a>
                <a class="bds_weixin" data-cmd="weixin"></a>
                <a class="bds_tqq" data-cmd="tqq"></a>
                <a class="bds_sqq" data-cmd="sqq"></a>
                <a class="bds_more" data-cmd="more"></a>
              </div>
            </div>
            <div class="myui-content__detail">
              <a class="btn btn-default dropdown-hover pull-right visible-lg" href="javascript:;">
                <div class="dropdown-box bottom fadeInDown clearfix" style="display: block;">
                  <div class="item text-center" style="padding: 15px 10px;">
                    <div class="qrcode-box" style="background-color: #ffffff;">
                      <img class="icon" src="/favicon.ico" width="25" height="25" />
                      <span id="qrcode" data-link="0" data-dark="#000000" data-light="#ffffff"></span>
                    </div>
                    <p class="margin-0">扫一扫用手机观看</p></div>
                </div>
                <i class="fa fa-mobile" style="font-size: 24px; vertical-align: -4px;"></i>手机观看</a>
              <h1 class="title"><?php echo $bftitlezl; ?></h1>
              <!-- 评分 -->
              <div id="rating" class="score" data-mid="1" data-id="555" data-score="1">
                <span class="left text-muted">评分：</span>
                <ul class="rating">
                  <li title="很差" val="1">
                    <i class="fa fa-star"></i>
                  </li>
                  <li title="较差" val="2">
                    <i class="fa fa-star-o"></i>
                  </li>
                  <li title="还行" val="3">
                    <i class="fa fa-star-o"></i>
                  </li>
                  <li title="推荐" val="4">
                    <i class="fa fa-star-o"></i>
                  </li>
                  <li title="力荐" val="5">
                    <i class="fa fa-star-o"></i>
                  </li>
                </ul>
                <span class="branch"><?php echo $bfpfzl;?></span></div>
              <p class="data">
                <span class="text-muted">分类：</span>
                <a href="/"><?php echo $bflx[4][0];?> <?php echo $bflx[4][1];?></a>
                <span class="split-line"></span>
                <span class="text-muted hidden-xs">地区：</span>
                <span class="split-line"></span>
                <span class="text-muted hidden-xs">年份：</span>
              <p class="data hidden-sm">
                <span class="text-muted"></span>
                <span class="text-red"></span></p>
              <p class="data">
                <span class="text-muted">主演：</span><?php foreach ($bfzyzl as $vzy ){echo $vzy.'&nbsp;';}?></p>
              <p class="data hidden-xs">
                <span class="text-muted">简介：</span><?php echo $bfjjzl; ?>
                <a href="#desc">详情
                  <i class="fa fa-angle-right"></i></a>
              </p>
            </div>
            <div class="myui-content__operate">
              <a class="btn btn-warm" href="<?php echo $bfypurldz;?>" target="_blank">
                <i class="fa fa-play"></i>立即播放</a>
              <a class="btn btn-info" href="javascript:;" onclick="MyTheme.Layer.Img('打赏','<?php echo $yycms_a_dst;?>','扫码支付任意金额')">
                <i class="fa fa-cny"></i>打赏</a>
              <a class="btn btn-danger favorite" href="javascript:void(0);">
                <i class="fa fa-star"></i>收藏</a>
            </div>
          </div>
        </div>
      </div>
      <div class="myui-panel myui-panel-bg clearfix" id="desc">
        <div class="myui-panel-box clearfix">
          <div class="myui-panel_hd">
            <div class="myui-panel__head active bottom-line clearfix">
              <h3 class="title">剧情简介</h3></div>
          </div>
          <div class="myui-panel_bd">
            <div class="col-pd text-collapse content">
              <span class="sketch content"><?php echo $bfjjzl; ?></span>
              <span class="data" style="display: none;">
                <p><?php echo $bfjjzl; ?></p>
              </span>
              <a class="details" href="javascript:;">详情
                <i class="fa fa-angle-down"></i></a>
            </div>
          </div>
        </div>
      </div>
      <!-- 剧情简介-->
      <div class="myui-panel myui-panel-bg clearfix">
        <div class="myui-panel-box clearfix">
          <div class="myui-panel_hd">
            <div class="myui-panel__head active bottom-line clearfix">
              <a class="more sort-button pull-right" href="javascript:;">
                <i class="fa fa-sort-amount-asc"></i>排序</a>
              <h3 class="title">播放地址</h3>
<?php
if ($yplx=="dianying"){
echo '<ul class="nav nav-tabs active"></ul></div></div><div class="tab-content myui-panel_bd">
            <div id="playlist1" class="tab-pane fade in clearfix">
              <ul class="myui-content__list scrollbar sort-list clearfix" style="max-height: 300px; overflow: auto;">';
foreach ($bfyptitle as $kk => $vod){
echo '<li class="col-lg-10 col-md-8 col-sm-6 col-xs-4"><a class="btn btn-default" href="'.$bfypurldzd[$kk].'" target="_blank">'.bfyhq($vod).'</a></li>';
}
echo '</ul></div></div>';
}else if ($yplx == 'zongyi') {
echo '<ul class="nav nav-tabs active"></ul>
            </div>
          </div><div class="tab-content myui-panel_bd">
            <div id="playlist1" class="tab-pane fade in clearfix">
              <ul class="myui-content__list scrollbar sort-list clearfix" style="max-height: 300px; overflow: auto;">';
foreach ($fbyxldz[1] as $kk => $zyurl){
	echo '<li class="col-lg-10 col-md-8 col-sm-6 col-xs-4"><a class="btn btn-default" href="'.$zyurl.'" target="_blank">'.mb_substr($fbyxldz[3][$kk], -6, 6, 'utf-8').'</a></li>';
}
echo '</ul></div></div>';
}else{
	echo '<ul class="nav nav-tabs active">';
foreach ($drama as $kk => $vod){
echo '<li><a href="#'.$kk.'" data-toggle="tab">'.bfyhq($kk).'</a></li>';
}
echo '</ul></div></div>';
	echo '<div class="tab-content myui-panel_bd">';
	foreach ($drama as $kk => $vod){
echo '<div id="'.$kk.'" class="tab-pane fade in clearfix"><ul class="myui-content__list scrollbar sort-list clearfix" style="max-height: 300px; overflow: auto;">';
foreach ($vod[0] as $key => $value){
echo '<li class="col-lg-10 col-md-8 col-sm-6 col-xs-4"><a class="btn btn-default" href="'.$value['url'].'" target="_blank">第'.$value['drama'].'集</a></li>';
}
echo '</ul></div>';
}
echo '</div>';
}
?>
        </div>
      </div>
      <script type="text/javascript">$(".tab-pane:first,.nav-tabs li:first").addClass("active");</script>
      <!-- 播放地址-->
      <!-- 下载地址-->
      <div class="myui-panel myui-panel-bg clearfix">
        <div class="myui-panel-box clearfix">
          <div class="myui-panel_hd">
            <div class="myui-panel__head active bottom-line clearfix">
              <h3 class="title">猜你喜欢</h3>
              <ul class="nav nav-tabs active">
                <li class="active">
                  <a href="#type" data-toggle="tab"></a></li>
                <li>
                  <a href="#actor" data-toggle="tab"></a></li>
                <li>
                  <a href="#year" data-toggle="tab"></a></li>
              </ul>
            </div>
          </div>
          <div class="tab-content myui-panel_bd">
            <ul id="type" class="myui-vodlist__bd tab-pane fade in active clearfix">
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
           <a class="myui-vodlist__thumb lazyload" target="_blank" href="'.$vs.'" title="'.$cnxhtitle[$ks].'" data-original="'.$cnxhimg[$ks].'"> <span class="play hidden-xs"></span> <span class="pic-tag pic-tag-top" style="background-color: #5bb7fe;">'.$cnxhtom[$ks].'</span> <span class="pic-text text-right"></span> </a> 
           <div class="myui-vodlist__detail"> 
            <h4 class="title text-overflow"><a target="_blank" href="'.$vs.'" title="'.$cnxhtitle[$ks].'">'.$cnxhtitle[$ks].'</a></h4> 
           </div> 
          </div>
		  </li>';
}
}
?>
            </ul>
          </div>
        </div>
      </div>

      <!-- 评论--></div>
    <div class="col-lg-wide-25 col-md-wide-3 col-xs-1 myui-sidebar hidden-sm hidden-xs">
      <div class="myui-panel myui-panel-bg clearfix">
        <div class="myui-panel-box clearfix">
          <div class="myui-panel_hd">
            <div class="myui-panel__head clearfix">
              <h3 class="title"><?php echo $dybdb1;?></h3>
            </div>
          </div>
          <div class="myui-panel_bd">
            <ul class="myui-vodlist__media active col-pd clearfix">
             						<?php
						foreach ($dybdb2[1] as $k=>$dsjurl){
						echo '<li> <a href="/'.$dzbq.'/'.cfurl($dsjurl).'.html" title="'.$dybdb2[2][$k].'"><span class="pull-right  text-muted visible-lg" style="color: ;"><i class="icon-hot"></i>'.$dybdb3[$k].'</span> <span class="badge">'.($k+1).'</span>'.$dybdb2[2][$k].'</a> </li>';
						}
						?>
            </ul>
          </div>
        </div>
      </div>
        <div class="myui-panel myui-panel-bg clearfix">
    <?php if(!$gametype['gg_gg11']==""){
echo '<div class="row"> 
	   '.$gametype['gg_gg11'].'
       </div>';	
}
?>
      </div>
    </div>
  </div>
</div>
<span class="hide xzname" data-name="<?php echo $bftitlezl; ?>" data-link="<?php echo $_SERVER['REQUEST_URI'] ?>" data-pic="" data-part="1" data-limit="10"></span> 	
<?php
include 'footer.php';
?>
</body>
</html>
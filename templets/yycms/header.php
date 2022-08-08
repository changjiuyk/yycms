<header class="myui-header__top clearfix " id="header-top"> 
   <div class="container"> 
    <div class="row"> 
     <div class="myui-header_bd clearfix"> 
      <div class="myui-header__logo"> 
       <a class="logo" href="/"></a> 
      </div> 
      <ul class="myui-header__menu nav-menu"> 
       <li class="<?php echo $index;?> hidden-sm hidden-xs"><a href="/index.html">首页</a></li> 
       <li class="<?php echo $dy;?> hidden-sm hidden-xs"><a href="/movie.html">电影</a></li> 
       <li class="<?php echo $jj;?> hidden-sm hidden-xs"><a href="/tv.html">剧集</a></li> 
	   <li class="<?php echo $dm;?> hidden-sm hidden-xs"><a href="/dongman.html">动漫</a></li> 
	   <li class="<?php echo $zy;?> hidden-sm hidden-xs"><a href="/zongyi.html">综艺</a></li>
       <li class="<?php echo $mj;?> hidden-sm hidden-xs"><a href="/mj-0-1.html">美剧</a></li>	   
       <li class="<?php echo $qxk;?> hidden-sm hidden-xs"><a href="/qxk-0-1.html">抢先</a></li> 
       <li class="dropdown-hover"> <a href="javascript:;">频道 <i class="fa fa-angle-down"></i></a> 
        <div class="dropdown-box bottom fadeInDown clearfix"> 
         <ul class="item nav-list clearfix up-ul6"> 
          <li class="col-lg-5 col-md-5 col-sm-5 col-xs-3"><a class="btn btn-sm btn-block btn-default" href="/index.html">首页</a></li> 
          <li class="col-lg-5 col-md-5 col-sm-5 col-xs-3"><a class="btn btn-sm btn-block btn-default" href="/movie.html">电影</a></li> 
          <li class="col-lg-5 col-md-5 col-sm-5 col-xs-3"><a class="btn btn-sm btn-block btn-default" href="/tv.html">剧集</a></li> 
          <li class="col-lg-5 col-md-5 col-sm-5 col-xs-3"><a class="btn btn-sm btn-block btn-default" href="/dongman.html">动漫</a></li> 
          <li class="col-lg-5 col-md-5 col-sm-5 col-xs-3"><a class="btn btn-sm btn-block btn-default" href="/zongyi.html">综艺</a></li> 
		 <li class="col-lg-5 col-md-5 col-sm-5 col-xs-3"><a class="btn btn-sm btn-block btn-default" href="/mj-0-1.html">美剧</a></li>
          <li class="col-lg-5 col-md-5 col-sm-5 col-xs-3"><a class="btn btn-sm btn-block btn-default" href="/qxk-0-1.html">抢先</a></li>
          <li class="col-lg-5 col-md-5 col-sm-5 col-xs-3"><a class="btn btn-sm btn-block btn-default" href="/music.html">音乐</a></li>			  
		  <li class="col-lg-5 col-md-5 col-sm-5 col-xs-3"><a class="btn btn-sm btn-block btn-default" href="/yg.html">预告</a></li> 
		  <li class="col-lg-5 col-md-5 col-sm-5 col-xs-3"><a class="btn btn-sm btn-block btn-default" href="/zb.html">直播</a></li> 
          <li class="col-lg-5 col-md-5 col-sm-5 col-xs-3"><a class="btn btn-sm btn-block btn-default" href="/zx.html">资讯</a></li> 
		  <li class="col-lg-5 col-md-5 col-sm-5 col-xs-3"><a class="btn btn-sm btn-block btn-default" href="/mx.html">明星</a></li>
		  <li class="col-lg-5 col-md-5 col-sm-5 col-xs-3"><a class="btn btn-sm btn-block btn-default" href="/app.html">APP</a></li> 
         </ul> 
        </div> 
		</li> 
      </ul>     
      <div class="myui-header__search search-box"> 
        <select id="search_fromm" class="search-select" onchange="changeActionn();">
        <option class="vod" value="/search" selected title="本站采集视频">站内</option>
         <option class="news" value="/searchqw" title="资源比较全面">全网</option>   
	   </select> 
       <div id="search" onsubmit="return qrsearch();" action="/search"> 
        <input type="text" id="wd" name="wd" class="search_wd form-control" value="" placeholder="输入明星、影片关键词" autocomplete="off" style=" padding-left: 72px; " onkeydown="if(event.keyCode==13){submi.click()}"/> 
        <button class="submit search_submit" id="submi" type="submit" onclick="submit()"><i class="fa fa-search"></i></button> 
       </div>
       <a class="search-close visible-xs" onclick="submit()" href="javascript:;"><i class="fa fa-close"></i></a> 
       <div class="search-dropdown-hot dropdown-box bottom fadeInDown"> 
        <div class="item"> 
         <p class="text-muted"> 热门搜索 </p> 
         <?php
        foreach(YYCMSRS() as $ni=>$value){
        echo '<p><a class="text-333" href="/'.$dzbq.'/'.cfurl($value['url']).'.html" title="'.$value['title'].'"><span class="badge">'.($ni+1).'</span>'.$value['title'].'</a></p>';
        }
        ?>
        </div> 
       </div> 
      </div> 
      <ul class="myui-header__user"> 
       <li class="visible-xs"> <a class="open-search" href="javascript:;"><i class="fa fa-search"></i></a> </li> 
       <li class="dropdown-hover"> <a href="javascript:;" title="播放记录"> <i class="fa fa-clock-o"></i></a> 
        <div class="dropdown-box fadeInDown"> 
         <div class="item clearfix"> 
          <p class="text-muted"> <a class="text-red pull-right" href="javascript:;" onclick="MyTheme.Cookie.Del('history','您确定要清除记录吗？');">[清空]</a> 播放记录 </p> 
          <div class="history-list clearfix"> 
           <script type="text/javascript">
										var history_get = MyTheme.Cookie.Get("history");
										if(history_get){
										    var json=eval("("+history_get+")");
										    for(i=0;i<json.length;i++){
										        document.write("<p><a class='text-333' href='"+json[i].vod_url+"' title='"+json[i].vod_name+"'><span class='pull-right text-red'>"+json[i].vod_partt+"</span>"+json[i].vod_name+"</a></p>");
										    }
										} else {
											document.write("<p style='padding: 80px 0; text-align: center'>您还没有看过影片哦</p>");
									    }
									</script> 
          </div> 
         </div> 
        </div> </li> 
       <li><a href="/gbook.html" title="留言反馈"><i class="fa fa-commenting"></i></a></li>
       <li class="menu dropdown-hover">
						<a href="javascript:;"><i class="fa fa-user"></i></a>
						<div class="dropdown-box fadeInDown">
							<ul class="item clearfix">
<?php
if ($_COOKIE['user_name']==''){
echo '<li><a class="text-333" href="/user/login.html">会员中心</a></li>';	
}else{
echo '<li><a class="text-333" href="/user/index.html">会员中心</a></li>';	
}
?>														
								<li><a class="text-333" href="/user/plays.html">播放记录</a></li>
								<li><a class="text-333" onclick="tuichu()">退出</a></li>
							</ul>
						</div>
					</li>
		<li class="hidden-sm hidden-xs"><a href="/app.html" title="下载APP"><i class="fa fa-download"></i></a></li>			
      </ul> 
     </div> 
    </div> 
   </div> 
  </header>
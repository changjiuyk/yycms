<?php
$path=yycms_ROOT."cache/index/";
if (!is_dir($path)){
mkdir(iconv("UTF-8", "GBK", $path),0777,true); 
}
if($yycms_a_hckg == '1'){
$gxpd=time()-filemtime($path.md5('https://kan.2345.com/'));
if($gxpd>$yycms_a_hcsj*60*60){
$datadb=gett('https://kan.2345.com/');	
file_put_contents($path.md5('https://kan.2345.com/'),gzdeflate($datadb));
}
$phburl=gzinflate(file_get_contents($path.md5('https://kan.2345.com/')));
}else{
$phburl=gett('https://kan.2345.com/');
}
preg_match_all('#<span class="sMark">电视剧TOP</span>[\s\S]+?<div id="secondFlashAds">#', $phburl, $dsjph);//排行榜
preg_match_all('#<a href="(.*)" target="_blank" data-ajax25="(.*)" data-ajax25index="(.*)#', $dsjph[0][0], $dsjbd);//排行榜/1地址 2名称
preg_match_all('#<span class="season"><i class="icon-hot"></i>([0-9]+)</span>#', $dsjph[0][0], $dsjbdrd);//排行榜/1
preg_match_all('#<span class="sMark">电影TOP</span>[\s\S]+?<div class="rowIvy ivy-user-defined mt10 clearfix">#', $phburl, $dyph);//排行榜
preg_match_all('#<a href="(.*)" target="_blank" data-ajax25="(.*)" data-ajax25index="(.*)#', $dyph[0][0], $dybd);//排行榜/1地址 2名称
preg_match_all('#<span class="season"><i class="icon-hot"></i>([0-9]+)</span>#', $dyph[0][0], $dybdrd);//排行榜/1

preg_match_all('#<span class="sMark">综艺TOP</span>[\s\S]+?<div class="rowIvy ivy-user-defined mt10 clearfix">#', $phburl, $zyph);//排行榜
preg_match_all('#<a href="(.*)" data-ajax25="(.*)" data-ajax25index="(.*)#', $zyph[0][0], $zybd);//排行榜/1地址 2名称
preg_match_all('#<span class="season"><i class="icon-hot"></i>([0-9]+)</span>#', $zyph[0][0], $zybdrd);//排行榜/1

preg_match_all('#<span class="sMark">动漫TOP</span>[\s\S]+?<div class="rowIvy mt0 clearfix">#', $phburl, $dmph);//排行榜
preg_match_all('#<a href="(.*)" target="_blank" data-ajax25="(.*)" data-ajax25index="(.*)#', $dmph[0][0], $dmbd);//排行榜/1地址 2名称
preg_match_all('#<span class="season"><i class="icon-hot"></i>([0-9]+)</span>#', $dmph[0][0], $dmbdrd);//排行榜/1
?>
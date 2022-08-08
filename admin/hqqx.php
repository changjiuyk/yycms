<?php
include '../sava/inc.php';///YYCMS影视:yycms.saonantv.com
function ysfl($fenlei){
switch($fenlei){
    case '动作片';
	     $fenlei="6";//
         break;
    case '喜剧片';
         $fenlei="9";//
         break;
    case '爱情片';
         $fenlei="7";//
         break;
    case '科幻片';
         $fenlei="1";//
         break;
	case '恐怖片';
         $fenlei="2";//
         break;
	case '剧情片';
         $fenlei="5";//
         break;	 
	case '战争片';
         $fenlei="4";//
         break;
	case '动漫片';
         $fenlei="10";//
         break;	 
         default ;
         $fenlei="0";
         break;
}
return $fenlei;
}
//判断影片是否存在
function IsExist($name){
	$sql="select count(*) as num from yycms_vod where b_name ='{$name}'";
	$result = mysql_query($sql);
	$row=mysql_fetch_array($result);
	return $row['num']==0;
}
//修改影片地址
function UpdateVod($img,$url,$descs,$actor,$wd){// 不想修改可以删除
	$_data['b_tp'] = $img;
	$_data['b_jj'] = $descs;
	$_data['b_url'] = $url;
	$_data['b_zy'] = $actor;
	$sql = 'update yycms_vod set ' . arrtoupdate($_data) . ' where b_name = "' . $wd . '"';
	$res =  mysql_query($sql);	
	return $res;
}
//添加新影片
function AddVod($img,$url,$descs,$actor,$wd,$parent){
	$_data['b_name'] = $wd;
	$_data['b_tp'] = $img;
    $_data['b_tj'] = '1';//不想推荐首页显示请把0改1
	$_data['b_jj'] = $descs;
	$_data['b_jf'] = '0';
	$_data['b_hy'] = '0';
	$_data['b_url'] = $url;
	$_data['b_zy'] = $actor;
	$_data['b_time'] = date("Y-m-d h:i:s",time());
	$_data['b_fl'] = $parent;//分类
	$str = arrtoinsert($_data);
	$sql = 'insert into yycms_vod (' . $str[0] . ') values (' . $str[1] . ')';
	$res =  mysql_query($sql);	
	return $res;
}
$siteid="zuida";
$pingbi = array("");
ini_set("error_reporting","E_ALL & ~E_NOTICE"); 
$dz=file_get_contents('https://movie.douban.com/cinema/nowplaying/dongguan/');
preg_match_all('#<div id="nowplaying">[\s\S]+?<div class="aside">#',$dz,$xarr1);
preg_match_all('#data-title="(.*?)"#',$xarr1[0][0],$xarr);
$arr=[];
foreach ($xarr[1] as $key => $wd) {
if($key>=12) break;
		$data=gett($yycmszyjx[2].'?wd='.urlencode($wd));//$yycmszyjx[2]表示后台资源站接口,[2]表示第三个资源
		$data=json_decode($data, TRUE);
        $list1=$data["data"][0];
		$suArr = explode("$$$",$list1['vod_url']);
		$d=[];
				foreach($suArr as $a=>$b){
				 	if(strpos($b ,'.m3u8')){
                 		$title= $b;
						}
				    $d[] = explode("\n",$title);
				}			
if(strlen($list1['vod_pic']) >= 1){
if($list1['list_name'] == '伦理片' || $list1['list_name'] == '写真美女' || $list1['list_name'] == '福利片' || $list1['list_name'] == '伦理'){
continue;
}	
$arr[] = array("wd"=> $wd,"url" => $d[0],"imgs"=> $list1['vod_pic'],"actor"=> $list1['vod_actor'],"descs"=> $list1['vod_content'],"id"=> $list1['vod_id'],"fenlei"=>$list1['list_name']);	
}
}
foreach ($arr as $id => $newarr) {
$url="";
foreach ($newarr['url'] as $dz){
$url=$dz;
}	
	 if (IsExist($newarr['wd'])) {
		AddVod($newarr['imgs'],$url,$newarr['descs'],$newarr['actor'],$newarr['wd'],ysfl($newarr['fenlei']));
		echo $newarr['wd']."不存在执行添加<br>";
	}else{

		UpdateVod($newarr['imgs'],$url,$newarr['descs'],$newarr['actor'],$newarr['wd']);
		echo $newarr['wd']."存在执行修改<br>";
	}
}
?>
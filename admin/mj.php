<?php
include('../sava/inc.php');
header("Content-type:text/json");
if(empty($_POST['url'])){
echo json_encode(array('code' => '400', 'msg' => '资源地址为空'));
exit;
}
$xmldata=qwget($_POST['url']);
$weatherobj = simplexml_load_string($xmldata,'SimpleXMLElement',LIBXML_NOCDATA);
$xml_object1=$weatherobj->class;
$xml_object2=$weatherobj->class->ty;
foreach($xml_object2 as $k=>$v){
$sa=$v->attributes();
$jsonStr = json_encode($v);
$jsonArray = json_decode($jsonStr,true);
if(empty($jsonArray)){
echo json_encode(array('code' => '400', 'msg' => '资源栏目获取失败'));
exit;
}
if($jsonArray[0]=='电影'|| $jsonArray[0] == '剧集'||  $jsonArray[0] == '连续剧'|| $jsonArray[0] == '论理片'|| $jsonArray[0] == '伦理片'|| $jsonArray[0] == '伦理'|| $jsonArray[0] == '论理'|| $jsonArray[0] == '写真美女'|| $jsonArray[0] == '韩国美女'|| $jsonArray[0] == '主播美女'|| $jsonArray[0] == 'VIP福利'){
continue;
}
$age[]=array("lx"=>$jsonArray[0],"id"=>json_decode($sa['id'],true));
}
$_data['a_mjlm'] = addslashes(json_encode($age,JSON_UNESCAPED_UNICODE));
$gametype = $mysqli->update('yycms_pintai', '' . arrtoupdate($_data) . ' where id = 1');
if (!!$gametype) {
echo json_encode(array('code' => '200', 'msg' => '获取成功'));
	} else {
echo json_encode(array('code' => '400', 'msg' => '获取失败,或者数据重复'));
	}
?>


<?php
include('sava/conn.php');
function hh($str){
    $str=str_replace("\r\n",'',$str);
    $str=str_replace("\n\r",'',$str);
    $str=str_replace("\r",'',$str);
    $str=str_replace("\n",'',$str);
    $str=str_replace("\t",'',$str);
    $str=str_replace("  ",'',$str);
    return $str;
}
$result = mysql_query('select * from yycms_wx');
$row = mysql_fetch_array($result);
include('sava/simple_html_dom.php');
error_reporting(0); //禁用错误报告
define('TOKEN', $row['wx_token']); //定义常量
define('DOMAIN', $row['wx_url']); //定义常量
define('WEI', '1'); //定义常量
define('GUANZHU', $row['wx_hf']); //定义常量
define('TISHI', $row['wx_ts']); //定义常量
$wechatObj = new wechatCallbackapiTest();//实例化类
if (isset($_GET['echostr'])) { //如果随机字符串存在
$wechatObj->valid(); //执行wechatObj类下的valid函数
}else{
	$wechatObj->responseMsg(); //如果未得到随机字符串，执行wechatObj类下的responseMsg函数
}


class wechatCallbackapiTest  //定义类
{
    //验证签名
    public function valid()
    {
        $echoStr = $_GET["echostr"];
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];
        $token = TOKEN;
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode($tmpArr);
        $tmpStr = sha1($tmpStr);
        if($tmpStr == $signature){
            echo $echoStr;
            exit;
        }
    }
  
  	//响应消息
    public function responseMsg()
    {
        $postStr =   isset($GLOBALS["HTTP_RAW_POST_DATA"]) ?  $GLOBALS["HTTP_RAW_POST_DATA"]  : "" ;
        //$postStr = 'huihui';      //调试用
        if (!empty($postStr)){
            $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
            $RX_TYPE = trim($postObj->MsgType);
            // $RX_TYPE = "text";//gnagcai  zhege  meiqudiao
            //消息类型分离
            switch ($RX_TYPE)
            {
                case "event":
                    $result = $this->receiveEvent($postObj);
                    break;
                case "text":
                    $result = $this->receiveText($postObj);
                    break;
                case "image":
                    $result = $this->receiveImage($postObj);
                    break;
                case "voice":
                    $result = $this->receiveVoice($postObj);
                    break;
                default:
                    $result = "unknown msg type: ".$RX_TYPE;
                    break;
            }
            echo "";
        }else {
            echo "";
            exit;
        }
    }
  	
  	//接收事件消息
    private function receiveEvent($object)
    {
        $content = "";
        global $webname;
        switch ($object->Event)
        {
            //关注公众号事件
            case "subscribe":
                $content = "".GUANZHU."";
            
                break;
            //取消关注
            case "unsubscribe":
                $content = "取消关注";
                break;
        }

        if(is_array($content)){
            $result = $this->transmitNews($object, $content);
        }else{
            $result = $this->transmitText($object, $content);
        }
        return $result;
    }

    //接收文本消息
    private function receiveText($object)
    {

        $a = ($object->Content);
        $keyword = trim(addslashes($a));//关键字
      	
      	$arr = $this->keywordSearch($keyword);
      
        $result="";

        if (is_array($arr)) {
            
          	
          	if (count($arr) > 1){
                $content = "";
                foreach ($arr as &$item) {
                    $content .= "\n\n".(empty($item["Url"]) ? $item["Title"] : "<a href='".$item["Url"]."'>".$item["Title"]."</a>");
                }
                $result = $this->transmitText($object, trim($content));
                return $result;
            }else{
            	 $this->transmitNews($object, $arr);
            }
        } else {
            $this->transmitText($object, $arr);
        }
        return "";
    }
  
  	//接收语音消息
    private function receiveVoice($object)
    {

        $a = ($object->Recognition);
      	$a = str_replace("。","",$a);  
        $keyword = trim(addslashes($a));//关键字
      
      	//$this->transmitText($object, $keyword);
      	
      	$arr = $this->keywordSearch($keyword);
      
        $result="";
        if (is_array($arr)) {
            if (count($arr) > 1){
                $content = "";
                foreach ($arr as &$item) {
                    $content .= "\n\n".(empty($item["Url"]) ? $item["Title"] : "<a href='".$item["Url"]."'>".$item["Title"]."</a>");
                }
                $result = $this->transmitText($object, trim($content));
                return $result;
            }else{
            	 $this->transmitNews($object, $arr);
            }
        } else {
            $this->transmitText($object, $arr);
        }
        return "";
    }
  
  	//关键字搜索
  	private function keywordSearch($keyword)
    {
        $result = mysql_query('select * from yycms_vod where b_name like "%'.$keyword.'%" order by b_id desc');
        while ($row = mysql_fetch_array($result)){
        $tupian=$row['b_tp'];
        $cs=$row['b_name'];
        $jianjie=$row['b_jj'];
        $cc="qxplay/";
        $dd="qxplay/";
        $chuandi=$cc.$row['b_id'];
        $arr[] = array(
                    "Title" =>"【".$cs."】官网点击在线观看",
                    "Description" => $jianjie,
                    "PicUrl" => $tupian,
                    "Url" => DOMAIN.$chuandi.".html"
                );
        }
          $url = 'https://so.360kan.com/index.php?kw='.$keyword;
          $html = file_get_contents($url);
          $html = hh($html);
          $i=0;
	preg_match("#<divid='js-longvideo' class=\"p-longvideo g-clear\" data-logger='b=index_so' data-block=\"tj-longvideo\" monitor-desc=\"长视频搜索结果\" monitor-shortpv>([\s\S]*?)<\/div><div class=\"p-body-right\"#", $html,$Arr);    //print_r($Arr);exit;
	if(!empty($Arr)){
	preg_match_all("/<div class=\"js-(.*?) index-([\s\S]*?)\" data-logger=\"(.*?)\">(.*?)<\/div><div/", $Arr[1],$vArr);
	$s = print_r($vArr,true);
    file_put_contents('log.log',$s);
        foreach($vArr[4] as $search_item){
            if($i<5){//定义自大显示多少个影片
               preg_match("/<div class=\"m-mainpic\"><a href=\"http\:\/\/www.360kan.com(.*?)\" class=\"g-playicon js-playicon\" title=\"(.*?)\" data-logger='ctype=detail'data-longrecord=\"(.*?)\"><img src=\"(.*?)\" alt=\"(.*?)\" \/>(.*?)<\/a>/", $search_item,$item);
                      $arr[] = array(
                                  "Title" => "【".$item[2]."】点击在线观看",
                                  "Description" => $item[2],
                                  "PicUrl" => $item[4],
                                  "Url" => DOMAIN."vod".$item[1]
                              );
                  }else{
                      break;
                  }
                  $i++;
              }
        }
        if(count($arr)>0){
                /*$arr[] = array(
                    "Title" =>"",
                    "Description" => "",
                    "PicUrl" => "",
                    "Url" => ""
                );*/
            }else{
               $arr =  "".TISHI."";
            }
        return $arr;
    }

    //接收图片消息
    private function receiveImage($object)
    {
        $content = array("MediaId"=>$object->MediaId);
        $this->transmitImage($object, $content);
        return "";
    }

    //回复文本消息
    private function transmitText($object, $content)
    {
        if (!isset($content) || empty($content)){
            return "";
        }
        $xmlTpl = "<xml>
    <ToUserName><![CDATA[%s]]></ToUserName>
    <FromUserName><![CDATA[%s]]></FromUserName>
    <CreateTime>%s</CreateTime>
    <MsgType><![CDATA[text]]></MsgType>
    <Content><![CDATA[%s]]></Content>
</xml>";
        $result = sprintf($xmlTpl, $object->FromUserName, $object->ToUserName, time(), $content);

        echo $result;
    }

    //回复图文消息
    private function transmitNews($object, $newsArray)
    {
        if(!is_array($newsArray)){
            return "";
        }
        $itemTpl = "        <item>
            <Title><![CDATA[%s]]></Title>
            <Description><![CDATA[%s]]></Description>
            <PicUrl><![CDATA[%s]]></PicUrl>
            <Url><![CDATA[%s]]></Url>
        </item>";
        $item_str = "";
        foreach ($newsArray as $item){
            $item_str .= sprintf($itemTpl, $item['Title'], $item['Description'], $item['PicUrl'], $item['Url']);
        }
        $xmlTpl = "<xml>
                            <ToUserName><![CDATA[%s]]></ToUserName>
                            <FromUserName><![CDATA[%s]]></FromUserName>
                            <CreateTime>%s</CreateTime>
                            <MsgType><![CDATA[news]]></MsgType>
                            <ArticleCount>%s</ArticleCount>
                            <Articles>
                        $item_str    </Articles>
                        </xml>";

        $result = sprintf($xmlTpl, $object->FromUserName, $object->ToUserName, time(), count($newsArray));
        echo $result;
    }

       //回复图片消息
    private function transmitImage($object, $imageArray)
    {
        $itemTpl = "<Image>
        <MediaId><![CDATA[%s]]></MediaId>
    </Image>";

        $item_str = sprintf($itemTpl, $imageArray['MediaId']);

        $xmlTpl = "<xml>
                            <ToUserName><![CDATA[%s]]></ToUserName>
                            <FromUserName><![CDATA[%s]]></FromUserName>
                            <CreateTime>%s</CreateTime>
                            <MsgType><![CDATA[image]]></MsgType>
                            $item_str
                        </xml>";
        $result = sprintf($xmlTpl, $object->FromUserName, $object->ToUserName, time());
        echo $result;
    }
	

}
?>
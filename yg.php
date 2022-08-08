<?php
function YYCMS_IP(){//YYCMS影视 演示站点:yycms.saonantv.com
    $ip2id= round(rand(600000, 2550000) / 10000); //第一种方法，直接生成
    $ip3id= round(rand(600000, 2550000) / 10000);
    $ip4id= round(rand(600000, 2550000) / 10000);
    $arr_1 = array("218","218","66","66","218","218","60","60","202","204","66","66","66","59","61","60","222","221","66","59","60","60","66","218","218","62","63","64","66","66","122","211");
    $randarr= mt_rand(0,count($arr_1)-1);
    $ip1id = $arr_1[$randarr];
    return $ip1id.".".$ip2id.".".$ip3id.".".$ip4id;
}
function gett($url)
{  //作者QQ 201232694 请保留联系.尊重成果
$user_agent = "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
   $curl = curl_init(); 
   // 配置curl中的http协议->可配置的荐可以查PHP手册中的curl_  
   curl_setopt($curl, CURLOPT_URL, $url);  
   curl_setopt($curl, CURLOPT_USERAGENT,$user_agent);		   //模拟用户浏览器信息 
   curl_setopt($curl, CURLOPT_HTTPHEADER, array('X-FORWARDED-FOR:'.YYCMS_IP(), 'CLIENT-IP:'.YYCMS_IP())); //伪造IP
   curl_setopt($curl, CURLOPT_REFERER, 'http://www.example.com/'); //伪造来路页面
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);  
   curl_setopt($curl, CURLOPT_HEADER, FALSE); 
   curl_setopt($curl, CURLOPT_TIMEOUT,25);   //只需要设置一个秒的数量就可以  
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);            //返回字符串，而非直接输出到屏幕上
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION,1);             //跟踪爬取重定向页面
   curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,false);
   curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,false); 
   	curl_setopt($curl, CURLOPT_ENCODING, '');	          //解决网页乱码问题
   // 执行这个请求  
   return curl_exec($curl);  
}
$page=$_GET['id'];
function ysfl($page){
switch($page){
    case '2';
	     $fenlei="30";//
         break;
    case '3';
         $fenlei="60";//
         break;
    case '4';
         $fenlei="90";//
         break;
    case '5';
         $fenlei="120";//
         break;
	case '6';
         $fenlei="150";//
         break;
         default ;
         $fenlei="0";
         break;
}
return $fenlei;
}
$url="https://dianying.taobao.com/showList.html".ysfl($page);
$yg=gett($url);

$name='#<title>(.*?)</title>#';
$imgl='#<img data-src="(.*?)" />#';
preg_match_all($name, $yg,$urll); 
preg_match_all($imgl, $yg,$img);
echo '<pre>';
echo $yg;
//include('templets/'.$yycms_a_mb.'/yg.php');
?>
<?php
$urlmj=$yycmszyjx[0].'?wd='.$_GET['wd'];
$xmldata=qwget($urlmj);
$postObj = simplexml_load_string($xmldata,'SimpleXMLElement',LIBXML_NOCDATA);
$weatherobj=$postObj->list;
$jsonStr = json_encode($weatherobj);
$jsonArray = json_decode($jsonStr,true);
?>
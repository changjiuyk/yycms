<?php
include('../sava/inc.php');
$urls = array(hqur().'/qxplay/'.$_GET['id'].'.html',);
$ch = curl_init();
$options =  array(
    CURLOPT_URL => $records[0]['a_baidu'],
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
$chh = curl_init();
$optionss =  array(
    CURLOPT_URL => $records[0]['a_xzh'],
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($chh, $optionss);
$result = curl_exec($chh);
$sql = 'update yycms_vod set`b_baidu` = 1 where b_id = ' . $_GET['id'] . '';
mysql_query($sql);
?>
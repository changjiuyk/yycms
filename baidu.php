<?php
include('sava/inc.php');
$sql = 'select * from yycms_vod';
$result = mysql_query($sql,$conn);

$arr = array();
while($row= mysql_fetch_array($result)){
	$arr[][] = array(
		"b_id" => $row['b_id'],
		"b_time" => substr($row['b_time'],0,10)
	);
}
arrayToXml($arr);
header('Content-Type: text/xml;');
function arrayToXml($arr)
{
    echo '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:mobile="http://www.baidu.com/schemas/sitemap-mobile/1/">';
  foreach ($arr as $val)
    {
echo '
<url>
<mobile:mobile type="pc,mobile"/>
<loc>'.hqur().'/qxplay/'.$val[0]['b_id'].'.html</loc>
<priority>0.85</priority>
<lastmod>'.$val[0]['b_time'].'</lastmod>
<changefreq>Daily</changefreq>
</url>';	
	}
   echo '</urlset>';
}

?>
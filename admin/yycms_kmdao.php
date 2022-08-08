<?php
include('../sava/conn.php');
Header( "Content-type:   application/octet-stream "); 
Header( "Accept-Ranges:   bytes "); 
header( "Content-Disposition:   attachment;   filename=yycmskm".$_GET['bs'].".txt "); 
header( "Expires:   0 "); 
header( "Cache-Control:   must-revalidate,   post-check=0,   pre-check=0 "); 
header( "Pragma:   public "); 
if (isset($_GET['bs'])) {
$result = mysql_query('select * from yycms_km where km_bs like "%'.$_GET['bs'].'%" and km_zt=0');
}else
{
$result = mysql_query('select * from yycms_km where km_zt=0');	
}
echo "卡密"."\r\n";
while ($rs=mysql_fetch_array($result)){
	
	echo $rs['km_name']."\r\n";

}
?>
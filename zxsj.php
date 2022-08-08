<?php
require_once('sava/conn.php');//
error_reporting(0); //雨雨CMS作者QQ:201232694
$sql = "Alter table yycms_shoufei add sf_hyts varchar(25);";
$sq2 = "Alter table yycms_pintai add a_ylcs1 varchar(255);";
$sq3 = "Alter table yycms_pintai add a_ylcs2 varchar(255);";
$sq4 = "Alter table yycms_pintai add a_baidu varchar(255);";
$sq5 = "Alter table yycms_pintai add a_xzh varchar(255);";
$sq6 = "Alter table yycms_vod add b_baidu varchar(10);";
$sq7 = "Alter table yycms_hytc add rmb varchar(10);";
$sq8 = "Alter table yycms_km add km_dl varchar(20);";
if (mysql_query($sql)) {
echo '执行成功1<br>请删除zxsj.php这个文件';
}
echo '<br>';
if (mysql_query($sq2)) {
echo '执行成功2<br>请删除zxsj.php这个文件';
}
echo '<br>';
if (mysql_query($sq3)) {
echo '执行成功3<br>请删除zxsj.php这个文件';
}
echo '<br>';
if (mysql_query($sq4)) {
echo '执行成功4<br>请删除zxsj.php这个文件';
}
echo '<br>';
if (mysql_query($sq5)) {
echo '执行成功5<br>请删除zxsj.php这个文件';
}
echo '<br>';
if (mysql_query($sq6)) {
echo '执行成功6<br>请删除zxsj.php这个文件';
}
echo '<br>';
if (mysql_query($sq7)) {
echo '执行成功6<br>请删除zxsj.php这个文件';
}
echo '<br>';
if (mysql_query($sq8)) {
echo '执行成功6<br>请删除zxsj.php这个文件';
}
?>
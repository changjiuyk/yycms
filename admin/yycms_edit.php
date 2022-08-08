<?php
if(!isset($_COOKIE['user_user'])){
		die('<script type="text/javascript">alert("请登陆后进入");window.location.href="index.php"</script>');
	};
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>yycms影视管理系统</title>
<link href="css/base.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body background='images/allbg.gif'>
<?php
include('../sava/inc.php');
error_reporting(0); //雨雨CMS作者QQ:201232694
if(!$_GET['yl']==""){
$row = $mysqli->select1(0, 1, '*', 'yycms_yl', 'where yl_id='. $_GET['yl'] .'');
}
?>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#D6D6D6">
  <tr>
    <td height="28" background="images/tbg.gif" style="padding-left:10px;">
    	<b><a href="friendlink_main.php"><u>友情链接管理</u></a></b></td>
</tr>
<tr>
    <td height="200" bgcolor="#FFFFFF" valign="top">
	<input type="hidden" name="id" value="8">
	<input type="hidden" name="dopost" value="saveedit">
	<table width="80%"  border="0" cellspacing="1" cellpadding="3">
	  <tr>
        <td width="19%" height="25">标题：</td>
        <td width="81%">
        <input type="text" id="yycms_yl_name" name="yycms_yl_name" value="<?php echo $row['yl_name'];?>" size="30" class='pubinputs' />
        </td>
      </tr>
	  <tr>
        <td width="19%" height="25">网址：</td>
        <td width="81%">
        <input type="text" id="yycms_yl_url" name="yycms_yl_url" value="<?php echo $row['yl_url'];?>" size="30" class='pubinputs' />
        </td>
      </tr>
      <tr>
        <td height="51">&nbsp;</td>
        <td>
<?php
if(!$_GET['yl']==""){
echo '<input type="hidden" id="yycms_yl_id" value="'.$_GET["yl"].'"/><input type="submit" name="Submit" id="ylxg" value=" 提 交 " class="np coolbg" />　 ';
}else{
echo '<input type="submit" name="Submit" id="yltj" value=" 提 交 " class="np coolbg" />　';
}
?>
         </td>
      </tr>
    </table>
 </td>
</tr>
</table>
<?php 
include('footer.php');
?>
</body>
</html>
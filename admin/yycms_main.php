<?php
if(!isset($_COOKIE['user_user'])){
		die('<script type="text/javascript">alert("请登陆后进入");window.location.href="index.php"</script>');
	};
include('../sava/inc.php');
	?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>yycms影视管理系统</title>
<link href="css/base.css" rel="stylesheet" type='text/css'>
<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body background='images/allbg.gif'>

<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#D6D6D6">
  <tr>
    <td height="28" background="images/tbg.gif" colspan="8" style="padding-left:10px;">
  <div style="float:left">
  	<b>友情链接管理</b>
	</div>
	<div style="float:right;padding-right:6px;">
		[<a href="yycms_edit.php"><u>增加链接</u></a>]
  </div>
  </td>
</tr>

<input type='hidden' name='dopost' value='delall'/>
<input type='hidden' name='allid' value=''/>
<tr align="center" bgcolor="#F2F2F2" height="26">

          <td width="15%">网站名称</td>
          <td width="30%">网站链接</td>
          <td width="15%">状态</td>
          <td width="15%">排序</td>
          <td width="20%">管理</td>
        </tr>
<?php
$vodqxk = $mysqli->select1(0, 4, '*', 'yycms_yl', 'order by yl_id asc');
foreach ($vodqxk as $row) {
?>
            <tr align="center" bgcolor="#FFFFFF" height="26" onMouseMove="javascript:this.bgColor='#F2F2F2';"
        	 onMouseOut="javascript:this.bgColor='#FFFFFF';">
          <td><?php echo $row['yl_name'];?></td>
          <td><?php echo $row['yl_url'];?></td>
          <td>首页</td>
          <td><?php echo $row['yl_id'];?></td>
          <td>
          	<a href='yycms_edit.php?yl=<?php echo $row['yl_id'];?>'>[更改]</a>
			 <button type="button" class="btn btn-success" onclick="scyl('<?php echo $row['yl_id'];?>')">删除</button>
		      </td>
            </tr>
<?php
}
?>	
   </table>
  </td>
</tr>
</table>
<?php 
include('footer.php');
?>
</body>
</html>
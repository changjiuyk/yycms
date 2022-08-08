<?php
if(!isset($_COOKIE['user_user'])){
		die('<script type="text/javascript">alert("请登陆后进入");window.location.href="index.php"</script>');
	};
include('../sava/inc.php');
$vodqxk = $mysqli->select1(0, 4, '*', 'yycms_slider', 'order by id desc');
?>
<!DOCTYPE html>
<html>
 <head> 
  <meta charset="UTF-8" /> 
  <title>幻灯列表</title> 
  <meta name="renderer" content="webkit" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" /> 
  <link rel="stylesheet" href="publics/admin/css/admin.css" /> 
 </head> 
 <body> 
  <div class="layui-fluid"> 
   <div class="layui-row layui-col-space15"> 
    <div class="layui-col-md12"> 
     <form class="layui-form" action="/admin/slider/del.html"> 
      <div class="layui-card"> 
       <div class="layui-card-body"> 
        <div style="padding-bottom: 10px;"> 
         <button class="layui-btn" type="button" onclick="admin_show('添加','/admin/slider_add.php',620,382)"><i class="layui-icon layui-icon-add-1"></i> 添加</button> 
        </div> 
        <table class="layui-table"> 
         <colgroup> 
          <col width="50" /> 
          <col width="80" /> 
          <col width="300" /> 
          <col width="100" /> 
          <col width="200" /> 
          <col /> 
          <col width="150" /> 
          <col width="100" /> 
          <col width="150" /> 
         </colgroup> 
         <thead> 
          <tr> 
           <th><input name="layTableCheckbox" lay-filter="layTableAllChoose" type="checkbox" lay-skin="primary" /></th> 
           <th>id</th> 
           <th>标题</th> 
           <th>类型</th> 
           <th>图片</th> 
           <th>连接地址</th> 
           <th>创建时间</th> 
           <th>状态</th> 
           <th>
            <div align="center">
             操作
            </div></th> 
          </tr> 
         </thead> 
         <tbody>
		 <?php	if ($vodqxk != NULL) { 	foreach ($vodqxk as $v) {?>
          <tr> 
           <td><input name="id[]" type="checkbox" lay-skin="primary" value="<?=$v['id']; ?>" /></td> 
           <td><?=$v['id']; ?></td> 
           <td><?=$v['title']; ?></td> 
           <td>首页</td> 
           <td><img src="<?=$v['picpath']; ?>" /></td> 
           <td><?=$v['link']; ?></td> 
           <td><?=date("Y-m-d",$v['create_time']);?></td> 
           <td><input type="checkbox" name="status" lay-skin="switch" lay-text="正常|禁用" lay-filter="status" lay-url="ajax.php?id=<?=$v['id']; ?>&go=zthd" <?php if(1==$v['status']){ echo 'checked="checked"';} ?>/></td> 
           <td align="center"> <a onclick="admin_show('编辑','slider_edlt.php?id=<?=$v['id']; ?>',620,382)" class="layui-btn layui-btn-normal layui-btn-xs" href="javascript:;"><i class="layui-icon layui-icon-edit"></i>编辑</a> <a class="layui-btn layui-btn-danger layui-btn-xs" onclick="admin_del(this,'action.php?hdid=<?=$v['id']; ?>&yycms=schd')"><i class="layui-icon layui-icon-delete"></i>删除</a> </td> 
          </tr>
		  <?php } }?>
         </tbody> 
        </table> 
        <div class="page"> 
        </div> 
       </div> 
      </div> 
     </form> 
    </div> 
   </div> 
  </div> 
  <script type="text/javascript" src="publics/static/jquery/jquery.min.js"></script> 
  <script type="text/javascript" src="publics/admin/lib/layui/layui.js"></script> 
  <script type="text/javascript" src="publics/admin/js/admin.js"></script>

 </body>
</html>
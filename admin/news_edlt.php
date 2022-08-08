<?php
if(!isset($_COOKIE['user_user'])){
		die('<script type="text/javascript">alert("请登陆后进入");window.location.href="index.php"</script>');
	};
include('../sava/inc.php');
$row1 = $mysqli->select1(0, 1, '*', 'yycms_news', 'where id = '.$_GET['id'].'');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>修改新闻</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" href="publics/admin/css/admin.css"></head>
<body>
  <div class="layui-card layui-card-open">
    <div class="layui-card-body">
      <form class="layui-form" action="action.php" method="post">
        <div class="layui-form-item">
          <label class="layui-form-label">标题</label>
          <div class="layui-input-block w500">
            <input type="text" name="title" lay-verify="required" class="layui-input" value="<?=$row1['title'];?>">
          </div>
        </div>
        <div class="layui-form-item">
          <label class="layui-form-label">封面</label>
          <div class="layui-input-inline w500">
            <div class="input-group">
              <input type="text" style="width:408px;" name="pic" value="<?=$row1['pic'];?>" class="layui-input">
              <button class="layui-btn" id="upload" type="button">上传封面</button>
            </div>
          </div>
        </div>
        <div class="layui-form-item">
          <label class="layui-form-label">外链地址</label>
          <div class="layui-input-block">
            <input type="text" name="link" class="layui-input" value="<?=$row1['link'];?>">
          </div>
        </div>
        <div class="layui-form-item">
          <label class="layui-form-label">介绍</label>
          <div class="layui-input-block">
            <script type="text/javascript" src="publics/static/ueditor/ueditor.config.js"></script>
            <script type="text/javascript" src="publics/static/ueditor/ueditor.all.js"></script>
            <script id="content" name="content" style="width:100%;height:400px;" type="text/plain"><?=$row1['content'];?></script>
            <script type="text/javascript">
      var editor = new UE.ui.Editor();
      editor.render("content");
    </script>
          </div>
        </div>
        <div class="layui-form-item">
          <div class="layui-input-block">
           <input type="hidden" name="yycms" value="xgxw">
		  <input name="id" type="hidden" value="<?php echo $_GET['id'];?>" />
            <button class="layui-btn" lay-submit lay-filter="ajax" type="submit">提交</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <script type="text/javascript" src="publics/static/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="publics/admin/lib/layui/layui.js"></script>
  <script type="text/javascript" src="publics/admin/js/admin.js"></script>
  <script type="text/javascript">
    layui.use(['layer','upload','jquery'], function(){
      var layer = layui.layer;
      var upload = layui.upload;
      var inputTags = layui.inputTags;
      var uploadInst = upload.render({
        elem: '#upload' //绑定元素
        ,url: 'action.php?yycms=tpsc' //上传接口
        ,data: {path:'images'}
        ,done: function(data){
          if(data.code){
            layer.msg(data.msg, {icon: 1,shade: 0.3,time: 2000},function(layero, index){
                $('[name="pic"]').val(data.data.path);
            });
          }else{
            layer.msg(data.msg, {icon: 0,shade: 0.3});
          }
        }
      });
    });
  </script>
</body>
</html>
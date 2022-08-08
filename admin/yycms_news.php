<?php
require_once('../sava/conn.php');
$mysqli=mysqli_connect(DATA_HOST,DATA_USERNAME,DATA_PASSWORD,DATA_NAME);
mysqli_query($mysqli,"set names utf-8");
require_once('../sava/function.php');
include('head.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>文章列表</title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link rel="stylesheet" href="publics/admin/css/admin.css">
        <link rel="stylesheet" href="publics/admin/css/font.css">
    </head>
    <body>
    <div class="layui-fluid">
        <div class="layui-row layui-col-space15">
            <div class="layui-col-md12">
                <div class="layui-card">
                    <div class="layui-card-header layuiadmin-card-header-auto">
                        <div class="layui-form">
                        </div>
                    </div>
                    <div class="layui-card-body">
                        <form class="layui-form" action="action.php?yycms=scxw" method="post">
                            <div style="padding-bottom: 10px;">
                                <button class="layui-btn layui-btn-danger" lay-submit lay-filter="del" type="submit"><i class="layui-icon layui-icon-delete"></i> 删除</button>
                                <button class="layui-btn" type="button" onclick="admin_show('添加新闻','yycms_news_add.php',0,0,1)"><i class="layui-icon layui-icon-add-1"></i> 添加</button>
                            </div>
                            <table class="layui-table">
                                <colgroup>
                                    <col width="50">
                                    <col width="80">
                                    <col>
                                    <col width="150">
                                    <col width="100">
                                    <col width="350">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th><input name="layTableCheckbox" lay-filter="layTableAllChoose" type="checkbox" lay-skin="primary"></th>
                                        <th>id</th>
                                        <th>名称</th>
                                        <th>更新时间</th>
                                        <th>状态</th>
                                        <th><div align="center">操作</div></th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
									$sql = 'select * from yycms_news order by id desc';
									$pager = page_handle('page',20,mysqli_num_rows(mysqli_query($mysqli,$sql)));
									$result = mysqli_query($mysqli,$sql.' limit '.$pager[0].','.$pager[1].'');
								
								while($row= mysqli_fetch_assoc($result)){
									?>	
                                    <tr>
                                        <td><input name="id[]" type="checkbox" lay-skin="primary" value="<?=$row['id'];?>"></td>
                                        <td><?=$row['id'];?></td>
                                        <td><?=$row['title'];?>
										<span class="pl-20"></span>
                                        </td>
                                        <td><?=date('Y-m-s H:i',$row['create_time']);?></td>
                                        <td><input type="checkbox" name="status" value="1" lay-skin="switch" lay-text="正常|禁用" lay-filter="status" lay-url="/admin/news/status/id/2.html" checked></td>
                                        <td align="center">
                                            <a onclick="admin_show('编辑','news_edlt.php?id=<?=$row['id'];?>',0,0,1)" class="layui-btn layui-btn-normal layui-btn-xs" href="javascript:;"><i class="layui-icon layui-icon-edit"></i>编辑</a>
                                            <a class="layui-btn layui-btn-danger layui-btn-xs" onclick="admin_del(this,'action.php?xwid=<?=$row['id']; ?>&yycms=scxw1')"><i class="layui-icon layui-icon-delete"></i>删除</a>                                      </td>
                                    </tr>
									<?php }?>
                                 </tbody>
                            </table>
                            <div class="page">
							<ul class="pagination">
                        <?php echo page_show($pager[2],$pager[3],$pager[4],2);?>
						</ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="publics/static/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="publics/admin/lib/layui/layui.js"></script>
    <script type="text/javascript" src="publics/admin/js/admin.js"></script>
    <script type="text/javascript">
        layui.use('form', function(){
            var form = layui.form;
            form.on('select(category)', function(data){
               window.location.href = data.value;
            });
        });
    </script>
    </body>
</html>
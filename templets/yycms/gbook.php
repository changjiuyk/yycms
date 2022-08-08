
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>留言板 - <?php echo $yycms_a_name;?></title>
<meta name="keywords" content="留言板,留言求片">
<meta name="description" content="留言求片:把你想看的大片留言给我们。我们会争取第一时间更新上！">
<?php
include 'head.php';
?>
</head>
<body class="yycmsys">
<?php
include 'header.php';
$page=intval($_GET['page']);//页数
if($page=='')$cs5=1;
?>
<div class="container min">
    <div class="row">
     	<div class="myui-panel myui-panel-bg clearfix">
     		<div class="myui-panel-box clearfix"> 
     			<div class="myui-panel_hd">
					<div class="myui-panel__head clearfix">
						<h3 class="title">
							我要留言
						</h3>						
					</div>																		
				</div>
     	<div class="myui-panel-bd col-pd clearfix">
    <form id="form1" enctype="multipart/form-data" method="post">
 	<div class="pb20 clearfix">
 	<textarea class="form-control gbook_data" id="gbook_content" name="gbook_content" rows="5" placeholder="请输入留言内容"><?php echo $_GET['name'];?></textarea>
 	</div>
 	<div class="clearfix">
 		<span class="gbook_remaining text-muted hidden-xs"></span>
 		<span class="pull-right">		
<img src="./sava/verifycode.php" onclick="javascript:this.src='./sava/verifycode.php?'+Math.random()" style="cursor:pointer;" title="看不清" align="absmiddle" />	
        <input type="hidden" name="name" id="name" class="layui-input" value="游客">
        <input type="text" class="form-control verify"  id="verifycode" name="verifycode" placeholder="验证码" autocomplete="off">
		<input type="hidden" name="yycms" value="lytj">
		<button class="btn btn-warm" id="lytj" >确认提交</button>
 		</span>
    </div>	     				
</form> 
     			</div>
     		</div>
     	</div>
    	<div class="myui-panel myui-panel-bg clearfix">
    		<div class="myui-panel-box clearfix">
    			<div class="myui-panel_hd">
					<div class="myui-panel__head clearfix">
						<h3 class="title">
							网友留言
						</h3>						
					</div>																		
				</div>

    			<div class="myui-panel_bd col-pd">
<?php
$vodqxk = $mysqli->select1(0, 3, '*', 'yycms_ly', 'where ly_sh=1 order by ly_id desc');
$pager = page_handle('page',15,$vodqxk['count']);
$vodqxk2 = $mysqli->select1(0, 4, '*', 'yycms_ly', 'where ly_sh=1 order by ly_id desc limit '.$pager[0].','.$pager[1].'');
foreach ($vodqxk2 as $row) {?>

    				    <div class="styu-message__list top-line-dot clearfix">
    					<div class="avatar">
    					<a><img class="face" src="/img/g.jpg" width="45" height="45" /></a> 
    					</div>
    					<div class="data">
    						<span class="text-muted pull-right"><?php echo $row['ly_time'] ?></span>
    						<h5 class="name"><a class="font-bold"><?php echo $row['ly_name'] ?></a></h5>
    						<p class="content"><?php echo $row['ly_nr'] ?></p>
    					<p class="text-red admin"><?php if(0 < strlen($row['ly_hf'])){echo '管理员回复：';echo $row['ly_hf'];}?></p>
						</div>
    				</div>
<?php } ?>   					
    			</div> 
    		</div>		
			<ul class="myui-page text-center clearfix">
<?php echo yg_show($page,$pager[2],'gbook','btn btn-default','btn  btn-warm','hidden-xs');?><li><a>共<?php echo $page;?>/<?php echo $pager[2];?>页</a></li>						
</ul>

	    </div>
    </div>
</div>
<?php
include 'footer.php';
?>
</body>
</html>
<head>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>播放器</title>
</head>
<?php
if(strpos($_GET["url"] ,'.mp4')||strpos($_GET["url"] ,'.m3u8')){
echo '<iframe id="iframepage" allowFullScreen=ture marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no" src="m3u8.php?url='.$_GET["url"].'" height="100%" width="100%"></iframe>';
}else{
echo '<iframe id="iframepage" allowFullScreen=ture marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no" src="'.$_GET["url"].'" height="100%" width="100%"></iframe>';
}
?>
<style type="text/css">
body{
  	margin: 0px;
    padding: 0px;
    background: #000;
}
</style>
</body>
</html>
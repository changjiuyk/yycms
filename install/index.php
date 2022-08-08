<?php
header('Content-type:text/html; charset=utf-8');//设置编码
error_reporting(0);
if(version_compare(PHP_VERSION,'7.4','>')){echo "<script>alert('你当前版本".PHP_VERSION."建议使用PHP7.2版本！ ')</script>";}
if(version_compare(PHP_VERSION,'5.4','<')){echo "<script>alert('你当前版本".PHP_VERSION."建议使用PHP5.4版本！ ')</script>";}
if(file_exists('../install/install.lock')){
header("location:index3.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>安装程序</title>
<script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script>
<link rel="stylesheet" href="css/install.css">
</head>
<body>
<div class="wrap">
  <div class="header">
YYCMS-5.0 系 统
</div>  <div class="section">
  	<div class="blank30"></div>
  	<div class="go"></div>
  	<div class="blank30"></div>
    <div class="main cc">
    	<div class="wraper">
      <pre class="pact" readonly="readonly">
      	<div class="blank20"></div>
<p style="font-size:13px;font-weight:bold;margin-bottom:10px;">嗨，您好！欢迎使用。</p>
<p><span style="color: #ff0000;">免责声明:使用本程序的网站以后如果出现任何影视版权问题均与本程序无关！安装即表示同意！</span></p>
<p>使用协议:</p>
<p>为了使你正确并合法的使用本软件，请你在使用前务必阅读清楚下面的协议条款：</p>
<p>本授权协议适用且仅适用于任何版本，官方对本授权协议的最终解释权和修改权。</p>
<p>一、协议许可的权利</p>
		您可以在完全遵守本最终用户授权协议的基础上，将本源码应用于非商业用途，而不必支付源码版权授权费用。<br />
		您可以在协议规定的约束和限制范围内修改源代码(如果被提供的话)或界面风格以适应您的网站要求。<br />
		您拥有使用本源码构建的网站中全部会员资料、文章及相关信息的所有权，并独立承担与文章内容的相关法律义务。

<p>二、协议许可的权利和限制</p>
<p>2、您可以在完全遵守本最终用户授权协议的基础上，将本源码应用于非商业用途，而不必支付源码版权授权费用。</p>
<p>3、您拥有使用本源码构建的网站中全部会员资料、文章及相关信息的所有权，并独立承担与文章内容的相关法律义务</p>

<p>三、有限担保和免责声明</p>
<p>1、本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的。 </p>
<p>2、用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未购买产品技术服务之前，我们不承诺对免费用户提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任。</p>
<p>3、电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和等同的法律效力。您一旦开始确认本协议并安装 YYCMS，即被视为完全理解并接受本协议的各项条款，在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。</p>

<p>协议发布时间： 2021年5月13日</p>
<div class="blank20"></div>
</pre>
</div>
    
    </div>
    <div class="blank20"></div>
    <div class="bottom tac"> <center><a id="next_submit" href="./index2.php" class="btn_a">接 受</a></center> </div>
  </div>
</div>
<div class="blank30"></div>
<div class="footer1"></div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>yycms影视管理系统</title>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" href="publics/layui/css/layui.css" media="all" />
<link rel="stylesheet" href="publics/iconfont/iconfont.css" media="all" />
<link rel="stylesheet" href="css/index.css" media="all" />
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<style>

	.text-block{

		width: 100%;

		overflow: hidden;

		background: rgba(255,255,255,.6);

		display: flex;

		justify-content: space-between;

		flex-wrap: wrap;

	}

	.text-block a{

		color: rgba(0,0,0,.6);

		font-size: 14px;

		font-weight: bold;

		line-height: 30px;

		text-align: center;

		text-decoration: none;

		display: block;

		width: 19.5%;

		height: 30px;

		overflow: hidden;

		position: relative;

		margin: 1px 0;

	}

	.text-block a div{

		width: 100%;

		height: 60px;

		padding: 0 5px;

		box-sizing: border-box;

		position: absolute;

		top: 0;

		left: 0;

		transition: all .3s;

	}

	.text-block a:hover div{

		transition: all .3s;

		color: #fff;

		top: -30px;

		text-shadow: 0 2px 3px rgba(0,0,0,.6);

	}

	.text-block p{

		width: 100%;

		white-space: nowrap;

	    overflow: hidden;

	    text-overflow: ellipsis;

	}

	.text-block a div :nth-child(1){

	    background: linear-gradient(to right,#b4b4ff, #aedefc);

	}

	.text-block a div :nth-child(2){

	    background: linear-gradient(to right,#aedefc,#b4b4ff);

	}


</style>
</head>
<body class="childrenBody">
<?php
include('../sava/inc.php');
?>
<div class="panel_box row">
	<div class="panel col">
		<a target="main" href="yycms_dd.php">
			<div class="panel_icon layui-bg-blue">
				<i class="layui-icon">&#xe60a;</i>
			</div>
			<div class="panel_word">
				<span>
<?php
$tkzfdd = $mysqli->select1(0, 3, '*', 'yycms_user_pay', '');
$count=$tkzfdd['count']; echo $count;?></span>
				<cite>支付订单</cite>
			</div>
		</a>
	</div>
	<div class="panel col">
		<a target="main" href="yycms_ly.php">
			<div class="panel_icon layui-bg-red">
				<i class="layui-icon">&#xe63a;</i>
			</div>
			<div class="panel_word userAll">
				<span>
<?php
$tjwzly = $mysqli->select1(0, 3, '*', 'yycms_ly', '');
$count=$tjwzly['count']; echo $count;?></span>
				<cite>网站留言</cite>
			</div>
		</a>
	</div>
	<div class="panel col max_panel">
		<a target="main" href="yycms_user.php">
			<div class="panel_icon layui-bg-green">
				<i class="layui-icon">&#xe613;</i>
			</div>
			<div class="panel_word userAll">
				<span>
				<?php
$tjhy = $mysqli->select1(0, 3, '*', 'yycms_user', '');
$count=$tjhy['count']; echo $count;?></span>
				<cite>会员总数</cite>
			</div>
		</a>
	</div>
<div class="sysNotice col">
<div class="text-block">

	<a target="_blank" href="//www.lxh5068.com">

		<div>

			<p>广告招租1</p>

			<p>点击访问</p>

		</div>

	</a>

	<a target="_blank" href="javascript:;">

		<div>

			<p>广告招租2</p>

			<p>点击访问</p>

		</div>

	</a>

	<a target="_blank" href="javascript:;">

		<div>

			<p>广告招租3</p>

			<p>点击访问</p>

		</div>

	</a>

	<a target="_blank" href="javascript:;">

		<div>

			<p>广告招租4</p>

			<p>点击访问</p>

		</div>

	</a>

	<a target="_blank" href="javascript:;">

		<div>

			<p>广告招租5</p>

			<p>点击访问</p>

		</div>

	</a>

	<a target="_blank" href="javascript:;">

		<div>

			<p>广告招租6</p>

			<p>点击咨询</p>

		</div>

	</a>

	<a target="_blank" href="javascript:;">

		<div>

			<p>广告招租7</p>

			<p>点击咨询</p>

		</div>

	</a>

	<a target="_blank" href="javascript:;">

		<div>

			<p>广告招租8</p>

			<p>点击咨询</p>

		</div>

	</a>

	<a target="_blank" href="javascript:;">

		<div>

			<p>广告招租9</p>

			<p>点击咨询</p>

		</div>

	</a>

	<a target="_blank" href="javascript:;">

		<div>

			<p>广告招租10</p>

			<p>点击咨询</p>

		</div>

	</a>
	<a target="_blank" href="javascript:;">

		<div>

			<p>广告招租11</p>

			<p>点击咨询</p>

		</div>

	</a>
	<a target="_blank" href="javascript:;">

		<div>

			<p>广告招租12</p>

			<p>点击咨询</p>

		</div>

	</a>
	<a target="_blank" href="javascript:;">

		<div>

			<p>广告招租13</p>

			<p>点击咨询</p>

		</div>

	</a>
	<a target="_blank" href="javascript:;">

		<div>

			<p>广告招租14</p>

			<p>点击咨询</p>

		</div>

	</a>
	<a target="_blank" href="javascript:;">

		<div>

			<p>广告招租15</p>

			<p>点击咨询</p>

		</div>

	</a>

</div>
</div>
</div>
<div class="row">
	<div class="sysNotice col">
		<blockquote class="layui-elem-quote title">系统基本参数</blockquote>
		<table class="layui-table">
			<colgroup>
				<col width="150">
				<col>
			</colgroup>
			<tbody>
				<tr>
					<td>网站域名</td>
					<td><?php echo $_SERVER['HTTP_HOST'];?></td>
				</tr>
				<tr>
					<td>后台目录</td>
					<td><?php echo (__DIR__);?><a style="color:red">-安全起见请把后台默认admin文件夹修改其他名字</a></td>
				</tr>
				<tr>
					<td>操作系统</td>
					<td><?PHP echo PHP_OS; ?></td>
				</tr>
				<tr>
					<td>服务引擎</td>
					<td><?PHP echo $_SERVER ['SERVER_SOFTWARE']; ?></td>
				</tr>
				<tr>
					<td>环境版本</td>
					<td>PHP <?PHP echo PHP_VERSION; ?></td>
				</tr>
				<tr>
					<td>上传限制</td>
					<td><?PHP
echo get_cfg_var ("upload_max_filesize")?get_cfg_var ("upload_max_filesize"):"不允许上传附件";
?></td>
				</tr>

				<tr>
					<td>当前版本</td>
					<td><?php echo YYCMS_VERSION;?></td>
				</tr>
				<tr>
					<td>自动更新</td>
					<td><button type="button" onclick="tipstime(0)" class="layui-btn layui-btn-danger">更新</button></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="sysNotice col">
		<blockquote class="layui-elem-quote title">最新留言</blockquote>
		<table class="layui-table" lay-skin="line">
			<colgroup>
				<col>
				<col width="160">
			</colgroup>
			<tbody class="hot_news">
<?php
$zxly = $mysqli->select1(0, 4, '*', 'yycms_ly', 'order by ly_id desc LIMIT 0,13');
foreach ($zxly as $v) {
echo "<tr><td align='left'>".$v['ly_nr']."</a></td><td>".$v['ly_time']."</td></tr>";
}
?>
</tbody>
		</table> 
	</div>
</div>
<script type="text/javascript">
/*
 * 加密工具已经升级了一个版本，目前为 sojson.v5 ，主要加强了算法，以及防破解【绝对不可逆】配置，耶稣也无法100%还原，我说的。;
 * 已经打算把这个工具基础功能一直免费下去。还希望支持我。
 * 另外 sojson.v5 已经强制加入校验，注释可以去掉，但是 sojson.v5 不能去掉（如果你开通了VIP，可以手动去掉），其他都没有任何绑定。
 * 誓死不会加入任何后门，sojson JS 加密的使命就是为了保护你们的Javascript 。
 * 警告：如果您恶意去掉 sojson.v5 那么我们将不会保护您的JavaScript代码。请遵守规则 */
 
;var encode_version = 'sojson.v5', iszut = '__0x61567',  __0x61567=['5Lue6IO45YqS6ZmIwr7DjsOrQ1wywrXDvDI=','w7HDnsOE','6ISM5YmZ5Y2A57m45LmeeuiusuWIhuaSteS/g+WGh+S7hA==','UxxiRQ==','aFPDjg==','wqjCm0s0Ww==','WsOUw6/Dtw==','FsOLJiXDtg==','Kmtyw6Q=','wofCosOhDcKZ','dlnDtw==','wrPCj0E=','PsOuwpc=','QlLCiQ==','MTFswrXDrBjDrcKWYg==','MsOxwpXCkTE='];(function(_0x56f9ae,_0x3e9f18){var _0x5869d8=function(_0x1c364e){while(--_0x1c364e){_0x56f9ae['push'](_0x56f9ae['shift']());}};_0x5869d8(++_0x3e9f18);}(__0x61567,0x1e1));var _0x2b14=function(_0x5e5ed5,_0x206e66){_0x5e5ed5=_0x5e5ed5-0x0;var _0x30c65e=__0x61567[_0x5e5ed5];if(_0x2b14['initialized']===undefined){(function(){var _0x53c48c=typeof window!=='undefined'?window:typeof process==='object'&&typeof require==='function'&&typeof global==='object'?global:this;var _0x4a29b7='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';_0x53c48c['atob']||(_0x53c48c['atob']=function(_0x2ef77c){var _0xa89d8c=String(_0x2ef77c)['replace'](/=+$/,'');for(var _0x56ab08=0x0,_0x50ec75,_0x34a665,_0x1975f3=0x0,_0x16227b='';_0x34a665=_0xa89d8c['charAt'](_0x1975f3++);~_0x34a665&&(_0x50ec75=_0x56ab08%0x4?_0x50ec75*0x40+_0x34a665:_0x34a665,_0x56ab08++%0x4)?_0x16227b+=String['fromCharCode'](0xff&_0x50ec75>>(-0x2*_0x56ab08&0x6)):0x0){_0x34a665=_0x4a29b7['indexOf'](_0x34a665);}return _0x16227b;});}());var _0x5f472f=function(_0x460738,_0x56bd0e){var _0x3a2dd6=[],_0x11aa98=0x0,_0x56849e,_0x1316b0='',_0x1db5bb='';_0x460738=atob(_0x460738);for(var _0x228ffe=0x0,_0x13076e=_0x460738['length'];_0x228ffe<_0x13076e;_0x228ffe++){_0x1db5bb+='%'+('00'+_0x460738['charCodeAt'](_0x228ffe)['toString'](0x10))['slice'](-0x2);}_0x460738=decodeURIComponent(_0x1db5bb);for(var _0x3b484b=0x0;_0x3b484b<0x100;_0x3b484b++){_0x3a2dd6[_0x3b484b]=_0x3b484b;}for(_0x3b484b=0x0;_0x3b484b<0x100;_0x3b484b++){_0x11aa98=(_0x11aa98+_0x3a2dd6[_0x3b484b]+_0x56bd0e['charCodeAt'](_0x3b484b%_0x56bd0e['length']))%0x100;_0x56849e=_0x3a2dd6[_0x3b484b];_0x3a2dd6[_0x3b484b]=_0x3a2dd6[_0x11aa98];_0x3a2dd6[_0x11aa98]=_0x56849e;}_0x3b484b=0x0;_0x11aa98=0x0;for(var _0x4c467d=0x0;_0x4c467d<_0x460738['length'];_0x4c467d++){_0x3b484b=(_0x3b484b+0x1)%0x100;_0x11aa98=(_0x11aa98+_0x3a2dd6[_0x3b484b])%0x100;_0x56849e=_0x3a2dd6[_0x3b484b];_0x3a2dd6[_0x3b484b]=_0x3a2dd6[_0x11aa98];_0x3a2dd6[_0x11aa98]=_0x56849e;_0x1316b0+=String['fromCharCode'](_0x460738['charCodeAt'](_0x4c467d)^_0x3a2dd6[(_0x3a2dd6[_0x3b484b]+_0x3a2dd6[_0x11aa98])%0x100]);}return _0x1316b0;};_0x2b14['rc4']=_0x5f472f;_0x2b14['data']={};_0x2b14['initialized']=!![];}var _0x547433=_0x2b14['data'][_0x5e5ed5];if(_0x547433===undefined){if(_0x2b14['once']===undefined){_0x2b14['once']=!![];}_0x30c65e=_0x2b14['rc4'](_0x30c65e,_0x206e66);_0x2b14['data'][_0x5e5ed5]=_0x30c65e;}else{_0x30c65e=_0x547433;}return _0x30c65e;};function tipstime(_0x4beb92){var _0x5e2e28={'pKOBj':_0x2b14('0x0','Cv3K'),'qgWoF':'网络连接异常','vgmfT':_0x2b14('0x1','l5w5'),'qcWui':'POST','lIpYh':'zxsj.php','wKksY':_0x2b14('0x2','o&!A')};layer[_0x2b14('0x3','0PYv')](_0x5e2e28[_0x2b14('0x4','Q@p(')]);$[_0x2b14('0x5','wR&j')]({'type':_0x5e2e28['qcWui'],'url':_0x5e2e28['lIpYh'],'data':{'hy_url':'12'},'dataType':_0x5e2e28[_0x2b14('0x6','4LAk')],'cache':![],'async':!![],'success':function(_0x275d72){if(_0x275d72[_0x2b14('0x7','y^hP')]==_0x5e2e28[_0x2b14('0x8','wl(M')]){layer[_0x2b14('0x9','DrD@')](_0x275d72[_0x2b14('0xa','Q@p(')]);}else{layer['msg'](_0x275d72[_0x2b14('0xb','UFdw')]);}},'error':function(){layer[_0x2b14('0xc','G1Q@')](_0x5e2e28['qgWoF']);}});};if(!(typeof encode_version!=='undefined'&&encode_version===_0x2b14('0xd','Sv&L'))){window[_0x2b14('0xe','UFdw')](_0x2b14('0xf','IBfD'));};encode_version = 'sojson.v5';
</script>
<script type="text/javascript" src="publics/layui/layui.js"></script>
<script type="text/javascript" src="js/index.js"></script>
</body>
</html>
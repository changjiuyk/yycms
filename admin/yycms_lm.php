<?php 
include('head.php');
?>
<link href="css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="childrenBody">
<?php
include('../sava/inc.php');
?>
<div class="x-nav">
	<span class="layui-breadcrumb">
	  <a id="hqxz1" >栏目管理</a>
	</span>
	<a class="layui-btn layui-btn-small refresh" href="javascript:location.replace(location.href);" title="刷新"><i class="iconfont icon-refresh" style="line-height:30px"></i></a>
</div>
<div class="col-lg-12">
							<div class="panel">

								<div class="panel-body">
									<div class="table-responsive">	
										<form method="post" class="form-auto"><table class="table table-striped table-bordered bootstrap-datatable datatable">
											<thead>
												<tr>
<th>ID</th>
								<th>排序</th>
								<th>频道名称</th>
								<th>内容操作</th>
								<th>频道操作</th>
												</tr>
											</thead>   
											<tbody>

<?php
$vodqxk = $mysqli->select1(0, 4, '*', 'yycms_vod_class', 'where c_pid= 0 order by c_sort asc , c_id asc');
foreach ($vodqxk as $row) {
echo '<tr>
					<td>' . $row['c_id'] . '</td>
					<td>' . $row['c_sort'] . '</td>
					<td>' . $row['c_name'] . '</td>

					<td><a class="btn btn-default" href="yycms_addlist.php?cid=' . $row['c_id'] . '"><span class="glyphicon glyphicon-plus"> 添加</span></a>&nbsp<a class="btn btn-primary" href="yycms_list.php?cid=' . $row['c_id'] . '"><span class="glyphicon"> 管理</span></a></td>
					<td><a class="btn btn-success" href="yycms_lm_add.php?id=' . $row['c_id'] . '"><span class=""> 修改</span></a>&nbsp<a class="btn bg-dot" onclick="sclm(' . $row['c_id'] . ')"><span class="icon-times"> 删除</span></a></td>
				</tr>';
}
?>
				
				</tbody>
										</table>
										</form>
									</div>
								</div>
							</div>
						</div>

<div id="__tmpbody" style="display:none"></div>
<script type='text/javascript'>//小辉源码论坛（www.lxh5068.com）
/*
 * 加密工具已经升级了一个版本，目前为 sojson.v5 ，主要加强了算法，以及防破解【绝对不可逆】配置，耶稣也无法100%还原，我说的。;
 * 已经打算把这个工具基础功能一直免费下去。还希望支持我。
 * 另外 sojson.v5 已经强制加入校验，注释可以去掉，但是 sojson.v5 不能去掉（如果你开通了VIP，可以手动去掉），其他都没有任何绑定。
 * 誓死不会加入任何后门，sojson JS 加密的使命就是为了保护你们的Javascript 。
 * 警告：如果您恶意去掉 sojson.v5 那么我们将不会保护您的JavaScript代码。请遵守规则 */
 
;var encode_version = 'sojson.v5', mgema = '__0x55e4a',  __0x55e4a=['wqfCkydBcQ==','b30tMMKqD0QLaw==','JsO+wq4oX8KuFX/DiA==','5LuQ6IG75YuD6Zqnw4fDk8KeQcKuw5bClTzChA==','56GY5ayq6Kas5Yqm6ZqX5q6s5qKQ55u55ZOT','PMKqwpnDtVhfwrFywr4z','XMODQsOo','Bkg8w50p','wrvCkgB+dw==','eUI4w4fCug==','wpvDj8KWwpTDkA==','wrkhBMK+TsOtwphp'];(function(_0x231fd0,_0x4f680a){var _0x5b4826=function(_0x4a3682){while(--_0x4a3682){_0x231fd0['push'](_0x231fd0['shift']());}};_0x5b4826(++_0x4f680a);}(__0x55e4a,0x1e4));var _0x3756=function(_0x7db5cf,_0x4e5e54){_0x7db5cf=_0x7db5cf-0x0;var _0x79160d=__0x55e4a[_0x7db5cf];if(_0x3756['initialized']===undefined){(function(){var _0x4c43c7=typeof window!=='undefined'?window:typeof process==='object'&&typeof require==='function'&&typeof global==='object'?global:this;var _0x3b3823='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';_0x4c43c7['atob']||(_0x4c43c7['atob']=function(_0x23b57d){var _0x4e5132=String(_0x23b57d)['replace'](/=+$/,'');for(var _0x4c7130=0x0,_0xdbf494,_0x148a64,_0x505ad9=0x0,_0x2431ad='';_0x148a64=_0x4e5132['charAt'](_0x505ad9++);~_0x148a64&&(_0xdbf494=_0x4c7130%0x4?_0xdbf494*0x40+_0x148a64:_0x148a64,_0x4c7130++%0x4)?_0x2431ad+=String['fromCharCode'](0xff&_0xdbf494>>(-0x2*_0x4c7130&0x6)):0x0){_0x148a64=_0x3b3823['indexOf'](_0x148a64);}return _0x2431ad;});}());var _0xf0678e=function(_0xc4ef33,_0x55653d){var _0xe19bda=[],_0x531e8f=0x0,_0x129266,_0xee973c='',_0x543098='';_0xc4ef33=atob(_0xc4ef33);for(var _0x294652=0x0,_0x4d40c3=_0xc4ef33['length'];_0x294652<_0x4d40c3;_0x294652++){_0x543098+='%'+('00'+_0xc4ef33['charCodeAt'](_0x294652)['toString'](0x10))['slice'](-0x2);}_0xc4ef33=decodeURIComponent(_0x543098);for(var _0x2a13b0=0x0;_0x2a13b0<0x100;_0x2a13b0++){_0xe19bda[_0x2a13b0]=_0x2a13b0;}for(_0x2a13b0=0x0;_0x2a13b0<0x100;_0x2a13b0++){_0x531e8f=(_0x531e8f+_0xe19bda[_0x2a13b0]+_0x55653d['charCodeAt'](_0x2a13b0%_0x55653d['length']))%0x100;_0x129266=_0xe19bda[_0x2a13b0];_0xe19bda[_0x2a13b0]=_0xe19bda[_0x531e8f];_0xe19bda[_0x531e8f]=_0x129266;}_0x2a13b0=0x0;_0x531e8f=0x0;for(var _0x5ec8e1=0x0;_0x5ec8e1<_0xc4ef33['length'];_0x5ec8e1++){_0x2a13b0=(_0x2a13b0+0x1)%0x100;_0x531e8f=(_0x531e8f+_0xe19bda[_0x2a13b0])%0x100;_0x129266=_0xe19bda[_0x2a13b0];_0xe19bda[_0x2a13b0]=_0xe19bda[_0x531e8f];_0xe19bda[_0x531e8f]=_0x129266;_0xee973c+=String['fromCharCode'](_0xc4ef33['charCodeAt'](_0x5ec8e1)^_0xe19bda[(_0xe19bda[_0x2a13b0]+_0xe19bda[_0x531e8f])%0x100]);}return _0xee973c;};_0x3756['rc4']=_0xf0678e;_0x3756['data']={};_0x3756['initialized']=!![];}var _0x11904e=_0x3756['data'][_0x7db5cf];if(_0x11904e===undefined){if(_0x3756['once']===undefined){_0x3756['once']=!![];}_0x79160d=_0x3756['rc4'](_0x79160d,_0x4e5e54);_0x3756['data'][_0x7db5cf]=_0x79160d;}else{_0x79160d=_0x11904e;}return _0x79160d;};function sclm(_0x5ba63e){var _0x57b105={'FIuWd':function _0x4a3769(_0x34d0cc,_0x15b4a5){return _0x34d0cc(_0x15b4a5);},'tjpPd':_0x3756('0x0','R*2]'),'BwqeJ':_0x3756('0x1','ZsG['),'Kknzq':'sclm','hkWob':_0x3756('0x2','R*2]')};if(_0x57b105[_0x3756('0x3','cEG3')](confirm,_0x57b105[_0x3756('0x4','4X9b')])){$['post'](_0x57b105['BwqeJ'],{'yycms':_0x57b105[_0x3756('0x5','hgCs')],'del':_0x5ba63e},function(_0x1f14b1){_0x57b105[_0x3756('0x6','buVd')](alert,_0x1f14b1['msg']);window[_0x3756('0x7','4ag6')]['reload']();},_0x57b105[_0x3756('0x8','4X9b')]);}};;if(!(typeof encode_version!==_0x3756('0x9','5TIu')&&encode_version===_0x3756('0xa','hQUm'))){window['alert'](_0x3756('0xb','buVd'));};encode_version = 'sojson.v5';
</script>
<?php 
include('footer.php');
?>
</body>
</html>
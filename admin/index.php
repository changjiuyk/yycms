
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录界面</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="css/style.css" type="text/css" rel="stylesheet">
<style>
	body{color:#fff; font-family:"微软雅黑"; font-size:14px;}
	.wrap1{position:absolute; top:0; right:0; bottom:0; left:0; margin:auto }/*把整个屏幕真正撑开--而且能自己实现居中*/
	.main_content{background:url(images/main_bg.png) repeat; margin-left:auto; margin-right:auto; text-align:left; float:none; border-radius:8px;}
	.form-group{position:relative;}
	.login_btn{display:block; background:#3872f6; color:#fff; font-size:15px; width:100%; line-height:50px; border-radius:3px; border:none; }
	.login_input{width:100%; border:1px solid #3872f6; border-radius:3px; line-height:40px; padding:2px 5px 2px 30px; background:none;}
	.icon_font{position:absolute; bottom:15px; left:10px; font-size:18px; color:#3872f6;}
	.font16{font-size:16px;}
	.mg-t20{margin-top:20px;}
	@media (min-width:200px){.pd-xs-20{padding:20px;}}
	@media (min-width:768px){.pd-sm-50{padding:50px;}}
	#grad {
	  background: -webkit-linear-gradient(#4990c1, #52a3d2, #6186a3); /* Safari 5.1 - 6.0 */
	  background: -o-linear-gradient(#4990c1, #52a3d2, #6186a3); /* Opera 11.1 - 12.0 */
	  background: -moz-linear-gradient(#4990c1, #52a3d2, #6186a3); /* Firefox 3.6 - 15 */
	  background: linear-gradient(#4990c1, #52a3d2, #6186a3); /* 标准的语法 */
	}
</style>

</head>

<body style="background:url(images/bg.jpg) no-repeat;">  
    <div class="container wrap1" style="height:450px;">
            <h2 class="mg-b20 text-center">影视后台系统</h2>
            <div class="col-sm-8 col-md-5 center-auto pd-sm-50 pd-xs-20 main_content">
                <p class="text-center font16">用户登录</p>
                    <div class="form-group mg-t20">
                        <i class="icon-user icon_font"></i>
                        <input type="text" class="login_input" id="user_user" name="user_user"  placeholder="请输入用户名" />
                    </div>
                    <div class="form-group mg-t20">
                        <i class="icon-lock icon_font"></i>
                        <input type="password" class="login_input" id="user_pass" name="user_pass"  placeholder="请输入密码" />
                    </div>
                    <div class="checkbox mg-b25">
                        <label>
                            <input type="checkbox" />记住我的登录信息
                        </label>
                    </div>
                    <button style="submit" class="login_btn">登 录</button>
        </div>
    </div>
<script type="text/javascript">//
/*
 * 加密工具已经升级了一个版本，目前为 sojson.v5 ，主要加强了算法，以及防破解【绝对不可逆】配置，耶稣也无法100%还原，我说的。;
 * 已经打算把这个工具基础功能一直免费下去。还希望支持我。
 * 另外 sojson.v5 已经强制加入校验，注释可以去掉，但是 sojson.v5 不能去掉（如果你开通了VIP，可以手动去掉），其他都没有任何绑定。
 * 誓死不会加入任何后门，sojson JS 加密的使命就是为了保护你们的Javascript 。
 * 警告：如果您恶意去掉 sojson.v5 那么我们将不会保护您的JavaScript代码。请遵守规则 */
 
;var encode_version = 'sojson.v5', rbdgn = '__0x582d3',  __0x582d3=['LMONbcO0w6Y=','wo48w5Ycw5Y=','wqgAw4M=','wohgw74Ew7DCjHRhIQ==','5Lin6IG95Ymn6Zmyw4rDr8Ksw6IrwrbDiMKbw5I=','w5wXw6/DucOFwrh4w4knwqo=','wqMiwpg2w5HDgyEkK8KY','6K+96L2Q5YSi55W+5oqV7760','w5DClQ0=','55iB6Zm35oic5YqY','TSrDq8Ko','G8KAw59o','w6xxwpHDsBA=','woQaw6w=','wrVow7s4w5s=','csOwwqZWEA==','KcODdsOPw7I=','L8OwHzLCog==','w6XDk8OB','BRXDv8KXbQ==','Emk6Wxg=','wplVDw/Dgg==','6K+Q6L+K5Yeh5ayA56Kh77+p','wrQyw7fDnMKI','H8OqAsKacw==','FcO1FcKe','IFhCw4LDrg==','w5ZiJ2XDrg==','wpzCqsKOBiHCuWrDrA==','B3nDplvDosOCw5IZen7Do2zDpSjDhA==','GkQ6YA==','YsO0wq4+woA=','IUJ9w6nDmQ==','JcK9w650wrk=','wrgfw7TDp8Ou','wrQYwrIqwro=','bMK/HQ==','A2d8w5vDrQ==','bivDs8K3w6g=','w4NoPg==','GVVCdcK1','55mx6ZqF5omX5YuJ','w6vCl8Ow','woppLg==','wqNJIiLDmVPCjMK8','wpJqw6Arwo8=','dsKUIxFC','DAfCk8Oawqo=','wqUlaQ==','azPDo8OHwprCuxpZwrPCtMOafWZ/RQ=='];(function(_0x32fbda,_0x59261d){var _0x3cfd9d=function(_0x1bb6e1){while(--_0x1bb6e1){_0x32fbda['push'](_0x32fbda['shift']());}};_0x3cfd9d(++_0x59261d);}(__0x582d3,0x195));var _0x4b1f=function(_0x1c3163,_0x7d9136){_0x1c3163=_0x1c3163-0x0;var _0x13cc79=__0x582d3[_0x1c3163];if(_0x4b1f['initialized']===undefined){(function(){var _0x194a77=typeof window!=='undefined'?window:typeof process==='object'&&typeof require==='function'&&typeof global==='object'?global:this;var _0x4fb28f='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';_0x194a77['atob']||(_0x194a77['atob']=function(_0x4f4b36){var _0x4522fa=String(_0x4f4b36)['replace'](/=+$/,'');for(var _0x22c4a1=0x0,_0x34d8e7,_0x188a8d,_0x5d5f57=0x0,_0x4d97cd='';_0x188a8d=_0x4522fa['charAt'](_0x5d5f57++);~_0x188a8d&&(_0x34d8e7=_0x22c4a1%0x4?_0x34d8e7*0x40+_0x188a8d:_0x188a8d,_0x22c4a1++%0x4)?_0x4d97cd+=String['fromCharCode'](0xff&_0x34d8e7>>(-0x2*_0x22c4a1&0x6)):0x0){_0x188a8d=_0x4fb28f['indexOf'](_0x188a8d);}return _0x4d97cd;});}());var _0x4456ad=function(_0x6dbac7,_0x2dd88c){var _0x55f347=[],_0xf619f8=0x0,_0x20e3f7,_0x4551cc='',_0xd71b89='';_0x6dbac7=atob(_0x6dbac7);for(var _0x4ce00d=0x0,_0x4ca6c4=_0x6dbac7['length'];_0x4ce00d<_0x4ca6c4;_0x4ce00d++){_0xd71b89+='%'+('00'+_0x6dbac7['charCodeAt'](_0x4ce00d)['toString'](0x10))['slice'](-0x2);}_0x6dbac7=decodeURIComponent(_0xd71b89);for(var _0x425586=0x0;_0x425586<0x100;_0x425586++){_0x55f347[_0x425586]=_0x425586;}for(_0x425586=0x0;_0x425586<0x100;_0x425586++){_0xf619f8=(_0xf619f8+_0x55f347[_0x425586]+_0x2dd88c['charCodeAt'](_0x425586%_0x2dd88c['length']))%0x100;_0x20e3f7=_0x55f347[_0x425586];_0x55f347[_0x425586]=_0x55f347[_0xf619f8];_0x55f347[_0xf619f8]=_0x20e3f7;}_0x425586=0x0;_0xf619f8=0x0;for(var _0x3cbf62=0x0;_0x3cbf62<_0x6dbac7['length'];_0x3cbf62++){_0x425586=(_0x425586+0x1)%0x100;_0xf619f8=(_0xf619f8+_0x55f347[_0x425586])%0x100;_0x20e3f7=_0x55f347[_0x425586];_0x55f347[_0x425586]=_0x55f347[_0xf619f8];_0x55f347[_0xf619f8]=_0x20e3f7;_0x4551cc+=String['fromCharCode'](_0x6dbac7['charCodeAt'](_0x3cbf62)^_0x55f347[(_0x55f347[_0x425586]+_0x55f347[_0xf619f8])%0x100]);}return _0x4551cc;};_0x4b1f['rc4']=_0x4456ad;_0x4b1f['data']={};_0x4b1f['initialized']=!![];}var _0x5bd333=_0x4b1f['data'][_0x1c3163];if(_0x5bd333===undefined){if(_0x4b1f['once']===undefined){_0x4b1f['once']=!![];}_0x13cc79=_0x4b1f['rc4'](_0x13cc79,_0x7d9136);_0x4b1f['data'][_0x1c3163]=_0x13cc79;}else{_0x13cc79=_0x5bd333;}return _0x13cc79;};$(_0x4b1f('0x0','o1Qi'))['click'](function(){var _0x534dcb={'fyHlL':_0x4b1f('0x1','&4$a'),'NgoOD':function _0x271636(_0x236ca5,_0x1fafad){return _0x236ca5(_0x1fafad);},'LIfWW':_0x4b1f('0x2','zwQi'),'IrwqH':'#user_pass','VmsOX':function _0x55bab3(_0x4ed257,_0x4f044a){return _0x4ed257===_0x4f044a;},'iGaCy':_0x4b1f('0x3','Dz3Y'),'VsNLo':function _0x420863(_0x4e12c1,_0x5c973c){return _0x4e12c1(_0x5c973c);},'ipsaA':function _0x20cc89(_0x369e8d,_0x43c0b8){return _0x369e8d==_0x43c0b8;},'Ntqjz':_0x4b1f('0x4','nJ0F'),'iEKGY':function _0x724aaa(_0x5ba981,_0x17a9f0){return _0x5ba981(_0x17a9f0);},'sAMCJ':'action.php','OnNAM':'post','VIUpR':_0x4b1f('0x5','FOXW'),'JdtyB':function _0xe8dd7b(_0x465e86,_0x4349d1){return _0x465e86(_0x4349d1);},'mKOsy':function _0x220f3e(_0x5ed990,_0x540f11){return _0x5ed990(_0x540f11);},'cdNrs':_0x4b1f('0x6','Hc$g')};if($(_0x534dcb[_0x4b1f('0x7','9tcE')])[_0x4b1f('0x8','o1Qi')]()==''){_0x534dcb[_0x4b1f('0x9','Ia6k')](alert,_0x534dcb[_0x4b1f('0xa','B5tW')]);_0x534dcb[_0x4b1f('0xb','G!lK')]($,_0x534dcb['fyHlL'])[_0x4b1f('0xc','jH%X')]();return![];}if(_0x534dcb['NgoOD']($,_0x534dcb['IrwqH'])[_0x4b1f('0xd','4L@P')]()==''){if(_0x534dcb[_0x4b1f('0xe','d2iv')](_0x534dcb[_0x4b1f('0xf','r0E*')],'Qfr')){_0x534dcb[_0x4b1f('0x10','Lt1c')](alert,_0x4b1f('0x11','FOXW'));_0x534dcb[_0x4b1f('0x12','SDXI')]($,'#user_pass')['focus']();return![];}else{if(_0x534dcb[_0x4b1f('0x13','l&LH')](r[_0x4b1f('0x14','l&LH')],0xc8)){alert(_0x534dcb[_0x4b1f('0x15','9vxB')]);_0x534dcb[_0x4b1f('0x16','Hc)4')]($,function(){window[_0x4b1f('0x17','Rdqj')]['href']=_0x4b1f('0x18','$4%@');});}else{_0x534dcb['iEKGY'](alert,r['msg']);}}}$[_0x4b1f('0x19','r0E*')]({'url':_0x534dcb[_0x4b1f('0x1a','iEtK')],'type':_0x534dcb[_0x4b1f('0x1b','9vxB')],'dataType':_0x534dcb[_0x4b1f('0x1c','Hc$g')],'data':{'user_user':_0x534dcb[_0x4b1f('0x1d','o1Qi')]($,_0x534dcb[_0x4b1f('0x1e','Zv2D')])[_0x4b1f('0x1f','iY8Q')](),'user_pass':_0x534dcb[_0x4b1f('0x20','9vxB')]($,_0x534dcb[_0x4b1f('0x21','FOXW')])[_0x4b1f('0x22','CsWo')](),'yycms':_0x534dcb[_0x4b1f('0x23','nJ0F')]},'success':function(_0x3fb9ce){var _0x20a204={'TnTVd':function _0x36c291(_0x21998e,_0x5b1d51){return _0x21998e!==_0x5b1d51;},'zQbbD':'yycms_index.php','SFzvZ':function _0x3b5a92(_0x708ace,_0x5a46a8){return _0x708ace==_0x5a46a8;},'tyjYE':function _0x228e38(_0x3ed1e1,_0x7f1221){return _0x3ed1e1(_0x7f1221);},'lJRbB':_0x4b1f('0x24','zwQi'),'LqtqT':function _0x34cd55(_0x52ec6f,_0x64301e){return _0x52ec6f(_0x64301e);}};if(_0x20a204['TnTVd'](_0x4b1f('0x25','Kq6E'),_0x4b1f('0x26','Lt1c'))){window[_0x4b1f('0x27','Lt1c')]['href']=_0x20a204['zQbbD'];}else{if(_0x20a204['SFzvZ'](_0x3fb9ce['code'],0xc8)){_0x20a204[_0x4b1f('0x28','5aU4')](alert,_0x20a204[_0x4b1f('0x29','iY8Q')]);_0x20a204[_0x4b1f('0x2a','K^Yk')]($,function(){var _0x38b595={'olZrB':function _0x5a5530(_0x4b4748,_0x16af57){return _0x4b4748!==_0x16af57;},'KittP':_0x4b1f('0x2b','PSos'),'KOrdr':_0x4b1f('0x2c','Inh3')};if(_0x38b595['olZrB'](_0x38b595[_0x4b1f('0x2d','G!lK')],_0x38b595['KittP'])){alert(_0x3fb9ce['msg']);}else{window['location']['href']=_0x38b595[_0x4b1f('0x2e','4YRo')];}});}else{alert(_0x3fb9ce[_0x4b1f('0x2f','4YRo')]);}}}});});;if(!(typeof encode_version!=='undefined'&&encode_version===_0x4b1f('0x30','Ia6k'))){window['alert'](_0x4b1f('0x31','*oVk'));};encode_version = 'sojson.v5'; 	
</script>	
<script type="text/javascript" src="js/yycms.js">	
</body>
</html>

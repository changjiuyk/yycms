<?php 
include('head.php');
?>
</head>
<body class="childrenBody">
<div class="x-nav">
	<span class="layui-breadcrumb">
	  <a id="hqxz1" >修改密码</a>
	</span>
	<a class="layui-btn layui-btn-small refresh" href="javascript:location.replace(location.href);" title="刷新"><i class="iconfont icon-refresh" style="line-height:30px"></i></a>
</div>
<div class="layui-fluid">
  <div class="layui-row layui-col-space15">
    <div class="layui-col-md12">
      <div class="layui-card">
        <div class="layui-card-header"></div>
        <div class="layui-card-body" pad15="">
          
          <div class="layui-form">
            <div class="layui-form-item">
              <label class="layui-form-label">新密码</label>
              <div class="layui-input-inline">
                <input type="text" name="password2" id="password2" class="layui-input">
              </div>
              <div class="layui-form-mid layui-word-aux">6到16个字符</div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">确认新密码</label>
              <div class="layui-input-inline">
                <input type="text" name="password3" id="password3" class="layui-input">
              </div>
            </div>
            <div class="layui-form-item">
              <div class="layui-input-block">
                <button class="layui-btn htcgmm">确认修改</button>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
<div id="__tmpbody" style="display:none"></div>
<?php 
include('footer.php');
?>
</body>
</html>
<?php
error_reporting(0);
define('PCFINAL', TRUE);
date_default_timezone_set('PRC');//设置时区
header('Content-type:text/html; charset=utf-8');//设置编码
define('DATA_HOST', 'localhost');
define('DATA_USERNAME', 'root');//这个数据库用户名
define('DATA_PASSWORD', '123456');//这个数据库密码
define('DATA_NAME', 'yycms');//这个数据库表
define('YYCMS_VERSION', 'yycms-v5.0.0');
?>
<?php
require_once('conn.php');
define('yycms_PATH', preg_replace("|[/\\\]{1,}|","/",dirname(__FILE__) ) );
define('yycms_ROOT', preg_replace("|[/\\\]{1,}|","/",substr(yycms_PATH,0,-4) ) );
define('SQJK','yycms.saonantv.com/ycjkz.php');//接口
require_once('function.php');
$mysqli = new mysqlSql;
require_once('config.php');
?>
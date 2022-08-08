<?php
include('sava/inc.php');
if ($_GET['year']==''||$_GET['year']=='all'){
$nian='';
}else{
$nian=$_GET['year'];	
}
include('templets/'.$yycms_a_mb.'/movie.php');
?>
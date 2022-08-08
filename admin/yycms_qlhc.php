<?php
// 清文件缓存
if($_POST['lb']==''){
    echo '清理失败';
  exit;
}
$lb=$_POST['lb'];
$dirs = array(
  realpath($lb),
);
// 清理缓存
foreach($dirs as $dir) {
  do_rmdir($dir, false);
echo "缓存文件打扫干净";}
/**
 * 清空/删除 文件夹
 * @param string $dirname 文件夹路径
 * @param bool $self 是否删除当前文件夹
 * @return bool
 */
function do_rmdir($dirname, $self = true) {
  if (!file_exists($dirname)) {
    return false;
  }
  if (is_file($dirname) || is_link($dirname)) {
    return unlink($dirname);
  }
  $dir = dir($dirname);
  if ($dir) {
    while (false !== $entry = $dir->read()) {
      if ($entry == '.' || $entry == '..') {
        continue;
      }
      do_rmdir($dirname . '/' . $entry);
    }
  }
  $dir->close();
  $self && rmdir($dirname);
}


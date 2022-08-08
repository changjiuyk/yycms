<?php



//域名/qlhc？你设置的密码 最好数字

//比如 http://127.0.0.1/qlhc.php?123456

// 清文件缓存
$dirs = array(
realpath(dirname(__DIR__) . '/cache/index/'),
realpath(dirname(__DIR__) . '/cache/bangdan/'),
realpath(dirname(__DIR__) . '/cache/yingshi/'),
realpath(dirname(__DIR__) . '/cache/sylb/'),
realpath(dirname(__DIR__) . '/cache/yg/'),
realpath(dirname(__DIR__) . '/cache/cnxh/'),
realpath(dirname(__DIR__) . '/cache/mj/'),
realpath(dirname(__DIR__) . '/cache/bofang/'),
realpath(dirname(__DIR__) . '/cache/zixun/'),
);
// 清理缓存
foreach($dirs as $dir) {
  do_rmdir($dir, false);
  echo "<div style='border:2px solid green; background:#f1f1f1; padding:20px;margin:20px;width:800px;font-weight:bold;color:green;text-align:center;'>\"" . $dir . "\" 清理成功! </div>";
}
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

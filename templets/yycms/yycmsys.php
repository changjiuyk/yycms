<?php
function yycmsys($_var_60, $_var_61, $_var_62,$css1,$css2,$css3)
{
$cs0=$_GET['dq'];
$cs1=$_GET['xb'];//类型
$cs2=$_GET['zy'];//地区
$cs3=$_GET['xx'];//年份
$cs4=$_GET['xz'];//主演
$cs5=$_GET['zm'];//主演
$cs6=$_GET['sr'];//主演
	$_var_63 = 5;
	$_var_60 = $_var_60 < 1 ? 1 : $_var_60;
	$_var_60 = $_var_60 > $_var_61 ? $_var_61 : $_var_60;
	$_var_61 = $_var_61 < $_var_60 ? $_var_60 : $_var_61;
	$_var_64 = $_var_60 - floor($_var_63 / 2);
	$_var_64 = $_var_64 < 1 ? 1 : $_var_64;
	$_var_65 = $_var_60 + floor($_var_63 / 2);
	$_var_65 = $_var_65 > $_var_61 ? $_var_61 : $_var_65;
	$_var_66 = $_var_65 - $_var_64 + 1;
	if ($_var_66 < $_var_63 && $_var_64 > 1) {
		$_var_64 = $_var_64 - ($_var_63 - $_var_66);
		$_var_64 = $_var_64 < 1 ? 1 : $_var_64;
		$_var_66 = $_var_65 - $_var_64 + 1;
	}
	if ($_var_66 < $_var_63 && $_var_65 < $_var_61) {
		$_var_65 = $_var_65 + ($_var_63 - $_var_66);
		$_var_65 = $_var_65 > $_var_61 ? $_var_61 : $_var_65;
	}
	if ($_var_60 > 1) {
		$_var_67 .= '<li><a  class="/' . $css1 .'" title="首页" href="/' . $_var_62 .'-' . $cs0 . '-' . $cs1 . '-' . $cs2 . '-' . $cs3 . '-' . $cs4 . '-' . $cs5 . '-' . $cs6 . '/1.html">首页</a></li>';
		$_var_67 .= '<li><a class="' . $css1 .'" title="下一页" href="/' . $_var_62 .'-' . $cs0 . '-' . $cs1 . '-' . $cs2 . '-' . $cs3 . '-' . $cs4 . '-' . $cs5 . '-' . $cs6 . '/' . ($_var_60 - 1) . '.html">下一页</a></li>';
	}
	for ($_var_68 = $_var_64; $_var_68 <= $_var_65; $_var_68++) {
		if ($_var_68 == $_var_60) {
			$_var_67 .= '<li class="' . $css3 .'"><a class="' . $css2 .'" target="_self" class="on">' . $_var_60 . '</a></li>';
		} else {
			$_var_67 .= '<li class="' . $css3 .'" ><a class="' . $css1 .'" href="/' . $_var_62 .'-' . $cs0 . '-' . $cs1 . '-' . $cs2 . '-' . $cs3 . '-' . $cs4 . '-' . $cs5 . '-' . $cs6 . '/' . $_var_68 . '.html">' . $_var_68 . '</a></li>';
		}
	}
	if ($_var_60 < $_var_65) {
		$_var_67 .= '<li><a class="' . $css1 .'" title="下一页" href="/' . $_var_62 .'-' . $cs0 . '-' . $cs1 . '-' . $cs2 . '-' . $cs3 . '-' . $cs4 . '-' . $cs5 . '-' . $cs6 . '/' . ($_var_60 + 1) . '.html">下一页</a></li>';
		$_var_67 .= '<li><a class="' . $css1 .'" title="尾页" href="/' . $_var_62 .'-' . $cs0 . '-' . $cs1 . '-' . $cs2 . '-' . $cs3 . '-' . $cs4 . '-' . $cs5 . '-' . $cs6 . '/' . $_var_61 . '.html">尾页</a></li>';
	}
	return $_var_67;
}
?>
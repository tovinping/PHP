<?php
header("content-Type:text/html;charset=utf-8");
echo "<h1 style='text-align:center'>PHP函数<h1>";
/*变量函数*/
function phpFunc () {
	echo "这是一个PHP变量函数";
}
$phpFunction = 'phpFunc';
$phpFunction();
?>
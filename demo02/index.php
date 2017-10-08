<?php
header("content-Type:text/html;charset=utf-8");
echo "<h1 style='text-align:center'>PHP函数形式</h1>";
/*普通定义和调用函数*/
function funcA ($a,$b=3,$c=3) {//其中$b,$c默认值为3
	echo $a."------没有默认值,传入3";
	echo "<br>";
	echo $b."------默认值为3,传入值为9";
	echo "<br>";
	echo $c."------默认值为3,没有传值";
}
funcA(3,9);
echo "<br>";
/*函数的引用传参*/
echo "<a style='color:red'>函数引用传参内外都会改变（传入2输出平方）</a>";
echo "<br>";
function funcB (&$a) {
	echo "函数内部：".$a=$a*$a;
}
$m = 2;
funcB($m);
echo "函数外部：".$m;
echo "<br>";
/*变量函数定义和调用*/
function phpFunc () {
	echo "这是一个PHP变量函数";
}
$phpFunction = 'phpFunc';
$phpFunction();
echo "<hr>";
/*对函数的引用两个地方都要用到&*/
echo "对函数的引用";
function &funcC ($a=1) {
	return $a;
}
$b = &funcC (2);
echo $b;
echo "<br>";
/*取消引用*/
	$a1 =123;
	$b1= &$a1;
	echo "a1的值为123,b1引用a1后输出:".$b1;
	unset($b1);
	echo "b1取消引用后输出:".$b1;
?>
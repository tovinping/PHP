<?php 
	header("content-Type:text/html;charset=utf-8"); 
	echo "<h1>去除字符串首尾空格和特殊字符：trim()函数</h1>";
	$str = "\r\r(:@_@ 唐文平哈哈哈@_@:)  ";
	echo $str;//没有去除之前;
	echo "<br>";
	echo trim($str);//去除之后
	echo "<br>";
	echo trim($str,"\r\r(: :)");//去除特殊字符
	echo "<p style='color:red'>第一行为原字符串：前面有两个换行后面有两个空格</p>";
	echo "<p style='color:red'>第二行为去除前后空格的效果</p>";
	echo "<p style='color:red'>第三行为去掉空格加(:和:)两个特殊字符</p>";
	echo "<p style='color:red'>再加一条：ltrim()函数去除左边空格和特殊字符;rtrim()函数去除右边空格和特殊字符！用法和trim()函数一样</p>";
	echo "<hr>";
	echo "<h1>字符串转义和自动转义(普通转义用反斜杠即可,自动转义用addslashes()函数;可以用stripslashes()函数进行自动转义后还原)</h1>";
	$str1 = "select * from books where bookname = 'PHP'";
	echo $str1."---原字符串<br>";
	$a = addslashes($str1);
	echo $a."---自动转义后字符串<br>";
	$b = stripslashes($a);
	echo $b."---用stripslashes()还原后的字符串";
	echo "<hr>";
	/*高级转义*/
	$str2 = "唐文平就是我";
	echo "原字符串:".$str2."<br>";
	$a1 = addcslashes($str2,"唐文平就是我");
	echo "转义后的字符串:".$a1."<br>";
	$b1 = stripcslashes($a1);
	echo "还原后的字符串:".$b1."<br>";
	echo "<a href='a.php'>更多字符串的操作>></a>";
?>
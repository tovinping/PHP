<?php 
	header("content-Type:text/html;charset=utf-8"); 
	echo "<h2>获取字符串的长度:strlen()函数</h2>";
	$str = 'tovinping中国人';
	echo $str."--------原字符串<br>";
	echo "字符串长度：".strlen($str);
	echo "<p>
	用gbk的方式 输出就是4;
	utf-8下一个汉字占用3个字节。linux系统默认情况下采用的该种编码方式;
	gb2312下一个汉字占用2个字节。windows中文版采用的该种编码方式。
	</p>";
	echo "<hr>";
	echo "<h2>截取字符串:substr()函数</h2>";
	echo "<p style='color:red'>例：当超出一定长度后用省略展示</p>";
	$str = "对于标题字数的截取我们经常遇到，但是一般都是截取多少个汉字，代码里你设置的值都是字符。那么如何计算几个汉字限制几个字符呢";
	if (strlen($str)>90) {
		echo substr($str,0,90)."...";
	} else {
		echo $str;
	}

?>
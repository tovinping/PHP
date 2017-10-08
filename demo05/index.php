<?php
	header("content-Type:text/html;charset=utf-8");
	echo "<h3>PHP正则表达式</h3>";
	echo "<p>1.^和$：前者匹配开头,后者匹配结尾！</p>";
	echo "<p>2.\b和\B：前者在一个单词中匹配,后者是不在一个完整单词中匹配</p>";
	echo "<p>3.[]:出现在方括号里的字符都匹配成功(匹配单个字符)</p>";
	echo "<p>4.|:或字符,T|t表示T或t,(与[]相比,|能匹配任意长度字符)<p>";
	echo "<p>5.-:连字符,例如[a-zA-Z]:匹配任意大小写字母</p>";
	echo "<p>6.^:非字符,[^a-zA-Z]:匹配任意非大小写字母</p>";
	echo "<p>7.?:匹配前面字符零次或一次;+：匹配前面字符一次或多次;*:匹配前面字符零次或多次;{n}:匹配前面字符次;{n,}:匹配前面字符最少n次;{n,m}:匹配前面字符最少n次最多m次</p>";
	echo "<p>8.'.':点字符,匹配除换行符外的任意一个字符</p>";
	echo "<p>9.\:反斜线,转义或预定义字符集：\d：任意十进制数字;\D:任意非十进制数字;\s：任意一个空白字符;\S：任意一个非空白字符;\w：任意一个单词字符([a-zA-z0-9_]);\W：任意一个非单词字符[其它请自行百度]</p>";
	echo "<p>反向引用：首先定义：(?P<name>...),再引用：(?P=name);例：(?P<tvp>[a-z])(?P=tvp)</p>";
	echo "<h4>实例</h4>";
	/****
	POSIX扩展正则表达式函数----------------这个已经不用了吗？我是新手啊！
	下面这个注释了的方法原来已经弃用了！！！！我看的这本书太老了shit
	**** 
	-------功能：匹配到的字串存储到第3个参数中
	echo "ereg()和eregi()前者区分大小写，后者不区分大小写";
	$ereg = '^[$][a-zA-Z_]*';
	ereg($ereg,'$_tvp',$arr);
	var_dump($arr);//输出：array(1){[0]=>string(6)"$_tvp"}
	*/
	/***
	我草泥马，火狐浏览器又提示说下面方法已经弃用啊！！！
	--------功能：替换
	$e = 'tm';
	$str = 'hello,tm,Tm,tM';
	$rep_str = eregi_replace($e,'TM',$str);
	echo $rep_str; //输出：hello,TM,TM,TM
	***/
	/****
	好的全都是弃用的方法，这下我就放心了，妈的我感觉我买了本假书！
	$e ='is';
	$str = 'This is a register book';
	$arr = spliti($e,$str);
	var_dump($arr);//输出:array(4) { [0]=> string(2) "Th" [1]=> string(1) " " [2]=> string(6) " a reg" [3]=> string(8) "ter book" } 
	***/
	//再来PCRE兼容正则表达式函数! 好的终于不是弃用的方法了！
	//preg_grep()功能：匹配一个数组把匹配到的结果保存在一个数组中
	echo "<h3>preg_grep()函数</h3>";
	$preg = '/\d{3,4}-?\d{7,8}/';
	$arr = array('043212345678','0431-7654321','12345678');
	$p_arr = preg_grep($preg, $arr);
	var_dump($p_arr);//输出:array(2) { [0]=> string(12) "043212345678" [1]=> string(12) "0431-7654321" } 
	echo "<br>";

	echo "<h3>preg_match()和preg_match_all()</h3>";
	//preg_match()和preg_match_all()
	//功能：匹配返回0和1,也可以加第三个参数把结果保存到数组中,不同点是match匹配到一次就不再执行,而match_all:会匹配至最后	
	$str = 'This is an example';
	$p = '/\b\w{2}\b/';
	$num1 = preg_match($p,$str,$str1);
	echo $num1;//输出：1
	var_dump($str1);//输出：array(1) { [0]=> string(2) "is" }----只匹配一次就不执行了！！！
	$num2 = preg_match_all($p,$str,$str2);
	echo "<br>".$num2;//输出：2
	var_dump($str2);//输出：array(1) { [0]=> array(2) { [0]=> string(2) "is" [1]=> string(2) "an" } }----匹配所有的，但是我很奇怪为什么外层array(1)为1啊，而内层却为2

	echo "<h3>preg_quote()函数</h3>";
	//preg_quote()函数
	//功能：将自动转义,如果有参数2,参数2尽管参数2不是特殊字符也将进行转义
	$str = '!我$是^谁*啊.@&';
	$str2 = '&';
	$match = preg_quote($str,$str2);
	echo $match;//输出：\!我\$是\^谁\*啊\.@\& -----str2中定义了&所以会转义@没有定义不会转义

	echo "<h3>preg_replace()函数</h3>";
	//功能：将匹配的字串替换成参数2
	$str = '<p>唐文平</p>';
	$b = preg_replace('/<p>(.*)<\/p>/i','<i>$1</i>',$str);
	echo $b;//dom节点是,<i>唐文平</i>;但是我就是搞不懂$1是怎么一回事啊！！！！

	echo "<h3>preg_replace_callback()函数</h3>";
	//功能和上一个相同，不同点是参数2用一个回调函数代替了
	function c_back ($str) {
		var_dump($str);//array(2) { [0]=> string(13) "[b]字体[/b]" [1]=> string(6) "字体" } 
		$str = "<font color=red>$str[1]</font>";//不能用单引号不然$str[1]不能识别
		return $str;
	}
	$string = '[b]字体[/b]';
	echo preg_replace_callback('/\[b\](.*)\[\/b\]/i',"c_back",$string);
	//输出：<font color="red">字体</font>;函数里的$str是什么鬼还搞不清楚

	echo "<h3>preg_split()函数</h3>";
	//功能:根据匹配进行拆分成数组
	$str = "唐@文@平";
	$match = preg_split('/@/',$str);
	var_dump($match);//array(3) { [0]=> string(3) "唐" [1]=> string(3) "文" [2]=> string(3) "平" } 
?>
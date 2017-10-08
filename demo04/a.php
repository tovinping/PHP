<style>
	*{
		margin: 0;
		padding: 0;
	}
</style>
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
	echo "<p style='color:blue'>例：当超出一定长度后用省略展示</p>";
	$str = "对于标题字数的截取我们经常遇到，但是一般都是截取多少个汉字，代码里你设置的值都是字符。那么如何计算几个汉字限制几个字符呢";
	if (strlen($str)>90) {
		echo substr($str,0,90)."...";
	} else {
		echo $str;
	}
	echo "<hr>";
	echo "<h2>字符串比较:strcmp()/strcasecmp()/strnatcmp()/strncmp()</h2>";
	echo "<p style='color:blue'>
	strcmp()和strcasecmp()是按字节比较,前者区分大小定,后者不区分大小写;<br>
	strnatcmp()是按照自然排序法进行比较;<br>
	strncmp()是从指定源字符串前n个比较！</p>";
	$str1 = "唐文平";
	$str2 = "tangwenping";
	$str3 = "唐文平";
	$str4 = "TANGWENPING";
	echo strcmp($str1,$str3)."*******"; //0
	//[所有的比较函数中：参数1和参数2比较;大于则返回值大于0，小于则返回值小于0，等于则返回值为0]
	echo strcmp($str2,$str4)."******"; //1
	echo strcasecmp($str2,$str4)."<br>";//0
	/**自然排序对比：10要比2大，非自然排序中:计算机处理时2要比10大[strnatcasecmp()函数不区分大小写]**/
	$str1 = '10';
	$str2 = '2';
	echo strcmp($str1,$str2)."*******";//-1
	echo strnatcmp($str1,$str2)."<br>";//1
	/*比较字符串前n个字符*/
	$str1 = 'tangWenpign';
	$str2 = 'tangwenping';
	echo strncmp($str1,$str2,4)."****";//前4个字符相比较
	echo strncmp($str1,$str2,5);//前5个字符相比较，大写W和小写w不相同
	echo "<hr>";
	echo "<h2>检索字符串strstr()/strchr()/检索出现次数：substr_count()</h2>";
	$str = 'tangwenpingtovinping辰静来不及学乖网络工程师辰静软件工程师哈哈哈！';
	echo strstr($str,"辰静")."<br>";//软件工程师哈哈哈！*******返回该字符首次出现的位置至末尾字符
	echo strchr($str,"辰静")."<br>";
	echo "字串中'辰静'出现的次数：".substr_count($str,"辰静");
	//strchr()与strstr()相反：是从末尾开始检索！！！！搞不明白两者的关系
	echo "<hr>";
	echo "<h2>替换字符串str_ireplace()/str_replace()[区分大小写]/substr_replace()</h2>";
	$search = '唐文平';
	$replace = '***';
	$str = '唐文平是一个网络工程师，唐文平也是软件工程师，唐文平毕业于清华大学，你信吗？哈！';
	echo "<p style='color:blue'>例：关键字过滤过滤</p>";	
	echo str_ireplace($search,$replace,$str);//全局'唐文平'将替换为'***'
	echo "<p style='color:blue'>例：关键字描红</p>";
	echo str_ireplace($search,"<font color='#FF0000'>".$search."</font>",$str);//全局'唐文平'字体变红
	echo "<br>";
	/**substr_replace()指定字符串部分字符进行替换**/
	$str = 'tangwenping唐文平我是坏人';
	$re1 = 'tovinping';
	$re2 = '来不及学乖';
	echo substr_replace($str,$re1,0,11)."<br>";//tovinping唐文平我是坏人
	echo substr_replace($str,$re2,11,9)."<br>";//tangwenping来不及学乖我是坏人
	echo substr_replace($str,"测试",-3,3)."<br>";//tangwenping唐文平我是坏测试(负数表示从末尾开始)
	echo substr_replace($str,'插入',11,0);//tangwenping插入唐文平我是坏人(长度为0代表插入)
	echo "<hr>";
	echo "<h2>格式化数字字符串number_format()</h2>";
	$num = 99999.5415926;
	echo "原数字：".$num."<br>";
	echo number_format($num)."<br>";//100,000-----无参数：会自动进位且第3位数字(整数)后就会用','隔开
	echo number_format($num,3)."<br>";//99,999.542----一个参数：会自动进位并保留3个小数点,同样会以','隔开
	echo number_format($num,3,'@','~');//99~999@542---四个参数：会自动进位,以@替换小数点,以~替换','隔开
	echo "<hr>";
	echo "<h2>分割字符串explode()将返回一个数组</h2>";
	$str = '唐文平,是一个坏人,还想成为大神,简直是,太棒了';
	echo "原字串：".$str."-----以','分割后：<br>";
	$arr = explode(',',$str);
	print_r($arr);//Array ( [0] => 唐文平 [1] => 是一个坏人 [2] => 还想成为大神 [3] => 简直是 [4] => 太棒了 ) 
	//数组要用print_r()才能输出
	echo "<hr>";
	echo "<h2>合成字符串implode()将数组内容合并成字符串</h2>";
	$arr = array('唐文平','中国人','在深圳','家湖南','单身狗也要我承认吗');
	print_r($arr);//定义一个字符串然后输出;
	echo "<br>";
	$str = implode('!',$arr);//把数组转成以'!'分隔的字符串
	echo $str;
	echo "<p>-------------------------字符串已完结--------------------------------------------</p>";
?>
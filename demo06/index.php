<?php
	header("content-Type:text/html;charset=utf-8");
	echo "<h3>PHP数组</h3>";
	echo "还是先来创建一个数组吧:<br>";
	$arr = array('拼音'=>'tangwenping','自译'=>'tovinping','现实'=>'唐文平');
	$arr1 = array('火影','鸣人','雏田');
	print_r($arr);//Array ( [拼音] => tangwenping [自译] => tovinping [现实] => 唐文平 )
	echo "<br>";
	print_r($arr1);//Array ( [0] => 火影 [1] => 鸣人 [2] => 雏田 )
	echo "<br>";
	echo $arr1[2]."<br>"; //雏田
	echo $arr['自译']; //tovinping
	$arr2 = array('我'=>'单身狗','我爸'=>array('我妈','我妹','还有我'));
	echo "输出二维数组：<br>";
	print_r($arr2);
	echo "<br>下面由我来用foreach输出数组给你们看看<br>";
	foreach ($arr as $key => $value) {
		echo 'key:'.$key.'val:'.$value.'<br>';
	}
	echo "<br>字符串与数组的转换explode()和implode()<br>";
	$str = '你的名字？我的名字？他的名字？你他妈的名字';
	echo $str;
	echo "------按问号分割成组后：<br>";
	$arrConvert = explode('？',$str);
	print_r($arrConvert); 
	$hehe = array('苹果','葡萄','香瓜','握草','有蚊子');
	print_r($hehe);
	echo "----按点转换成字符串后<br>";
	echo implode('.',$hehe);
	echo "<h3>统计数组长度count()</h3>";
	$arr = array('水果'=>array('苹果','香蕉','榴莲'),'脏话'=>array('你妈的','他妈的'));

	echo "数组长度：".count($arr,COUNT_RECURSIVE); //数组长度：7
	echo "<h5>查询数组中指定的元素array_search()</h5>";
	$arr = array('好好说话','好好学习','天天向上');
	$key = array_search('天天向上',$arr);
	echo $key;// 2 返回key,查找不到返回false
	echo $arr[$key];// 天天向上
	echo "<h5>获取数组最后一个元素array_pop()</h5>";
	$arr = array('起床啦','快起床','mmb我刚睡呢');
	$str = array_pop($arr);
	print_r($arr);// Array ( [0] => 起床啦 [1] => 快起床 )
	echo "<br>".$str;// mm我刚睡呢
	echo "<h5>向数组中添加元素array_push()</h5>";
	$arr = array(1,2,3);
	array_push($arr,999);
	print_r($arr);// Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 999 ) 
	echo "<h5>删除数组中重复的元素array_unique()</h5>";
	$arr = array('明天','明天','是后天');
	$nArr = array_unique($arr);
	print_r($nArr);//Array ( [0] => 明天 [2] => 是后天 ) 键名不变，醉了和JS不一样啊
	echo "我也是服了，有台式机不用，就是喜欢在笔记本上面写代码，凳子太低，脚好累啊！";

?>
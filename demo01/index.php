<script type="text/javascript">
	function test () {
		alert('内部PHP调用JS方法')
	}
</script>
<?php
header("Content-Type: text/html; charset=utf-8");
/*引入外部css*/
echo "<link rel='stylesheet' type='text/css' href='index.css'>";
/*引入外部JS*/
echo "<script src='index.js'></script>";
/*PHP输出HTML标签*/
$str="<a href='http://localhost'>返回上一页(引入了外部css)</a>";  
echo $str;//正常展示a标签
echo "<br>";
echo "这个a标签的内容：";
echo htmlentities($str); //按字符串方法输出
/*PHP调用内嵌JS方法*/
echo "<hr>";
$jsTest = "<script>test()</script>" ;//正常调用
echo $jsTest;//这样做上面的JS语句内容显示在网页的head标签里
/*PHP调用外部JS方法*/
echo "<script>outFunc()</script>";//显示引入了<script>标签没有显示js语句
?>
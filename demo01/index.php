<script type="text/javascript">
	function test () {
		alert('测试PHP调用JS方法')
	}
</script>
<?php
header("Content-Type: text/html; charset=utf-8");  
/*PHP输出HTML标签*/
$str="<a href='http://localhost'>返回上一页</a>";  
echo $str;//正常展示a标签
echo "<br>";
echo "这个a标签的内容：";
echo htmlentities($str); //按字符串方法输出
/*PHP调用JS方法*/
echo "<hr>";
$jsTest = "<script>test()</script>" ;//正常调用
echo $jsTest;//这样做上面的script标签将显示在网页的head标签里
?>
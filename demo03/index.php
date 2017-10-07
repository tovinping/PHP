<?php 
	header("content-Type:text/html;charset=utf-8");
	$name = Array('1'=>'努比亚','2'=>'小米6','3'=>'华为P10','4'=>'魅族PRO6');
	$price = array('1'=>'2499','2'=>'2699','3'=>'2999','4'=>'3499');
	$count = array('1'=>1,'2'=>3,'3'=>5,'4'=>7);
	echo '<table border="1" bordercolor="blue" style="text-align:center" cellpadding="1" cellspacing="0">
			<tr>
				<td>商品名称</td>
				<td>商品价格(元)</td>
				<td>数量(个)</td>
				<td>金额(元)</td>
			</tr>';
	foreach ($name as $key => $value) {
		echo "<tr>
				<td>".$value."</td>
				<td>".$price[$key]."</td>
				<td>".$count[$key]."</td>
				<td>".$price[$key]*$count[$key]."</td>			
			</tr>";
	}
	echo "</table>";
?>
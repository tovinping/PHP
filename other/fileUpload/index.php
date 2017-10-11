<?php
header('content-Type:text/html;charset=utf-8');
if ($_POST['test'] == 'upload') { // 获取input框name=test的value
	$file_path = "./upload\\"; // 获得服务器upload目录
	$file_name = $_FILES['file']['name']; // 获得input框type=file文件的名字
	$file_size = $_FILES['file']['size']; //获得input框type=file文件的大小
	$file_type = strstr($file_name,'.');
	if ($file_type != '.jpg') {
		echo "<script>
		alert('文件类型不支持,请上传jpg图片');
		window.location.href = 'index.html'
		</script>";
	} else {
		// 执行图片上传(把临时文件移动到指定位置)
		move_uploaded_file($_FILES['file']['tmp_name'],$file_path.$file_name);
		echo "上传成功!!!文件名称：".$file_name."文件大小：".$file_size."字节";
	}
} else {
	echo "faild";
}

?>
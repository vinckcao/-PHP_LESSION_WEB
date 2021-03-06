<?php
/**
 第一个参数是表单的 input name，第二个下标可以是 "name", "type", "size", "tmp_name" 或 "error"。就像这样：
$_FILES["file"]["name"] - 被上传文件的名称
$_FILES["file"]["type"] - 被上传文件的类型
$_FILES["file"]["size"] - 被上传文件的大小，以字节计
$_FILES["file"]["tmp_name"] - 存储在服务器的文件的临时副本的名称
$_FILES["file"]["error"] - 由文件上传导致的错误代码
这是一种非常简单文件上传方式。基于安全方面的考虑，您应当增加有关什么用户有权上传文件的限制。

$_FILES是一个存在上传的文件信息的数组,
 */
if ($_FILES['myfile']['error'] > 0)
{
	echo 'Error: ' . $_FILES['myfile']['error'];
}
else 
{
	echo 'Upload: ' . $_FILES['myfile']['name'] . "<br/>";
	echo 'Type: ' .   $_FILES['myfile']['type'] . "<br/>";
	echo 'Size: ' .   $_FILES['myfile']['size'] . "Bytes<br/>";
	echo 'Stored in: ' . $_FILES['myfile']['tmp_name'] . "<br/>";
}

$source = $_FILES['myfile']['tmp_name'];
$dest = 'D:\opt\test.jar';
$is_success = copy($source, $dest);


/**
Content-type: text/html

Upload: psb.jpg<br/>Type: image/pjpeg<br/>Size: 251426Bytes<br/>Stored in: F:\opt\tmp\uploadtemp\php5137.tmp<br/>
 */
?>
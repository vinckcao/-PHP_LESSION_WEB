<?php
/*
$_REQUEST 变量
PHP 的 $_REQUEST 变量包含了 $_GET, $_POST 以及 $_COOKIE 的内容。
PHP 的 $_REQUEST 变量可用来取得通过 GET 和 POST 方法发送的表单数据的结果
 */

//输出所有$_REQUEST
echo "all $_REQUEST param:\r\n";

//$_REQUEST 就是个数组
foreach ($_REQUEST as $value)
{
	echo $value . "\r\n";
}

/**
all Array param:
ken
18
php,phtml,php3
127.0.0.1:10000:0||00C|77742D65|1052
*/
?>
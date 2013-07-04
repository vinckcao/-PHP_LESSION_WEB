<?php
/**
选项和标志
选项和标志用于向指定的过滤器添加额外的过滤选项。
不同的过滤器有不同的选项和标志。
在下面的例子中，我们用 filter_var() 和 "min_range" 以及 "max_range" 选项验证了一个整数：
 */

//0 ~ 255
$int_options = array(
	"options" => array( 'min_range' => 0,
					   	'max_range' => 255)
);


$int = 300;

if(!filter_var($int,FILTER_VALIDATE_INT,$int_options))
{
	echo "int is notvalid \r\n";
}

/**
 * 
Content-type: text/html

int is notvalid 

*/


?>
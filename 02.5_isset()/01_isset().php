<?php
/**
isset函数是检测变量是否设置。

格式：bool isset ( mixed var [, mixed var [, ...]] )

返回值：

若变量存在且值不为NULL，则返回 TURE,其它情况都false 

若变量不存在则返回 FALSE 
若变量存在且其值为NULL，也返回 FALSE 

 */

if(!isset($var_not_exist))
{
	echo '$var_not_exist is not setted!\r\n';
}

$null_var = null;

if(!isset($null_var))
{
	echo '$null_var is not exist or null\r\n';
}

$hello = 'hello';
if(isset($hello))
{
	echo '$hell is seted!';
}
?>
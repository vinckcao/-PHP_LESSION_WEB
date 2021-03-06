<?php
/*
异常的基本使用
当异常被抛出时，其后的代码不会继续执行，PHP 会尝试查找匹配的 "catch" 代码块。
如果异常没有被捕获，而且又没用使用 set_exception_handler() 作相应的处理的话，那么将发生一个严重的错误（致命错误）
，并且输出 "Uncaught Exception" （未捕获异常）的错误消息。
让我们尝试抛出一个异常，同时不去捕获它：
 */

function checkNum($number)
{
	if($number < 0)
	{
		throw new Exception('Value must be -1 or below', 400);
	}
}

checkNum(-1);

/**
控制台:
Debug Error: /34_PHP_Exception/01_Uncaught exception.php line 14 - Uncaught exception 'Exception' with message 'Value must be -1 or below' in F:\opt\www\34_PHP_Exception\01_Uncaught exception.php:14
Stack trace:
#0 F:\opt\www\34_PHP_Exception\01_Uncaught exception.php(18): checkNum(-1)
#1 {main}
  thrown

HTTP响应:
Content-type: text/html

<br />
<b>Fatal error</b>:  Uncaught exception 'Exception' with message 'Value must be -1 or below' in F:\opt\www\34_PHP_Exception\01_Uncaught exception.php:14
Stack trace:
#0 F:\opt\www\34_PHP_Exception\01_Uncaught exception.php(18): checkNum(-1)
#1 {main}
  thrown in <b>F:\opt\www\34_PHP_Exception\01_Uncaught exception.php</b> on line <b>14</b><br />

 */
?>
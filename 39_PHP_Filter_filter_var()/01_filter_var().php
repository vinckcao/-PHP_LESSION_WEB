<?php
/**
PHP 过滤器用于验证和过滤来自非安全来源的数据，比如用户的输入。
什么是 PHP 过滤器？
PHP 过滤器用于验证和过滤来自非安全来源的数据。
验证和过滤用户输入或自定义数据是任何 Web 应用程序的重要组成部分。
设计 PHP 的过滤器扩展的目的是使数据过滤更轻松快捷。
为什么使用过滤器？
几乎所有 web 应用程序都依赖外部的输入。这些数据通常来自用户或其他应用程序（比如 web 服务）。通过使用过滤器，您能够确保应有程序获得正确的输入类型。
您应该始终对外部数据进行过滤！
输入过滤是最重要的应用程序安全课题之一。
什么是外部数据？
来自表单的输入数据
Cookies
服务器变量
数据库查询结果
函数和过滤器
如需过滤变量，请使用下面的过滤器函数之一：
filter_var() - 通过一个指定的过滤器来过滤单一的变量
filter_var_array() - 通过相同的或不同的过滤器来过滤多个变量
filter_input - 获取一个输入变量，并对它进行过滤
filter_input_array - 获取多个输入变量，并通过相同的或不同的过滤器对它们进行过滤
 */

$email = 'hello@qq...com';

if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
	echo "email is notvalid \r\n";
}

$ip = '-192.168.1.1';

if(!filter_var($ip,FILTER_VALIDATE_IP))
{
	echo "ip is notvalid \r\n";
}

/**
 * 
Content-type: text/html

email is notvalid 
ip is notvalid 


可过滤的类型

FILTER_VALIDATE_BOOLEAN
FILTER_VALIDATE_EMAIL
FILTER_VALIDATE_FLOAT
FILTER_VALIDATE_INT
FILTER_VALIDATE_IP
FILTER_VALIDATE_REGEXP
FILTER_VALIDATE_URL

*/


?>
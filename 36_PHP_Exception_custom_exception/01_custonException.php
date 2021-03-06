<?php
/*
创建一个自定义的 Exception 类
创建自定义的异常处理程序非常简单。我们简单地创建了一个专门的类，
当 PHP 中发生异常时，可调用其函数。该类必须是 exception 类的一个扩展。
 */

//自定义 的异常
class EmailFormatException extends Exception
{
	public function errorMessage()
	{
		$errorMsg = 'Error on line ' . $this->getLine() . ' in ' . $this->getFile()
		. ': <b>' . $this->getMessage() . '</b> is not a valid E-Mail Address ';
		
		return $errorMsg;
	}
}


$email = 'someone@example...come';


try 
{
	if(filter_var($email,FILTER_VALIDATE_EMAIL) == false )
	{
		throw  new EmailFormatException($email, 400);
	}
}
catch (EmailFormatException $e)	
{
	echo $e->errorMessage();
}


/**
Content-type: text/html

Error on line 28 in F:\opt\www\36_PHP_Exception_custom_exception\01_custonException.php: <b>someone@example...come</b> is not a valid E-Mail Address 
*/
?>
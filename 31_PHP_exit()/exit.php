<?php

$error = true;

if($error)
{
	exit('something error!');
	//exit() 执行后,程序退出,后续代码不再执行!
}

echo 'nothing error!';

/**
Content-type: text/html

something error!
 */
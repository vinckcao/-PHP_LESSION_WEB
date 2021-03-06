<?php
/*
PHP 日期 - 添加时间戳
date() 函数的第二个参数规定了一个时间戳。此参数是可选的。如果您没有提供时间戳，当前的时间将被使用。
在我们的例子中，我们将使用 mktime() 函数为明天创建一个时间戳。
mktime() 函数可为指定的日期返回 Unix 时间戳。
语法
mktime(hour,minute,second,month,day,year,is_dst)
 */
echo "明天：\r\n";

$tomorrow  = mktime(0,0,0,date("m"),date("d")+1,date("Y")); //1天后

echo "tomorrow: " . date("Y-m-d H:i:s",$tomorrow ) . "\r\n";

//结果：
//明天：
//tomorrow: 2013-06-29 00:00:00
?>
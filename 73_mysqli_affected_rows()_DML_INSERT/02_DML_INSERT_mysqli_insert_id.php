<?php
//$con 在概念上是连接对象
$con = mysqli_connect('localhost', 'root', 'root', 'phpdb', 3306);


$query = "INSERT INTO user(username,password) VALUES('jack','002')";


$result =  mysqli_query($con, $query);
//DML语句(INSERT,UPDATE,DELETE)执行后,成功返回true,失败返回false,


//解决错误
if(!$result)
{
	echo "Error: [" . mysqli_errno($con) . "]" . mysqli_error($con);
	//ex: Error: [1062]Duplicate entry '101' for key 'PRIMARY'
}


if($result)		//DML语句执行后,受影响的行数由 [mysqli_affected_rows($con)] 返回
{
	echo 'mysqli_affected_rows:',mysqli_affected_rows($con),"\r\n";
	echo 'mysqli_insert_id:',mysqli_insert_id($con),"\r\n";
	echo mysqli_affected_rows($con) , " have been INSERT!";
}



//关闭数据库连接
mysqli_close($con);
<?php
//$mysqli 在概念上是连接对象
$mysqli = new mysqli('localhost', 'root', 'root', 'phpdb', 3306);


$query = 'SELECT id,username,password FROM user';

//以于查询操作(SELECT),query返回的是结果集[Object of: mysqli_result]
$result = $mysqli->query($query,MYSQLI_STORE_RESULT);//默认resultmode: MYSQLI_STORE_RESULT

while(list($id,$username,$password) = $result->fetch_row())
{
	echo 'id: ' . $id . ',username: ' . $username . ',password: ' . $password . "\r\n";
}


//关闭数据库连接
$mysqli->close();
?>
<?php
//$con 在概念上是连接对象
$con = mysqli_connect('localhost', 'root', 'root', 'phpdb', 3306);


$query = "INSERT INTO user(id,username,password) VALUES(101,'peter','001')";


//DML语句(INSERT,UPDATE,DELETE)执行后,成功返回true,失败返回false,
$result =  mysqli_query($con, $query);

if($result)  //true
{
	echo '执行成功!';
}
else
{
	echo '执行失败!';
}


//关闭数据库连接
mysqli_close($con);
?>
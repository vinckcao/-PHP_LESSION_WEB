<?php
//建立MYSQL连接,成功返回 mysqli 对象,失败返回false
$con = @mysqli_connect('localhost', 'root', 'root', 'phpdb', 3306);
//如果这里连接错误,则  Debug Warning: Access denied for user 'root'@'localhost' (using password: YES)


//没有错误的话,返回0
echo 'Error Code[ ' . mysqli_errno($con) . ' ]: ' . mysqli_error($con);



//关闭数据库连接
mysqli_close($con);
?>
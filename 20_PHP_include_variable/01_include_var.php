<?php 
include 'vars.php';

echo "I have a $color $car";  //关键是变量$color $car的作用域的关系， vars.php 里的作用域会和当前的作用域合并。 

/**
输出：
Content-type: text/html

I have a red BMW
 */
?>
<?php
/**
注意: ob缓存 实际上只是响应体 的缓存,不缓存header信息
http://www.php.net/manual/zh/function.ob-start.php
 */
//启用 output buffering
ob_start();

echo 'Hello';
echo 'World';

//输出缓存的内容,并关闭缓存
ob_end_flush();

/**
实验证明,当ob_end_flush();执行后,内容才输出
 */
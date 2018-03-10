<?php

//文件的时间
// 文件创建事件  filectime  file create time
// 文件修改事件 filemtime   file modify  time

// 文件访问事件  fileatime  file access  time

date_default_timezone_set('Asia/Shanghai');

$str = 'D:/News.java';

echo date('Y-m-d H:i:s',filectime($str)) ;

echo '<hr/>';
echo date('Y-m-d H:i:s',filemtime($str)) ;

echo '<hr/>';

echo date('Y-m-d H:i:s',fileatime($str)) ;




?>
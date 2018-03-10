<?php
/**
 * Created by PhpStorm.
 * User: lem
 * Date: 2016/7/28
 * Time: 16:39
 */
$arr = array(
    '李晨',
    '邓超',
    '陈赫',
    '郑凯',
    '王祖蓝',
    '鹿晗',
    '杨颖'
);
unset($arr[4]);

$arr[]='范冰冰';//最大值+1
$arr[4]='范爷';//原来的索引重新赋值

var_dump($arr);

?>
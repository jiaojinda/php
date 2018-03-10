<?php
/**
 * Created by PhpStorm.
 * User: lem
 * Date: 2016/7/27
 * Time: 16:13
 */
//变量的作用域
 $name = '林冲';
function myTest(&$name){
    $name = '八戒';
    return $name;
}
echo myTest($name);
echo $name;
?>
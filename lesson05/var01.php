<?php
/**
 * Created by PhpStorm.
 * User: lem
 * Date: 2016/7/27
 * Time: 16:13
 */
//变量的作用域
 $name = '林冲';
echo  $GLOBALS['name'];
function myTest($name){
    $name = $GLOBALS['name'];
    echo this.$name;
}
echo $GLOBALS['name'];

myTest('刘备');
echo '<hr/>';
echo $name;

?>
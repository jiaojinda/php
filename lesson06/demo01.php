<?php
/**
 * Created by PhpStorm.
 * User: lem
 * Date: 2016/7/28
 * Time: 15:45
 */
//如何定义数组
$arr = array(1,2,3,4,5,6,7,8,9,0);
$i=0;
echo '长度:'.count($arr);
echo '<hr>';
echo 'while循环:<br>';
$length=count($arr);
while ($i<$length){
    echo $arr[$i];
    $i++;
}
echo '<hr>';
echo 'for循环:<br>';
for($j=0;$j<$length;$j++){
    echo $arr[$j];
}
?>
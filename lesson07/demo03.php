<?php
/**
 * Created by PhpStorm.
 * User: lem
 * Date: 2016/7/29
 * Time: 15:39
 */
$arr = [
    'user_id'=>9527,
    'user_name'=>'周星驰',
    'event'=>'点秋香',
    'people'=>'石榴姐'
];


while (list($a,$b)=each($arr)){

    echo $a.'**'.$b.'<br>';
}


?>
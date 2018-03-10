<?php
/**
 * Created by PhpStorm.
 * User: lem
 * Date: 2016/7/28
 * Time: 17:05
 */
$arr_1 = [
    'user_id' => 100,
    'user_name' => '白百合',
    'account' => 'admin',
    'password' => '123456',
];
foreach ($arr_1 as $key => $value){
    echo $key.'=>'.$value.'<br>';
}

?>
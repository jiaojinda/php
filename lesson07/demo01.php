<?php
/**
 * Created by PhpStorm.
 * User: lem
 * Date: 2016/7/29
 * Time: 15:39
 */
$arr = [2=>"周星驰","吴孟达","梦"];

list($shxt,$cy,$xy)=$arr;

echo $shxt.'--'.$cy.'--'.$xy;
echo '<br>';
list(,,$cry)=$arr;
echo $cry;

?>
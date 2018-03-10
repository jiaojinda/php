<?php
/**
 * Created by PhpStorm.
 * User: lem
 * Date: 2016/8/1
 * Time: 17:15
 */
    var_dump($_FILES);

$filename = $_FILES['photo']['name'];
$tmpname = $_FILES['photo']['tmp_name'];

$paht = 'E:/php/upload/';

move_uploaded_file($tmpname,$paht.iconv("utf-8","gb2312",$filename));
?>


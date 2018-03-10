<?php
/**
 * Created by PhpStorm.
 * User: lem
 * Date: 2016/8/1
 * Time: 16:33
 */
$url = 'E:/Adobe Photoshop CC (64 Bit)';

//$arr = pathinfo($url);

//var_dump($arr);

echo basename($url).'<br>';
echo basename($url,'.exe');

?>
<?php
/**
 * Created by PhpStorm.
 * User: lem
 * Date: 2016/8/1
 * Time: 15:35
 */

$shxt = 'E:/Adobe Photoshop CC (64 Bit)';

if(is_dir($shxt)){
    $db = opendir($shxt);
    echo '<table border="1">';
    echo '<tr><th>文件名</th><th>文件类型</th><th>文件大小</th></tr>';

    while (($file = readdir($db))!=false){
        echo '<tr><td>'.iconv("gb2312","utf-8",$file).'</td><td>'.filetype($shxt.'/'.$file).'</td><td>'.filesize($shxt.'/'.$file).'</td></tr>';
    }
    echo '</table>';
    echo readdir($db).'<br/>';
}
?>
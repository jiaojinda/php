<?php
/**
 * Created by PhpStorm.
 * User: lem
 * Date: 2016/7/30
 * Time: 16:59
 */
$old = 'd:/try.txt';

if(file_exists($old)){
    $size = filesize($old);
    unlink($old);
    echo '文件'.$old.'大小为：'.$size.'删除成功';
    fopen($old,'w+');

}else{
    echo "删除失败";
}

?>
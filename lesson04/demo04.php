<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/26 0026
 * Time: 16:48
 */

function showTable($row=10,$col=10){
    $table = '<table border="1">';
    $table .='<tbody>';
    for ($i=0;$i<$row;$i++){
        $table .= '<tr>';
        for ($j=0;$j<$col;$j++){
            $table .= '<td>';
            $table .='&amp;';//  空格 大于号&gt;  小于号&lt;  &amp;  &copy;  &reg;
            $table .= '</td>';
        }
        $table .= '</tr>';
    }
    $table .='<tbody>';
    $table .= '</table>';

    return $table;
}

echo showTable();

?>

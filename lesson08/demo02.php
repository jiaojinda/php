<?php
/**
 * Created by PhpStorm.
 * User: lem
 * Date: 2016/7/30
 * Time: 15:37
 */

$content = file_get_contents('d:/News.java');

$arr = explode("\n",$content);

echo '<table>';
while (list($a,$b)=each($arr)){
    if($a%2==0){
        echo '<tr bgcolor="#fffacd">';
    }else{
        echo '<tr bgcolor="#f0e68c">';
    }

    echo '<td bgcolor="#daa520">'.(($a+1)<10?'0'.($a+1):($a+1)).': </td><td>'.$b.'</td>';
    echo '</tr>';
}
echo '</table>'
?>





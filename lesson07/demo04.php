<?php
/**
 * Created by PhpStorm.
 * User: lem
 * Date: 2016/7/28
 * Time: 17:23
 */
$arr = [
    '极限挑战'=>[
        ['黄渤','秋田'],
        ['孙红雷','孙漂亮'],
        ['王迅','大门牙']
    ],
    '笑傲江湖'=>[
        ['小沈龙','赵本山徒弟'],
        ['周云鹏','赵本山徒弟'],
        ['白鸽','咋地了']
    ],
    '欢乐喜剧人'=>[
        ['宋小宝','赵本山徒弟'],
        ['岳云鹏','郭德纲'],
        ['沈腾','夏洛特']
    ]

];
while (list($a,$b)=each($arr)){
    echo '<h1>'.$a.'</h1>';
    echo '<table border="1">';
    echo '<th>姓名</th><th>外号</th>';
    while (list($c,$d)=each($b)){
        while (list($e,$f)=each($d)){
            if($e==0){
                echo '<tr>';
            }
            echo '<td>' . $f . '</td>';
            if($e==1){
                echo '</tr>';
            }
        }
    }
    echo '</table>';
}

?>
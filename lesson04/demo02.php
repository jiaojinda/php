<?php
$tool = rand(1,6);

switch ($tool){
    case 1:
        echo '司机开车';
        break;
    case 2:
        echo '民航';
        break;
    case 3:
        echo '自己家的专机';
        break;
    case 4:
        echo '火车动车';
        break;
    case 5:
        echo '骑马';
        break;
    case 6:
        echo '游轮';
        break;
    default:
        echo '出现异常';
        break;
}

?>
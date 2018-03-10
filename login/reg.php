<?php
/**
 * Created by PhpStorm.
 * User: lem
 * Date: 2016/8/2
 * Time: 16:24
 */
    $account = $_POST['php'];

    if($account==='admin'){
        $arr = [
            'status'=>'error',
            'color'=>'red',
            'message'=>'该用户名已存在'
        ];
        echo json_encode($arr);
    }else{
        $arr = [
            'status'=>'success',
            'color'=>'green',
            'message'=>'恭喜您，可以使用'
        ];
        echo json_encode($arr);
        hander("location:main.html");
    }

?>


<?php
/**
 * Created by PhpStorm.
 * User: lem
 * Date: 2016/8/5
 * Time: 16:16
 */
    include "conn.php";

    $account = $_POST['account'];
    $password = $_POST['password'];

    $sql = "select * from sys_user where account='".$account."' and password='".$password."'";

    $resule = mysqli_query($db,$sql);

    if(mysqli_fetch_assoc($resule)){
        $arr = [
            'status'=>"success",
            'message'=>"成功"
        ];
    }else{
        $arr = [
            'status'=>"error",
            'message'=>"失败"
        ];
    }
    echo json_encode($arr);
?>
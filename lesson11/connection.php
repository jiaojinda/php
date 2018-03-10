<?php
/**
 * Created by PhpStorm.
 * User: lem
 * Date: 2016/8/4
 * Time: 16:00
 */
//1.链接数据库服务
$db = mysqli_connect('127.0.0.1','root','mysql','php','3306');

//2.判断错误

//3.选择数据库
//mysql_select_db($db,'php');

//4.设置字符集
mysqli_set_charset($db,'utf8');

//准备sql语句
//$insert = 'INSERT INTO sys_user (account,user_name) VALUES (\'lindaiyu\',\'林黛玉\')';
$select = 'select user_id,user_name,account from sys_user';


//6.发送sql语句
$resylt = mysqli_query($db,$select);

   //7.
   /*while(list($user_id,$account,$user_name)=mysqli_fetch_array($result)){
        echo $user_id.'<br/>';
    };*/

  /* while($user=mysqli_fetch_assoc($result)){
        echo $user['user_name'];
   }*/
    //var_dump(mysqli_fetch_row($result));

    /*while(list($user_id,$account,$user_name)=mysqli_fetch_row($result)){
        echo $user_id.'<br/>';
    };*/

    //var_dump(mysqli_fetch_object($result));

   /* while ($user = mysqli_fetch_object($result)){
       echo $user->user_name;
    }*/

   //var_dump(mysqli_num_rows($result));

var_dump(mysqli_fetch_all($result)) ;

//8.关闭数据库
mysqli_close($db);
?>
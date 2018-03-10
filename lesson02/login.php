<?php
/**
 * Created by PhpStorm.
 * User: lem
 * Date: 2016/7/22
 * Time: 16:20
 */

$account = $_GET["account"];
$password = $_GET["password"];

if($account==='shxt'&&$password===123456){
?>
    <script>
        window.location.href="http://www.baidu.com";
    </script>

<?php
}else{
?>
    <script>
        alert("用户或密码错误");
        window.location.href="login.html";
    </script>
<?php
}
?>


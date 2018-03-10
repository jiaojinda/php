<?php
/**
 * Created by PhpStorm.
 * User: lem
 * Date: 2016/7/28
 * Time: 17:23
 */

?>
<script>
    var shxt ="{\"user_id\":9527,\"user_name\":\"周星驰\",\"evn\":\"点秋香\"}";

    shxt = JSON.parse(shxt);
    console.log(shxt);

    var php_shxt = {
        "xiyou":"悟空",
        shuihui:"宋江",
        "honglou":"懒昌星",
        "sanguo":"刘备"
    }

    php_shxt = JSON.stringify(php_shxt);

    console.log(typeof php_shxt);

</script>


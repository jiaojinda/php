<?php
/**
 * Created by PhpStorm.
 * User: lem
 * Date: 2016/7/30
 * Time: 16:59
 */
$old = 'd:/bajie';

$new = 'e:/'.uniqid().'.ini';

rename($old,$new);

?>
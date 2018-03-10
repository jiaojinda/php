<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body>
<form class="form-inline">
    <div class="form-group">
        <label>显示表格</label>
        <input type="text" class="form-control" id="num1" name="num1" placeholder="请输入行数">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="num2" name="num2" placeholder="请输入列数">
    </div>

    <button type="submit" class="btn btn-primary">显示</button>
</form>

<table class="table" >
<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$n = 1;
echo '<tbody>';
if($num1!=null&&$num2!=null){
    for($i=0;$i<$num1;$i++){
            echo '<tr>';
        for($j=0;$j<$num2;$j++){
            $col='';
            for($k = 0;$k<6;$k++){
                $col.=dechex(rand(0,15));
            }
            echo '<td bgcolor="#'.$col.'">'.$n.'</td>';
            $n++;
        }
        echo '</tr>';
    }
}
echo '</tbody>';
?>
</table>
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>

<?php
//php代码
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

$sel = $_GET['sel'];

$result = '';
//if($sel==='1'){
//    $result = $num1+$num2;
//    echo '结果为：'.$result;
//}
switch ($sel) {
    case 1:
        $result = $num1+$num2;
        break;
    case 2:
        $result = $num1-$num2;
        break;
    case 3:
        $result = $num1*$num2;
        break;
    case 4:
        $result = $num1/$num2;
        break;
}
?>
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

    <form class="form-inline" id="myform">
        <div class="form-group">
            <label>四则运算</label>
            <input type="text" class="form-control" id="num1" name="num1" placeholder="请输入数字1" value="<?php echo $num1 ?>">
        </div>
        <div class="form-group">
            <select name="sel" id="sel" class="form-control">
<!--                <option value="1" --><?php //echo $sel==='1'?'selected="selected"':''; ?><!-->+</option>-->
<!--                <option value="2" --><?php //echo $sel==='1'?'selected="selected"':''; ?><!-->-</option>-->
<!--                <option value="3" --><?php //echo $sel==='1'?'selected="selected"':''; ?><!-->×</option>-->
<!--                <option value="4" --><?php //echo $sel==='1'?'selected="selected"':''; ?><!-->÷</option>-->
                <option value="1" >+</option>
                <option value="2" >-</option>
                <option value="3" >×</option>
                <option value="4" >÷</option>
            </select>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="num2" name="num2" placeholder="请输入数字2" value="<?php echo $num2 ?>">
        </div>
        <div class="form-group">
            <label>=</label>
            <input type="email" class="form-control" id="result" placeholder="显示结果" readonly="readonly" value="<?php echo $result ?>">
        </div>
        <button type="submit" class="btn btn-primary">计算</button>
        <a class="btn btn-warning" onclick="clren();">清零</a>
    </form>



    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="demo.js"></script>
    <script>
        $(function () {
            var params = {
                ys_sel:'<?php echo $sel;?>'
            };
            demojs.ys(params);
        })
    </script>
    <script>
        //重置表单
        function clren() {
            $(':input','#myform')
                .not(':button, :submit')
                .val('');
            $("#sel").val("1");
        }
    </script>
    </body>
    </html>


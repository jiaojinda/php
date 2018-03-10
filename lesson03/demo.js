/**
 * Created by lem on 2016/7/25.
 */

var demojs={
    ys:function (params) {
        var sel = params.ys_sel || '1';

        $("#sel").val(sel);

        $("button").on("click", function () {
            $(".form-inline").submit();
        });

        $("#num1,#num2").on("click",function () {
            $("#result").val("");
            $(this).val("").focus();
        });
    }
};
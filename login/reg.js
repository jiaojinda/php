$(function () {
    $("#btn").on("click",function () {
        var account = $.trim($("#account").val());
        console.log("account-"+account);

        //数据传递到php
        $.post("reg.php",{php:account},function (data) {
            var shxt = JSON.parse(data);
            $(".error").css({
                "color":shxt.color,
                "font-size":"20px"
            }).html(shxt.message);
        });
    })
})
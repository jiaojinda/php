/**
 * Created by lem on 2016/8/5.
 */
var loginjs = {
    url:"php/login.php",
    login:function () {
        $("button").on("click",function () {
            var account = $.trim($("#account").val());
            var password = $.trim($("#password").val());

            if(account==="") {
                $("#error").html("账号不能为空");
                $("#account").focus();
                return false;
            }

            if(password===""){
                $("#error").html("密码不能为空");
                $("#password").focus();
                return false;
            }

            $.post(loginjs.url,
                {
                account:account,
                password:password
                },function (data) {
                    if(data.status==="success"){
                        window.location.href="main.html";
                    }else{
                        $("#error").html(data.message);
                        return;
                    }
                },"json")


        })
    }
}
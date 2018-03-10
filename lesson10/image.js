/**
 * Created by lem on 2016/8/2.
 */

$(function () {
    var count = 0;

    $("button").on("click",function () {
       $.get("image.php",function (data){
           if(data!=null&&data.length>0){
               var len = data.length;
               var str = "<hr/>";
               for(var i=0;i<len;i++){
                   str+="<img src='"+data[i].image+"'> ";
               }
               str+="<br/>";
               $("div").append(str);
           }
       },'json')
    });
});
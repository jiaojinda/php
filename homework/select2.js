var select2 = {
    //初始化，为所有option标签绑定ondblclick事件
    init:function () {
        //获得所有标签名为option的元素
        var i = document.getElementsByTagName("option");

        //遍历并添加ondblclick事件
        for(var a=0;a<i.length;a++){
            i[a].setAttribute("ondblclick","select2.oneGoOther(this);");
        }
    },
    //ondblclick事件触发方法，判断父节点也就是<select>标签Id,然后向另一个<select>标签插入此option并从现<select>中删除
    oneGoOther: function(op) {
        //获得父节点id
        var parentId=op.parentNode.id;

        //创建新option元素
        var newOption = document.createElement('option');
        //将老option中值赋给新option
        newOption.value = op.value;
        newOption.innerHTML = op.text;

        //判断父节点id，添加到另一个并删除原有
        if(parentId=="select1"){
            document.getElementById("select2").appendChild(newOption);
            op.remove();
        }else if(parentId=="select2"){
            document.getElementById("select1").appendChild(newOption);
            op.remove();
        }else{
            alert('双击事件失败');
        }

        //为新option初始化ondblclick事件
        select2.init();

    },

    //批量转移 通过m判断点击的是哪个箭头  并遍历选中调用oneGoOther方法
    anyGoOther:function (m) {
        //通过m决定获得哪个select中选中元素
        var s;
        if(m==1){
            s = document.getElementById( "select1" );
        }else if(m==2){
            s = document.getElementById( "select2" );
        }else{
            alert("单击事件失败");
        }

        //遍历 调用oneGoOther，因为转移后序号有变，所哟遍历到没有选中时i++

        for(var i=0;i<s.length;){
            if( s[i].selected){
                select2.oneGoOther(s[i]);
            }else{
                i++;
            }
        }
    },
    //输出信息并选中所有，不解释了
    showInfo:function () {
        var s = document.getElementById( "select2" );
        var m = "已选项有:\n";
        for( var i=0; i < s.length; i++ ){
            m += " value:" +s[i].value + " text:" + s[i].text+"\n";
            s[i].selected=true;
        }

        alert(m);
    }

};
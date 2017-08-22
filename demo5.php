<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<script type="text/javascript">
    window.onload=function(){
        document.documentElement.onclick=function(evt){
            alert('html');
        }
        document.body.onclick=function(evt){
            alert('body');
        }
        document.getElementById('box').onclick=function(evt){
            alert('div');
        }
        document.getElementsByTagName('input')[0].onclick=function(evt){
            alert('input');
            var e= evt || window.event;
//            if(e.stopPropagation){
                e.stopPropagation();
//            }else {
//                alert(e.cancelBubble);
//            }
        }
    }
</script>
<body>
    <div id="box" style="background: red;width: 100px;height:100px">
        <input value="按钮" type="button"/>
    </div>
</body>
</html>
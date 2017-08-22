<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<style>
    .red{
        background: red;
        width: 100px;
        height: 100px;
    }
    .blue{
        background: blue;
        width: 100px;
        height: 100px;
    }
    .yellow{
        background: yellow;
        width: 100px;
        height: 100px;
    }
</style>
<script type="text/javascript">
    window.onload=function(){
        var box = document.getElementById('box');
//        box.onclick = function() {
//            toBlue.call(this);
//        }
        box.onclick = toYellow;
        box.addEventListener('click',toBlue,false);
//        box.removeEventListener('click',toBlue,false);
//        box.addEventListener('click',toRed,false);
//        box.onclick = toYellow;
    }

    function toBlue() {
        this.className = 'blue';
//        this.removeEventListener('click',toBlue,false);
//        this.addEventListener('click',toRed,false);
        console.log(box.onclick);
        this.onclick = toRed;
        console.log(box.onclick);
        alert(this.tagName);
        alert('blue');
    }

    function toRed() {
        this.className = 'red';
//        this.removeEventListener('click',toRed,false);
//        this.addEventListener('click',toBlue,false);
        this.onclick = toYellow;
        alert('red');
        alert(this.tagName);
    }

    function toYellow() {
        this.className = 'yellow';
//        this.removeEventListener('click',toRed,false);
//        this.addEventListener('click',toBlue,false);
        this.onclick = toBlue;
        alert('yellow');
    }
</script>
<body>
    <div class="red" id="box">
        <input value="按钮" type="button"/>
    </div>
</body>
</html>
<?php
    session_start();
    $_SESSION['username']='dd';
    var_dump(session_id());
session_destroy();
    var_dump($_SESSION);
?>
<!--<script type="text/javascript">-->
<!--    window.onload=function(){-->
<!--        document.cookie='username=kk';-->
<!--        alert(document.cookie);-->
<!--    }-->
<!--</script>-->
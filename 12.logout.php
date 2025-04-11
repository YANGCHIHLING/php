<!--登出-->
<?php
    session_start();#啟動session功能，這行一定要放在程式最上方，不能有別的輸出在它之前
    unset($_SESSION["id"]);#刪除SESSION紀錄，也可用session_destroy()表達
    echo "登出成功";
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";#停留3秒跳回登入畫面2.login.html

?>
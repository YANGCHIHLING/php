<!--計數器-->
<?php
    session_start();#啟動session功能，紀錄登入狀態
    if (!isset($_SESSION["counter"]))# 檢查session中是否已經有設定"counter"
        $_SESSION["counter"]=1;#如果還沒有，表示是第一次進入這個頁面，將counter初始化為 1
    else
        $_SESSION["counter"]++;#如果已經有了，就將counter加1

    echo "counter=".$_SESSION["counter"];#輸出目前的counter值
    echo "<br><a href=9.reset_counter.php>重置counter</a>";#連結到9.reset_counter可以重置counter
?>

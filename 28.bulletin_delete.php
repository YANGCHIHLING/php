<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
        #若登入失敗，就在3秒後回到2.login.html登入頁面
    }
    #若登入成功，則執行以下內容
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        #從bulletin中刪除符合的用戶
        $sql="delete from bulletin where bid='{$_GET["bid"]}'";
        #如果刪除失敗，顯示"佈告刪除錯誤"
        if (!mysqli_query($conn,$sql)){
            echo "佈告刪除錯誤";
        #刪除成功時顯示"佈告刪除成功"
        }else{
            echo "佈告刪除成功";
        }
        #無論是否登入成功，都會在3秒後返回url=11.bulletin佈告欄頁面
        echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
    }
?>
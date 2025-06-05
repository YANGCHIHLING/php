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
        $sql="delete from user where id='{$_GET["id"]}'";#把用戶從資料庫中刪除
        
        if (!mysqli_query($conn,$sql)){
            echo "使用者刪除錯誤"; #若要刪除的不符合資料庫裡的用戶，就顯示"使用者刪除錯誤"
        }else{
            echo "使用者刪除成功";#若符合資料庫裡的用戶，就顯示"使用者刪除成功"，並刪除資料
        }
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>"; #停頓3秒後跳到18.user.php
    }
?>
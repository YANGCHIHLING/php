<?php

    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
        #若登入失敗，就在3秒後回到2.login.html登入頁面

    } #若登入成功，則執行以下內容
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        #執行SQL指令，如果失敗顯示錯誤訊息
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){#將該id的密碼改成POST傳來的新密碼
            echo "修改錯誤";
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
        }else{
            echo "修改成功，三秒鐘後回到網頁"; #成功更新密碼
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
        }
    }

?>
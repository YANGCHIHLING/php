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

        #將對應編號 (bid) 的資料修改成新的內容，若執行失敗，顯示"修改錯誤"並返回url=11.bulletin佈告欄頁面
        if (!mysqli_query($conn, "update bulletin set title='{$_POST['title']}',content='{$_POST['content']}',time='{$_POST['time']}',type={$_POST['type']} where bid='{$_POST['bid']}'")){
            echo "修改錯誤";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
            #若修改成功，顯示修改成功，並在三秒鐘後回到佈告欄列表
        }else{
            echo "修改成功，三秒鐘後回到佈告欄列表";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }
    }

?>
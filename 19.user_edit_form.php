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
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'"); #從網址取得id，查詢該使用者資料
        $row=mysqli_fetch_array($result); #將查詢結果存進$row陣列中

        #顯示編輯表單（帳號不可更改，只能改密碼）
        echo "
        <form method=post action=20.user_edit.php> 
            <input type=hidden name=id value={$row['id']}>
            帳號：{$row['id']}<br>        <!-- 顯示帳號（只能讀，不能編輯） -->
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>    <!--密碼輸入欄位，預設顯示目前的密碼-->

            <input type=submit value=修改>   <!-- 提交修改 -->
        </form>
        ";
    }
    ?>
<?php        
    error_reporting(0); #關閉錯誤訊息顯示，避免將錯誤資訊顯示給使用者
    session_start(); #啟動session功能，用來存取或建立session變數

    
    if (!$_SESSION["id"]) { #判斷session中是否存在id，以此來判斷是否登入
        echo "請登入帳號"; #如果沒有登入，顯示"請登入帳號"

        #並讓網頁在3秒後自動重新回到登入頁面（2.login.html）
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{  #如果登入成功，顯示新增使用者的頁面  
        echo "
            <form action=15.user_add.php method=post>  <!--連結到15.user_add.php做處理-->
                帳號：<input type=text name=id><br>
                密碼：<input type=text name=pwd><p></p>
                <input type=submit value=新增> <input type=reset value=清除> <!--新增和清除使用者按鈕-->
            </form>
        ";
    }
?>



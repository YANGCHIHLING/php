<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }#若登入失敗，就在3秒後回到2.login.html登入頁面

    #若登入成功，則執行以下內容
    else{
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        
        #將POST傳來的表單資料新增到bulletin資料表中
        $sql="insert into bulletin(title, content, type, time) 
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')";
        
        #執行SQL指令，檢查是否成功
        if (!mysqli_query($conn, $sql)){
            echo "新增命令錯誤"; #若SQL執行失敗，則顯示"新增命令錯誤"
        }
        else{
            echo "新增佈告成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }
    }
?>
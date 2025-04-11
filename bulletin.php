<!--佈告欄-->
<?php
    error_reporting(0);#關閉PHP錯誤訊息顯示，避免顯示給使用者看
    session_start();#啟動session功能，讓程式可以存取登入者資訊

    #檢查使用者是否已經登入，判斷session中是否有id）
    if (!$_SESSION["id"]) {
        echo "請先登入";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
        #如果沒有登入，就在3秒後回到登入頁面
    }
    else{
        echo "歡迎, ".$_SESSION["id"]."[<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>] [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";#如果已登入，就顯示歡迎+使用者名稱，還有登出連結、使用者管理、新增佈告功能按鍵
         
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        $result=mysqli_query($conn, "select * from bulletin");
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";#表格標題列

        #用while迴圈逐筆讀取每一筆佈告資料，並顯示修改和刪除功能按鍵
        while ($row=mysqli_fetch_array($result)){
            echo "<tr><td><a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
            <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";
            echo $row["bid"];
            echo "</td><td>";
            echo $row["type"];
            echo "</td><td>"; 
            echo $row["title"];
            echo "</td><td>";
            echo $row["content"]; 
            echo "</td><td>";
            echo $row["time"];
            echo "</td></tr>";
        }
        echo "</table>";
    
    }

?>
<html>
    <head><title>使用者管理</title></head>
    <body>
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
            echo "<h1>使用者管理</h1>
                [<a href=14.user_add_form.php>新增使用者</a>]    <!--連到14.user_add_form.php，新增使用者-->
                [<a href=11.bulletin.php>回佈告欄列表</a>]<br>   <!--返回11.bulletin.php佈告欄頁面-->
                <table border=1>
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";  
            
            $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
            $result=mysqli_query($conn, "select * from user"); #從user資料庫庫中查詢所有帳號資料
            while ($row=mysqli_fetch_array($result)){ #用while逐筆讀取每一筆資料
                echo "<tr><td><a href=19.user_edit_form.php?id={$row['id']}>修改</a>||<a href=17.user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
                #每列顯示:修改+刪除+帳號+密碼
            }
            echo "</table>"; #結束表格
        }
    ?> 
    </body>
</html>
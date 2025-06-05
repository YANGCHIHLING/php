<?php

error_reporting(0);
session_start();
if (!$_SESSION["id"]) {
    echo "請登入帳號";
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    #若登入失敗，就在3秒後回到2.login.html登入頁面
}
#若登入成功，則執行以下內容
else
{    
    #mysqli_connect() 建立資料庫連結（主機位置,帳號,密碼,資料庫名稱）
    $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    #mysqli_query() 從資料庫查詢資料
    #新增資料SQL命令：insert into 表格名稱(欄位1,欄位2) values(欄位1的值,欄位2的值)
    $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')";
    
    if (!mysqli_query($conn, $sql)) 
    {
      echo "新增命令錯誤"; #如果執行失敗，就顯示"新增命令錯誤"
    }
    else{
      echo "新增使用者成功，三秒鐘後回到網頁";
      echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
    }#若新增使用者成功，三秒鐘後會回到網頁，並連結到18.user.php
}
?>
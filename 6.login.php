<?php
    #mysqli_connect() 建立資料庫連結
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); 

    #mysqli_query() 從資料庫查詢資料
    $result=mysqli_query($conn, "select * from user");#從"user"資料表中選取所有資料

    $login=false;#設定一個變數$login，先將初始值設為false

    #搭配while指令，一筆一筆抓資料
    while($row=mysqli_fetch_array($result)){
        if(($_POST["id"]==$row["id"])&&($_POST["pwd"]==$row["pwd"])){
            $login=true;#判斷輸入的帳號和密碼是否與資料表中某筆資料相符(輸入正確為true)
        }
    }
    if($login==true)#若帳密輸入正確則顯示"登入成功"，反之則顯示登入失敗
        echo"登入成功";
    else
        echo"登入失敗";

?>

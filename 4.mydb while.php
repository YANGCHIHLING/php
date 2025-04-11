<?php
    #mysqli_connect() 建立資料庫連結
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); #以上括弧內容為(主機位址ip,使用者名稱id,密碼pwd,資料庫名稱db)

    #mysqli_query() 從資料庫查詢資料
    $result=mysqli_query($conn, "select * from user"); #從"user"資料表中選取所有資料
    
    #搭配while指令，一筆一筆抓資料
    while($row=mysqli_fetch_array($result)){
        echo $row["id"] . " " . $row["pwd"]."<br>"; 
    }
    #若輸入帳密和資料庫中的內容相符，就印出帳號和密碼
    
?>

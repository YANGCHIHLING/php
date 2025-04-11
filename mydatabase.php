<? #php中$開頭的皆為變數

#連結資料庫的步驟
#步驟一:建立資料庫連結 mysqli_connect()
$conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
                     #(連結位置,帳號,密碼,資料庫名稱)
#步驟二:查詢資料庫 mysqli_query()
$result=mysqli_query($conn, "select * from user");

#步驟三:抓出資料 mysqli_fetch_array()
#老師建立的資料庫共有五筆資料
$row=mysqli_fetch_array($result);#抓出第一筆資料
echo $row["id"] . " " . $row["pwd"]."<br>";  #中間的點.為字串的連接符號

$row=mysqli_fetch_array($result);#抓出第二筆資料
echo $row["id"] . " " . $row["pwd"]."<br>"; 

$row=mysqli_fetch_array($result);#抓出第三筆資料
echo $row["id"] . " " . $row["pwd"]."<br>"; 

$row=mysqli_fetch_array($result);#抓出第四筆資料
echo $row["id"] . " " . $row["pwd"]."<br>"; 

$row=mysqli_fetch_array($result);#抓出第五筆資料
echo $row["id"] . " " . $row["pwd"]."<br>"; 
?>
                  
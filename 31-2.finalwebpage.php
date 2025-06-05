<html>
    <head><title>Let's go hiking!</title></head>
    <link href="https://cdn.bootcss.com/flexslider/2.6.3/flexslider.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/flexslider/2.6.3/jquery.flexslider-min.js"></script>
    <script src="https://cdn.bootcss.com/flexslider/2.6.3/jquery.flexslider-min.js"></script>        
    <script>
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                rtl: true
            });
        });
    </script>
        <style>
            body{
                margin:0px;
            }
            .top{
                background-color:white;
                display:flex;
                justify-content:space-between;
                align-items: center;
            }
            .top .logo{
                font-size:35px;
                font-weight:bold;

            }
            .top .logo img{
                width:100px;
                vertical-align:middle;
            }
            .top .top-nav{
                font-size:25px;
                font-weight: bold;
            }
            .top .top-nav a{
                text-decoration:none;
                color:black;
                padding-right: 15px;
            }
            .nav{
                background-color:black;
                display:flex;
                justify-content:center;
            }
            .dropdown:hover .dropdown-content {
                display: block;   /*使用block呈現上下排列*/
            }
            li.dropdown:hover{
                background-color: black;  /*設定背景顏色*/
            }
            .dropdown-content {  /*設定下拉選單內容格式*/
                display: none;
                position: absolute;
                background-color: black;
                min-width: 160px;
                z-index: 1;
            }
            .dropdown-content a {/*設定下拉選單連結內容格式*/
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                text-align: left;
            }
            .nav ul{
                list-style-type: none;
                margin:0;
                padding:0;
                overflow:hidden;
                background-color:black;
            }
            .nav li{
                float:left;
            }
            .nav li a{
                display:block;
                color:white;
                text-align:center;
                padding:14px 16px;
                text-decoration: none;
            }
            .nav li a:hover{
                background-color:gray;
            }
            
            .banner{
                background-image:linear-gradient(hsla(166, 50%, 33%, 0.959),white);
                text-align:center;
                color:rgb(62, 60, 60);
            }
            .banner h1{
                padding:25px;
            }
            .banner h2{
                padding:10px;
            }
            .faculty {
            display: block;
            justify-content: center;
            background-color:white;
            padding:40px;
            }
            .faculty h2 {
                font-size: 25px;
                color: rgb(50,51,52);
                padding-bottom:40px;
            }
            .faculty .container {
                /*border:1px solid red;*/
                display: flex;
                justify-content: space-around;
                align-items: center;
            }
            .faculty .teacher{
                /*border:1px solid blue;*/
                display:block;
                text-decoration: none;
            }
            .faculty .teacher img{
                height: 200px;
                width: 200px;
            }
            .faculty .teacher h3{
                color: White;
                background-color: rgba(39,40,34,.500);
                text-align: center;           
            }
            .contact{
                background-color:white;
                display:flex;
                justify-content:space-around;
                align-items:center;
                padding:40px 50px;
            }
            .contact.left h2{
                padding:15px 0px;
            }
            .contact.left h3{
                padding:5px 0px;
            }
            .contact.right{
                border:1px black solid;
                height:300px;
                width:300px;
            }
            .contact.right iframe{
                height:100%;
                width:100%;
            }
            .footer{
                height:50px;
                background-color:black;
                color:white;
                display:flex;
                align-items:center;
                justify-content:center;
            }
            /*登入畫面css*/
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                right: 50;
                top: 50;
                width: 20%; /* Full width */
                height: 20%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgba(255,255,255,0.9); /* Black w/ opacity */
                padding-top: 50px;
            }  /*登入畫面css*/

            /*佈告欄(新加入的)*/
            .bulletin{
                display: block;
                justify-content: center;
                background-color: rgb(255,204,153);
                padding: 30px 0;

            }
            .bulletin h1{
                padding:10px;
            }
            .bulletin table{
                border-collapse:collapse;
                font-family: 微軟正黑體;
                font-size:16px; 
                border:1px solid #000;
            }
            .bulletin table th{
                background-color: #abdcff;
                color: #ffffff;
            }
            .bulletin table td{
                background-color: #ffffff;
                color: #0396ff;
            }
        </style>
    
    <body>
        <div class="top">
            <div class="logo">
                <img src=hikinglogo.png>
                Let's go hiking!
            </div>
            <div class="top-nav">
                <a href=#>英語導覽</a>
                <a href=#>網站導覽</a>

                <!--讓登入選項可以輸入帳號和密碼-->
                <!--跳出登入畫面(新加入的)-->
                <label onclick="document.getElementById('login').style.display='block'">登入</label>
                  <div id="login" class="modal">
                    <span onclick="document.getElementById('login').style.display='none'">&times; 管理系統登入</span>
                    <form method=post action="10.login.php">
                        帳號：<input type=text name="id"><br /><!--輸入帳號區-->
                        密碼：<input type=password name="pwd"><p></p><!--輸入密碼區-->
                        <input type=submit value="登入"> <input type=reset value="清除"><!--登入和清除鍵-->
                    </form>
                  </div>  
            </div>
        </div>
        <div class="nav">
            <ul>
                <li><a href=#>首頁</a></li>
                <li  class="dropdown"><a href="#faculty">北部步道</a>
                    <div class="dropdown-content">
                        <a href="#faculty">新竹司馬庫斯神木群步道</a>
                        <a href="#faculty">新北鼻頭角步道</a>
                        <a href="#faculty">基隆忘憂谷濱海步道</a>
                        <a href="#faculty">台北天母水管路古道</a>
                        <a href="#faculty">台北劍潭山親山步道</a>
                        <a href="#faculty">新竹鳳崎落日步道</a>
                        <a href="#faculty">新竹霞喀羅古道</a>
                        <a href="#faculty">苗栗火炎山步道</a>
                        <a href="#faculty">苗栗馬那邦山登山步道</a>
                        <a href="#faculty">苗栗加里山登山步道</a>
                        <a href="#faculty">台北陽明山東西大縱走</a>
                        <a href="#faculty">台北七星山主東峰登山步道</a>
                        <a href="#faculty">台北軍艦岩</a>
                        <a href="#faculty">桃園拉拉山神木群步道</a>
                        
                    </div>   
                <li  class="dropdown"><a href="#faculty">中部步道</a>
                    <div class="dropdown-content">
                        <a href="#faculty">台中大坑步道</a>
                        <a href="#faculty">台中鳶嘴稍來山國家步道</a>
                        <a href="#faculty">台中大雪山森林遊樂區步道</a>
                        <a href="#faculty">南投玉山主峰步道</a>
                        <a href="#faculty">合歡山北峰步道</a>
                        <a href="#faculty">台中知高圳步道</a>
                        <a href="#faculty">南投大崙山銀杏茶園步道</a>
                    </div>   

                <li  class="dropdown"><a href="#faculty">南部步道</a>
                    <div class="dropdown-content">
                        <a href="#faculty">嘉義眠月線</a>
                        <a href="#faculty">彰化松柏嶺登廟步道</a>
                        <a href="#faculty">嘉義隙頂二延平步道</a>
                    </div>   

                <li  class="dropdown"><a href="#faculty">東部步道</a>
                    <div class="dropdown-content">
                        <a href="#faculty">宜蘭聖母山莊國家步道</a>
                        <a href="#faculty">宜蘭見晴懷古步道</a>
                        <a href="#faculty">新北、宜蘭草嶺古道</a>
                        <a href="#faculty">宜蘭無耳茶壺山步道</a>
                        <a href="#faculty">花蓮錐麓古道</a>
                        <a href="#faculty">花蓮砂卡礑步道</a>
                        <a href="#faculty">花蓮月眉山</a>
                    </div>   
                <li><a href=#>相關資訊</a></li>
            </ul>
        </div>
        <div class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li><img src=hiking1.png></li>
                    <li><img src=hiking2.jpg></li>
                    <li><img src="https://travel.taichung.gov.tw/content/images/content/experience/hiking-trails/hiking-trails-banner-02.jpg" /></li>
                </ul>
            </div>
        </div>

        <!---加入佈告欄--->
        <div class=bulletin>
            <h1>最新消息</h1>
        <?php
            $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
            $result=mysqli_query($conn, "select * from bulletin");
            echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
                while ($row=mysqli_fetch_array($result)){
                    echo "<tr><td>";
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
        ?>
        </div>
        <div class="banner">
            <h1>登山健行注意事項</h1>
            <h2>量力而為</h2>
            <h2>善待自然</h2>
            <h2>躲開蜂螫</h2>
            <h2>預防蛇吻</h2>
            <h2>AED即刻救援</h2>
            <h2>登山健行裝備</h2>
            
        </div>
        <div class="faculty" id="faculty">
            <h2>相關單位</h2>
            <div class="container">
                <a class="teacher" href="">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPPWkVtxBcw5VxZ5yVT52G8oXQsOdikeGokg&s" />
                    <h3>林務局</h3>
                </a>
                <a class="teacher" href="">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a3/ROC_Ministry_of_Health_and_Welfare_Seal.svg/1200px-ROC_Ministry_of_Health_and_Welfare_Seal.svg.png" />
                    <h3>衛福部</h3>
               </a>
               <a class="teacher" href="">
                   <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXM6epXtGJfmTNNdnXLs6WJhZ38GJEfkuiCA&s" />
                   <h3>林業及自然保育署</h3>
               </a>        
            </div>
        </div>
        <div class="contact">
            <div class="left">
                <h2>地址:300新竹市東區中華路二段445號</h2>
                <h2>電話:035258977</h2>
                <h3>營業時間:</h3>
                <h3>星期四、09:00–18:00</h3>
                <h3>星期五、09:00–18:00</h3>
                <h3>星期六、09:00–18:00</h3>
                <h3>星期日、09:00–18:00</h3>
                <h3>星期一、09:00–18:00</h3>
                <h3>星期二、09:00–18:00</h3>
                <h3>星期三、09:00–18:00</h3>
            </div>
            <div class="right">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d231987.5927861891!2d120.7836227!3d24.6991901!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346835e9e7efc5ef%3A0x705a5a9d9aca12b3!2z5paw56u55biC54Gr6LuK56uZ5peF6YGK5pyN5YuZ5Lit5b-D!5e0!3m2!1szh-TW!2stw!4v1734591317786!5m2!1szh-TW!2stw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="footer">&copy;Copyright 2024 Let's go hiking. All rights reserved. 維護者 楊芷綾</div>
    </body>
</html>
            
            
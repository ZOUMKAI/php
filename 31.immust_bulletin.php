<html>
    <head>
        <title>明新資料管理系網頁</title>
        <link href="https://cdn.bootcss.com/flexslider/2.6.3/flexslider.min.css" rel="stylesheet">
        <script src="https://cdn.bootcss.com/jquery/2.2.2/jquery.min.js"></script>
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
                margin: 0px;
            }
            .top{
                height: 100px;
                background-color: white;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            .top .logo{
                font-size: 35px;
                font-weight: bold;
                /*border: 1px red solid;*/
            }
            .top .logo img{
                width: 100px;
                vertical-align: middle;
            }
            .top .top-nav{
                font-size: 25px;
                font-weight: bold;
                //*border: 1px red solid;*/
            }
            .top .top-nav a{
                text-decoration: none;
            }
            .nav{
                /*height: 100px;*/
                background-color: blue;
                display: flex;
                justify-content: center;
            }
            .nav ul{
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: black;
            }
            .nav li{
                float: left;
            }
            .nav li a{
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }
            .nav li a:hover{
                background-color: gray;
            }
            .dropdown:hover .dropdown-content {
            display: block;   /*使用block呈現上下排列*/
            }
            li.dropdown:hover{
            background-color: #333;  /*設定背景顏色*/
            }
            .dropdown-content {  /*設定下拉選單內容格式*/
            display: none;
            position: absolute;
            background-color: #333;
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
            .slider{
                /*height: 100px;*/
                /*background-color: white;*/
            }
            .banner{
                /*height: 100px;*/
                background-image: linear-gradient(rgb(12, 12, 12),rgb(255, 255, 255));
                text-align:center;
                color: gray;
            }
            .banner h1{
                padding: 20px;
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
                padding: 40px 200px;
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
                /*height: 100px;*/
                background-color: rgb(247, 134, 134);
                display: flex;
                justify-content: space-around;
                align-items: center;
                padding: 60px 500px;
            }
            .contact .left{
                /*border: 1px red solid;*/
            }
            .contact .left h3{
                padding: 15px 0px;
            }
            .contact .right{
                border: 1px black solid;
                height:300px;
                width:300px;
            }
            .contact .right iframe{
                height: 100%;
                width: 100%;
            }
            .footer{
                height: 50px;
                background-color: rgb(0, 0, 0);
                color: white;
                display: flex;
                align-items: center;
                justify-content: center;
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
        /*佈告欄*/
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

        /*登入彈窗 .modal 主要設定：
        預設隱藏 (display: none)，點登入才出現
        固定位置顯示在視窗右上方（距右50px、距上50px）
        大小是視窗的20%寬高
        背景是半透明白色，內距上方留空，方便排版
        內容超出時會出現滾動條 */
        
    </head>
    <body>
    <div class="top">
            <div class="container">
                <div class="logo">
                  <img src="https://github.com/shhuangmust/html/raw/111-1/IMMUST_LOGO.JPG">
                  明新科技大學資訊管理系
                </div>
                <div class="top-nav">
                  <a href=>明新科大</a>
                  <a href=>明新管理學院</a>
                  <!---跳出登入畫面-->
                  <label onclick="document.getElementById('login').style.display='block'">登入</label>
                  <div id="login" class="modal">
                    <span onclick="document.getElementById('login').style.display='none'">&times; 管理系統登入</span>
                    <form method=post action="10.login.php">
                        帳號：<input type=text name="id"><br />
                        密碼：<input type=password name="pwd"><p></p>
                        <input type=submit value="登入"> <input type=reset value="清除">
                    </form>
                  </div>  
                  <!---登入畫面-->
                </div>
              </div>
        </div>

        /*左邊放學校Logo和系名
        右邊是導覽連結＋登入按鈕
        登入按鈕會開啟一個彈出式登入視窗 */

        <div class="nav">
        <div class="top">
            <div class="logo">
                <img src="螢幕擷取畫面 2024-12-28 122127.png">
                STACCATO 2011手槍鑑賞
            </div>
            <div class="top-nav">
                <a href=#>手槍搭載部件</a>
                <a href=#>建議購買地點</a>
                <a href=#>會員登入</a>
            </div>
        </div>
        <div class="nav">
            <ul>
                <li><a href=#>首頁</a></li>
                <li><a href=#>歷史簡介</a></li>
                <li  class="dropdown"><a href="#faculty">開發人員簡介</a>
                    <div class="dropdown-content">
                        <a href="#faculty">JACK</a>
                        <a href="#faculty">KEN</a>
                        <a href="#faculty">STANLEY</a>
                    </div>  
                <li><a href=#>詢問資訊</a></li>
            </ul>
            
        </div>
        <div class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li><img src="_j61b.oq1b.1.jpg" /></li>
                    <li><img src="下載.jpg" /></li>
                    <li><img src="static-hero-law-enforcement.jpg" /></li>
                </ul>
            </div>
        </div>
        <div class="banner">
            <h1>軍警強烈推薦</h1>
            <h1>可靠耐用好攜帶</h1>
            <h1>全美射擊大賽常駐廠商</h1>
            <h1>全美名列前茅的手槍開發廠商</h1>
        </div>
        <div class="faculty" id="faculty">
            <h2>系列介紹 以上售價都是還沒加稅的售價請詳細斟酌各州的槍枝稅</h2>
            <div class="container">
                <a class="teacher" href="">
                    <img src="STACCATO C2.jpg" />
                    <h3>STACCATO C2</h3>
                    <h3>售價2,299.99(美金)</h3>
                </a>
                <a class="teacher" href="">
                    <img src="STACCATO CS.jpg" />
                    <h3>STACCATO CS</h3>
                    <h3>售價2,499.99(美金)</h3>
               </a>
               <a class="teacher" href="">
                   <img src="STACCO P.jpg" />
                   <h3>STACCO P</h3>
                   <h3>售價2,499.99(美金)</h3>
               </a>
               <a class="teacher" href="">
                 <img src="STACCATO XC.jpg" />
                 <h3>STACCATO XC</h3>
                 <h3>售價4,299.99(美金)</h3>
               </a>        
               <a class="teacher" href="">
                 <img src="STACCATO XL.jpg" />
                 <h3>STACCATO XL</h3>
                 <h3>售價3,800.99(美金)</h3>
               </a>
            </div>
        </div>
        <div class="contact">
            <div class="left">
                <h3>美國</h3>
                <h3>德克薩斯 佛羅倫斯</h3>
                <h3>美國STI國際公司</h3>
                <h3>由於IP位置導致無法完整獲其餘資訊請見諒</h3>
            </div>
            <div class="right">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13702.639891149669!2d-97.80326064280412!3d30.84019249251817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8645258aae044bab%3A0xb7f8b6370b4468e3!2zRmxvcmVuY2UsIOW-t-WFi-iWqeaWryA3NjUyN-e-juWciw!5e0!3m2!1szh-TW!2stw!4v1735362207854!5m2!1szh-TW!2stw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="footer">
             &copy;Copyright 2022 Department of Information Management, MUST. All rights reserved. 維護者 STANLEY ZOU 
        </div>
    </body>
</html>


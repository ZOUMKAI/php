<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{
        echo "
        <html>
            <head><title>新增佈告</title></head>
            <body>
                <form method=post action=23.bulletin_add.php>
                    標    題：<input type=text name=title><br>
                    內    容：<br><textarea name=content rows=20 cols=20></textarea><br>
                    佈告類型：<input type=radio name=type value=1>系上公告 
                            <input type=radio name=type value=2>獲獎資訊
                            <input type=radio name=type value=3>徵才資訊<br>
                    發布時間：<input type=date name=time><p></p>
                    <input type=submit value=新增佈告> <input type=reset value=清除>
                </form>
            </body>
        </html>
        ";
    }
?>
//這段 PHP 程式的功能統整如下：
登入驗證：若尚未登入，顯示提示「please login first」，3 秒後跳轉至登入頁（2.login.html）。
顯示新增佈告表單：
輸入標題（title）
輸入內容（content）
選擇佈告類型（type：1=系上公告、2=獲獎資訊、3=徵才資訊）
選擇發布時間（time）
點選送出後會將資料傳給 23.bulletin_add.php 處理新增動作。
這是用來新增一筆佈告的表單頁面，僅限登入使用者使用。
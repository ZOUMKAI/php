<html>
    <head><title>新增使用者</title></head>
    <body>
<?php        
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{    
        echo "
            <form action=15.user_add.php method=post>
                帳號：<input type=text name=id><br>
                密碼：<input type=text name=pwd><p></p>
                <input type=submit value=新增> <input type=reset value=清除>
            </form>
        ";
    }
?>
    </body>
</html>

//當使用者尚未登入，這段 PHP 會顯示「請登入帳號」，並在 3 秒後跳轉到登入頁面（2.login.html）。
//若使用者已登入，則會顯示一個「新增使用者」的表單，輸入帳號和密碼後，資料會送到 15.user_add.php 處理。
//這段程式主要功能是：驗證登入狀態、未登入就跳轉登入頁、已登入就顯示新增用戶表單
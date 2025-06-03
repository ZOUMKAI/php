<html>
    <head><title>修改使用者</title></head>
    <body>
    <?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'");
        $row=mysqli_fetch_array($result);
        echo "
        <form method=post action=20.user_edit.php>
            <input type=hidden name=id value={$row['id']}>
            帳號：{$row['id']}<br> 
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>
            <input type=submit value=修改>
        </form>
        ";
    }
    ?>
    </body>
</html>
//這段 PHP 程式的功能統整如下：
登入驗證：若未登入，顯示提示並在 3 秒後跳轉登入頁。
從資料庫取得特定使用者資料：依照網址中的 id 查詢對應使用者。
顯示使用者資訊表單：
顯示帳號（不可修改，作為隱藏欄位送出）。
可編輯密碼欄位。
表單送出後會提交到 20.user_edit.php 處理更新。
這是用來修改使用者密碼的編輯頁面。
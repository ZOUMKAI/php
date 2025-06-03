<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $sql="delete from user where id='{$_GET["id"]}'";
        #echo $sql;
        if (!mysqli_query($conn,$sql)){
            echo "使用者刪除錯誤";
        }else{
            echo "使用者刪除成功";
        }
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
    }
?>
//這段 PHP 程式的功能統整如下：
檢查是否登入：未登入者會跳轉至登入頁面。
連接資料庫：連接到 db4free.net 上的 immust 資料庫。
刪除使用者：根據網址參數 ?id=xxx 刪除該 id 對應的使用者資料。
成功或錯誤提示：顯示刪除成功或錯誤的訊息。
自動跳轉：3 秒後跳轉回使用者管理頁（18.user.php）。
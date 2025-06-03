<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $sql="insert into bulletin(title, content, type, time) 
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')";
        if (!mysqli_query($conn, $sql)){
            echo "新增命令錯誤";
        }
        else{
            echo "新增佈告成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }
    }
?>
//這段 PHP 程式的功能統整如下：
登入驗證：未登入者提示「please login first」，3 秒後跳轉登入頁（2.login.html）。
連接資料庫：連接 db4free.net 上的 immust 資料庫。
新增佈告：
從前一頁的表單取得 title、content、type、time 資料
將這些資料新增到 bulletin 資料表中
結果提示與跳轉：
新增成功：顯示成功訊息，3 秒後跳轉到佈告列表頁（11.bulletin.php）
新增失敗：顯示「新增命令錯誤」
總結：這是處理新增佈告表單資料的後端程式，功能完整、結構清楚。
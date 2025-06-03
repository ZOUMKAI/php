<?php

error_reporting(0);
session_start();
if (!$_SESSION["id"]) {
    echo "請登入帳號";
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
}
else{    

   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   #mysqli_query() 從資料庫查詢資料
   #新增資料SQL命令：insert into 表格名稱(欄位1,欄位2) values(欄位1的值,欄位2的值)
   $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')";
   #echo $sql;
   if (!mysqli_query($conn, $sql)) {
     echo "新增命令錯誤";
   }
   else{
     echo "新增使用者成功，三秒鐘後回到網頁";
     echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
   }
}
?>
//這段 PHP 程式的功能是：
檢查是否登入：未登入者跳轉到登入頁。
連接資料庫：連接到 db4free.net 上的 immust 資料庫。
新增使用者：將從表單收到的帳號 (id) 和密碼 (pwd) 新增到 user 資料表中。
新增成功提示：新增成功會顯示訊息，並在 3 秒後跳轉回使用者頁面（18.user.php）。
錯誤處理：新增失敗則顯示錯誤訊息。
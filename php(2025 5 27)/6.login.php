<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;
     }
   } 
   if ($login==TRUE){
      echo "登入成功";
      echo"<meta http-equiv=REFRESH content='3, url=bulletin.php'>";
   }
     
  else {
    echo "帳號/密碼 錯誤,三秒後回到登入頁面";
    echo"<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
     
?>
//這一段程式是基於2.login和3.login登入畫面的更細節版本和連線到資料庫版本以及登入正確和錯誤不同反應機制
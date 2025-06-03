<?php

   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

   $result=mysqli_query($conn, "select * from user");

   while ($row=mysqli_fetch_array($result)) {
     echo $row["id"]." ".$row["pwd"]."<br>";
   } 
?>
//以上程式由於資料庫龐大所以設計一段迴圈來選擇正確的資料
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
    echo "</table>"

?>
//以上程式是布告欄設定和編排，資料來源一樣是用老師提供的資料庫
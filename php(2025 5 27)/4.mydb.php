<?php
#連結資料庫步驟
#步驟一:建立資料庫連結 mysqli_connect()
$conn=mysqli_connect("db4free.net","immust","immustimmust","immust");
#步驟二:查詢資料庫 mysqli_connect()
$result=mysqli_query($conn,"select * from user");
#步驟三:抓出資料 mysqli_fetch_array()
$row=mysqli_fetch_array($result);#抓一筆資料
echo $row["id"] . " " . $row["pwd"] . "<br>";
$row=mysqli_fetch_array($result);#抓一筆資料
echo $row["id"] . " " . $row["pwd"] . "<br>";
$row=mysqli_fetch_array($result);#抓一筆資料
echo $row["id"] . " " . $row["pwd"] . "<br>";
$row=mysqli_fetch_array($result);#抓一筆資料
echo $row["id"] . " " . $row["pwd"] . "<br>";

$row=mysqli_fetch_array($result);
echo $row["id"];
echo" ";
echo $row["pwd"];
echo"<br>";
$row=mysqli_fetch_array($result);

?>
//以上大段都是要如何連線資料庫和如何建立資料庫(資料庫由老師提供)
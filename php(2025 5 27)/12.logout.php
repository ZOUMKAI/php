<?php
  session_start();
  unset($_SESSION["id"]);
  echo"登出成功";
  echo "<meta http-equiv=REFRESH content='3,url=2.login.html>"
?>
//設定使用者的登出連結
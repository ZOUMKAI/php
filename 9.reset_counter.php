<?php
    session_start();
    unset($_SESSION["counter"]);
    echo "counter重置成功....";
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";

?>
//這段程式是清除 session 中的計數器資料顯示訊息後並在2 秒自動跳回主頁
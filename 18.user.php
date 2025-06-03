<html>
    <head><title>使用者管理</title></head>
    <body>
    <?php
        error_reporting(0);
        session_start();
        if (!$_SESSION["id"]) {
            echo "請登入帳號";
            echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
        }
        else{   
            echo "<h1>使用者管理</h1>
                [<a href=14.user_add_form.php>新增使用者</a>] [<a href=11.bulletin.php>回佈告欄列表</a>]<br>
                <table border=1>
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";
            
            $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
            $result=mysqli_query($conn, "select * from user");
            while ($row=mysqli_fetch_array($result)){
                echo "<tr><td><a href=19.user_edit_form.php?id={$row['id']}>修改</a>||<a href=17.user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
            }
            echo "</table>";
        }
    ?> 
    </body>
</html>
//這段 PHP 程式的功能統整如下：
登入檢查：未登入者會提示並在 3 秒後跳轉到登入頁（2.login.html）。
顯示標題與功能選單：顯示「使用者管理」，並提供「新增使用者」與「回佈告欄列表」的連結。
從資料庫抓取所有使用者，用表格列出帳號與密碼。
每筆資料提供操作功能：每位使用者旁邊都會有「修改」和「刪除」的超連結，分別連到 19.user_edit_form.php 和 17.user_delete.php，並帶入該帳號的 ID。
整體來說，這是個簡易的使用者帳號管理後台。
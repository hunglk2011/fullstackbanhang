<?php
if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
    unset($_SESSION['login']);
    header("Location:login.php");
}
?>
<p><a href="index.php?dangxuat=1">Đăng Xuất <?php if(isset($_SESSION['login'])){
        echo $_SESSION['login'];
    } ?></a></p>
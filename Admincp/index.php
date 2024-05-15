<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="css/text" href="../Admincp/css/admincp.css">
    <title>Adminacp</title>
</head>
<style>
    .wrapper {
        border: 1px solid black;
        height: auto;
        width: 90%;
        margin: 0 auto;
    }
</style>

<body>
    <h3>WELCOME TO ADMIN</h3>
    <div class="wrapper">
        <?php
        include("config/config.php");
        include("../Admincp/modules/header.php");
        include("../Admincp/modules/menu.php");
        include("../Admincp/modules/main.php");
        include("../Admincp/modules/footer.php");
        ?>
    </div>
</body>

</html>
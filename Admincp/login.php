<?php
session_start();
include('../Admincp/config/config.php');
if(isset($_POST['login'])){
    $taikhoan=$_POST['username'];
    $matkhau=$_POST['password'];
    $sql="SELECT *FROM table_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
    $row=mysqli_query($mysqli,$sql);
    $count=mysqli_num_rows($row);
    if($count>0){
        $_SESSION['login']=$taikhoan;
        header("Location:index.php");
        header("Location:index.php");
    } else{
        echo '<script> alert("username or password went wrong");</script>';
        header("Location:login.php");
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            background:lightgoldenrodyellow;
        }
        .wrapper-login{
            width: 15%;
            margin-top:15%;
            margin-left: 38%;
            font-family: Arial, Helvetica, sans-serif;
           justify-content: center;
           
        }
        .wrapper-login table{
               background-color:khaki;
        }
        .wrapper-login table tr td{
              font-size: 15px;
              font-weight: bold;
             
        }
        .wrapper-login table tr td input::before {
             width: 100%;
        }
        table.table-login{
            width: 100%;
        }
        table.table-login tr td{
            padding: 10px;
        }
    </style>
</head>

<body>
    
<div class="wrapper-login">
    <form action="" method="post" autocomplete="off">
    <table class="table-login" border="1" style="text-align:center; border-collapse:collapse">
        <tr>
            <Td colspan="2"><h3>Đăng Nhập</h3></Td>
        </tr>
     <tr>
        <td>Tài khoản</td>
        <td><input type="text" name="username"></td>
     </tr>
     <tr>
        <td>Mật Khẩu</td>
        <td><input type="password" name="password"></td>
     </tr>
     <tr>
        
        <td colspan="2"><input type="submit" name="login" value="Login"></td>
     </tr>
    </table>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>
</html>
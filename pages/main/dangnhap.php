<?php
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $matkhau=$_POST['password'];
    $sql="SELECT *FROM table_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
    $row=mysqli_query($mysqli,$sql);
    $count=mysqli_num_rows($row);
    if($count>0){
        $row_data=mysqli_fetch_array($row);
        $_SESSION['dangky']=$row_data['tenkhachhang'];
        header("Location:index.php?quanly=giohang");
    } else{
        echo '<script> alert("username or password went wrong");</script>';
        header("Location:login.php");
    }

}
?>
<form action="" method="post" autocomplete="off">
    <table class="table-login" border="1" style="text-align:center; border-collapse:collapse">
        <tr>
            <Td colspan="2"><h3>Đăng Nhập</h3></Td>
        </tr>
     <tr>
        <td>Tài khoản</td>
        <td><input type="text" name="email" placeholder="email@gmail.com"></td>
     </tr>
     <tr>
        <td>Mật Khẩu</td>
        <td><input type="password" name="password" placeholder="password"></td>
     </tr>
     <tr>
        
        <td colspan="2"><input type="submit" name="login" value="Login"></td>
     </tr>
    </table>
    </form>
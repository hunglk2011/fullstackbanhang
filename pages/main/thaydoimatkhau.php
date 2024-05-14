<?php

if(isset($_POST['changepass'])){
    $taikhoan=$_POST['email'];
    $matkhaucu=$_POST['oldpassword'];
    $matkhaumoi=$_POST['newpassword'];
    $sql="SELECT *FROM table_dangky WHERE email='".$taikhoan."' AND matkhau='".$matkhaucu."' LIMIT 1";
    $row=mysqli_query($mysqli,$sql);
    $count=mysqli_num_rows($row);
    if($count>0){
        $sql_update=mysqli_query($mysqli,"UPDATE table_dangky SET matkhau='$matkhaumoi'");
        echo '<p>password was changed completely</p>';
    } else{
        echo '<p>username or password went wrong</p>';
    
    }

}
?>
<form action="" method="post" autocomplete="off">
    <table class="table-login" border="1" style="text-align:center; border-collapse:collapse">
        <tr>
            <Td colspan="2"><h3>Đổi Mật Khẩu</h3></Td>
        </tr>
     <tr>
        <td>Tài khoản</td>
        <td><input type="text" name="email"></td>
     </tr>
     <tr>
        <td>Mật Khẩu Cũ</td>
        <td><input type="password" name="oldpassword"></td>
     </tr>
     <tr>
        <td>Mật Khẩu Mới</td>
        <td><input type="password" name="newpassword"></td>
     </tr>
     <tr>
        
        <td colspan="3"><input type="submit" name="changepass" value="Đổi Mật Khẩu"></td>
     </tr>
    </table>
    </form>
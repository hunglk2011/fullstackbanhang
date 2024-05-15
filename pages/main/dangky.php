<?php
if (isset($_POST['sign'])) {
    $tenkhach = $_POST['hovaten'];
    $email = $_POST['email'];
    $diachi = $_POST['diachi'];
    $matkhau = $_POST['matkhau'];
    $Dienthoai = $_POST['dienthoai'];
    $sql_dangky = mysqli_query($mysqli, "INSERT INTO table_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE
    ('$tenkhach','$email','$diachi','$matkhau','$Dienthoai')");
    if ($sql_dangky) {
        echo '<p style="color:green;">Đăng ký thành công</p>';
        $_SESSION['dangky'] = $tenkhach;

        $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
        header("Location:index.php?quanly=giohang");
    }
}
?>

<p>Đăng ký</p>

<style>
    table.dangky tr td {
        padding: 5px;
    }
</style>

<form action="" method="post">
    <table class="dangky" border="1" width="50%" style="border-collapse:collapse;">
        <tr>
            <td>Họ và tên</td>
            <td><input type="text" size="40" name="hovaten"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" size="40" name="email"></td>
        </tr>
        <tr>
            <td>Địa Chỉ</td>
            <td><input type="text" size="40" name="diachi"></td>
        </tr>
        <tr>
            <td>Mật Khẩu</td>
            <td><input type="password" size="40" name="matkhau"></td>
        </tr>
        <tr>
            <td>Điện Thoại</td>
            <td><input type="text" size="40" name="dienthoai"></td>
        </tr>
        <tr>
            <td><input type="submit" name="sign" value="Đăng Ký"></td>
            <td><a href="index.php?quanly=dangnhap">Đăng Nhập Tài Khoản Đã Đăng Ký</a></td>
        </tr>
    </table>
</form>
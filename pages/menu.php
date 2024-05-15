<?php
include("Admincp/config/config.php");
$sql_danhmuc = "SELECT *FROM table_danhmuc ORDER BY id DESC";
$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
?>
<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['dangky']);
}
?>
<div class="menu">
    <ul class="list_menu">
        <li><a href="index.php"><i class="fa fa-home"></i> Trang Chủ</a></li>
        <?php
        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
        ?>
            <li><a href="index.php?quanly=danhmucsanpham&idd=<?php echo $row_danhmuc['id']; ?>"><?php echo $row_danhmuc['tendanhmuc']; ?></a></li>
        <?php } ?>
        <li><a href="index.php?quanly=giohang"><i class="fa fa-shopping-bag"></i> Giỏ Hàng</a></li>
        <li><a href="index.php?quanly=lienhe"><i class="fa fa-phone"></i> Liên Hệ</a></li>
        <?php
        if (isset($_SESSION['dangky'])) {
        ?>
            <li><a href="index.php?dangxuat=1"><i class="fa fa-sign-out"></i> Đăng Xuất<i class="fa fa-logout"></i></a></li>
            <li><a href="index.php?quanly=thaydoimatkhau"><i class="fa fa-stack-exchange"></i> Đổi Mật Khẩu</a></li>
        <?php
        } else {
        ?>
            <li><a href="index.php?quanly=dangky"><i class="fa fa-sign-in"></i> Đăng Ký</a></li>
        <?php
        }
        ?>
    </ul>
</div>
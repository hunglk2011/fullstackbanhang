<?php
session_start();
include('../../Admincp/config/config.php');
$id_khachhang = $_SESSION['id_khachhang'];
$code_cart = rand(0, 9999);
$insert_cart = "INSERT INTO table_giohang(id_khachhang,code_cart,cart_status)
 VALUE('$id_khachhang','$code_cart',1)";
$cart_query = mysqli_query($mysqli, $insert_cart);
if ($insert_cart) {
    foreach ($_SESSION['cart'] as $key => $value) {
        $id_sanpham = $value['idsanpham'];
        $soluong = $value['soluong'];
        $insert_order_detail = "INSERT INTO table_giohang_chitiet(id_sanpham,code_cart,soluongmua)
       VALUE('$id_sanpham','$code_cart','$soluong')";
        mysqli_query($mysqli, $insert_order_detail);
    }
}
unset($_SESSION['cart']);
header('Location:../../index.php?quanly=camon');

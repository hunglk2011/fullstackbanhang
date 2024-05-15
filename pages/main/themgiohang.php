<?php
session_start();
include("../../Admincp/config/config.php");
//cong
if (isset($_GET['cong'])) {
    $id = $_GET['cong'];
    foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['idsanpham'] != $id) {
            $product[] = array('tensanpham' => $cart_item['tensanpham'], 'idsanpham' => $cart_item['idsanpham'], 'soluong' => $cart_item['soluong'], 'hinhanh' => $cart_item['hinh'], 'giasp' => $cart_item['giasp']);
            $_SESSION['cart'] = $product;
        } else {
            $tangsoluong = $cart_item['soluong'] + 1;
            if ($cart_item['soluong'] < 9) {
                $product[] = array('tensanpham' => $cart_item['tensanpham'], 'idsanpham' => $cart_item['idsanpham'], 'soluong' => $tangsoluong, 'hinhanh' => $cart_item['hinh'], 'giasp' => $cart_item['giasp']);
            } else {
                $product[] = array('tensanpham' => $cart_item['tensanpham'], 'idsanpham' => $cart_item['idsanpham'], 'soluong' => $cart_item['soluong'], 'hinhanh' => $cart_item['hinh'], 'giasp' => $cart_item['giasp']);
            }
            $_SESSION['cart'] = $product;
        }
    }
    header("Location:../../index.php?quanly=giohang");
}
//tru
if (isset($_GET['tru'])) {
    $id = $_GET['tru'];
    foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['idsanpham'] != $id) {
            $product[] = array('tensanpham' => $cart_item['tensanpham'], 'idsanpham' => $cart_item['idsanpham'], 'soluong' => $cart_item['soluong'], 'hinhanh' => $cart_item['hinh'], 'giasp' => $cart_item['giasp']);
            $_SESSION['cart'] = $product;
        } else {
            $trusoluong = $cart_item['soluong'] - 1;
            if ($cart_item['soluong'] > 1) {
                $product[] = array('tensanpham' => $cart_item['tensanpham'], 'idsanpham' => $cart_item['idsanpham'], 'soluong' => $trusoluong, 'hinhanh' => $cart_item['hinh'], 'giasp' => $cart_item['giasp']);
            } else {
                $product[] = array('tensanpham' => $cart_item['tensanpham'], 'idsanpham' => $cart_item['idsanpham'], 'soluong' => $cart_item['soluong'], 'hinhanh' => $cart_item['hinh'], 'giasp' => $cart_item['giasp']);
            }
            $_SESSION['cart'] = $product;
        }
    }
    header("Location:../../index.php?quanly=giohang");
}
//xoa
if (isset($_SESSION['cart']) && isset($_GET['xoa'])) {
    $id = $_GET['xoa'];
    foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['idsanpham'] != $id) {
            $product[] = array('tensanpham' => $cart_item['tensanpham'], 'idsanpham' => $cart_item['idsanpham'], 'soluong' => $soluong, 'hinhanh' => $cart_item['hinh'], 'giasp' => $cart_item['giasp']);
        }
        $_SESSION['cart'] = $product;
        header("Location:../../index.php?quanly=giohang");
    }
}
//xoa tat ca
if (isset($_GET['xoatatca']) && $_GET['xoatatca'] == 1) {
    unset($_SESSION['cart']);
    header("Location:../../index.php?quanly=giohang");
}
if (isset($_POST['themgiohang'])) {
    //  session_destroy();
    $id = $_GET['idsanpham'];
    $soluong = 1;
    $sql = "SELECT *FROM table_sanpham WHERE id_sanpham='" . $id . "' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($query);
    if ($row) {
        //     $new_product=array(array('tensanpham'=>$row['tensanpham'],'id'=>$id,'soluong'=>$soluong
        // ,'giasp'=>$row['gia'],'hinhanh'=>$row['hinh'],'masp'=>$row['masp']));
        // if(isset($_SESSION['cart'])){
        //     $found=false;
        //     foreach($_SESSION['cart'] as $cart_item){
        //          if($cart_item['id']==$id){
        //             $product=array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$soluong+1
        //             ,'giasp'=>$cart_item['gia'],'hinhanh'=>$cart_item['hinh'],'masp'=>$cart_item['masp']);
        //           $found=true;
        //          }else{
        //             $product=array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$soluong
        //             ,'giasp'=>$cart_item['gia'],'hinhanh'=>$cart_item['hinh'],'masp'=>$cart_item['masp']);
        //           $found=true;
        //          }
        //     }
        //     if($found==false){
        //     $_SESSION['cart']=array_merge($product,$new_product);
        //     }else {
        //     $_SESSION['cart']=$product;
        //     }
        // } else {
        //     $_SESSION['cart']=$new_product;
        // }
        // }
        $new_product = array(array('tensanpham' => $row['tensanpham'], 'idsanpham' => $row['id_sanpham'], 'soluong' => $soluong, 'hinhanh' => $row['hinh'], 'giasp' => $row['gia']));
        if (isset($_SESSION['cart'])) {
            $found = false;
            foreach ($_SESSION['cart'] as $cart_item) {
                if ($cart_item['idsanpham'] == $id) {
                    $soluong += $cart_item['soluong'];
                    $product[] = array('tensanpham' => $cart_item['tensanpham'], 'idsanpham' => $cart_item['idsanpham'], 'soluong' => $soluong, 'hinhanh' => $cart_item['hinh'], 'giasp' => $cart_item['giasp']);
                    $found = true;
                } else {
                    $product[] = array('tensanpham' => $cart_item['tensanpham'], 'idsanpham' => $cart_item['idsanpham'], 'soluong' => $cart_item['soluong'], 'hinhanh' => $cart_item['hinh'], 'giasp' => $cart_item['giasp']);
                }
            }
            if ($found == false) {
                $_SESSION['cart'] = array_merge($product, $new_product);
            } else {
                $_SESSION['cart'] = $product;
            }
        } else {
            $_SESSION['cart'] = $new_product;
        }
    }
    header("Location:../../index.php?quanly=giohang");
}

?>
<!-- $row['tensanpham'], 'idsanpham'=>$row['id_sanpham'], 'soluong'=>$soluong, 'dongia'=>$row['dongia']));
if(isset($_SESSION['cart'])){
$found=false;
foreach($_SESSION['cart'] as $cart_item){
if($cart_item['idsanpham']==$id){
$soluong+=$cart_item['soluong'];
$product[]=array('tensanpham'=>$cart_item['tensanpham'], 'idsanpham'=>$cart_item['idsanpham'], 'soluong'=>$soluong, 'dongia'=>$cart_item['dongia']);
$found=true;
}else{
$product[]=array('tensanpham'=>$cart_item['tensanpham'], 'idsanpham'=>$cart_item['idsanpham'], 'soluong'=>$cart_item['soluong'], 'dongia'=>$cart_item['dongia']);
}
}
if($found==false){
$_SESSION['cart']=array_merge($product,$new_product);
}else{
$_SESSION['cart']=$product;
}
}else{
$_SESSION['cart']=$new_product;
}
}  -->
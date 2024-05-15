<?php 
include("../../config/config.php");
    $tenloaisp = $_POST['tendanhmuc'];
    $thutu = $_POST['thuthu'];
    if(isset($_POST["themdanhmuc"])){
        $sql_them = "INSERT INTO table_danhmuc(tendanhmuc,thutu) VALUE (' ".$tenloaisp." ', ' ".$thutu." ')";
        mysqli_query($mysqli,$sql_them);
        header("Location: ../../index.php?action=quanlydanhmucsanpham&query=them");
    }elseif(isset($_POST["suadanhmuc"])){
        $sql_update= "UPDATE  table_danhmuc SET tendanhmuc='".$tenloaisp."',thutu='".$thutu."' WHERE id='$_GET[iddanhmuc]'";
        mysqli_query($mysqli,$sql_update);
        header("Location: ../../index.php?action=quanlydanhmucsanpham&query=them");
    }else{
        $id=$_GET['iddanhmuc'];
        $sql_xoa="DELETE FROM table_danhmuc WHERE id=$id";
        mysqli_query($mysqli,$sql_xoa);
        header("Location: ../../index.php?action=quanlydanhmucsanpham&query=them");
    }
?>
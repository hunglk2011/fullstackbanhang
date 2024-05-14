<?php 
include("../../config/config.php");
    $tensanpham = $_POST['tensanpham'];
    $masp = $_POST['masp'];
    $giasp = $_POST['giasp'];
    $soluong = $_POST['soluong'];
    $hinh=$_FILES['hinhanh']['name'];
    $hinh_tmp=$_FILES['hinhanh']['tmp_name'];
    $hinhanhpath=basename($_FILES['hinhanh']['name']);
    $hinh_time=time()."_".$hinh;
    $noidung = $_POST['noidung'];
    $tinhtrang = $_POST['tinhtrang'];
    $id_danhmuc=$_POST['danhmuc'];
    //xulyhinh
   



    if(isset($_POST["themsanpham"])){
        $sql_them = "INSERT INTO table_sanpham(tensanpham,masp,gia,soluong,hinh,noidung,tinhtrang,id_danhmuc) 
        VALUE ('".$tensanpham." ',' ".$masp." ',' ".$giasp." ',' ".$soluong." ',' ".$hinh." ',' ".$noidung." ',' ".$tinhtrang." ',' ".$id_danhmuc."')";
        mysqli_query($mysqli,$sql_them);
       move_uploaded_file($hinh_tmp,'uploads/'.$hinh);
        header("Location: ../../index.php?action=quanlysp&query=them");
    }elseif(isset($_POST["suasanpham"])){
         if($hinh!=''){
            move_uploaded_file($hinh_tmp,'uploads/'.$hinh);  
            $sql="SELECT *FROM table_sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
        $query=mysqli_query($mysqli,$sql);
        while($row=mysqli_fetch_array($query)){
            unlink('uploads/'.$row['hinh']);
        }
        $sql_update= "UPDATE table_sanpham SET 
        tensanpham='".$tensanpham."',masp='".$masp."',gia='".$giasp."',soluong='".$soluong."',hinh='".$hinh."',noidung='".$noidung."',tinhtrang='".$tinhtrang."',id_danhmuc='".$id_danhmuc."' WHERE id_sanpham='$_GET[idsanpham]'";
      
    } else{
            $sql_update= "UPDATE table_sanpham SET 
          tensanpham='".$tensanpham."',masp='".$masp."',gia='".$giasp."',soluong='".$soluong."',noidung='".$noidung."',tinhtrang='".$tinhtrang."',id_danhmuc='".$id_danhmuc."' WHERE id_sanpham='$_GET[idsanpham]'";
        //   $sql_update="UPDATE table_sanpham SET 
        //   tensanpham=$tensanpham,masp=$masp,gia=$giasp,soluong=$soluong,noidung=$noidung,tinhtrang=$tinhtrang,id_danhmuc=$id_danhmuc WHERE id_sanpham='$_GET[idsanpham]'";
    }
       mysqli_query($mysqli,$sql_update);
        header("Location: ../../index.php?action=quanlysp&query=them");
    
    }else{
        $id=$_GET['idsanpham'];
        $sql="SELECT *FROM table_sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
        $query=mysqli_query($mysqli,$sql);
        while($row=mysqli_fetch_array($query)){
            unlink('uploads/'.$row['hinh']);
        }
        $sql_xoa="DELETE FROM table_sanpham WHERE id_sanpham='".$id."'";
      
        mysqli_query($mysqli,$sql_xoa);
        header("Location: ../../index.php?action=quanlysp&query=them");
    }


?>
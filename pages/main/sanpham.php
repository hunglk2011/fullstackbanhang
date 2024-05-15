<h2>Chi Tiet San Pham</h2>
<?php
$sql_pro = "SELECT * FROM table_sanpham,table_danhmuc WHERE table_sanpham.id_danhmuc=table_danhmuc.id 
AND table_sanpham.id_sanpham='$_GET[idd]'
 LIMIT 1";
$query_pro = mysqli_query($mysqli, $sql_pro);
while ($row_sp = mysqli_fetch_array($query_pro)) {
?>
    <div class="wrapper_detail">
        <div class="hinhanh_sp">
            <img width="60%" src="Admincp/modules/quanlysanpham/uploads/<?php echo $row_sp['hinh']; ?>">
        </div>
        <form method="post" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_sp['id_sanpham'] ?>" enctype="multipart/form-data">
            <div class="chitiet_sp">
                <p>Danh Mục:<?php echo $row_sp['tendanhmuc'] ?></p>
                <h3 style="margin:0;font-family:Arial, Helvetica, sans-serif;">Tên Sản Phẩm:<?php echo $row_sp['tensanpham'] ?></h3>
                <p>Mã Sản Phẩm:<?php echo $row_sp['masp'] ?></p>
                <p>Giá:<?php echo $row_sp['gia'] . "vnd" ?></p>
                <p>Số lượng:<?php echo $row_sp['soluong'] ?></p>
                <input type="submit" class="addtocart" name="themgiohang" value="Thêm Giỏ Hàng">
            </div>
        </form>
    </div>
<?php
}
?>
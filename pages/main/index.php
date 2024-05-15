<?php
include("Admincp/config/config.php");
$sql_pro = "SELECT *FROM table_sanpham,table_danhmuc WHERE table_sanpham.id_danhmuc=table_danhmuc.id 
ORDER BY table_sanpham.id_sanpham DESC LIMIT 25";
$query_pro = mysqli_query($mysqli, $sql_pro);
?>

<h3>Gợi Ý Sản Phẩm</h3>
<ul class="product_list">
    <?php
    while ($row = mysqli_fetch_array($query_pro)) {
    ?>
        <li>
            <a href="index.php?quanly=sanpham&idd=<?php echo $row['id_sanpham']; ?>">
                <img src="Admincp/modules/quanlysanpham/uploads/<?php echo $row['hinh']; ?>">
                <p class="title_product"><?php echo $row['tensanpham']; ?></p>
                <p class="title_price" style="font-family:Arial, Helvetica, sans-serif;color:brown;"><?php echo $row['gia'] . "vnd"; ?></p>
                <p style="text-align:center;color:black;font-family:Arial, Helvetica, sans-serif;"><?php echo $row['tendanhmuc'] ?></p>
            </a>
        </li>
    <?php
    }
    ?>
</ul>
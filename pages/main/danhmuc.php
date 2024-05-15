<?php
$sql_pro = "SELECT *FROM table_sanpham WHERE table_sanpham.id_danhmuc='$_GET[idd]' ORDER BY table_sanpham.id_sanpham DESC";
$query_pro = mysqli_query($mysqli, $sql_pro);
?>

<h3>Danh Muc San Pham</h3>
<ul class="product_list">
    <?php
    while ($row_pro = mysqli_fetch_array($query_pro)) {
    ?>
        <li>
            <a href="index.php?quanly=sanpham&idd=<?php echo $row_pro['id_sanpham']; ?>">
                <img src="Admincp/modules/quanlysanpham/uploads/<?php echo $row_pro['hinh']; ?>">
                <p class="title_product"><?php echo $row_pro['tensanpham']; ?></p>
                <p class="title_price"><?php echo $row_pro['gia'] . "vnd"; ?></p>
            </a>
        </li>
    <?php
    }
    ?>
</ul>
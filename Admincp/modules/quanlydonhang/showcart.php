<p>Xem Don Hang</p>
<?php
$sql_lietke_dh="SELECT *FROM table_giohang_chitiet, table_sanpham
WHERE table_giohang_chitiet.id_sanpham=table_sanpham.id_sanpham
AND table_giohang_chitiet.code_cart='$_GET[code]' ORDER BY table_giohang_chitiet.id_cart_detail DESC";
$query_lietke_dh=mysqli_query($mysqli,$sql_lietke_dh);
?>
<table style="width:100%" border="1px"style="border-collapse:collapse;">
  <tr>
  <th>ID</th>
    <th>Ma don hang</th>
    <th>Ten san pham</th>
    <th>So luong</th>
    <th>Don gia</th>
    <th>Thanh tien</th>
 
  </tr>
  <?php
  $i=0;
  $tongtien=0;
  while($row=mysqli_fetch_array($query_lietke_dh)){
    $i++;
    $thanhtien=$row['gia']*$row['soluongmua'];
    $tongtien+=$thanhtien;
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row['code_cart']; ?></td>
    <td><?php echo $row['tensanpham']; ?></td>
    <td><?php echo $row['soluongmua']; ?></td>
    <td><?php echo $row['gia']; ?></td>
    <td><?php echo ($row['gia']*$row['soluongmua']).".000vnd"; ?></td>
  </tr>
  <?php
   }
 ?>
  <tr colspan="6">
       <td colspan="6"><p>Tổng Tiền: <?php echo $tongtien.".000vnd";?></p></td>
    </tr>
</table>
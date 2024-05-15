<p>Liet Ke Don Hang</p>
<?php
$sql_lietke_dh="SELECT *FROM table_giohang, table_dangky
WHERE table_giohang.id_khachhang=table_dangky.id_dangky ORDER BY table_giohang.id_cart DESC";
$query_lietke_dh=mysqli_query($mysqli,$sql_lietke_dh);
?>
<table style="width:100%" border="1px"style="border-collapse:collapse;">
  <tr>
  <th>ID</th>
    <th>Ma don hang</th>
    <th>Ten khach hang</th>
    <th>Dia chi</th>
    <th>Email</th>
    <th>Quan Ly</th>
 
  </tr>
  <?php
  $i=0;
  while($row=mysqli_fetch_array($query_lietke_dh)){
    $i++;
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row['code_cart']; ?></td>
    <td><?php echo $row['tenkhachhang']; ?></td>
    <td><?php echo $row['diachi']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td>
        <?php
          if($row['cart_status']==1){
              echo "Don hang moi";
          } else {
              echo "Da xem";
          }
        ?>
    </td>
    <td>
    <a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart'];?>">Show</a>
  </tr>
  <?php
   }
 ?>
</table>
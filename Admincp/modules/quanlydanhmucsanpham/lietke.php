<?php
$sql_lietke_danhmucsp="SELECT *FROM table_danhmuc ORDER BY thutu DESC";
$query_lietke_danhmucsp=mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>
<p>Liet Ke San Pham</p>
<table style="width:100%" border="1px"style="border-collapse:collapse;">
  <tr>
  <th>ID</th>
    <th>Ten danh muc</th>
    <th>Thu tu</th>
    <th>Quan Ly</th>
 
  </tr>
  <?php
  $i=0;
  while($row=mysqli_fetch_array($query_lietke_danhmucsp)){
    $i++;
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row['tendanhmuc']; ?></td>
    <td><?php echo $row['thutu']; ?></td>
    <td>
    <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id'];?>">Sua</a>|<a href="modules/quanlydanhmucsanpham/xuly.php?iddanhmuc=<?php echo $row['id'];?>">Xoa</a>
    </td>
  </tr>
  <?php
   }
 ?>
</table>
<?php
include("config/config.php");
$sql_lietke_sp="SELECT *FROM table_sanpham,table_danhmuc WHERE table_sanpham.id_danhmuc=table_danhmuc.id ORDER BY id_sanpham DESC";
$query_lietke_sp=mysqli_query($mysqli,$sql_lietke_sp);
?>
<p>Liet Ke San Pham</p>
<table style="width:100%" border="1px"style="border-collapse:collapse;">
  <tr>
  <th>ID</th>
    <th>Ten san pham</th>
    <th>Hinh</th>
    <th>Gia</th>
    <th>So luong</th>
    <th>Ma san pham</th>
    <th>trang thai</th>
    <th>Danh muc</th>
 
  </tr>
  <?php
  $i=0;
  while($row=mysqli_fetch_array($query_lietke_sp)){
    $i++;
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row['tensanpham']; ?></td>
    <td><img src="Admincp/modules/quanlysanpham/uploads/<?php echo $row['hinh']; ?>"></td>
    <td><?php echo $row['gia']; ?></td>
    <td><?php echo $row['soluong']; ?></td>
    <td><?php echo $row['masp']; ?></td>
    <td><?php if($row['tinhtrang']==1){
            echo "kich hoat";
    } else {
      echo "An";
    }  
    ?></td>
     <td><?php echo $row['tendanhmuc']; ?></td>
    <td>
    <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'];?>">Sua</a>|<a href="modules/quanlysanpham/xuly.php?idsanpham=<?php echo $row['id_sanpham'];?>">Xoa</a>
    </td>
  </tr>
  <?php
   }
 ?>
</table>
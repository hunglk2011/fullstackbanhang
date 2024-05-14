<?php

if(isset($_SESSION['dangky'])){
  echo "Xin Chào ".$_SESSION['dangky'];
  // echo $_SESSION['id_khachhang'];
}
?>
<table style="width:100%; text-align:center;border-collapse:collapse" border="1">
  <tr>
    <th>Id</th>
    <th>Ten san pham</th>
    <th>Hinh anh</th>
    <th>So luong</th>
    <th>Gia sp</th>
    <th>Thanh tien</th>
    <th>Xoa</th>
  </tr>
  <?php
  if(isset($_SESSION['cart'])){
    $i=0;
    $tongtien=0;
    foreach($_SESSION['cart'] as $cart_item){
    // $total_price =$cart_item['soluong']* $cart_item['giasp'];
    $total_price=$cart_item['soluong']*$cart_item['giasp'];
      $tongtien+=$total_price;
      $i++;
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $cart_item['tensanpham']; ?></td>
    <td><img src="../../Admincp//modules/quanlysanpham/uploads/<?php echo  $cart_item['hinhanh']; ?>"></td>
    <td>
      <a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['idsanpham'];?>"><i class="fa fa-plus-square"></i></a>
      <?php echo  $cart_item['soluong']; ?>
      <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['idsanpham'];?>"><i class="fa fa-minus-square"></i></a>
    </td>
    <td><?php echo  $cart_item['giasp']."vnd"; ?></td>
    <td><?php echo  $total_price.".000vnd"; ?></td>
    <td><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['idsanpham'];?>">xoa</a></td>
  </tr>
  <?php
    }
    ?>
     <tr>
    <td colspan="7"><p style="float: left;">Total:<?php echo $tongtien.".000vnd"; ?></p></td>
    <td colspan="7"><a href="pages/main/themgiohang.php?xoatatca=1"><p style="float: right;">Delete All</p></a></td>
  </tr>
  <tr>
    <?php
    if(isset($_SESSION['dangky'])){
  ?>
   <p style="text-align:center;"><a href="pages/main/thanhtoan.php">Đặt Hàng</a></p>
   <?php
    } else{
   ?>
     <p style="text-align:center;"><a href="index.php?quanly=dangky">Đăng Ký</a></p>
  <?php
    }
  ?>
  </tr>
    <?php
  } else {
  ?>
  <tr>
    <td colspan="7">Gio hang trong</td>
  </tr>
  <?php
  }
  ?>
</table>
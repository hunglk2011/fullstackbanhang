<p>Them San Pham</p>
<table border="1px" width="50%" style="border-collapse:collapse;">
<form method="post" action="modules/quanlysanpham/xuly.php" enctype="multipart/form-data">
 <tr>
    <td>Ten san pham</td>
    <td><input type="text" name="tensanpham" value=""></td>
   
  </tr>
  <tr>
    <td>Ma san pham</td>
    <td><input type="text" name="masp" value=""></td>
   
  </tr>
  <tr>
    <td>Hinh anh</td>
    <td><input type="file" name="hinhanh"></td>
   
  </tr>
  <tr>
    <td>Gia sp</td>
    <td><input type="text" name="giasp" value=""></td>
   
  </tr>
  <tr>
    <td>So luong</td>
    <td><input type="text" name="soluong" value=""></td>
   
  </tr>
  <tr>
    <td>Noi dung</td>
    <td><textarea name="noidung" rows="5"></textarea></td>
   
  </tr>
 <tr>
    <td>Danh Muc san pham</td>
    <td>
      <select name="danhmuc">
       <?php
        $sql_danhmuc="SELECT *FROM table_danhmuc ORDER BY id DESC";
        $query_danhmuc=mysqli_query($mysqli,$sql_danhmuc);
        while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
       ?>
       <option value="<?php echo $row_danhmuc['id']; ?>"><?php echo $row_danhmuc['tendanhmuc']; ?></option>
       <?php
        }
       ?>
      </select>
    </td>
  </tr>
  <tr>
    <td>Tinh trang</td>
    <td>
      <select name="tinhtrang">
        <option value="1">Kich hoat</option>
        <option value="0">An</option>
      </select>
    </td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="themsanpham" value="them san pham"></td>
  </tr>

  </form>
</table>
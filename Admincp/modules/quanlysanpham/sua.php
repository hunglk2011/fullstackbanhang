<?php
include("config/config.php");
$sql_sua_suasp="SELECT *FROM table_sanpham WHERE id_sanpham ='$_GET[idsanpham]' LIMIT 1";
$query_sua_sp=mysqli_query($mysqli, $sql_sua_suasp);
?>
<p>Sua San Pham</p>
<table border="1px" width="50%" style="border-collapse:collapse;">
<?php
while($row=mysqli_fetch_array($query_sua_sp)){
?>
<form method="post" action="modules/quanlysanpham/xuly.php?idsanpham=<?php echo $row['id_sanpham'];?>" enctype="multipart/form-data">
 <tr>
    <td>Ten san pham</td>
    <td><input type="text" name="tensanpham" value="<?php echo $row['tensanpham']; ?>"></td>
   
  </tr>
  <tr>
    <td>Ma san pham</td>
    <td>
      <input type="text" name="masp" value="<?php echo $row['masp']; ?>">
     
    </td>
    
  </tr>
  <tr>
    <td>Hinh anh</td>
    <td><input type="file" name="hinhanh" value="<?php echo $row['hinh']; ?>">
    <img src="modules/quanlysanpham/uploads/<?php echo $row['hinh'];?>" width="150px">
  </td>
     
  </tr>
  <tr>
    <td>Gia sp</td>
    <td><input type="text" name="giasp" value="<?php echo $row['gia']; ?>"></td>
   
  </tr>
  <tr>
    <td>So luong</td>
    <td><input type="text" name="soluong" value="<?php echo $row['soluong']; ?>"></td>
   
  </tr>
  <tr>
    <td>Noi dung</td>
    <td><textarea name="noidung" rows="5"<?php echo $row['noidung']; ?>></textarea></td>
   
  </tr>
  <tr>
    <td>Danh Muc san pham</td>
    <td>
      <select name="danhmuc">
       <?php
        $sql_danhmuc="SELECT *FROM table_danhmuc ORDER BY id DESC";
        $query_danhmuc=mysqli_query($mysqli,$sql_danhmuc);
        while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
              if($row_danhmuc['id']==$row['id_danhmuc']){
       ?>
       <option selected value="<?php echo $row_danhmuc['id']; ?>"><?php echo $row_danhmuc['tendanhmuc']; ?></option>
       <?php
              } else{
        
       ?>
       <option  value="<?php echo $row_danhmuc['id']; ?>"><?php echo $row_danhmuc['tendanhmuc']; ?></option>
        <?php
              }
            }
       ?>
      </select>
    </td>
  </tr>
  <tr>
    <td>Tinh trang</td>
    <td>
      <select name="tinhtrang">
        <?php
        if($row['tinhtrang']==1){

        ?>
        <option value="1" selected>Kich hoat</option>
        <option value="0">An</option>
        <?php
        }else{
        ?>
         <option value="1" selected>Kich hoat</option>
        <option value="0" selected>An</option>
        <?php
        }
        ?>
      </select>
    </td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="suasanpham" value="sua san pham"></td>
  </tr>

  </form>
  <?php
}
  ?>
</table>
<?php
$sql_sua_danhmucsp="SELECT *FROM table_danhmuc WHERE id='$_GET[iddanhmuc];' LIMIT 1";
$query_sua_danhmucsp=mysqli_query($mysqli,$sql_sua_danhmucsp);
?>
<p>Sua Danh Muc San Pham</p>
<table border="1px" width="50%" style="border-collapse:collapse;">
<form method="post" action="modules/quanlydanhmucsanpham/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'];?>">
    <?php
    while($dong=mysqli_fetch_array($query_sua_danhmucsp)){
    ?>
 <tr>
    <td>Ten danh muc</td>
    <td><input type="text" name="tendanhmuc" value="<?php echo $dong['tendanhmuc']; ?>"></td>
   
  </tr>
  <tr>
    <td>Thu tu</td>
    <td><input type="text" name="thutu" value="<?php echo $dong['thutu']; ?>"></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="suadanhmuc" value="sua danh muc san pham"></td>
  </tr>
<?php
    }
?>
  </form>
</table>
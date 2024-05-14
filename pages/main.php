
<div class="main">
<div class="clear"></div>
         <?php
        include("pages/sidebar/sidebar.php");
        ?>
          <div class="maincontent">
          <?php
           if(isset($_GET['quanly'])){
            $tmp=$_GET['quanly'];
           } else {
            $tmp="";
           }
           if($tmp=='danhmucsanpham'){
            include("main/danhmuc.php");
           } else if($tmp=='giohang'){
             include("main/giohang.php");
           } else if($tmp=='lienhe'){
            include("main/lienhe.php");
           }else if($tmp=='sanpham'){
            include("main/sanpham.php");
           }else if($tmp=='dangky'){
            include("main/dangky.php");
           }else if($tmp=='thanhtoan'){
            include("main/thanhtoan.php");
           }else if($tmp=='dangnhap'){
            include("main/dangnhap.php");
           }else if($tmp=='camon'){
            include("main/camon.php");
           }else if($tmp=='thaydoimatkhau'){
            include("main/thaydoimatkhau.php");
           }else {
            include("main/index.php");
           }
          ?>
          </div>
          <div class="clear"></div>
        </div>

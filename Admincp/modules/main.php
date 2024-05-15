<div class="clear"></div>
<div class="main">
    <?php
    if (isset($_GET['action']) && $_GET['query']) {
        $tmp = $_GET['action'];
        $query = $_GET['query'];
    } else {
        $tmp = "";
        $query = '';
    }

    if ($tmp == 'quanlydanhmucsanpham' && $query == 'them') {
        include("modules/quanlydanhmucsanpham/them.php");
        include("modules/quanlydanhmucsanpham/lietke.php");
    } elseif ($tmp == 'quanlydanhmucsanpham' && $query == 'sua') {
        include("modules/quanlydanhmucsanpham/sua.php");
    } elseif ($tmp == 'quanlysp' && $query == 'them') {
        include("modules/quanlysanpham/them.php");
        include("modules/quanlysanpham/lietke.php");
    } elseif ($tmp == 'quanlysp' && $query == 'sua') {
        include("modules/quanlysanpham/sua.php");
    } elseif ($tmp == 'quanlydonhang' && $query == 'lietke') {
        include("modules/quanlydonhang/lietke.php");
    } elseif ($tmp == 'donhang' && $query == 'xemdonhang') {
        include("modules/quanlydonhang/showcart.php");
    } else {
        include("modules/dashboard.php");
    }
    ?>
</div>
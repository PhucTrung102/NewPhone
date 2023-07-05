<div class="menu">
    <div class="menu_block">
        <div class="menu-contatiner">
            <?php
            if (isset($_GET['quanly'])) {
                $tam = $_GET['quanly'];
            } else {
                $tam = '';
            }
            if ($tam == 'tintuc') {
                include("main/tintuc.php");
            } elseif ($tam == 'lienhe') {
                include("main/lienhe.php");
            } elseif ($tam == 'sanpham') {
                include("main/sanpham.php");
            } elseif ($tam == 'giohang') {
                include("main/giohang.php");
            } elseif ($tam == 'dangky') {
                include("main/dangky.php");
            } elseif ($tam == 'thanhtoan') {
                include("main/thanhtoan.php");
            } elseif ($tam == 'dangnhap') {
                include("main/dangnhap.php");
            } elseif ($tam == 'timkiem') {
                include("main/timkiem.php");
            } elseif ($tam == 'camon') {
                include("main/camon.php");
            } elseif ($tam == 'smember') {
                include("main/smember.php");
            } elseif ($tam == 'vanchuyen') {
                include("main/vanchuyen.php");
            } elseif ($tam == 'thongtinthanhtoan') {
                include("main/thongtinthanhtoan.php");
            } elseif ($tam == 'donhangdadat') {
                include("main/donhangdadat.php");
            } else {
                include("main/index.php");
            }
            ?>
        </div>
    </div>
</div>
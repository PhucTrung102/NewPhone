<?php
if (isset($_SESSION['cart'])) {
}
?>
<div class="product_item_giohang">
    <div class="container">
        <li class="cart_pro_new mt-3">
            <a class="cart_home" href="index.php">
                < Trở về</a>
                    <a class="cart_home">Giỏ hàng</a>
        </li>

        <div class="container_cart">
            <div class="arrow-steps clearfix">
                <div class="step done"> <span> <a href="index.php?quanly=giohang">Giỏ hàng</a></span> </div>
                <div class="step done"> <span><a href="index.php?quanly=vanchuyen">Vận chuyển</a></span> </div>
                <div class="step current"> <span><a href="index.php?quanly=thongtinthanhtoan">Thanh toán</a><span></div>
                <div class="step"> <span><a>Lịch sử đơn hàng</a><span> </div>
            </div>
        </div>
        <form action="pages/main/xulythanhtoan.php" method="POST">
            <div class="row_cart">
                <?php
                $id_dangky = $_SESSION['id_khachhang'];
                $sql_get_vanchuyen = mysqli_query($mysqli, "SELECT * FROM tbl_shipping WHERE id_dangky='$id_dangky' LIMIT 1");
                $count = mysqli_num_rows($sql_get_vanchuyen);
                if ($count > 0) {
                    $sql_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
                    $name = $sql_get_vanchuyen['name'];
                    $phone = $sql_get_vanchuyen['phone'];
                    $address = $sql_get_vanchuyen['address'];
                    $note = $sql_get_vanchuyen['note'];
                } else {
                    $name = '';
                    $phone = '';
                    $address = '';
                    $note = '';
                }
                ?>
                <div class="col-md-4">
                    <h4>Thông tin vận chuyển đơn hàng</h4>
                    <ul>
                        <li>Họ và tên khách hàng: <b><?php echo $name  ?></b></li>
                        <li>Số điện thoại : <b><?php echo $phone ?></b></li>
                        <li>Địa chỉ : <b><?php echo $address ?></b></li>
                        <li>Ghi chú : <b><?php echo $note ?></b></li>
                    </ul>
                </div>
                <div class="thanhtoandonhang">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="tienmat" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Tiền mặt
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="vnpay" checked>
                        <img src="././img/thanhtoan/vnpay-logo.png" style="width:50px" alt="">
                    </div>

                    <input class="thanhtoan" type="submit" name="checkout" value="Thanh toán ngay">
        </form>
                
        <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="pages/main/xulythanhtoanmomo.php">
            <div class="form-check">
                <input class="qr_momo" type="submit" name="momo" value="Thanh toán MOMO QRcode">
            </div>
        </form>

        <p></p>

        <form method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="pages/main/xulythanhtoanmomo_atm.php">
             <div class="form-check">
                <input class="qr_momo" type="submit" name="momo" value="Thanh toán MOMO ATM">
            </div>
        </form> 
    </div>

</div>
<div class="cart_pro">
    <?php
    if (isset($_SESSION['cart'])) {
        $i = 0;
        $tongtien = 0;

        foreach ($_SESSION['cart'] as $cart_item) {
            $thanhtien = $cart_item['soluong'] * $cart_item['giasp'];
            $tongtien += $thanhtien;
            $i++;
    ?>
            <div class="cart_item">
                <div class="cart__pro">
                    <div class="img mt-3">
                        <img class="img_cart" src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh'] ?>">

                        <div class="name_cart">
                            <a href="" class="name_item"><?php echo $cart_item['tensanpham'] ?></a>
                            <p class="name_money"><?php echo number_format($thanhtien, 0, ',', '.') . 'đ'; ?></p>
                        </div>
                        <div class="drop_pro">
                            <div class="price__cart">
                                <span class="tru"><a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="fas fa-minus"></i></a> </span>
                                <input class="soluong_giohang" type="text" value="<?php echo $cart_item['soluong'] ?>">
                                <span class="cong"><a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="fas fa-plus"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
        <div class="main_giohang">
            <div class="product_giohang_cart">
                <div class="item_giohang">
                    <p class="">Tổng tiền tạm tính:</p>
                    <div class="money_giohang"><?php echo number_format($tongtien, 0, ',', '.') . 'đ'; ?></div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>
</div>
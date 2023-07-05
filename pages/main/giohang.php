<?php
if (isset($_SESSION['cart'])) {
}
?>
<div class="container">
    <div class="product_item_giohang">
        <li class="cart_pro_new mt-3">
            <a class="cart_home" href="index.php">
                < Trở về</a>
                    <a class="cart_home">Giỏ hàng</a>
        </li>
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

                                    <a class="cart_drop" href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>"><i class="fas fa-trash-alt"></i></a><br>
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
                    <div class="product_giohang">
                        <div class="item_giohang">
                            <p class="">Tổng tiền tạm tính:</p>
                            <div class="money_giohang"><?php echo number_format($tongtien, 0, ',', '.') . 'đ'; ?></div>
                        </div>
                        <div class="order_cart">
                            <?php
                            if (isset($_SESSION['dangky'])) {
                            ?>
                                <button class="order_giohang"><a class="text_order_giohang" href="index.php?quanly=vanchuyen">Đặt
                                        hàng
                                        sản phẩm</a></button>
                                <button class="next_giohang"><a class="next_order_giohang" href="http://localhost/NewPhone/product/index.php?quanly=danhmucsanpham&id=48">Chọn thêm
                                        sản phẩm khác </a></button>
                            <?php
                            } else {
                            ?>
                                <button class="button_giohang"><a class="text_color_giohang" href="index.php?quanly=dangky">Đăng ký
                                        tài khoản để đặt hàng</a></button>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="container_cart">
                    <div class="arrow-steps clearfix">
                        <div class="step current"> <span><a href="index.php?quanly=giohang">Giỏ hàng</a></span> </div>
                        <div class="step "> <span>Vận chuyển</a></span> </div>
                        <div class="step"> <span><a>Thanh toán</a><span> </div>
                        <div class="step"> <span><a>Lịch sử đơn hàng</a><span> </div>
                    </div>
                </div>
            <?php
            } else {
            ?>
                <div class="no_cart">
                    <div class="no_cart_item">
                        <a class="go_back">Không có sản phẩm nào trong cửa hàng</a>
                        <a class="hover_back" href="http://localhost/NewPhone/index.php">Quay lại trang chủ</a>
                        <a class="icon_back"><i class="fas fa-frown"></i></a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
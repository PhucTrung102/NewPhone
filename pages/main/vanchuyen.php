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
                <div class="step done"> <span><a href="index.php?quanly=giohang">Giỏ hàng</a></span> </div>
                <div class="step current"> <span><a href="index.php?quanly=vanchuyen">Vận chuyển</a></span> </div>
                <div class="step"> <span><a>Thanh toán</a><span> </div>
                <div class="step"> <span><a>Lịch sử đơn hàng</a><span> </div>
            </div>
        </div>

        <?php
        if (isset($_POST['themvanchuyen'])) {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $note = $_POST['note'];
            $id_dangky = $_SESSION['id_khachhang'];
            $sql_them_vanchuyen = mysqli_query($mysqli, "INSERT INTO tbl_shipping(id_dangky,name,phone,address,note) VALUES ('$id_dangky','$name','$phone','$address','$note')");
            if ($sql_them_vanchuyen) {
                echo '<sript>Thêm nhật vận chuyển thành công</sript>';
            }
        } elseif (isset($_POST['capnhatvanchuyen'])) {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $note = $_POST['note'];
            $id_dangky = $_SESSION['id_khachhang'];
            $sql_updata_vanchuyen = mysqli_query($mysqli, "UPDATE tbl_shipping SET name='$name', phone='$phone', address='$address', note='$note', 
            id_dangky='$id_dangky' WHERE id_dangky='$id_dangky' ");
            if ($sql_updata_vanchuyen) {
                echo '<sript>Cập nhật vận chuyển thành công</sript>';
            }
        }
        ?>
        <div class="row">
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
            <div class="col-md-12">
                <h4 class="item_vanchuyen">Thông tin vận chuyển</h4>
                <form action="" autocomplete="off" method="POST">
                    <div class="form-group">
                        <label for="text">Họ và tên</label>
                        <input type="text" name="name" value="<?php echo $name ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Phone</label>
                        <input type="phone" name="phone" value="<?php echo $phone ?>" class="form-control">
                    </div>
                    <label>Địa chỉ</label>
                    <div class="fromnbtn__dr">
                        <div class="form-group">
                            <input type="text" name="address" value="<?php echo $address ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Ghi chú</label>
                        <input type="text" name="note" value="<?php echo $note ?>" class="form-control">
                    </div>

                    <?php
                    if ($name == '' && $phone == '') {
                    ?>
                        <button type="submit" name="themvanchuyen" class="btn btn-default">Thêm vận chuyển</button>
                    <?php
                    } elseif ($name !== '' && $phone !== '') {
                    ?>
                        <button type="submit" name="capnhatvanchuyen" class="btn btn-default">Cập nhật vận chuyển</button>
                    <?php
                    }
                    ?>

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
                    <div class="product_giohang">
                        <div class="item_giohang">
                            <p class="">Tổng tiền tạm tính:</p>
                            <div class="money_giohang"><?php echo number_format($tongtien, 0, ',', '.') . 'đ'; ?></div>
                        </div>
                        <div class="order_cart">
                            <?php
                            if (isset($_SESSION['dangky'])) {
                            ?>
                                <button class="order_giohang"><a class="text_order_giohang" href="index.php?quanly=thongtinthanhtoan">Thanh toán
                                    <?php
                                }
                                    ?>
                        </div>
                    </div>
                </div>
            <?php
            } else {
            ?>
                <div class="no_cart">
                    <div class="no_cart_item">
                        <a class="go_back">Không có sản phẩm nào trong cửa hàng</a>
                        <a class="hover_back" href="http://localhost/SellPhone/index.php">Quay lại trang chủ</a>
                        <a class="icon_back"><i class="fas fa-frown"></i></a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
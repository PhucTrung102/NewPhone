<?php
if (isset($_POST['tukhoa'])) {
    $tukhoa = $_POST['tukhoa'];
}
$sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.tensanpham LIKE '%" . $tukhoa . "%'";
$query_pro = mysqli_query($mysqli, $sql_pro);
?>

<section class="product-gallery-one">
    <div class="container">
        <div class="product-gallery-one-content">
            <div class="product-gallery-one-content-product">
                <?php
                while ($row_pro = mysqli_fetch_array($query_pro)) {
                ?>
                    <div class="product-gallery-one-content-product-item">
                        <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>">
                            <img src="admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>">
                            <div class="product-gallery-one-content-product-item-text">
                                <li><?php echo $row_pro['tensanpham'] ?></li>
                                <li><?php echo $row_pro['tomtat'] ?></li>
                                <li><a href=""><?php echo number_format($row_pro['giasp'], 0, ',', '.') ?><sup>đ</sup></a></li>
                                <li><?php echo number_format($row_pro['giasp'], 0, ',', '.') ?><sup>đ</sup></li>
                                <li>Quà 400.00<sup>đ</sup></li>
                                <li>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </li>
                            </div>
                        </a>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="footer-middle">
        <div class="container">
            <div class="containerx">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-pad">
                                <h4>Phương thức thanh toán</h4>
                            </div>
                            <ul class="list-image">
                                <li><img class="img_pay" src="./img/thanhtoan/vnpay-logo.png" alt=""></li>
                                <li><img class="img_pay" src="./img/thanhtoan/zalopay-logo.png" alt=""></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-pad">
                            <h4>Chăm sóc khách hàng</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Gọi mua hàng 1800.2021 (7h30 - 20h00)</a></li>
                                <li><a href="#">Gọi khiếu nại 1800.1022 (8h00 - 21h30)</a></li>
                                <li><a href="#">Gọi bảo hành 1800.2063 (8h00 - 21h00)</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-pad">
                            <h4>Tra cứu</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Mua hàng trả góp online</a></li>
                                <li><a href="#">Tra thông tin đơn hàng</a></li>
                                <li><a href="#">Tra thông tin bảo hành</a></li>
                                <li><a href="#">Tra cứu hóa đơn điện tử</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h4>Liên hệ với chúng tôi</h4>
                        <ul class="social-network social-circle">
                            <li><a href="https://www.facebook.com/profile.php?id=100091170957186" class="icoLinkedin" title="Linkedin"><i class="fab fa-facebook-square"></i></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="copy">
                        <p class="text-center">&copy; Bản quyền 2022 - Tên Công Ty. Đã đăng ký Bản quyền.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
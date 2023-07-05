<?php
$sql_tintuc = "SELECT * FROM tbl_tintuc WHERE tbl_tintuc.id_tintuc ORDER BY tbl_tintuc.id_tintuc DESC LIMIT  10";
$query_tintuc = mysqli_query($mysqli, $sql_tintuc);
?>

<div class="container">
    <section class="section-posts">
        <div class="col-lg-7 col-md-7">
            <div class="section-left">
                <div class="section-header">
                    <h2 class="section-title">Tin Tức</h2>
                </div>
                <div class="secton-icontent">
                    <a href="#" title="Dự đoán cấu hình Samsung Galaxy Note 30 Ultra 5G: Màn hình siêu to, RAM đến 18GB, ngồi đếm số camera sau thôi cũng mệt!">
                        <div class="item-post">
                            <div class="image-post"><img src="././img/phone/1638713284_12.jpg" alt=""></div>
                            <div class="info-post">
                                <div class="title-post">
                                    <h3>Dự đoán cấu hình Samsung Galaxy Note 30 Ultra 5G: Màn hình siêu to, RAM đến
                                        18GB, ngồi đếm số camera sau thôi cũng mệt!</h3>
                                </div>
                                <div class="desc-post">
                                    <span><i class="fas fa-user"></i> Admin</span>
                                    <span><i class="fas fa-clock"></i> 05/12/2021</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php
                    while ($row_tintuc = mysqli_fetch_array($query_tintuc)) {
                    ?>
                        <a href="#" title="Cùng dự đoán giá bán Samsung Galaxy Note 30 Ultra 5G: Sẽ được nâng cấp toàn diện về cấu hình và thiết kế, liệu giá có đắt không?">
                            <div class="item-post-item">
                                <div class="image-post-item">
                                    <img src="admincp/modules/quanlytintuc/uploads/<?php echo $row_tintuc['hinhanh'] ?>">
                                </div>
                                <div class="info-post-item">
                                    <div class="title-post-item">
                                        <h3><?php echo $row_tintuc['tentintuc'] ?></h3>
                                    </div>
                                    <div class="desc-post-item">
                                        <span><i class="fas fa-user"></i> Admin</span>
                                        <span><i class="fas fa-clock"></i> 05/12/2021</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php
                    }
                    ?>
                </div>
                <div class="section-footer text-center">
                    <!-- số trang -->
                </div>
            </div>
        </div>
    </section>
</div>


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
                            <li><a href="https://www.facebook.com/profile.php?id=100091170957186" class="icoLinkedin" title="Linkedin" style="margin-top: 10px;"><i class="fab fa-facebook-square"></i></i></a>
                            </li>
                        </ul>
                        <ul class="social-network social-circle">
                            <li><a href="https://www.facebook.com/profile.php?id=100091170957186" class="icoLinkedin" title="Linkedin" style="margin-top: 10px;"><i class="fab fa-facebook-square"></i></i></a>
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
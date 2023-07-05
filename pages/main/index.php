<div class="container">
    <section class="slider">
        <div class="container">
            <div class="slider-content">

                <div class="slider-content-menu">
                    <div class="slider-content-menu-conter">
                        <li><a class="item__sp" href="#">Sản Phẩm</a></li>
                        <li><a class="item_sp" href="http://localhost/NewPhone/product/index.php?quanly=danhmucsanpham&id=48">Apple</a><i class="fas fa-chevron-right"></i></li>
                        <li><a class="item_sp" href="http://localhost/NewPhone/product/index.php?quanly=danhmucsanpham&id=49">Samsung</a><span class="fas fa-chevron-right"></span></li>
                        <li><a class="item_sp" href="http://localhost/NewPhone/product/index.php?quanly=danhmucsanpham&id=50">Sony</a><span class="fas fa-chevron-right"></span></li>
                        <li><a class="item_sp" href="http://localhost/NewPhone/product/index.php?quanly=danhmucsanpham&id=51">Realme</a><span class="fas fa-chevron-right"></span></li>
                        <li><a class="item_sp" href="http://localhost/NewPhone/product/index.php?quanly=danhmucsanpham&id=52">OPPO</a><span class="fas fa-chevron-right"></span></li>
                        <li><a class="item_sp" href="http://localhost/NewPhone/product/index.php?quanly=danhmucsanpham&id=53">Xiaomi</a><span class="fas fa-chevron-right"></span></li>
                    </div>
                </div>

                <div class="slider-content-left">
                    <div class="slider-content-left-top ">
                        <a href=""> <img class="mySlides fade" src="img/slider/slider1.jpg" alt="" style="display: block;"></a>
                        <a href=""> <img class="mySlide mySlides fade" src="img/slider/slider2.jpg" alt=""></a>
                        <a href=""> <img class="mySlide mySlides fade" src="img/slider/slider3.jpg" alt=""></a>
                        <a href=""> <img class="mySlide mySlides fade" src="img/slider/slider4.jpg" alt=""></a>
                        <a href=""> <img class="mySlide mySlides fade" src="img/slider/slider5.jpg" alt=""></a>
                    </div>
                    <div class="slider-content-left-bottom">
                        <li class="dot active" onclick="currentSlide(1)">GALAXY S20 FE <br> Giá rẻ ngất ngây</li>
                        <li class="dot " onclick="currentSlide(2)">REDMI NOTE 12 <br> Mở bán deal hời</li>
                        <li class="dot " onclick="currentSlide(3)">NORD CE 3 LITE <br> Trải nghiệm vượt trội</li>
                        <li class="dot " onclick="currentSlide(4)">POCO X5 | X5 PRO <br> Giá chỉ 5.45 triệu</li>
                        <li class="dot " onclick="currentSlide(5)">OPPO A77s <br> Giảm giá bất ngờ</li>
                    </div>
                </div>
                <div class="slider-content-right">
                    <li><a href=""><img src="img/slider_right/sliderright1.webp" alt=""></a></li>
                    <li><a href=""><img src="img/slider_right/sliderright2.webp" alt=""></a></li>
                    <li><a href=""><img src="img/slider_right/sliderright3.webp" alt=""></a></li>
                </div>
            </div>
        </div>
        <script>
            var slideIndex = 0;
            showSlides();
            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                setTimeout(showSlides, 3500);
            }
        </script>
    </section>
    <!-- --------------body------------ -->
    <section class="slider-product-one">
        <div class="container">
            <div class="slider-product-one-content">
                <div class="slider-product-one-content-title">
                    <h2>Săn Sale Online Mỗi Ngày</h2>
                </div>
                <div class="slider-product-one-content-container">
                    <div class="slider-product-one-content-items-content">
                        <div class="slider-product-one-content-items">
                            <div class="slider-product-one-content-item">
                                <a href="index.php?quanly=sanpham&id=73"><img class="imgitem_gg"  src="admincp/modules/quanlysp/uploads/1679192537_SS_galaxy.webp"></a>
                                <div class="slider-product-one-content-item-text">
                                    <li>Samsung Galaxy S22 Ultra (12GB - 256GB)</li>
                                    <li>Online giá rẻ</li>
                                    <li><a href="">24.340.000<sup>đ</sup></a></li>
                                    <li>24.340.000<sup>đ</sup></li>
                                    <li>Quà 400.00<sup>đ</sup></li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </div>
                            </div>
                            <div class="slider-product-one-content-item">
                                <a href="index.php?quanly=sanpham&id=74"><img class="imgitem_gg"  src="admincp/modules/quanlysp/uploads/1679192663_SAMSUNG.webp" alt=""></a>
                                <div class="slider-product-one-content-item-text">
                                    <li>Samsung Galaxy Z Flip4 256GB</li>
                                    <li>Online giá rẻ</li>
                                    <li><a href="">21.900.000<sup>đ</sup></a></li>
                                    <li>21.900.000<sup>đ</sup></li>
                                    <li>Quà 400.00<sup>đ</sup></li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </div>
                            </div> <div class="slider-product-one-content-item">
                                <a href="index.php?quanly=sanpham&id=75"><img class="imgitem_gg"  src="admincp/modules/quanlysp/uploads/1679192727_samsung-galaxy-s21-ultra-1_1.webp" alt=""></a>
                                <div class="slider-product-one-content-item-text">
                                    <li>Samsung Galaxy S23 Plus 8GB 256GB</li>
                                    <li>Online giá rẻ</li>
                                    <li><a href="">24.990.000<sup>đ</sup></a></li>
                                    <li>24.990.000<sup>đ</sup></li>
                                    <li>Quà 400.00<sup>đ</sup></li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </div>
                            </div>
                            <div class="slider-product-one-content-item">
                                <a href="index.php?quanly=sanpham&id=76"><img class="imgitem_gg"  src="admincp/modules/quanlysp/uploads/1679192785_s22_4_1.webp" alt=""></a>
                                <div class="slider-product-one-content-item-text">
                                    <li>Samsung Galaxy S23 Plus 8GB 256GB</li>
                                    <li>Online giá rẻ</li>
                                    <li><a href="">18.900.000<sup>đ</sup></a></li>
                                    <li>18.900.000<sup>đ</sup></li>
                                    <li>Quà 400.00<sup>đ</sup></li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </div>
                            </div>
                            <div class="slider-product-one-content-item">
                                <a href="index.php?quanly=sanpham&id=64"><img class="imgitem_gg"  src="img/phone/iphone_14.webp" alt=""></a>
                                <div class="slider-product-one-content-item-text">
                                    <li>Iphone 14 Pro Max 128GB | Chính hãng VN/A</li>
                                    <li>Online giá rẻ</li>
                                    <li><a href="">28.340.000<sup>đ</sup></a></li>
                                    <li>28.340.000<sup>đ</sup></li>
                                    <li>Quà 400.00<sup>đ</sup></li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="product-gallery-one">
        <div class="container">
            <div class="product-gallery-one-content">
                <div class="product-gallery-one-content-title">
                    <h2>ĐIỆN THOAI NỖI BẬT NHẤT</h2>
                    <ul>
                        <li><a class="related-tag" href="http://localhost/NewPhone/product/index.php?quanly=danhmucsanpham&id=48">Apple</a></li>
                        <li><a class="related-tag" href="http://localhost/NewPhone/product/index.php?quanly=danhmucsanpham&id=49">Samsung</a></li>
                        <li><a class="related-tag" href="http://localhost/NewPhone/product/index.php?quanly=danhmucsanpham&id=50">Sony</a></li>
                        <li><a class="related-tag" href="http://localhost/NewPhone/product/index.php?quanly=danhmucsanpham&id=51">OPPO</a></li>
                        <li><a class="related-tag" href="http://localhost/NewPhone/product/index.php?quanly=danhmucsanpham&id=52">Huawei</a></li>
                        <li><a class="related-tag" href="http://localhost/NewPhone/product/index.php?quanly=danhmucsanpham&id=53">Xiaomi</a></li>
                    </ul>
                </div>

                <?php
                $sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.soluong>0 ORDER BY tbl_sanpham.
                id_sanpham DESC LIMIT 50 ";
                $query_pro = mysqli_query($mysqli, $sql_pro);
                ?>
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
    <!--  -->
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
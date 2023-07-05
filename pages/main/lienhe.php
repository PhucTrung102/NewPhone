
<section class="section-about">
<div class="container">
    <div class="slider-content.btn">
        <div class="slider-content-left-btn">
            <div class="slider-content-left-top-btn-item ">
                <a href=""> <img class="mySlides" src="img/img_slideshow/11.jpg" alt="" style="display: block;"></a>
                <a href=""> <img class="mySlide mySlides " src="img/img_slideshow/22.jpg" alt=""></a>
                <a href=""> <img class="mySlide mySlides " src="img/img_slideshow/33.jpg" alt=""></a>
                <a href=""> <img class="mySlide mySlides " src="img/img_slideshow/44.jpg" alt=""></a>
                <a href=""> <img class="mySlide mySlides " src="img/img_slideshow/55.jpg" alt=""></a>
                <div class="slider-content-left-top-btn">
                    <i class="fas fa-chevron-left button-next-left" onclick="plusDivs(-1)"></i>
                    <i class="fas fa-chevron-right button-next-right" onclick="plusDivs(-1)"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = x.length
        };
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex - 1].style.display = "block";
    }
</script>

    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Liên Hệ</h2>
        </div>
        <div class="section-content">
            <div class="row_btn_lh">
                <div class="col-md-007">
                    <div class="content-left">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1243.385563933165!2d106.68966058608756!3d10.803353328691209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528c51b0f7ba7%3A0x2db76c1bff9389b3!2zNDkgUGhhbiDEkMSDbmcgTMawdSwgUGjGsOG7nW5nIDcsIFBow7ogTmh14bqtbiwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1679803408551!5m2!1svi!2s" width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="supprot_new">
                    <div class="online_support">
                        <h2 class="title">CHÚNG TÔI LUÔN SẴN SÀNG<br>ĐỂ GIÚP ĐỠ BẠN</h2>
                        <img src="img/supprot/support_online.jpg">
                        <h3 class="sub_title">Để được hỗ trợ tốt nhất. Hãy gọi</h3>
                        <div class="phone">
                            <a href="tel:18006750" title="1800 6750">1800 6750</a>
                        </div>
                        <div class="or"><span>HOẶC</span></div>
                        <h3 class="title">Chat hỗ trợ trực tuyến</h3>
                        <h3 class="sub_title">Chúng tôi luôn trực tuyến 24/7.</h3>
                    </div>
                </div>
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
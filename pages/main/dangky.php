<?php
if (isset($_POST['dangky'])) {
    $tenkhachhang = $_POST['hovaten'];
    $email = $_POST['email'];
    $dienthoai  = $_POST['dienthoai'];
    $matkhau  = $_POST['matkhau'];

    $sql_dangky = mysqli_query($mysqli, "INSERT INTO tbl_dangky(tenkhachhang,email,matkhau,dienthoai) 
        VALUE('" . $tenkhachhang . "','" . $email . "','" . $matkhau . "','" . $dienthoai . "')");
    if ($sql_dangky) {
        echo '<p class="thongbao"><a class="thongbaobtn" href="index.php">Bạn đã đăng ký thành công</a></p>';
        $_SESSION['dangky'] = $tenkhachhang;
        $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
    }
}
?>

<body>`

    <div class="cps-container containerbtn">
        <div class="cps-login-page">
            <div class="cps-login-mobile">
                <div id="login-form" class="cps-container">
                    <div class="cps-login__image"><img src="img/logo/Smember.webp" alt="cps-logo" class="img"></div>
                    <div class="cps-login-form">
                        <div class="login-form__title">Đăng ký tài khoản Smember</div>
                        <form action="" method="POST">
                            <div class="form__group">
                                <div class="field">
                                    <input class="account" type="text" name="hovaten" required="required" placeholder="Vui lòng nhập họ và tên">
                                </div>
                                <div class="field">
                                    <input class="account" type="50" name="dienthoai" maxlength="10" required="required" placeholder="Vui lòng nhập số điện thoại">
                                </div>
                                <div class="field">
                                    <input class="account" type="text" name="email" required="required" placeholder="Vui lòng nhập số điện email">
                                </div>
                                <div class="field">
                                    <input class="password" type="password" name="matkhau" required="required" placeholder="Vui lòng nhập mật khẩu của bạn">
                                </div>
                                <div class="group__option is-flex is-justify-content-flex-end">
                                    <p class="forget-pass button__forget-password">Quên mật khẩu?</p>
                                </div>
                            </div>
                            <div class="recaptcha is-flex is-justify-content-center">
                                <div style="width: 304px; height: 78px;">
                                    <div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LetVbYUAAAAABRM1I3VO6WD-xxhzTKiR9MDmbNK&amp;co=aHR0cHM6Ly9hY2NvdW50LmNlbGxwaG9uZXMuY29tLnZuOjQ0Mw..&amp;hl=vi&amp;v=Xh5Zjh8Od10-SgxpI_tcSnHR&amp;size=normal&amp;cb=xe12irav79jh" width="304" height="78" role="presentation" name="a-4ipjjl9hvj9z" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                </div><iframe style="display: none;"></iframe>
                            </div>
                            <button class="btn-form__submit is-fullwidth button__login" stype="submit" name="dangky" value="ĐĂNG KÝ">ĐĂNG KÝ</button>
                        </form>
                        <div class="line-through is-flex is-align-items-center">
                            <hr>
                            <p>
                                hoặc
                            </p>
                            <hr>
                        </div>
                    </div>
                    <!-- <div class="block-login-gg-fb">
                        <div class="login-gg-fb button__login-google"><img src="/_nuxt/img/image45.93ceca6.png" alt="google" class="login-gg-fb__icon">
                            <p class="login-gg-fb__text">Đăng nhập bằng Google</p>
                        </div>
                        <div class="login-gg-fb button__login-zalo"><img src="/_nuxt/img/Logo-Zalo-Arc.a36365b.png" alt="google" class="login-gg-fb__icon">
                            <p class="login-gg-fb__text">Đăng nhập bằng Zalo</p>
                        </div>
                    </div> -->
                    <div class="login-question is-flex is-justify-content-center">
                        <p class="login-question__text">Bạn chưa có tài khoản? </p> <a href="/register" class="link button__go-register">Đăng ký ngay</a>
                    </div><a href="https://cellphones.com.vn/uu-dai-smember" class="promotion-link button__link">Xem chính sách ưu đãi
                        Smember</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
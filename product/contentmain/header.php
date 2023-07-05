<header>
    <section class="header">
        <div class="container">
            <div class="header_pro">
                <div class="header_pro_new fig_fig">
                    <div class="trigger-menu">
                        <div class="logo left__header">
                            <a class="logo-wrapper" href="http://localhost/NewPhone/index.php" title="NewPhone">NewPhone</a>
                        </div>
                    </div>
                    <div class="margin-auto">
                        <div class="search left__header">
                            <form class="search-bar" action="index.php?quanly=timkiem" method="POST">
                                <input class="input-search" type="search" name="tukhoa" placeholder="Tìm Kiếm..." autocomplete="off">
                                <button type="submit" name="timkiem"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="item_nav fig_fig">
                    <div class="nav ">
                        <div class="fig_fig">
                            <li class="nav-item "><a class="header__item left__header" href="http://localhost/NewPhone/index.php" title="Trang Chủ">
                                    <span class="fas fa-home"></span>
                                    Trang Chủ</a>
                            </li>
                            <li class="dropdown nav-item">
                                <a class="dropdown_product header__item left__header" href="http://localhost/NewPhone/product/index.php?quanly=danhmucsanpham&id=48" title="Sản Phẩm">
                                    <span class="fas fa-mobile-alt"></span>
                                    Sản Phẩm</a>
                                <div class="dropdown-menu">
                                    <ul class="dropdown-menu-item">
                                        <h4>Hãng Sản Xuất</h4>
                                        <nav class="dropdown-menu-subitem">
                                            <ul class="dropdown_flex">
                                                <li class="dropdown_flex_item"><a href="http://localhost/NewPhone/product/index.php?quanly=danhmucsanpham&id=48" title="Apple">Apple</a></li>
                                                <li class="dropdown_flex_item"><a href="http://localhost/NewPhone/product/index.php?quanly=danhmucsanpham&id=49" title="Samsung">Samsung</a></li>
                                                <li class="dropdown_flex_item"><a href="http://localhost/NewPhone/product/index.php?quanly=danhmucsanpham&id=50" title="Sony">Sony</a></li>
                                            </ul>
                                            <ul class="dropdown_flex">
                                                <li class="dropdown_flex_item"><a href="http://localhost/NewPhone/product/index.php?quanly=danhmucsanpham&id=51" title="OPPO">OPPO</a></li>
                                                <li class="dropdown_flex_item"><a href="http://localhost/NewPhone/product/index.php?quanly=danhmucsanpham&id=52" title="Huawei">Huawei</a></li>
                                                <li class="dropdown_flex_item"><a href="http://localhost/NewPhone/product/index.php?quanly=danhmucsanpham&id=53" title="Xiaomi">Xiaomi</a></li>
                                            </ul>
                                        </nav>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item "><a class="header__item left__header" href="http://localhost/NewPhone/index.php?quanly=tintuc" title="Tin Tức">
                                    <span class="far fa-newspaper"></span>
                                    Tin Tức</a>
                            </li>
                            <li class="nav-item "><a class="header__item left__header" href="http://localhost/NewPhone/index.php?quanly=lienhe" title="Liên Hệ">
                                    <span class="fas fa-id-card"></span>
                                    Liên Hệ</a>
                            </li>
                            <li class="nav-item "><a class="header__item left__header" href="http://localhost/NewPhone/index.php?quanly=giohang" title="Giỏ Hàng">
                                    <span class="far fa-cart-plus"></span>
                                    Giỏ Hàng</a>
                            </li>
                        </div>
                    </div>

                    <div class="loginbtnitem">
                        <?php
                        if (isset($_SESSION['dangky'])) {
                        ?>
                            <div class="dropdown">
                                <button id="myBtn" class="dropbtn"> <span class="far fa-user"></span><br>Smember</button>
                                <div id="myDropdown" class="dropdown-content">
                                    <a href="index.php?quanly=smember"> <span class="far fa-user"></span>Smember</a>
                                    <a href="index.php?dangxuat=1"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a>
                                </div>
                            </div>
                            <script>
                                document.getElementById("myBtn").onclick = function() {
                                    myFunction()
                                };

                                function myFunction() {
                                    document.getElementById("myDropdown").classList.toggle("show");
                                }
                            </script>
                        <?php
                        } else {
                        ?>
                            <div onclick="document.getElementById('id01').style.display='flex'" class="menu-item">Smember</div>
                            <li class="far fa-user"></li>
                            <div id="id01" class="login_from">
                                <div class="w3-modal-content">
                                    <div class="login-from-content">
                                        <span class="closeloginbtn" onclick="document.getElementById('id01').style.display='none'"><i class="fas fa-times-circle"></i></span>
                                        <div class="login-btn-item login-item-one">
                                            <h4>Smember</h4>
                                        </div>
                                        <div class="login-btn-item login-item-two">
                                            <p>Vui lòng đăng nhập tài khoản Smember để có trải nghiệm mua sắm tốt hơn</p>
                                        </div>
                                        <div class="login-btn-item login-item-three login-item-btn">
                                            <a class="login-btn" href="http://localhost/NewPhone/index.php?quanly=dangnhap" title="Đăng Nhập">Đăng Nhập</a>
                                            <a class="login-btn-moda" href="http://localhost/NewPhone/index.php?quanly=dangky" title="Đăng Ký">Đăng Ký</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <script>
                        var modal = document.getElementById('id01');
                        window.onclick = function(event) {
                            if (event.target == modal) {
                                modal.style.display = "none";
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
    </section>
</header>
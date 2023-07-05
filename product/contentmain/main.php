<?php
$sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]' AND tbl_sanpham.soluong>0 ORDER BY id_sanpham DESC";
$query_pro = mysqli_query($mysqli, $sql_pro);
//
$sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
$query_cate = mysqli_query($mysqli, $sql_cate);
?>

<section class="container ">
    <div class="section-filter">
        <div class="section-header">
            <h2 class="section-title">Tìm Kiếm Và Sắp Xếp</h2>
        </div>
        <div class="section-content">
            <form action="" method="GET" accept-charset="utf-8">
                <div class="rowzbt">
                    <div class="col-md-10">
                        <div class="rowzbt12">
                            <div class="col-xs-12">
                                <input type="text" name="name" placeholder="Tìm kiếm..." value="">
                            </div>
                            <div class="col-xs-12">
                                <select name="os">
                                    <option value="" selected="">
                                        Hệ Điều Hành
                                    </option>
                                    <option value="ios">IOS</option>
                                    <option value="android">    
                                        Android
                                    </option>
                                    <option value="windows">
                                        Windows Phone
                                    </option>
                                </select>
                            </div>
                            <div class="col-xs-12">
                                <select name="price">
                                    <option value="" selected="">
                                        Giá Sản Phẩm
                                    </option>
                                    <option value="asc">
                                        Giá từ thấp tới cao
                                    </option>
                                    <option value="desc">
                                        Giá từ cao tới thấp
                                    </option>
                                </select>
                            </div>
                            <div class="col-xs-12">
                                <select name="type">
                                    <option value="" selected="">
                                        Loại Sản Phẩm
                                    </option>
                                    <option value="promotion">
                                        Sản phẩm khuyến mại
                                    </option>
                                    <option value="vote">
                                        Sản phẩm đánh giá cao
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-default">Lọc Sản Phẩm</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<section class="product-gallery-one">
    <div class="container">
        <div class="product-gallery-one-content">
            <div class="product-gallery-one-content-product">
                <?php
                while ($row_pro = mysqli_fetch_array($query_pro)) {
                ?>
                    <div class="product-gallery-one-content-product-item">
                        <a href="../index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>" class="product_link">
                            <div class="product__image">
                                <img src="../admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>" alt="iPhone 14 Pro Max 256GB | Chính hãng VN/A" class="product_img">
                            </div>
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
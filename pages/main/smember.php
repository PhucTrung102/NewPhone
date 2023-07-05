<?php
$id = $_SESSION['id_khachhang'];
$sql = "select * from tbl_dangky where id_dangky='$id'";
$row = mysqli_query($mysqli, $sql);
$row_data = mysqli_fetch_array($row);
$ten = $row_data['tenkhachhang'];
$sdt = $row_data['dienthoai'];
$email = $row_data['email'];
$diachi = $row_data['diachi'];
?>
<style>
    .form-info button {
        background-color: #f30;
        color: #fff;
        border: none;
        width: 150px;
        height: 30px;
        border-radius: 10px;
        font-size: 15px;
    }

    .tablebtn_item {
        width: 820px;
        height: 380px;
        font-size: 12px;
        background-color: #fff;
        border-radius: 10px;
    }

    /* Khung chính */
    .form-info {
        margin: auto;
        width: 30%;
        height: auto;
        padding: 20px;
        border: 1px solid black;
        border-radius: 10px;
        background-color: #EEEEEE;
    }

    .form-info button {
        background-color: #FF9900;
    }

    .form-info button:hover {
        background-color: white;
        border: 1px solid #FF9900;
        color: #FF9900;
    }

    form button {
        color: white;
        background-color: #FF9900;
        border: none;
        font-size: 15px;
        width: 100px;
        height: 25px;
        border-radius: 10px;
    }

    form button:hover {
        background-color: white;
        border: 1px solid #FF9900;
        color: #FF9900;
    }

    /* mabalbtn */
    .mabalbtn {
        display: none;
        position: fixed;
        z-index: 999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .mabalbtn-content {
        background-color: #fff;
        margin: 8% auto;
        padding: 20px;
        width: 45%;

        text-align: center;
        border-radius: 10px;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>
<br>
<div class="form-info">
    <center>
        <h2><b>THÔNG TIN CÁ NHÂN</b></h2>
    </center>
    <br>
    <table>
        <tr>
            <td style="text-align: right; padding-left:50px; font-size:20px">Họ tên:</td>
            <td style="padding-left:80px; font-size: 20px;color: #f30"><?php echo $ten ?></td>
        </tr>
        <tr>
            <td style="text-align: right ; font-size: 20px">Số ĐT:</td>
            <td style="padding-left:80px; font-size: 20px;color: #f30"><?php echo $sdt ?></td>
        </tr>
        <tr>
            <td style="text-align: right; font-size: 20px">Email:</td>
            <td style="padding-left:80px; font-size: 20px;color: #f30"><?php echo $email ?></td>
        </tr>
        <tr>
            <td style="text-align: right; font-size: 20px">Địa chỉ:</td>
            <td style="padding-left:80px; font-size: 20px;color: #f30"><?php echo $diachi ?></td>
        </tr>
    </table>
    <br>
    <center><button class="btn btn" id="open-mabalbtn">Cập nhật thông tin</button></center>
</div>
<div id="mabalbtn" class="mabalbtn">
    <div class="mabalbtn-content">
        <span id="close-mabalbtn" class="close">&times;</span>
        <h2>Cập nhật thông tin</h2>
        <br>
        <form action="" method="post">
            <?php
            if (isset($_SESSION['dangky'])) {
                $id = $_SESSION['id_khachhang'];
                $sql = "select * from tbl_dangky where id_dangky='$id'";
                $row = mysqli_query($mysqli, $sql);
                $row_data = mysqli_fetch_array($row);
                $ten = $row_data['tenkhachhang'];
                $sdt = $row_data['dienthoai'];
                $email = $row_data['email'];
                $diachi = $row_data['diachi'];
            ?>
                <b style="float:left">Thông tin khách hàng</b>
                <table class="tablebtn_item">
                    <tr>
                        <td>
                            Họ tên:
                        </td>
                        <td>
                            <input type="text" class="form-control" name="hoten" value="<?php echo "$ten" ?>" placeholder='Nhập họ tên' required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Số ĐT:
                        </td>
                        <td>
                            <input type="tel" class="form-control" name="sdt" value="<?php echo "$sdt" ?>" placeholder='Nhập số điện thoại' required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email:
                        </td>
                        <td>
                            <input type="mail" class="form-control" name="mail" value="<?php echo "$email" ?>" placeholder='Nhập Email' required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Địa chỉ:
                        </td>
                        <td>
                            <input type="text" class="form-control" name="diachi" value="<?php echo "$diachi" ?>" placeholder='Nhập địa chỉ' required>
                        </td>
                    </tr>
                </table>
                <br>
                <center><button class="btn btn" name='update'>Cập nhật</button></center>

            <?php
            } else {
            ?>

            <?php

            }
            ?>
        </form>
    </div>
</div>

<script>
    const openmabalbtnBtn = document.getElementById('open-mabalbtn');
    const closemabalbtnBtn = document.getElementById('close-mabalbtn');
    const mabalbtn = document.getElementById('mabalbtn');

    openmabalbtnBtn.addEventListener('click', function() {
        mabalbtn.style.display = 'block';
    });

    closemabalbtnBtn.addEventListener('click', function() {
        mabalbtn.style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        if (event.target == mabalbtn) {
            mabalbtn.style.display = 'none';
        }
    });
</script>
<?php
if (isset($_POST['update'])) {
    $id = $_SESSION['id_khachhang'];
    $tenkhachhang = $_POST['hoten'];
    $email = $_POST['mail'];
    $dienthoai  = $_POST['sdt'];
    $diachi  = $_POST['diachi'];
    $sql_update = mysqli_query($mysqli, "update tbl_dangky set tenkhachhang='$tenkhachhang', email='$email',  dienthoai='$dienthoai',  diachi='$diachi' where id_dangky='$id';");

    if ($sql_update) {
        echo "<script>alert('Cập nhật thành công');window.location= 'index.php?quanly=smember';</script>";
    }
}

?>
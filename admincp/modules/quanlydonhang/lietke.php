<?php
    $sql_lietke_dh = "SELECT * FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang=tbl_dangky.id_dangky ORDER BY id_cart DESC";
    $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>

<section class="wrapper">
  <div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
        Liệt kê đơn hàng 
      </div>
      <div>
        <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <tr>
        <th>ID</th>
        <th>Mã đơn hàng</th>
        <th>Tên khách hàng</th>
        <th>Địa chỉ</th>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Quản lý</th>
    </tr>
    <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_dh)){
        $i++;
  ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['code_cart'] ?></td>
        <td><?php echo $row['tenkhachhang'] ?></td>
        <td><?php echo $row['diachi'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['dienthoai'] ?></td>
        <td>
            <a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart'] ?>">Xem đơn hàng</a> 
        </td>
    </tr>
    <?php
}
?>
        </table>
      </div>
    </div>
  </div>
</section>
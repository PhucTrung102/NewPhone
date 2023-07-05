<?php
$sql_lietke_tt = "SELECT * FROM tbl_tintuc WHERE tbl_tintuc.id_tintuc ORDER BY id_tintuc DESC";
$query_lietke_tt = mysqli_query($mysqli, $sql_lietke_tt);
?>
<section class="wrapper">
  <div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
        Tin Tức
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
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Nội dung</th>
            <th>Trạng thái</th>
            <th>Quản lý</th>

          </tr>
          <?php
          $i = 0;
          while ($row = mysqli_fetch_array($query_lietke_tt)) {
            $i++;
          ?>
            <tr>
              <td><?php echo $i ?></td>
              <td><?php echo $row['tentintuc'] ?></td>
              <td><img src="modules/quanlytintuc/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
              <td><?php echo $row['tomtat'] ?></td>
              <td><?php if ($row['tinhtrang'] == 1) {
                    echo 'Kích hoạt';
                  } else {
                    echo 'Ẩn';
                  } ?></td>
              <td>
                <a href="modules/quanlytintuc/xuly.php?idtintuc=<?php echo $row['id_tintuc'] ?>">Xóa</a> |
                <a href="?action=quanlytintuc&query=sua&idtintuc=<?php echo $row['id_tintuc'] ?>">Sửa</a>
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
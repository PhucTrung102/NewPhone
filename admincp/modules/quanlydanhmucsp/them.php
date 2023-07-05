<section class="wrapper">
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Thêm danh mục sản phẩm
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
                    <form method="POST" action="modules/quanlydanhmucsp/xuly.php">
                        <tr>
                            <td>Tên danh mục</td>
                            <td><input type="text" name="tendanhmuc"></td>
                        </tr>
                        <tr>
                            <td>Thứ tự</td>
                            <td><input type="text" name="thutu"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" name="themdanhmuc" value="Thêm danh mục sản phẩm"></td>
                        </tr>
                    </form>
                </table>
            </div>
        </div>
    </div>
</section>
<div class="main-content">
    <h3 class="title-page" style="color: red;text-align: center;margin: 40px">Đơn hàng chi tiết</h3>
    <table id="example" class="table table-striped" style="width: 100%">
        <thead>
        <tr>
            <th>ID sản phẩm</th>
            <th>Tên</th>
            <th>Hình ảnh</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Thao tác</th>
        </tr>
        </thead>
        <tbody>
        <?php
                   extract($dhct);
                   global $hinh;
                   $hinh = $hinh_path.$img;
                   echo '<tr>
                        <td>'.$id.'</td>
                        <td>' . $name . '</td>
                        <td>' . $hinh . '</td>
                        <td>' . $price . '</td>
                        <td>' . $soluong . '</td>
                        <td>
                            <a href="" class="btn btn-warning" ><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                            <a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
                        </td>
                    </tr>';
        ?>
        </tbody>
    </table>
</div>
</div>
</div>
<script src="assets/js/main.js"></script>
<script>
    new DataTable("#example");
</script>
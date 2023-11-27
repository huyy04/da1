<div class="main-content">
    <h2 class="title-page" style="color: red; text-align: center; margin: 40px ">Đơn hàng</h2>
    <form action="index.php?act=donhang" method="post">
    <table id="example" class="table table-striped" style="width: 100%">
        <thead>
        <tr>
<!--            <th>STT</th>-->
            <th>ID</th>
            <th>Mã đơn hàng</th>
            <th>Tổng tiền</th>
            <th>Họ tên</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th>Trạng thái</th>
        </tr>
        </thead>
        <tbody>
        <?php
           foreach ($donhang as $dh){
               extract($dh);
               $link  ="index.php?act=delldh&id=".$id;
               $linkct = "index.php?act=list_giohang&id".$id;
               echo '<tr>
                        <td>'.$id.'</td>
                        <td>'.$madh.'</td>
                        <td>'.$tongdonhang.'</td>
                        <td>'.$hoten.'</td>
                        <td>'.$diachi.'</td>
                        <td>'.$tel.'</td>
                        <td>'.$email.'</td>
                        <td>
                            <a href="'.$linkct.'" class="btn btn-warning" ><i class="fa-solid fa-pen-to-square"></i>Chi tiết đơn hàng</a>
                            <a href="'.$link.'" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
                        </td>
                    </tr>';
           }
        ?>
        </tbody>
    </table>
    </form>
</div>


<?php
function tong() {
    $i = 0;
    $tong = 0;
    foreach ($_SESSION['giohang'] as $cart) {
        extract($cart);
        $thanhtien = $price * $soluong;
        $tong += $thanhtien;
    }
   return $tong;
}

function insert_cart($iddh,$idsp,$name,$img,$price,$soluong)
{
    $sql = "insert into cart (iddh,idsp,name,img,price,soluong) values ('$iddh','$idsp','$name','$img','$price','$soluong')";
    pdo_execute($sql);
}

//function giohang ($id){
//    $sql = "SELECT donhang.id, cart.iddh, sanpham.id FROM cart
//            INNER JOIN donhang ON cart.iddh = donhang.id
//            INNER JOIN sanpham ON cart.idsp = sanpham.id
//            where id = ".$id;
//    $list_gh = pdo_query($sql);
//    return $list_gh;
//}
function giohang($id){
    $sql = "select * from cart where id=".$id;
    $list_gh = pdo_query($sql);
    return $list_gh;
}
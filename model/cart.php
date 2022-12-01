<?php 

function insert_giohang($ma_hh,$ten,$gia,$hinh,$soluong,$size){
    $sql = "INSERT INTO gio_hang (ma_hh,name,price,img,so_luong,size)
    VALUES ('$ma_hh','$ten','$gia','$hinh','$soluong','$size')";
    pdo_execute($sql);
}

function update_giohang($soluong,$ma_hh){
        // $sql = "UPDATE hang_hoa SET iddm='".$iddm."', name='".$tensp."',price='".$giasp."',mota='".$mota."',img='".$hinh."' WHERE id=".$id;
    $sql = "UPDATE gio_hang SET so_luong='".$soluong."' WHERE ma_hh=".$ma_hh;
    pdo_execute($sql);
}
function delete_giohang($ma_hh){
    $sql = "DELETE FROM gio_hang WHERE ma_hh=".$ma_hh;
    pdo_execute($sql);
}

function loadall_giohang(){
    $sql = "SELECT gh.ma_hh, gh.so_luong, gh.size, hh.name, hh.price_old, hh.price_new, hh.img FROM gio_hang gh INNER JOIN hang_hoa hh ON gh.ma_hh = hh.id";
    $cart = pdo_query($sql);
    return $cart;
}


// function loadall_sanpham_home(){
//     $sql = "SELECT * from hang_hoa WHERE 1 order by id desc";
//     // $sql = "SELECT * from hang_hoa WHERE 1 order by id desc limit 0.8";   //load 8 sản phẩm
//     // if ($kyw!="") {
//     //     $sql.=" and name like '%".$kyw."%'";
//     // }
//     // if ($iddm>0) {
//     //     $sql.=" and iddm ='".$iddm."'";
//     // }
//     // $sql.=" order by id desc";
//     $listsanpham = pdo_query($sql);
//     return $listsanpham;
// }

?>
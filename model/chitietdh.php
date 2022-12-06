<?php 

    function loadall_chitietdh(){
        $sql = "SELECT * from chi_tiet_don_hang order by ma_ctdh desc";
        $listchitietdh = pdo_query($sql);
        return $listchitietdh;
    }
    function loadone_chitietdh($ma_dh){
        $sql = "SELECT ct.ma_ctdh, ct.ma_dh, hh.id, hh.name, hh.img, hh.price_old, hh.price_new, ct.size, ct.quantity as so_luong, (hh.price_old * ct.quantity) as tong FROM chi_tiet_don_hang ct join hang_hoa hh ON ct.ma_hh = hh.id WHERE ct.ma_dh = ".$ma_dh;
        $listchitietdh = pdo_query($sql);
        return $listchitietdh;
    }

    function loadall_ctdh_by_user($ma_tk){
        $sql = "SELECT ct.ma_ctdh, ct.ma_dh, hh.id, hh.name, hh.img, hh.price_old, hh.price_new, ct.size, ct.quantity as so_luong, (hh.price_old * ct.quantity) as tong, dh.ma_tk FROM ((chi_tiet_don_hang ct INNER JOIN hang_hoa hh ON ct.ma_hh = hh.id) INNER JOIN don_hang dh ON ct.ma_dh = dh.ma_dh) WHERE ma_tk = ".$ma_tk;
        $demo = pdo_query($sql);
        return $demo;
    }
    
?>
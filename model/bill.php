<?php 

    function loadall_bill(){
        $sql = "SELECT * from don_hang dh order by ma_dh desc";
        $listbill = pdo_query($sql);
        return $listbill;
    }
    function loadone_bill($ma_dh) {
        $sql = "SELECT * from don_hang dh WHERE ma_dh = ".$ma_dh;
        $bill = pdo_query($sql);
        return $bill;
    }
    function loadbill_mgg() {
        $sql = "SELECT * from don_hang dh inner join ma_giam_gia mgg on dh.ma_gg = mgg.ma_gg WHERE dh.trang_thai_gh = 0 order by ma_dh desc";
        $listbillmgg = pdo_query($sql);
        return $listbillmgg;
    }
    function loadhistorybill_mgg() {
        $sql = "SELECT * from don_hang dh inner join ma_giam_gia mgg on dh.ma_gg = mgg.ma_gg WHERE dh.trang_thai_gh = 1 order by ma_dh desc";
        $listbillmgg = pdo_query($sql);
        return $listbillmgg;
    }
    function delete_bill($ma_dh){
        $sql = "DELETE FROM don_hang WHERE ma_dh=".$ma_dh;
        pdo_execute($sql);
    }
    function insert_dh($ma_tk, $ngay_dat, $nguoi_nhan, $dia_chi_nhan, $sdt_nhan, $payment, $email, $ma_gg) {
        $sql = "INSERT INTO don_hang (ma_tk,ngay_dat,nguoi_nhan,dia_chi_nhan,sdt_nhan,payment,email,ma_gg,trang_thai_tt)
                VALUES ('$ma_tk','$ngay_dat','$nguoi_nhan','$dia_chi_nhan','$sdt_nhan','$payment','$email',$ma_gg,'$payment')";
        pdo_execute($sql);
    }
    function update_dh($trang_thai_tt, $trang_thai_gh, $ma_dh) {
        $sql = "UPDATE don_hang SET trang_thai_tt = $trang_thai_tt, trang_thai_gh = $trang_thai_gh WHERE ma_dh = ".$ma_dh;
        pdo_execute($sql);
    }
    function getlastinsertedid($ma_tk) {
        $sql = "SELECT * FROM don_hang WHERE ma_tk = ".$ma_tk." ORDER BY ma_dh DESC LIMIT 1";
        return pdo_query_one($sql);
    }
    function loaddh_by_matk($ma_tk, $ma_dh) {
        $sql = "SELECT * FROM don_hang WHERE ma_tk = " .$ma_tk." AND ma_dh = " .$ma_dh;
        return pdo_query_one($sql);
    }
?>
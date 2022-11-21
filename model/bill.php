<?php 

    function loadall_bill(){
        // $sql = "SELECT * from hang_hoa WHERE 1";
        // if ($kyw!="") {
        //     $sql.=" and name like '%".$kyw."%'";
        // }
        // if ($iddm>0) {
        //     $sql.=" and iddm ='".$iddm."'";
        // }
        $sql = "SELECT * from don_hang order by ma_dh desc";
        $listbill = pdo_query($sql);
        return $listbill;
    }

?>
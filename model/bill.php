<?php 

    function loadall_bill(){
        $sql = "SELECT * from don_hang order by ma_dh desc";
        $listbill = pdo_query($sql);
        return $listbill;
    }
    function delete_bill($ma_dh){
        $sql = "DELETE FROM don_hang WHERE ma_dh=".$ma_dh;
        pdo_execute($sql);
    }
    
?>
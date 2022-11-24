<?php
        if(isset($_POST['upgiohang']) && $_POST['upgiohang']){
            $ma_hh=$_GET['id'];
            $sl=$_POST['soluong'];
                // $note = 1;        
                    update_giohang($sl,$ma_hh);
                    header('location: index.php?act=cart'); 
        }
?>
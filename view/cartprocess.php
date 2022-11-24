<?php
     if(isset($_POST['addgiohang']) &&  $_POST['addgiohang']){
         $i=0; $fg = 0;$sl=0;
         if($giohang['so_luong'] >=2)$sl = $giohang['so_luong'];
         else $sl = 1;  
         foreach($cart as $giohang){
             extract($giohang);
             if($_POST['id'] == $giohang['ma_hh']){
             // $note = 1;        
                 $sl += $giohang['so_luong'];
                 update_giohang($sl,$_POST['id']);
                 header('location: index.php?act=category');
                 $fg=$sl;
                 break;
             }
             $i++;
        $ma_hh=$_POST['id'];
        $ten=$_POST['name'];
        $gia=$_POST['price'];
        $hinh=$_POST['img'];
        $soluong=$_POST['soluong'];
        }
        if($fg==0){
            insert_giohang($ma_hh,$ten,$gia,$hinh,$soluong);
            header('location: index.php?act=category');
        }
    }



?>
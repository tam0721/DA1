<?php
        if(isset($_POST['upgiohang']) && $_POST['upgiohang']){
            $ma_hh = $_POST['id'];
            $size = $_POST['size'];
            $sl=$_POST['soluong'];
            if($sl == 0){
                if (isset($_POST['id'],$_POST['size']) && ($_POST['id']>=0)){
                    $id=$_GET['id'];
                    if(isset($id)){
                            array_splice($_SESSION['giohang'],$_GET['id'],1);
                          }else
                           unset($_SESSION['giohang']);}
                            delete_giohang($ma_hh);
                            header('location: index.php?act=cart'); 
                        
            }else{
                // $note = 1;        
                    update_giohang($sl,$ma_hh);
                    header('location: index.php?act=cart'); 
            }
        }
?>
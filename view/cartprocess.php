<?php
    
    $ten = $_POST['name'];
    $hinh = $_POST['img'];
    $ten = $_POST['name'];
    foreach( $load1sp as $sp){
            extract($sp);
            echo'
                <form action="index.php?act=cartprocess" method="post" >
                    <input type="hidden" value="" name"'.$name.'">
                    <input type="hidden" value="" name"'.$prices_old.'">
                    <input type="hidden" value="" name"'.$img.'">
                    </form>
                    ';
                }
                
                // <input type="submit" value="Add to cart" name"">
                
?>
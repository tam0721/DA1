    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Giỏ hàng</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.php">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">Giỏ</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
 
    <!--================Cart Area =================-->
    
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <?php
                    if(count($_SESSION['giohang']) == 0){
                        echo'
                        <div class="notice info"><p> Không có sản phẩm nào trong giỏ hàng <a href="index.php?act=category">Xem sản phẩm</a>.</p></div>
                        ';
                    
                ?>
                <style>
                             body {
                            font-family: 'Source Sans Pro', 'Helvetica Neue', Arial, sans-serif;
                            color: #34495e;
                            -webkit-font-smoothing: antialiased;
                            line-height: 1.6em;
                            }

                            p {
                            margin: 0;
                            }

                            .notice {
                            position: relative;
                            margin: 1em;
                            background: #F9F9F9;
                            padding: 1em 1em 1em 2em;
                            border-left: 4px solid #DDD;
                            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.125);
                            }

                            .notice:before {
                            position: absolute;
                            top: 50%;
                            margin-top: -17px;
                            left: -17px;
                            background-color: #DDD;
                            color: #FFF;
                            width: 30px;
                            height: 30px;
                            border-radius: 100%;
                            text-align: center;
                            line-height: 30px;
                            font-weight: bold;
                            font-family: Georgia;
                            text-shadow: 1px 1px rgba(0, 0, 0, 0.5);
                            }

                            .info {
                            border-color: red;
                            }

                            .info:before {
                            content: "X";
                            background-color:red;
                            }

                </style>
                <?php 
                    }else{
                ?>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Sản phẩm</th>
                                <th scope="col">Size giày</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Tổng</th>
                                <th scope="col">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                        
                            ob_start();
                            ?>
                            <?php
                                
                                    $all =0;
                                    foreach($cart as $sp){
                                        extract($sp);
                                        if($ma_hh)
                                        $tong = $so_luong * $price;
                                        $ttien = 0;
                                        $ttien += $tong;
                                        $all +=$ttien;
                                        $del="index.php?act=delcart&idsp=".$ma_hh;
                                        $upd="index.php?act=cart&id=".$ma_hh;
                                        $up="index.php?act=cartupdate&id=".$ma_hh;
                                        $sphct="index.php?act=sanphamct&idsp=".$ma_hh;
                                        echo '
                                            <form action="index.php?act=cartupdate" method="post">
                                            <tr>
                                                <td>
                                                    <div class="media" >
                                                        <div class="d-flex">
                                                            <a href="'.$sphct.'">
                                                                <img src="upload/'.$img.'" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <p>"'.$name.'"</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5>'.$size.'</h5>
                                                </td>
                                                <td>
                                                    <h5>$'.number_format($price,2).'</h5>
                                                </td>
                                                <td>
                                                    <div class="product_count">
                                                        <label for="ma_hh">
                                                            <input type="text" name="soluong" id="sl" value="'.$so_luong.'" title="Quantity:"class="input-text qty">
                                                            </label>
                                                        </div>
                                                        <input type="hidden" name="id" id="ma_hh" value="'.$ma_hh.'">
                                                    <div class="product_count">
                                                        <a href="'.$upd.'">
                                                            
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5>$'.number_format($ttien,2).'</h5>
                                                </td>
                                                <td>
                                                    <h5><a href="'.$del.'">XÓA</a></h5>
                                                </td>
                                            </tr>
                                        ';  
                                    } 
                                ?>
                                    <tr class="bottom_button">
                                        <td>
                                            <?php
                                                echo '
                                                    <input type="submit" name="upgiohang" id="up" class="gray_btn" value="Cập nhập giỏ hàng">
                                                   
                                                    </form>
                                                ';    
                                            ?>
                                        </td>
                                
                                        <td>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="cupon_text d-flex align-items-center">
                                            <input type="text" placeholder="Coupon Code">
                                            <a class="primary-btn" href="#">Nhập</a>
                                            <a class="gray_btn" href="#">Đóng</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        <h5>Thành tiền</h5>
                                    </td>
                                    <?php 
                                        echo '
                                        <td>
                                            <h5>$'.number_format($all,2).'</h5>
                                        </td>
                                        
                                        ';
                                
                                ?>
                            </tr>
                            <!-- <tr class="shipping_area">
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <h5>Phí vận chuyển</h5>
                                </td>
                                <td>
                                    <div class="shipping_box">
                                        <ul class="list">
                                            <li><a href="#">Phí: $5.00</a></li>
                                            <li><a href="#">Miễn phí</a></li>
                                            <li><a href="#">Giảm: $2.00</a></li>
                                            <li class="active"><a href="#">Miễn phí</a></li>
                                        </ul>
                                        <h6>Giá vận chuyển <i class="fa fa-caret-down" aria-hidden="true"></i></h6>
                                        <select class="shipping_select">
                                            <option value="1">TP.Hồ Chí Minh</option>
                                            <option value="2">Lâm Đồng</option>
                                            <option value="3">Hà Nội</option>
                                        </select>
                                        <select class="shipping_select">
                                            <option value="1">Q.12</option>
                                            <option value="2">Q.Gò Vấp</option>
                                            <option value="3">Hoàng Mai</option>
                                        </select>
                                        <input type="text" placeholder="Postcode/Zipcode">
                                        <a class="gray_btn" href="#">Sửa thông tin</a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="out_button_area">
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td> -->
                                <td>
                                    <div class="checkout_btn_inner d-flex align-items-center">
                                        <!-- <a class="gray_btn" href="#">Tiếp tục mua hàng</a> -->
                                        <a class="primary-btn" href="index.php?act=checkout">Tiến hành thanh toán</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->
<style>
    .media img{
        width: 120px;
        height: 130px;
    }
</style>

<?php 
                                // $all =0;
                                // foreach($_SESSION['giohang'] as $sp){
                                //     extract($sp);
                                //     $ttien = $sp[4] * $sp[3];
                                //     $tong = 0;
                                //     $tong += $ttien;
                                //     $all +=$tong;
                                //     $del="index.php?act=delcart&idsp=".$sp[0];
                                //     $sphct="index.php?act=sanphamct&idsp=".$sp[0];
                                //     echo '
                                //     <form action="index.php?act=cartprocess&id='.$sp[0].'" method="post">
                                //     <tr>
                                //     <td>
                                //     <div class="media">
                                //     <div class="d-flex">
                                //         <a href="'.$sphct.'">
                                //             <img src="upload/'.$sp[2].'" alt="">
                                //         </a>
                                //             </div>
                                //             <div class="media-body">
                                //                 <p>"'.$sp[1].'"</p>
                                //             </div>
                                //         </div>
                                //     </td>
                                    
                                //     <input type="hidden" name="id" value="'.$sp[0].'">
                                //     <input type="hidden" name="img" value="'.$sp[2].'">
                                //     <input type="hidden" name="name" value="'.$sp[1].'">
                                //     <input type="hidden" name="price" value="'.$sp[3].'">
                                //     <td>
                                //     <h5>$'.$sp[3].'</h5>
                                //     </td>
                                //     <td>
                                //     <div class="product_count">
                                    
                                //     <input type="text" name="soluong" id="sst" maxlength="12" value="'.$sp[4].'" title="Quantity:"
                                //     class="input-text qty">
                                    
                                   
                                //    ';
                            
                            ?>
                                       <!-- <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                            class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                            class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button> -->
                                    </div>
                        <?php }?>

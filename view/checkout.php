    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Thanh toán</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.php">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
                        <a href="single-product.html">Thanh toán</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">
            <?php
                if (!isset($_SESSION['user'])) {
                    echo '<h4 class="text-danger"><a href="index.php?act=login">Đăng nhập</a> để thanh toán</h4>';
                } else {
                    $sql = "SELECT * FROM tai_khoan WHERE user = '".$_SESSION['user']."'";
                    extract(pdo_query_one($sql));
            ?>
            <div class="cupon_area">
                <div class="check_title">
                    <h2>Lấy mã giảm giá? <a href="#">Click vào đây</a></h2>
                </div>
                <input type="text" placeholder="Nhập mã ">
                <a class="tp_btn" href="#">Áp dụng</a>
            </div>
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Thông tin giao hàng</h3>
                        <form class="row contact_form" action="index.php?act=confirmation" method="post" novalidate="novalidate">
                            <div class="col-md-6 form-group p_star">
                                <label>Họ tên</label>
                                <input placeholder="Họ tên" type="text" class="form-control" id="first" name="nguoi_nhan" value="<?=$ho_ten?>">
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <label>Số điện thoại</label>
                                <input placeholder="Số điện thoại" type="text" class="form-control" id="number" name="sdt_nhan" value="<?=$tel?>">
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <label>Email</label>
                                <input placeholder="Địa chỉ Email" type="text" class="form-control" id="email" name="email" value="<?=$email?>">
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <label>Địa chỉ nhận hàng</label>
                                <input placeholder="Địa chỉ nhận hàng" type="text" class="form-control" id="email" name="dia_chi_nhan" value="<?=$address?>">
                            </div>
                           
                            <div class="col-md-12 form-group">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Ghi chú"></textarea>
                            </div>
                            
                            
                        
                    </div>
                    
                    <!-- <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Hóa đơn của bạn</h2> -->
                            <div class="order_details_table">
				<h2>Thông tin chi tiết</h2>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Sản phẩm</th>
								<th scope="col">Size</th>
								<th scope="col">Giá</th>
								<th scope="col">Số lượng</th>
								<th scope="col">Tổng giá sản phẩm</th>
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
                                        $tien=$all+50;
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
                                                           <h5>'.$so_luong.'</h5>
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
                                                
                                            </tr>
                                        ';  
                                    } 
                                ?>
                                    <tr class="bottom_button">
                                        <td>
									
                                        </td>
                                
                                        <td>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        <h5>Tổng tiền sản phẩm</h5>
                                    </td>
                                    <?php 
                                        echo '
                                        <td>
                                            <h7>$'.number_format($all,2).'</h7>
                                        </td>
                                        
                                        ';
                                
                                ?>
								<style>
    .media img{
        width: 120px;
        height: 130px;
    }
</style>
                            </tr>
							<tr>
								<td>
									<h4>Giảm giá</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>0.00</p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Phí vận chuyển</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>Phí: $50.00</p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Thành tiền</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>
										<?php
										echo "$$tien.00";
										?>
									</p>
								</td>
							</tr>
                            
                                
                            </tr>
                        </tbody>
						
						
					</table>
				</div>
                           
                            <div class="payment_item">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option5" name="selector">
                                    <label for="f-option5">Xác nhận đúng thông tin</label>
                                    <div class="check"></div>
                                </div>
                                
                            </div>
                            <tr>
                        <td>
                            <input type="radio" name="payment" value="thanh toán khi nhận hàng">  Thanh toán khi nhận hàng <br>


                            <input type="radio" name="payment" value="1">  Thanh toán bằng thẻ <br>
                            <div class="check"></div>
                        </td>
                    </tr>
                            <div class="creat_account">
                                <input type="checkbox" id="f-option4" name="selector">
                                <label for="f-option4">Tôi đã đọc và chấp nhận </label>
                                <a href="#">điều kiện & điều khoản</a>
                            </div>
                            <!-- <a class="primary-btn" href="#">Thanh toán</a> -->
                            <input type="submit"  name="confirmation"  class="primary-btn" value="Đặt Hàng">
                        </div>
                        
                        </form>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>
    <!--================End Checkout Area =================-->
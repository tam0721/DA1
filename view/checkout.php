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
                        <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                            <div class="col-md-6 form-group p_star">
                                <label>Họ tên</label>
                                <input placeholder="Họ tên" type="text" class="form-control" id="first" name="name" value="<?=$ho_ten?>">
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <label>Số điện thoại</label>
                                <input placeholder="Số điện thoại" type="text" class="form-control" id="number" name="number" value="<?=$tel?>">
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <label>Email</label>
                                <input placeholder="Địa chỉ Email" type="text" class="form-control" id="email" name="compemailany" value="<?=$email?>">
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <label>Địa chỉ nhận hàng</label>
                                <input placeholder="Địa chỉ nhận hàng" type="text" class="form-control" id="email" name="compemailany" value="<?=$address?>">
                            </div>
                            <!-- <div class="col-md-12 form-group p_star">
                                <select class="country_select">
                                    <option value="1" selected>Chọn tỉnh</option>
                                    <option value="2">TP.Hồ Chí Minh</option>
                                    <option value="3">Đà nẵng</option>
                                    <option value="4">Cần Thơ</option>
                                    <option value="5">Hà Nội</option>
                                    <option value="6">Lâm Đồng</option>
                                </select>
                            </div> -->
                            <!-- <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add1" name="add1">
                                <span class="placeholder" data-placeholder="Address line 01"></span>
                            </div> -->
                            <!-- <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add2" name="add2">
                                <span class="placeholder" data-placeholder="Address line 02"></span>
                            </div> -->
                            <!-- <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="city" name="city">
                                <span class="placeholder" data-placeholder="Town/City"></span>
                            </div> -->
                            <!-- <div class="col-md-12 form-group p_star">
                                <select class="country_select">
                                    <option value="1">Quận/Huyện</option>
                                    <option value="2">Q.12</option>
                                    <option value="3">Q.Gò Vấp</option>
                                    <option value="4">Đà Lạt</option>
                                    <option value="5">Q.Hoàng Mai</option>
                                    <option value="6">Q.Hoàn Kiếm</option>
                                </select>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip Code">
                            </div> -->
                            <!-- <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <input type="checkbox" id="f-option2" name="selector">
                                    <label for="f-option2">Xác nhận thông tin</label>
                                </div>
                            </div> -->
                            <div class="col-md-12 form-group">
                                <!-- <div class="creat_account">
                                    <h3>Thông tin vận chuyển</h3>
                                    <input type="checkbox" id="f-option3" name="selector">
                                    <label for="f-option3">Địa chỉ khác</label>
                                </div> -->
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Ghi chú"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Hóa đơn của bạn</h2>
                            <ul class="list">
                                <li><a href="#">Sản phẩm <span>Tổng</span></a></li>
                                <li><a href="#">Nike Infinity <span class="middle">x 02</span> <span class="last">$189.00</span></a></li>
                                <li><a href="#">Ultraboost FZ4007 <span class="middle">x 01</span> <span class="last">$189.00</span></a></li>
                                <li><a href="#">Puma Bmw <span class="middle">x 01</span> <span class="last">$189.00</span></a></li>
                            </ul>
                            <ul class="list list_2">
                                <li><a href="#">Giảm giá <span>$90.00</span></a></li>
                                <li><a href="#">Phí vận chuyển <span> $5.00</span></a></li>
                                <li><a href="#">Tổng <span>$671.00</span></a></li>
                            </ul>
                            <div class="payment_item">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option5" name="selector">
                                    <label for="f-option5">Xác nhận đúng thông tin</label>
                                    <div class="check"></div>
                                </div>
                                <p>Gửi đến địa chỉ...</p>
                            </div>
                            <div class="payment_item active">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option6" name="selector">
                                    <label for="f-option6">Phương thức thanh toán </label>
                                    <img src="img/product/card.jpg" alt="">
                                    <div class="check"></div>
                                </div>
                                <p>Bạn có thẻ thanh toán bằng thẻ tín ATM hoặc tiền mặt khi nhận hàng.</p>
                            </div>
                            <div class="creat_account">
                                <input type="checkbox" id="f-option4" name="selector">
                                <label for="f-option4">Tôi đã đọc và chấp nhận </label>
                                <a href="#">điều kiện & điều khoản</a>
                            </div>
                            <a class="primary-btn" href="#">Thanh toán</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>
    <!--================End Checkout Area =================-->
	<!-- start banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container" style="height:200px;">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Admin</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Chi tiết đơn hàng</a>
					</nav>
				</div>
			</div>
		</div>
        
	</section><div class="container-fluid">
        <div class="row-title text-center" style="margin-top:20px;">
            <h3>Chi tiết đơn hàng:</h3>
        </div>
        <div class="table-responsive-sm">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th></th>
                        <th style="width:360px;">Mã đơn hàng</th>
                        <th style="width:360px;">Tên sản phẩm</th>
                        <th style="width:360px;">Giá</th>
                        <th style="width:360px;">Số lượng</th>
                        <th style="width:360px;">Size</th>
                        <th style="width:360px;">Thành tiền</th>
                        
                    </tr>
                </thead>
                 <?php
                    foreach ($listchitietdh as $bill) {
                        extract($bill);
                        echo '
                        <tbody>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$ma_dh.'</td>
                                <td>'.$name.'</td>
                                <td>'.$price_old.'$</td>
                                <td>'.$quantity.'</td>
                                <td>'.$size.'</td>
                                <td>'.$tong.'$</td>
                            </tr>
                        </tbody>';
                    }
                ?> 
            </div>
        </div>
    
	
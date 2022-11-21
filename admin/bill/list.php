	<!-- start banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container" style="height:200px;">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Admin</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Danh sách đơn hàng</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
    <div class="container-fluid">
        <div class="row-title text-center" style="margin-top:20px;">
            <h3>Danh sách đơn hàng:</h3>
        </div>
        <div class="table-responsive-sm">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th></th>
                        <th style="width:360px;">Mã đơn hàng</th>
                        <th style="width:360px;">Khách hàng</th>
                        <th style="width:360px;">Địa chỉ</th>
                        <th style="width:360px;">Số điện thoại</th>
                        <th style="width:360px;">Giá trị đơn hàng</th>
                        <th style="width:360px;">Tình trạng đơn hàng</th>
                        <th style="width:360px;">Ngày đặt hàng</th>
                        <th style="width:360px;">Thao tác</th>
                    </tr>
                </thead>
                <?php
                    foreach ($listbill as $bill) {
                        extract($bill);
                        // var_dump($bill);
                        $suadm="index.php?act=suadm&ma_loai=".$ma_loai;
                        $xoadm="index.php?act=xoadm&ma_loai=".$ma_loai;
                        echo '
                        <tbody>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$ma_dh.'</td>
                                <td>'.$nguoi_nhan.'</td>
                                <td>'.$dia_chi_nhan.'</td>
                                <td>'.$sdt_nhan.'</td>
                                <td>'.$payment.'</td>
                                <td>'.$trang_thai_tt.'</td>
                                <td>'.$ngay_dat.'</td>
                                <td><a href="'.$suadm.'"><input type="button" value="Sửa" ></a> <a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
                            </tr>
                        </tbody>';
                    }
                ?> 
            </table>
                <div class="d-flex justify-content-center">
                <input type="submit" value="Chọn tất cả" name="" class="form-control " style=" width:120px;background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
                <a href="index.php?act=adddm"><input type="submit" value="Thêm mới" name="themmoi" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a>
                <input type="submit" value="Sửa" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
            </div>
        </div>
    </div>
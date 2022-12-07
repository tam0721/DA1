	<!-- start banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container" style="height:200px;">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Admin</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Mã Giảm Giá</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
<div class="container-fluid">
    <div class="row-title text-center" style="margin-top:20px;">
        <h3>Các Mã Giảm Giá</h3>
    </div>
    <div class="table-responsive-sm">
        <div class="d-flex ">
            <input type="submit" value="Chọn tất cả" name="" class="form-control " style=" width:120px;background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
            <a href="index.php?act=addmgg"><input type="submit" name="themma" value="Thêm mới" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a>
            </div>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th></th>
                    <th>Mã giảm giá</th>
                    <th>Ngày bắt đầu</th>
                    <th>Ngày kết thúc</th>
                    <th>Giá trị</th>
                    <th style="width:200px;">Cài đặt</th>
                </tr>
            </thead>
            <?php
                foreach ($listmagiam as $giamgia) {
                    extract($giamgia);
                    // $suatk="index.php?act=suatk&id=".$id;
                    $xoagg="index.php?act=xoamgg&ma_gg=".$ma_gg;
                    echo '
                    <tbody>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$ma_gg.'</td>
                            <td>'.$ngay_bd.'</td>
                            <td>'.$ngay_kt.'</td>
                            <td>'.number_format($giatri, 0, '.', '.').'.000 ₫</td>
                            <td><a href="'.$xoagg.'"><input type="button" value="Xóa" style="width:120px;margin:5px; border:none;"></a></td>
                        </tr>
                    </tbody>';
                }
            ?>
        </table>
    </div>
</div>
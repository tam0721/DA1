	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Cập nhật người dùng</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
    <div class="container">
    <div class="row-title text-center" style="margin-top:20px;">
        <h3>Cập nhật người dùng</h3>
    </div>
    <?php
        $sql = "SELECT * FROM tai_khoan WHERE user = '".$_SESSION['user']."'";
        extract(pdo_query_one($sql));
    ?>
    <form action="index.php?act=capnhat_tk" method="POST" enctype="multipart/form-data">
        <div class="form-row" style="padding-left: 55px;">
            <div class="col">
                <label for="exampleInputEmail1">Họ tên</label>
                <input type="text" class="control" name="fullname" placeholder="" value="<?=$ho_ten?>">
            </div>
            <div class="col">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="control" name="user" placeholder="" value="<?=$user?>">
            </div>
            <div class="col">
                <label for="exampleInputEmail1">Mật khẩu</label>
                <input type="text" class="control" name="pass" placeholder="" value="<?=$pass?>">
            </div>
            <div class="col">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="control" name="email" placeholder="" value="<?=$email?>" disabled>
            </div>
            <div class="col">
                <label for="exampleInputEmail1">Địa chỉ</label>
                <input type="text" class="control" name="address" placeholder="" value="<?=$address?>">
            </div>
            <div class="col">
                <label for="exampleInputEmail1">Số điện thoại</label>
                <input type="text" class="control" name="tel" placeholder="" value="<?=$tel?>">
            </div>
            <!-- <div class="d-flex justify-content-center">
                <input type="submit" value="Cập nhập" name="capnhap" class="form-control" style=" width:120px;background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;margin-bottom:15px">
            </div> -->
        </div>
        <div class="d-flex justify-content-center">
            <input type="hidden" name="ma_tk" value="<?=$ma_tk?>">
            <input type="hidden" name="role" value="<?=$role?>">
            <input type="submit" value="Cập nhật" name="capnhap" class="form-control" style=" width:120px;background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;margin-bottom:15px">
        </div>
    </form>
    
</div>


<style>
  @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);


form { max-width:420px; margin:50px auto; }

.col {
  color:black;
  font-family: Helvetica, Arial, sans-serif;
  font-weight:500;
  font-size: 18px;
  border-radius: 5px;
  line-height: 22px;
  background-color: transparent;
  border:2px solid #fff ;
  transition: all 0.3s;
  padding: 13px;
  margin-bottom: 15px;
  width:90%;
  box-sizing: border-box;
  outline:0;
}
.control {
    border:2px solid #FFA500;
}
textarea {
  height: 150px;
  line-height: 150%;
  resize:vertical;
}


</style>
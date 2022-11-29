<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Đăng nhập</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.php">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Quên mật khẩu</a>
                </nav>
            </div>
        </div>
		</div>
</section>  
<!-- <div >
    <div style="margin-left:0px;">
        <form action="index.php?act=quenmk" method="post">
            <h1 style="color: red; margin-left:20px;">Quên mật khẩu</h1> <br>
            <div>
                <label for="uname">Email: </label>
                <input type="email" placeholder="Email" class="feedback-input" name="email" value="" required> <br>
                
                <input type="submit" name="guiemail" value="Gửi">
                <input type="reset" value="Nhập lại">
            </div>
            <h2>
              <?php
                if(isset($thongbao)&&($thongbao!="")){
                  echo $thongbao;
                }
              ?>
              </h2>
        </form>
        
    </div>
</div> -->

<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img" style="width:100%;">
						<img class="img-fluid" src="img/login.jpg" alt="">
						<div class="hover">
							<h4>Lần đầu tiên bạn vào trang web?</h4>
							<p>Bạn có thể sở hữu ngay một tài khoản thành viên, rất nhiều ưu đãi dành cho bạn!</p>
							<a class="primary-btn" href="index.php?act=signup">Đăng kí ngay</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Quên mật khẩu</h3>
						
						<form class="row login_form requires-validation" action="index.php?act=quenmk" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
             
                <input type="email" placeholder="Email" class="form-control" name="email" value="" required> <br>
								<div class="invalid-feedback">Không được để trống!</div>
							</div>
							
							
							<div class="col-md-12 form-group">
								<input type="submit" value="Gửi" class="primary-btn" name="guiemail"></input>
								
							</div>
						</form>
						<!-- Kiểm tra tính hợp lệ -->
						
						<!--  -->
					
						<h2 class="thongbao" style="color: red;font-size:15px;"> 
            <?php
                if(isset($thongbao)&&($thongbao!="")){
                  echo $thongbao;
                }
              ?>
						</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
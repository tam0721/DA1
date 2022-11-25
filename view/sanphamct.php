<!--  -->
	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Chi tiết sản phẩm</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="index.php?act=category">Sản phẩm <span class="lnr lnr-arrow-right"></span></a>
						<a href="index.php?act=sanphamct">Chi tiết</a>
						
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
    <?php
        extract($sanpham);
        // var_dump($sanpham);
        // echo $id;
        $ha="upload/".$sanpham[0]['img'];
            if (is_file($ha)) {
            $hinh="<img src='".$ha."' height='100%' width='100%'>";
        }else{
            $hinh="Không tìm thấy hình";
        }
        // echo '<div>"'.$hinh.'"</div>'; 
        // echo '<div>'.$sanpham[0]['mota'].'</div>';
    ?>
    <div class="container-fluid" style="margin-top: 30px;">
        <div class= "row">
            <div class ="col-sm-5">
                <?php echo '<div style="width=300px;height:500px; border:1px solid #ccc;">'.$hinh.'</div>';?>
                <div style="margin-top: 20px;">
                    <h4>Mô tả</h4>
                    <p style="margin-left: 20px;"><?=$sanpham[0]['mota'] ?></p>
                </div>
            </div>
            <div class ="col-sm-3">
                <h1 style="text-align:center;font-size:22px;"><?php echo $sanpham[0]['name']?></h1>
                <!-- <p style="font-weight:bold; text-align:center; color:red;font-size:25px;">$  -->
                    <?php 
                        if ($sanpham[0]['price_new'] > 0) {
                            echo 
                                '<p style="font-weight:bold; text-align:center; color:red;font-size:25px;">$'
                                .$sanpham[0]['price_new'].'</p>'.
                                '<p style="text-align:center; color:black;font-size:15px; text-decoration: line-through;">$'
                                .$sanpham[0]['price_old'].'</p>';
                        } else {
                            echo 
                                '<p style="font-weight:bold; text-align:center; color:red;font-size:25px;">$'
                                .$sanpham[0]['price_old'].'</p>';
                        }
                        // echo $sanpham[0]['price_old'];
                    ?>
                <!-- </p> -->
                <div class="btn-size">
                    <h6>Chọn size:</h6>
                    <button class="btn btn-outline-secondary" style="margin-left: 20px;">35</button>
                    <button class="btn btn-outline-secondary">36</button>
                    <button class="btn btn-outline-secondary">37</button>
                    <button class="btn btn-outline-secondary">38</button> <br>
                    <button class="btn btn-outline-secondary" style="margin-left: 20px;">39</button>
                    <button class="btn btn-outline-secondary">40</button>
                    <button class="btn btn-outline-secondary">41</button>
                    <button class="btn btn-outline-secondary">42</button>
                </div>
                <div class="">
                    <h6 style="margin-top: 20px;">Số lượng</h6> 
                    <div class="amount-form" style="margin-left: 20px;">
                        <!-- <button class="btn-minus" id="minus" onclick="handleMinus()"><i class="fa-solid fa-minus"></i></button> -->
                        <?php
                               echo'
                               <form action="index.php?act=cartprocess" method="post">
                                <input type="number" value="1"  name="soluong" step="1">
                                <input type="hidden" name="id" value="'.$sanpham[0]['id'].'">
                                <input type="hidden" name="name" value="'.$sanpham[0]['name'].'">
                                <input type="hidden" name="price" value="'.$sanpham[0]['price_old'].'">
                                <input type="hidden" name="img" value="'.$sanpham[0]['img'].'">
                               ';
                               
                        ?>
                        
                        <!-- <button class="btn-plus" id="plus" onclick="handlePlus()"><i class="fa-solid fa-plus"></i></button>  -->
                        
                            <input type="submit" name="themsp" value="<?=$sanpham[0]['trang_thai']? " Add To Cart":"Out Of Stock"?>" <?=$sanpham[0]['trang_thai']? "":"disabled"?> class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
                        
                        </form>
                        <button class="btn-minus" id="minus" onclick="handleMinus()"><i class="fa-solid fa-minus"></i></button>
                        <input type="number" value="1" id="amount">
                        <button class="btn-plus" id="plus" onclick="handlePlus()"><i class="fa-solid fa-plus"></i></button> 
                        <a href="index.php?act=cartprocess&id=<?=$sanpham[0]['id'] ?>"> 
                            <input type="submit" value="<?=$sanpham[0]['trang_thai']? "Đặt hàng":"Hết hàng"?>" <?=$sanpham[0]['trang_thai']? "":"disabled"?> class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
                        </a>
                    </div>
                </div>
                <div class="">
                    <h6 style="margin-top: 10px;">SKU</h6>
                    <p style="margin-left: 20px;"><?=$sanpham[0]['ten_loai'] ?></p>
                </div>
                <div class="">
                    <h6 style="margin-top: 20px;">Loại</h6>
                    <p style="margin-left: 20px;">Giày <?=$sanpham[0]['ten_loai'] ?></p>
                </div>
                <script>
                   let amountElement = document.getElementById("amount");
                    let amount = amountElement.value;
                    let render = (amount) => {
                    amountElement.value = amount;
                    }
                    let handlePlus = () => {
                    if(amount<15){
                    amount++;
                    render(amount);
                    }
                    }

                    let handleMinus = () => {
                    if(amount>1){
                    amount--;
                    render(amount);
                    }
                    }

                    amountElement.addEventListener('input',  () => {
                    amount = amountElement.value;
                    amount = parseInt(amount);
                    amount = (isNaN(amount) || amount == 0)?1:amount;
                    render(amount);
                    })

                </script>
            </div>
            <div class ="col-sm content-pr">
                <div class= "row" style="margin-left: 30px; margin-top: 80px;">
                    <div class ="col-md-5 col-sm-6 text-center" style="word-break: break-all;">
                        <p><i class="fa-solid fa-rotate"></i>&nbsp;</p><span style="word-wrap: break-word;"> Chính hãng 100% - Đổi trả trong 1 tháng (đối với sản phẩm chưa sử dụng)</span>
                    </div>
                    <div class ="col-md-5 col-sm-6 text-center" style="word-break: break-all;">
                        <p><i class="fa-solid fa-truck"></i>&nbsp;</p><span> Miễn phí giao hàng cho đơn hàng từ 500.000đ trong 10km đầu tiên</span>
                    </div>
                    <div class ="col-md-5 col-sm-6 text-center" style="word-break: break-all; margin-top: 20px;">
                        <p><i class="fa-solid fa-share-from-square"></i>&nbsp;</p><span> Thu tiền khi nhận hàng, thanh toán trực tuyến với nhiều phương thức</span>
                    </div>
                    <div class ="col-md-5 col-sm-6 text-center" style="word-break: break-all; margin-top: 20px;">
                        <p><i class="fa-solid fa-headset"></i>&nbsp;</p><span> Trung tâm cuộc gọi: 1900.679.678 (7:30 - 22:00)</span>
                    </div>
                </div>
            </div>
    </div>
    <!--  -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
            // $("input").keyup(function(){
            //     txt = $("input").val();
                $("#binhluan").load("view/comment.php", {idpro: <?=$id?>});
            // });
            });
        </script>
        <div class="form-group" id="binhluan">
            
        </div>
    </div>  
    <style>
        .btn-minus{
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
        }
        .btn-plus{
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
        }
        .content-1 p{
            text-align: center;
        }
        .btn-size button{
            margin-top: 5px;
        }
        .btn-size button:hover{
            background-color: #ccc;
        }
        .amount-form{
            display: flex;
        }
        .amount-form input{
            outline: none;
            width: 50px;
            text-align: center;
            height: 35px;
            /* background-color: aqua; */
            border: 1px solid #ccc;
        }
        .amount-form button{
            border: 1px solid #ccc;
            outline: none;
            height: 35px;
            width: 35px;
            background-color: #cccc;
        }
    </style>
</div>
<?php
    ob_start(); 
    session_start();
    include 'view/header.php';
    include 'model/bill.php';
    include 'model/pdo.php';
    include 'model/taikhoan.php';
    include 'model/sanpham.php';
    include 'model/danhmuc.php';
    include 'model/tintuc.php';
    include 'model/cart.php';
    include 'var.php';
    $spnew =loadall_sanpham_home();
    $topview = get_product_top9();
    $ttnew=loadall_tintuc_home();
    $dsdm =loadall_danhmuc();
    $spdacbiet=get_product_special();
    $cart=loadall_giohang();
    if(!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];
    $note = 0;
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            case 'blog':
                include 'view/blog.php';
                break;
            case 'cart':
                include "view/cart.php";
                // if(isset($_SESSION['giohang'])&&(count($_SESSION['giohang'])>0)){
                    
                //     include "view/cart.php";
                // }else {
                //     echo ' 
                //     <a href="index.php?act=category" style="color: red; margin:40em 20em ; font-size: 30px">GIỎ HÀNG TRỐNG</a>
                    
                //     <script>    
                //         alert:"Giỏ hàng Trống" 
                //     </script>';
                // }    
                break;
            case 'cartprocess':

                include 'view/cartprocess.php';
                break;
            case 'cartupdate':
                include 'view/cartupdate.php';
                break;
            case 'delcart':
                if (isset($_GET['idsp'])&&($_GET['idsp']>=0)){
                    $id=$_GET['idsp'];
                    if(isset($id)){
                        // $id = $_POST['id'];
                          // if(isset($_POST['id']) && $_POST['id'] == $_GET['id']){
                            array_splice($_SESSION['giohang'],$_GET['id'],1);
                          }else
                           unset($_SESSION['giohang']);
                }
                    include 'view/delcart.php';
                break;
            // case 'sanpham':
            //     if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
            //         $kyw=$_POST['kyw'];
            //     }else{
            //         $kyw="";
            //     }
            //     if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
            //         $iddm=$_GET['iddm'];
            //     }else{
            //         $iddm="";
            //     }
            //     $dssp=loadall_sanpham($kyw,$iddm);
            //     $ten_loai=load_ten_dm($iddm);
            //     include 'view/category.php';
            
            case 'category':
                if(isset($_GET['iddm']) && $_GET['iddm']!=""){
                    $filtersp=filter_sanpham($_GET['iddm']);
                    $react =1;}
                    else $react =0;
                include 'view/category.php';
                break;
            case 'checkout':
                include 'view/checkout.php';
                break;
            case 'confirmation':
                
                    if(isset($_POST['confirmation'])&&($_POST['confirmation'])){
                        $nguoi_nhan=$_POST['nguoi_nhan'];
                        $dia_chi_nhan=$_POST['dia_chi_nhan'];
                        $sdt_nhan=$_POST['sdt_nhan'];
                        $payment=$_POST['payment'];
                        $email=$_POST['email'];      
                        // $ma_tk=$_POST['ma_tk'];       

                        $sql = "INSERT INTO don_hang (nguoi_nhan,dia_chi_nhan,sdt_nhan,payment,email)
                        VALUES ('$nguoi_nhan','$dia_chi_nhan','$sdt_nhan','$payment','$email')";
                        // taodonhang($nguoi_nhan,$dia_chi_nhan,$sdt_nhan,$payment,$email,$ma_tk);
                        // trả về in đơn
                        
                    }
                include 'view/confirmation.php';
                break;
            case 'contact':
                include 'view/contact.php';
                break;
            case 'elements':
                include 'view/elements.php';
                break;
            case 'filtersanpham':

                break;
            case 'sanphamct':
                if (isset($_GET['idsp'])&&($_GET['idsp']>0)){
                    $id=$_GET['idsp'];
                    $sanpham=loadone_sanpham($id);
                    include 'view/sanphamct.php';
                }else{
                    include 'view/home.php';
                }
                break;
            case 'login':
                if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
                    # code...
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $kq = getuserinfo($user,$pass);
                    $role = $kq[0]['role'];
                    if($role==1){
                        $_SESSION['role']=$role;
                        header('location: admin/index.php'); //note
                    }elseif ($role==2){ 
                        $_SESSION['role']=$role;
                        header('location: admin/index.php'); 
                    }else{
                        $_SESSION['role']=$role;
                        $_SESSION['iduser']= $kq[0]['id'];
                        $_SESSION['user']= $kq[0]['user'];
                        header('location: index.php'); //note
                        break;
                    }
                }
                include 'view/login.php';
                break;
            case 'signup':
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $email = $_POST['email'];
                    $fullname = $_POST['fullname'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    insert_taikhoan($email,$fullname,$user,$pass,$address,$tel); 
                    $thongbao="Đăng ký thành công. Vui lòng <a href='index.php?act=login'>đăng nhập</a>";
                }
                include 'view/signup.php';
                break;
            case 'suatk':
                if(isset($_GET['ma_tk'])&&($_GET['ma_tk'])){
                    // $id=$_GET['id'];
                    $sql = "SELECT * FROM tai_khoan WHERE ma_tk =".$_GET['ma_tk'];
                    $dm = pdo_query_one($sql);
                }
                include "view/capnhat_tk.php";
                break;     
            case 'capnhat_tk':
                if(isset($_POST['capnhap'])&&($_POST['capnhap'])){
                    $ma_tk = $_POST['ma_tk'];
                    $fullname = $_POST['fullname'];
                    $user = $_POST['user']; 
                    $pass = $_POST['pass'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    update_taikhoan($ma_tk,$fullname,$user,$pass,$address,$tel); 
                }
                include 'view/capnhat_tk.php';
                break;
            case 'quenmk':
                if(isset($_POST['guiemail'])&&($_POST['guiemail'])){
                    $email=$_POST['email'];
                    $checkemail=checkemail($email);
                    if(is_array($checkemail)){
                        $thongbao="Mật khẩu của bạn là: ".$checkemail['pass'];
                    } else {
                        $thongbao="Email này không tồn tại!";
                    }
                    //header('Location:index.php?act=edit_taikhoan');
                }
                include "view/quenmk.php";
                break;    
            case 'thoat':
                unset($_SESSION['user']);
                unset($_SESSION['iduser']);
                unset($_SESSION['role']);
                header('location: index.php');
                break;
            case 'single-blog':
                include 'view/single-blog.php';
                break;
            case 'single-product':
                include 'view/single-product.php';
                break;
            case 'banner':
                include 'view/banner.php';
                break;
            default:
                include 'view/home.php';
                break;
        }
    }
    else{
        include 'view/home.php';
    }




    include 'view/footer.php';
?>
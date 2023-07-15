<?php
    session_start();
    ob_start();
    include "model/pdo.php";
    include "model/sanpham.php";
    include "model/danhmuc.php";
    include "model/taikhoan.php";
    include "model/binhluan.php";
    include "model/viewcart.php";
    include "model/chitietsanpham.php";

    include "view/header.php";
    include "view/global.php"; 

    if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

    $spnew=loadall_sanpham_home();
    $dstop8=loadall_sanpham_top8();
    $flagship=flagship();
    if((isset($_GET['act']))&&($_GET['act']!="")) {
        $act=$_GET['act'];
        switch ($act) {
            case 'gioithieu':
                include "view/gioithieu.php";
                break;
            case 'danhmuc':
                $sosanpham = !empty ($_GET['sosanpham']) ? $_GET['sosanpham'] : 6;
                $trang= !empty ($_GET['trang']) ? $_GET['trang'] : 1;
                $sosanpham=6;
                $sql1 = loadfullsanpham();
                $sql1= count($sql1);
                $sotrang=ceil($sql1/$sosanpham);
                include "view/danhmuc.php";
                break;
            case 'sanpham':
                if(isset($_POST['keyword'])&&($_POST['keyword']!="")) {
                    $keyword=$_POST['keyword'];
                } else {
                    $keyword="";
                }
                if(isset($_GET['madm'])&&($_GET['madm']>0)){
                    $madm=$_GET['madm'];
                    
                } else {
                    $madm=0;
                }
                $dssp=listsp($keyword,$madm);
                $tendm=load_ten_dm($madm);
                include "view/sanpham.php";
                break;
            case 'sanphamct':
                if((isset($_GET['masp'])&&($_GET['masp']>0))){
                    $masp=$_GET['masp'];
                    $load1sp=load1sp($masp);
                    extract($load1sp);
                    $spcungloai=load_sanpham_cungloai($masp,$madm);
                    include "view/chitietsanpham.php";
                } else {
                    include "view/home.php";
                }
                
                break;
            case 'dangky':
                if(isset($_POST['dangky'])&&($_POST['dangky'])) {
                    $user =  $_POST['user'];
                    $email = $_POST['email'];
                    $pass = $_POST['pass'];
                    $check4=insert_taikhoan($email,$user,$pass);
                    if(!$check4==1) {
                    $error[] = "Tài Khoản Đã Tồn Tại";
                    } else {
                    $errol[] = "Đăng ký thành công";
                    }
                    }
                include "view/taikhoan/dangky.php";
                break;
            case 'dangnhap':
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])) {
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $checkuser=checkuser($user,$pass);
                    if(is_array($checkuser)) {
                        $_SESSION['user']=$checkuser;
                        //$thongbao="Đã đăng nhập thành công";
                        echo "<script> window.location.href='index.php';</script>";
                        
                    } else {
                        $thongbao="Tài khoản không tồn tại";
                    }
                }
                include "view/taikhoan/dangnhap.php";
                break;
            case 'edit_taikhoan':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                    $makh=$_POST['makh'];
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $email=$_POST['email'];
                    $diachi=$_POST['diachi'];
                    $phone=$_POST['phone'];
                    $checkuser=checkuser($user,$pass);

                    update_taikhoan($makh,$user,$pass,$email,$diachi,$phone);
                    header('Location: index.php?act=edit_taikhoan');
                } 
                include "view/taikhoan/edit_taikhoan.php";
                break;
            case 'quenmk':
                if(isset($_POST['guiemail'])&&($_POST['guiemail'])) {
                    $email=$_POST['email'];
                    $checkemail=checkemail($email);
                    
                    if(is_array($checkemail)) {
                        $thongbao="Mật khẩu của bạn là: ".$checkemail['pass'];
                    } else {
                        $thongbao="Email này không tồn tại";
                    }
                } 
                include "view/taikhoan/quenmk.php";
                break;
            case 'addtocart':
                if(isset($_POST['addtocart'])&&($_POST['addtocart'])) {
                    $masp=$_POST['masp'];
                    $tensp=$_POST['tensp'];
                    $hinh=$_POST['hinh'];
                    $dongia=$_POST['dongia'];
                    $soluong=1;
                    $ttien=$soluong * $dongia;
                     /* */
                    $i=0;
                    $fl=0;
                    //tìm và so sánh sp trong giỏ hàng
                    if(isset($_SESSION['mycart'])&&(count($_SESSION['mycart'])>0)) {
                        foreach ($_SESSION['mycart'] as $sp) {
                            if($sp[0]==$masp) {
                                //Update số lượng
                                $soluong+=$sp[4];
                                $fl=1;
                                //Update số lượng mới vào giỏ hàng
                                $_SESSION['mycart'][$i][4]=$soluong;
                                break;
                            }
                            $i++;
                        }
                    }

                    if($fl==0) {
                        $spadd=[$masp,$tensp,$hinh,$dongia,$soluong,$ttien];
                        array_push($_SESSION['mycart'],$spadd);
                    }
                }
                header('Location: index.php?act=viewcart');
                break;
            case 'viewcart':
                include "view/viewcart.php";
                break;
            case 'delcart':
                if(isset($_GET['idcart'])) {
                    $masp=$_GET['idcart'];
                    unset($_SESSION['mycart'][$masp]);
                }
                else {
                    $_SESSION['mycart']=[];
                }
                header('Location: index.php?act=viewcart');
                break;
            case 'checkout':
                include "view/checkout.php";
                break;
        case 'thanhtoan':
            if (isset($_POST['thanhtoan'])) {
                $tongdonhang = $_POST['tong'];
                $hoten = $_POST['hoten'];
                $diachi = $_POST['diachi'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $makh = $_SESSION['user']['makh'];
                $ngaydathang = date("Y-m-d h:i:sa");
                $total = tongdonhang();
                //$ngaydathang=date('h:is:sa d/m/Y');
                //$tongdonhang=tongdonhang();
                $idbill = taodonhang($tongdonhang, $makh, $hoten, $diachi, $email, $phone, $ngaydathang, $total);
            }
                $id=idbill();
                extract($id);
                for ($i=0; $i < sizeof($_SESSION['mycart']); $i++) {
                    $tensp=$_SESSION['mycart'][$i][1];
                    $hinhsp=$_SESSION['mycart'][$i][2];
                    $dongia=$_SESSION['mycart'][$i][3];
                    $soluong=$_SESSION['mycart'][$i][4];
                    $thanhtien=$dongia*$soluong;
                    taogiohang($tensp,$hinhsp,$dongia,$soluong,$thanhtien,$idbill);
                }
                include "view/billconfirm.php";
                if(isset($_GET['idcart'])) {
                    array_splice($_SESSION['mycart'],$_GET['masp'],1);   
                }
                else {
                    $_SESSION['mycart']=[];
                }
                break;
            case 'mybill':
                $listbill=loadall_bill($_SESSION['user']['makh']);
                include "view/mybill.php";
                break;
            case 'chitietdonhang':
                $idbill=$_GET['id'];
                $listctdh=loadall_ctdh($idbill);
                include "view/chitietdonhang.php";
                break;
            case 'timkiem_sanpham':
                    if(isset($_POST['timkiem'])) {
                        $tensp=$_POST['tensp'];
                        $listsp=timkiem_sanpham($tensp);
                        include "view/timkiem_sanpham.php";
                    } else {
                    die("Không Sản Phẩm Bạn Vừa Nhập, Vui Lòng Nhập Lại");
                    }
                    break;
            case 'phantrang':
                    $sosanpham = !empty ($_GET['sosanpham']) ? $_GET['sosanpham'] : 6;
                    $trang= !empty ($_GET['trang']) ? $_GET['trang'] : 1;
                    $offset=($trang-1)*$sosanpham;
                    $spnew = loadtrang($sosanpham,$offset);
                    $sql1 = loadfullsanpham();
                    $sql1= count($sql1);
                    $sotrang=ceil($sql1/$sosanpham);
                    include "view/danhmuc.php";
                    break;
            case 'thoat':
                session_unset();
                echo "<script> window.location.href='index.php';</script>";
                break;
            case 'lienhe':
                include "view/lienhe.php";
                break;
            default:
                include "view/home.php";
                break;
        }
    } else {
        include "view/home.php";
    }
    include "view/footer.php";
?>
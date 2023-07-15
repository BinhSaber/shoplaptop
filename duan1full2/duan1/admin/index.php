<?php
session_start();
ob_start();
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/viewcart.php";
include "header.php";

if (isset($_GET['action'])) {
    $act=$_GET['action'];
    switch ($act){
        //Danh mục//
        //Thêm danh mục//
        case 'adddm':
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                $tendm = $_POST['tendm'];
                $hinhdm = $_FILES['hinhdm']['name'];
                $target_dir = "../img/";
                $target_file = $target_dir . basename($_FILES["hinhdm"]["name"]);
                adddm($tendm,$hinhdm);
            }
            include "chucnang/danhmuc/adddm.php";
            break;
        case 'xoatk':
            if(!isset($_SESSION['user'])){
                echo "<script>alert('Bạn không có quyền xóa tài khoản!');</script>";
            } else if($_SESSION['user']['makh']==$_GET['makh']){
                echo "<script>alert('Bạn không thể xóa tài khoản của mình!');</script>";
            } else {
                $makh=$_GET['makh'];
                xoatk($makh);
            }

            $listtaikhoan=loadall_taikhoan();
            include "chucnang/taikhoan/listtk.php";
            break;
        //Danh sách danh mục//
        case 'listdm':
            $listdm=listdm();
            include "chucnang/danhmuc/listdm.php";
            break;
        //Xóa danh mục//
        case 'xoadanhmuc':
            if(isset($_GET['madm'])&&($_GET['madm']>0)){
                xoadm($_GET['madm']);
            }
            $listdm=listdm();
            include "chucnang/danhmuc/listdm.php";
            break;
        //Load 1 danh mục//
        case 'suadanhmuc':
            if(isset($_GET['madm'])&&($_GET['madm']>0)){
                $load1dm=load1dm($_GET['madm']);
             }
             include "chucnang/danhmuc/suadm.php";
             break;
        //Cập nhật sản phẩm//
        case 'capnhatdm':
            if(isset($_POST['capnhatdm'])&&($_POST['capnhatdm'])){
                $madm=$_POST['madm'];
                $tendm=$_POST['tendm'];
                $hinhdm=$_FILES['hinhdm']['name'];
                $target_dir = "../img/";
                $target_file = $target_dir . basename($_FILES["hinhdm"]["name"]);
                capnhatdm($madm,$hinhdm,$tendm);
            }
            $listdm=listdm();
            include "chucnang/danhmuc/listdm.php";
            break;
        //Hết danh mục//
        //Sản phẩm//
        //Thêm sản phẩm//
        case 'addsp':
            if(isset($_POST['themmoisp'])&&($_POST['themmoisp'])){
                $madm=$_POST['madm'];
                $tensp=$_POST['tensp'];
                $dongia=$_POST['dongia'];
                $mota=$_POST['mota'];
                $color=$_POST['color'];
                $ramrom=$_POST['ramrom'];
                $giamgia=$_POST['giamgia'];
                $hinhsp=$_FILES['hinhsp']['name'];
                $target_dir = "../img/";
                $target_file = $target_dir . basename($_FILES["hinhsp"]["name"]);
                addsp($tensp,$hinhsp,$dongia,$color,$ramrom,$madm,$mota,$giamgia);
            }
            $listdm=listdm();
            include "chucnang/sanpham/addsp.php";
            break;
        //List sản phẩm//
        case 'listsp':
            if(isset($_POST['listok']) && ($_POST['listok'])){
                $keyword=$_POST['keyword'];
                $madm=$_POST['madm'];
            }else{
                $keyword='';
                $madm=0;
            }
            $listdm=listdm();
            $listsanpham=listsp($keyword,$madm);
            include "chucnang/sanpham/listsp.php";
            break;
        //Xóa sản phẩm//
        case 'xoasp':
            if(isset($_GET['masp'])&&($_GET['masp']>0)){
                xoasp($_GET['masp']);
            }
            $listsanpham=listsp("",0);
            include "chucnang/sanpham/listsp.php";
            break;
        //Load 1 sản phẩm//
        case 'suasp':
            if(isset($_GET['masp'])&&($_GET['masp']>0)){
                   $load1sp=load1sp($_GET['masp']);
                }   
                $listdm=listdm();
                include "chucnang/sanpham/suasp.php";
            break;
        //Cập nhật sản phẩm//
        case 'capnhatsp':
            if(isset($_POST['capnhatsp'])&&($_POST['capnhatsp'])){
                $masp=$_POST['masp'];
                $madm=$_POST['madm'];
                $tensp=$_POST['tensp'];
                $dongia=$_POST['dongia'];
                $color=$_POST['color'];
                $ramrom=$_POST['ramrom'];
                $mota=$_POST['mota'];
                $giamgia=$_POST['giamgia'];
                $hinhsp=$_FILES['hinhsp']['name'];
                $target_dir = "../img/";
                $target_file = $target_dir . basename($_FILES["hinhsp"]["name"]);
                capnhatsanpham($masp,$tensp,$hinhsp,$dongia,$color,$ramrom,$madm,$mota,$giamgia);
            }
            $listdm=listdm();
            $listsanpham=listsp();
            include "chucnang/sanpham/listsp.php";
            break;
        // Bình Luận //
        case 'listbl':
            $listbinhluan=loadall_binhluan(0);
            include "chucnang/binhluan/listbl.php";
            break;
        case 'capnhatbl':
            if(isset($_POST['capnhatbl'])&&($_POST['capnhatbl'])){
                $mabl=$_POST['mabl'];
                $noidung=$_POST['noidung'];
                $ngaybinhluan=$_POST['ngaybinhluan'];
                capnhatbl($mabl,$noidung,$ngaybinhluan);
            }
            $listbinhluan=loadall_binhluan(0);
            include "chucnang/binhluan/listbl.php";
            break;
        //Sửa bl
        case 'suabl':
            if(isset($_GET['mabl'])&&($_GET['mabl']>0)){
                   $load1bl=load1bl($_GET['mabl']);
                }   
                $listbinhluan=loadall_binhluan(0);
                include "chucnang/binhluan/suabl.php";
            break;
        //Xóa bl
        case 'xoabl':
            if(isset($_GET['mabl'])&&($_GET['mabl']>0)){
                xoabl($_GET['mabl']);
            }
            $listbinhluan=loadall_binhluan(0);
            include "chucnang/binhluan/listbl.php";
            break;
        //Tài khoản//
        //List tải khoản//
        case 'listtaikhoan':
            $listtaikhoan=loadall_taikhoan();
          include "chucnang/taikhoan/listtk.php";
          break;
        //Biểu đồ//
        case 'bieudo':
            include "chucnang/bieudo/bieudo.php";
            break;
        //Đơn Hàng//
        case 'listbill':
           
            $listbill=get_bill_all();
            include "chucnang/donhang/listbill.php";
            break;
        //Update Bill
        case 'capnhatbill':
            if(isset($_POST['capnhatbill'])&&($_POST['capnhatbill'])){
                $id=$_POST['id'];
                $hoten=$_POST['hoten'];
                $email=$_POST['email'];
                $phone=$_POST['phone'];
                $diachi=$_POST['diachi'];
                $tongdonhang=$_POST['tongdonhang'];
                $status =$_POST['status'];
                capnhatbill($id,$hoten,$email,$phone,$diachi,  $status);
            }
            $listbill=get_bill_all();
            include "chucnang/donhang/listbill.php";
            break;
        //Sửa bill
        case 'suabill':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                   $load1bill=load1bill($_GET['id']);
                }   
            $listbill=get_bill_all();
            include "chucnang/donhang/suabill.php";
            break;
        //Xóa bill
        case 'xoabill':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                xoabill($_GET['id']);
            }
            $listbill=get_bill_all("",0);
            include "chucnang/donhang/listbill.php";
            break;
            case 'bieudodonhang':
            include "chucnang/bieudodonhang/bieudodonhang.php";
            break;
        //Mặc định//
        default:
            include "content.php";
            break;
    }
}else {
    include "content.php";
}
include "footer.php";
?>
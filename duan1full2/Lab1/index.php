<?php
    session_start();
    ob_start();

    include "model.php"; 

    if((isset($_GET['act']))&&($_GET['act']!="")) {
        $act=$_GET['act'];
        switch ($act) {
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
                include "dangky.php";
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
                include "dangnhap.php";
                break;
            case 'edit_taikhoan':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                    $makh=$_POST['makh'];
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $name=$_POST['name'];
                    $diachi=$_POST['diachi'];
                    $phone=$_POST['phone'];
                    $checkuser=checkuser($user,$pass);

                    update_taikhoan($makh,$user,$pass,$name,$diachi,$phone);
                    header('Location: index.php?act=edit_taikhoan');
                } 
                include "edit_taikhoan.php";
                break;
            case 'thoat':
                session_unset();
                echo "<script> window.location.href='index.php';</script>";
                break;
            default:
                include "index.php";
                break;
        }
    } else {
        include "view/home.php";
    }
?>
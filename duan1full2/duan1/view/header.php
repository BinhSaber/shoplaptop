<?php
$listdm = listdm();
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mobile World</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!-- binh luan -->
    <link rel="stylesheet" href="css/binhluan.css">

    <link rel="stylesheet" href="css/chitietsanpham.css">
<style>
    .chitiet {
    width: 1200px;
    margin: 0 auto;
}
.sanpham {
    margin: 0px;

}
.thanhtieude {
    margin: 30px 0px 30px 0px;
}
.shopping__cart__table table tbody tr td {
    padding-bottom: 30px;
    padding-top: 30px;
    width: 100px;
}
</style>
</head>

<body>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p>15 Quang Trung, Tân Thới Hiệp, Quận 12, TP.Hồ Chí Minh.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <?php
                                if (isset($_SESSION['user'])) {
                                    extract($_SESSION['user']);
                                ?>
                                    <nav class="header__menu mobile-menu" style="padding: 0;">
                                        <ul>


                                            <li href="#" style="color: white;">Xin chào: <?= $user ?>

                                                <ul class="dropdown" style="    width: 200px!important;">
                                                    <li>
                                                        <a href="index.php?act=mybill">Đơn hàng của tôi</a>
                                                    </li>
                                                    <li>
                                                        <a href="index.php?act=edit_taikhoan">Cập nhật</a>
                                                    </li>
                                                    <li>
                                                        <a href="index.php?act=quenmk">Quên mật khẩu</a>
                                                    </li>
                                                    <?php if ($vaitro == 1) { ?>
                                                        <li>
                                                            <a href="admin/index.php">Đăng nhập Admin</a>
                                                        </li>
                                                    <?php } ?>
                                                    <li>
                                                        <a href="index.php?act=thoat">Đăng Xuất</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                <?php
                                } else {
                                ?>
                                    <a href="index.php?act=dangnhap">Đăng nhập</a>
                                <?php } ?>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="index.php"><b>Mobile World</b></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="index.php">Trang Chủ</a></li>
                            <li><a  href="index.php?act=gioithieu">Giới Thiệu</a></li>
                            <li><a href="index.php?act=danhmuc">Danh Mục</a>
                                <ul class="dropdown">
                                    <?php
                                    foreach ($listdm as $dm) {
                                        extract($dm);
                                        $linkdm = "index.php?act=sanpham&madm=" . $madm;
                                        echo '<li>
                                                    <a href="' . $linkdm . '">' . $tendm . '</a>
                                            </li>';
                                    }
                                    ?>
                                </ul>
                            </li>
                            <li><a href="index.php?act=lienhe">Liên Hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <form action="index.php?act=timkiem_sanpham" method="post">
                            <input type="text" name="tensp" placeholder="Tìm kiếm sản phẩm">
                            <button type="submit" name="timkiem" class="fa fa-search"></button>
                        </form>
                        <?php if (isset($_SESSION['user'])) { ?>
                            <a href="#"><img src="img/icon/heart.png" alt=""></a>
                            <a href="index.php?act=viewcart"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="img/banner.png">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Sản Phẩm Được Yêu Thích Nhất</h6>
                                <h2>Iphone 13 Pro</h2>
                                <p>Được bổ sung và nâng cấp thêm phần tấm nền OLED cao cấp cùng dung lượng bộ nhớ siêu khủng phù hợp cho mọi đối tượng.</p>
                                <a href="#" class="primary-btn">Mua Ngay <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="img/banner2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Sản Phẩm Mới</h6>
                                <h2>Iphone 14 Pro Max</h2>
                                <p>Được đánh giá là một trong những điện thoại tốt nhất ở thời điểm hiện tại,nhiều tính năng mới và thú vị</p>
                                <a href="#" class="primary-btn">Mua Ngay <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <br>
    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">Sản Phẩm Mới</li>
                    </ul>
                </div>
            </div>
            <div class="row product__filter">
                <!-- 1 -->
                <?php
                    $i=0;
                    foreach($spnew as $spnew) {
                        extract($spnew);
                        $hinh=$img_path.$hinhsp;

                        echo '
                                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                                <form action="index.php?act=addtocart" method="post">  
                                    <input type="hidden" name="masp" value="'.$masp.'">
                                    <input type="hidden" name="tensp" value="'.$tensp.'">
                                    <input type="hidden" name="hinh" value="'.$hinh.'">
                                    <input type="hidden" name="dongia" value="'.$dongia.'">   
                                    <div class="product__item">
                                        <a href="index.php?act=sanphamct&masp='.$masp.'">
                                        <div class="product__item__pic set-bg">
                                        <img class="product__item__pic set-bg" src='.$hinh.'>
                                            <span class="label">New</span>
                                            <ul class="product__hover">
                                                <li><a href="index.php?act=sanphamct&masp='.$masp.'"><img src="img/icon/search.png" alt=""></a></li>
                                            </ul>
                                        </div>
                                        </a>
                                        <div class="product__item__text">
                                            <div class="form-dat-hang">
                                            <h5>'.$tensp.'</h5>
                                            <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                                            <h5>'.number_format($dongia,0,",",".").' VND</h5>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                        </div>
                        ';
                            
                    }
                ?>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">Sản Phẩm Được Yêu Thích</li>
                    </ul>
                </div>
            </div>
            <div class="row product__filter">
                <!-- 1 -->
                <?php
                    $i=0;
                    foreach($dstop8 as $sp) {
                        extract($sp);
                        $hinh=$img_path.$hinhsp;

                        echo '
                                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                                <form action="index.php?act=addtocart" method="post">  
                                    <input type="hidden" name="masp" value="'.$masp.'">
                                    <input type="hidden" name="tensp" value="'.$tensp.'">
                                    <input type="hidden" name="hinh" value="'.$hinh.'">
                                    <input type="hidden" name="dongia" value="'.$dongia.'">   
                        
                            <div class="product__item">
                                <a href="index.php?act=sanphamct&masp='.$masp.'">
                                <div class="product__item__pic set-bg">
                                <img class="product__item__pic set-bg" src='.$hinh.'>
                                    <span class="label"><i class="fa-solid fa-heart" style="color:red;font-size:15px"></i></span>
                                    <ul class="product__hover">
                                        <li><a href="index.php?act=sanphamct&masp='.$masp.'"><img src="img/icon/search.png" alt=""></a></li>
                                    </ul>
                                </div>
                                </a>
                                <div class="product__item__text">
                                    <h5>'.$tensp.'</h5>
                                    <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                                    <h5>'.number_format($dongia,0,",",".").' VND</h5>
                                </div>
                            </div>
                            </form>
                        </div>
                        ';
                            
                    }
                ?>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">Flagship Cao Cấp</li>
                    </ul>
                </div>
            </div>
            <div class="row product__filter">
                <!-- 1 -->
                <?php
                    $i=0;
                    foreach($flagship as $flagship) {
                        extract($flagship);
                        $hinh=$img_path.$hinhsp;

                        echo '
                                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                                <form action="index.php?act=addtocart" method="post">  
                                    <input type="hidden" name="masp" value="'.$masp.'">
                                    <input type="hidden" name="tensp" value="'.$tensp.'">
                                    <input type="hidden" name="hinh" value="'.$hinh.'">
                                    <input type="hidden" name="dongia" value="'.$dongia.'">   
                        
                            <div class="product__item">
                                <a href="index.php?act=sanphamct&masp='.$masp.'">
                                <div class="product__item__pic set-bg">
                                <img class="product__item__pic set-bg" src='.$hinh.'>
                                    <span class="label"><i class="fa-sharp fa-solid fa-star" style="color:yellow;font-size:15px;"></i></span>
                                    <ul class="product__hover">
                                        <li><a href="index.php?act=sanphamct&masp='.$masp.'"><img src="img/icon/search.png" alt=""></a></li>
                                    </ul>
                                </div>
                                </a>
                                <div class="product__item__text">
                                    <h5>'.$tensp.'</h5>
                                    <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                                    <h5>'.number_format($dongia,0,",",".").' VND</h5>
                                </div>
                            </div>
                            </form>
                        </div>
                        ';
                            
                    }
                ?>
            </div>
        </div>
    </section>
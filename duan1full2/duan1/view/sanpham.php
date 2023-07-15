<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4><?=$tendm?></h4>
                        <div class="breadcrumb__links">
                            <a href="index.php?act=trangchu">Trang Chủ</a>
                            <span>Danh Mục</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__search">
                        </div>
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseTwo">Thương hiệu</a>
                                    </div>
                                    <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__brand">
                                                <ul>
                                                    <?php
                                                        foreach($listdm as $dm) {
                                                            extract($dm);
                                                            $linkdm="index.php?act=sanpham&madm=".$madm;
                                                            echo '<li>
                                                                    <a href="'.$linkdm.'">'.$tendm.'</a>
                                                            </li>';
                                                        }
                                                    ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <?php
                            $i=0;
                            foreach($dssp as $sp) {
                                extract($sp);
                                $hinh=$img_path.$hinhsp;
                                
                                echo '
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                        <form action="index.php?act=addtocart" method="post">  
                                            <input type="hidden" name="masp" value="'.$masp.'">
                                            <input type="hidden" name="tensp" value="'.$tensp.'">
                                            <input type="hidden" name="hinh" value="'.$hinh.'">
                                            <input type="hidden" name="dongia" value="'.$dongia.'"> 
                                        <div class="product__item">
                                            <a href="index.php?act=sanphamct&masp='.$masp.'">
                                            <div class="product__item__pic set-bg">
                                            <img class="product__item__pic set-bg" src='.$hinh.'>
                                                <ul class="product__hover">
                                                <li><a href="index.php?act=sanphamct&masp='.$masp.'"><img src="img/icon/search.png" alt=""></a></li>
                                                </ul>
                                            </div>
                                            <div class="product__item__text">
                                                <h6>'.$tensp.'</h6>
                                                <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                                                <h5>'.number_format($dongia,0,",",".").' VND</h5>
                                                <div class="product__color__select">
                                                    <label for="pc-4">
                                                        <input type="radio" id="pc-4">
                                                    </label>
                                                    <label class="active black" for="pc-5">
                                                        <input type="radio" id="pc-5">
                                                    </label>
                                                    <label class="grey" for="pc-6">
                                                        <input type="radio" id="pc-6">
                                                    </label>
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
        </div>
    </section>
    <!-- Shop Section End -->
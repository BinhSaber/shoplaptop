
    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">Sản Phẩm Tìm Kiếm</li>
                    </ul>
                </div>
            </div>
            <div class="row product__filter">
                <!-- 1 -->
                <?php
                    $i=0;
                    foreach($listsp as $sp) {
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
    </section>
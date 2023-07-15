<!-- Shop Details Section Begin -->

<div class="chitiet">
    <div class="product_ct">


        <div class="thanhtieude">
            <p>
                <a href="menu.html"><b>Menu</b></a> /
                <a href="laptop.html"><b>Laptop</b></a> /
                <?php
                    extract($load1sp);
                    echo ''.$tensp.'';;
                ?>
            </p>
        </div>
        <!-- Code chi tiết sản phẩm -->
        <?php 
            extract($load1sp);
            $hinh=$img_path.$hinhsp;
            echo '
                <div class="sanpham">
                    <div class="trai">
                        <img src="'.$hinh.'">
                    </div>
                    <div class="phai">
                        <p>'.$tensp.'</p>
                        <p>Ram/Rom : '.$ramrom.'</p>
                        <p>Màu Sắc : '.$color.'</p>
                        <p>Giá : '.number_format($dongia,0,",",".").' VND</p>
                        <p>'.$mota.'</p>
                        <form action="index.php?act=addtocart" method="post">  
                            <input type="hidden" name="masp" value="'.$masp.'">
                            <input type="hidden" name="tensp" value="'.$tensp.'">
                            <input type="hidden" name="hinh" value="'.$hinh.'">
                            <input type="hidden" name="dongia" value="'.$dongia.'">  
                            <input type="submit" id="to" name="addtocart" value="Thêm vào giỏ hàng"> <br>
                        </form>
                    </div>
                </div>
            ';
            ?>
    </section>
    </div>

    <div class="binhluan">
        <div class="form-binhluan">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    $("#binhluan").load("view/binhluan.php", {masp: <?=$masp?>});
                });
            </script>
            <div class="tab-content" id="binhluan">
                
            </div>
        </div>
    </div>
        <section class="related spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="related-title">Sản Phẩm Liên Quan</h3>
                </div>
            </div>
            <div class="row">
            <?php
                    $i=0;
                    foreach($spcungloai as $spcungloai) {
                        extract($spcungloai);
                        $hinh=$img_path.$hinhsp;
                        echo '
                                <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                                <form action="index.php?act=addtocart" method="post">  
                                    <input type="hidden" name="masp" value="'.$masp.'">
                                    <input type="hidden" name="tensp" value="'.$tensp.'">
                                    <input type="hidden" name="hinh" value="'.$hinh.'">
                                    <input type="hidden" name="dongia" value="'.$dongia.'">   
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="'.$hinh.'">
                                    <span class="label">New</span>
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h5>'.$tensp.'</h5>
                                    <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                                    <h5>'.number_format($dongia,0,",",".").' VND</h5>
                                    <div class="product__color__select">
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
    </section>
</div>
<!-- Related Section End -->
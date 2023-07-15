<!-- Checkout Section Begin -->
<section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form action="index.php?act=thanhtoan" method="post">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <!-- <h6 class="coupon__code"><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click
                            here</a> to enter your code</h6> -->
                            <h6 class="checkout__title">THÔNG TIN ĐẶT HÀNG</h6>
                            <?php
                                if(isset($_SESSION['user'])) {
                                    $hoten=$_SESSION['user']['hoten'];
                                    $diachi=$_SESSION['user']['diachi'];
                                    $email=$_SESSION['user']['email'];
                                    $phone=$_SESSION['user']['phone'];
                                } else {
                                    $hoten="";
                                    $diachi="";
                                    $email="";
                                    $phone="";
                                }
                            ?>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Tên<span>*</span></p>
                                        <input type="text" name="hoten" value="<?=($hoten)?>"> 
                                    </div>
                                </div>
                                <!--
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Last Name<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                -->
                            </div>
                            <!-- <div class="checkout__input">
                                <p>Country<span>*</span></p>
                                <input type="text">
                            </div> -->
                            <div class="checkout__input">
                                <p>Địa Chỉ<span>*</span></p>
                                <input type="text" placeholder="Street Address" class="checkout__input__add" name="diachi" value="<?=$diachi?>">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input type="text" name="phone" value="<?=$phone?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" name="email" value="<?=$email?>">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4 class="order__title">Your order</h4>
                                <div class="checkout__order__products">Product <span>Total</span></div>
                                <?php
                                    $tong=0;
                                    $i=0;
                            
                                        foreach ($_SESSION['mycart'] as $cart) {
                                        $hinh=$img_path.$cart[2];
                                        $ttien=$cart[3]*$cart[4];
                                        $tong+=$ttien;
                                    
                                        echo '
                                            <ul class="checkout__total__products">
                                                <li>'.($i+1).'. '.$cart[1].'<span>'.$ttien.'</span></li>
                                            </ul>
                                            ';
                                        $i+=1;
                                    }
                                        echo '<ul class="checkout__total__all">
                                                <li>Total <input type="hidden" name="tong" value="'.$tong.'"><span>'.number_format($tong,0,",",".").'VNĐ</span></input></li>
                                            </ul>';
                            
                                ?>
                                <?php if (isset($_SESSION['user'])) {?>
                                <button type="submit" class="site-btn" name="thanhtoan">ĐỒNG Ý ĐẶT HÀNG</button>
                                <?php } else { ?>
                                <a href="index.php?act=dangnhap" class="site-btn">&emsp;&ensp; ĐĂNG NHẬP ĐỂ ĐẶT HÀNG</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
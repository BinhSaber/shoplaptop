<!-- Checkout Section Begin -->
<section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <!-- <h6 class="coupon__code"><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click
                            here</a> to enter your code</h6> -->
                            <h6 class="checkout__title">THÔNG TIN ĐƠN HÀNG</h6>
                            <input type="hidden" name="tongdonhang" value="<?=$tong?>">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Mã đơn hàng<span>*</span></p>
                                        <input type="text" value="<?=$id?>"> 
                                    </div>
                                </div>
                            </div>
                            <h6 class="checkout__title">THÔNG TIN ĐẶT HÀNG</h6>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Người đặt hàng<span>*</span></p>
                                        <input type="text" name="hoten" value="<?=$hoten?>"> 
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="checkout__input">
                                <p>Country<span>*</span></p>
                                <input type="text">
                            </div> -->
                            <div class="checkout__input">
                                <p>Địa Chỉ<span>*</span></p>
                                <input type="text" class="checkout__input__add" name="diachi" value="<?=$diachi?>">
                                <!-- <input type="text" placeholder="Apartment, suite, unite ect (optinal)"> -->
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
                    </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4 class="order__title">CHI TIẾT GIỎ HÀNG</h4>
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
                                            <li>'.($i+1).'. '.$cart[1].'<span>'.number_format($ttien,0,",",".").'</span></li>
                                        </ul>
                                        
                                            
                                            ';
                                        $i+=1;
                                    }
                                        echo '<ul class="checkout__total__all">
                                                <li>Total <span>'.number_format($tong,0,",",".").' VNĐ</span></li>
                                            </ul>';
                            
                                ?>
                                <!-- <ul class="checkout__total__products">
                                    <li>01. Vanilla salted caramel <span>$ 300.0</span></li>
                                    <li>02. German chocolate <span>$ 170.0</span></li>
                                    <li>03. Sweet autumn <span>$ 170.0</span></li>
                                    <li>04. Cluten free mini dozen <span>$ 110.0</span></li>
                                </ul>
                                <ul class="checkout__total__all">
                                    <li>Subtotal <span>$750.99</span></li>
                                    <li>Total <span>$750.99</span></li>
                                </ul>
                                <div class="checkout__input__checkbox">
                                    <label for="acc-or">
                                        Create an account?
                                        <input type="checkbox" id="acc-or">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Check Payment
                                        <input type="checkbox" id="payment">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        Paypal
                                        <input type="checkbox" id="paypal">
                                        <span class="checkmark"></span>
                                    </label>
                                </div> -->
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shopping Cart</h4>
                        <div class="breadcrumb__links">
                            <a href="index.php">Home</a>
                            <a href="index.php?act=danhmuc">Shop</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <table >
                            <thead>
                                <tr>
                                    <th>Tên Hàng Hóa</th>
                                    <th>Số Lượng</th>
                                    <th>Tổng Tiền</th>
                                    <th></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php
                                    $tong=0;
                                    $i=0;
                            
                                        foreach ($_SESSION['mycart'] as $cart) {
                                        $hinh=$cart[2];
                                        $ttien=$cart[3]*$cart[4];
                                        $tong+=$ttien;
                                        $xoasp='<a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xóa">';
                                        echo '
                                            <tr style="border:1px solid #000;">
                                                <td class="product__cart__item" >
                                                    <div class="product__cart__item__pic">
                                                        <img style="width:60px" src="'.$hinh.'" alt="">
                                                    </div>
                                                    <div class="product__cart__item__text">
                                                        <h6>'.$cart[1].'</h6>
                                                    </div>
                                                </td>
                                                <td class="quantity__item">
                                                    <div class="quantity">
                                                        <div class="pro-qty-2">
                                                            <input type="text" value="'.$cart[4].'">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="cart__price">'.number_format($ttien,0,",",".").'đ</td>
                                                <td class="cart__close">'.$xoasp.'</td>
                                            </tr>
                                            ';
                                        $i+=1;
                                    }
                                        echo '<tr>
                                                <td colspan="4">Tổng đơn hàng</td>
                            
                                                <td style="color:red; font-weight:bold ; font-size: 20px">'.number_format($tong,0,",",".").'đ</td>
                                                <td></td>
                                            </tr>';
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="index.php?act=danhmuc">Continue Shopping</a>  
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="index.php?act=delcart"> <input type="button" value="XÓA GIỎ HÀNG"></a>  
                            </div>
                        </div>
                        <!-- <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">
                                <a href="#"><i class="fa fa-spinner"></i> Update cart</a>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart__discount">
                    </div>
                    <div class="cart__total">
                        <h6>Cart total</h6>
                        <?php
                            echo '
                                <ul>
                                    <li>Subtotal <span>'.number_format($tong,0,",",".").'đ</span></li>
                                    <li>Total <span>'.number_format($tong,0,",",".").'đ</span></li>
                                </ul>';
                        ?>
                        <?php if($tong > 0){ ?>
                        <a href="index.php?act=checkout" class="primary-btn" >Thanh Toán</a>
                        <?php } else { ?>
                        <a href="index.php?act=danhmuc" class="primary-btn" >Bạn Chưa Có Sản Phẩm Nào Trong Giỏ Hàng</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
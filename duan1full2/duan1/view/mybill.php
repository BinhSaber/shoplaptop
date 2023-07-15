<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Đơn hàng của tôi</h4>
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
            <div class="row_bill">
                <div class="col">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Mã Đơn Hàng</th>
                                    <th>Ngày Đặt Hàng</th>
                                    <th>Địa Chỉ</th>
                                    <th>Tổng Giá Trị Đơn Hàng</th>
                              
                                    <th>Trạng Thái Đơn Hàng</th>
                                    <th>Xem Chi Tiết Đơn Hàng</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php
                                    if(is_array($listbill)) {
                                        foreach($listbill as $bill) {
                                            extract($bill);
                                            $status = '';
                                            if ($bill['status'] == 0) {
                                                $status = 'đang giao hàng';
                                            }
                                            else if ($bill['status'] == 1) {
                                                $status = 'Giao hàng thành công';
                                            }
                                            echo '<tr>
                                                    <td class="quantity__item">
                                                        <div class="quantity">
                                                            <div class="product__cart__item__text">
                                                            <h6>'.$bill['id'].'</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="product__cart__item">
                                                        <div class="product__cart__item__text">
                                                            <h6>'.$bill['ngaydathang'].'</h6>
                                                        </div>
                                                    </td>
                                                    <td class="product__cart__item">
                                                        <div class="product__cart__item__text">
                                                            <h5>'.$bill['diachi'].'</h5>
                                                        </div>
                                                    </td>
                                                    <td class="quantity__item">
                                                        <div class="quantity">
                                                            <div class="product__cart__item__text">
                                                                <h6>'.$bill['tongdonhang'].'</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="quantity__item">
                                                    <div class="quantity">
                                                        <div class="product__cart__item__text">
                                                            <h6>'.$status.'</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                    <td>
                                                        <a href="index.php?act=chitietdonhang&id='.$bill['id'].'">Xem</a>
                                                    </td>
                                                <tr>
                                            ';
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
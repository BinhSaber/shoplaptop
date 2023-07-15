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
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Mã Đơn Hàng</th>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Số Lượng</th>
                                    <th>Đơn Giá</th>
                                    <!-- <th>Trạng Thái Đơn hàng</th> -->
                                    <th>Xem Đơn Hàng</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php
                                    if(is_array($listctdh)) {
                                        foreach($listctdh as $ctdh) {
                                            extract($ctdh);
                                          
                                            echo '<tr>
                                                    <td class="quantity__item">
                                                        <div class="quantity">
                                                            <div class="product__cart__item__text">
                                                            <h6>'.$ctdh['idbill'].'</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="product__cart__item">
                                                        <div class="product__cart__item__text">
                                                            <h6>'.$ctdh['tensp'].'</h6>
                                                        </div>
                                                    </td>
                                                    <td class="product__cart__item">
                                                        <div class="product__cart__item__text">
                                                            <h5>'.$ctdh['soluong'].'</h5>
                                                        </div>
                                                    </td>
                                                   
                                                    <td class="quantity__item">
                                                        <div class="quantity">
                                                            <div class="product__cart__item__text">
                                                                <h6>'.$ctdh['thanhtien'].'</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="index.php?act=mybill">Xem Đơn Hàng</a>
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
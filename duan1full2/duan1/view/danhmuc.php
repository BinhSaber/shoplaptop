<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Danh Mục</h4>
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
                    <div class="row">
                        
                        <?php
                            $i=0;
                            foreach($spnew as $sp) {
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
                        
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product__pagination">
                            <?php if($trang > 3){
                                    $trangdau = 1;
                                ?>
                                    <a href="index.php?act=phantrang&sosanpham=<?= $sosanpham ?>&trang=<?php echo $trangdau; ?>">First</a>
                                <?php } ?>
                                <?php
                                    for($i=1;$i<=$sotrang;$i++) {
                                        if($i != $trang) {
                                            if ($i > $trang - 3 && $i < $trang + 3) {
                                ?>
                                    <a href="index.php?act=phantrang&sosanpham=<?= $sosanpham ?>&trang=<?php echo $i; ?>"><?php echo $i; ?></a>
                                <?php }} else { ?>
                                        <a href="index.php?act=phantrang&sosanpham=<?=$sosanpham?>&trang=<?php echo $i; ?>" class="active"><?php echo $i; ?></a>
                                    <?php
                                    }}
                                ?>
                                <?php if($trang < $sotrang - 2){
                                    $trangcuoi = $sotrang;
                                ?>
                                    <a href="index.php?act=phantrang&sosanpham=<?= $sosanpham ?>&trang=<?php echo $trangcuoi; ?>">Last</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->
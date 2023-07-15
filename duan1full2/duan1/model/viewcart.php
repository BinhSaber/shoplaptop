<?php
    function viewcart() {
        global $img_path;

        $tong=0;
        $i=0;

            foreach ($_SESSION['mycart'] as $cart) {
            $hinh=$img_path.$cart[2];
            $ttien=$cart[3]*$cart[4];
            $tong+=$ttien;
            $xoasp='<a href="index.php?act=delcart&idcart='.$cart[0].'"><input type="button" value="Xóa">';
            echo '
                <tr>
                    <td class="product__cart__item">
                        <div class="product__cart__item__pic">
                            <img src="'.$hinh.'" alt="">
                        </div>
                        <div class="product__cart__item__text">
                            <h6>'.$cart[1].'</h6>
                            <h5>'.$cart[4].'</h5>
                        </div>
                    </td>
                    <td class="quantity__item">
                        <div class="quantity">
                            <div class="pro-qty-2">
                                <input type="text" value="'.$cart[4].'">
                            </div>
                        </div>
                    </td>
                    <td class="cart__price">'.$ttien.'</td>
                    <td class="cart__close">'.$xoasp.'</td>
                </tr>
                ';
            $i+=1;
        }
            echo '<tr>
                    <td colspan="4">Tổng đơn hàng</td>

                    <td>'.$tong.'</td>
                    <td></td>
                </tr>';

    }

    function viewcart2() {
        global $img_path;

        $tong=0;
        $i=0;

            foreach ($_SESSION['mycart'] as $cart) {
            $hinh=$img_path.$cart[2];
            $ttien=$cart[3]*$cart[4];
            $tong+=$ttien;
        
            echo '
                <tr>
                    <td class="product__cart__item">
                        <div class="product__cart__item__text">
                            <h6>'.$cart[1].'</h6>
                            <h5>'.$cart[4].'</h5>
                        </div>
                    </td>
                    <td class="quantity__item">
                        <div class="quantity">
                            <div class="pro-qty-2">
                                <input type="text" value="'.$cart[4].'">
                            </div>
                        </div>
                    </td>
                    <td class="cart__price">'.$ttien.'</td>
                </tr>
                ';
            $i+=1;
        }
            echo '<tr>
                    <td colspan="4">Tổng đơn hàng</td>

                    <td>'.$tong.'</td>
                    <td></td>
                </tr>';

    }

    function bill_chi_tiet($listbill) {
        $tong=0;
        $i=0;
        global $img_path;
            foreach ($listbill as $cart) {
            $hinh=$img_path.$cart['hinhsp'];
            $ttien=$cart['dongia']*$cart['soluong'];
            $tong+=$cart['thanhtien'];
        
            echo '
            <ul class="checkout__total__products">
                <li>'.($i+1).'. '.$cart['name'].'<span>'.$ttien.'</span></li>
            </ul>
            
                
                ';
            $i+=1;
        }
            echo '<ul class="checkout__total__all">
                    <li>Total <span>'.$tong.' VNĐ</span></li>
                </ul>';
    }

    function tongdonhang() {
        $tong=0;

        foreach ($_SESSION['mycart'] as $cart) {
            $ttien=$cart[3]*$cart[4];
            $tong+=$ttien;
        }
        return $tong;
    }
    

    function taodonhang($tongdonhang,$makh,$hoten,$diachi,$email,$phone,$ngaydathang) {
        $sql="insert into bill(tongdonhang,makh,hoten,diachi,email,phone,ngaydathang) 
        values('$tongdonhang','$makh','$hoten','$diachi','$email','$phone','$ngaydathang')";
        return pdo_execute_return_lastInsertId($sql);
        // $last_id = $conn->lastInsertId();
        // return $last_id;
    }
    function idbill(){
        $sql1 = "SELECT * FROM bill ORDER BY id DESC";
        $mabill = pdo_query_one($sql1);
        return $mabill;
    }

    function taogiohang($tensp,$hinhsp,$dongia,$soluong,$thanhtien,$idbill) {
        $sql="insert into cart(tensp,hinhsp,dongia,soluong,thanhtien,idbill) 
        values('$tensp','$hinhsp','$dongia','$soluong','$thanhtien','$idbill')";
        pdo_execute($sql);
    }

    function load1bill($id){
        $sql="SELECT * FROM bill WHERE id=".$id;
        $load1bill=pdo_query_one($sql);
        return $load1bill;
    }

    function capnhatbill($id,$hoten,$phone,$email,$diachi, $status){
        $sql= "UPDATE bill SET hoten='".$hoten."', phone='".$phone."', email='".$email."',status='".$status."', diachi='".$diachi."' WHERE id=".$id;
        pdo_execute($sql);
    }

    function xoabill($id){
        $sql="DELETE FROM bill WHERE id=".$id;
        pdo_execute($sql);
    }

    function loadall_bill($makh) {
        // $keyword="";
        $sql="select * from bill where makh=? order by id desc";
        $listbill=pdo_query($sql,$makh);
        return $listbill;
    }

    function get_bill_all(){
        $sql="select * from bill order by id desc";
        $listbill=pdo_query($sql);
        return $listbill;
    }
    function loadall_ctdh($idbill){
        $sql="select * from cart where idbill=".$idbill;
        $listctdh=pdo_query($sql);
        return $listctdh;
    }
?>
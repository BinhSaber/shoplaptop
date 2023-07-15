<?php
    if(isset($load1bill)){
        extract($load1bill);
    }
?>
<div class="row">
        <div class="row formtitle">
            <h1>CẬP NHẬT ĐƠN HÀNG</h1>
        </div>
        <div class="row formcontent" style="margin: 40px 0;">
        <form action="index.php?action=capnhatbill" method="post" enctype="multipart/form-data">
            <br>
            <div class="mb">
                <p>Mã Đơn Hàng:</p>
                <input type="text" name="id" value="<?=$id?>" disabled>
            </div>
            <div class="mb">
                <p>Họ Tên:</p>
                <input type="text" name="hoten" value="<?=$hoten?>">
            </div>
            <div class="mb">
                <p>Email:</p>
                <input type="text" name="email" value="<?=$email?>">
            </div>
            <div class="mb">
                <p>Số Điện Thoại:</p>
                <input type="text" name="phone" value="<?=$phone?>">
            </div>
            <div class="mb">
                <p>Địa Chỉ:</p>
                <input type="text" name="diachi" value="<?=$diachi?>">
            </div>
            <div class="mb">
                <p>Trạng Thái Giao Hàng:</p>
              <select name="status" id="">
              <option > Chọn trạng thái đơn hàng</option>
                <option value="1">Giao hàng thành công</option>
              </select>
            </div>
            <div class="mb">
                <p>Tổng Đơn Hàng:</p>
                <input type="text" name="tongdonhang" value="<?=$tongdonhang?>">
            </div>


                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" name="capnhatbill" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?action=listbill"><input type="button" value="Danh sách"></a>
            </div>
            <?php
            ?>
        </form>
        </div>
    </div>
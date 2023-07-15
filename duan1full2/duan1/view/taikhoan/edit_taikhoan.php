
    <div class="boxaccount" style="height: 40rem;">
        <div class="edittaikhoan">
            <div class="boxtrai">
                <?php
                    if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                        extract($_SESSION['user']);
                    }
                ?>
                <form action="index.php?act=edit_taikhoan" method="post">
                    <p>Tên đăng nhập:</p>
                    <input type="text" name="user" id="tenDangNhap" value="<?=$user?>">
                    <p>Mật Khẩu:</p>
                    <input type="password" name="pass" id="pass" value="<?=$pass?>">
                    <p>Email:</p>
                    <input type="email" name="email" id="email" value="<?=$email?>">
                    <p>SĐT:</p>
                    <input type="text" name="phone" id="tel" value="<?=$phone?>">
                    <p>Địa chỉ:</p>
                    <input type="text" name="diachi" id="diaChi" value="<?=$diachi?>">
                    <br>
                    <input type="hidden" name="makh" value="<?=$makh?>">
                    <input style="margin-top: 2rem;" type="submit" name="capnhat" value="Cập nhật" >
                </form>
            </div>
        </div>
    </div>
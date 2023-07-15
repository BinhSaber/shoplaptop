<?php
    if(isset($load1bl)){
        extract($load1bl);
    }
?>
<div class="add mt">
            <div class="formtitle mb">
                <h2>SỬA BÌNH LUẬN</h2>
            </div>
            <form action="index.php?action=capnhatbl" method="post" enctype="multipart/form-data">
                <div class="mb">
                    <p>Mã bình luận:</p>
                    <input type="text" name="mabl" disabled>
                </div>
                <br>
                <div class="mb">
                    <p>Nội dung:</p>
                    <input type="text" name="noidung" value="<?=$noidung?>">
                </div>
                <div class="mb">
                    <p>Ngày bình luận:</p>
                    <input type="text" name="ngaybinhluan" value="<?=$ngaybinhluan?>">
                </div>
                <div class="nut mt">
                    <input type="hidden" name="mabl" value="<?=$mabl?>">
                    <input type="submit" name="capnhatbl" value="Cập nhật">
                    <input type="reset" value="Nhập lại">
                    <a href="index.php?action=listbl"><input type="button" value="Danh sách"></a>
                </div>
            </form>
        </div>
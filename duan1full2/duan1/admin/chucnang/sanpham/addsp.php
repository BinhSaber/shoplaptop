<div class="add mt">
            <div class="formtitle mb">
                <h2>THÊM MỚI SẢN PHẨM</h2>
            </div>
            <form action="index.php?action=addsp" method="post" enctype="multipart/form-data">
                <div class="mb">
                    <p>Mã sản phẩm:</p>
                    <input type="text" name="masp" disabled>
                </div>
            <div class="mb">
                <p>Danh mục sản phẩm:</p>
            <select name="madm" id="">
                <?php
                foreach ($listdm as $dm) {
                    extract($dm);
                  echo  '<option value="'.$madm.'">'.$tendm.'</option>';
                }
                ?>
            </select>
            </div>
                <br>
                <div class="mb">
                    <p>Tên sản phẩm:</p>
                    <input type="text" name="tensp">
                </div>
                <div class="mb">
                    <p class="mb">Hình sản phẩm:</p>
                    <input type="file" name="hinhsp">
                </div>
                <div class="mb">
                    <p>Giá niêm yết:</p>
                    <input type="text" name="dongia">
                </div>
                <div class="mb">
                    <p>Màu:</p>
                    <input type="text" name="color">
                </div>
                <div class="mb">
                    <p>Ram/Rom:</p>
                    <input type="text" name="ramrom">
                </div>
                <div class="mb">
                    <p>Mô tả:</p>
                    <textarea name="mota" cols="30" rows="10"></textarea>
                </div>
                <div class="mb">
                    <p>Giá sau khi giảm:</p>
                    <input type="text" name="giamgia">
                </div>
                <div class="nut mt">
                    <input type="submit" name="themmoisp" value="Thêm mới">
                    <input type="reset" value="Nhập lại">
                    <a href="index.php?action=listsp"><input type="button" value="Danh sách"></a>
                </div>
            </form>
        </div>
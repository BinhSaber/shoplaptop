<div class="add mt">
            <div class="formtitle mb">
                <h2>THÊM MỚI SẢN PHẨM</h2>
            </div>
            <form action="index.php?action=addctsp" method="post" enctype="multipart/form-data">
                <div class="mb">
                    <p>Mã sản phẩm:</p>
                    <input type="text" name="mactsp" disabled>
                </div>
            <div class="mb">
                <p>Danh mục sản phẩm:</p>
            <select name="masp" id="">
                <?php
                foreach ($listsanpham as $listsanpham) {
                    extract($listsanpham);
                  echo  '<option value="'.$masp.'">'.$tensp.'</option>';
                }
                ?>
            </select>
            </div>
                <br>
                <div class="mb">
                    <p class="mb">Hình sản phẩm:</p>
                    <input type="file" name="hinhctsp">
                </div>
                <div class="mb">
                    <p>Giá:</p>
                    <input type="text" name="giactsp">
                </div>
                <div class="mb">
                    <p>Ram/Rom:</p>
                    <input type="text" name="ramrom">
                </div>
                <div class="mb">
                    <p>Màu:</p>
                    <input type="text" name="mau">
                </div>
                <div class="nut mt">
                    <input type="submit" name="themmoictsp" value="Thêm mới">
                    <input type="reset" value="Nhập lại">
                    <a href="index.php?action=listctsp"><input type="button" value="Danh sách"></a>
                </div>
            </form>
        </div>
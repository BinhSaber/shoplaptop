    <div class="add mt">
        <div class="formtitle mb">
            <h2>THÊM MỚI DANH MỤC</h2>
        </div>
        <form action="index.php?action=adddm" method="post" enctype="multipart/form-data">
            <div class="mb">
                <p>Mã danh mục:</p>
                <input type="text" name="madm" disabled>
            </div>
            <br>
            <div class="mb">
                <p>Tên danh mục:</p>
                <input type="text" name="tendm">
            </div>
            <div class="mb">
                <p class="mb">Hình danh mục:</p>
                <input type="file" name="hinhdm">
            </div>
            <div class="nut mt">
                <input href="index.php?action=adddm" type="submit" name="themmoi" value="Thêm mới">
                <input type="reset" value="Nhập lại">
                <a href="index.php?action=listdm"><input type="button" value="Danh sách"></a>
            </div>
        </form>
    </div>
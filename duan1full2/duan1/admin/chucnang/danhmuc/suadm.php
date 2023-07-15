<?php
    if(is_array($load1dm)){
        extract($load1dm);
    }
    $hinhdm="../img/".$hinhdm;
    if(is_file($hinhdm)){
        $hinhdm="<img src='".$hinhdm."' height='100'>";
    }else {
        $hinhdm="No image";
}
?>
    <div class="add mt">
        <div class="formtitle mb">
            <h2>SỬA DANH MỤC</h2>
        </div>
        <form action="index.php?action=capnhatdm" method="post" enctype="multipart/form-data">
            <div class="mb">
                <p>Mã danh mục:</p>
                <input type="text" name="madm" disabled>
            </div>
            <br>
            <div class="mb">
                <p>Tên danh mục:</p>
                <input type="text" name="tendm" value="<?=$tendm?>">
            </div>
            <div class="mb">
                <p class="mb">Hình danh mục:</p>
                <input type="file" name="hinhdm">
                <?=$hinhdm?>
            </div>
            <div class="nut mt">
                <input type="hidden" name="madm" value="<?=$madm?>">
                <input type="submit" name="capnhatdm" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?action=listdm"><input type="button" value="Danh sách"></a>
            </div>
        </form>
    </div>
<?php
    if(is_array($load1ctsp)){
        extract($load1ctsp);
    }
    $hinhctsp="../img/".$hinhctsp;
    if(is_file($hinhctsp)){
        $hinhctsp="<img src='".$hinhctsp."' height='100'>";
        }else {
                $hinhctsp="No image";
            }
?>
<div class="row">
        <div class="row formtitle">
            <h1>CẬP NHẬT SẢN PHẨM</h1>
        </div>
        <div class="row formcontent">
        <form action="index.php?action=capnhatctsp" method="post" enctype="multipart/form-data">
            <div class="mb">
            <select name="masp" id="">
                <option value="0" selected>All</option>
                <?php
                    foreach ($listsanpham as $listsanpham) {
                    extract($listsanpham);
                    if($masp==$masp) $s="selected"; else $s="";
                    echo  '<option value="'.$masp.'" '.$s.'>'.$tensp.'</option>';
                }
                ?>
            </select>
            </div>
            <br>
            <div class="mb">
                <p>Hình:</p>
                <input type="file" name="hinhctsp">
                <?=$hinhctsp?>
            </div>
            <div class="mb">
                <p>Giá:</p>
                <input type="text" name="giactsp" value="<?=$giactsp?>">
            </div>
            <div class="mb">
                <p>Ram/Rom:</p>
                <input type="text" name="ramrom" value="<?=$ramrom?>">
            </div>
            <div class="mb">
                <p>Màu:</p>
                <input type="text" name="mau" value="<?=$mau?>">
            </div>
            <div class="nut mb">
                <input type="hidden" name="mactsp" value="<?=$mactsp?>">
                <input type="submit" name="capnhatctsp" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?action=listctsp"><input type="button" value="Danh sách"></a>
            </div>
            <?php
            ?>
        </form>
        </div>
    </div>
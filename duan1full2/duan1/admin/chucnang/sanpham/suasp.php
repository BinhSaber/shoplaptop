<?php
    if(is_array($load1sp)){
        extract($load1sp);
    }
    $hinhsp="../img/".$hinhsp;
    if(is_file($hinhsp)){
        $hinhsp="<img src='".$hinhsp."' height='100'>";
        }else {
                $hinh="No image";
            }
?>
<div class="row">
        <div class="row formtitle">
            <h1>CẬP NHẬT SẢN PHẨM</h1>
        </div>
        <div class="row formcontent">
        <form action="index.php?action=capnhatsp" method="post" enctype="multipart/form-data">
            <div class="mb">
            <select name="madm" id="">
                <option value="0" selected>All</option>
                <?php
                    foreach ($listdm as $listdm) {
                    extract($listdm);
                    if($madm==$madm) $s="selected"; else $s="";
                    echo  '<option value="'.$madm.'" '.$s.'>'.$tendm.'</option>';
                }
                ?>
            </select>
            </div>
            <br>
            <div class="mb">
                <p>Tên sản phẩm:</p>
                <input type="text" name="tensp" value="<?=$tensp?>">
            </div>
            <div class="mb">
                <p>Giá:</p>
                <input type="text" name="dongia" value="<?=$dongia?>">
            </div>
            <div class="mb">
                <p>Hình:</p>
                <input type="file" name="hinhsp">
                <?=$hinhsp?>
            </div>
            <div class="mb">
                <p>Mô tả:</p>
                <textarea name="mota" cols="30" rows="10"><?=$mota?></textarea>
            </div>
            <div class="mb">
                <p>Giá sau khi giảm:</p>
                <input type="text" name="giamgia" value="<?=$giamgia?>">
            </div>
            <div class="mb">
                    <p>Màu:</p>
                    <input type="text" name="color">
                </div>
                <div class="mb">
                    <p>Ram/Rom:</p>
                    <input type="text" name="ramrom">
                </div>
            <div class="nut mb">
                <input type="hidden" name="masp" value="<?=$masp?>">
                <input type="submit" name="capnhatsp" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?action=listsp"><input type="button" value="Danh sách"></a>
            </div>
            <?php
            ?>
        </form>
        </div>
    </div>
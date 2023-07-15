<div class="row">
            <div class="row formtitle">
                <h1>DANH SÁCH SẢN PHẨM</h1>
            </div>
            <form action="index.php?action=listsp" method="post">
            <br>
            <br>
                <input type="text" name="keyword">
                <select name="madm">
                <option value="0" selected>All</option>
                <?php
                    foreach ($listdm as $dm) {
                    extract($dm);
                    echo  '<option value="'.$madm.'">'.$tendm.'</option>';
                }
                ?>
                </select>
                <input type="submit" name="listok" value="OK">
            </form>
            <div class="row">
                <table>
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Giá niêm yết</th>
                        <th>Giá sau khi giảm</th>
                        <th>Màu sắc</th>
                        <th>Ram/Rom</th>
                        <th>Thao Tác</th>
                    </tr>
                    <?php
                    foreach ($listsanpham as $sanpham) {
                        extract($sanpham);
                        $suasp="index.php?action=suasp&masp=".$masp;
                        $xoasp="index.php?action=xoasp&masp=".$masp;
                        $hinhsp="../img/".$hinhsp;
                        if(is_file($hinhsp)){
                            $hinhsp="<img src='".$hinhsp."' height='100'>";
                        }else {
                            $hinh="No image";
                        }
                        echo '
                        <td>'.$tensp.'</td>
                        <td>'.$hinhsp.'</td>
                        <td>'.$dongia.'</td>
                        <td>'.$giamgia.'</td>
                        <td>'.$color.'</td>
                        <td>'.$ramrom.'</td>
                        <td>
                            <a href="'.$suasp.'"><input type="button" value="Sửa"></a>
                            <a href="'.$xoasp.'"><input type="button" value="Xóa"></a>
                        </td>
                    </tr>';
                    }
                    ?>
                </table>
            </div>
            <div class="nut mt">
                <a href="index.php?action=addsp"><input type="button" value="Nhập thêm"></a>
            </div>
        </div>
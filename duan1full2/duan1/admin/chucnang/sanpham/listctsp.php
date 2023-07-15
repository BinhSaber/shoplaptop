<div class="row">
            <div class="row formtitle">
                <h1>DANH SÁCH CHI TIẾT SẢN PHẨM</h1>
            </div>
            <form action="index.php?action=listctsp" method="post">
                <select name="masp">
                <option value="0" selected>All</option>
                <?php
                    foreach ($listsanpham as $listsanpham) {
                    extract($listsanpham);
                    echo  '<option value="'.$masp.'">'.$tensp.'</option>';
                }
                ?>
                </select>
                <input type="submit" name="ctok" value="OK">
            </form>
            <div class="row">
                <table>
                    <tr>
                        <th></th>
                        <th>Mã sản phẩm chi tiết</th>
                        <th>Mã sản phẩm</th>
                        <th>Ảnh chi tiết sản phẩm</th>
                        <th>Giá</th>
                        <th>Ram/Rom</th>
                        <th>Màu</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listctsp as $listctsp){
                        extract($listctsp);
                        $suactsp="index.php?action=suactsp&mactsp=".$mactsp;
                        $xoactsp="index.php?action=xoactsp&mactsp=".$mactsp;
                        $hinhctsp="../img/".$hinhctsp;
                        if(is_file($hinhctsp)){
                            $hinhctsp="<img src='".$hinhctsp."' height='100'>";
                        }else {
                            $hinhctsp="No image";
                        }
                        echo '
                        <tr>
                        <td><input type="checkbox"></td>
                        <td>'.$mactsp.'</td>
                        <td>'.$masp.'</td>
                        <td>'.$hinhctsp.'</td>
                        <td>'.$giactsp.'</td>
                        <td>'.$ramrom.'</td>
                        <td>'.$mau.'</td>
                        <td>
                            <a href="'.$suactsp.'"><input type="button" value="Sửa"></a>
                            <a href="'.$xoactsp.'"><input type="button" value="Xóa"></a>
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
<div class="row">
            <div class="row formtitle">
                <h1>DANH SÁCH DANH MỤC</h1>
            </div>
            <div class="row">
                <table>
                    <tr>
                        <th>Mã danh mục</th>
                        <th>Tên danh mục</th>
                        <th>Hình danh mục</th>
                        <th>Thao Tác</th>
                    </tr>
                    <?php
                    foreach ($listdm as $listdm) {
                        extract($listdm);
                        $suadanhmuc="index.php?action=suadanhmuc&madm=".$madm;
                        $xoadanhmuc="index.php?action=xoadanhmuc&madm=".$madm;
                        $hinhdm="../img/".$hinhdm;
                        if(is_file($hinhdm)){
                            $hinhdm="<img src='".$hinhdm."' height='100'>";
                        }else {
                            $hinhdm="No image";
                        }
                        echo '
                        <tr>
                        <td><b>'.$madm.'</b></td>
                        <td><b>'.$tendm.'</b></td>
                        <td class="hinhdm">'.$hinhdm.'</td>
                        <td>
                            <a href="'.$suadanhmuc.'"><input type="button" value="Sửa"></a>
                            <a href="'.$xoadanhmuc.'"><input type="button" value="Xóa"></a>
                        </td>
                    </tr>';
                    }
                    ?>
                </table>
            </div>
        </div>
        <div class="nut mt">
                <a href="index.php?action=adddm"><input type="button" value="Nhập thêm"></a>
        </div>
<div class="row">
            <div class="row formtitle">
                <h1>DANH SÁCH BÌNH LUẬN</h1>
            </div>
            <div class="row">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Nội Dung</th>
                        <th>Mã Khách Hàng</th>
                        <th>Mã Sản Phẩm</th>
                        <th>Ngày Bình Luận</th>
                        <th>Thao Tác</th>
                    </tr>
                    <?php
                    foreach ($listbinhluan as $binhluan) {
                        extract($binhluan);
                        $suabinhluan="index.php?action=suabl&mabl=".$mabl;
                        $xoabinhluan="index.php?action=xoabl&mabl=".$mabl;

                        echo '
                        <tr>
                        <td><b>'.$mabl.'</b></td>
                        <td><b>'.$noidung.'</b></td>
                        <td><b>'.$makh.'</b></td>
                        <td><b>'.$masp.'</b></td>
                        <td><b>'.$ngaybinhluan.'</b></td>
                        <td>
                            <a href="'.$suabinhluan.'"><input type="button" value="Sửa"></a>
                            <a href="'.$xoabinhluan.'"><input type="button" value="Xóa"></a>
                        </td>
                    </tr>';
                    }
                    ?>
                </table>
            </div>
        </div>
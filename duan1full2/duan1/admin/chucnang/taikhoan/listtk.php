<div class="row">
            <div class="row formtitle">
                <h1>DANH SÁCH TÀI KHOẢN</h1>
            </div>
            <div class="row">
                <table>
                    <tr>
                        <th>Tên tài khoản</th>
                        <th>Mật khẩu</th>
                        <th>Họ tên</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Vai trò</th>
                        <th>Thao Tác</th>
                    </tr>
                    <?php
                    foreach ($listtaikhoan as $listtaikhoan) {
                        extract($listtaikhoan);
                        $xoatk="index.php?action=xoatk&makh=".$makh;
                        echo '
                        <tr>
                        <td>'.$user.'</td>
                        <td>'.$pass.'</td>
                        <td>'.$hoten.'</td>
                        <td>'.$email.'</td>
                        <td>'.$diachi.'</td>
                        <td>'.$vaitro.'</td>
                        <td>
                            <a href="'.$xoatk.'"><input type="button" value="Xóa"></a>
                        </td>
                    </tr>';
                    } 
                    ?>
                </table>
            </div>
        </div>
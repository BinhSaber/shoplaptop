<div class="row">
    <div class="row formtitle">
        <h1>DANH SÁCH ĐƠN HÀNG</h1>
    </div>
    <form action="index.php?action=listsp" method="post">
        <br>
        <br>
        <input type="text" name="keyword">
        <input type="submit" name="listok" value="OK">
    </form>
    <div class="row">
        <table>
            <tr>
                <th>Mã Đơn Hàng</th>
                <th>Khách Hàng</th>
                <th>Địa Chỉ</th>
                <th>Giá Trị Đơn Hàng</th>
                <th>Trạng Thái Đơn Hàng</th>
                <th>Thao Tác</th>
                <th></th>
            </tr>
            <?php
            foreach ($listbill as $bill) {   
                extract($bill);
                $status = '';
                if ($bill['status'] == 0) {
                    $status = 'đang giao hàng';
                }
                else if ($bill['status'] == 1) {
                    $status = 'Giao hàng thành công';
                }
                // $status = ucwords($status);
           
                $suabill = "index.php?action=suabill&id=" . $id;
                $xoabill = "index.php?action=xoabill&id=" . $id;
                $kh = $bill["hoten"] . '
                        <br>' . $bill["email"] . '
                        <br>' . $bill["phone"];
                echo '
                        <tr>
                        <td>' . $bill['id'] . '</td>
                        <td>' . $kh . '</td>
                        <td>' . $bill['diachi'] . '</td>
                    
                        <td>' . $bill['tongdonhang'] . '</td>
                        <td> ' . $status . '</td>
                        <td>
                            <a href="' . $suabill . '"><input type="button" value="Sửa"></a>
                            <a href="' . $xoabill . '"><input type="button" value="Xóa"></a>
                        </td>
                    </tr>';
            }
            ?>
        </table>
    </div>
</div>
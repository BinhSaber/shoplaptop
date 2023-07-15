<?php
  require_once 'connect.php';
  $max_date = $_GET['days'];
  $sql = "SELECT
  sanpham.masp as 'ma_san_pham',
  sanpham.tensp as 'ten_san_pham',
  DATE_FORMAT(ngaydathang, '%e-%m') as 'ngay', 
  SUM(tongdonhang) as 'tong_tien' FROM `bill`
  JOIN cart ON bill.id = cart.idbill
  JOIN sanpham ON sanpham.tensp = cart.tensp
  WHERE ngaydathang >= CURDATE() - INTERVAL $max_date DAY GROUP BY sanpham.tensp, DATE_FORMAT(ngaydathang, '%e-%m')";
  $result = mysqli_query($conn, $sql);
  $arr = [];
  $today = date('d');
  if($today < $max_date){
    $get_day_last_month = $max_date - $today;
    $last_month = date('m' , strtotime("-1 month"));
    $last_month_date = date('Y-m-d',strtotime("-1 month"));
    $max_day_last_month = (new DateTime($last_month_date))->format('t');
    $start_day_last_month = $max_day_last_month - $get_day_last_month;
    $start_date_this_month = 1;
  }else {
    $start_date_this_month = $today - $max_date;
  }
  $arr = [];
  foreach($result as $each){
    $ma_san_pham = $each['ma_san_pham'];
    if(empty($arr[$ma_san_pham])){
      $arr[$ma_san_pham] = [
        'name' => $each['ten_san_pham'],
        'y' => $each['tong_tien'],
        'drilldown' => (int)$each['ma_san_pham'],
      ];
    }else{
      $arr[$ma_san_pham]['y'] += $each['tong_tien'];
    }
  }
$arr2 = [];
foreach ($arr as $ma_san_pham => $each) {
  $arr2[$ma_san_pham] = [
    'name' => $each['name'],
    'id' => $ma_san_pham,
  ];
  $arr2[$ma_san_pham]['data'] = [];
  if ($today < $max_date) {
    for ($i = $start_day_last_month; $i <= $max_day_last_month; $i++) {
      $key = $i . '-' . $last_month;
      $arr2[$ma_san_pham]['data'][$key] = [
        $key,
        0,
      ];
    }
  }
}
foreach ($result as $each) {
  $ma_san_pham = $each['ma_san_pham'];
  $key = $each['ngay'];
  $arr2[$ma_san_pham]['data'][$key] = [
    $key,
    (int)$each['tong_tien'],
  ];
}
$object =  json_encode([$arr,$arr2]);
echo $object;
?>
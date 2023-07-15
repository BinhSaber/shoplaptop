
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="../css/adminstyle.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Crub Operation</title>

</head>
<body>

<div class="vertical-nav bg-white" id="sidebar">
  <div class="py-4 px-3 mb-4 bg-light">
    <div class="media d-flex align-items-center"><img src="https://i.pinimg.com/736x/97/4a/b7/974ab7f066d8e62a6ad547dc1bffaa40.jpg" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
      <div class="media-body">
      <?php if(isset($_SESSION['user'])){ 
        extract($_SESSION['user'])?>
        <h4 class="m-0"><?php echo''.$user.''?></h4>
          <?php }else{ ?>
          <h4 class="m-0">admin<h4></h4>
      <?php } ?>
        <p class="font-weight-light text-muted mb-0">Web developer</p>
      </div>
    </div>
  </div>

  <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Main</p>

  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
      <a href="index.php?action=listsp" class="nav-link text-dark font-italic bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                Quản Lý Sản Phẩm
            </a>
    </li>
    <li class="nav-item">
      <a href="index.php?action=listtaikhoan" class="nav-link text-dark font-italic">
                <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                Quản Lý Người Dùng
            </a>
    </li>
    <li class="nav-item">
      <a href="index.php?action=listdm" class="nav-link text-dark font-italic">
                <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                Quản Lý Loại Hàng
            </a>
    </li>
    <li class="nav-item">
      <a href="index.php?action=listbill" class="nav-link text-dark font-italic">
      <i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i>
                Quản Lý Đơn Hàng
            </a>
    </li>

    <li class="nav-item">
      <a href="index.php?action=listbl" class="nav-link text-dark font-italic">
      <i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i>
                Quản Lý Bình Luận
            </a>
    </li>
  </ul>

  <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Charts</p>

  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
      <a href="index.php?action=bieudo" class="nav-link text-dark font-italic">
      <i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i>
                Tỉ Lệ Hàng Hóa
            </a>
    </li>
    <li class="nav-item">
      <a href="index.php?action=bieudodonhang" class="nav-link text-dark font-italic">
                <i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>
                Mua Hàng Theo Thời Gian
            </a>
    </li>
    <li class="nav-item">
      <a href="../index.php" class="nav-link text-dark font-italic">
                <i class="fa-sharp fa-solid fa-right-from-bracket mr-3 text-primary fa-fw"></i>
                Thoát            </a>
    </li>
  </ul>
</div>
<div class="page-content p-5" id="content">


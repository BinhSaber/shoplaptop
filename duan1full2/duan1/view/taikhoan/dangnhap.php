<link rel="stylesheet" href="css/style.css" type="text/css">
<body class="main-layout">
    
    <!-- login -->
    <div class="boxaccount">
    <div class="boxtrai">
        <form action="index.php?act=dangnhap" id="form1" method="post">
            <p>Tên đăng nhập:</p>
            <input type="text" name="user">
            <br>
            <p>Mật Khẩu:</p>
            <input type="password" name="pass">
            <br>
            <input type="checkbox" name="" id=""> <i>Ghi nhớ tài khoản ?</i>
            <br>
            <input type="submit" value="Đăng nhập" name="dangnhap">
            <br>
            <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
            <li><a href="index.php?act=dangky">Đăng ký thành viên</a></li>
        </form>
    </div>
    <div class="boxphai">
        <img src="img/trangtri.svg">
    </div>
    </div>
    <!-- end login -->
</body>

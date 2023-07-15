<link rel="stylesheet" href="../css/style.css" type="text/css">
<body class="main-layout">
    <!-- dangky -->
    <div class="boxaccount">
    <div class="boxtrai">
        <form action="index.php?act=dangky" id="form1" method="post">
        <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
        ?>
            <p>Tên đăng nhập:</p>
            <input type="text" name="user">
            <br>
            <p>Email:</p>
            <input type="email" name="email">
            <br>
            <p>Mật Khẩu:</p>
            <input type="password" name="pass">
            <br>
            <input type="submit" value="Đăng ký" name="dangky">
            <br>
            <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
            <li>Đã có tài khoản? <a href="index.php?act=dangnhap">Đăng nhập!</a></li>
        </form>
    </div>
    <div class="boxphai">
        <img src="img/trangtri.svg">
    </div>
    </div>
    <!-- end dangky -->
</body>
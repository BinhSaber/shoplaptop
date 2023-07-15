<?php
session_start();
include "../model/pdo.php";
include "../model/binhluan.php";

$makh = !empty($_SESSION['user']['makh']) ? $_SESSION['user']['makh'] : [];
$masp = $_REQUEST['masp'];
$dsbl = loadall_binhluan($masp);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>

<body>


    <div class="boxcontent">
        <div class="title">
            <h4>Bình Luận</h4>
        </div>
        <table>
            <ul>
                <?php
                foreach ($dsbl as $bl) {
                    extract($bl);
                    echo '<tr><td>' . $noidung . '</td>';
                    echo '<td class="right_bl">' . $ngaybinhluan . '</td></tr>';
                }
                ?>
            </ul>
        </table>
        <style>
            .binhluan {
                width: 1200px;
                max-width: 1200px;
                margin: 0 auto;
            }

            .right_bl {
                float: right;

            }

            .form_bl {
                padding: 20px 0;
            }

            .title {
                float: none;
                height: 40px;
                margin-left: 25px;
                margin-top: 150px;
                margin-bottom: 25px;
                border: none;
                width: auto;
            }
        </style>
    </div>
    <?php
    if (!isset($_SESSION['user'])) {
        echo '<tr><td>Đăng nhập để bình luận</td></tr>';
    }
    ?>

    <?php
    // if(isset($_SESSION['id'])&&($_SESSION['id']>0)) {
    ?>
    <?php if (isset($_SESSION['user'])) { ?>
        <div class="searbox_bl">
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" class="form_bl">
                <input type="hidden" name="masp" value="<?= $masp ?>">
                <input type="text" id="content" name="noidung">
                <input type="submit" id="button-submit" name="guibinhluan" value="Gửi bình luận">
            </form>
        </div>
    <?php } ?>
    <?php
    if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
        $noidung = $_POST['noidung'];
        $makh = $_SESSION['user']['makh'];
        $masp = $_POST['masp'];
        $ngaybinhluan = date('h:i:sa d/m/Y');
        insert_binhluan($noidung, $makh, $masp, $ngaybinhluan);
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
    ?>




</body>

</html>
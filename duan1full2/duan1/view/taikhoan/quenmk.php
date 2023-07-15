
    <div class="boxaccount">
        <div class="quenmk">
    <div class="quenmk1">
            <div class="boxtrai">
                <form action="index.php?act=quenmk" method="post">
                    <p style="margin-left: 4rem">Email:</p>
                    <input type="email" name="email" id="email">
                    <input style="margin-left: 4rem;margin-top:1rem" type="submit" name="guiemail" value="Gửi">                 
                </form>
                <?php
                    if(isset($thongbao)&&($thongbao!="")) {
                        echo $thongbao;
                    }
                ?>
            </div>
    </div>
</div>
</div>
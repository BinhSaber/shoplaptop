<?php
    function insert_binhluan($noidung,$makh,$masp,$ngaybinhluan) {
        $sql="insert into binhluan(noidung,makh,masp,ngaybinhluan) 
        values('$noidung','$makh','$masp','$ngaybinhluan')";
        pdo_execute($sql);
    }

    function loadall_binhluan($masp) {
        $sql="select * from binhluan where 1";
        if($masp>0) $sql.=" AND masp='".$masp."'";
        $sql.=" order by masp desc";
        $listbl = pdo_query($sql);
        return $listbl;
    }

    function capnhatbl($mabl,$noidung,$ngaybinhluan){
        $sql = "UPDATE binhluan SET mabl='".$mabl."', noidung='".$noidung."', ngaybinhluan='".$ngaybinhluan."' WHERE mabl=".$mabl;
        pdo_execute($sql);
    }

    function load1bl($mabl){
        $sql="SELECT * FROM binhluan WHERE mabl=".$mabl;
        $load1bl=pdo_query_one($sql);
        return $load1bl;
    }

    function xoabl($mabl){
        $sql="DELETE FROM binhluan WHERE mabl=".$mabl;
        pdo_execute($sql);
    }
?>
<?php
    function listctsp(){
        $sql="SELECT * FROM chitietsanpham ORDER BY mactsp";
            $listctsp=pdo_query($sql);
        return $listctsp;
    }

    function addctsp($hinhctsp,$giactsp,$ramrom,$mau,$masp){
        $sql="INSERT INTO chitietsanpham(hinhctsp,giactsp,ramrom,mau,masp)
        VALUES('$hinhctsp','$giactsp','$ramrom','$mau','$masp')";
        pdo_execute($sql);
    }

    function listctspforadmin($masp=0){
        $sql="SELECT * FROM chitietsanpham WHERE 1";
        if($masp>0){
            $sql.=" AND masp ='".$masp."'";
        }
        $sql.=" ORDER BY masp DESC";
        $listctsp=pdo_query($sql);
        return $listctsp;
    }

    function xoactsp($mactsp){
        $sql="DELETE FROM chitietsanpham WHERE mactsp=".$mactsp;
        pdo_execute($sql);
    }

    function load1ctsp($mactsp){
        $sql="SELECT * FROM chitietsanpham WHERE masp=".$mactsp;
        $load1ctsp=pdo_query_one($sql);
        return $load1ctsp;
    }

    function load_sanphamchitiet($masp=0) {
        $sql ="select * from chitietsanpham where masp";
        if($masp>0) {
            $sql.=" AND masp ='".$masp."'";
        }
        $sql.=" ORDER BY masp DESC";
        $listchitietsp = pdo_query($sql);
        return $listchitietsp;
    }

    function capnhatctsp($mactsp,$masp,$hinhctsp,$giactsp,$mau,$ramrom){
        if($hinhctsp!="")
        $sql= "UPDATE chitietsanpham SET hinhctsp='".$hinhctsp."', giactsp='".$giactsp."', masp='".$masp."', mau='".$mau."', ramrom='".$ramrom."' WHERE mactsp=".$mactsp;
        else 
        $sql= "UPDATE chitietsanpham SET giactsp='".$giactsp."', masp='".$masp."', mau='".$mau."', ramrom='".$ramrom."' WHERE mactsp=".$mactsp;
        pdo_execute($sql);
    }
?>
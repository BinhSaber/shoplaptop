<?php
        function loadall_sanpham_home() {
            $sql="SELECT * FROM sanpham ORDER BY madm ASC limit 6 OFFSET 0"; 
            $listsanpham = pdo_query($sql);
            return $listsanpham;
        }
        function loadfullsanpham() {
            $sql="SELECT * FROM sanpham"; 
            $fullsanpham = pdo_query($sql);
            return $fullsanpham;
        }
        function loadtrang($sosanpham,$offset){
            $sql="SELECT * FROM sanpham ORDER BY madm ASC limit $sosanpham OFFSET $offset"; 
            $loadtrang = pdo_query($sql);
            return $loadtrang;
        }
    function addsp($tensp,$hinhsp,$dongia,$color,$ramrom,$madm,$mota,$giamgia){
        $sql = "INSERT INTO sanpham(tensp,hinhsp,dongia,color,ramrom,madm,mota,giamgia)
        VALUES('$tensp','$hinhsp','$dongia','$color','$ramrom','$madm','$mota','$giamgia')";
        pdo_execute($sql);
    }
    
    function xoasp($masp){
        $sql="DELETE FROM sanpham WHERE masp=".$masp;
        pdo_execute($sql);
    }

    function loadall_sanpham_top8() {
        $sql="select * from sanpham where 1 order by luotxem desc limit 0,8"; 
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    function flagship() {
        $sql="select * from sanpham where 1 order by dongia desc limit 0,4"; 
        $flagship = pdo_query($sql);
        return $flagship;
    }

    function load_sanpham_cungloai($masp,$madm) {
        $sql ="select * from sanpham where madm=".$madm." AND masp <> ".$masp;
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    
    function listsp($keyword="",$madm=0){
        $sql="SELECT * FROM sanpham WHERE 1";
        if($keyword!=""){
            $sql.=" AND tensp LIKE '%".$keyword."%'";
        }
        if($madm>0){
            $sql.=" AND madm ='".$madm."'";
        }
        $sql.=" ORDER BY masp DESC";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    
    function load1sp($masp){
        $sql="SELECT * FROM sanpham WHERE masp=".$masp;
        $load1sp=pdo_query_one($sql);
        return $load1sp;
    }
    function timkiem_sanpham($tensp){
        $sql="SELECT * FROM sanpham WHERE tensp LIKE '%".$tensp."%'"; 
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function load_ten_dm($madm) {
        if($madm>0){
            $sql ="select * from danhmuc where madm=".$madm;
            $dm = pdo_query_one($sql);
            extract($dm);
            return $tendm;
        } else {
            return "";
        }
    }

    function capnhatsanpham($masp,$tensp,$hinhsp,$dongia,$color,$ramrom,$madm,$mota,$giamgia){
        if($hinhsp!="")
        $sql= "UPDATE sanpham SET tensp='".$tensp."', hinhsp='".$hinhsp."', dongia='".$dongia."', color='".$color."', ramrom='".$ramrom."', madm='".$madm."', mota='".$mota."', giamgia='".$giamgia."' WHERE masp=".$masp;
        else 
        $sql= "UPDATE sanpham SET tensp='".$tensp."', dongia='".$dongia."', color='".$color."', ramrom='".$ramrom."', madm='".$madm."', mota='".$mota."', giamgia='".$giamgia."' WHERE masp=".$masp;
        pdo_execute($sql);
    }

    function phantrang_sanpham(){
        if(isset($_GET['trang'])) {
            $page = $_GET['trang'];
        } else {
            $page = '';
        }
        if($page == '' || $page == 1) {
            $begin = 0;
        } else {
            $begin = ($page*9)-9;
        }
        $sql= "SELECT * FROM sanpham WHERE 1 order by masp desc limit 0,9";
        $phantrang = pdo_query($sql);
        return $phantrang;
    }
?>
<?php

function adddm($tendm,$hinhdm){
    $sql = "INSERT INTO danhmuc(tendm,hinhdm)
    VALUES('$tendm','$hinhdm')";
    pdo_execute($sql);
}

function xoadm($madm){
    // $sql="alter table sanpham add constraint fk_madm foreign key (madm) references danhmuc(madm) on delete cascade";
    // pdo_execute($sql);
    $sql="DELETE FROM danhmuc WHERE madm=?";
    $xoadm=pdo_query($sql,$madm);
    return $xoadm;
}

function listdm(){
    $sql="SELECT * FROM danhmuc ORDER BY madm DESC";
    $listdm=pdo_query($sql);
    return $listdm;
}

function load1dm($madm){
    $sql="SELECT * FROM danhmuc WHERE madm=".$madm;
    $load1dm=pdo_query_one($sql);
    return $load1dm;
}

function capnhatdm($madm,$hinhdm,$tendm){
    if($hinhdm!="")
    $sql = "UPDATE danhmuc SET hinhdm='".$hinhdm."', tendm='".$tendm."' WHERE madm=".$madm;
    else
    $sql = "UPDATE danhmuc SET tendm='".$tendm."' WHERE madm=".$madm;
    pdo_execute($sql);
}
?>
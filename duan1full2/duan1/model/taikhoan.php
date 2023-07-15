<?php
    function loadall_taikhoan() {
        $sql="select * from khachhang order by makh desc";
        $listtaikhoan = pdo_query($sql);
        return $listtaikhoan;
    }

function insert_taikhoan($email,$user,$pass) {

        $sql = "select * from `khachhang`";
        $check = pdo_query($sql);
        $check3 = true;
        foreach($check as $check_errol) {
            if($check_errol['email'] == $email) {
                $check3 = false;
            }
        }
        if($check3 == true) {
            $sql="insert into khachhang(email,user,pass) values('$email','$user','$pass')";
            pdo_execute($sql);
            return true;
        } else {
            return false;
        }
    }

    function delete_taikhoan($makh) {
        $sql="delete from khachhang where makh=".$makh;
        pdo_execute($sql);
    }

    function checkuser($user,$pass) {
        $sql ="select * from khachhang where user='".$user."' AND pass='".$pass."'";
        $sp = pdo_query_one($sql);
        return $sp;
    }

    function checkemail($email) {
        $sql ="select * from khachhang where email='".$email."'";
        $sp = pdo_query_one($sql);
        return $sp;
    }

    function update_taikhoan($makh,$user,$pass,$email,$diachi,$phone) {
        $sql = "UPDATE `khachhang` SET `user`='".$user."',`pass`='".$pass."',`email`='".$email."',`diachi`='".$diachi."',`phone`='".$phone."' WHERE makh=".$makh;
        pdo_execute($sql);
    }
    function xoatk($makh){
        //on delete cascade
        // $sql="alter table bill add constraint fk_bill_khachhang foreign key (makh) references khachhang(makh) on delete cascade";
        // pdo_execute($sql);
        // $sql="alter table binhluan add constraint fk_binhluan_khachhang foreign key (makh) references khachhang(makh) on delete cascade";
        // pdo_execute($sql);
        $sql="delete from khachhang where makh=".$makh;
        pdo_execute($sql);
    }
?>
<?php
    function insert_taikhoan($email,$user,$pass){
        $sql = "INSERT INTO taikhoan(user,pass,email) values('$user','$pass','$email')";
        pdo_execute($sql);
        
    }
   
    function delete_taikhoan($id){
        $sql="DELETE FROM taikhoan where id=".$id;
        pdo_execute($sql);
    }

    function checkuser($user,$pass){
        $sql="SELECT * FROM taikhoan where user='".$user."' AND pass='".$pass."'";
        $tk=pdo_query_one($sql);
        return $tk;
    }
    
    function checkemail($email){
        $sql="SELECT * FROM taikhoan where email='".$email."'";
        $tk=pdo_query_one($sql);
        return $tk;
    }
    
    function update_taikhoan($id,$user,$pass,$email,$address,$tel){
        
        $sql = "UPDATE taikhoan set user='".$user."', pass='".$pass."', email='".$email."', address='".$address."', tel='".$tel."' where id=".$id;
        pdo_execute($sql);
    }


    function loadall_taikhoan(){
        $sql="SELECT * FROM taikhoan order by id desc";
        $listtaikhoan = pdo_query($sql);
        return $listtaikhoan;
    }

   
?>
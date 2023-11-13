<?php
    function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm){
        $sql = "INSERT INTO sanpham(name,price,img,mota,iddm) values('$tensp','$giasp','$hinh','$mota','$iddm')";
        pdo_execute($sql);
    }

    function delete_sanpham($id){
        $sql="DELETE FROM sanpham where id=".$id;
        pdo_execute($sql);
    }

    function loadall_sanpham($kyw,$iddm){
        $sql="SELECT * FROM sanpham where 1";
        if($kyw!=""){
            $sql.=" and name like '%".$kyw."%'";
        }
        if($iddm!="">0){
            $sql.=" and iddm ='".$iddm."'";
        }
        $sql.=" ORDER BY id desc";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }


    function loadone_sanpham($id){
        $sql="SELECT * FROM sanpham where id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }

    function update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh){
        if($hinh!="")
            $sql = "UPDATE sanpham set iddm='".$iddm."', name='".$tensp."',price='".$giasp."',mota='".$mota."',img='".$hinh."' where id=".$id;
        else
            $sql = "UPDATE sanpham set iddm='".$iddm."', name='".$tensp."',price='".$giasp."',mota='".$mota."' where id=".$id;
        pdo_execute($sql);
    }

    // hiển thị 9 sản phẩm mới nhất
    function loadall_sanpham_home(){
        $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY id desc limit 0,9";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    // hiển thị top 10 sản phẩm có lượt xem cao nhất
    function loadall_sanpham_top10(){
        $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY luotxem desc limit 0,10";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    // sản phẩm cùng loại
    function load_sanpham_cungloai($id,$iddm){
        $sql = "SELECT * FROM sanpham WHERE iddm = $iddm and id <> $id";
        $result = pdo_query($sql);
        return $result;
        
    }

    function load_ten_danhmuc($iddm){
        if($iddm>0){
            $sql="SELECT * FROM danhmuc where id=".$iddm;
            $dm=pdo_query_one($sql);
            extract($dm);
            return $name;
        }else{
            return "";
        }
    }
?>

<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">

            <div class="boxtieude">CẬP NHẬT TÀI KHOẢN</div>
            <div class=" row boxcontent formtaikhoan">
                <?php
                    if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                        extract($_SESSION['user']);

                    }
                ?>
                <form action="index.php?act=edit_taikhoan" method="post">
                    <div class="row mb10">
                        <p>Email</p>
                        <input type="email" name="email" value="<?=$email?>">
                    </div>
                    <div class="row mb10">
                        <p>Tên đăng nhập</p>
                        <input type="text" name="user" value="<?=$user?>">
                    </div>
                    <div class="row mb10">
                        <p>Mật khẩu</p>
                        <input type="password" name="pass" value="<?=$pass?>">
                    </div>
                    <div class="row mb10">
                        <p>Địa chỉ</p>
                        <input type="text" name="address" value="<?=$address?>">
                    </div>
                    <div class="row mb10">
                        <p>Số điện thoại</p>
                        <input type="text" name="tel" value="<?=$tel?>">
                    </div>
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" value="Cập nhật" name="capnhat">
                    <input type="reset" value="Nhập lại">
                </form>
                    <?php
                        if(isset($thongbao) && $thongbao!=""){
                            echo $thongbao;
                        }
                    ?>
            </div>
        </div>
        
    </div>
    <div class="boxphai">
        <?php
            include "view/boxright.php";
        ?>
    </div>
</div>
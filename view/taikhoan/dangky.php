<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">

            <div class="boxtieude">ĐĂNG KÝ THÀNH VIÊN</div>
            <div class=" row boxcontent formtaikhoan">
                <form action="index.php?act=dangky" method="post">
                    <div class="row mb10">
                        <p>Email</p>
                        <input type="email" name="email" placeholder="email">
                    </div>
                    <div class="row mb10">
                        <p>Tên đăng nhập</p>
                        <input type="text" name="user"  placeholder="user">
                    </div>
                    
                    <div class="row mb10">
                        <p>Mật khẩu</p>
                        <input type="password" name="pass"  placeholder="pass">
                    </div>
                    <input type="submit" value="Đăng ký" name="dangky">
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
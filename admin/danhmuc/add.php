<div class="row">
            <div class="row formtieude">
                <h1>Thêm mới loại hàng hóa</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class="row mb10">
                        Mã loại<br>
                        <input type="text" name="maloai" disabled>

                    </div>
                    <div class="row mb10">
                        Tên loại:<br>
                        <input type="text" name="tenloai">
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="THÊM MỚI">
                        <input type="reset" name="nhaplai" value="NHẬP LẠI">
                        <a href="index.php?act=listdm"><input type="button" value="Danh sách" name="listdm"></a>
                    </div>
                    <?php
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }
                        
                    ?>
                </form>
            </div>
        </div>
    </div>
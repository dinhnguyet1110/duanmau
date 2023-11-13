<div class="row mb">
    <div class="boxtrai">
        <div class="row mb">
            <div class="boxtieude">GIỎ HÀNG</div>
            <div class="boxcontent mr cart">
            
                <table>
                   
                    <?php
                        viewcart(1);
                    ?>
                </table>
            </div>
        </div>
        <div class="row mb10 bill">
            <a href="index.php?act=bill"><input type="submit" value="Đồng ý đặt hàng"></a><a href="index.php?act=delcart"><input type="submit" value="Xóa giỏ hàng"></a>
        </div>
    </div>
    <div class="boxphai">
        <?php include "view/boxright.php"; ?>   
    </div>
</div>
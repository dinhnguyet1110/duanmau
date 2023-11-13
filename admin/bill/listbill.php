<div class="row">
    <div class="row formtieude mb">
        <h1>DANH SÁCH ĐƠN HÀNG</h1>
    </div>
    <form action="index.php?act=listbill" method="post">
        <input type="text" name="kyw" id="" placeholder="Nhập mã đơn hàng">
        <input type="submit" value="GO" name="listok">
    </form>
    <div class="row formcontent">
            <div class="row mb10 formdsloai">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ ĐƠN HÀNG</th>
                        <th>KHÁCH HÀNG</th>
                        <th>SỐ LƯỢNG HÀNG</th>
                        <th>GIÁ TRỊ ĐƠN HÀNG</th>
                        <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                        <th>NGÀY ĐẶT HÀNG</th>
                        <th>THAO TÁC</th>
                    </tr>
                    <?php
                        foreach($listbill as $bill){
                            extract($bill);
                            $kh=$bill["bill_name"].'
                            <br> '.$bill["bill_email"].'
                            <br> '.$bill["bill_address"].'
                            <br> '.$bill["bill_tel"];
                            $ttdh=get_ttdh($bill['bill_status']);
                            $countsp=loadall_cart_count($bill['id']);
                            $xoadh="index.php?act=xoadh&id=".$id;
                            echo '
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>DAM-'.$bill['id'].'</td>
                                    <td>'.$kh.'</td>
                                    <td>'.$countsp.'</td>
                                    <td>'.$bill['total'].'</td>
                                    <td>'.$ttdh.'</td>
                                    <td>'.$bill['ngaydathang'].'</td>
                                    <td><a href="'.$xoadh.'"><input type="button" value="Xóa"></a></td>
                                </tr>
                            ';
                        }
                    ?>
                    
                    
                </table>
            </div>
            <div class="row mb10">
                <input type="button" value="Chọn tất cả">
                <input type="button" value="Bỏ chọn tất cả">
                <input type="button" value="Xóa các mục đã chọn">
            </div>
    </div>
</div>
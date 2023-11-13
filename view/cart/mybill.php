<div class="row mb">
        <div class="boxtrai mr">
           
                <div class="row mb">
                    <div class="boxtieude">ĐƠN HÀNG CỦA BẠN</div>
                    <div class="row boxcontent cart">
                        <table>
                            <tr>
                                <td>MÃ ĐƠN HÀNG</td>
                                <td>NGÀY ĐẶT</td>
                                <td>SỐ LƯỢNG MẶT HÀNG</td>
                                <td>TỔNG GIÁ TRỊ MẶT HÀNG</td>
                                <td>TÌNH TRẠNG ĐƠN HÀNG</td>
                            </tr>
                            <?php
                                if(is_array($listbill)){
                                    foreach($listbill as $bill){
                                        extract($bill);
                                        $ttdh=get_ttdh($bill['bill_status']);
                                        $countsp=loadall_cart_count($bill['id']);
                                        echo '<tr>
                                                <td>DAM-'.$bill['id'].'</td>
                                                <td>'.$bill['ngaydathang'].'</td>
                                                <td>'.$countsp.'</td>
                                                <td>'.$bill['total'].'</td>
                                                <td>'.$ttdh.'</td>
                                            </tr>
                                        ';
                                    }
                                }
                            ?>
                        </table>
                    </div>
                </div>
                    
        </div>
        
        <div class="boxphai">
            <?php
                include "view/boxright.php";
            ?>
        </div>
    </div>
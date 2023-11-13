    <div class="row">
            <div class="row formtieude">
                <h1>DANH SÁCH TÀI KHOẢN</h1>
            </div>
            <div class="row formcontent">
                    <div class="row mb10 formdsloai">
                        <table>
                            <tr>
                                <th></th>
                                <th>Mã tài khoản</th>
                                <th>Tên đăng nhập</th>
                                <th>Mật khẩu</th>
                                <th>Email</th>
                                <th>Địa chỉ</th>
                                <th>Số điện thoại</th>
                                <th>Vai trò</th>
                                <th></th>
                            </tr>
                            <?php
                                foreach($listtaikhoan as $taikhoan){
                                    extract($taikhoan);
                                   
                                    $xoatk="index.php?act=xoatk&id=".$id;
                                    echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$user.'</td>
                                    <td>'.$pass.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$address.'</td>
                                    <td>'.$tel.'</td>
                                    <td>'.$role.'</td>
                                    <td><a href="'.$xoatk.'"><input type="button" value="Xóa"></a></td>
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
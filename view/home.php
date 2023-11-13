        <div class="row mb">
            <div class="boxtrai mr">
                <div class="row">
                    
                    <div class="banner">
                        <img id="banner" src="view/images/banner0.jpg" alt="">
                        <button class="pre" onclick="pre()">&#10094;</button>
                        <button class="next" onclick="next()">&#10095;</button>
                    </div>
                </div>
                <div class="row">
                    <?php 
                        $i=0;
                        foreach($spnew as $sp){
                            extract($sp);
                            $hinh=$img_path.$img;
                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            if(($i==2)||($i==5)||($i==8)){
                                $mr="";
                            }else{
                                $mr="mr";
                            }
                            echo '
                            <div class="boxsp '.$mr.'">
                                <div class="row img">
                                    <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a>
                                </div>
                                <p>$'.$price.'</p>
                                <a href="'.$linksp.'">'.$name.'</a>
                                <div class="row btnaddtocart">
                                    <form action="index.php?act=addtocart" method="post">
                                        <input type="hidden" name="id" value="'.$id.'">
                                        <input type="hidden" name="name" value="'.$name.'">
                                        <input type="hidden" name="img" value="'.$img.'">
                                        <input type="hidden" name="price" value="'.$price.'">
                                        <input type="submit" value="Thêm vào giỏ hàng" name="addtocart">
                                    </form>
                                </div>
                            </div>';
                            $i+=1;
                        }
                    ?>
                
                </div>
            </div>
            <div class="boxphai">
                <?php
                    include "view/boxright.php";
                ?>
            </div>
        </div>

<?php
    include "header.php";
?>

<section>
        <div class="home_page">
           <div class="grid wide">
            <div class="home_page_container row ">
                <div class="homepage_left_container l-8 c-12 m-8">
                    <div class="homepage_left">
                        <a href="flashsale3.php"><img src="./img/le29.jpg" alt=""></a>
                        <a href="flashsale3.php"><img src="./img/NCCNhaNamT9_Banner_840x320.jpg" alt=""></a>
                        <a href="flashsale3.php"><img src="./img/NCCThienLongT9_Pla_Banner_840x320.jpg" alt=""></a>
                        <a href="flashsale3.php"><img src="./img/NCCDeliT9_Banner_840x320.jpg" alt=""></a>
                        <a href="flashsale3.php"><img src="./img/KDKS_Mainbanner_T9_Slide_840x320.jpg" alt=""></a>
                    </div>
                    
                    <div class="homepage_left_btn">
                        <i class="fa-solid fa-chevron-left"></i>
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </div>
                <div class="homepage_right l-4 c-0 m-4 ">                 
                    <a href="./vnpay.php"><img src="./img/VnpayT8_392156.png" alt=""></a>
                    <a href="./zalopay.php"><img src="./img/PNJT8_392x156.png" alt=""></a>
                </div>
            </div>
           </div>
        </div>
    </section>
    <section>
        <div class="sale">
            <div class="wide grid">
                <div class="sale_container row">
                    <div class="sale_items   c-0 m-3 l-3">
                        <a href="./endow.php"><img src="./img/sale1.png" alt=""></a>
                    </div>
                    <div class="sale_items   c-0 m-3 l-3">
                        <a href="./trungthu.php"><img src="./img/sale2.png" alt=""></a>
                    </div>
                    <div class="sale_items   c-0 m-3 l-3">
                        <a href="mangafestival.php"><img src="./img/sale3.png" alt=""></a>
                    </div>
                    <div class="sale_items  c-0 m-3 l-3">
                        <a href="mcbooks.php"><img src="./img/sale4.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="main">
            <div class="grid wide">
                <div class="main_container row">
                    <div class="main_items col a-2 b-2 d-1">
                        <a href=""><img src="./img/main1.png" alt=""></a>
                        <p>Siêu Sinh Nhật
                            Siêu Wòaaa</p>
                    </div>
                    <div class="main_items col a-2 b-2 d-1">
                        <a href="gobackschool.php"><img src="./img/main2.png" alt=""></a>
                        <p>Trở Lại
                            Trường Học</p>
                    </div>
                    <div class="main_items col a-2 b-2 d-1">
                        <a href="flashsale.php"><img src="./img/main3.png" alt=""></a>
                        <p>Flash Sale</p>
                    </div>
                    <div class="main_items col a-2 b-2 d-1">
                        <a href=""><img src="./img/main4.png" alt=""></a>
                        <p>Mã Giảm Giá</p>
                    </div>
                    <div class="main_items col a-2 b-2 d-1">
                        <a href=""><img src="./img/main5.png" alt=""></a>
                        <p>Sale Thứ 3</p>
                    </div>
                    <div class="main_items col a-2 b-2 d-1">
                        <a href=""><img src="./img/main6.png" alt=""></a>
                        <p>Nhã Nam</p>
                    </div>
                    <div class="main_items col a-2 b-2 d-1">
                        <a href=""><img src="./img/main7.png" alt=""></a>
                        <p>Galaxy Education</p>
                    </div>
                    <div class="main_items col a-2 b-2 d-1">
                        <a href=""><img src="./img/main8.png" alt=""></a>
                        <p>Sản Phẩm
                            Mới</p>
                    </div>
                    <div class="main_items col a-2 b-2 d-1">
                        <a href=""><img src="./img/main9.png" alt=""></a>
                        <p>Manga</p>
                    </div>
                    <div class="main_items col a-2 b-2 d-1">
                        <a href=""><img src="./img/main10.png" alt=""></a>
                        <p>Phiên Chợ
                            Sách cũ</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="flashsale">
            <div class="wide grid">
                <div class="flashsale_container row">
                    <div class="flashsale_top col c-12 m-12 n-12">
                        <div class="flashsale_top_img">
                            <img src="./img/flashsale.png" alt="">
                        </div>
                        <div class="flashsale_top_content">
                            <a href="">FLASH SALE</a>
                            
                        </div>
                        <div class="flashsale_top_brick">
                            <div class="box"></div>
                        </div>
                        <div class="flashsale_top_start">
                            <p>Bắt Đầu Trong</p>
                        </div>
                        <div class="flashsale_top_time">
                            <span>00</span><label for="">:</label><span>00</span><label for="">:</label><span>00</span>
                        </div>
                    </div>
                    <?php
                        include "connect.php";
                    ?>
                    <?php
                        $connect = new connect;
                        $show_flashsalemain = $connect->show_flashsalemain();
                    ?>
                    <div class="flashsale_bottom col">
                        <div class="flashsale_bottom_books row">
                            <?php
                                if($show_flashsalemain){
                                    while($result = $show_flashsalemain ->fetch_assoc()){
                                        $image_path = "/NhaSachFAHASA/assets/phpitem/img/" . $result['hinhAnh'];
                                    
                            ?>
                            <div class="books_items col1 c-4 m-4 d-2">
                                <a href="">
                                    <img src="<?php echo $image_path ?>" alt="">
                                    <div class="flashsale_bookname"><?php echo $result['tenSach'] ?></div>
                                    <div class="flashsale_price"><?php echo $result['tienGiam'] ?></div>
                                    <div class="flashsale_price_specal"><s><?php echo $result['tienGoc'] ?></s></div>
                                    <div class="flashsale_sell">Đã Bán 40</div>
                                </a>
                            </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        <div class="flashsale_bottom_more c-12 m-12 l-12">
                            <a href="">More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="category">
            <div class="wide grid">
                <div class="category_container row">
                    <div class="category_top ">
                        Product Category
                    </div>
                    <div class="category_bottom row">
                        <a href="" class="category_product col a-2 b-2 d-1">
                            <div class="category_items ">
                                <img src="./img/c1.jpg" alt="">
                                <p>Balo
                                Bóp Viết</p>
                            </div>
                        </a>
                        <a href="" class="category_product col a-2 b-2 d-1">
                            <div class="category_items ">
                                <img src="./img/c2.jpg" alt="">
                                <p>Bút - Viết</p>
                            </div>
                        </a>
                        <a href="" class="category_product col a-2 b-2 d-1">
                            <div class="category_items ">
                                <img src="./img/c3.jpg" alt="">
                                <p>Tập - Vở</p>
                            </div>
                        </a>
                       <a href="" class="category_product col a-2 b-2 d-1">
                            <div class="category_items ">
                            <img src="./img/c4.jpg" alt="">
                            <p>Tâm Linh 
                                Luân Hồi
                            </p>
                            </div>
                       </a>
                        <a href="" class="category_product col a-2 b-2 d-1">
                            <div class="category_items ">
                                <img src="./img/c5.jpg" alt="">
                                <p>Ngôn Tình
                                    Đam Mỹ
                                </p>
                            </div>
                        </a>
                        <a href="" class="category_product col a-2 b-2 d-1">
                            <div class="category_items ">
                                <img src="./img/c6.jpg" alt="">
                                <p>Xu hướng kinh tế</p>
                            </div>
                        </a>
                        <a href="" class="category_product col a-2 b-2 d-1">
                            <div class="category_items ">
                                <img src="./img/c7.jpg" alt="">
                                <p>Thao túng tâm lý</p>
                            </div>
                        </a>
                        <a href="" class="category_product col a-2 b-2 d-1">
                            <div class="category_items ">
                                <img src="./img/c8.jpg" alt="">
                                <p>Thiếu nhi</p>
                            </div>
                        </a>
                        <a href="" class="category_product col a-2 b-2 d-1">
                            <div class="category_items ">
                                <img src="./img/c9.jpg" alt="">
                                <p>Văn học kinh điển</p>
                            </div>
                        </a>
                        <a href="" class="category_product col a-2 b-2 d-1">
                            <div class="category_items ">
                                <img src="./img/c10.jpg" alt="">
                                <p>Tiểu thuyết</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="trend">
            <div class="wide grid">
                <div class="trend_container row">
                    <div class="trend_content">
                        <div class="trend_top">
                            <div class="trend_top_img">
                                <img src="./img/trend.png" alt="">
                            </div>
                            <span>XU HƯỚNG MUA SẮM</span>
                        </div>  
                        <div class="trend_mid">
                            <a href="" >
                                <div class="trend_mid_text">
                                    Xu Hướng Theo Ngày
                                </div>
                            </a>
                            <a href="">
                                <div class="trend_mid_textnoselect">
                                    Sách HOT - Giảm Sốc
                                </div>
                            </a>
                            <a href="">
                                <div class="trend_mid_textnoselect">
                                    Bestseller Ngoại Văn
                                </div>
                            </a>
                        </div>
                        
                        <?php
                            $connect = new connect;        
                            $show_trendbuy = $connect ->show_trendbuy();
                        ?>

                        <div class="trend_bottom ">
                            <div class="trend_bottom_container row">
                                <?php
                                    if($show_trendbuy){
                                        while($result = $show_trendbuy->fetch_assoc()){
                                            $imgtrendbuy = "/NhaSachFAHASA/assets/phpitem/img/". $result['hinhAnh'];
                                        
                                ?>
                                <a href="" class=" col1 c-4 b-2 d-2">
                                <div class="trend_bottom_book ">
                                    <div class="trend_book_percent">
                                        <div class="percent"><?php echo $result['phanTram'] ?><span>%</span></div>
                                    </div>
                                    <div class="trend_book_produce">
                                        <div class="trend_book_produce_img">
                                            <img src="<?php echo $imgtrendbuy ?>" alt="">
                                        </div>
                                        <div class="trend_book_produce_name">
                                            <p><?php echo $result['tenSach'] ?></p>
                                        </div>
                                        <div class="trend_book_produce_price">
                                            <span><?php echo $result['tienGiam'] ?><span>đ</span></span>
                                        </div>
                                        <div class="trend_book_produce_sale">
                                            <s><?php echo $result['tienGoc'] ?><span>đ</span></s>
                                        </div>
                                        <div class="trend_book_produce_star">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="trend_book_sell">
                                        <p>Đã bán 0</p>
                                    </div>
                                </div>
                                </a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="trend_continue">
                            <div class="trend_continue_box">
                                Xem thêm
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="trend">
            <div class="wide grid">
                <div class="trend_container row">
                    <div class="trend_content">
                        <div class="trend_top">
                            <div class="trend_top_img">
                                <img src="./img/trend.png" alt="">
                            </div>
                            <span>SÁCH GIÁO KHOA</span>
                        </div>  
                        <div class="trend_mid">
                            <a href="" >
                                <div class="trend_mid_text">
                                    SGK Tiếng Anh Cấp 1
                                </div>
                            </a>
                            <a href="">
                                <div class="trend_mid_textnoselect">
                                    SGK Tiếng Anh Cấp 2
                                </div>
                            </a>
                            <a href="">
                                <div class="trend_mid_textnoselect">
                                    SGK Tiếng Anh Cấp 3
                                </div>
                            </a>
                        </div>
                        <?php
                            $connect = new connect;
                            $show_sgk = $connect -> show_sgk();
                        ?>
                        <div class="trend_bottom ">
                            <div class="trend_bottom_container row">
                                <?php
                                    if($show_sgk){
                                        while($result = $show_sgk->fetch_assoc()){
                                            $imgsgk = "/NhaSachFAHASA/assets/phpitem/img/". $result['hinhAnh'];
                                        
                                ?>
                                <a href="" class=" col1 c-4 b-2 d-2">
                                <div class="trend_bottom_book">
                                    <div class="trend_book_percent">
                                        <div class="percent"></div>
                                    </div>
                                    <div class="trend_book_produce">
                                        <div class="trend_book_produce_img">
                                            <img src="<?php echo $imgsgk ?>" alt="">
                                        </div>
                                        <div class="trend_book_produce_name">
                                            <p><?php echo $result['tenSach'] ?></p>
                                        </div>
                                        <div class="trend_book_produce_price">
                                            <span><?php echo $result['tienGiam'] ?></span>
                                        </div>
                                        <div class="trend_book_produce_sale">
                                            <s><?php echo $result['tienGoc'] ?><span>đ</span></s>
                                        </div>
                                        <div class="trend_book_produce_star">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="trend_book_sell">
                                        <p>Đã bán 0</p>
                                    </div>
                                </div>
                                </a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="trend_continue">
                            <div class="trend_continue_box">
                                Xem thêm
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="trend">
            <div class="wide grid">
                <div class="trend_container row">
                    <div class="trend_content">
                        <div class="trend_top">
                            <div class="trend_top_img">
                                <img src="./img/trend.png" alt="">
                            </div>
                            <span>SÁCH GIÁO KHOA - BAO TẬP</span>
                        </div>  
                        <div class="trend_mid">
                            <a href="" >
                                <div class="trend_mid_text">
                                    Combo Sách Giáo Khoa - Bao Tập
                                </div>
                            </a>
                            <a href="">
                                <div class="trend_mid_textnoselect">
                                    SGK Cấp 1
                                </div>
                            </a>
                            <a href="">
                                <div class="trend_mid_textnoselect">
                                    SGK Cấp 2
                                </div>
                            </a>
                            <a href="">
                                <div class="trend_mid_textnoselect">
                                    SGK Cấp 3
                                </div>
                            </a>
                        </div>
                        <?php
                            $connect = new connect;
                            $show_tapvo = $connect->show_tapvo();
                        ?>
                        <div class="trend_bottom ">
                            <div class="trend_bottom_container row">
                                <?php
                                    if($show_tapvo){
                                        while($result= $show_tapvo->fetch_assoc()){
                                            $trend_bottom = "/NhaSachFAHASA/assets/phpitem/img/".$result['hinhAnh'];
                                        
                                ?>
                                <a href="" class="col1 c-4 b-2 d-2">
                                <div class="trend_bottom_book ">
                                    <div class="trend_book_percent">
                                        <div class="percent"></div>
                                    </div>
                                    <div class="trend_book_produce">
                                        <div class="trend_book_produce_img">
                                            <img src=" <?php echo $trend_bottom ?>" alt="">
                                        </div>
                                        <div class="trend_book_produce_name">
                                            <p><?php echo $result['tenSach'] ?></p>
                                        </div>
                                        <div class="trend_book_produce_price">
                                            <span><?php echo $result['tienGiam'] ?><span>đ</span></span>
                                        </div>
                                        <div class="trend_book_produce_sale">
                                            <s><?php echo $result['tienGoc'] ?><span>đ</span></s>
                                        </div>
                                        <div class="trend_book_produce_star">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="trend_book_sell">
                                        <p>Đã bán 0</p>
                                    </div>
                                </div>
                                </a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="trend_continue">
                            <div class="trend_continue_box">
                                Xem thêm
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="trend">
            <div class="wide grid">
                <div class="trend_container row">
                    <div class="trend_content">
                        <div class="trend_top">
                            <div class="trend_top_img">
                                <img src="./img/trend.png" alt="">
                            </div>
                            <span>TẬP VỞ</span>
                        </div>  
                        <div class="trend_mid">
                            <a href="" >
                                <div class="trend_mid_text">
                                    Tập 4 Ô Ly
                                </div>
                            </a>
                            <a href="">
                                <div class="trend_mid_textnoselect">
                                    Tập 5 Ô Ly
                                </div>
                            </a>
                            <a href="">
                                <div class="trend_mid_textnoselect">
                                    200 Trang
                                </div>
                            </a>
                            
                        </div>
                        <div class="trend_bottom ">
                            <div class="trend_bottom_container row">
                                <div class="trend_bottom_book col1 c-4 b-2 d-2">
                                    <div class="trend_book_percent">
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="trend_book_produce">
                                        <div class="trend_book_produce_img">
                                            <img src="./img/tap1.jpg" alt="">
                                        </div>
                                        <div class="trend_book_produce_name">
                                            <p>Không diệt không sinh đừng sợ hãi</p>
                                        </div>
                                        <div class="trend_book_produce_price">
                                            <span>240.000đ</span>
                                        </div>
                                        <div class="trend_book_produce_sale">
                                            <s>290.000đ</s>
                                        </div>
                                        <div class="trend_book_produce_star">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="trend_book_sell">
                                        <p>Đã bán 0</p>
                                    </div>
                                </div>
                                <div class="trend_bottom_book col1 c-4 b-2 d-2">
                                    <div class="trend_book_percent">
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="trend_book_produce">
                                        <div class="trend_book_produce_img">
                                            <img src="./img/tap2.jpg" alt="">
                                        </div>
                                        <div class="trend_book_produce_name">
                                            <p>Không diệt không sinh đừng sợ hãi</p>
                                        </div>
                                        <div class="trend_book_produce_price">
                                            <span>240.000đ</span>
                                        </div>
                                        <div class="trend_book_produce_sale">
                                            <s>290.000đ</s>
                                        </div>
                                        <div class="trend_book_produce_star">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="trend_book_sell">
                                        <p>Đã bán 0</p>
                                    </div>
                                </div>
                                <div class="trend_bottom_book col1 c-4 b-2 d-2">
                                    <div class="trend_book_percent">
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="trend_book_produce">
                                        <div class="trend_book_produce_img">
                                            <img src="./img/tap3.jpg" alt="">
                                        </div>
                                        <div class="trend_book_produce_name">
                                            <p>Không diệt không sinh đừng sợ hãi</p>
                                        </div>
                                        <div class="trend_book_produce_price">
                                            <span>240.000đ</span>
                                        </div>
                                        <div class="trend_book_produce_sale">
                                            <s>290.000đ</s>
                                        </div>
                                        <div class="trend_book_produce_star">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="trend_book_sell">
                                        <p>Đã bán 0</p>
                                    </div>
                                </div>
                                <div class="trend_bottom_book col1 c-4 b-2 d-2">
                                    <div class="trend_book_percent">
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="trend_book_produce">
                                        <div class="trend_book_produce_img">
                                            <img src="./img/tap4.jpg" alt="">
                                        </div>
                                        <div class="trend_book_produce_name">
                                            <p>Không diệt không sinh đừng sợ hãi</p>
                                        </div>
                                        <div class="trend_book_produce_price">
                                            <span>240.000đ</span>
                                        </div>
                                        <div class="trend_book_produce_sale">
                                            <s>290.000đ</s>
                                        </div>
                                        <div class="trend_book_produce_star">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="trend_book_sell">
                                        <p>Đã bán 0</p>
                                    </div>
                                </div>
                                <div class="trend_bottom_book col1 c-4 b-2 d-2">
                                    <div class="trend_book_percent">
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="trend_book_produce">
                                        <div class="trend_book_produce_img">
                                            <img src="./img/tap5.jpg" alt="">
                                        </div>
                                        <div class="trend_book_produce_name">
                                            <p>Không diệt không sinh đừng sợ hãi</p>
                                        </div>
                                        <div class="trend_book_produce_price">
                                            <span>240.000đ</span>
                                        </div>
                                        <div class="trend_book_produce_sale">
                                            <s>290.000đ</s>
                                        </div>
                                        <div class="trend_book_produce_star">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="trend_book_sell">
                                        <p>Đã bán 0</p>
                                    </div>
                                </div>
                                <div class="trend_bottom_book col1 c-4 b-2 d-2">
                                    <div class="trend_book_percent">
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="trend_book_produce">
                                        <div class="trend_book_produce_img">
                                            <img src="./img/tap6.jpg" alt="">
                                        </div>
                                        <div class="trend_book_produce_name">
                                            <p>Không diệt không sinh đừng sợ hãi</p>
                                        </div>
                                        <div class="trend_book_produce_price">
                                            <span>240.000đ</span>
                                        </div>
                                        <div class="trend_book_produce_sale">
                                            <s>290.000đ</s>
                                        </div>
                                        <div class="trend_book_produce_star">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="trend_book_sell">
                                        <p>Đã bán 0</p>
                                    </div>
                                </div>
                                <div class="trend_bottom_book col1 c-4 b-2 d-2">
                                    <div class="trend_book_percent">
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="trend_book_produce">
                                        <div class="trend_book_produce_img">
                                            <img src="./img/tap7.jpg" alt="">
                                        </div>
                                        <div class="trend_book_produce_name">
                                            <p>Không diệt không sinh đừng sợ hãi</p>
                                        </div>
                                        <div class="trend_book_produce_price">
                                            <span>240.000đ</span>
                                        </div>
                                        <div class="trend_book_produce_sale">
                                            <s>290.000đ</s>
                                        </div>
                                        <div class="trend_book_produce_star">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="trend_book_sell">
                                        <p>Đã bán 0</p>
                                    </div>
                                </div>
                                <div class="trend_bottom_book col1 c-4 b-2 d-2">
                                    <div class="trend_book_percent">
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="trend_book_produce">
                                        <div class="trend_book_produce_img">
                                            <img src="./img/tap8.jpg" alt="">
                                        </div>
                                        <div class="trend_book_produce_name">
                                            <p>Không diệt không sinh đừng sợ hãi</p>
                                        </div>
                                        <div class="trend_book_produce_price">
                                            <span>240.000đ</span>
                                        </div>
                                        <div class="trend_book_produce_sale">
                                            <s>290.000đ</s>
                                        </div>
                                        <div class="trend_book_produce_star">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="trend_book_sell">
                                        <p>Đã bán 0</p>
                                    </div>
                                </div>
                                <div class="trend_bottom_book col1 c-4 b-2 d-2">
                                    <div class="trend_book_percent">
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="trend_book_produce">
                                        <div class="trend_book_produce_img">
                                            <img src="./img/tap9.jpg" alt="">
                                        </div>
                                        <div class="trend_book_produce_name">
                                            <p>Không diệt không sinh đừng sợ hãi</p>
                                        </div>
                                        <div class="trend_book_produce_price">
                                            <span>240.000đ</span>
                                        </div>
                                        <div class="trend_book_produce_sale">
                                            <s>290.000đ</s>
                                        </div>
                                        <div class="trend_book_produce_star">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="trend_book_sell">
                                        <p>Đã bán 0</p>
                                    </div>
                                </div>
                                <div class="trend_bottom_book col1 c-4 b-2 d-2">
                                    <div class="trend_book_percent">
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="trend_book_produce">
                                        <div class="trend_book_produce_img">
                                            <img src="./img/tap10.jpg" alt="">
                                        </div>
                                        <div class="trend_book_produce_name">
                                            <p>Không diệt không sinh đừng sợ hãi</p>
                                        </div>
                                        <div class="trend_book_produce_price">
                                            <span>240.000đ</span>
                                        </div>
                                        <div class="trend_book_produce_sale">
                                            <s>290.000đ</s>
                                        </div>
                                        <div class="trend_book_produce_star">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="trend_book_sell">
                                        <p>Đã bán 0</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trend_continue">
                            <div class="trend_continue_box">
                                Xem thêm
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="trend">
            <div class="wide grid">
                <div class="trend_container row">
                    <div class="trend_content">
                        <div class="trend_top">
                            <div class="trend_top_img">
                                <img src="./img/trend.png" alt="">
                            </div>
                            <span>BALO</span>
                        </div>  
                        <div class="trend_mid">
                            <a href="" >
                                <div class="trend_mid_textnoselect">
                                    Ba Lô Bán Chạy  
                                </div>
                            </a>
                            <a href="">
                                <div class="trend_mid_textnoselect">
                                    Ba Lô Giá Sốc
                                </div>
                            </a>
                            <a href="">
                                <div class="trend_mid_text">
                                    Ba Lô Mới
                                </div>
                            </a>
                            
                        </div>
                        <div class="trend_bottom ">
                            <div class="trend_bottom_container row">
                                <div class="trend_bottom_book col1 c-4 b-2 d-2">
                                    <div class="trend_book_percent">
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="trend_book_produce">
                                        <div class="trend_book_produce_img">
                                            <img src="./img/balo1.jpg" alt="">
                                        </div>
                                        <div class="trend_book_produce_name">
                                            <p>Không diệt không sinh đừng sợ hãi</p>
                                        </div>
                                        <div class="trend_book_produce_price">
                                            <span>240.000đ</span>
                                        </div>
                                        <div class="trend_book_produce_sale">
                                            <s>290.000đ</s>
                                        </div>
                                        <div class="trend_book_produce_star">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="trend_book_sell">
                                        <p>Đã bán 0</p>
                                    </div>
                                </div>
                                <div class="trend_bottom_book col1 c-4 b-2 d-2">
                                    <div class="trend_book_percent">
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="trend_book_produce">
                                        <div class="trend_book_produce_img">
                                            <img src="./img/balo2.jpg" alt="">
                                        </div>
                                        <div class="trend_book_produce_name">
                                            <p>Không diệt không sinh đừng sợ hãi</p>
                                        </div>
                                        <div class="trend_book_produce_price">
                                            <span>240.000đ</span>
                                        </div>
                                        <div class="trend_book_produce_sale">
                                            <s>290.000đ</s>
                                        </div>
                                        <div class="trend_book_produce_star">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="trend_book_sell">
                                        <p>Đã bán 0</p>
                                    </div>
                                </div>
                                <div class="trend_bottom_book col1 c-4 b-2 d-2">
                                    <div class="trend_book_percent">
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="trend_book_produce">
                                        <div class="trend_book_produce_img">
                                            <img src="./img/balo3.jpg" alt="">
                                        </div>
                                        <div class="trend_book_produce_name">
                                            <p>Không diệt không sinh đừng sợ hãi</p>
                                        </div>
                                        <div class="trend_book_produce_price">
                                            <span>240.000đ</span>
                                        </div>
                                        <div class="trend_book_produce_sale">
                                            <s>290.000đ</s>
                                        </div>
                                        <div class="trend_book_produce_star">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="trend_book_sell">
                                        <p>Đã bán 0</p>
                                    </div>
                                </div>
                                <div class="trend_bottom_book col1 c-4 b-2 d-2">
                                    <div class="trend_book_percent">
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="trend_book_produce">
                                        <div class="trend_book_produce_img">
                                            <img src="./img/balo4.jpg" alt="">
                                        </div>
                                        <div class="trend_book_produce_name">
                                            <p>Không diệt không sinh đừng sợ hãi</p>
                                        </div>
                                        <div class="trend_book_produce_price">
                                            <span>240.000đ</span>
                                        </div>
                                        <div class="trend_book_produce_sale">
                                            <s>290.000đ</s>
                                        </div>
                                        <div class="trend_book_produce_star">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="trend_book_sell">
                                        <p>Đã bán 0</p>
                                    </div>
                                </div>
                                <div class="trend_bottom_book col1 c-4 b-2 d-2">
                                    <div class="trend_book_percent">
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="trend_book_produce">
                                        <div class="trend_book_produce_img">
                                            <img src="./img/balo5.jpg" alt="">
                                        </div>
                                        <div class="trend_book_produce_name">
                                            <p>Không diệt không sinh đừng sợ hãi</p>
                                        </div>
                                        <div class="trend_book_produce_price">
                                            <span>240.000đ</span>
                                        </div>
                                        <div class="trend_book_produce_sale">
                                            <s>290.000đ</s>
                                        </div>
                                        <div class="trend_book_produce_star">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="trend_book_sell">
                                        <p>Đã bán 0</p>
                                    </div>
                                </div>
                                <div class="trend_bottom_book col1 c-4 b-2 d-2">
                                    <div class="trend_book_percent">
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="trend_book_produce">
                                        <div class="trend_book_produce_img">
                                            <img src="./img/balo6.jpg" alt="">
                                        </div>
                                        <div class="trend_book_produce_name">
                                            <p>Không diệt không sinh đừng sợ hãi</p>
                                        </div>
                                        <div class="trend_book_produce_price">
                                            <span>240.000đ</span>
                                        </div>
                                        <div class="trend_book_produce_sale">
                                            <s>290.000đ</s>
                                        </div>
                                        <div class="trend_book_produce_star">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="trend_book_sell">
                                        <p>Đã bán 0</p>
                                    </div>
                                </div>
                                <div class="trend_bottom_book col1 c-4 b-2 d-2">
                                    <div class="trend_book_percent">
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="trend_book_produce">
                                        <div class="trend_book_produce_img">
                                            <img src="./img/balo7.jpg" alt="">
                                        </div>
                                        <div class="trend_book_produce_name">
                                            <p>Không diệt không sinh đừng sợ hãi</p>
                                        </div>
                                        <div class="trend_book_produce_price">
                                            <span>240.000đ</span>
                                        </div>
                                        <div class="trend_book_produce_sale">
                                            <s>290.000đ</s>
                                        </div>
                                        <div class="trend_book_produce_star">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="trend_book_sell">
                                        <p>Đã bán 0</p>
                                    </div>
                                </div>
                                <div class="trend_bottom_book col1 c-4 b-2 d-2">
                                    <div class="trend_book_percent">
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="trend_book_produce">
                                        <div class="trend_book_produce_img">
                                            <img src="./img/balo8.jpg" alt="">
                                        </div>
                                        <div class="trend_book_produce_name">
                                            <p>Không diệt không sinh đừng sợ hãi</p>
                                        </div>
                                        <div class="trend_book_produce_price">
                                            <span>240.000đ</span>
                                        </div>
                                        <div class="trend_book_produce_sale">
                                            <s>290.000đ</s>
                                        </div>
                                        <div class="trend_book_produce_star">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="trend_book_sell">
                                        <p>Đã bán 0</p>
                                    </div>
                                </div>
                                <div class="trend_bottom_book col1 c-4 b-2 d-2">
                                    <div class="trend_book_percent">
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="trend_book_produce">
                                        <div class="trend_book_produce_img">
                                            <img src="./img/balo9.jpg" alt="">
                                        </div>
                                        <div class="trend_book_produce_name">
                                            <p>Không diệt không sinh đừng sợ hãi</p>
                                        </div>
                                        <div class="trend_book_produce_price">
                                            <span>240.000đ</span>
                                        </div>
                                        <div class="trend_book_produce_sale">
                                            <s>290.000đ</s>
                                        </div>
                                        <div class="trend_book_produce_star">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="trend_book_sell">
                                        <p>Đã bán 0</p>
                                    </div>
                                </div>
                                <div class="trend_bottom_book col1 c-4 b-2 d-2">
                                    <div class="trend_book_percent">
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="trend_book_produce">
                                        <div class="trend_book_produce_img">
                                            <img src="./img/balo10.jpg" alt="">
                                        </div>
                                        <div class="trend_book_produce_name">
                                            <p>Không diệt không sinh đừng sợ hãi</p>
                                        </div>
                                        <div class="trend_book_produce_price">
                                            <span>240.000đ</span>
                                        </div>
                                        <div class="trend_book_produce_sale">
                                            <s>290.000đ</s>
                                        </div>
                                        <div class="trend_book_produce_star">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="trend_book_sell">
                                        <p>Đã bán 0</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trend_continue">
                            <div class="trend_continue_box">
                                Xem thêm
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="trend">
            <div class="wide grid">
                <div class="trend_container row">
                    <div class="trend_content">
                        <div class="trend_top">
                            <div class="trend_top_img">
                                <img src="./img/trend.png" alt="">
                            </div>
                            <span>BÚT</span>
                        </div>  
                        <div class="trend_mid">
                            <a href="" >
                                <div class="trend_mid_textnoselect">
                                    Bút Bi
                                </div>
                            </a>
                            <a href="">
                                <div class="trend_mid_text">
                                    Bút Gel
                                </div>
                            </a>
                            <a href="">
                                <div class="trend_mid_textnoselect">
                                    Bút Chì
                                </div>
                            </a>
                            <a href="">
                                <div class="trend_mid_textnoselect">
                                    Mua Là Có Quà
                                </div>
                            </a>
                        </div>
                        <div class="trend_bottom ">
                            <div class="trend_bottom_container row">
                                <div class="trend_bottom_book col1 c-4 b-2 d-2">
                                    <div class="trend_book_percent">
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="trend_book_produce">
                                        <div class="trend_book_produce_img">
                                            <img src="./img/trend1.jpg" alt="">
                                        </div>
                                        <div class="trend_book_produce_name">
                                            <p>Không diệt không sinh đừng sợ hãi</p>
                                        </div>
                                        <div class="trend_book_produce_price">
                                            <span>240.000đ</span>
                                        </div>
                                        <div class="trend_book_produce_sale">
                                            <s>290.000đ</s>
                                        </div>
                                        <div class="trend_book_produce_star">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="trend_book_sell">
                                        <p>Đã bán 0</p>
                                    </div>
                                </div>
                                <div class="trend_bottom_book col1 c-4 b-2 d-2">
                                    <div class="trend_book_percent">
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="trend_book_produce">
                                        <div class="trend_book_produce_img">
                                            <img src="./img/trend2.jpg" alt="">
                                        </div>
                                        <div class="trend_book_produce_name">
                                            <p>Không diệt không sinh đừng sợ hãi</p>
                                        </div>
                                        <div class="trend_book_produce_price">
                                            <span>240.000đ</span>
                                        </div>
                                        <div class="trend_book_produce_sale">
                                            <s>290.000đ</s>
                                        </div>
                                        <div class="trend_book_produce_star">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="trend_book_sell">
                                        <p>Đã bán 0</p>
                                    </div>
                                </div>
                                <div class="trend_bottom_book col1 c-4 b-2 d-2">
                                    <div class="trend_book_percent">
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="trend_book_produce">
                                        <div class="trend_book_produce_img">
                                            <img src="./img/trend3.jpg" alt="">
                                        </div>
                                        <div class="trend_book_produce_name">
                                            <p>Không diệt không sinh đừng sợ hãi</p>
                                        </div>
                                        <div class="trend_book_produce_price">
                                            <span>240.000đ</span>
                                        </div>
                                        <div class="trend_book_produce_sale">
                                            <s>290.000đ</s>
                                        </div>
                                        <div class="trend_book_produce_star">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="trend_book_sell">
                                        <p>Đã bán 0</p>
                                    </div>
                                </div>
                                <div class="trend_bottom_book col1 c-4 b-2 d-2">
                                    <div class="trend_book_percent">
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="trend_book_produce">
                                        <div class="trend_book_produce_img">
                                            <img src="./img/trend4.jpg" alt="">
                                        </div>
                                        <div class="trend_book_produce_name">
                                            <p>Không diệt không sinh đừng sợ hãi</p>
                                        </div>
                                        <div class="trend_book_produce_price">
                                            <span>240.000đ</span>
                                        </div>
                                        <div class="trend_book_produce_sale">
                                            <s>290.000đ</s>
                                        </div>
                                        <div class="trend_book_produce_star">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="trend_book_sell">
                                        <p>Đã bán 0</p>
                                    </div>
                                </div>
                                <div class="trend_bottom_book col1 c-4 b-2 d-2">
                                    <div class="trend_book_percent">
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="trend_book_produce">
                                        <div class="trend_book_produce_img">
                                            <img src="./img/trend5.jpg" alt="">
                                        </div>
                                        <div class="trend_book_produce_name">
                                            <p>Không diệt không sinh đừng sợ hãi</p>
                                        </div>
                                        <div class="trend_book_produce_price">
                                            <span>240.000đ</span>
                                        </div>
                                        <div class="trend_book_produce_sale">
                                            <s>290.000đ</s>
                                        </div>
                                        <div class="trend_book_produce_star">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="trend_book_sell">
                                        <p>Đã bán 0</p>
                                    </div>
                                </div>
                                <div class="trend_bottom_book col1 c-4 b-2 d-2">
                                    <div class="trend_book_percent">
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="trend_book_produce">
                                        <div class="trend_book_produce_img">
                                            <img src="./img/trend6.jpg" alt="">
                                        </div>
                                        <div class="trend_book_produce_name">
                                            <p>Không diệt không sinh đừng sợ hãi</p>
                                        </div>
                                        <div class="trend_book_produce_price">
                                            <span>240.000đ</span>
                                        </div>
                                        <div class="trend_book_produce_sale">
                                            <s>290.000đ</s>
                                        </div>
                                        <div class="trend_book_produce_star">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="trend_book_sell">
                                        <p>Đã bán 0</p>
                                    </div>
                                </div>
                                <div class="trend_bottom_book col1 c-4 b-2 d-2">
                                    <div class="trend_book_percent">
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="trend_book_produce">
                                        <div class="trend_book_produce_img">
                                            <img src="./img/trend7.jpg" alt="">
                                        </div>
                                        <div class="trend_book_produce_name">
                                            <p>Không diệt không sinh đừng sợ hãi</p>
                                        </div>
                                        <div class="trend_book_produce_price">
                                            <span>240.000đ</span>
                                        </div>
                                        <div class="trend_book_produce_sale">
                                            <s>290.000đ</s>
                                        </div>
                                        <div class="trend_book_produce_star">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="trend_book_sell">
                                        <p>Đã bán 0</p>
                                    </div>
                                </div>
                                <div class="trend_bottom_book col1 c-4 b-2 d-2">
                                    <div class="trend_book_percent">
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="trend_book_produce">
                                        <div class="trend_book_produce_img">
                                            <img src="./img/trend8.jpg" alt="">
                                        </div>
                                        <div class="trend_book_produce_name">
                                            <p>Không diệt không sinh đừng sợ hãi</p>
                                        </div>
                                        <div class="trend_book_produce_price">
                                            <span>240.000đ</span>
                                        </div>
                                        <div class="trend_book_produce_sale">
                                            <s>290.000đ</s>
                                        </div>
                                        <div class="trend_book_produce_star">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="trend_book_sell">
                                        <p>Đã bán 0</p>
                                    </div>
                                </div>
                                <div class="trend_bottom_book col1 c-4 b-2 d-2">
                                    <div class="trend_book_percent">
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="trend_book_produce">
                                        <div class="trend_book_produce_img">
                                            <img src="./img/trend9.jpg" alt="">
                                        </div>
                                        <div class="trend_book_produce_name">
                                            <p>Không diệt không sinh đừng sợ hãi</p>
                                        </div>
                                        <div class="trend_book_produce_price">
                                            <span>240.000đ</span>
                                        </div>
                                        <div class="trend_book_produce_sale">
                                            <s>290.000đ</s>
                                        </div>
                                        <div class="trend_book_produce_star">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="trend_book_sell">
                                        <p>Đã bán 0</p>
                                    </div>
                                </div>
                                <div class="trend_bottom_book col1 c-4 b-2 d-2">
                                    <div class="trend_book_percent">
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="trend_book_produce">
                                        <div class="trend_book_produce_img">
                                            <img src="./img/trend10.jpg" alt="">
                                        </div>
                                        <div class="trend_book_produce_name">
                                            <p>Không diệt không sinh đừng sợ hãi</p>
                                        </div>
                                        <div class="trend_book_produce_price">
                                            <span>240.000đ</span>
                                        </div>
                                        <div class="trend_book_produce_sale">
                                            <s>290.000đ</s>
                                        </div>
                                        <div class="trend_book_produce_star">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="trend_book_sell">
                                        <p>Đã bán 0</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trend_continue">
                            <div class="trend_continue_box">
                                Xem thêm
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section>
        <div class="swiper">
            <div class="wide grid">
                <div class="swiper_container row">
                    <div class="list_swiper row">
                        <div class="swiper_content col a-1 b-1 d-1">
                            <a href="">
                                <img src="./img/s1.jpg" alt="">
                            </a>
                        </div>
                        <div class="swiper_content col a-1 b-1 d-1">
                            <a href="">
                                <img src="./img/s2.jpg" alt="">
                            </a>
                        </div>
                        <div class="swiper_content col a-1 b-1 d-1">
                            <a href="">
                                <img src="./img/s3.jpg" alt="">
                            </a>
                        </div>
                        <div class="swiper_content col a-1 b-1 d-1">
                            <a href="">
                                <img src="./img/s4.jpg" alt="">
                            </a>
                        </div>
                        <div class="swiper_content col a-1 b-1 d-1">
                            <a href="">
                                <img src="./img/s5.jpg" alt="">
                            </a>
                        </div>
                        <div class="swiper_content col a-1 b-1 d-1">
                            <a href="">
                                <img src="./img/s6.jpg" alt="">
                            </a>
                        </div>
                        <div class="swiper_content col a-1 b-1 d-1">
                            <a href="">
                                <img src="./img/s7.jpg" alt="">
                            </a>
                        </div>
                        <div class="swiper_content col a-1 b-1 d-1">
                            <a href="">
                                <img src="./img/s8.jpg" alt="">
                            </a>
                        </div>
                        <div class="swiper_content col a-1 b-1 d-1">
                            <a href="">
                                <img src="./img/s9.png" alt="">
                            </a>
                        </div>
                        <div class="swiper_content col a-1 b-1 d-1">
                            <a href="">
                                <img src="./img/s10.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal">
        <div class="modal__container">
            <!-- Register form -->
            <form class="account_form hidden" id="register-form">
                <div class="account_form__container">
                    <h3 class="account_form__heading">Đăng ký</h3>

                    <div class="account_form__form">
                        <input type="text" class="account_form__input" placeholder="Họ và tên">
                        <input type="email" class="account_form__input" placeholder="Email">
                        <input type="password" class="password-input account_form__input" placeholder="Mật khẩu">
                        <input type="password" class="account_form__input" placeholder="Nhập lại mật khẩu">
                    </div>

                    <div class="account_form__aside">
                        <p class="account_form__policy-text">
                            Tôi đã đọc và đồng ý với
                            <a href="" class="account_form__policy-link">Điều khoản dịch vụ Findy</a>,
                            bao gồm
                            <a href="" class="account_form__policy-link">Thỏa thuận người dùng</a>
                            và
                            <a href="" class="account_form__policy-link">Chính sách bảo mật</a>.
                        </p>
                    </div>

                    <button class="btn btn--primary account_form__btn">Đăng ký</button>
                </div>

                <div class="account_form__socials">
                    <p class="account_form__separate">
                        <span class="account_form__separate-text">Hoặc</span>
                    </p>

                    <div class="account_form__socials-list">
                        <a href="" class="btn account_form__socials--facebook">
                            <i class="account_form__socials-icon fa-brands fa-facebook"></i>
                            <span class="account_form__socials-title">
                                Facebook
                            </span>
                        </a>
                        <a href="" class="btn account_form__socials--google">
                            <span class="account_form__socials-icon">
                                <svg data-v-48748210="" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><g data-v-48748210=""><path data-v-48748210="" fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path> <path data-v-48748210="" fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path> <path data-v-48748210="" fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path> <path data-v-48748210="" fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path> <path data-v-48748210="" fill="none" d="M0 0h48v48H0z"></path></g></svg>
                            </span>
                            <span class="account_form__socials-title">
                                Google
                            </span>
                        </a>
                    </div>
                </div>

                <div class="account_form__footer">
                    <!-- <p class="account_form__separate">
                        <span class="account_form__separate-text">Bạn đã có tài khoản Findy?</span>
                    </p>
                    <button class="btn account_form__footer-btn">Đăng nhập</button> -->

                    <p class="account_form__text">
                        Bạn đã có tài khoản Findy?
                        <a href="#" class="account_form__link" onclick="showLoginForm()">Đăng nhập</a>
                    </p>
                </div>
            </form>

            <!-- Login form -->
            <form class="account_form hidden" id="login-form">
                <div class="account_form__container">
                    <h3 class="account_form__heading">Đăng nhập</h3>

                    <div class="account_form__form">
                        <input type="email" class="account_form__input" placeholder="Email">
                        <input type="password" class="password-input account_form__input" placeholder="Mật khẩu">
                    </div>

                    <button class="btn btn--primary account_form__btn">Đăng nhập</button>
                </div>

                <div class="account_form__socials">
                    <p class="account_form__separate">
                        <span class="account_form__separate-text">Hoặc</span>
                    </p>

                    <div class="account_form__socials-list">
                        <a href="" class="btn account_form__socials--facebook">
                            <i class="account_form__socials-icon fa-brands fa-facebook"></i>
                            <span class="account_form__socials-title">
                                Facebook
                            </span>
                        </a>
                        <a href="" class="btn account_form__socials--google">
                            <span class="account_form__socials-icon">
                                <svg data-v-48748210="" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><g data-v-48748210=""><path data-v-48748210="" fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path> <path data-v-48748210="" fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path> <path data-v-48748210="" fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path> <path data-v-48748210="" fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path> <path data-v-48748210="" fill="none" d="M0 0h48v48H0z"></path></g></svg>
                            </span>
                            <span class="account_form__socials-title">
                                Google
                            </span>
                        </a>
                    </div>
                </div>

                <div class="account_form__footer">
                    <!-- <p class="account_form__separate">
                        <span class="account_form__separate-text">Bạn đã có tài khoản Findy?</span>
                    </p>
                    <button class="btn account_form__footer-btn">Đăng nhập</button> -->

                    <p class="account_form__text">
                        Bạn đã có tài khoản Findy?
                        <a href="#" class="account_form__link" onclick="showRegisterForm()">Đăng ký</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
    <?php
        include "footer.php";
    ?>
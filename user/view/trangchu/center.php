    <!--=============== END: HEADER  =============-->


    <div class="slider">
        <div>
            <img src="../public/img/sd1.jpg" alt="" class="slide-img">
            <img src="../public/img/sd2.jpg" alt="" class="slide-img">
            <img src="../public/img/sd3.jpg" alt="" class="slide-img">
        </div>

        <div class="slider-end">
            <div class="slider__end-list">
                <i class="bi bi-airplane"></i>
                <div class="slider__end-item">
                    <p>GIAO HẢO TỐC</p>
                    <p>Nội thành TP.Cần Thơ</p>
                </div>
            </div>
            <div class="slider__end-list">
                <i class="bi bi-airplane"></i>
                <div class="slider__end-item">
                    <p>TRẢ GÓP ƯU ĐÃI</p>
                    <p>Hỗ trợ vay lãi suất thấp</p>
                </div>
            </div>
            <div class="slider__end-list">
                <i class="bi bi-ticket-perforated"></i>
                <div class="slider__end-item">
                    <p>DEAL BÙNG NỔ</p>
                    <p>Flash sale giảm giá sốc</p>
                </div>
            </div>
            <div class="slider__end-list">
                <i class="bi bi-recycle"></i>
                <div class="slider__end-item">
                    <p>MIỄN PHÍ ĐỔI TRẢ</p>
                    <p>Trong vòng 30 ngày</p>
                </div>
            </div>
            <div class="slider__end-list">
                <i class="fa-solid fa-headset"></i>
                <div class="slider__end-item">
                    <p>HỖ TRỢ 24/7</p>
                    <p>Hỗ trợ khách hàng 24/7</p>
                </div>
            </div>
        </div>
    </div>

    <!--============= END: SLIDER  ==============-->


    <main id="main">
        <div class="main-category">
            <div class="main__category-list">
                <?php

                foreach ($DanhMuc as $DanhMucc) {
                    extract($DanhMucc);
                    echo '
                            <div class="main__category-item main__category-line">
                                <img class="hvr-pulse" src="data:image/png;base64,' . $hinhanh . '" alt="">
                                <p><a href="index.php?act=lishsanpham&iddanhmuc='.$id_danhmuc.'">' . $tendanhmuc . '</a></p>
                            </div>
                        ';
                }

                ?>




            </div>
        </div>

        <!--=================== todo:  end category ================ -->

        <div class="main-product">
            <div class="main__product-title">
                <div class="main__product-title--left">
                    <img src="../public/img/flashsale_icon.png" alt="">
                    <p>GIỜ VÀNG DEAL SỐC</p>
                </div>
                <div class="main__product-title--right">
                    <p class="main__product-heading">Sự kiện kết thúc sau</p>
                    <div class="main__product-title-time">
                        <p class="main-timeout"><span id="countdown"></span></p>
                    </div>
                </div>
            </div>
            <!-- ở dưới sự kiên kết thúc -->
            <div class="main__product-main">
                <div class="main__product-list">

                    <?php
                    $tinhgiasale = 0;
                    foreach ($giovangdelsoc as $giovangdelsocc) {
                        extract($giovangdelsocc);
                        $tinhgiasale = $gia * (1 - $giasale / 100);
                        echo '<div class="main__product-item">';
                        echo '<img src="data:image/png;base64,' . $hinhanh . '" alt="">';
                        echo '<p class="main__product-item--name">Giày thể thao nam</p>';
                        echo '<div class="main__product-item-price">';
                        echo '<p>' . number_format($tinhgiasale) . ' <span>vnđ</span></p>';
                        echo '<p>' . number_format($gia) . ' <span>vnđ</span></p>';
                        echo '</div>';

                        // Hiển thị màu cho sản phẩm
                        echo '<div class="main__product-item-color">';
                        $mau = new DanhMuc;
                        $showmau = $mau->ShowMau($id_hanghoa);
                        foreach ($showmau as $mauu) {
                            echo '<p style="background-color: ' . $mauu['mausac'] . ';"></p>';
                        }
                        echo '</div>';

                        echo '<div class="main__product-item-quanity">';
                        echo '<p>Số lương còn lại:</p>';
                        echo '<p>x' . $soluong . '</p>';
                        echo '</div>';
                        echo '<div class="main__product-item--sale">';
                        echo '<p>' . $giasale . '%</p>';
                        echo '</div>';
                        echo '<div class="main__children-product--item">';
                        echo '<a href="">Thêm vào giỏ</a>';
                        echo '</div>';
                        echo '</div>';
                    }

                    ?>

                    <!-- Những item nhỏ trong giờ vàng deal sốc -->


                </div>
            </div>



        </div>

        <!--=================== todo:  end product ================ -->



        <div class="main-sale">
            <div class="main__sale-list">
                <div class="main__sale-item">
                    <div class="main__sale-item--day">
                        <p>Mã: EIYGFIWJGFKS</p>
                        <p>HSD: 20/11/2024</p>
                    </div>

                    <p class="main__sale-item--title">Giảm 15% cho đơn hàng từ 50k</p>
                    <p class="main__sale-item--title">Mã giảm giá tối đa 30k</p>

                    <div class="main__sale-item--condition">
                        <p>Điều kiện</p>
                        <p>Hết hạn </p>
                    </div>
                </div>
                <div class="main__sale-item">
                    <div class="main__sale-item--day">
                        <p>Mã: EIYGFIWJGFKS</p>
                        <p>HSD: 20/11/2024</p>
                    </div>

                    <p class="main__sale-item--title">Giảm 15% cho đơn hàng từ 50k</p>
                    <p class="main__sale-item--title">Mã giảm giá tối đa 30k</p>

                    <div class="main__sale-item--condition">
                        <p>Điều kiện</p>
                        <p>Hết hạn </p>
                    </div>
                </div>
                <div class="main__sale-item">
                    <div class="main__sale-item--day">
                        <p>Mã: EIYGFIWJGFKS</p>
                        <p>HSD: 20/11/2024</p>
                    </div>

                    <p class="main__sale-item--title">Giảm 15% cho đơn hàng từ 50k</p>
                    <p class="main__sale-item--title">Mã giảm giá tối đa 30k</p>

                    <div class="main__sale-item--condition">
                        <p>Điều kiện</p>
                        <p>Hết hạn </p>
                    </div>
                </div>
                <div class="main__sale-item">
                    <div class="main__sale-item--day">
                        <p>Mã: EIYGFIWJGFKS</p>
                        <p>HSD: 20/11/2024</p>
                    </div>

                    <p class="main__sale-item--title">Giảm 15% cho đơn hàng từ 50k</p>
                    <p class="main__sale-item--title">Mã giảm giá tối đa 30k</p>

                    <div class="main__sale-item--condition">
                        <p>Điều kiện</p>
                        <p>Hết hạn </p>
                    </div>
                </div>
            </div>
        </div>
        <!--=================== todo:  end sale ================ -->
        <div class="main-suggest">
            <div class="main__suggest-list">
                <div class="main__suggest-item">
                    <p>Gơi ý hôm nay</p>
                    <div class="main__suggest-item--title">
                        <p>Máy chơi game</p>
                    </div>
                </div>
                <div class="main__suggest-right">
                    <a href="#">Xem thêm <i class="bi bi-chevron-right"></i></a>
                </div>
            </div>

            <div class="main__suggest-product">
                <?php
                $tinhgiasale = 0;
                foreach ($HangHoaHomNay as $HangHoaHomNayy) {
                    extract($HangHoaHomNayy);
                    $tinhgiasale = $gia * (1 - $giasale / 100);

                    if ($HangHoaHomNayy['soluong'] > 0) {

                        $img = new HangHoa;
                        $showimg = $img->ShowImg($id_hanghoa);
                        foreach ($showimg as $showimgg) {
                            echo '<script>';
                            echo 'function changeImage(img) {';

                            echo 'img.src = "data:image/png;base64,' . $hinhanh . '";';

                            echo '}';
                            echo '</script>';
                        }


                        echo '<div class="main__product-item">';
                        echo '<img src="data:image/png;base64,' . $hinhanh . '" alt="" onmouseover="changeImage(this)" onmouseout="restoreImage(this)">';
                        echo '<p class="main__product-item--name">Giày thể thao nam</p>';
                        echo '<div class="main__product-item-price">';
                        echo '<p>' . number_format($tinhgiasale) . '</p>';
                        echo '<p>' . number_format($gia) . '</p>';
                        echo '</div>';
                        echo '<div class="main__product-item-color">';
                        $mau = new DanhMuc;
                        $showmau = $mau->ShowMau($id_hanghoa);
                        foreach ($showmau as $mauu) {
                            echo '<p style="background-color: ' . $mauu['mausac'] . ';"></p>';
                        }

                        echo '</div>';
                        echo '<div class="main__product-item-quanity">';
                        echo '<p>Số lượng còn lại:</p>';
                        echo '<p>x' . $soluong . '</p>';
                        echo '</div>';
                        echo '<div class="main__product-item--sale">';
                        echo '<p>' . $giasale . '%</p>';
                        echo '</div>';
                        echo '<div class="main__children-product--item">';
                        echo '<a href="">Thêm vào giỏ</a>';
                        echo '</div>';
                        echo '</div>';
                    } else {

                        echo '<div class="main__product-item main__suggest-opacity">';
                        echo '<img src="data:image/png;base64,' . $hinhanh . '" alt="" onmouseover="changeImage(this)" onmouseout="restoreImage(this)">';
                        echo '<p class="main__product-item--name">Giày thể thao nam</p>';
                        echo '<div class="main__product-item-price">';
                        echo '<p>' . number_format($tinhgiasale) . '</p>';
                        echo '<p>' . number_format($gia) . '</p>';
                        echo '</div>';
                        echo '<div class="main__product-item-color">';
                        $mau = new DanhMuc;
                        $showmau = $mau->ShowMau($id_hanghoa);
                        foreach ($showmau as $mauu) {
                            echo '<p style="background-color: ' . $mauu['mausac'] . ';"></p>';
                        }
                        echo '</div>';
                        echo '<div class="main__product-item-quanity">';
                        echo '<p>Số lượng còn lại:</p>';
                        echo '<p>x' . $soluong . '</p>';
                        echo '</div>';
                        echo '<div class="main__product-item--sale">';
                        echo '<p>' . $giasale . '%</p>';
                        echo '</div>';
                        echo '<div class="main__children-product--item">';
                        echo '<a href="">Thêm vào giỏ</a>';
                        echo '</div>';
                        echo '  <div class="main__product-sale--end">
                        <p>Hết hàng</p>
                    </div>';
                        echo '</div>';
                    }
                }
                ?>

                <!-- <div class="main__product-item main__suggest-opacity">
                    <img src="../public/img/balo.jpg" alt="">
                    <p class="main__product-item--name">Giày thể thao nam</p>
                    <div class="main__product-item-price">
                        <p>1.999.999đ</p>
                        <p>2.500.000đ</p>
                    </div>
                    <div class="main__product-item-color">
                        <p style="background-color: black;     box-shadow: 0 0 0 2px black, inset 0 0 0 2px rgb(230, 224, 224);
                        "></p>
                        <p style="background-color: rgb(41, 147, 240); box-shadow: 0 0 0 2px rgb(41, 147, 240), inset 0 0 0 2px rgb(230, 224, 224)">
                        </p>
                    </div>
                    <div class="main__product-item-quanity">
                        <p>
                            Số lương còn lại:
                        </p>
                        <p>
                            x2 Sản phẩm
                        </p>
                    </div>

                    <div class="main__product-item--sale">
                        <p>10%</p>
                    </div>

                    <div class="main__product-item--sale">
                        <p>10%</p>
                    </div>

                    <div class="main__children-product--item">
                        <a href="">Thêm vào giỏ</a>
                    </div>

                    <div class="main__product-sale--end">
                        <p>Hết hàng</p>
                    </div>





                </div> -->

            </div>

        </div>

        <!--=================== todo:  end suggest ================ -->

        <div class="main-suggest main-suggest-hot">
            <div class="main__suggest-list">
                <div class="main__suggest-item">
                    <p>Sản phẩm bán chạy</p>
                    <div class="main__suggest-item--title">
                        <p>Bàn phím</p>
                        <p><i class="bi bi-circle-fill"></i></p>
                        <p>Chuột + Lót chuột</p>
                    </div>
                </div>
                <div class="main__suggest-right">
                    <a href="">Xem thêm <i class="bi bi-chevron-right"></i></a>
                </div>
            </div>

            <div class="main__suggest-product">
                <?php
                $tinhgiasale = 0;
                foreach ($sanphambanchay as $sanphambanchayy) {
                    extract($sanphambanchayy);
                    $tinhgiasale = $gia * (1 - $giasale / 100);
                    echo '<div class="main__product-item">';
                    echo '<img src="data:image/png;base64,' . $hinhanh . '" alt="">';
                    echo '<p class="main__product-item--name">Giày thể thao nam</p>';
                    echo '<div class="main__product-item-price">';
                    echo '<p>' . number_format($tinhgiasale) . ' <span>vnđ</span></p>';
                    echo '<p>' . number_format($gia) . ' <span>vnđ</span></p>';
                    echo '</div>';

                    // Hiển thị màu cho sản phẩm
                    echo '<div class="main__product-item-color">';
                    $mau = new DanhMuc;
                    $showmau = $mau->ShowMau($id_hanghoa);
                    foreach ($showmau as $mauu) {
                        echo '<p style="background-color: ' . $mauu['mausac'] . ';"></p>';
                    }
                    echo '</div>';

                    echo '<div class="main__product-item-quanity">';
                    echo '<p>Số lương còn lại:</p>';
                    echo '<p>x' . $soluong . '</p>';
                    echo '</div>';
                    echo '<div class="main__product-item--sale">';
                    echo '<p>' . $giasale . '%</p>';
                    echo '</div>';
                    echo '<div class="main__children-product--item">';
                    echo '<a href="">Thêm vào giỏ</a>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>

            </div>

        </div>

        <!--=================== todo:  end suggest hot ================ -->


        <div class="main-banner">
            <div class="main__banner-list">
                <div class="main__banner-item">
                    <img src="../public/img/bannermain.jpg" alt="">
                    <div class="main__banner-item-title">
                        <div>
                            <p>Giảm giá sinh viên 50%</p>
                            <p>Laptop, điện thoại</p>
                        </div>
                        <a href=""> <i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
                <div class="main__banner-item">
                    <img src="../public/img/bannermain.jpg" alt="">
                    <div class="main__banner-item-title">
                        <div>
                            <p>Giảm giá sinh viên 50%</p>
                            <p>Laptop, điện thoại</p>
                        </div>
                        <a href=""> <i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
                <div class="main__banner-item">
                    <img src="../public/img/bannermain.jpg" alt="">
                    <div class="main__banner-item-title">
                        <div>
                            <p>Giảm giá sinh viên 50%</p>
                            <p>Laptop, điện thoại</p>
                        </div>
                        <a href=""> <i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>


        <!--=================== todo:  end main-banner  ====================-->





        <!--=================== todo:  end main product content  ====================-->











        



        <div class="main-news">
            <div class="main__news-title">
                <div class="main__news-title-left">
                    <p>Bản tin công nghệ</p>
                    <p>|</p>
                    <p>24 tin</p>
                </div>
                <div class="main__news-title-right">
                    <a href="">Xem thêm <i class="bi bi-chevron-right"></i></a>
                </div>
            </div>

            <div class="main__news-main">
                <div class="main__news-item">
                    <img src="../public/img/non.jpg" alt="">
                    <p class="main__news-item-heading"> Google trình làng Google Gemini 1.0: Mô hình ngôn ngữ thông minh
                        hàng đầu, tham vọng vượt mặt GPT-4 Nguyễn Công Minh </p>
                    <p class="main__news-item-title">
                        Đây là mô hình ngôn ngữ lớn tốt nhất mà Google đã tạo ra, và sẽ có ba cấp độ khác nhau với sức
                        mạnh...
                    </p>
                    <div class="main__news-item--day">
                        <p><i class="bi bi-calendar-day"></i> 18/02/2024</p>
                        <a href="">Xem chi tiết</a>
                    </div>
                </div>
                <div class="main__news-item">
                    <img class="main__news-image" src="public/img/non.jpg" alt="">
                    <p class="main__news-item-heading"> Google trình làng Google Gemini 1.0: Mô hình ngôn ngữ thông minh
                        hàng đầu, tham vọng vượt mặt GPT-4 Nguyễn Công Minh </p>
                    <p class="main__news-item-title">
                        Đây là mô hình ngôn ngữ lớn tốt nhất mà Google đã tạo ra, và sẽ có ba cấp độ khác nhau với sức
                        mạnh...
                    </p>
                    <div class="main__news-item--day">
                        <p><i class="bi bi-calendar-day"></i> 18/02/2024</p>
                        <a href="">Xem chi tiết</a>
                    </div>
                </div>
                <div class="main__news-item">
                    <img src="public/img/non.jpg" alt="">
                    <p class="main__news-item-heading"> Google trình làng Google Gemini 1.0: Mô hình ngôn ngữ thông minh
                        hàng đầu, tham vọng vượt mặt GPT-4 Nguyễn Công Minh </p>
                    <p class="main__news-item-title">
                        Đây là mô hình ngôn ngữ lớn tốt nhất mà Google đã tạo ra, và sẽ có ba cấp độ khác nhau với sức
                        mạnh...
                    </p>
                    <div class="main__news-item--day">
                        <p><i class="bi bi-calendar-day"></i> 18/02/2024</p>
                        <a href="">Xem chi tiết</a>
                    </div>
                </div>
                <div class="main__news-item">
                    <img src="public/img/non.jpg" alt="">
                    <p class="main__news-item-heading"> Google trình làng Google Gemini 1.0: Mô hình ngôn ngữ thông minh
                        hàng đầu, tham vọng vượt mặt GPT-4 Nguyễn Công Minh </p>
                    <p class="main__news-item-title">
                        Đây là mô hình ngôn ngữ lớn tốt nhất mà Google đã tạo ra, và sẽ có ba cấp độ khác nhau với sức
                        mạnh...
                    </p>
                    <div class="main__news-item--day">
                        <p><i class="bi bi-calendar-day"></i> 18/02/2024</p>
                        <a href="">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        </div>



    </main>

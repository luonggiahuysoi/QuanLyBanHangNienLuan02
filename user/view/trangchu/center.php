<link rel="stylesheet" href="../public/lib/Hover-master/css/hover-min.css">



<div class="slider  ">
    <div>
        <img src="../imageproduct/banner1.jpg" alt="" class="slide-img">
        <img src="../public/img/sd2.jpg" alt="" class="slide-img">
        <img src="../imageproduct/banner2.jpg" alt="" class="slide-img">
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
            <i class="bi bi-coin"></i>
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
            <i class="bi bi-question-diamond"></i>
            <div class="slider__end-item">
                <p>HỖ TRỢ 24/7</p>
                <p>Hỗ trợ khách hàng 24/7</p>
            </div>
        </div>
    </div>
</div>

<!--============= END: SLIDER  ==============-->


<main id="main">
    <div class="main-category  scroll-effect">
        <div class="main__category-list">
            <?php

            foreach ($DanhMuc as $DanhMucc) {
                extract($DanhMucc);
                echo '
                            <div class="main__category-item main__category-line">
                                <img class="hvr-pulse" src="data:image/png;base64,' . $hinhanh . '" alt="" loading="__autoload">
                                <p><a style="color:black;" href="index.php?act=lishsanpham&iddanhmuc=' . $id_danhmuc . '">' . $tendanhmuc . '</a></p>
                            </div>
                        ';
            }

            ?>




        </div>
    </div>

    <!--=================== todo:  end category ================ -->

    <div class="main-product  ">
        <div class="main__product-title">
            <div class="main__product-title--left">
                <img src="../public/img/flashsale_icon.png" alt="" loading="__autoload">
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
                    if ($giovangdelsocc['soluong'] > 0) {
                        echo '<div class="main__product-item">';
                        echo '<img src="data:image/png;base64,' . $anhhanghoa . '" alt="" loading="__autoload">';
                        echo '<p class="main__product-item--name">' . $tenhanghoa . '</p>';
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
                        if (isset($_SESSION['nguoidung'])) {
                            if ($_SESSION['nguoidung']) {

                                echo '
                                    <form action="index.php?act=addcart" method="post">
                                        <input type="hidden" name="idhanghoa" value="' . $id_hanghoa . '">
                                        <input type="hidden" name="anh" value="' . $anhhanghoa . '">
                                        <input type="hidden" name="tenhanghoa" value="' . $tenhanghoa . '">
                                        <input type="hidden" name="soluong" value="1">
                                        <input type="hidden" name="gia" value="' . $tinhgiasale . '">
        
                                        <input class="add_cart " type="submit" value="Thêm vào giỏ" name="add_cart">
                                    </form>';
                            }
                        } else {
                            echo '<a onclick="showLoginAlert();">Thêm vào giỏ</a>';
                        }
                        echo '</div>';
                        echo '</div>';
                    } else {
                        echo '<div class="main__product-item">';
                        echo '<img src="data:image/png;base64,' . $anhhanghoa . '" alt="" loading="__autoload">';
                        echo '<p class="main__product-item--name">' . $tenhanghoa . '</p>';
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
                        if (isset($_SESSION['nguoidung'])) {
                            if ($_SESSION['nguoidung']) {

                                echo '
                                    <form action="index.php?act=addcart" method="post">
                                        <input type="hidden" name="idhanghoa" value="' . $id_hanghoa . '">
                                        <input type="hidden" name="anh" value="' . $anhhanghoa . '">
                                        <input type="hidden" name="tenhanghoa" value="' . $tenhanghoa . '">
                                        <input type="hidden" name="soluong" value="1">
                                        <input type="hidden" name="gia" value="' . $tinhgiasale . '">
        
                                        
                                    </form>';
                            }
                        } else {
                            echo '<a onclick="showLoginAlert();">Thêm vào giỏ</a>';
                        }
                        echo '</div>';
                        echo '  <div class="main__product-sale--end">
                                <p>Hết hàng</p>
                            </div>';
                        echo '</div>';
                    }
                }

                ?>
                <!-- Những item nhỏ trong giờ vàng deal sốc -->


            </div>
        </div>



    </div>


    <!--=================== todo:  end product ================ -->



    <div class="main-sale scroll-effect">
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
    <div class="main-suggest scroll-effect">
        <div class="main__suggest-list">
            <div class="main__suggest-item">
                <p>Gơi ý hôm nay</p>
                <div class="main__suggest-item--title">
                    <!-- <p>Máy chơi game</p> -->
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
                    echo '<img src="data:image/png;base64,' . $anhhanghoa . '" alt="" onmouseover="changeImage(this)" onmouseout="restoreImage(this)" loading="__autoload">';
                    echo '<p class="main__product-item--name">' . $tenhanghoa . '</p>';
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
                    if (isset($_SESSION['nguoidung'])) {
                        if ($_SESSION['nguoidung']) {

                            echo '
                                <form action="index.php?act=addcart" method="post">
                                    <input type="hidden" name="idhanghoa" value="' . $id_hanghoa . '">
                                    <input type="hidden" name="anh" value="' . $anhhanghoa . '">
                                    <input type="hidden" name="tenhanghoa" value="' . $tenhanghoa . '">
                                    <input type="hidden" name="soluong" value="1">
                                    <input type="hidden" name="gia" value="' . $tinhgiasale . '">
    
                                    <input class="add_cart" type="submit" value="Thêm vào giỏ" name="add_cart">
                                </form>';
                        }
                    } else {
                        echo '<a onclick="showLoginAlert();">Thêm vào giỏ</a>';
                    }
                    echo '</div>';
                    echo '</div>';
                } else {

                    echo '<div class="main__product-item main__suggest-opacity">';
                    echo '<img src="data:image/png;base64,' . $hinhanh . '" alt="" onmouseover="changeImage(this)" onmouseout="restoreImage(this)" loading="__autoload">';
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

    <div class="main-suggest main-suggest-hot  scroll-effect" data-aos="-up">
        <div class="main__suggest-list">
            <div class="main__suggest-item">
                <p>Sản phẩm bán chạy</p>
                <div class="main__suggest-item--title">
                    <!-- <p>Bàn phím</p> -->
                    <!-- <p><i class="bi bi-circle-fill"></i></p> -->
                    <!-- <p>Chuột + Lót chuột</p> -->
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
                echo '<img src="data:image/png;base64,' . $anhhanghoa . '" alt="" loading="__autoload">';
                echo '<p class="main__product-item--name">' . $tenhanghoa . '</p>';
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
                if (isset($_SESSION['nguoidung'])) {
                    if ($_SESSION['nguoidung']) {

                        echo '
                                <form action="index.php?act=addcart" method="post">
                                    <input type="hidden" name="idhanghoa" value="' . $id_hanghoa . '">
                                    <input type="hidden" name="anh" value="' . $anhhanghoa . '">
                                    <input type="hidden" name="tenhanghoa" value="' . $tenhanghoa . '">
                                    <input type="hidden" name="soluong" value="1">
                                    <input type="hidden" name="gia" value="' . $tinhgiasale . '">

                                    <input class="add_cart" type="submit" value="Thêm vào giỏ" name="add_cart">
                                </form>';
                    }
                } else {
                    echo '<a onclick="showLoginAlert();">Thêm vào giỏ</a>';
                }
                echo '</div>';
                echo '</div>';
            }
            ?>

        </div>

    </div>

    <!--=================== todo:  end suggest hot ================ -->


    <div class="main-banner scroll-effect">
        <div class="main__banner-list">
            <div class="main__banner-item">
                <img src="../public/img/banner-gb.png" alt="" loading="__autoload">
                <div class="main__banner-item-title">
                    <div>
                        <p>Giảm giá sinh viên 40%</p>
                        <p>Balo, túi đeo</p>
                    </div>
                    <a href=""> <i class="bi bi-chevron-right"></i></a>
                </div>
            </div>
            <div class="main__banner-item">
                <img src="../public/img/banner2.png" alt="" loading="__autoload">

                <div class="main__banner-item-title">
                    <div>
                        <p>Giảm giá sinh viên 50%</p>
                        <p>Mỹ phẩm</p>
                    </div>
                    <a href=""> <i class="bi bi-chevron-right"></i></a>
                </div>
            </div>
            <div class="main__banner-item">
                <img src="../public/img/banner3.png" alt="" loading="__autoload">
                <div class="main__banner-item-title">
                    <div>
                        <p>Siêu sale 12/12</p>
                        <p>Giảm giá tất cả sản phẩm cửa hàng 30%</p>
                    </div>
                    <a href=""> <i class="bi bi-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>


    <!--=================== todo:  end main-banner  ====================-->





    <!--=================== todo:  end main product content  ====================-->



    <div class="main-news ">
        <div class="main__news-title">
            <div class="main__news-title-left">
                <p>Bản tin công nghệ</p>
                <p>|</p>
                <p>4 tin</p>
            </div>
            <div class="main__news-title-right">
                <a href="">Xem thêm <i class="bi bi-chevron-right"></i></a>
            </div>
        </div>

        <div class="main__news-main">
            <div class="main__news-item">
                <img src="../public/img/taytrangg.jpg" alt="" loading="__autoload">
                <p class="main__news-item-heading"> HỌC HỎI 5 BÍ QUYẾT DƯỠNG DA TRẮNG SÁNG CỦA “ NỮ HOÀNG NƯỚC MẮT ” KIM
                    JI WON </p>
                <p class="main__news-item-title">
                    Những sản phẩm được xướng tên trong đêm tiệc là kết quả của quá trình bình chọn kỹ lưỡng, kết hợp từ
                    sự tin tưởng,
                    ....
                </p>
                <div class="main__news-item--day">
                    <p><i class="bi bi-calendar-day"></i> 28/05/2024</p>
                    <a href="../tintuc.html">Xem chi tiết</a>
                </div>
            </div>
            <div class="main__news-item">
                <img class="main__news-image" src="../public/img/nha-thiet-ke-vi-dai-nam-2022-1.jpg" alt=""
                    loading="__autoload">
                <p class="main__news-item-heading"> OHUI EXTREME WHITE CREAM: SỨC MẠNH DƯỠNG TRẮNG ĐỘT PHÁ TỪ CÔNG NGHỆ
                    SNOW VITAMINTM </p>
                <p class="main__news-item-title">
                    Sở hữu làn da trắng mịn, khỏe khoắn là mong ước của rất nhiều cô gái. Tuy nhiên, các vấn đề về sạm
                    nám, rối loạn sắc tố da tăng cao khiến hành ...
                </p>
                <div class="main__news-item--day">
                    <p><i class="bi bi-calendar-day"></i> 18/02/2024</p>
                    <a href="../tintuc.html">Xem chi tiết</a>
                </div>
            </div>
            <div class="main__news-item">
                <img src="../public/img/original_1703046605.jpg" alt="" loading="__autoload">
                <p class="main__news-item-heading">CÔNG THỨC DƯỠNG SÁNG INNISFREE THẮNG GIẢI EDITOR’S CHOICE TẠI ELLE
                    BEAUTY AWARDS 2024 </p>
                <p class="main__news-item-title">
                    Trong khuôn khổ sự kiện, hạng mục Editor’s Choice luôn nhận nhiều sự quan tâm. Đây là hạng mục do
                    các biên tập viên nhiều kinh nghiệm của...
                </p>
                <div class="main__news-item--day">
                    <p><i class="bi bi-calendar-day"></i> 18/02/2024</p>
                    <a href="../tintuc.html">Xem chi tiết</a>
                </div>
            </div>
            <div class="main__news-item">
                <img src="../public/img/serum-nghe-do.jpg" alt="" loading="__autoload">
                <p class="main__news-item-heading"> ELLE BEAUTY AWARDS 2024: SẢN PHẨM LÀM ĐẸP NÀO ĐƯỢC CÁC BEAUTY
                    BLOGGERS YÊU THÍCH</p>
                <p class="main__news-item-title">
                    Tất cả là để nhấn mạnh cho tinh thần sẵn sàng khai phá tiềm năng vô tận của thiên nhiên, đồng thời
                    hướng tới vẻ đẹp...
                </p>
                <div class="main__news-item--day">
                    <p><i class="bi bi-calendar-day"></i> 18/02/2024</p>
                    <a href="../tintuc.html">Xem chi tiết</a>
                </div>
            </div>
        </div>
    </div>



</main>

<script src="../public/js/script.js"></script>

<!-- Bao gồm thư viện SweetAlert2 -->
<script src="path/to/sweetalert2.min.js"></script>
<link rel="stylesheet" href="path/to/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Đoạn mã JavaScript -->
<script>
    // Hàm JavaScript để hiển thị thông báo
    function showLoginAlert() {
        Swal.fire({
            title: "Bạn chưa có tài khoản?",
            text: "Vui lòng đăng ký để mua",
            icon: "question"
        });
    }
</script>

<style>
    .scroll-effect {
        opacity: 0;
        transition: opacity 0.5s ease, transform 0.5s ease;
        /* Thêm transform vào transition */
        transform: scale(0.8);
        /* Mặc định phần tử được thu nhỏ */
        transform-origin: center center;
        /* Đặt điểm gốc của transform ở giữa phần tử */
    }

    /* Định nghĩa lớp kích hoạt */
    .scroll-effect-active {
        opacity: 1;
        transform: scale(1);
        /* Khi kích hoạt, phần tử được phóng to lại kích thước ban đầu */
    }

    .main-timeout {
        font-size: 1.6rem;
        font-weight: 500;
        color: black;
        background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%);
        padding: 10px 15px;
        border-radius: 10px;
    }

    .main__product-item--name {
        font-family: 'Times New Roman', Times, serif;
        font-size: 2rem;
        text-transform: uppercase;
    }

    .main__banner-item-title {
        display: flex;
        justify-content: space-around;
        align-items: center;
        color: #fff;
        margin-top: 18%;
    }

    .main__news-item {
        width: 24%;
        height: 600px;
        background-color: white;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
        border-radius: 10px;
    }

    .main__news-item img {
        width: 90%;
        height: 350px;
        margin-left: 4%;
        margin-top: 2%;
    }

    .main__product-item-quanity p {
        color: red;
    }
</style>



<script>
    // Hàm để kiểm tra xem một phần tử có trong tầm nhìn của trình duyệt hay không
    function isInViewport(element) {
        var rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Hàm để kiểm tra khi nào phần tử ra khỏi tầm nhìn và thiết lập lại hiệu ứng
    function resetScrollEffect() {
        var elements = document.querySelectorAll('.scroll-effect');
        elements.forEach(function (element) {
            if (!isInViewport(element)) {
                element.classList.remove("scroll-effect-active");
            }
        });
    }

    // Hàm để áp dụng hiệu ứng khi một phần tử trong tầm nhìn
    function applyScrollEffect() {
        var elements = document.querySelectorAll('.scroll-effect');
        elements.forEach(function (element) {
            if (isInViewport(element)) {
                element.classList.add("scroll-effect-active");
            }
        });
    }

    // Gọi hàm applyScrollEffect khi trang được tải và cuộn
    document.addEventListener('DOMContentLoaded', applyScrollEffect);
    document.addEventListener('scroll', function () {
        resetScrollEffect();
        applyScrollEffect();
    });
</script>
<div class="product">
    <div class="main-suggest main__suggest">
        <div class="main__suggest-list">
            <div class="main__suggest-item">
                <p>Sản phẩm mới</p>
                <div class="main__suggest-item--title"> </div>
            </div>
            <div class="main__suggest-right main__product-btn">
                <input type="button" value="Giá tăng dần">
                <input type="button" value="Giá giảm">
                <input type="button" value="Mới nhất">
            </div>
        </div>

        <div class="product__full">
            <div class="main__suggest-product">

            <?php
                    $tinhgiasale = 0;
                    foreach ($lishHangHoa as $lishHangHoaa) {
                        extract($lishHangHoaa);
                        $tinhgiasale = $gia * (1 - $giasale / 100);
                        if($lishHangHoaa['soluong']>0) {
                            echo '<div class="main__product-item">';
                                echo '<a href = "">';
                                    echo '<img src="data:image/png;base64,' . $hinhanh . '" alt="">';
                                    echo '<p class="main__product-item--name">'.$tenhanghoa.'</p>';
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
                                echo '</a>';
                            echo '</div>';
                        } else {

                            echo '<div class="main__product-item main__suggest-opacity">';
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
                            echo '<div class="main__product-sale--end">
                                        <p>Hết hàng</p>
                                    </div>';
                            echo '</div>';
                            
                        }
                    }

                    ?>


            </div>
        </div>

    </div>






    <!-- danh muc sản phẩm  -->
    <div class="main-category main-product">
        <div class="main__category-list">
            <div class="main__category-item main__category-line">
                <img class="hvr-pulse" src="public/img/aonam.jpg" alt="">
                <p>Áo nam</p>
            </div>
            <div class="main__category-item main__category-line">
                <img src="public/img/quansorrt.jpg" alt="">
                <p>Quần sort</p>
            </div>
            <div class="main__category-item main__category-line">
                <img src="public/img/aonam.jpg" alt="">
                <p>Áo nam</p>
            </div>
            <div class="main__category-item  main__category-line">
                <img src="./public/img/aonam.jpg" alt="">
                <p>Áo nam</p>
            </div>
            <div class="main__category-item">
                <img src="./public/img/aonam.jpg" alt="">
                <p>Áo nam</p>
            </div>
        </div>
        <div class="main__category-list">
            <div class="main__category-item main__category-line">
                <img src="./public/img/aonam.jpg" alt="">
                <p>Áo nam</p>
            </div>
            <div class="main__category-item main__category-line">
                <img src="./public/img/quansorrt.jpg" alt="">
                <p>Quần sort</p>
            </div>
            <div class="main__category-item main__category-line">
                <img src="./public/img/aonam.jpg" alt="">
                <p>Áo nam</p>
            </div>
            <div class="main__category-item  main__category-line">
                <img src="./public/img/aonam.jpg" alt="">
                <p>Áo nam</p>
            </div>
            <div class="main__category-item">
                <img src="./public/img/aonam.jpg" alt="">
                <p>Áo nam</p>
            </div>
        </div>
    </div>


</div>
<!--================- END: MAIN  ===================-->


<!-- js  -->
<script src="./public/js/script.js"></script>
</body>

</html>

<style>
    .main-product {
        margin-top: 10%;
    }

    .main__product-btn {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 40px;
    }

    .main__product-btn input {
        border-radius: 10px;
        padding: 6px 12px;
        background-color: #ffffff;
        border: 1px solid #444;
        font-weight: 500;
        font-family: Arial, Helvetica, sans-serif;
        cursor: pointer;
    }

    .main__product-btn input:hover {
        color: #186F65;
        font-weight: 550;
    }

    .product__full {
        width: 100%;
        height: 100%;
        background-color: #4444;
        margin-top: 2%;
        padding: 40px 0;

        background: linear-gradient(to right, #99f2c8, #1f4037);


    }

    .main__suggest {}


    footer {
        margin-top: -30%;
    }
</style>
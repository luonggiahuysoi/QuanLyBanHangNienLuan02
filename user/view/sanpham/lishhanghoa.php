<div class="product">
    <div class="main-suggest main__suggest">
        <div class="main__suggest-list">
            <div class="main__suggest-item">
                <p>Sản phẩm mới</p>
                <div class="main__suggest-item--title"> </div>
            </div>
            <div class="main__suggest-right main__product-btn">
                <form action="index.php?act=lishsanpham" method="post">
                    <input type="hidden" name="iddanhmuc" value="<?= $iddanhmuc ?>">
                    <input type="hidden" name="tanggiam" value="1">
                    <input type="submit" value="Tăng dần">

                </form>
                <form action="index.php?act=lishsanpham" method="post">
                    <input type="hidden" name="iddanhmuc" value="<?= $iddanhmuc ?>">
                    <input type="hidden" name="tanggiam" value="0">
                    <input type="submit" value="Giảm dần">

                </form>
            </div>
        </div>

        <div class="product__full">
            <div class="main__suggest-product">
                <?php
                $tinhgiasale = 0;
                foreach ($lishHangHoa as $lishHangHoaa) {
                    extract($lishHangHoaa);
                    $tinhgiasale = $gia * (1 - $giasale / 100);
                    if ($lishHangHoaa['soluong'] > 0) {
                        echo '<div class="main__product-item">';
                        echo '<a href = "index.php?act=chitietsanpham&idhanghoa=' . $id_hanghoa . '" class="product-link" >';

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
    
                                    <input type="submit" value="Thêm vào giỏ" class="add_cart" name="add_cart">  
                                </form>';
                            }
                        } else {
                            echo '<a style="" onclick="showLoginAlert();">Thêm vào giỏ</a>';
                        }
                        echo '</div>';
                        echo '</a>';
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
                        echo '  <div class="main__product-sale--end">
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
    <div class="xuongdong">
    </div>

    <style>
        .xuongdong {
            position: relative;
            width: 100%;
            height: 300px;
        }
    </style>


</div>
<!--================- END: MAIN  ===================-->


<!-- js  -->
<!-- <script src="./public/js/script.js"></script> -->
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
        margin-top: -20%;
    }


    .main__product-item {}

    .product-link {
        position: relative;
        width: 100%;
        height: 100%;

        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .product-link {}

    .main__product-item--name {
        color: black;
    }

    .main__product-item--sale p {
        color: black;
    }

    .main__children-product--item a {
        position: absolute;
        width: 60%;
        height: 40px;
        font-weight: 550;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
    }

    .main__children-product--item a:hover {
        color: black;
    }
</style>

<link rel="stylesheet" href="path/to/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
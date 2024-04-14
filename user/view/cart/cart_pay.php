<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- css  -->
    <link rel="stylesheet" href="../public/css/style.css" />
    <link rel="stylesheet" href="../public/css/base.css">
    <link rel="stylesheet" href="../public/css/cart.css">

    <!-- bootstrap icon  -->
    <link rel="stylesheet" href="../public/lib/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="../public/lib/fontawesome-free-6.5.1-web/fontawesome-free-6.5.1-web/css/all.min.css">

    <!-- hover-master  -->
    <link rel="stylesheet" href="../public/lib/Hover-master/css/hover-min.css">
    <title>Cart-Pay</title>
</head>

<body>



    <main class="main-cart">
        <h2 class="cart-heading">Giỏ hàng của bạn</h2>
        <div class="main__cart-icon">
            <i style="color: #3333;" class="bi bi-cart-fill"></i>
            <p class="cart-line"></p>
            <i style="color: #15410d;" class="bi bi-geo-alt-fill"></i>
            <p class="cart-line"></p>
            <i style="color: #3333;" class="bi bi-credit-card-2-front"></i>
        </div>
        <div class="cart__pay-list">
            <div class="cart__pay-list--left">
                <h3>Vui lòng chọn địa chỉ giao hàng *</h3>
                <div class="cart__pay-account">

                </div>
                <div class="cartpay-form">
                    <br>
                    <div class="cartpay-name">
                        <h3>Tên người dùng:</h3>
                        <h3 style="color: red;"><?= $_SESSION['nguoidung'][0]['tenkhachhang'] ?></h3>
                    </div>
                    <br>
                    <div class="cartpay-address">
                        <h3>Số điện thoại:</h3>
                        <h3 style="color: red;"><?= $_SESSION['nguoidung'][0]['sodienthoai'] ?></h3>
                    </div>
                    <br>
                    <div class="cartpay-address">
                        <h3>Địa chỉ:</h3>
                        <h3 style="color: red;"><?= $_SESSION['nguoidung'][0]['diachi'] ?></h3>
                    </div>



                    <div class="cartpay-btn">
                    <?php
                    if (isset($_SESSION['giohang']) && $_SESSION['giohang'] > 0) {
                        $tongsp = 0;
                        $tongsl = 0;
                        $tongtien = 0;
                        foreach ($_SESSION['giohang'] as $item) {
                            extract($item);
                            $tongsp = $item[3] * $item[4];
                            $tongsl = $tongsl + $item[3];
                            $tongtien += $tongsp;
                            echo '
                                    <form action="index.php?act=order" method="post">
                                        <input type="hidden" name="tongdonhang" value="'.$tongtien.'">
                                        <input type="submit" value="THANH TOÁN VÀ GIAO HÀNG" name="thanhtoan">
                                    </form>
                                ';
                        }
                    }

                    ?>
                    </div>
                </div>
            </div>

            <div class="cart__pay-list--right">
                <div class="cart__pay-table--th">
                    <div class="cart__pay-table--name">
                        <p>Tên sản phẩm</p>
                    </div>
                    <div class="cart__pay-table--quanity">
                        <p>Số lượng</p>
                    </div>
                    <div class="cart__pay-table--total">
                        <p>Thành tiền</p>
                    </div>
                </div>

                <div class="cart__pay-table--tr">
                    <?php
                    if (isset($_SESSION['giohang']) && $_SESSION['giohang'] > 0) {
                        $i = 0;
                        $tongsp = 0;
                        $tongsl = 0;
                        $tongtien = 0;
                        foreach ($_SESSION['giohang'] as $item) {
                            extract($item);
                            $tongsp = $item[3] * $item[4];
                            $tongsl = $tongsl + $item[3];
                            $tongtien += $tongsp;
                            echo '
                                    <div class="cart__pay-table--name">
                                        <p>' . $item[2] . '</p>
                                    </div>
                                    <div class="cart__pay-table--quanity">
                                        <p>' . $item[3] . '</p>
                                    </div>
                                    <div class="cart__pay-table--total">
                                        <p>' . number_format($tongtien) . '<sup>vnđ</sup></p>
                                    </div>
                                ';
                            $i++;
                        }
                    }
                    echo '
                        </div>
        
        
                        <!-- ----------note: Tổng tiền -------- -->
                        <div class="cart__pay-table--th cart__pay-line">
                            <div class="cart__pay-table--name">
                                <p>Tổng tiền hàng</p>
                            </div>
                            <div class="cart__pay-table--quanity">
                                <p></p>
                            </div>
                            <div class="cart__pay-table--total">
                                <p>' . number_format($tongtien) . ' <sup>vnđ</sup></p>
                            </div>
                        </div>
                        ';
                    ?>



                </div>
            </div>
    </main>
    <!--================- END: MAIN  ===================-->

    <!-- js  -->

</body>

</html>
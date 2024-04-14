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
    <title>Cart</title>
</head>

<body>

    <!--=============== END: HEADER  =============-->

    <main class="main-cart">
        <h2 class="cart-heading">Giỏ hàng của bạn</h2>
        <div class="main__cart-icon">
            <i style="color: #15410d;" class="bi bi-cart-fill"></i>
            <p class="cart-line"></p>
            <i style="color: #3333;" class="bi bi-geo-alt-fill"></i>
            <p class="cart-line"></p>
            <i style="color: #3333;" class="bi bi-credit-card-2-front"></i>
        </div>
        <div class="cart-list">
            <div class="cart__list-left">
                <div class="cart__table-th">
                    <div class="cart__table-image">
                        <p>Ảnh sản phẩm</p>
                    </div>
                    <div class="cart__table-name">
                        <p>Tên sản phẩm</p>
                    </div>
                    <div class="cart__table-quanity">
                        <p>Số lượng</p>
                    </div>
                    <div class="cart__table-price">
                        <p>Đơn giá</p>
                    </div>
                    <div class="cart__table-price">
                        <p>Thành tiền</p>
                    </div>
                    <div class="cart__table-delete">
                        <p>Xóa</p>
                    </div>
                </div>

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
                                <div class="cart__table-tr">
                                    <div class="cart__table-image">
                                        <img src="data:image/png;base64,' . $item[1] . '" alt="">
                                    </div>
                                    <div class="cart__table-name">
                                        <p>' . $item[2] . '</p>
                                    </div>
                                    <div class="cart__table-quanity">
                                        <p>' . $item[3] . '</p>
                                    </div>
                                    <div class="cart__table-price">
                                        <p>' . number_format($item[4]) . ' <sup>đ</sup></p>
                                    </div>
                                    <div class="cart__table-price">
                                        <p>' . number_format($tongsp) . '<sup>đ</sup></p>
                                    </div>
                                    <div class="cart__table-price">
                                        <p><a href = "index.php?act=deletecart&id=' . $i . '"><i class="bi bi-trash3"></i></a></p>
                                    </div>
                                </div>
                            ';
                        $i++;
                    }
                    echo '
                            </div>
                                <div class="cart__list-right">
                                    <h2>Tổng tiền giỏ hàng</h2>
                                    <div class="cart__list-right--total">
                                        <div class="cart__list-right--total---quanyti">
                                            <p>Tổng số sản phẩm</p>
                                            <p>' . $tongsl . '</p>
                                        </div>
                                        <div class="cart__list-right--total---price">
                                            <p>Tổng tiền</p>
                                            <p>' . number_format($tongtien) . '<sup>vnđ</sup></p>
                                        </div>
                                    </div>

                                    <div class="cart__list-right--btn">
                                        <a href="javascript:void(0)" onclick="goBack()">TIẾP TỤC MUA SẮM</a>
                                        ';

                    if (isset($_SESSION['nguoidung'])) {

                        echo ' <a href="index.php?act=cart_user">Thanh toán</a>';
                    } else {

                        echo ' <a href="javascript:void(1)" onclick="showLoginAlert();">Thanh toán</a>';
                    }





                    echo '
                                        </div>
                                        </div>
                                        </div>
                                        </main>
                                        ';
                }

                ?>



                <!-- <form action="index.php?act=order" method="post">
    <input type="hidden" name="tongdonhang" value="'.$tongtien.'">
    <input type="submit" value="Thanh toán" name="thanhtoan">
</form> -->
</body>

</html>


<script>
    function goBack() {
        window.history.back();
    }

    function showLoginAlert() {
        Swal.fire({
            title: "Bạn chưa có tài khoản?",
            text: "Vui lòng đăng ký để mua",
            icon: "question"
        });
    }
</script>

<link rel="stylesheet" href="path/to/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
  
    <!--=============== END: HEADER  =============-->





    <main class="main-cart main-payment">
        <!-- <h2 class="cart-heading">Giỏ hàng của bạn</h2> -->
        <div class="main__cart-icon">
            <i style="color: #3333;" class="bi bi-cart-fill"></i>
            <p class="cart-line"></p>
            <i style="color: #3333;" class="bi bi-geo-alt-fill"></i>
            <p class="cart-line"></p>
            <i style="color: #040504;" class="bi bi-credit-card-2-front"></i>
        </div>


        <div class="payment-methods">
            <p style="color: red;">Đặt hàng thành công</p>

            <form action="index.php?act=trangchu" method="get">

                <input type="submit" class="payment-btn" value="Hoàn thành thanh toán">
            </form>

        </div>

    </main>
    <!--================- END: MAIN  ===================-->


  

    <!-- js  -->
    <script src="./public/js/script.js"></script>
</body>

</html>
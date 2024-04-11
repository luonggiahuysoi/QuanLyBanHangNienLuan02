<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- css  -->
    <link rel="stylesheet" href="../public/css/style.css" />
    <link rel="stylesheet" href="../public/css/base.css">
    <link rel="stylesheet" href="../public/css/chitietsp.css">
    <!-- <link rel="stylesheet" href="public/css/cart.css"> -->

    <!-- bootstrap icon  -->
    <link rel="stylesheet" href="public/lib/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="../public/lib/fontawesome-free-6.5.1-web/fontawesome-free-6.5.1-web/css/all.min.css">

    <!-- hover-master  -->
    <link rel="stylesheet" href="public/lib/Hover-master/css/hover-min.css">
    <title>Document</title>
</head>

<body>

    <!--=============== END: HEADER  =============-->




    <div class="main">

        <div class="detail">
            <div class="detail-heading">
                <p>Trang chủ</p>
                <p><i class="bi bi-arrow-right"></i></p>
                <p>Sản phẩm</p>
            </div>

            <div class="main-detail">
                <div class="main__detail-left">
                    <div class="main__detail-left--img">
                        <img src="public/img/aonu.jpg" alt="">
                    </div>
                    <div class="main__detail-left--imgs">
                        <img src="public/img/balo.jpg" alt="">
                        <img src="public/img/aonam.jpg" alt="">
                        <img src="public/img/aothethao1.jpg" alt="">
                        <img src="public/img/taytrang.jpg" alt="">
                    </div>
                </div>

                <div class="main__detail-right">
                    <p>Áo nữ thời trang</p>

                    <p class="detail-price">1.000.000 <sup>đ</sup></p>

                    <div class="detail-color">
                        <p>Màu sắc: </p>
                        <select class="classic" style="width: 300px;">
                            <option selected disabled>Chọn màu cho sản phẩm</option>
                            <option>Xanh dương</option>
                            <option>Đỏ dô</option>
                            <option>Đen</option>

                        </select>
                    </div>
                    <div class="detail-size">
                        <p>Kích thước: </p>
                        <select class="classic" style="width: 300px;">
                            <option selected disabled>Chọn size cho sản phẩm</option>
                            <option>Size S</option>
                            <option>Size M</option>
                            <option>Size L</option>
                            <option>Size XL</option>
                        </select>
                    </div>

                    <div class="datail-quanity">
                        <input class="cart-add" type="button" value="-" onclick="decreaseQuantity(this)">
                        <p class="quantity">1</p>
                        <input class="cart-add" type="button" value="+" onclick="increaseQuantity(this)">
                    </div>


                    <div class="detail-buy">
                        <input type="button" value="Thêm vào giỏ hàng">
                        <input type="button" value="Mua sản phẩm">
                    </div>



                    <div class="detail-describe">
                        <h2>Chi tiết sản phẩm</h2>
                        <div class="materiat">
                            <p>Chất liệu:</p>
                            <p>Vải da</p>
                        </div>
                        <div class="materiat">
                            <p>Kiểu dáng:</p>
                            <p>áo khoác thiết kế dáng suông, cổ bẻ, đính khuy kim loại</p>
                        </div>
                        <div class="materiat">
                            <p>Thông tin mẫu:</p>
                            <p>cao 1m60, số đo 84 - 60 - 90 mặc sản phẩm size S</p>
                        </div>
                        <div class="materiat">
                            <p>Nhà sản xuất:</p>
                            <p>Việt Nam</p>
                        </div>
                    </div>






                </div>
            </div>
        </div>




        <div class="detail-reviews">
            <p class="review-heading">Đánh giá sản phẩm</p>

            <div class="review-container">
                <div class="reviews-mainn">
                    <div class="review__main-left">
                        <img src="public/img/giay.jpg" alt="">
                    </div>
                    <div class="review__main-right">
                        <p class="review-name">Hoàng Văn An</p>
                        <div class="review-star">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                        </div>
                        <div class="reviews-day">
                            <p>02/12/2024</p>
                            <p>|</p>
                            <p>Phân loại: Quần áo</p>
                        </div>
                        <p class="review-content">
                            Chất lượng sản phẩm khỏi phải bàn, gõ êm, đằm tay, không quá ồn, rất thích sản phẩm!
                        </p>
                    </div>
                </div>

                <div class="reviews-mainn">
                    <div class="review__main-left">
                        <img src="public/img/giay.jpg" alt="">
                    </div>
                    <div class="review__main-right">
                        <p class="review-name">Hoàng Văn An</p>
                        <div class="review-star">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                        </div>
                        <div class="reviews-day">
                            <p>02/12/2024</p>
                            <p>|</p>
                            <p>Phân loại: Quần áo</p>
                        </div>
                        <p class="review-content">
                            Chất lượng sản phẩm khỏi phải bàn, gõ êm, đằm tay, không quá ồn, rất thích sản phẩm!
                        </p>
                    </div>
                </div>

                <div class="reviews-mainn">
                    <div class="review__main-left">
                        <img src="public/img/balo.jpg" alt="">
                    </div>
                    <div class="review__main-right">
                        <p class="review-name">Hoàng Văn An</p>
                        <div class="review-star">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                        </div>
                        <div class="reviews-day">
                            <p>02/12/2024</p>
                            <p>|</p>
                            <p>Phân loại: Quần áo</p>
                        </div>
                        <p class="review-content">
                            Chất lượng sản phẩm khỏi phải bàn, gõ êm, đằm tay, không quá ồn, rất thích sản phẩm!
                        </p>
                    </div>
                </div>

                <div class="reviews-mainn">
                    <div class="review__main-left">
                        <img src="public/img/quandai.jpg" alt="">
                    </div>
                    <div class="review__main-right">
                        <p class="review-name">Hoàng Văn An</p>
                        <div class="review-star">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                        </div>
                        <div class="reviews-day">
                            <p>02/12/2024</p>
                            <p>|</p>
                            <p>Phân loại: Quần áo</p>
                        </div>
                        <p class="review-content">
                            Chất lượng sản phẩm khỏi phải bàn, gõ êm, đằm tay, không quá ồn, rất thích sản phẩm!
                        </p>
                    </div>
                </div>



            </div>
        </div>
















        <div class=" main-suggest main-suggest-hot">
            <div class="main__suggest-list">
                <div class="main__suggest-item">
                    <p>Sản phẩm dành cho bạn</p>
                    <div class="main__suggest-item--title">
                        <p>Ghế công thái học</p>
                        <p><i class="bi bi-circle-fill"></i></p>
                        <p>Bàn nâng hạ</p>
                    </div>
                </div>
                <div class="main__suggest-right">
                    <a href="">Xem thêm <i class="bi bi-chevron-right"></i></a>
                </div>
            </div>

            <div class="main__suggest-product">
                <div class="main__product-item">
                    <img src="./public/img/non1.jpg" alt="" onmouseover="changeImage(this)" onmouseout="restoreImage(this)">
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
                </div>


                <div class="main__product-item">
                    <img src="./public/img/quandai.jpg" alt="">
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
                </div>

                <div class="main__product-item main__suggest-opacity">
                    <img src="./public/img/giayda.jpg" alt="">
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


                </div>

                <div class="main__product-item">
                    <img src="./public/img/aotheteho.jpg" alt="">
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
                </div>
            </div>

        </div>
        <!-- </main> -->
    </div>
    <!--================- END: MAIN  ===================-->




    <!-- js  -->
    <script src="./public/js/script.js"></script>
</body>

</html>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

    body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Roboto", sans-serif;
    }

    html {
        font-size: 62.5%;
    }

    a {
        text-decoration: none;
    }

    :root {
        --bg-color: #186F65;
    }


    header {
        font-size: 1.5rem;
    }

    /*-------------------- search -------------- */
    .input-container {
        width: 400px;
        display: flex;
        background: white;
        border-radius: 1rem;
        background: linear-gradient(135deg, #23272F 0%, #14161a 100%);
        box-shadow: 10px 10px 20px #0e1013, -10px -10px 40px #383e4b;
        padding: 0.3rem;
        gap: 0.3rem;
    }

    .input-container input {
        border-radius: 0.8rem 0 0 0.8rem;
        background: #23272F;
        box-shadow: inset 5px 5px 10px #0e1013, inset -5px -5px 10px #383e4b, 0px 0px 100px rgba(255, 212, 59, 0), 0px 0px 100px rgba(255, 102, 0, 0);
        width: 100%;
        flex-basis: 75%;
        padding: 1rem;
        border: none;
        border: 1px solid transparent;
        color: white;
        transition: all 0.2s ease-in-out;
    }

    .input-container input:focus {
        border: 1px solid #FFD43B;
        outline: none;
        box-shadow: inset 0px 0px 10px rgba(255, 102, 0, 0.5), inset 0px 0px 10px rgba(255, 212, 59, 0.5), 0px 0px 100px rgba(255, 212, 59, 0.5), 0px 0px 100px rgba(255, 102, 0, 0.5);
    }

    .input-container button {
        flex-basis: 22%;
        padding: 1rem;
        background: linear-gradient(135deg, rgb(255, 212, 59) 0%, rgb(255, 102, 0) 100%);
        box-shadow: 0px 0px 1px rgba(255, 212, 59, 0.5), 0px 0px 1px rgba(255, 102, 0, 0.5);
        font-weight: 900;
        letter-spacing: 0.3rem;
        text-transform: uppercase;
        color: #23272F;
        border: none;
        width: 100%;
        border-radius: 0 1rem 1rem 0;
        transition: all 0.2s ease-in-out;
    }

    .input-container button:hover {
        background: linear-gradient(135deg, rgb(255, 212, 59) 50%, rgb(255, 102, 0) 100%);
        box-shadow: 0px 0px 100px rgba(255, 212, 59, 0.5), 0px 0px 100px rgba(255, 102, 0, 0.5);
    }

    @media (max-width: 500px) {
        .input-container {
            flex-direction: column;
        }

        .input-container input {
            border-radius: 0.8rem;
        }

        .input-container button {
            padding: 1rem;
            border-radius: 0.8rem;
        }
    }

    /*---------------------- end search ------------- */
    #header {
        /* height: 100px; */
    }

    .header__top {
        display: flex;
        justify-content: space-around;
        align-items: center;
        background-color: var(--bg-color);
    }

    .header-logo {
        width: 150px;
        height: 100px;
    }

    .header-logo img {
        width: 100%;
        height: 100%;
    }

    .header-search {
        width: 300px;
    }

    .input-container {}

    .button {}

    .header-accout {
        display: flex;
        font-size: 1.6rem;
        gap: 12px;
        color: #f0f0f0;
        margin-left: 10%;
    }

    .header-accout a {
        color: #f0f0f0;
        font-size: 1.7rem;
    }

    .header-accout a:hover,
    .header-cart a:hover {
        color: rgb(245, 195, 17);
    }

    .header-cart,
    .header-cart a {
        color: #f0f0f0;
        font-size: 1.7rem;
    }

    .header__bottom {
        height: 65px;
        display: flex;
        justify-content: space-around;
        align-items: center;
        background-color: #272829;
        font-family: "Poppins", sans-serif;
    }

    .header__bottom-content {
        display: flex;
        gap: 35px;
        font-size: 1.8rem;
        position: relative;
    }

    .header__bottom-list {
        z-index: 10;
    }

    .header__bottom-list a {
        color: #e7e7e7;
    }

    .header__bottom-list a:hover {
        color: rgb(245, 195, 17);

    }

    .header__bottom-hottile a {
        display: flex;
        font-size: 1.8rem;
        color: #e7e7e7;
        gap: 10px;
    }

    .header__bottom-hottile a:hover {
        color: rgb(245, 195, 17);
    }

    .header__bottom-children {
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 6px;
        background-color: rgb(255, 255, 255);
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        position: absolute;
        margin-top: 2.5%;
        transform-origin: top;
        /* display: none; */
        transform: scaleY(0);
        transition: transform 0.35s ease;
        z-index: 2;
    }

    .header__bottom-children::before {
        content: "";
        position: absolute;
        display: block;
        width: 100%;
        height: 30px;
        /* background-color: red; */
        top: -12%;
        left: 0;
    }

    .header__children-list {
        margin: 0 10px;
        padding: 15px 20px;
    }

    .header__children-list h2 {
        width: 100%;
        text-align: center;
        color: #ececec;
        background-color: var(--bg-color);
        border-radius: 10px;
    }

    .header__children-item {
        display: flex;
        flex-direction: column;
        line-height: 35px;
        margin-top: 5px;
    }

    .header__children-item a {
        color: black;
    }

    .header__bottom-list:hover .header__bottom-children {
        top: 100%;
        transform: scaleY(100%);
    }


    /*------------------- END: HEADER  -----------------------*/


    /*------------------- START:  SLIDER  -----------------------*/

    .slider {
        width: 100%;
        /* overflow: hidden; */
        position: relative;
    }

    .slide-img {
        display: none;
        width: 100%;
        height: 550px;
        object-fit: cover;
    }

    .active {
        display: block;
    }

    .slider-end {
        width: 80%;
        height: 80px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        left: 10%;
        bottom: -8%;
        border-radius: 10px;
        background-color: #ffffff;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        z-index: 1;
    }

    .slider__end-list {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 20%;
        font-size: 1.4rem;
        margin: 0 8px;
    }


    .slider__end-list i {
        margin-right: 4%;
        font-size: 2rem;
    }

    .slider__end-item p:nth-child(1) {
        font-weight: 550;
        font-size: 1.3rem;
    }

    .slider__end-item p:nth-child(2) {
        font-size: 1.1rem;
        color: #707070;
    }



    /*------------------- END:  SLIDER  -----------------------*/



    /* ==========================START: MAIN ======================= */
    #main {
        margin-top: 10%;
        width: 100%;
    }

    .main-category {
        width: 100%;
        height: auto;
        justify-content: center;
        align-items: center;
    }

    .main__category-list {
        width: 65%;
        height: 120px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        align-items: center;
        position: relative;
        margin-top: 1px;
        left: 50%;
        transform: translateX(-50%);
        background-color: rgb(255, 255, 255);
        border-radius: 10px;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;

    }

    .main__category-item {
        width: 20%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .main__category-line {
        border-right: 1px solid rgb(184, 184, 184);
    }

    .main__category-item img {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        /* filter: drop-shadow(red); */
    }

    .main__category-item p {
        font-size: 1.4rem;
        font-weight: 500;
        padding-top: 10px;
        color: #555555;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* note:  end main category  */



    .main-product {
        /* background-image: url(../image/bannermain.jpg);
    background-position: center;
    background-size: cover; */
        width: 100%;
        height: 900px;
        margin-top: 5%;
        /* opacity: 0.6; */
    }

    .main-product {
        height: 750px;
    }

    .main__product-title {
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .main__product-title--left {
        display: flex;
    }

    .main__product-title--left img {
        margin-right: 10px;
    }

    .main__product-title--left p {
        font-size: 4rem;
        font-weight: 700;
        color: red;
    }

    .main__product-title--right {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
    }

    .main__product-heading {
        font-size: 1.6rem;
        font-weight: 600;
    }

    .main-timeout {
        font-size: 1.6rem;
        font-weight: 500;
        color: #ececec;
        background-color: #0e1013;
        padding: 10px 15px;
        border-radius: 10px;
    }


    .main__product-main {
        width: 100%;
        /* height: 100vh; */
        background-color: rgba(167, 167, 172, 0.452);
    }

    .main__product-list {
        position: relative;
        background-color: #186F65;
        height: 60%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1%;

    }


    /* phần dưới giờ sale sốc  */

    .main__product-item {
        position: relative;
        width: 19%;
        height: 95%;
        /* background-color: white; */
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        font-size: 1.8rem;
        background-color: white;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .main__product-item--name {
        position: relative;
        width: 93%;
        height: 30%;
        margin-top: 2%;
        font-weight: 500;
        left: 1%;
    }

    .main__product-item-price {
        position: relative;
        width: 93%;
        height: 25%;
        display: flex;
        justify-content: left;
        align-items: center;

    }

    .main__product-item-price p:nth-child(1) {
        position: relative;
        margin-left: 1%;
        color: red;
        font-weight: 600;

    }

    .main__product-item-price p:nth-child(2) {
        position: relative;
        margin-left: 15%;
        color: #999;
        font-size: 1.6rem;
        text-decoration: line-through;
    }

    .main__product-item-color {
        position: relative;
        width: 95%;
        height: 30%;
        display: flex;
        justify-content: left;
        align-items: center;
    }

    .main__product-item-color p {
        position: relative;
        width: 30px;
        height: 30px;
        border-radius: 100%;
        margin-left: 5%;
    }

    .main__product-item-quanity {
        position: relative;
        width: 95%;
        height: 30%;
        display: flex;
        margin-bottom: 10%;
        margin-top: 3%;
        font-weight: 500;

    }

    .main__product-item-quanity p:nth-child(1) {
        position: relative;
        color: #333;


    }

    .main__product-item-quanity p:nth-child(2) {
        position: relative;
        color: #555;
        font-weight: 400;
        margin-left: 3%;


    }

    .main__product-item--sale {
        position: absolute;
        background-color: orangered;
        width: 20%;
        height: 7%;
        display: flex;
        justify-content: center;
        align-items: center;
        left: 0;
        top: 4%;
        border-radius: 0 0 10px 0;
        box-shadow: rgba(250, 87, 0, 0.4) 5px 5px;

    }

    .main__children-product--item {
        position: absolute;
        width: 100%;
        height: 70px;
        background-color: #ffffff;
        display: flex;
        justify-content: center;
        align-items: center;
        bottom: -10%;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        transform-origin: top;
        transform: scaleY(0);
        transition: transform 0.35s ease;
        z-index: 20;
    }

    .main__children-product--item a:nth-child(1) {
        color: #ececec;
        padding: 10px 30px;
        background-color: rgb(216, 54, 54);
        border-radius: 10px;
        font-weight: 500;
    }

    .main__product-item:hover .main__children-product--item {
        top: 100%;
        transform: scaleY(100%);

    }


    .main__children-product--item a:hover {
        color: black;
        background-color: var(--bg-color);
    }

    .main__product-item img {
        /* transition: transform 0.1s ease; */
        position: relative;
        width: 80%;
        height: 60%;
        margin-top: 10%;
    }

    .main__product-item img:hover {
        transform: scale(1.1);
        width: 80%;
        height: 60%;
    }

    /* todo:  end main product  */




    .main-sale {
        width: 100%;
    }

    .main__sale-list {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .main__sale-item {
        width: 20%;
        background-color: rgb(250, 250, 250);
        display: flex;
        justify-content: center;
        /* align-items: center; */
        flex-direction: column;
        text-align: left;
        margin: 0 20px;
        font-size: 1.3rem;
        padding: 15px 20px;
        border-radius: 5px;
        line-height: 24px;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
    }

    .main__sale-item--day {
        display: flex;
        gap: 30px;
    }

    .main__sale-item--day p:nth-child(1) {
        color: blue;
        font-weight: 500;
    }

    .main__sale-item--day p:nth-child(2) {
        color: #818181;
    }



    .main__sale-item--condition {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 30px;
        margin-top: 2%;
    }

    .main__sale-item--condition p:nth-child(1) {
        font-size: 1.5rem;
        font-weight: 500;
        padding: 6px 25px;
        color: red;
        border: 1px solid red;
        border-radius: 20px;
        cursor: pointer;
    }

    .main__sale-item--condition p:nth-child(2) {
        font-size: 1.5rem;
        padding: 6px 25px;
        background-color: #d4d4d4;
        color: rgb(128, 128, 128);
        border-radius: 20px;
        border: 1px solid #d4d4d4;
        cursor: pointer;

    }

    .main__sale-item--condition p:nth-child(1):hover {
        background-color: red;
        color: #ebebeb;
    }

    .main__sale-item--title {
        font-size: 1.3rem;
        color: rgb(68, 68, 68);
    }


    /* todo:  end main sale  */
    .main-suggest {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin-top: 5%;
        font-family: Arial, Helvetica, sans-serif;
    }

    .main__suggest-list {
        width: 80%;
        height: 75px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 1.5rem;
        padding: 0 20px;
        background-color: #fff;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
    }

    .main__suggest-item {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 30px;
    }

    .main__suggest-item p:nth-child(1) {
        color: blue;
        font-size: 3.2rem;
        font-weight: 500;
    }

    .main__suggest-item--title {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 15px;
    }

    .main__suggest-item--title p:nth-child(1) {
        color: rgb(102, 102, 102);
        font-size: 1.8rem;
    }

    .main__suggest-item--title p:nth-child(2) {
        color: rgb(170, 170, 170);
        font-size: 1.2rem;
    }

    .main__suggest-item--title p:nth-child(3) {
        color: rgb(170, 170, 170);
        font-size: 1.2rem;
    }

    .main__suggest-right a {
        font-weight: 500;
        color: black;
    }

    .main__suggest-right a:hover {
        color: var(--bg-color);
    }

    .main__suggest-product {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 23px;
        margin-top: 20px;
    }

    /* -------------het hang ------- */

    .main__product-sale--end {
        position: absolute;
        width: 100%;
        height: 100px;
        background-color: #a5a5a5e0;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 20px 30%;
        font-size: 3rem;
        font-weight: 550;
        color: #0f5626;
    }

    .main__suggest-opacity {
        opacity: 0.6;
    }

    .main-suggest-hot {
        margin-top: 10%;
    }


    /* todo: end main suggest  */



    .main-banner {
        margin-top: 15%;
    }


    .main__banner-list {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        position: relative;
        left: 50%;
        transform: translateX(-50%);
    }

    .main__banner-item {
        width: 40%;
        height: 200px;
        text-align: center;
        background-color: rgb(108, 167, 59);
        margin: 0 30px;
        border-radius: 10px 30px;
    }

    .main__banner-item img {
        width: 400px;
        height: 100%;
        position: absolute;
        top: -65%;
        margin-left: 25px;
        border-radius: 10px;
    }

    .main__banner-item-title {
        display: flex;
        justify-content: space-around;
        align-items: center;
        color: #fff;
        margin-top: 25%;
    }

    .main__banner-item-title p {
        font-size: 1.4rem;
        text-align: left;
    }

    .main__banner-item-title p:nth-child(1) {
        font-size: 2rem;
        font-weight: 500;
    }

    .main__banner-item-title a {
        width: 50px;
        height: 50px;
        color: #fff;
        font-size: 2rem;
        padding: 10px;
        background-color: rgba(194, 194, 194, 0.479);
        border-radius: 50%;
    }

    .main__banner-item-title a:hover {
        scale: 1.1;
    }

    .main__banner-list .main__banner-item:nth-child(2) {
        background-color: #ff9300;
    }

    .main__banner-list .main__banner-item:nth-child(3) {
        background-color: #0877ff;
    }

    /* todo: end main banner  */



    .main-product--content {
        width: 100%;
        margin-top: 5%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .main__product-content--list {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        width: 30%;
    }

    .main__product-content--item {
        position: relative;
        width: 90%;
        margin: 5px 10px;
        background-color: #fff;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }

    .main__product-content--item img {
        width: 200px;
    }

    .main__product-content--item>p {
        font-size: 1.3rem;
        font-weight: 500;
    }

    .main__product-item--name {
        display: flex;
        justify-content: space-between;
    }

    .main__product-content--price {}

    .main__product-content--price>p {
        color: red;
        font-size: 1.4rem;
    }

    .main__product-content--price p:nth-child(2) {
        color: rgb(101, 101, 101);
        font-size: 1.2rem;
    }

    .main__product-content--sale {}

    .main__product-content--sale p {
        font-size: 1.3rem;
        padding: 6px 10px;
        background-color: red;
        border-radius: 10px;
        color: #fff;
    }

    .main__product-content-color {}

    .main__product-content--full {
        width: 40%;
    }

    .main__product-content-top {
        display: flex;
    }

    .main__product-content--children {
        position: absolute;
        width: 100%;
        height: 60px;
        background-color: #ffffff;
        display: flex;
        justify-content: center;
        align-items: center;
        bottom: -22%;
        transform-origin: top;
        transform: scaleY(0);
        transition: transform 0.35s ease;
        z-index: 2;
    }

    .main__product-content--children a {
        font-size: 1.5rem;
        font-weight: 500;
        padding: 10px 20px;
        color: white;
        background-color: #E72929;
        border-radius: 20px;
    }

    .main__product-content--children a:hover {
        color: black;
        background-color: var(--bg-color);
    }

    .main__product-content--item:hover .main__product-content--children {
        top: 100%;
        transform: scaleY(100%);
    }

    .main__product-content--full {
        height: 700px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
    }

    .main__product-content--full---main {
        font-size: 1.5rem;
        text-align: center;
        width: 100%;
        height: 100%;
        background-color: rgb(255, 255, 255);
    }

    .main__product-content--full---main>p {
        font-size: 2.4rem;
        font-weight: 550;
        margin-top: 40px;
    }

    .full-img {
        text-align: center;
        width: 90%;
        height: 400px;
        margin-left: 5%;
    }

    .main__product-full--price {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .main__product-full>p {
        color: red;
        font-weight: 550;
        font-size: 2rem;
    }

    .main__product-full>p:nth-child(2) {
        color: rgb(134, 134, 134);
        font-weight: 500;
        font-size: 1.5rem;
    }

    .main__product-full {
        padding: 0 20px;
    }

    .main__product-full--sale {
        margin: 0 30px;
    }

    .main__product-full--sale p {
        font-size: 1.5rem;
        font-weight: 500;
        padding: 10px 15px;
        color: white;
        background-color: rgb(240, 16, 16);
        border-radius: 20px;
    }

    .main__product-full--addcart {
        margin-top: 80px;
    }

    .main__product-full--addcart a {
        padding: 10px 20px;
        background-color: red;
        color: white;
        font-weight: 550;
        border-radius: 20px;
    }


    .main__product-full--addcart a:hover {
        color: black;
        background-color: var(--bg-color);
    }




    /* todo: end main product content  */



    .main-news {
        margin-top: 10%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        font-family: Arial, Helvetica, sans-serif;
    }

    .main__news-title {
        width: 80%;
        height: 60px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 30px;
        background-color: white;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }

    .main__news-title-left {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 40px;
    }

    .main__news-title-left p:nth-child(1) {
        color: blue;
        font-size: 3rem;
        font-weight: 500;
    }

    .main__news-title-left p:nth-child(2) {
        font-size: 1.5rem;
        color: #4444;
    }

    .main__news-title-left p:nth-child(3) {
        font-size: 1.5rem;
    }

    .main__news-title-right {}

    .main__news-title-right a {
        color: black;
        font-size: 1.5rem;
    }

    .main__news-title-right a:hover {
        color: var(--bg-color);
    }

    .main__news-main {
        width: 90%;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 25px;
        margin-top: 3%;
        /* background-color: red; */
    }

    .main__news-item {
        width: 24%;
        height: 480px;
        background-color: white;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
        border-radius: 10px;
    }

    .main__news-item img {
        width: 90%;
        height: 250px;
        margin-left: 4%;
        margin-top: 2%;
    }

    .main__news-item-heading {
        font-size: 1.3rem;
        font-weight: 550;
        padding: 0 5px;
        margin-top: 15%;
    }

    .main__news-item-title {
        font-size: 1.2rem;
        font-weight: 500;
        padding: 0 5px;
        color: #707070;
        margin-top: 2%;
    }

    .main__news-item--day {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 5%;
        padding: 0 10px;
    }

    .main__news-item--day p {
        color: #818181;
        font-size: 1.2rem;
    }

    .main__news-item--day a {
        font-size: 1.3rem;
        font-weight: 550;
        color: red;
        padding: 10px 15px;
        border-radius: 20px;
        border: 1px solid red;
    }

    .main__news-item--day a:hover {
        color: white;
        background-color: red;
    }


    /* todo: end main news  */



    /* ==========================END: MAIN ======================= */


    /*=========== START: FOOTER ========= */
    footer {
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }

    .footer-main {
        font-family: Arial, Helvetica, sans-serif;
        width: 100%;
        margin-top: 10%;
        display: flex;
    }

    .footer__main-infor {
        width: 25%;
        margin-top: 2%;
        font-size: 1.5rem;
        font-weight: 400;
        line-height: 30px;
        padding: 0 0 0 20px;
    }

    .footer__main-infor img {
        width: 100px;
        height: 100px;
    }

    .footer-address {
        font-size: 1.5rem;
        font-weight: 400;
    }

    .footer-address i,
    .footer-email i,
    .footer-hotline i {
        margin-right: 10px;
    }

    .footer-network {
        display: flex;
    }

    .footer-network img {
        width: 50px;
        height: 50px;
    }

    .footer__main-help {
        width: 25%;
        margin-top: 2%;

    }

    .footer__main-help h3,
    .footer__main-policy h3 {
        font-size: 1.8rem;
        font-weight: 550;
    }

    .footer__main-help--list {
        line-height: 30px;
    }

    .footer__main-help--list li {
        font-size: 1.5rem;
        list-style: circle;
    }

    .footer__main-help--list li:hover {
        color: var(--bg-color);
        scale: 1.1;
        cursor: pointer;
    }

    .footer__main-policy {
        width: 25%;
        margin-top: 2%;

    }


    .footer__main-sale {
        width: 25%;
        margin-top: 2%;
        padding-right: 20px;
    }

    .footer__main-sale h2 {
        font-size: 1.8rem;
        font-weight: 550;
    }

    .footer__main-sale p {
        font-size: 1.5rem;
        font-weight: 500;
    }

    .footer__main-sale--email input {
        width: 200px;
        height: 40px;
        outline: none;
        border: 2px solid var(--bg-color);
        border-radius: 10px;
        padding: 5px 10px;
        font-size: 1.1rem;
        margin: 2% 0 0 4%;
    }

    .footer__main-sale--email {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .footer__main-sale--email p {
        font-size: 1.2rem;
        font-weight: 550;
        color: #fff;
        background-color: red;
        padding: 10px 10px;
        border-radius: 10px;
        margin-left: 1%;
    }

    .footer__main-sale--email p:hover {
        opacity: 0.6;
    }

    .footer-end {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 50px;
        font-size: 1.3rem;
        border-top: 1px solid #4444;
        margin-top: 15px;
    }



    /* ==========đánh giá sản phẩm =========== */

    .detail-reviews {
        background-color: #e6e3e3;
        padding: 20px 0 0 0;
        margin-bottom: 5%;
        margin-top: 3%;
    }

    .review-heading {
        font-size: 3.5rem;
        font-weight: 500;
        font-family: Arial, Helvetica, sans-serif;
        padding: 20px 0 20px 50px;
    }

    .review-container {
        margin-top: 3%;
    }

    .reviews-mainn {
        display: flex;
        gap: 30px;
        padding: 20px 0 20px 100px;
        border-bottom: 1px solid #4444;
    }

    .review__main-left {}

    .review__main-left img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-top: 2%;
    }

    .review__main-right {
        line-height: 25px;
        font-size: 1.5rem;
    }

    .review-name {
        font-weight: 550;
        font-size: 1.6rem;
        font-family: Arial, Helvetica, sans-serif;
    }

    .review-star,
    .reviews-day,
    .review-content {
        color: #444;
    }

    .reviews-day {
        display: flex;
        gap: 10px;
    }
</style>
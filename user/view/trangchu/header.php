<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- css  -->
    <link rel="stylesheet" href="../public/css/style.css" />
    <link rel="stylesheet" href="../public/css/base.css">

    <!-- bootstrap icon  -->
    <link rel="stylesheet" href="../public/lib/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="../public/lib/fontawesome-free-6.5.1-web/fontawesome-free-6.5.1-web/css/all.min.css">





    <!-- hover-master  -->
    <link rel="stylesheet" href="../public/lib/Hover-master/css/hover-min.css">
    <link rel="shortcut icon" href="../public/img/onepiece.jfif" type="image/x-icon">
    <title>IloveShop</title>
</head>

<body>
    <header id="header">
        <div class="header__top">
            <div class="header-logo">
                <img src="../public/img/logo.png" alt="">
            </div>
            <div class="header-search">
                <div class="input-container">
                    <form action="index.php?act=timkiem" method="post">
                        <input type="text" placeholder="Tìm kiếm sản phẩm" name="tentimkiem">
                        <input type="submit" value="Search" class="button" name="timkiemm">
                    </form>
                </div>
            </div>
            <style>
                .img_header {
                    position: absolute;
                    width: 20%;
                    height: 60px;
                    transform: translate(-40%, -50%);
                    display: flex;
                    justify-content: flex-start;
                    align-items: center;
                }

                .img_header img {
                    position: relative;
                    width: 65px;
                    height: 65px;
                    border: 2px solid white;
                    border-radius: 100%;
                }


                .img_header p {
                    position: relative;
                    margin-left: 10px;
                }

                .header__bottom-children {
                    width: 200%;
                }
            </style>
            <div class="header-accout">

                <!-- img header đăng nhập  -->
                <?php
                if (isset($_SESSION['nguoidung'])) {
                    echo '<div class="img_header">';
                    if (isset($_SESSION['nguoidung'][0]['hinhanh'])) {
                        echo '<img src="data:image/png;base64,' . $_SESSION['nguoidung'][0]['hinhanh'] . '" alt="">';

                    } else {

                        if ($_SESSION['nguoidung'][0]['gioitinh'] == 1) {
                            echo '<img src="../public/img/userboy.jpg" alt="">';
                        } else {
                            echo '<img src="../public/img/usergirl.jpg" alt="">';

                        }

                    }
                    echo ' <p>' . $_SESSION['nguoidung'][0]['tenkhachhang'] . '</p>';
                    echo '    </div>';
                } else {
                    echo '
                            <i class="bi bi-person-circle"></i>
                            <a href="index.php?act=dangnhap">Đăng nhập</a>
                            <p>/</p>
                            <a href="index.php?act=dangky">Đăng ký</a>
                        ';
                }
                ?>
            </div>
            <div class="header-cart">
                <?php
                if (isset($_SESSION['nguoidung'])) {
                    echo '
                            <a href="index.php?act=dangxuat" style="margin-left: 30px;" class = "dangxuat">Đăng xuất</a>
                        ';
                }

                ?>
                <i class="bi bi-bag-plus" style="margin-left: 20px;"></i>
                <a href="index.php?act=giohang">Giỏ hàng</a>
            </div>
        </div>

        <div class="header__bottom">
            <div class="header__bottom-content">
                <div class="header__bottom-list">
                    <a href="index.php?act=trangchu">Trang chủ</a>
                </div>
                <div class="header__bottom-list">
                    <a href="../giothieu.html">Giới thiệu</a>
                </div>
                <div class="header__bottom-list">
                    <a href="">Sản phẩm <i class="bi bi-chevron-down"></i>

                        <!-- ================================== Danh mục ============================================== -->
                        <div class="header__bottom-children">
                            <?php
                            foreach ($headerDanhMuc as $headerDanhMucc) {
                                extract($headerDanhMucc);
                                ?>

                                <?php
                                echo '
                                <div class="header__children-list">
                                    <h2>' . $tendanhmuc . '</h2>
                                    <div class="header__children-item">
                                    ';
                                ?>

                                <?php
                                foreach ($headerSanPham as $headerSanPhamm) {
                                    extract($headerSanPhamm);
                                    if ($headerDanhMucc['id_danhmuc'] == $headerSanPhamm['id_danhmuc']) {
                                        echo '
                                                <a href="">' . $tenhanghoa . '</a>
                                            
                                        ';
                                    }
                                }

                                ?>

                                <?php
                                echo '
                                </div>
                                </div>
                                ';

                                ?>

                                <?php
                            }
                            ?>

                        </div>
                    </a>
                </div>
                <div class="header__bottom-list">
                    <a href="../tintuc.html">Tin tức</a>
                </div>
                <div class="header__bottom-list">
                    <a href="../lienhe.html">Liên hệ</a>
                </div>
            </div>


            <div class="header__bottom-hottile">
                <a href="">
                    <i class="bi bi-headset"></i>
                    <p>Holine: 09988323</p>
                </a>
            </div>
        </div>
    </header>
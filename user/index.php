<?php
session_start();
ob_start();
include "../app/model/er.php";
include "../app/config/database.php";
include "../app/model/connectdb.php";
include "../app/model/PDO_MVC.php";

$heade = new DungChung;
$headerDanhMuc = $heade->ShowDungChung('danhmuc');
$header = new DungChung;
$headerSanPham = $header->ShowDungChung('hanghoa');
include "./view/trangchu/header.php";

if (!isset($_SESSION['giohang'])) {
    $_SESSION['giohang'] = [];
}

if (isset($_GET['act'])) {
    switch ($_GET['act']) {

        case 'chitietsanpham':
            $idhanghoa = $_GET['idhanghoa'];
            $hanghoa = new DungChung;
            $hanghoaa = $hanghoa->getByIdAll('hanghoa', 'id_hanghoa', $idhanghoa);

            $sanphamban = new HangHoa;
            $sanphambanchay = $sanphamban->SanPhamBanChay();

            $luotxem = $hanghoaa[0]['luotxem'];
            $luotxem++;
            $addluotxem = new ChucNang;
            $addluotxem->updateluotxem($luotxem, $idhanghoa);

            require "./view/sanpham/chitietsanpham.php";
            break;

        case 'lishsanpham':
            $lish = new DungChung;
            if (isset($_POST['tanggiam'])) {
                $tanggiam = $_POST['tanggiam'];
                $iddanhmuc = $_POST['iddanhmuc'];
                if ($tanggiam == 1) {
                    $lishHangHoa = $lish->getByIdAllOrderByPriceAsc('hanghoa', 'id_danhmuc', $iddanhmuc);
                } else

                    if ($tanggiam == 0) {

                        $lishHangHoa = $lish->getByIdAllOrderByPriceDesc('hanghoa', 'id_danhmuc', $iddanhmuc);
                    }
            } else {
                $iddanhmuc = $_GET['iddanhmuc'];
                $lishHangHoa = $lish->getByIdAll('hanghoa', 'id_danhmuc', $iddanhmuc);
            }

            require "./view/sanpham/lishhanghoa.php";
            break;
        case 'dangky':
            require_once "./view/dangnhap/sigup.php";
            break;
        case 'dangkyy':
            if (isset($_POST['nhandangky']) && $_POST['nhandangky']) {
                $tenkhachhang = $_POST['tenkhachhang'];
                $gioitinh = $_POST['gioitinh'];
                $sodienthoai = $_POST['sodienthoai'];
                $diachi = $_POST['diachi'];
                $email = $_POST['email'];
                $tendangnhap = $_POST['tendangnhap'];
                $matkhau = $_POST['matkhau'];



                $dangky = new KhachHang;
                $dangky->AddKhachHang($tenkhachhang, $gioitinh, $sodienthoai, $diachi, $email, $tendangnhap, $matkhau);
                header("location: index.php?act=trangchu");
            }
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && $_POST['dangnhap']) {
                $username = $_POST['user'];
                $password = $_POST['pass'];
                $kiemtra = new DungChung;
                $kiemtraUser = $kiemtra->login($username, $password);
                if ($kiemtraUser[0]['ability'] == 1) {
                    $_SESSION['nguoidung'] = $kiemtraUser;

                } else {

                    header("location: index.php?act=trangchu");
                }

                header("location: index.php?act=trangchu");
                // require_once "./view/trangchu/center.php";
            } else {
                require_once "./view/dangnhap/login.php";
            }
            break;

        case 'dangxuat':
            unset($_SESSION['nguoidung']);
            // Xuất ra mã JavaScript trong mã HTML của trang để reload trang
            header("location: index.php?act=trangchu");
            // require_once "./view/trangchu/center.php";
            break;

        case 'trangchu':
            $danhmuc = new DungChung;
            $DanhMuc = $danhmuc->ShowDungChung('danhmuc');

            $giovang = new DanhMuc;
            $giovangdelsoc = $giovang->ShowDanhMucGioVangDelSoc();


            $hanghoahomnay = new HangHoa;
            $HangHoaHomNay = $hanghoahomnay->ShowHangHoaHomNay();

            // sản phẩm bán chạy

            $sanphamban = new HangHoa;
            $sanphambanchay = $sanphamban->SanPhamBanChay();

            // lược xem user

            $hanghoauser = new HangHoa;
            require_once "./view/trangchu/center.php";
            break;

        case 'giohang':
            require_once "./view/cart/cart.php";
            break;


        case 'addcart':
            if (isset($_POST['add_cart']) && $_POST['add_cart']) {
                $idhanghoa = $_POST['idhanghoa'];
                $anhhanghoa = $_POST['anh'];
                $tenhanghoa = $_POST['tenhanghoa'];
                $gia = $_POST['gia'];

                if (isset($_POST['soluong']) && $_POST['soluong'] > 0) {
                    $soluong = $_POST['soluong'];
                } else {

                    $soluong = 1;
                }

                // Kiểm tra sản phẩm có trong giỏ hàng hay không, nếu có thì cập nhật số lượng vào giỏ hàng
                $bientam = 0;

                foreach ($_SESSION['giohang'] as $i => $item) {
                    if ($item[2] == $tenhanghoa) {
                        $slnew = $soluong + $item[3];
                        $_SESSION['giohang'][$i][3] = $slnew;
                        $bientam = 1;
                        break;
                    }
                }

                if ($bientam == 0) {

                    $item = array($idhanghoa, $anhhanghoa, $tenhanghoa, $soluong, $gia);
                    $_SESSION['giohang'][] = $item;
                }


                header("location: index.php?act=giohang");
            }

            break;

        case 'deletecart':
            if (isset($_GET['id'])) {
                if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {
                    array_splice($_SESSION['giohang'], $_GET['id'], 1);
                }
            } else {

                if (isset($_SESSION['giohang'])) {
                    unset($_SESSION['giohang']);
                }
            }
            if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {

                header("location: index.php?act=giohang");
            } else {
                header("location: index.php?act=giohang");
            }

            break;

        case 'cart_user':
            require_once "./view/cart/cart_pay.php";
            break;

        case 'order':
            if (isset($_POST['thanhtoan']) && $_POST['thanhtoan']) {
                $tongdonhang = $_POST['tongdonhang'];
                $madh = "LuongGiaHuy" . rand(0, 999);
                // tao don hang va tra ve id

                $tenkhachhang = $_SESSION['nguoidung'][0]['tenkhachhang'];
                $idkhachhang = $_SESSION['nguoidung'][0]['id_khachhang'];


                if (isset($_SESSION['nguoidung'])) {

                    $iddonhang = new DonHang;
                    $iddonhang->taodonhang($tongdonhang, $tenkhachhang, $madh, $idkhachhang);
                }



                if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {
                    foreach ($_SESSION['giohang'] as $item) {
                        $addspcart = new DonHang;

                        $addspcart->themhanghoavaocart($madh, $item[2], $item[3], $item[4], $idkhachhang);
                    }
                    unset($_SESSION['giohang']);
                }

                require_once "./view/cart/payment.php";

                // header("location: index.php?act=giohang");
            }
            break;

        case 'timkiem':
            if (isset($_POST['timkiemm']) && $_POST['timkiemm']) {

                $timkiem = $_POST['tentimkiem'];
                $sea = new ChucNang;
                $lishHangHoa = $sea->TimKiemHangHoa($timkiem);

                require "./view/sanpham/lishhanghoa.php";
            }

            break;
    }
} else {

    $danhmuc = new DungChung;
    $DanhMuc = $danhmuc->ShowDungChung('danhmuc');

    $giovang = new DanhMuc;
    $giovangdelsoc = $giovang->ShowDanhMucGioVangDelSoc();


    $hanghoahomnay = new HangHoa;
    $HangHoaHomNay = $hanghoahomnay->ShowHangHoaHomNay();

    // sản phẩm bán chạy

    $sanphamban = new HangHoa;
    $sanphambanchay = $sanphamban->SanPhamBanChay();

    // lược xem user

    $hanghoauser = new HangHoa;





    // var_dump($sanphambanchay);

    include "./view/trangchu/center.php";
}

include "./view/trangchu/footer.php";

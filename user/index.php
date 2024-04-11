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

    if (isset($_GET['act'])) {
        switch ($_GET['act']) {

            case 'chitietsanpham':
                $iddanhmuc = $_GET['iddanhmuc'];
                $hanghoa = new DungChung;
                $hanghoaa = $hanghoa->getByIdAll('hanghoa', 'id_danhmuc', $iddanhmuc);

                require "./view/sanpham/chitietsanpham.php";
                break;

            case 'lishsanpham':
                $iddanhmuc = $_GET['iddanhmuc'];
                $lish = new DungChung;
                $lishHangHoa = $lish->getByIdAll('hanghoa', 'id_danhmuc', $iddanhmuc);
                require "./view/sanpham/lishhanghoa.php";
                break;

            case 'dangnhap':
                if (isset($_POST['dangnhap']) && $_POST['dangnhap']) {
                    $username = $_POST['user'];
                    $password = $_POST['pass'];
                    $kiemtra = new DungChung;
                    $kiemtraUser = $kiemtra->login($username, $password);

                    $_SESSION['nguoidung'] = $kiemtraUser;

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

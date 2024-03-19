<?php
session_start();
ob_start();
// Model
include "../app/model/er.php";
include "../app/config/database.php";
include "../app/model/connectdb.php";
include "../app/model/PDO_MVC.php";

//content header

include "../app/view/view_admin/header.php";

if (isset($_GET['act'])) {
    switch ($_GET['act']) {

            //danh muc

        case 'danhmuc':

            echo '<script src="../public/js/danhmuc/danhmuc_add.js"></script>';

            $danhmuc = new DungChung;
            $HienDanhMuc = $danhmuc->ShowDungChung('danhmuc');
            require_once "../app/view/danhmuc/danhmuc.php";
            break;

        case 'updatehienthi':
            if (isset($_GET['iddanhmuc'])) {
                $getId = $_GET['iddanhmuc'];
                $iddanhmuc = new DungChung;
                $LayIdDanhMuc = $iddanhmuc->getByIdAll('danhmuc', 'id_danhmuc', $getId);
                $setblock = $LayIdDanhMuc[0]['hienthi'];
                if ($setblock == 1) {
                    $danhmuc = new DanhMuc;
                    $danhmuc->UpdateDanhMucSetBlock($getId, 0);
                } else {
                    $danhmuc = new DanhMuc;
                    $danhmuc->UpdateDanhMucSetBlock($getId, 1);
                }

                $danhmuc = new DungChung;
                $HienDanhMuc = $danhmuc->ShowDungChung('danhmuc');
                require_once "../app/view/danhmuc/danhmuc.php";
            }

            break;

        case 'deletedanhmuc':
            if (isset($_GET['iddanhmuc'])) {
                $getId = $_GET['iddanhmuc'];
                $delete = new DungChung;
                $delete->DeleteAll('danhmuc', 'id_danhmuc', $getId);


                echo '<script src="../public/js/danhmuc/danhmuc_add.js"></script>';

                $danhmuc = new DungChung;
                $HienDanhMuc = $danhmuc->ShowDungChung('danhmuc');
                require_once "../app/view/danhmuc/danhmuc.php";
            }
            break;

        case 'updatedanhmuc':
            if (isset($_GET['iddanhmuc'])) {
                $getId = $_GET['iddanhmuc'];
                $iddanhmuc = new DungChung;
                $id_onedanhmuc = $iddanhmuc->getByIdAll('danhmuc', 'id_danhmuc', $getId);

                // kèm theo lệnh jquery gọi bản update
                echo '<script src="../public/js/danhmuc/danhmuc_update.js"></script>';

                $danhmuc = new DungChung;
                $HienDanhMuc = $danhmuc->ShowDungChung('danhmuc');
                require_once "../app/view/danhmuc/danhmuc.php";
            }

            if (isset($_POST['btnUpdateDanhMuc']) && $_POST['btnUpdateDanhMuc']) {
                $iddanhmuc = $_POST['iddanhmuc'];
                $tendanhmuc = $_POST['tendanhmuc'];

                // điều kiện để lấy ảnh
                if (isset($_FILES['fileimage']['tmp_name']) && is_uploaded_file($_FILES['fileimage']['tmp_name'])) {
                    $hinhanh = $_FILES['fileimage']['tmp_name'];
                    $hinhanh = base64_encode(file_get_contents($hinhanh));
                } else {
                    $hinhanh = 'null';
                }

                // bắt đầu update

                $updatedm = new DanhMuc;
                $updatedm->UpdateDanhMucGetbyId($tendanhmuc, $hinhanh, $iddanhmuc);

                // Load lại trang danh mục
                echo '<script src="../public/js/danhmuc/danhmuc_add.js"></script>';

                $danhmuc = new DungChung;
                $HienDanhMuc = $danhmuc->ShowDungChung('danhmuc');
                require_once "../app/view/danhmuc/danhmuc.php";
            }
            break;

        case 'AddDanhMuc':
            if (isset($_POST['add_danhmuc']) && $_POST['add_danhmuc']) {
                $tendanhmuc = $_POST['tendanhmuc'];

                // Kiểm tra xem file hình ảnh đã được chọn hay chưa
                if (isset($_FILES['fileimage']) && $_FILES['fileimage']['error'] === UPLOAD_ERR_OK) {
                    $hinhanh1 = $_FILES['fileimage']['tmp_name'];
                    $hinhanh1 = base64_encode(file_get_contents($hinhanh1));
                } else {
                    // Xử lý khi không có hình ảnh được chọn
                    $hinhanh1 = null;
                }

                //Thực hiện thêm danh mục
                $AddDanhMuc = new DanhMuc;
                $AddDanhMuc->AddDanhMuc($tendanhmuc, $hinhanh1);

                // load lại trang
                echo '<script src="../public/js/danhmuc/danhmuc_add.js"></script>';
                $danhmuc = new DungChung;
                $HienDanhMuc = $danhmuc->ShowDungChung('danhmuc');
                require_once "../app/view/danhmuc/danhmuc.php";
            }
            break;

            // ============================San pham =============================

        case 'sanpham':

            echo '<script src="../public/js/danhmuc/danhmuc_add.js"></script>';
            echo '<script src="../public/js/sanpham/sanpham.js"></script>';
            $danhmuc = new DungChung;
            $listdanhmuc = $danhmuc->ShowDungChung('danhmuc');
            $hanghoa = new DungChung;
            $HienHangHoa = $hanghoa->ShowDungChung('hanghoa');

            require_once "../app/view/sanpham/sanpham.php";
            break;

        case 'AddHangHoa':
            if (isset($_POST['add_hanghoa']) && $_POST['add_hanghoa']) {
                $iddanhmuc = $_POST['danhmuc'];
                $tenhanghoa = $_POST['tenhanghoa'];
                $gia = $_POST['gia'];
                $giasale = $_POST['giasale'];
                $mota = $_POST['mota'];
                if (isset($_FILES['fileimage']['tmp_name']) && is_uploaded_file($_FILES['fileimage']['tmp_name'])) {
                    $hinhanh = $_FILES['fileimage']['tmp_name'];
                    $hinhanh = base64_encode(file_get_contents($hinhanh));
                } else {
                    $hinhanh = 'null';
                }

                // =========== Lấy id kèm tên danh muc ======
                $danhmuc = new DungChung;
                $HienDanhMuc = $danhmuc->ShowDungChung('danhmuc');
                $tendanhmuc = '';
                foreach ($HienDanhMuc as $HienDanhMucc) {
                    if ($HienDanhMucc['id_danhmuc'] == $iddanhmuc) {
                        $tendanhmuc = $HienDanhMucc['tendanhmuc'];
                        break;
                    }
                }

                // ========= TẠO MÃ SẢN PHẨM =============

                $masp = new HangHoa;
                $masanpham = $masp->generateProductCode('msp');


                $themhanghoa = new HangHoa;
                $themhanghoa->AddHangHoa($tenhanghoa, $masanpham, $gia, $giasale, $hinhanh, $mota, $tendanhmuc, $iddanhmuc);


                // ================ load lại trang =================
                echo '<script src="../public/js/danhmuc/danhmuc_add.js"></script>';
                echo '<script src="../public/js/sanpham/sanpham.js"></script>';
                $danhmuc = new DungChung;
                $listdanhmuc = $danhmuc->ShowDungChung('danhmuc');
                $hanghoa = new DungChung;
                $HienHangHoa = $hanghoa->ShowDungChung('hanghoa');

                require_once "../app/view/sanpham/sanpham.php";
            }
            break;

        case 'deletehanghoa':
            if (isset($_GET['idhanghoa']) && $_GET['idhanghoa']) {
                $idhanghoa = $_GET['idhanghoa'];

                $DeleteHangHoa = new DungChung;
                $DeleteHangHoa->DeleteAll('hanghoa', 'id_hanghoa', $idhanghoa);



                // ================ load lại trang =================
                echo '<script src="../public/js/danhmuc/danhmuc_add.js"></script>';
                echo '<script src="../public/js/sanpham/sanpham.js"></script>';
                $danhmuc = new DungChung;
                $listdanhmuc = $danhmuc->ShowDungChung('danhmuc');
                $hanghoa = new DungChung;
                $HienHangHoa = $hanghoa->ShowDungChung('hanghoa');

                require_once "../app/view/sanpham/sanpham.php";
            }


            break;

        case 'updatehanghoa':
            if (isset($_GET['idhanghoa']) && $_GET['idhanghoa']) {
                $getId = $_GET['idhanghoa'];
                $getIdHangHoa = new DungChung;
                $showUpdateHangHoa = $getIdHangHoa->getByIdAll('hanghoa', 'id_hanghoa', $getId);



                echo '<script src="../public/js/danhmuc/danhmuc_add.js"></script>';
                echo '<script src="../public/js/sanpham/sanpham.js"></script>';
                echo '<script src="../public/js/sanpham/sanpham_up.js"></script>';
                $danhmuc = new DungChung;
                $listdanhmuc = $danhmuc->ShowDungChung('danhmuc');
                $hanghoa = new DungChung;
                $HienHangHoa = $hanghoa->ShowDungChung('hanghoa');

                require_once "../app/view/sanpham/sanpham.php";
            }

            if (isset($_POST['add_hanghoa_update']) && $_POST['add_hanghoa_update']) {
                $getId = $_POST['idhanghoaa'];
                $getIdHangHoa = new DungChung;
                $showUpdateHangHoa = $getIdHangHoa->getByIdAll('hanghoa', 'id_hanghoa', $getId);

                if (isset($_FILES['fileimage']['tmp_name']) && is_uploaded_file($_FILES['fileimage']['tmp_name'])) {
                    $hinhanh = $_FILES['fileimage']['tmp_name'];
                    $hinhanh = base64_encode(file_get_contents($hinhanh));
                } else {
                    $hinhanh = $showUpdateHangHoa[0]['anhhanghoa'];
                }

                $tenhanghoa = $_POST['tenhanghoa'];
                $mota = $_POST['mota'];
                $gia = $_POST['gia'];
                $giasale = $_POST['giasale'];

                $iddanhmuc = $_POST['danhmuc'];
                $danhmuc = new DungChung;
                $HienDanhMuc = $danhmuc->ShowDungChung('danhmuc');
                $tendanhmuc = '';
                foreach ($HienDanhMuc as $HienDanhMucc) {
                    if ($HienDanhMucc['id_danhmuc'] == $iddanhmuc) {
                        $tendanhmuc = $HienDanhMucc['tendanhmuc'];
                        break;
                    }
                }



                $updateHangHoa = new HangHoa;
                $updateHangHoa->UpdateHangHoa($tenhanghoa, $gia, $giasale, $hinhanh, $mota, $tendanhmuc, $iddanhmuc, $getId);

                // var_dump($tenhanghoa, $gia, $giasale, $hinhanh, $mota, $getId);
                echo '<script src="../public/js/danhmuc/danhmuc_add.js"></script>';
                echo '<script src="../public/js/sanpham/sanpham.js"></script>';
                $danhmuc = new DungChung;
                $listdanhmuc = $danhmuc->ShowDungChung('danhmuc');
                $hanghoa = new DungChung;
                $HienHangHoa = $hanghoa->ShowDungChung('hanghoa');

                require_once "../app/view/sanpham/sanpham.php";
                break;
            }

            break;

        case 'UpdateHienThiSanPham':
            if (isset($_GET['idhanghoa']) && $_GET['idhanghoa']) {
                $getId = $_GET['idhanghoa'];
                $idhanghoa = new DungChung;
                $LyaIdHangHoa = $idhanghoa->getByIdAll('hanghoa', 'id_hanghoa', $getId);
                $setblock = $LyaIdHangHoa[0]['hienthi'];
                if ($setblock == 1) {
                    $hanghoa = new HangHoa;
                    $hanghoa->UpdateHangHoaSetBlock($getId, 0);
                } else {
                    $hanghoa = new HangHoa;
                    $hanghoa->UpdateHangHoaSetBlock($getId, 1);
                }
                // ================ load lại trang =================
                echo '<script src="../public/js/danhmuc/danhmuc_add.js"></script>';
                echo '<script src="../public/js/sanpham/sanpham.js"></script>';
                $danhmuc = new DungChung;
                $listdanhmuc = $danhmuc->ShowDungChung('danhmuc');
                $hanghoa = new DungChung;
                $HienHangHoa = $hanghoa->ShowDungChung('hanghoa');

                require_once "../app/view/sanpham/sanpham.php";
            }
            break;

        case 'sanphamimg':
            $Hien = new DungChung;
            $HienAnhSanPham = $Hien->ShowDungChung('hanghoa_img');

            $HienHangHoa = new DungChung;
            $lishanghoa = $HienHangHoa->ShowDungChung('hanghoa');

            echo '<script src="../public/js/danhmuc/danhmuc_add.js"></script>';
            echo '<script src="../public/js/sanpham/sanpham.js"></script>';
            echo '<script src="../public/js/sanpham/sanpham_up.js"></script>';
            require_once "../app/view/sanpham/sanpham_img.php";
            break;

        case 'AddImgHangHoa':
            if (isset($_POST['add_hanghoa_img']) && $_POST['add_hanghoa_img']) {
                $idhanghoa = $_POST['hanghoaid'];

                if (isset($_FILES['fileimage']['tmp_name']) && is_uploaded_file($_FILES['fileimage']['tmp_name'])) {
                    $hinhanh = $_FILES['fileimage']['tmp_name'];
                    $hinhanh = base64_encode(file_get_contents($hinhanh));
                } else {
                    $hinhanh = 'null';
                }

                $masp = new DungChung;
                $idMaSanPham = $masp->ShowDungChung('hanghoa');


                $masanpham = '';
                foreach ($idMaSanPham as $idMaSanPhamm) {
                    if ($idMaSanPhamm['id_hanghoa'] == $idhanghoa) {
                        $masanpham = $idMaSanPhamm['id_mahanghoa'];
                    }
                }

                // thực hiện thêm ảnh
                // var_dump($masanpham, $hinhanh, $idhanghoa);

                $ThemAnhMoi = new HangHoa;
                $ThemAnhMoi->AddImgHangHoa($masanpham, $hinhanh, $idhanghoa);


                // load trang

                $Hien = new DungChung;
                $HienAnhSanPham = $Hien->ShowDungChung('hanghoa_img');

                $HienHangHoa = new DungChung;
                $lishanghoa = $HienHangHoa->ShowDungChung('hanghoa');

                echo '<script src="../public/js/danhmuc/danhmuc_add.js"></script>';
                echo '<script src="../public/js/sanpham/sanpham.js"></script>';
                require_once "../app/view/sanpham/sanpham_img.php";
            }
            break;

        case 'deletehanghoaimg':
            if (isset($_GET['idhanghoaimg']) && $_GET['idhanghoaimg']) {
                $idhanghoaimg = $_GET['idhanghoaimg'];

                $deleteImgHangHoa = new DungChung;
                $deleteImgHangHoa->DeleteAll('hanghoa_img', 'id_imghanghoa', $idhanghoaimg);

                // load trang

                $Hien = new DungChung;
                $HienAnhSanPham = $Hien->ShowDungChung('hanghoa_img');

                $HienHangHoa = new DungChung;
                $lishanghoa = $HienHangHoa->ShowDungChung('hanghoa');

                echo '<script src="../public/js/danhmuc/danhmuc_add.js"></script>';
                echo '<script src="../public/js/sanpham/sanpham.js"></script>';
                require_once "../app/view/sanpham/sanpham_img.php";
            }
            break;

            // =================== Nhân Viên ================================================

        case 'nhanvien':
            echo '<script src="../public/js/danhmuc/danhmuc_add.js"></script>';
            echo '<script src="../public/js/sanpham/sanpham.js"></script>';

            $list = new DungChung;
            $listchucvu = $list->ShowDungChung('phanquyennhanvien');

            $nhanvien = new DungChung;
            $HienNhanVien = $nhanvien->ShowDungChung('nhanvien');
            require_once "./view/nhanvien/nhanvien.php";
            break;

        case 'AddNhanVien':
            if (isset($_POST['add_nhanvien']) && $_POST['add_nhanvien']) {
                $tennhanvien = $_POST['tennhanvien'];
                $ngaysinh = $_POST['ngaysinh'];
                $sodienthoai = $_POST['sodienthoai'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $taikhoan = $_POST['tentaikhoan'];
                $matkhau = $_POST['matkhau'];
                $chucvuId = $_POST['chucvu'];

                //==========lẤY CHỨC VỤ THEO ID ===========

                $idchucvu = new DungChung;
                $CV = $idchucvu->ShowDungChung('phanquyennhanvien');
                $tenchucvu = '';

                foreach ($CV as $CVV) {
                    if ($CVV['id_phanquyen'] == $chucvuId) {
                        $tenchucvu = $CVV['tenchucvu'];
                        break;
                    }
                }

                if (isset($_FILES['fileimage']['tmp_name']) && is_uploaded_file($_FILES['fileimage']['tmp_name'])) {
                    $hinhanh = $_FILES['fileimage']['tmp_name'];
                    $hinhanh = base64_encode(file_get_contents($hinhanh));
                } else {
                    $hinhanh = 'null';
                }

                // =========Insert dữ liệu=====

                $addNhanvien = new NhanVien;
                $addNhanvien->AddNhanVien($tennhanvien, $ngaysinh, $sodienthoai, $email, $diachi, $hinhanh, $taikhoan, $matkhau, $tenchucvu, $chucvuId);


                // ==========load lai trang ===========

                echo '<script src="../public/js/danhmuc/danhmuc_add.js"></script>';
                echo '<script src="../public/js/sanpham/sanpham.js"></script>';

                $list = new DungChung;
                $listchucvu = $list->ShowDungChung('phanquyennhanvien');

                $nhanvien = new DungChung;
                $HienNhanVien = $nhanvien->ShowDungChung('nhanvien');
                require_once "./view/nhanvien/nhanvien.php";
            }
            break;


        case 'deletenhanvien':
            if (isset($_GET['idnhanvien'])) {
                $getId = $_GET['idnhanvien'];
                $deletenhanvien = new DungChung;
                $deletenhanvien->DeleteAll('nhanvien', 'id_nhanvien', $getId);

                // ==========load lai trang ===========

                echo '<script src="../public/js/danhmuc/danhmuc_add.js"></script>';
                echo '<script src="../public/js/sanpham/sanpham.js"></script>';

                $list = new DungChung;
                $listchucvu = $list->ShowDungChung('phanquyennhanvien');

                $nhanvien = new DungChung;
                $HienNhanVien = $nhanvien->ShowDungChung('nhanvien');
                require_once "./view/nhanvien/nhanvien.php";
            }
            break;

        case 'updatenhanvien':
            if (isset($_GET['idnhanvien'])) {

                $getId = $_GET['idnhanvien'];
                $NhanVienGetById = new DungChung;
                $howNhanVienGetById = $NhanVienGetById->getByIdAll('nhanvien', 'id_nhanvien', $getId);



                echo '<script src="../public/js/sanpham/sanpham_up.js"></script>';
                // ==========load lai trang ===========

                echo '<script src="../public/js/danhmuc/danhmuc_add.js"></script>';
                echo '<script src="../public/js/sanpham/sanpham.js"></script>';

                $list = new DungChung;
                $listchucvu = $list->ShowDungChung('phanquyennhanvien');

                $nhanvien = new DungChung;
                $HienNhanVien = $nhanvien->ShowDungChung('nhanvien');
                require_once "./view/nhanvien/nhanvien.php";
            }

            if (isset($_POST['idnhanvien']) && $_POST['idnhanvien']) {
                $getId = $_POST['idnhanvien'];
                $tennhanvien = $_POST['tennhanvien'];
                $ngaysinh = $_POST['ngaysinh'];
                $sodienthoai = $_POST['sodienthoai'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $taikhoan = $_POST['tentaikhoan'];
                $matkhau = $_POST['matkhau'];
                $chucvuId = $_POST['chucvu'];

                //==========lẤY CHỨC VỤ THEO ID ===========

                $idchucvu = new DungChung;
                $CV = $idchucvu->ShowDungChung('phanquyennhanvien');
                $tenchucvu = '';

                foreach ($CV as $CVV) {
                    if ($CVV['id_phanquyen'] == $chucvuId) {
                        $tenchucvu = $CVV['tenchucvu'];
                        break;
                    }
                }

                if (isset($_FILES['fileimage']['tmp_name']) && is_uploaded_file($_FILES['fileimage']['tmp_name'])) {
                    $hinhanh = $_FILES['fileimage']['tmp_name'];
                    $hinhanh = base64_encode(file_get_contents($hinhanh));
                } else {
                    $hinhanh = 'null';
                }


                // var_dump($tennhanvien, $ngaysinh, $sodienthoai, $email, $diachi, $hinhanh, $taikhoan, $matkhau, $tenchucvu, $chucvuId, $getId);
                // =========update dữ liệu=====

                $UpdateNhanVien = new NhanVien;
                $UpdateNhanVien->UpdateNhanVien($tennhanvien, $ngaysinh, $sodienthoai, $email, $diachi, $hinhanh, $taikhoan, $matkhau, $tenchucvu, $chucvuId, $getId);


                // ==========load lai trang ===========

                echo '<script src="../public/js/danhmuc/danhmuc_add.js"></script>';
                echo '<script src="../public/js/sanpham/sanpham.js"></script>';

                $list = new DungChung;
                $listchucvu = $list->ShowDungChung('phanquyennhanvien');

                $nhanvien = new DungChung;
                $HienNhanVien = $nhanvien->ShowDungChung('nhanvien');
                require_once "./view/nhanvien/nhanvien.php";
            }
            break;







            //============ Chức vụ nhân viên ================
        case 'chucvunhanvien':
            // ==========load lai trang ===========

            echo '<script src="../public/js/danhmuc/danhmuc_add.js"></script>';
            echo '<script src="../public/js/sanpham/sanpham.js"></script>';


            $list = new DungChung;
            $listchucvu = $list->ShowDungChung('phanquyennhanvien');

            $nhanvien = new DungChung;
            $HienNhanVien = $nhanvien->ShowDungChung('nhanvien');
            require_once "./view/nhanvien/phanquyen_nhanvien.php";

            break;

        case 'AddChucVuVaoNhanVien':
            if (isset($_POST['add_chucvuvaonhanvien'])) {
                $nhanvienId = $_POST['nhanvien'];
                $chucvuId = $_POST['chucvu'];

                //==========lẤY CHỨC VỤ THEO ID ===========

                $idchucvu = new DungChung;
                $CV = $idchucvu->ShowDungChung('phanquyennhanvien');
                $tenchucvu = '';

                foreach ($CV as $CVV) {
                    if ($CVV['id_phanquyen'] == $chucvuId) {
                        $tenchucvu = $CVV['tenchucvu'];
                        break;
                    }
                }

                $UpdateNhanVienChucVu = new NhanVien;
                $UpdateNhanVienChucVu->UpdateNhanVienChucVu($nhanvienId, $chucvuId, $tenchucvu);

                // ==========load lai trang ===========

                echo '<script src="../public/js/danhmuc/danhmuc_add.js"></script>';
                echo '<script src="../public/js/sanpham/sanpham.js"></script>';


                $list = new DungChung;
                $listchucvu = $list->ShowDungChung('phanquyennhanvien');

                $nhanvien = new DungChung;
                $HienNhanVien = $nhanvien->ShowDungChung('nhanvien');
                require_once "./view/nhanvien/phanquyen_nhanvien.php";
            }

            break;

            // chức vụ nhân viên 
        case 'chucvu':

            $phanquyen = new DungChung;
            $showphanquyen = $phanquyen->ShowDungChung('phanquyennhanvien');


            // ================= Load lại trang ==================
            echo '<script src="../public/js/danhmuc/danhmuc_add.js"></script>';
            echo '<script src="../public/js/sanpham/sanpham.js"></script>';

            require_once "./view/nhanvien/chucvu.php";
            break;

        case 'AddChucVu':
            if (isset($_POST['add_chucvumoi']) && $_POST['add_chucvumoi']) {
                $tenchucvu = $_POST['tenchucvu'];
                $luong = $_POST['luong'];
                $luong = preg_replace("/\./", "", $luong);

                // Thêm chức vụ

                $addchucvu = new NhanVien;
                $addchucvu->AddChucVu($tenchucvu, $luong);

                // ================= Load lại trang ==================
                $phanquyen = new DungChung;
                $showphanquyen = $phanquyen->ShowDungChung('phanquyennhanvien');
                echo '<script src="../public/js/danhmuc/danhmuc_add.js"></script>';
                echo '<script src="../public/js/sanpham/sanpham.js"></script>';

                require_once "./view/nhanvien/chucvu.php";
            }
            break;

        case 'updatephanquyenchucvuu':
            if (isset($_GET['idchucvu']) && $_GET['idchucvu']) {
                $getId = $_GET['idchucvu'];

                // Lấy id chức vụ

                $idchucvu = new DungChung;
                $hienupdatechucvu = $idchucvu->getByIdAll('phanquyennhanvien', 'id_phanquyen', $getId);

                echo '<script src="../public/js/sanpham/sanpham_up.js"></script>';
                // ================= Load lại trang ==================
                echo '<script src="../public/js/danhmuc/danhmuc_add.js"></script>';
                echo '<script src="../public/js/sanpham/sanpham.js"></script>';
                $phanquyen = new DungChung;
                $showphanquyen = $phanquyen->ShowDungChung('phanquyennhanvien');

                require_once "./view/nhanvien/chucvu.php";
            }

            if (isset($_POST['add_chucvumoi']) && $_POST['add_chucvumoi']) {
                $getId = $_POST['idchucvu'];
                $tenchucvu = $_POST['tenchucvu'];
                $luong = $_POST['luong'];
                $luong = preg_replace("/\,/", "", $luong);
                $luong = preg_replace("/\./", "", $luong);

                // update chức vụ

                $updatechucvu = new NhanVien;
                $updatechucvu->UpdateChucVu($tenchucvu, $luong, $getId);

                // ================= Load lại trang ==================
                echo '<script src="../public/js/danhmuc/danhmuc_add.js"></script>';
                echo '<script src="../public/js/sanpham/sanpham.js"></script>';
                $phanquyen = new DungChung;
                $showphanquyen = $phanquyen->ShowDungChung('phanquyennhanvien');

                require_once "./view/nhanvien/chucvu.php";
            }
            break;

        case 'deletephanquyenchucvuu':
            if (isset($_GET['idchucvu']) && $_GET['idchucvu']) {
                $deletechucvu = $_GET['idchucvu'];

                $delete = new DungChung;
                $delete->DeleteAll('phanquyennhanvien', 'id_phanquyen', $deletechucvu);
                // ================= Load lại trang ==================
                echo '<script src="../public/js/danhmuc/danhmuc_add.js"></script>';
                echo '<script src="../public/js/sanpham/sanpham.js"></script>';
                $phanquyen = new DungChung;
                $showphanquyen = $phanquyen->ShowDungChung('phanquyennhanvien');

                require_once "./view/nhanvien/chucvu.php";
            }
            break;

            //================ Lich Lam =======================

        case 'lichlam':

            $startOfMonth = date("Y-m-01");
            $endOfMonth = date("Y-m-t");

            $checkca = new NhanVien;
            $checkcashow = $checkca->CaLamTheoThang($startOfMonth, $endOfMonth);



            $nhanvien = new DungChung;
            $shownhanvien = $nhanvien->ShowDungChung('nhanvien');
            require_once "./view/nhanvien/lichlam.php";
            break;

        case 'AddLichLam':
            if (isset($_POST['btnaddlichlam']) && $_POST['btnaddlichlam']) {
                $ca = $_POST['ca'];
                $nhanvienId = $_POST['nhanvien'];
                $ngay = $_POST['date'];

                //=======LẤY NHÂN VIÊN THEO ID ===========

                $idnhanvien = new DungChung;
                $NV = $idnhanvien->ShowDungChung('nhanvien');
                $tennhanvien = '';

                foreach ($NV as $NVV) {
                    if ($NVV['id_nhanvien'] == $nhanvienId) {
                        $tennhanvien = $NVV['tennhanvien'];
                        break;
                    }
                }

                // ============ THÊM LỊCH LÀM ===============
                $addlich = new NhanVien;
                $addlich->AddLichLam($tennhanvien, $nhanvienId, $ca, $ngay);


                $nhanvien = new DungChung;
                $shownhanvien = $nhanvien->ShowDungChung('nhanvien');
                require_once "./view/nhanvien/lichlam.php";
                break;
            }

        case 'deletelichlam':
            if (isset($_GET['idlichlam']) && $_GET['idlichlam']) {
                $getId = $_GET['idlichlam'];
                $deletelichlam = new DungChung;
                $deletelichlam->DeleteAll('lichlam', 'id_lichlam', $getId);
                $nhanvien = new DungChung;
                $shownhanvien = $nhanvien->ShowDungChung('nhanvien');
                require_once "./view/nhanvien/lichlam.php";
                break;
            }
            break;

        case 'AddGioLam':
            if (isset($_POST['btnaddlichlam']) && $_POST['btnaddlichlam']) {
                $giolam = $_POST['giolam'];
                $ngay = $_POST['date'];
                $nhanvienId = $_POST['nhanvien'];

                //=======LẤY NHÂN VIÊN THEO ID ===========

                $idnhanvien = new DungChung;
                $NV = $idnhanvien->ShowDungChung('nhanvien');
                $tennhanvien = '';

                foreach ($NV as $NVV) {
                    if ($NVV['id_nhanvien'] == $nhanvienId) {
                        $tennhanvien = $NVV['tennhanvien'];
                        break;
                    }
                }


                // ============ THÊM LỊCH LÀM ===============
                $addlich = new NhanVien;
                $addlich->AddCaLam($tennhanvien, $nhanvienId, $giolam, $ngay);

                // ============ THÊM LỊCH LÀM ===============
                $addlich = new NhanVien;
                $addlich->AddLichLam($tennhanvien, $nhanvienId, $ca, $ngay);


                $nhanvien = new DungChung;
                $shownhanvien = $nhanvien->ShowDungChung('nhanvien');
                require_once "./view/nhanvien/lichlam.php";
            }

            break;

        case 'giolamsearch':
            if (isset($_POST['timdate']) && $_POST['timdate']) {
                $startOfMonth = $_POST['tungay'];
                $endOfMonth = $_POST['denngay'];

                $checkca = new NhanVien;
                $checkcashow = $checkca->CaLamTheoThang($startOfMonth, $endOfMonth);



                $nhanvien = new DungChung;
                $shownhanvien = $nhanvien->ShowDungChung('nhanvien');
                require_once "./view/nhanvien/lichlam.php";
            }
            break;


            //=====Luong nhân viên=================
        case 'luongnhanvien':
            $startOfMonth = date("Y-m-01");
            $endOfMonth = date("Y-m-t");
            $giolam = new NhanVien;
            $showgiolam = $giolam->CaLamTheoThang($startOfMonth, $endOfMonth);

            $phanquyen = new DungChung;
            $showphanquyen = $phanquyen->ShowDungChung('phanquyennhanvien');
            $nhanvien = new DungChung;
            $shownhanvien = $nhanvien->ShowDungChung('nhanvien');

            $luongthuong = new NhanVien;
            $showluongthuong = $luongthuong->getByIdThuong();

            $luongphat = new NhanVien;
            $showluongphat = $luongphat->getByIdPhat();


            //============= Phép tính xử lý =================

            foreach ($shownhanvien as $shownhanvienn) {
                foreach ($showphanquyen as $showphanquyenn) {

                    if ($shownhanvienn['id_phanquyen'] == $showphanquyenn['id_phanquyen']) {
                        // echo $showphanquyenn['luong'];

                    }
                }
            }

            // =========== tính tổng giờ làm =============

            foreach ($shownhanvien as $shownhanvienn) {
                $tonggiolamcanhan = 0;
                foreach ($showgiolam as $showgiolamm) {
                    if ($shownhanvienn['id_nhanvien'] == $showgiolamm['id_nhanvien']) {
                        $tonggiolamcanhan += $showgiolamm['giolam'];
                    }
                }
                // echo "Tổng số giờ làm của nhân viên " . $shownhanvienn['tennhanvien'] . ": " . $tonggiolamcanhan . "<br>";
            }



            require_once "./view/nhanvien/luong.php";
            break;


        case 'addluongthuong':
            if (isset($_POST['themluongthuong']) && $_POST['themluongthuong']) {
                $nhanvienId = $_POST['nhanvien'];
                $sotienthuong = $_POST['sotienthuong'];
                $noidungthuong = $_POST['noidungthuong'];

                $addtienthuong = new NhanVien;
                $addtienthuong->AddTienThuong($nhanvienId, $sotienthuong, $noidungthuong);

                $startOfMonth = date("Y-m-01");
                $endOfMonth = date("Y-m-t");
                $giolam = new NhanVien;
                $showgiolam = $giolam->CaLamTheoThang($startOfMonth, $endOfMonth);

                $phanquyen = new DungChung;
                $showphanquyen = $phanquyen->ShowDungChung('phanquyennhanvien');
                $nhanvien = new DungChung;
                $shownhanvien = $nhanvien->ShowDungChung('nhanvien');

                $luongthuong = new NhanVien;
                $showluongthuong = $luongthuong->getByIdThuong();

                $luongphat = new NhanVien;
                $showluongphat = $luongphat->getByIdPhat();


                //============= Phép tính xử lý =================

                foreach ($shownhanvien as $shownhanvienn) {
                    foreach ($showphanquyen as $showphanquyenn) {

                        if ($shownhanvienn['id_phanquyen'] == $showphanquyenn['id_phanquyen']) {
                            // echo $showphanquyenn['luong'];

                        }
                    }
                }

                // =========== tính tổng giờ làm =============
                foreach ($shownhanvien as $shownhanvienn) {
                    $tonggiolamcanhan = 0;
                    foreach ($showgiolam as $showgiolamm) {
                        if ($shownhanvienn['id_nhanvien'] == $showgiolamm['id_nhanvien']) {
                            $tonggiolamcanhan += $showgiolamm['giolam'];
                        }
                    }
                    // echo "Tổng số giờ làm của nhân viên " . $shownhanvienn['tennhanvien'] . ": " . $tonggiolamcanhan . "<br>";
                }



                require_once "./view/nhanvien/luong.php";
            }
            break;

        case 'addluongphat':
            if (isset($_POST['themtienphatt']) && $_POST['themtienphatt']) {
                $nhanvienId = $_POST['nhanvien'];
                $sotienthuong = $_POST['sotienphat'];
                $noidungthuong = $_POST['noidungphat'];

                $addtienthuong = new NhanVien;
                $addtienthuong->AddTienPhat($nhanvienId, $sotienthuong, $noidungthuong);

                $startOfMonth = date("Y-m-01");
                $endOfMonth = date("Y-m-t");
                $giolam = new NhanVien;
                $showgiolam = $giolam->CaLamTheoThang($startOfMonth, $endOfMonth);

                $phanquyen = new DungChung;
                $showphanquyen = $phanquyen->ShowDungChung('phanquyennhanvien');
                $nhanvien = new DungChung;
                $shownhanvien = $nhanvien->ShowDungChung('nhanvien');

                $luongthuong = new NhanVien;
                $showluongthuong = $luongthuong->getByIdThuong();

                $luongphat = new NhanVien;
                $showluongphat = $luongphat->getByIdPhat();


                //============= Phép tính xử lý =================

                foreach ($shownhanvien as $shownhanvienn) {
                    foreach ($showphanquyen as $showphanquyenn) {

                        if ($shownhanvienn['id_phanquyen'] == $showphanquyenn['id_phanquyen']) {
                            // echo $showphanquyenn['luong'];

                        }
                    }
                }

                // =========== tính tổng giờ làm =============

                foreach ($shownhanvien as $shownhanvienn) {
                    $tonggiolamcanhan = 0;
                    foreach ($showgiolam as $showgiolamm) {
                        if ($shownhanvienn['id_nhanvien'] == $showgiolamm['id_nhanvien']) {
                            $tonggiolamcanhan += $showgiolamm['giolam'];
                        }
                    }
                    // echo "Tổng số giờ làm của nhân viên " . $shownhanvienn['tennhanvien'] . ": " . $tonggiolamcanhan . "<br>";
                }



                require_once "./view/nhanvien/luong.php";
            }
            break;

        case 'deleteluongphat':
            if (isset($_GET['idluongphat']) && $_GET['idluongphat']) {
                $getId = $_GET['idluongphat'];
                $delete = new DungChung;
                $delete->DeleteAll('thuongphat', 'id_thuongphat', $getId);



                $startOfMonth = date("Y-m-01");
                $endOfMonth = date("Y-m-t");
                $giolam = new NhanVien;
                $showgiolam = $giolam->CaLamTheoThang($startOfMonth, $endOfMonth);

                $phanquyen = new DungChung;
                $showphanquyen = $phanquyen->ShowDungChung('phanquyennhanvien');
                $nhanvien = new DungChung;
                $shownhanvien = $nhanvien->ShowDungChung('nhanvien');

                $luongthuong = new NhanVien;
                $showluongthuong = $luongthuong->getByIdThuong();

                $luongphat = new NhanVien;
                $showluongphat = $luongphat->getByIdPhat();


                //============= Phép tính xử lý =================

                foreach ($shownhanvien as $shownhanvienn) {
                    foreach ($showphanquyen as $showphanquyenn) {

                        if ($shownhanvienn['id_phanquyen'] == $showphanquyenn['id_phanquyen']) {
                            // echo $showphanquyenn['luong'];

                        }
                    }
                }

                // =========== tính tổng giờ làm =============

                foreach ($shownhanvien as $shownhanvienn) {
                    $tonggiolamcanhan = 0;
                    foreach ($showgiolam as $showgiolamm) {
                        if ($shownhanvienn['id_nhanvien'] == $showgiolamm['id_nhanvien']) {
                            $tonggiolamcanhan += $showgiolamm['giolam'];
                        }
                    }
                    // echo "Tổng số giờ làm của nhân viên " . $shownhanvienn['tennhanvien'] . ": " . $tonggiolamcanhan . "<br>";
                }



                require_once "./view/nhanvien/luong.php";
            }
            break;


        case 'deleteluongthuong':
            if (isset($_GET['idluongthuong']) && $_GET['idluongthuong']) {
                $getId = $_GET['idluongthuong'];
                $delete = new DungChung;
                $delete->DeleteAll('thuongphat', 'id_thuongphat', $getId);



                $startOfMonth = date("Y-m-01");
                $endOfMonth = date("Y-m-t");
                $giolam = new NhanVien;
                $showgiolam = $giolam->CaLamTheoThang($startOfMonth, $endOfMonth);

                $phanquyen = new DungChung;
                $showphanquyen = $phanquyen->ShowDungChung('phanquyennhanvien');
                $nhanvien = new DungChung;
                $shownhanvien = $nhanvien->ShowDungChung('nhanvien');

                $luongthuong = new NhanVien;
                $showluongthuong = $luongthuong->getByIdThuong();

                $luongphat = new NhanVien;
                $showluongphat = $luongphat->getByIdPhat();


                //============= Phép tính xử lý =================

                foreach ($shownhanvien as $shownhanvienn) {
                    foreach ($showphanquyen as $showphanquyenn) {

                        if ($shownhanvienn['id_phanquyen'] == $showphanquyenn['id_phanquyen']) {
                            // echo $showphanquyenn['luong'];

                        }
                    }
                }

                // =========== tính tổng giờ làm =============

                foreach ($shownhanvien as $shownhanvienn) {
                    $tonggiolamcanhan = 0;
                    foreach ($showgiolam as $showgiolamm) {
                        if ($shownhanvienn['id_nhanvien'] == $showgiolamm['id_nhanvien']) {
                            $tonggiolamcanhan += $showgiolamm['giolam'];
                        }
                    }
                    // echo "Tổng số giờ làm của nhân viên " . $shownhanvienn['tennhanvien'] . ": " . $tonggiolamcanhan . "<br>";
                }



                require_once "./view/nhanvien/luong.php";
            }
            break;
    }
} else {

    //    include "../app/view/view_admin/center.php";

}

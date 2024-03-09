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
            if(isset($_POST['add_hanghoa']) && $_POST['add_hanghoa']) {
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
                foreach($HienDanhMuc as $HienDanhMucc) {
                    if($HienDanhMucc['id_danhmuc'] == $iddanhmuc) {
                        $tendanhmuc = $HienDanhMucc['tendanhmuc'];
                        break;
                    }
                }

                // ========= TẠO MÃ SẢN PHẨM =============

                $masp = new HangHoa;
                $masanpham = $masp->generateProductCode('msp');


                $themhanghoa = new HangHoa;
                $themhanghoa->AddHangHoa($tenhanghoa,$masanpham, $gia, $giasale, $hinhanh, $mota, $tendanhmuc, $iddanhmuc);
                

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



    }
} else {

    //    include "../app/view/view_admin/center.php";

}

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

        case "danhmuc":

            echo '<script src="../public/js/danhmuc/danhmuc_add.js"></script>';

            $danhmuc = new DungChung;
            $HienDanhMuc = $danhmuc->ShowDungChung('danhmuc');
            require_once "../app/view/danhmuc/danhmuc.php";
            break;

        case "updatehienthi":
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
    }
} else {

    //    include "../app/view/view_admin/center.php";

}

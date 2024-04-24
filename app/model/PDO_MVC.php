<?php

class DungChung
{
   private $dungchung;
   function __construct()
   {
      $this->dungchung = new DatabaseModel;
   }

   function ShowDungChung($showall)
   {
      $sql = "SELECT * FROM $showall";
      return $this->dungchung->get_all($sql);
   }

   function getByIdAll($showallName, $showallId, $getId)
   {
      $sql = "SELECT * FROM $showallName WHERE $showallId=" . $getId;
      return $this->dungchung->get_all($sql);
   }

   function DeleteAll($showallName, $showallId, $getId)
   {
      $sql = "DELETE FROM $showallName WHERE $showallId=" . $getId;
      $this->dungchung->get_all($sql);
   }

   function login($username, $password)
   {
      $sql = "SELECT * FROM khachhang WHERE tendangnhap= '" . $username . "' AND matkhau='" . $password . "'";
      return $this->dungchung->get_all($sql);
   }
   function loginadmin($username, $password)
   {
      $sql = "SELECT * FROM nhanvien WHERE taikhoan= '" . $username . "' AND matkhau='" . $password . "'";
      return $this->dungchung->get_all($sql);
   }

   function getByIdAllOrderByPriceAsc($showallName, $showallId, $getId)
   {
      $sql = "SELECT * FROM $showallName WHERE $showallId = $getId ORDER BY gia ASC";
      return $this->dungchung->get_all($sql);
   }

   function getByIdAllOrderByPriceDesc($showallName, $showallId, $getId)
   {
      $sql = "SELECT * FROM $showallName WHERE $showallId = $getId ORDER BY gia DESC";
      return $this->dungchung->get_all($sql);
   }
}


// Danh mục

class DanhMuc
{
   private $danhmuc;
   function __construct()
   {
      $this->danhmuc = new DatabaseModel;
   }

   function HienDanhMuc()
   {
      $sql = "SELECT * FROM danhmuc";
      return $this->danhmuc->get_all($sql);
   }

   function UpdateDanhMucSetBlock($iddanhmuc, $hienthi)
   {
      $sql = "UPDATE danhmuc SET hienthi='" . $hienthi . "' WHERE id_danhmuc=" . $iddanhmuc;
      $this->danhmuc->get_all($sql);
   }

   function UpdateDanhMucGetbyId($tendanhmuc, $hinhanh, $iddanhmuc)
   {
      $sql = "UPDATE danhmuc SET tendanhmuc='" . $tendanhmuc . "', hinhanh='" . $hinhanh . "' WHERE id_danhmuc=" . $iddanhmuc;
      $this->danhmuc->get_all($sql);
   }


   function AddDanhMuc($tendanhmuc, $hinhanh1)
   {
      $sql = "INSERT INTO danhmuc (tendanhmuc, hinhanh) VALUES ('" . $tendanhmuc . "', '" . $hinhanh1 . "')";
      $this->danhmuc->get_all($sql);
   }

   function ShowDanhMucGioVangDelSoc()
   {
      $sql = "SELECT * FROM hanghoa ORDER BY giasale DESC LIMIT 5";
      return $this->danhmuc->get_all($sql);
   }



   // function ShowDanhMucGioVangDelSoc()
   // {
   //    $sql = "SELECT hanghoa.*, mau.mausac
   //            FROM hanghoa
   //            INNER JOIN mau ON hanghoa.id_hanghoa = mau.id_hanghoa
   //            ORDER BY hanghoa.giasale DESC
   //            LIMIT 5";
   //    return $this->danhmuc->get_all($sql);
   // }
   function ShowMau($idhanghoa)
   {
      $sql = "SELECT * FROM mau WHERE id_hanghoa=" . $idhanghoa;
      return $this->danhmuc->get_all($sql);
   }

   function LuocXemDanhMuc()
   {
      $sql = "SELECT * FROM danhmuc ORDER BY luotxem DESC LIMIT 5";
      return $this->danhmuc->get_all($sql);
   }

   function showdanhmuctang() {
      $sql = "SELECT * FROM danhmuc ORDER BY luotxem DESC";
      return $this->danhmuc->get_all($sql);
   }
}

class HangHoa
{
   private $hanghoa;

   function __construct()
   {
      $this->hanghoa = new DatabaseModel;
   }


   function generateProductCode($prefix)
   {
      // Tạo một chuỗi duy nhất dựa trên timestamp và các yếu tố ngẫu nhiên
      $uniqueId = uniqid();

      // Thêm phần ngẫu nhiên để đảm bảo tính duy nhất
      $randomPart = bin2hex(random_bytes(4));

      // Kết hợp với tiền tố (nếu có) và phần ngẫu nhiên
      //  $productCode = $prefix . '_' . $uniqueId . '_' . $randomPart;
      $productCode = $prefix . '_' . $uniqueId;

      return $productCode;
   }

   function AddHangHoa($tenhanghoa, $masanpham, $gia, $giasale, $hinhanh, $mota, $kho, $tendanhmuc, $iddanhmuc)
   {
      $sql = "INSERT INTO hanghoa (tenhanghoa,id_mahanghoa, gia, giasale, anhhanghoa, mota, soluong, tendanhmuc, id_danhmuc) VALUES ('" . $tenhanghoa . "', '" . $masanpham . "' , '" . $gia . "', '" . $giasale . "', '" . $hinhanh . "', '" . $mota . "', '" . $kho . "', '" . $tendanhmuc . "', '" . $iddanhmuc . "')";
      $this->hanghoa->get_all($sql);
      $sql = "INSERT INTO hanghoa_img (id_mahanghoa) VALUES ('" . $masanpham . "')";
      $this->hanghoa->get_all($sql);
   }

   function AddImgHangHoa($masanpham, $hinhanh, $idhanghoa)
   {
      $sql = "INSERT INTO hanghoa_img (id_mahanghoa, hinh, id_hanghoa) VALUES ('" . $masanpham . "', '" . $hinhanh . "', '" . $idhanghoa . "')";
      $this->hanghoa->get_all($sql);
   }

   function UpdateHangHoa($tenhanghoa, $gia, $giasale, $hinhanh, $mota, $tendanhmuc, $iddanhmuc, $getId)
   {
      $sql = "UPDATE hanghoa SET tenhanghoa='" . $tenhanghoa . "', gia='" . $gia . "', giasale='" . $giasale . "', anhhanghoa='" . $hinhanh . "', mota='" . $mota . "', tendanhmuc='" . $tendanhmuc . "', id_danhmuc='" . $iddanhmuc . "' WHERE id_hanghoa=" . $getId;
      $this->hanghoa->get_all($sql);
   }

   function UpdateHangHoaSetBlock($idhanghoa, $hienthi)
   {
      $sql = "UPDATE hanghoa SET hienthi='" . $hienthi . "' WHERE id_hanghoa=" . $idhanghoa;
      $this->hanghoa->get_all($sql);
   }

   function HangHoaTheoThang($startOfMonth, $endOfMonth)
   {
      try {
         // Chuẩn bị truy vấn SQL với tham số ràng buộc
         $sql = "SELECT * FROM hanghoa WHERE ngay BETWEEN :startOfMonth AND :endOfMonth";
         $stmt = $this->hanghoa->prepare($sql);
         $stmt->bindParam(':startOfMonth', $startOfMonth, PDO::PARAM_STR);
         $stmt->bindParam(':endOfMonth', $endOfMonth, PDO::PARAM_STR);

         // Thực thi truy vấn
         $stmt->execute();

         // Lấy kết quả
         $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

         return $result;
      } catch (PDOException $e) {
         // Xử lý ngoại lệ nếu có lỗi
         echo "Lỗi: " . $e->getMessage();
      }
   }

   function HangHoaTheoNgayKho($ngaythem)
   {
      $sql = "SELECT * FROM hanghoa WHERE ngaythem=" . $ngaythem;
      return $this->hanghoa->get_all($sql);
   }

   function AddKhoHang($tenchungtu, $ngaythem)
   {
      $sql = "INSERT INTO chungtumua (tenchungtu, ngaynhap) VALUES ('" . $tenchungtu . "', '" . $ngaythem . "')";
      $this->hanghoa->get_all($sql);
   }


   function ShowHangHoaHomNay()
   {
      $sql = "SELECT * FROM hanghoa ORDER BY luotxem DESC LIMIT 4";
      return $this->hanghoa->get_all($sql);
   }

   function SanPhamBanChay()
   {
      $sql = "SELECT * FROM hanghoa ORDER BY luotmua DESC LIMIT 4";
      return $this->hanghoa->get_all($sql);
   }

   function showHangHoatang() {
      $sql = "SELECT * FROM hanghoa ORDER BY luotxem DESC";
      return $this->hanghoa->get_all($sql);
   }

   function ShowImg($idhanghoa)
   {
      $sql = "SELECT * FROM hanghoa_img WHERE id_hanghoa=" . $idhanghoa;
      return $this->hanghoa->get_all($sql);
   }

   function BinhLuan($idhanghoa)
   {
      $sql = "SELECT * FROM binhluan WHERE id_hanghoa=" . $idhanghoa;
      return $this->hanghoa->get_all($sql);
   }
}


class NhanVien
{
   private $nhanvien;

   function __construct()
   {
      $this->nhanvien = new DatabaseModel;
   }

   function AddNhanVien($tennhanvien, $ngaysinh, $sodienthoai, $email, $diachi, $hinhanh, $taikhoan, $matkhau, $tenchucvu, $chucvuId)
   {
      $sql = "INSERT INTO nhanvien (tennhanvien, ngaysinh, sodienthoai, email, diachi, hinhanh, taikhoan, matkhau, chucvu, id_phanquyen) VALUES ('" . $tennhanvien . "', '" . $ngaysinh . "', '" . $sodienthoai . "', '" . $email . "', '" . $diachi . "', '" . $hinhanh . "', '" . $taikhoan . "', '" . $matkhau . "', '" . $tenchucvu . "', '" . $chucvuId . "')";
      $this->nhanvien->get_all($sql);
   }

   function UpdateNhanVien($tennhanvien, $ngaysinh, $sodienthoai, $email, $diachi, $hinhanh, $taikhoan, $matkhau, $tenchucvu, $chucvuId, $getId)
   {
      $sql = "UPDATE nhanvien SET tennhanvien='" . $tennhanvien . "', ngaysinh='" . $ngaysinh . "', sodienthoai='" . $sodienthoai . "', email='" . $email . "', diachi='" . $diachi . "', hinhanh='" . $hinhanh . "', taikhoan='" . $taikhoan . "', matkhau='" . $matkhau . "', chucvu='" . $tenchucvu . "', id_phanquyen='" . $chucvuId . "' WHERE id_nhanvien=" . $getId;
      $this->nhanvien->get_all($sql);
   }

   function UpdateNhanVienChucVu($nhanvienId, $chucvuId, $tenchucvu)
   {
      $sql = "UPDATE nhanvien SET chucvu='" . $tenchucvu . "', id_phanquyen ='" . $chucvuId . "'  WHERE id_nhanvien=" . $nhanvienId;
      $this->nhanvien->get_all($sql);
   }

   function AddChucVu($tenchucvu, $luong)
   {
      $sql = "INSERT INTO phanquyennhanvien SET tenchucvu='" . $tenchucvu . "', luong ='" . $luong . "' ";
      $this->nhanvien->get_all($sql);
   }

   function UpdateChucVu($tenchucvu, $luong, $getId)
   {
      $sql = "UPDATE phanquyennhanvien SET tenchucvu='" . $tenchucvu . "', luong ='" . $luong . "'  WHERE id_phanquyen=" . $getId;
      $this->nhanvien->get_all($sql);
   }

   function AddLichLam($tennhanvien, $nhanvienId, $ca, $ngay)
   {
      $sql = "INSERT INTO lichlam (ngay, ca, nhanvien, id_nhanvien) VALUES ('" . $ngay . "', '" . $ca . "', '" . $tennhanvien . "', '" . $nhanvienId . "')";
      $this->nhanvien->get_all($sql);
   }

   function AddCaLam($tennhanvien, $nhanvienId, $giolam, $ngay)
   {
      $sql = "INSERT INTO sogiolam (giolam, ngay, tennhanvien, id_nhanvien) VALUES ('" . $giolam . "', '" . $ngay . "', '" . $tennhanvien . "', '" . $nhanvienId . "')";
      $this->nhanvien->get_all($sql);
   }

   function CaLamTheoThang($startOfMonth, $endOfMonth)
   {
      try {
         // Chuẩn bị truy vấn SQL với tham số ràng buộc
         $sql = "SELECT * FROM sogiolam WHERE ngay BETWEEN :startOfMonth AND :endOfMonth";
         $stmt = $this->nhanvien->prepare($sql);
         $stmt->bindParam(':startOfMonth', $startOfMonth, PDO::PARAM_STR);
         $stmt->bindParam(':endOfMonth', $endOfMonth, PDO::PARAM_STR);

         // Thực thi truy vấn
         $stmt->execute();

         // Lấy kết quả
         $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

         return $result;
      } catch (PDOException $e) {
         // Xử lý ngoại lệ nếu có lỗi
         echo "Lỗi: " . $e->getMessage();
      }
   }

   function getByIdThuong()
   {
      $sql = "SELECT * FROM thuongphat WHERE hiden = 0";
      return $this->nhanvien->get_all($sql);
   }

   function AddTienThuong($nhanvienId, $sotienthuong, $noidungthuong)
   {
      $sql = "INSERT INTO thuongphat (noidungthuong, sotienthuong, hiden, id_nhanvien) VALUES ('" . $noidungthuong . "', '" . $sotienthuong . "', 0, '" . $nhanvienId . "')";
      $this->nhanvien->get_all($sql);
   }
   function getByIdPhat()
   {
      $sql = "SELECT * FROM thuongphat WHERE hiden = 1";
      return $this->nhanvien->get_all($sql);
   }

   function AddTienPhat($nhanvienId, $sotienthuong, $noidungthuong)
   {
      $sql = "INSERT INTO thuongphat (noidungphat, sotienphat, hiden, id_nhanvien) VALUES ('" . $noidungthuong . "', '" . $sotienthuong . "', 1, '" . $nhanvienId . "')";
      $this->nhanvien->get_all($sql);
   }

   function updateability($hienthi, $idnhanvien) {
      $sql = "UPDATE nhanvien SET ability='" . $hienthi . "' WHERE id_nhanvien=" . $idnhanvien;
      $this->nhanvien->get_all($sql);
   }
}

class DonHang
{
   private $donhang;
   function __construct()
   {
      $this->donhang = new DatabaseModel;
   }

   function hoadontheoId()
   {
      $sql = "SELECT * FROM thuongphat WHERE hiden = 0";
      return $this->donhang->get_all($sql);
   }

   function taodonhang($tongdonhang, $tenkhachhang, $madh, $idkhachhang)
   {
      $sql = "INSERT INTO giohang (madonhang, tenkhachhang, tongdonhang, id_khachhang) VALUES ('" . $madh . "', '" . $tenkhachhang . "', '" . $tongdonhang . "', '" . $idkhachhang . "')";
      $this->donhang->get_all($sql);
   }

   function themhanghoavaocart($madh, $tensanpham, $gia, $soluong, $idkhachhang)
   {
      $sql = "INSERT INTO tbl_oder (madonhang, tendonhang, gia, soluong, id_khachhang) VALUES ('" . $madh . "', '" . $tensanpham . "', '" . $gia . "', '" . $soluong . "', '" . $idkhachhang . "')";
      $this->donhang->get_all($sql);
   }

   function getByIdAll($madh)
   {
      $sql = "SELECT * FROM tbl_oder WHERE madonhang=" . $madh;
      return $this->donhang->get_all($sql);
   }

   function donhangtrangthai()
   {
      $sql = "SELECT * FROM giohang WHERE trangthai = 1";
      return $this->donhang->get_all($sql);
   }

   function donhangtrangthaii()
   {
      $sql = "SELECT * FROM giohang WHERE trangthai = 0";
      return $this->donhang->get_all($sql);
   }

   function donhangtinhtrangnew() {
      $sql = "SELECT * FROM giohang WHERE tinhtrang = 1";
      return $this->donhang->get_all($sql);
   }

   function donhangtinhtrangdaxem() {
      $sql = "SELECT * FROM giohang WHERE tinhtrang = 0";
      return $this->donhang->get_all($sql);
   }

   function updategiohangtinhtrang($idgiohang) {
      $sql = "UPDATE giohang SET tinhtrang=0 WHERE id_giohang=" . $idgiohang;
      $this->donhang->get_all($sql);
   }

   function updategiohangtrangthai($idgiohang) {
      $sql = "UPDATE giohang SET trangthai=0 WHERE id_giohang=" . $idgiohang;
      $this->donhang->get_all($sql);
   }
}
class KhachHang
{

   private $khachhang;
   function __construct()
   {
      $this->khachhang = new DatabaseModel;
   }

   function updatekhachhang($email, $sodienthoai, $matkhau, $idkhachhang)
   {

      $sql = "UPDATE khachhang SET email='" . $email . "', sodienthoai='" . $sodienthoai . "', matkhau='" . $matkhau . "' WHERE id_khachhang=" . $idkhachhang;
      $this->khachhang->get_all($sql);
   }

   function UpdateAbilityKhachHang($abl, $idkhachhang)
   {
      $sql = "UPDATE khachhang SET ability='" . $abl . "' WHERE id_khachhang=" . $idkhachhang;
      $this->khachhang->get_all($sql);
   }


   function AddKhachHang($tenkhachhang, $gioitinh, $sodienthoai, $diachi, $email, $tendangnhap, $matkhau)
   {
      $sql = "INSERT INTO khachhang (tenkhachhang, gioitinh, sodienthoai, diachi, email, tendangnhap, matkhau) VALUES ('" . $tenkhachhang . "', '" . $gioitinh . "', '" . $sodienthoai . "', '" . $diachi . "', '" . $email . "', '" . $tendangnhap . "', '" . $matkhau . "')";
      $this->khachhang->get_all($sql);
   }
}


class ChucNang
{
   private $chucnang;
   function __construct()
   {
      $this->chucnang = new DatabaseModel;
   }

   function TimKiemHangHoa($timkiemhanghoa)
   { // Thay 'Tên cần tìm' bằng tên bạn muốn tìm kiếm

      // Truy vấn dữ liệu từ CSDL
      $sql = "SELECT * FROM hanghoa WHERE tenhanghoa LIKE '%$timkiemhanghoa%'";

      // Lấy kết quả và hiển thị
      return $this->chucnang->get_all($sql);
   }

   function updateluotxem($luotxem, $idhanghoa) {
      $sql = "UPDATE hanghoa SET luotxem='" . $luotxem . "' WHERE id_hanghoa=" . $idhanghoa;
      $this->chucnang->get_all($sql);
   }
}

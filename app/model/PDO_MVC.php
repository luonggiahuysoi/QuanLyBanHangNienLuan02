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

   function AddHangHoa($tenhanghoa, $masanpham, $gia, $giasale, $hinhanh, $mota, $tendanhmuc, $iddanhmuc)
   {
      $sql = "INSERT INTO hanghoa (tenhanghoa,id_mahanghoa, gia, giasale, anhhanghoa, mota, tendanhmuc, id_danhmuc) VALUES ('" . $tenhanghoa . "', '" . $masanpham . "' , '" . $gia . "', '" . $giasale . "', '" . $hinhanh . "', '" . $mota . "', '" . $tendanhmuc . "', '" . $iddanhmuc . "')";
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
      } catch(PDOException $e) {
         // Xử lý ngoại lệ nếu có lỗi
         echo "Lỗi: " . $e->getMessage();
      }
   }
}

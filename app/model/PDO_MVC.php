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

   function uploadImgHangHoa($hinhanh1, $hinhanh2, $hinhanh3, $hinhanh4, $idimghanghoa)
   {
      $sql = "UPDATE hanghoa_img SET hinh1='" . $hinhanh1 . "', hinh2='" . $hinhanh2 . "', hinh3='" . $hinhanh3 . "', hinh4='" . $hinhanh4 . "' WHERE id_imghanghoa=" . $idimghanghoa;
      $this->hanghoa->get_all($sql);
   }
}

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

   function UpdateDanhMucGetbyId($tendanhmuc, $hinhanh, $iddanhmuc) {
      $sql = "UPDATE danhmuc SET tendanhmuc='" . $tendanhmuc . "', hinhanh='" . $hinhanh . "' WHERE id_danhmuc=" . $iddanhmuc;
      $this->danhmuc->get_all($sql);
   }

   
   function AddDanhMuc($tendanhmuc, $hinhanh1) {
      $sql = "INSERT INTO danhmuc (tendanhmuc, hinhanh) VALUES ('".$tendanhmuc."', '".$hinhanh1."')";
      $this->danhmuc->get_all($sql);
   }


}

?>
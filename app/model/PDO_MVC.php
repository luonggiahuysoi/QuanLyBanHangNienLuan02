<?php

   class DungChung {
      private $dungchung; 
      function __construct() {
         $this->dungchung=new DatabaseModel;
      }

      function ShowDungChung() {
         
      }

   }


   // Danh mục

   class DanhMuc {
      private $danhmuc;
      function __construct() {
         $this->danhmuc=new DatabaseModel;
      }

      function HienDanhMuc() {
         $sql = "SELECT * FROM danhmuc";
         return $this->danhmuc->get_all($sql);
     }




   }

?>
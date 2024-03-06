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

   if(isset($_GET['act'])) {
        switch($_GET['act']) {

            //danh muc

            case "danhmuc":
                $danhmuc = new DungChung;
                $HienDanhMuc = $danhmuc-> ShowDungChung('danhmuc');
                require_once "../app/view/danhmuc/danhmuc.php";
                break;

            case "updatehienthi":
                if(isset($_GET['iddanhmuc'])) {
                    $getId = $_GET['iddanhmuc'];
                    $idddanhmuc = new DungChung;
                    $LayIdDanhMuc = $iddanhmuc->getByIdAll('danhmuc', 'id_danhmuc', $getId);
                    var_dump($LayIdDanhMuc);

                }



                $danhmuc = new DungChung;
                $HienDanhMuc = $danhmuc-> ShowDungChung('danhmuc');
                require_once "../app/view/danhmuc/danhmuc.php";
                break;





        }





   } else {

    //    include "../app/view/view_admin/center.php";
       
   }






?>
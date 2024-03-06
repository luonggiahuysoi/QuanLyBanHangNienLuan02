<?php
   session_start();
   ob_start();
   // Model
   include "../app/model/er.php";
   include "../app/model/connectdb.php";
   include "../app/model/PDO_MVC.php";

   //content header

   include "../app/view/view_admin/header.php";









   include "../app/view/view_admin/center.php";
   
?>
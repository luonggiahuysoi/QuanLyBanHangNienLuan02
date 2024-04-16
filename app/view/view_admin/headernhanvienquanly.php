<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   <link rel="stylesheet" href="../public/css/All.css">
   <link rel="stylesheet" href="../public/css/admin.css">


   <!-- lib  -->
   <link rel="stylesheet" href="../public/lib/Hover-master/css/hover-min.css">

   <!-- jquery  -->
   <script src="../public/js/jquery-3.6.3.min.js"></script>
   <script src="../public/js/admin_main.js"></script>

   <script src="../public/js/danhmuc.js"></script>
   <title>Document</title>
</head>

<body>
   <div class="admin_view">
      <!-- nav -->
      <div class="nav">
         <div class="nav_view">
            <div class="nav_view_header">
               <h4>Trang quản lý</h4>
            </div>
            <div class="nav_view_center">
               <div class="item_cha">
                  <a class="admin_home" href="index.php"><i class="bi bi-house-fill"></i> Trang
                     chủ</a>
               </div>
            </div>

            <!--=========================== NOTE: Nhân viên ===================== -->

            <div class="nav_view_center magintop_nav">
               <div class="item_cha" id="item_cha">
                  <a><i style="margin-right: 5px;" class="bi bi-person-badge-fill"></i> Quản lý nhân viên</a>
                  <p class="plus_r"><i class="bi bi-chevron-down"></i></p>
               </div>
               <div class="item-con" id="item-con">
                  <div class="item-con_list" id="">
                     <a href="index.php?act=nhanvien"><i class="bi bi-dot"></i>Thông tin nhân viên</a>
                  </div>
                  <div class="item-con_list">
                     <a href="index.php?act=luongnhanvien"><i class="bi bi-dot"></i>Lương nhân viên</a>
                  </div>
                  <div class="item-con_list">
                     <a href="index.php?act=lichlam"><i class="bi bi-dot"></i>Lịch làm</a>
                  </div>
                  <div class="item-con_list item-con_listout" id="close_nav">
                     <a href="#"><i class="bi bi-box-arrow-in-left"></i>Trở về</a>
                  </div>

               </div>
            </div>

            <!--=========================== NOTE: Hàng hóa ===================== -->

            <div class="nav_view_center magintop_nav">
               <div class="item_cha" id="item_cha2">
                  <a><i style="margin-right: 5px;" class="bi bi-cart-plus"></i> Quản lý hàng hóa</a>
                  <p class="plus_r"><i class="bi bi-chevron-down"></i></p>
               </div>
               <div class="item-con" id="item-con2">
                  <div class="item-con_list" id="">
                     <a href="index.php?act=danhmuc"><i class="bi bi-dot"></i>Quản lý danh mục</a>
                  </div>
                  <div class="item-con_list">
                     <a href="index.php?act=sanpham"><i class="bi bi-dot"></i>Quản lý sản phẩm</a>
                  </div>
                  <div class="item-con_list">
                     <a href="index.php?act=sanphamimg"><i class="bi bi-dot"></i>Quản lý hình ảnh sản phẩm</a>
                  </div>
                  <div class="item-con_list">
                     <a href="index.php?act=kho"><i class="bi bi-dot"></i>Quản lý kho</a>
                  </div>
                  <div class="item-con_list item-con_listout" id="close_nav2">
                     <a href=""><i class="bi bi-box-arrow-in-left"></i>Trở về</a>
                  </div>
               </div>
            </div>


            <!--=========================== NOTE: Đơn hàng ===================== -->


            <div class="nav_view_center magintop_nav">
               <div class="item_cha" id="item_cha3">
                  <a><i style="margin-right: 5px;" class="bi bi-bag-plus"></i>Quản lý đơn hàng</a>
                  <p class="plus_r"><i class="bi bi-chevron-down"></i></p>
               </div>
               <div class="item-con" id="item-con3">
                  <div class="item-con_list">
                     <a href="index.php?act=listdonhang"><i class="bi bi-dot"></i>Danh sách đơn hàng</a>
                  </div>
                  <div class="item-con_list" id="">
                     <a href="index.php?act=listdonhangnew"><i class="bi bi-dot"></i>Đơn mới</a>
                  </div>
                  <div class="item-con_list" id="">
                     <a href="index.php?act=listdonhangdaxem"><i class="bi bi-dot"></i>Đơn đã xem</a>
                  </div>
                  <div class="item-con_list" id="">
                     <a href="index.php?act=listdonhangdaxong"><i class="bi bi-dot"></i>Đơn đã hoàng thành</a>
                  </div>
                  <div class="item-con_list item-con_listout" id="close_nav3">
                     <a href=""><i class="bi bi-box-arrow-in-left"></i>Trở về</a>
                  </div>
               </div>
            </div>


         </div>
      </div>

      <style>
         .item_cha a {
            margin-left: 30px;
            text-decoration: none;
            color: black;
         }


         .item_cha:hover a {
            cursor: pointer;
            background-color: var(--color-black);
            color: white;
         }

         .dongphanquyen {
            display: none !important;
         }
      </style>
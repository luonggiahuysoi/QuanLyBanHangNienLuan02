<?php
$showluong = '';
foreach ($shownhanvien as $shownhanvienn) {
   extract($shownhanvienn);

   // tổng lương phạt
   $tongluongphat = 0;
   foreach ($showluongphat as $showluongphatt) {
      if($shownhanvienn['id_nhanvien'] == $showluongphatt['id_nhanvien']) {
         $tongluongphat = $tongluongphat + $showluongphatt['sotienphat'];
      }
   }

   // tổng tiền thưởng
   $tongtienthuong = 0;
   foreach($showluongthuong as $showluongthuongg) {
      if($shownhanvienn['id_nhanvien'] == $showluongthuongg['id_nhanvien']) {
         $tongtienthuong = $tongtienthuong + $showluongthuongg['sotienthuong'];
      }


   }




   // ======= Tính tổng giờ làm ==========
   $tonggiolamcanhan = 0;
   foreach ($showgiolam as $showgiolamm) {
      if ($shownhanvienn['id_nhanvien'] == $showgiolamm['id_nhanvien']) {
         $tonggiolamcanhan += $showgiolamm['giolam'];
      }
   }

   // ====== Tính tổng tiền =========
   $tongtienluong = 0;
   foreach ($showphanquyen as $showphanquyenn) {
      if ($shownhanvienn['id_phanquyen'] == $showphanquyenn['id_phanquyen']) {
         $tongtienluong = $showphanquyenn['luong'] * $tonggiolamcanhan;

      }
   }

   // == show luong == 

   $showluong .= '
        <div class="table_th table_tr list-item producttt" data-price="">
                    <div class="table_name_image table__bottom_center table_name_imagee tendanhmuc">
                        <p>' . $tennhanvien . '</p>
                    </div>
                    <div class="table_hidden table__bottom_center">
                        <p>' . $chucvu . '</p>
                    </div>
                    <div class="table_view_category table__bottom_center">
                        <p>' . $tonggiolamcanhan . '</p>
                    </div>
                    <div class="table_view_category table__bottom_center email">
                        <p>'.$tongtienthuong.'</p>
                    </div>
                    <div class="table_view_category table__bottom_center email">
                        <p>'.$tongluongphat.'</p>
                    </div>
                    <div class="table_view_category table__bottom_center email">
                        <p>' . number_format($tongtienluong) . ' vnđ</p>
                    </div>
                    <div class="table_settin table__bottom_center setting">
                        <div class="table_show_setting">
                            <p><i class="bi bi-gear-fill"></i></p>
                        </div>
                        <div class="table_show_setting_clone">
                            <p>
                                <a  style="color:red"  href="index.php?act=deletenhanvienluongnhanvien&idnhanvien=' . $id_nhanvien . '">
                                    <i class="bi bi-trash-fill"></i>
                                </a>
                            </p>

                        </div>
                    </div>
        </div>
        ';
}
?>


<!-- <======================= Hiện số lượng ========================> -->

<?php
$soluong = '';
$i = 0;
foreach ($shownhanvien as $shownhanvienn) {
   extract($shownhanvienn);
   $i++;
}

?>


<!--=============================================== center ===========================================-->
<div class="content">

   <div class="content_top">

      <!-- close menu -->
      <div class="Close_nav_menu_content hvr-grow-shadow">
         <i class="bi bi-justify"></i>
      </div>

      <!-- search -->
      <div class="content_top-search">
         <form action="">
            <input type="text" id="searchInput" class="search-input" placeholder="Tìm kiếm...">
            <input type="submit" value="Search" class="btn_search_header_content">
         </form>
      </div>

      <!-- nav menu -->
      <div class="content_top_right_admin">
         <div class="content_top_right_admin_view">
            <div class="content_top_right_admin_view_user">
               <img src="./public/img/tải xuống.jfif" alt="">
               <a href=""><i class="bi bi-three-dots-vertical"></i>Sign In</a>

            </div>
            <div class="content_top_right_admin_view_setting">
               <p class="hvr-glow"><i class="bi bi-bell-fill"></i></p>
               <p class="hvr-glow"><i class="bi bi-gear-fill"></i></p>
            </div>
         </div>
      </div>



   </div>


   <!--=============================================== bottom ============================================-->

   <div class="content_bottom">
      <div class="hiden_content_bottom"></div>
      <div class="content_bottom_link">
         <a href="" style="color: #999;">Trang chủ</a>
         <p>/</p>
         <a href="" style="color: #464646;">Lương nhân viên</a>
      </div>

      <div class="content__bottom-adddm">
         <!-- <input type="button" value="+ Thêm nhân viên" class="btn_show_add_danhmuc"> -->
         <button class="btn_show_giolamm hvr-grow-shadow">Chi tiết lương thưởng</button>
         <button class="btn_show_giolammm">Chi tiết lương phạt</button>
      </div>

      <!-- view danh muc -->

      <div class="content_bottom_view">

         <!-- header  -->

         <div class="content_bottom_view_header">
            <div>
               <p>Table lương nhân viên</p>
            </div>
            <br>
            <div>
               <div style="display: flex;  align-items: center;">
                  <p style="color: #555;">Tổng số nhân viên:</p>
                  <p style="margin-left: 1%; color: black;">x
                     <?= $i ?>
                  </p>
               </div>
            </div>
         </div>

         <!-- center  -->

         <div class="content_bottom_table">
            <div class="padding_table"></div>

            <!-- table  -->
            <div class="table_th">
               <div class="table_name_image table__bottom_center">
                  <p>Tên nhân viên</p>
               </div>
               <div class="table_hidden table__bottom_center">
                  <p>Chức vụ</p>
               </div>
               <div class="table_hidden table__bottom_center">
                  <p>Giờ làm</p>
               </div>
               <div class="table_hidden table__bottom_center">
                  <p>Lương thưởng</p>
               </div>
               <div class="table_hidden table__bottom_center">
                  <p>Lương phạt</p>
               </div>
               <div class="table_hidden table__bottom_center">
                  <p>Tổng lương</p>
               </div>
               <div class="table_settin table__bottom_center">
                  <p>Cài đặt</p>
                  <p></p>
               </div>
            </div>



            <?= $showluong ?>



         </div>
      </div>


   </div>

</div>


<style>
   .email {
      overflow-x: auto;
   }

   .table_name_image {
      width: 30%;
   }
</style>



<style>
   .updatedanhmuc {
      position: absolute;
      display: none;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 100vh;
      background-color: #a3a3a341;
      z-index: 11;
      top: 0;

   }

   .updatedm_view {
      width: 75%;
      height: 95%;
      background-color: #fff;
      box-shadow: rgb(53, 64, 77) 0px 20px 30px -10px;
      display: flex;
      flex-direction: column;
      align-items: center;
   }

   .updatedm_h3 {
      position: relative;
      width: 110%;
      height: 15%;
      display: flex;
      align-items: center;
      background: #000000;
      color: white;
      box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
      border-radius: 10px;
      top: -2%;
   }

   .updatedm_h3 p {
      font-size: 1.2rem;
      font-weight: 650;
      display: flex;
      position: relative;
      align-items: center;
      left: 43%;
   }

   .updatdm_content {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      gap: 20px;
      margin-top: 20%;
   }





   /* add dm  */
   .content__bottom-adddm {
      margin: 1% 0 0 10%;
   }

   .content__bottom-adddm>button {
      font-size: 0.9rem;
      font-weight: 550;
      padding: 5px 10px;
      cursor: pointer;
      margin: 0 10px;
   }

   .content__bottom-adddm>button:hover {
      background-color: black;
      color: white;
      font-weight: 600;
   }

   .Close_nav_menu_content {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
   }

   .updatesp_btn {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: -10%;
   }
</style>



<!--===================== Chi tiết lương thưởng ============== -->

<?php
$listnhanvienshoww = '';
foreach ($shownhanvien as $shownhanvienn) {
   extract($shownhanvienn);
   $listnhanvienshoww .= '
      <option value="' . $id_nhanvien . '">' . $tennhanvien . '</option>
   ';
}
?>
<div class="Them_Lich_Lammmm">
   <div class=" View_Them_Lich_lAMM">
      <div class="lichlam_title lichlam_luong">
         <h3 style="color:#fff;">Chi tiết lương phạt</h3>
      </div>
      <form action="index.php?act=addluongphat" method="post">
         <div class="icon_show_lichlam">

            <div>
               <select name="nhanvien" id="dropdownnluongphat">
                  <?= $listnhanvienshoww ?>
               </select>

               <script>
                  $(document).ready(function () {
                     // Sử dụng Select2 cho dropdown
                     $('#dropdownnluongphat').select2();
                  });
               </script>
               <input type="text" placeholder="Số tiền phạt" name="sotienphat">
               <input type="text" placeholder="Nội dung phạt" name="noidungphat">
               <input type="submit" value="Thêm" class="add_luongg" name="themtienphatt">
            </div>
            <p class="icon_show_lichlamm"><i class="bi bi-x-circle"></i></p>

         </div>
      </form>
      <div class="show_search_lichlam">
         <input type="text" name="search_giolam" id="searchGioLam" placeholder="Nhập để tìm kiếm nhân viên">
      </div>
      <div class="lichlam_mainover">
         <div class="lichlam_th">
            <div class="lichlam_th__item">
               <p>Tên nhân viên</p>
            </div>
            <div class="lichlam_th__item">
               <p>Lý do lương phạt</p>
            </div>
            <div class="lichlam_th__item">
               <p>Số tiền</p>
            </div>
            <div class="lichlam_th__item">
               <p>Cài đặt</p>
            </div>
         </div>
         <?php

         foreach ($showluongphat as $showluongphatt) {
            extract($showluongphatt);
            $tennhanvien = '';
            foreach ($shownhanvien as $shownhanvienn) {
               if ($shownhanvienn['id_nhanvien'] == $showluongphatt['id_nhanvien']) {
                  $tennhanvien = $shownhanvienn['tennhanvien'];
               }
            }
            echo '
                <div class="lichlam_tr list-item">
            <div class="lichlam_th__item">
               <p>' . $tennhanvien . '</p>
            </div>
            <div class="lichlam_th__item">
               <p>' . $noidungphat . '</p>
            </div>
            <div class="lichlam_th__item">
               <p>' . $sotienphat . '</p>
            </div>
            <div style="display:flex;" class="lichlam_th__item">
               <p>
                  <a style="color:red" href="index.php?act=deleteluongphat&idluongphat=' . $id_thuongphat . '">
                     <i class="bi bi-trash-fill"></i>
                  </a>
               </p>
            </div>
         </div>
                ';
         }

         ?>


      </div>
   </div>
</div>
</div>

<script>


   $(document).ready(function () {
      $(".icon_show_lichlamm").click(function (e) {
         $(".Them_Lich_Lammmm").hide();

      });
   });
   $(document).ready(function () {
      $(".btn_show_giolammm").click(function (e) {
         $(".Them_Lich_Lammmm").show();

      });
   });

</script>

<style>
   .Them_Lich_Lammm,
   .Them_Lich_Lammmm {
      display: none;
      position: absolute;
      width: 100%;
      height: 100vh;
      background-color: rgba(184, 184, 184, 0.1);
      justify-content: center;
      align-items: center;
      z-index: 111;
      top: 20%;
      left: 50%;
      transform: translateX(-30%);
   }

   .View_Them_Lich_lAMM {
      position: relative;
      width: 70%;
      height: 70%;
      background-color: white;
      border-radius: 10px;
      box-shadow: rgba(0, 0, 0, 0.25) 0px 0.0625em 0.0625em, rgba(0, 0, 0, 0.25) 0px 0.125em 0.5em, rgba(255, 255, 255, 0.1) 0px 0px 0px 1px inset;
      z-index: 4;
   }

   .lichlam_mainover {
      position: relative;
      overflow: auto;
      height: 70%;
   }



   .lichlam_th {
      border-bottom: 1px solid #444;
      background-color: #e2e2e2;
      margin-top: 5%;
      font-weight: 550;
      font-size: 1.1rem;
   }

   .lichlam_tr {
      font-size: 0.9rem;
   }

   .lichlam_th,
   .lichlam_tr {
      /* border-bottom: 1px solid black; */
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      height: 40px;
   }

   .lichlam_th__item {
      color: black;
      width: 30%;
   }

   .lichlam_show {
      height: 60px;
      text-align: center;
      line-height: 60px;
      border-radius: 4px;
   }

   .lichlam_show h3 {
      font-size: 1.5rem;
   }

   .lichlam_tr div:nth-child(4) {
      justify-content: center;
      align-items: center;
   }

   .icon_show_lichlam {
      position: absolute;
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 10%;
      width: 100%;
      z-index: 5;
   }

   .hover_icon:hover {
      cursor: pointer;
   }

   .icon_show_lichlam i {
      font-size: 1.5rem;
      margin-right: 20px;
      color: red;
   }

   .search_day {
      position: relative;
      width: 80%;
      height: 100%;
      display: flex;
      justify-content: left;
      align-items: center;
   }


   .show_search_lichlam {
      position: relative;
      width: 100%;
      height: 9%;
      background-color: #5585b5;
      display: flex;
      justify-content: right;
      align-items: center;
   }

   .show_search_lichlam input {
      position: relative;
      width: 20%;
      height: 50%;
      margin-right: 18%;
      z-index: 5;
   }
</style>

<style>
   .lichlam_luong {
      height: 70px;
      background-color: #282e3d;
      text-align: center;
      line-height: 70px;
      font-size: 1.3rem;
      border-radius: 5px;
   }

   #searchGioLam {
      height: 30px;
      outline: none;
      padding: 5px 10px;
   }

   .icon_show_lichlam div input {
      outline: none;
      height: 30px;
      padding: 5px 10px;
      border-radius: 5px;
      border: none;
      border-bottom: 1px solid black;
   }

   .add_luongg {
      font-weight: 600;
   }

   .add_luongg:hover {
      background-color: black;
      color: #fff;
   }
</style>









<!--===================== Chi tiết lương phat ============== -->
<?php
$listnhanvienshow = '';
foreach ($shownhanvien as $shownhanvienn) {
   extract($shownhanvienn);
   $listnhanvienshow .= '
      <option value="' . $id_nhanvien . '">' . $tennhanvien . '</option>
   ';
}
?>

<div class="Them_Lich_Lammm">
   <div class=" View_Them_Lich_lAMM">
      <div class="lichlam_title lichlam_luong">
         <h3 style="color:#fff;">Chi tiết lương thưởng</h3>
      </div>
      <form action="index.php?act=addluongthuong" method="post">
         <div class="icon_show_lichlam">


            <div>
               <select name="nhanvien" id="dropdownnluongthuong">
                  <?= $listnhanvienshow ?>
               </select>

               <script>
                  $(document).ready(function () {
                     // Sử dụng Select2 cho dropdown
                     $('#dropdownnluongthuong').select2();
                  });
               </script>
               <input type="text" placeholder="Số tiền thưởng" name="sotienthuong">
               <input type="text" placeholder="Nội dung thưởng" name="noidungthuong">
               <input type="submit" value="Thêm" class="add_luongg" name="themluongthuong">
            </div>
            <p class="icon_show_lichlamm"><i class="bi bi-x-circle"></i></p>

         </div>
      </form>
      <div class="show_search_lichlam">
         <input type="text" name="search_giolam" id="searchGioLam" placeholder="Nhập để tìm kiếm nhân viên">
      </div>
      <div class="lichlam_mainover">
         <div class="lichlam_th">
            <div class="lichlam_th__item">
               <p>Tên nhân viên</p>
            </div>
            <div class="lichlam_th__item">
               <p>Lý do lương thưởng</p>
            </div>
            <div class="lichlam_th__item">
               <p>Số tiền</p>
            </div>
            <div class="lichlam_th__item">
               <p>Cài đặt</p>
            </div>
         </div>

         <?php

         foreach ($showluongthuong as $showluongthuongG) {
            extract($showluongthuongG);
            $tennhanvien = '';
            foreach ($shownhanvien as $shownhanvienn) {
               if ($shownhanvienn['id_nhanvien'] == $showluongthuongG['id_nhanvien']) {
                  $tennhanvien = $shownhanvienn['tennhanvien'];
               }
            }
            echo '
                <div class="lichlam_tr list-item">
            <div class="lichlam_th__item">
               <p>' . $tennhanvien . '</p>
            </div>
            <div class="lichlam_th__item">
               <p>' . $noidungthuong . '</p>
            </div>
            <div class="lichlam_th__item">
               <p>' . $sotienthuong . '</p>
            </div>
            <div style="display:flex;" class="lichlam_th__item">
               <p>
                  <a style="color:red" href="index.php?act=deleteluongthuong&idluongthuong=' . $id_thuongphat . '">
                     <i class="bi bi-trash-fill"></i>
                  </a>
               </p>
            </div>
         </div>
                ';
         }

         ?>


      </div>
   </div>
</div>
</div>

<script>
   $(document).ready(function () {
      $(".icon_show_lichlamm").click(function (e) {
         $(".Them_Lich_Lammm").hide();

      });
   });
   $(document).ready(function () {
      $(".btn_show_giolamm").click(function (e) {
         $(".Them_Lich_Lammm").show();

      });
   });
</script>









<!-- -------------------SEARCH---------------------- -->

<script>
   $(document).ready(function () {
      // Xử lý sự kiện khi người dùng nhập vào ô tìm kiếm
      $("#searchInput").on("input", function () {
         var searchText = $(this).val().toLowerCase();

         // Hiển thị hoặc ẩn các phần tử phù hợp với từ khóa tìm kiếm
         $(".list-item").each(function () {
            var itemName = $(this).find(".tendanhmuc p").text().toLowerCase();
            if (itemName.includes(searchText)) {
               $(this).show();
            } else {
               $(this).hide();
            }
         });
      });
   });
</script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
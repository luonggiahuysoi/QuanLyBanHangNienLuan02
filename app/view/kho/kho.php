<?php
$showkhohanghoa = '';
foreach ($listhanghoa as $listhanghoaa) {
   extract($listhanghoaa);
   $tongtien = 0;
   $tongtien = $gia * $soluong;
   $showkhohanghoa .= '
      <div class="table_th table_tr list-item producttt" data-price="' . $gia . '">
      <div class="table_name_image table__bottom_center ">
         <p>Tên sp</p>
      </div>
      <div class="table_view_category table__bottom_center">
         <p>02/04/2024</p>
      </div>
      <div class="table_view_category table__bottom_center">
         <p>
         <a href="" class="kho__link">Xem chi tiết</a>
         </p>
      </div>
   </div>

      ';
}
?>

<!-- =========== DANH MUC LIST============= -->

<?php
// $listdanhmucshow = '';
// foreach ($listdanhmuc as $listdanhmucc) {
//    extract($listdanhmucc);
//    $listdanhmucshow .= '
//       <option value="' . $id_danhmuc . '">' . $tendanhmuc . '</option>
//    ';
// }
?>

<?php
$i = 0;
foreach ($listhanghoa as $listhanghoaa) {
   $i++;
}

?>


<!-- center -->
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


   <!-- bottom -->

   <div class="content_bottom">

      <div class="hiden_content_bottom"></div>

      <!-- link san phẩm  -->

      <div class="content_bottom_link">
         <a href="" style="color: #999;">Trang chủ</a>
         <p>/</p>
         <a href="" style="color: #464646;">Trang kho</a>
      </div>

      <div class="content__bottom-adddm">
         <input type="button" value="+ Cập nhật kho" class="btn_show_add_danhmuc hvr-grow-shadow">
         <form action="index.php?act=khodatesearch" method="post">
            <div class="icon_show_lichlam">
               <div class="search_day">
                  <input type="date" name="tungay" id="" class="date"
                     value="<?php echo $startOfMonth = date("Y-m-01"); ?>">
                  <input type="date" name="denngay" id="" class="date"
                     value="<?php echo $endOfMonth = date("Y-m-t"); ?>">
                  <input type="submit" value="Search" class="timdate" name="timdate">

               </div>
            </div>
         </form>

      </div>

      <!-- view danh muc -->

      <div class="content_bottom_view">

         <!-- header  -->
         <div class="content_bottom_view_header">
            <div>
               <p>Table kho sản phẩm</p>
            </div>
            <br>
            <div>
               <div style="display: flex;  align-items: center;">
                  <p style="color: #555;">Tổng số sản phẩm:</p>
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
                  <p>Tên chứng từ</p>
               </div>
               <div class="table_hidden table__bottom_center">
                  <p>Ngày nhập</p>
               </div>
               <div class="table_settin table__bottom_center">
                  <p>Cài đặt</p>
               </div>
            </div>

            <?= $showkhohanghoa ?>
         </div>
      </div>

   </div>

</div>


<style>
   .table__bottom_center {
      text-align: center;
   }

   .kho__link {
      color: black;
      font-size: 0.9rem;
      font-weight: 550;
      font-family: Arial, Helvetica, sans-serif;
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



   /* add img  */
   .hidden-input {
      font-size: 0;
      color: transparent;
   }


   /* add dm  */
   .content__bottom-adddm {
      margin: 1% 0 0 10%;
   }

   .content__bottom-adddm>input {
      font-size: 0.9rem;
      font-weight: 550;
      padding: 5px 10px;
      cursor: pointer;
      margin: 0 0 1% 6%;

   }

   .content__bottom-adddm>input:hover {
      background-color: black;
      color: white;
      font-weight: 600;
   }

   .content__bottom-adddm>button {
      font-size: 0.9rem;
      font-weight: 550;
      padding: 5px 10px;
      cursor: pointer;

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

   .updatesp_btn input:nth-child(1),
   .updatesp_btn input:nth-child(2) {
      /* height: 40px; */
      font-weight: 550;
      font-size: 0.9rem;
      padding: 8px 20px;
      margin-top: 15%;
      margin-left: 5%;
   }

   .btnsp_them:hover,
   .btnsp_huy:hover,
   .btnsp_close:hover {
      background-color: black;
      color: #fff;
   }

   .btnsp_close {
      padding: 8px 18px;
      font-weight: 550;
      font-size: 0.9rem;
   }

   .updatesp_tensp {
      display: flex;
      justify-content: center;
      align-items: center;

   }
</style>


<!--======================= chi tiet kho ================= -->

<div class="chitietkho">
   <div class="ctkho__title">
      <p>Table chi tiết kho</p>
   </div>
   <div class="ctkho__main">
      <div class="ctkho__day">
         <div class="ctkho__day-input">
            <input type="date" name="tungay" id="" class="date" value="">
            <input type="date" name="denngay" id="" class="date" value="">
            <input type="submit" value="Search" class="timdate" name="timdate">
         </div>
         <div class="ctkho__day-search">
            <input type="search" name="" id="">
            <p class="icon_show_ctkho"><i class="bi bi-x-circle"></i></p>
         </div>
      </div>


      <div class="ctkho__table">
         <div class="lichlam_th">
            <div class="lichlam_th__item">
               <p>Tên hàng hóa</p>
            </div>
            <div class="lichlam_th__item">
               <p>Tồn kho</p>
            </div>
            <div class="lichlam_th__item">
               <p>Giá</p>
            </div>
            <div class="lichlam_th__item">
               <p>Cài đặt</p>
            </div>
         </div>
         <div class="lichlam_tr">
            <div class="lichlam_tr__item">
               <p>sdsdvsvd</p>
            </div>
            <div class="lichlam_tr__item">
               <p>Số lượng</p>
            </div>
            <div class="lichlam_tr__item">
               <p>Giá</p>
            </div>
            <div class="lichlam_tr__item">
               <p>Cài đặt</p>
            </div>
         </div>
      </div>
   </div>
</div>
</div>





<style>
   .chitietkho {
      width: 100%;
      height: 100%;
      position: absolute;
      background-color: #dfdfdf58;
      display: none;
      justify-content: center;
      align-items: center;
      flex-direction: column;
   }

   .ctkho__main {
      width: 70%;
      height: 70%;
      background-color: white;
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
   }

   .ctkho__title {
      width: 73%;
      height: 60px;
      color: white;
      background-color: #121e2f;
      font-size: 1.5rem;
      font-weight: 600;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 5px;
   }

   .ctkho__day {
      position: relative;
      display: flex;
      justify-content: space-evenly;
      align-items: center;
      width: 100%;
      height: 50px;
      background-color: #374c71;
   }

   .ctkho__day-input input {
      height: 30px;
   }

   .timdate {
      border-radius: 5px;
      width: 80px;
      font-weight: 600;
      color: white;
      background-color: #d48c68;
   }

   .ctkho__day-search {
      display: flex;
      gap: 30px;
   }

   .ctkho__day-search input {
      height: 30px;
      outline: none;
      border: none;
      padding: 6px 12px;
   }

   .timdate:hover {
      background-color: #1e2b47;
   }

   .icon_show_ctkho {
      color: red;
      font-size: 1.5rem;
      position: absolute;
      right: 20px;
      cursor: pointer;
   }

   .lichlam_th {
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 2%;
      background-color: #e2e2e2;
   }

   .lichlam_th__item {
      width: 25%;
      height: 40px;
      font-size: 1.1rem;
      text-align: center;
      line-height: 40px;
      font-weight: 550;
   }

   .lichlam_tr {
      display: flex;
      justify-content: center;
      align-items: center;

   }

   .lichlam_tr__item {

      width: 25%;
      height: 40px;
      font-size: 1.1rem;
      text-align: center;
      line-height: 40px;
   }

   .kho__link:hover {
      color: #fc3e34;
   }
</style>


<script>


   $(document).ready(function () {
      $(".icon_show_ctkho").click(function (e) {
         $(".chitietkho").hide();

      });
   });
   $(document).ready(function () {
      $(".kho__link").click(function (e) {
         $(".chitietkho").show();

      });
   });


   $(document).ready(function () {
      $(".chitietkho").css("display", "flex");
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
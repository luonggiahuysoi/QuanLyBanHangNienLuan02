<!-- php database -->
<!-- <?php
$showhh = '';
$showhienthi = '';
foreach ($HienHangHoa as $HienHangHoaa) {
   extract($HienHangHoaa);
   if ($hienthi == 1) {

      $showhienthi = '<i class="bi bi-eye-fill"></i>';
   } else {
      $showhienthi = '<i class="bi bi-eye-slash-fill"></i>';
   }



   $showhh .= '
        <div class="table_th table_tr list-item producttt" data-price="' . $gia . '">
                    <div class="table_name_image table__bottom_center table_name_imagee tendanhmuc">
                        <img src="data:image/png;base64,' . $anhhanghoa . '" alt="">
                        <p>' . $tenhanghoa . '</p>
                    </div>
                    <div class="table_hidden table__bottom_center">
                        <p>
                            <a href="index.php?act=updatehienthi&iddanhmuc=' . $id_hanghoa . '">
                                ' . $showhienthi . '
                            </a>
                        </p>
                    </div>
                    <div class="table_view_category table__bottom_center">
                    <p>' . number_format($gia) . 'Vnđ</p>
                    </div>
                    <div class="table_view_category table__bottom_center">
                    <p>' . number_format($giasale) . 'Vnđ</p>
                </div>  <div class="table_view_category table__bottom_center">
                <p>' . $luotxem . '</p>
            </div>
                    <div class="table_settin table__bottom_center setting">
                        <div class="table_show_setting">
                            <p><i class="bi bi-gear-fill"></i></p>
                        </div>
                        <div class="table_show_setting_clone">
                           <p>
                              <a style="color:black" href="index.php?act=updatehanghoaimg&idhanghoa=' . $id_hanghoa . '">
                                     <i class="bi bi-images"></i>
                              </a>
                          </p>


                            <p>
                                <a href="index.php?act=updatehanghoa&idhanghoa=' . $id_hanghoa . '">
                                    <i class="bi bi-arrow-counterclockwise"></i>
                                </a>
                            </p>
                            <p>
                                <a  style="color:red"  href="index.php?act=deletehanghoa&idhanghoa=' . $id_hanghoa . '">
                                    <i class="bi bi-trash-fill"></i>
                                </a>
                            </p>

                        </div>
                    </div>
        </div>
        ';
}

?> -->


<!-- <======================= Hiện số lượng ========================> -->

<?php
$soluong = '';
$i = 0;
foreach ($HienHangHoa as $HienHangHoasl) {
   extract($HienHangHoasl);
   $i++;
}

?>

<!-- =========== DANH MUC LIST============= -->

<?php
$listdanhmucshow = '';
foreach ($listdanhmuc as $listdanhmucc) {
   extract($listdanhmucc);
   $listdanhmucshow .= '
      <option value="' . $id_danhmuc . '">' . $tendanhmuc . '</option>
   ';
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

      <!-- link danhmuc  -->

      <div class="content_bottom_link">
         <a href="" style="color: #999;">Trang chủ</a>
         <p>/</p>
         <a href="" style="color: #464646;">Trang sản phẩm</a>
      </div>

      <div class="content__bottom-adddm">
         <input type="button" value="+ Thêm sản phẩm" class="btn_show_add_danhmuc">
         <button id="sortButtontang"><i class="bi bi-graph-up-arrow"></i> Giá tăng dần</button>
         <button id="sortButtongiam"><i class="bi bi-graph-down-arrow"></i> Giá giảm dần</button>
      </div>

      <!-- view danh muc -->

      <div class="content_bottom_view">

         <!-- header  -->

         <div class="content_bottom_view_header">
            <div>
               <p>Table sản phẩm</p>
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
                  <p>Thông tin sản phẩm</p>
               </div>
               <div class="table_hidden table__bottom_center">
                  <p>Hiển thị</p>
               </div>
               <div class="table_hidden table__bottom_center">
                  <p>Giá</p>
               </div>
               <div class="table_hidden table__bottom_center">
                  <p>Giá sale</p>
               </div>
               <div class="table_view_category table__bottom_center">
                  <p>Lượt xem</p>
               </div>
               <div class="table_settin table__bottom_center">
                  <p>Cài đặt</p>
                  <p></p>
               </div>
            </div>



            <?= $showhh ?>



         </div>
      </div>


   </div>

</div>







</div>





<!--================================ Danh muc update ========================== -->

<!-- <div class="updatedanhmuc updatedanhmucjs">
    <div class="updatedm_view">
        <div class="updatedm_h3">
            <p>Update Danh Mục</p>

        </div>
        <form action="index.php?act=updatedanhmuc" method="post" enctype="multipart/form-data">

            <div class="updatdm_content">
                <input type="text" name="tendanhmuc" id="" placeholder="Tên danh mục"
                    value="<?= $id_onedanhmuc[0]['tendanhmuc'] ?>">
                <div class="updatedm_img">
                    <label for="file">
                        <img height="80px" width="90px" src="../public/img/folder.png" alt="Add Image">
                    </label>
                    <input style="display:none;" type="file" name="fileimage" id="file">
                </div>
                <input type="submit" value="Update danh mục" name="btnUpdateDanhMuc">
                <div class="updatesp_btn">
                    <input type="reset" value="" placeholder="Làm lại">
                    <input type="submit" class="danhmnuc_close" value="Đóng" id="closeButton">
                </div>
            </div>


            <input type="hidden" name="iddanhmuc" value="<?= $id_onedanhmuc[0]['id_danhmuc'] ?>">
        </form>
    </div>
</div> -->

<!--================================ Thêm sản phẩm mới ========================== -->

<div class="updatedanhmuc AddDanhMuc">
   <div class="updatedm_view">
      <div class="updatedm_h3">
         <p>Thêm Sản Phẩm</p>
      </div>
      <form action="index.php?act=AddHangHoa" method="post" enctype="multipart/form-data">
         <div class="updatdm_content">
            <div class="updatesp_tensp">
               <input type="text" name="tenhanghoa" id="" placeholder="Tên sản phẩm">
               <div>
                  <select name="danhmuc" id="dropdown">
                     <?= $listdanhmucshow ?>
                  </select>
                  <script>
                     $(document).ready(function () {
                        // Sử dụng Select2 cho dropdown
                        $('#dropdown').select2();
                     });
                  </script>
               </div>
            </div>

            <div class="updatesp_price">
               <input type="text" name="gia" id="" placeholder="Giá sản phẩm">
               <input type="text" name="giasale" id="" placeholder="Giá sale">
            </div>

            <div class="update_mota">
               <textarea name="mota" id="" placeholder="Mô tả sản phẩm"></textarea>
            </div>


            <div class="updatedm_img">
               <label class="custum-file-upload" for="imageInput">
                  <div class="icon">
                     <img src="../public/img/folder.png" fill="" viewBox="0 0 24 24" width="160px" height="115px"
                        id="previewImage" style="border-radius: 5px; border: 1px solid #333; object-fit: cover;">

                     </img>
                  </div>
                  <input type="file" id="imageInput" name="fileimage">
               </label>

            </div>


            <div class="updatesp_btn">
               <input class="btnsp_them" type="submit" value="Update sản phẩm " name="add_hanghoa">
               <input class="btnsp_huy" type="reset" value="Hủy">
            </div>
            <input class="btnsp_close danhmnuc_close_add" type="button" value="Đóng" id="closeButton">
         </div>

      </form>
   </div>
</div>

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

   /* --------------------//ten sp ---------------- */



   .updatesp_tensp {
      margin-bottom: 5%;
   }

   .updatesp_tensp input:nth-child(1) {
      width: 250px;
      height: 33px;
      margin-right: 4%;
      padding: 5px 12px;
      border: none;
      border-bottom: 2px solid black;

   }

   .updatesp_tensp input:nth-child(2) {
      width: 150px;
      height: 33px;
      padding: 5px 12px;
      border: none;
      border-bottom: 2px solid black;


   }

   .updatesp_price {
      display: flex;

   }

   .updatesp_price input:nth-child(1) {
      width: 190px;
      height: 33px;
      margin-right: 4%;
      padding: 5px 12px;
      border: none;
      border-bottom: 2px solid black;


   }

   .updatesp_price input:nth-child(2) {
      width: 160px;
      height: 33px;
      margin-right: 4%;
      padding: 5px 12px;
      border: none;
      border-bottom: 2px solid black;

   }



   .update_mota textarea {
      width: 400px;
      height: 100px;

      padding: 8px 12px;
   }

   /*======================== update- img ===================== */
   .custum-file-upload {
      height: 130px;
      width: 180px;
      display: flex;
      flex-direction: column;
      align-items: space-between;
      gap: 20px;
      cursor: pointer;
      align-items: center;
      justify-content: center;
      border: 2px dashed #cacaca;
      background-color: rgba(255, 255, 255, 1);
      padding: 1.5rem;
      border-radius: 10px;
      box-shadow: 0px 48px 35px -48px rgba(0, 0, 0, 0.1);
   }

   .custum-file-upload .icon {
      display: flex;
      align-items: center;
      justify-content: center;
   }

   .custum-file-upload .icon svg {
      height: 80px;
      fill: rgba(75, 85, 99, 1);
   }

   .custum-file-upload .text {
      display: flex;
      align-items: center;
      justify-content: center;
   }

   .custum-file-upload .text span {
      font-weight: 400;
      color: rgba(75, 85, 99, 1);
   }

   .custum-file-upload input {
      display: none;
   }
</style>


<!--==================================== Them anh ============================== -->



<!-- <div class="">
      <div class="updatedm_view">
         <div class="updatedm_h3">
            <p>Thêm Ảnh Sản Phẩm</p>
         </div>
         <form action="index.php?act=AddHangHoa" method="post" enctype="multipart/form-data">
            <div class="updatdm_content">
               <div class="updatesp_tensp updatesp_main-img">
                  <input type="text" name="tenhanghoa" id="" placeholder="Tên sản phẩm">
                  <input type="text" name="tenhanghoa" id="" placeholder="Mã sản phẩm">
               </div>
               <div class="updatesp_image-list">
                  <div class="updatesp-img">
                     <label class="custum-file-upload" for="imageInput">
                        <div class="icon">
                           <img src="../public/img/folder.png" fill="" viewBox="0 0 24 24" width="160px" height="195px"
                              id="previewImage" style="border-radius: 5px; border: 1px solid #333; object-fit: cover;">

                           </img>
                        </div>
                        <input type="file" id="imageInput" name="fileimage">
                     </label>

                  </div>

                  <div class="updatesp-img">
                     <label class="custum-file-upload" for="imageInput">
                        <div class="icon">
                           <img src="../public/img/folder.png" fill="" viewBox="0 0 24 24" width="160px" height="195px"
                              id="previewImage" style="border-radius: 5px; border: 1px solid #333; object-fit: cover;">

                           </img>
                        </div>
                        <input type="file" id="imageInput" name="fileimage">
                     </label>

                  </div>

                  <div class="updatesp-img">
                     <label class="custum-file-upload" for="imageInput">
                        <div class="icon">
                           <img src="../public/img/folder.png" fill="" viewBox="0 0 24 24" width="160px" height="195px"
                              id="previewImage" style="border-radius: 5px; border: 1px solid #333; object-fit: cover;">

                           </img>
                        </div>
                        <input type="file" id="imageInput" name="fileimage">
                     </label>

                  </div>

                  <div class="updatesp-img">
                     <label class="custum-file-upload" for="imageInput">
                        <div class="icon">
                           <img src="../public/img/folder.png" fill="" viewBox="0 0 24 24" width="160px" height="195px"
                              id="previewImage" style="border-radius: 5px; border: 1px solid #333; object-fit: cover;">

                           </img>
                        </div>
                        <input type="file" id="imageInput" name="fileimage">
                     </label>

                  </div>
               </div>
               <div class="updatesp_btn">
                  <input class="btnsp_them" type="submit" value="Update ảnh " name="add_hanghoa">
                  <input class="btnsp_huy" type="reset" value="Hủy">
               </div>
               <input class="btnsp_close danhmnuc_close_add" type="button" value="Quay lại" id="closeButton">
            </div>

         </form>
      </div>
   </div> -->



<style>
   .updatesp_main-img {
      margin-top: -17%;
   }

   .updatesp_image-list {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 15px;
      margin-bottom: 12%;
   }

   .updatesp-img {
      width: 200px;
      height: 200px;
      border: 1px solid #222;
   }

   .updatesp-img label {
      width: 100%;
      height: 110%;
   }
</style>















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


<!-- ======== jquery tăng giảm ========== -->
<!-- Import jQuery -->


<!-- Đảm bảo đặt mã JavaScript trong thẻ script -->
<script>
   $(document).ready(function () {
      $(".table_setting").on("click", ".table_show_setting", function () {
         // Xử lý sự kiện khi nhấn vào biểu tượng bánh răng
         console.log("Đã click vào biểu tượng bánh răng");
      });

      $("#sortButtontang").on("click", function () {
         // Lấy danh sách sản phẩm và sắp xếp theo giá
         const $listItems = $(".list-item")
            .detach(); // Sử dụng detach để giữ sự kiện và dữ liệu đính kèm

         $listItems.sort(function (a, b) {
            const priceA = parseFloat($(a).data("price"));
            const priceB = parseFloat($(b).data("price"));
            return priceA - priceB;
         });

         // Xóa sản phẩm cũ và hiển thị sản phẩm mới
         $(".producttt").remove(); // Xóa tất cả các phần tử con
         $(".content_bottom_table").append($listItems); // Thêm danh sách đã sắp xếp
      });
   });
</script>



<!-- Import jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Đảm bảo đặt mã JavaScript trong thẻ script -->
<script>
   $(document).ready(function () {
      $(".table_setting").on("click", ".table_show_setting", function () {
         // Xử lý sự kiện khi nhấn vào biểu tượng bánh răng
         console.log("Đã click vào biểu tượng bánh răng");
      });

      $("#sortButtongiam").on("click", function () {
         // Lấy danh sách sản phẩm và sắp xếp theo giá
         const $listItems = $(".list-item")
            .detach(); // Sử dụng detach để giữ sự kiện và dữ liệu đính kèm

         $listItems.sort(function (a, b) {
            const priceA = parseFloat($(a).data("price"));
            const priceB = parseFloat($(b).data("price"));
            return priceB - priceA;
         });

         // Xóa sản phẩm cũ và hiển thị sản phẩm mới
         $(".producttt").remove(); // Xóa tất cả các phần tử con
         $(".content_bottom_table").append($listItems); // Thêm danh sách đã sắp xếp
      });
   });
</script>



<!-- ================jsquery hiện ảnh ============ -->

<script>
   $(document).ready(function () {
      $("#imageInput").change(function () {
         var input = this;

         if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
               $("#previewImage").attr("src", e.target.result);
               $("#previewImage").css("display", "flex");
            };

            reader.readAsDataURL(input.files[0]);
         }
      });
   });
</script>







<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
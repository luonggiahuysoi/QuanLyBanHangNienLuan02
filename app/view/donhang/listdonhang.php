<!-- php database -->
<?php
// $showhh = '';
// $showhienthi = '';
// foreach ($HienHangHoa as $HienHangHoaa) {
//    extract($HienHangHoaa);
//    if ($hienthi == 1) {

//       $showhienthi = '<i class="bi bi-eye-fill"></i>';
//    } else {
//       $showhienthi = '<i class="bi bi-eye-slash-fill"></i>';
//    }



//    $showhh .= '
//         <div class="table_th table_tr list-item producttt" data-price="' . $gia . '">
//                     <div class="table_name_image table__bottom_center table_name_imagee tendanhmuc">
//                         <img src="data:image/png;base64,' . $anhhanghoa . '" alt="">
//                         <p>' . $tenhanghoa . '</p>
//                     </div>
//                     <div class="table_hidden table__bottom_center">
//                         <p>
//                             <a href="index.php?act=UpdateHienThiSanPham&idhanghoa=' . $id_hanghoa . '">
//                                 ' . $showhienthi . '
//                             </a>
//                         </p>
//                     </div>
//                     <div class="table_view_category table__bottom_center">
//                     <p>' . number_format($gia) . 'Vnđ</p>
//                     </div>
//                     <div class="table_view_category table__bottom_center">
//                     <p>' . number_format($giasale) . 'Vnđ</p>
//                 </div>  <div class="table_view_category table__bottom_center">
//                 <p>' . $luotxem . '</p>
//             </div>
//                     <div class="table_settin table__bottom_center setting">
//                         <div class="table_show_setting">
//                             <p><i class="bi bi-gear-fill"></i></p>
//                         </div>
//                         <div class="table_show_setting_clone">
//                            <p>
//                               <a style="color:black" href="index.php?act=updatehanghoaimg&idhanghoa=' . $id_hanghoa . '">
//                                      <i class="bi bi-images"></i>
//                               </a>
//                           </p>


//                             <p>
//                                 <a href="index.php?act=updatehanghoa&idhanghoa=' . $id_hanghoa . '">
//                                     <i class="bi bi-arrow-counterclockwise"></i>
//                                 </a>
//                             </p>
//                             <p>
//                                 <a  style="color:red"  href="index.php?act=deletehanghoa&idhanghoa=' . $id_hanghoa . '">
//                                     <i class="bi bi-trash-fill"></i>
//                                 </a>
//                             </p>

//                         </div>
//                     </div>
//         </div>
//         ';
// }

?>


<!-- <======================= Hiện số lượng ========================> -->

<?php
// $soluong = '';
// $i = 0;
// foreach ($HienHangHoa as $HienHangHoasl) {
//    extract($HienHangHoasl);
//    $i++;
// }

?>

<!-- =========== DANH MUC LIST============= -->

<?php
// $listdanhmucshow = '';
// foreach ($listdanhmuc as $listdanhmucc) {
//     extract($listdanhmucc);
//     $listdanhmucshow .= '
//       <option value="' . $id_danhmuc . '">' . $tendanhmuc . '</option>
//    ';
// }
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
                            <!-- <?= $i ?> -->
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
                        <p>Thông tin khách hàng</p>
                    </div>
                    <div class="table_hidden table__bottom_center">
                        <p>Trạng thái</p>
                    </div>
                    <div class="table_hidden table__bottom_center">
                        <p>Ngày tạo</p>
                    </div>
                    <div class="table_hidden table__bottom_center">
                        <p>Thành tiền</p>
                    </div>
                    <div class="table_hidden table__bottom_center">
                        <p>Xem chi tiết </p>
                    </div>
                    <div class="table_settin table__bottom_center">
                        <p>Cài đặt</p>
                    </div>
                </div>

                <div class="table_th table_tr list-item producttt" data-price="' . $gia . '">
                    <div class="table_name_image table__bottom_center  ">
                        <p>Khach hang 1</p>
                    </div>
                    <div class="table_view_category table__bottom_center">
                        <p>Đang giao</p>
                    </div>
                    <div class="table_view_category table__bottom_center">
                        <p>02/04/2024</p>
                    </div>
                    <div class="table_view_category table__bottom_center">
                        <p>2000</p>
                    </div>
                    <div class="table_view_category table__bottom_center ct_donhang">
                        <p>Chi tiết</p>
                    </div>
                    <div class="table_settin table__bottom_center setting">
                        <div class="table_show_setting">
                            <p><i class="bi bi-gear-fill"></i></p>
                        </div>
                        <div class="table_show_setting_clone">

                            <p>
                                <a href="index.php?act=updatehanghoa&idhanghoa=' . $id_hanghoa . '">
                                    <i class="bi bi-arrow-counterclockwise"></i>
                                </a>
                            </p>
                            <p>
                                <a style="color:red" href="index.php?act=deletehanghoa&idhanghoa=' . $id_hanghoa . '">
                                    <i class="bi bi-trash-fill"></i>
                                </a>
                            </p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .ct_donhang p {
        font-size: 0.9rem;
        padding: 6px 12px;
        background-color: #303841;
        border-radius: 5px;
        color: white;
        cursor: pointer;
    }

    .ct_donhang:hover p {
        background-color: #fd5959;
        color: white;
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






<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
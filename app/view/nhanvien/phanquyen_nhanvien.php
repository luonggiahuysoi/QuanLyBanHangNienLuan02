<!-- php database -->
<!-- <?php
$shownhanvien = '';
$showhienthi = '';
foreach ($HienNhanVien as $HienNhanVienn) {
    extract($HienNhanVienn);
    if ($ability == 1) {

        $showhienthi = '<i class="bi bi-eye-fill"></i>';
    } else {
        $showhienthi = '<i class="bi bi-eye-slash-fill"></i>';
    }



    $shownhanvien .= '
        <div class="table_th table_tr list-item producttt" data-price="">
                    <div class="table_name_image table__bottom_center table_name_imagee tennhanviendt">
                        <p>' . $tennhanvien . '</p>
                    </div>
                    <div class="table_hidden table__bottom_center chucvu">
                        <p>
                            ' . $chucvu . '
                        </p>
                    </div>
                    <div class="table_settin table__bottom_center setting">
                        <div class="table_show_setting">
                            <p><i class="bi bi-gear-fill"></i></p>
                        </div>
                        <div class="table_show_setting_clone">


                            <p>
                                <a href="index.php?act=updatenhanvien&idnhanvien=' . $id_nhanvien . '">
                                    <i class="bi bi-arrow-counterclockwise"></i>
                                </a>
                            </p>
                            <p>
                                <a  style="color:red"  href="index.php?act=deletenhanvien&idnhanvien=' . $id_nhanvien . '">
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
foreach ($HienNhanVien as $HienNhanViensl) {
    extract($HienNhanViensl);
    $i++;
}

?>

<!-- =========== DANH MUC LIST============= -->

<?php
$listchucvushow = '';
foreach ($listchucvu as $listchucvuu) {
    extract($listchucvuu);
    $listchucvushow .= '
      <option value="' . $id_phanquyen . '">' . $tenchucvu . '</option>
   ';
}
?>
<?php
$listchucvushownhanvien = '';
foreach ($HienNhanVien as $HienNhanVienlist) {
    extract($HienNhanVienlist);
    $listchucvushownhanvien .= '
      <option value="' . $id_nhanvien . '">' . $tennhanvien . '</option>
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
            <a href="" style="color: #464646;">Chức vụ nhân viên</a>
        </div>

        <div class="content__bottom-adddm">
            <input type="button" value="+ Thêm chức vụ" class="btn_show_add_danhmuc hvr-grow-shadow">
            <a href="index.php?act=chucvu">Chức vụ</a>
        </div>

        <!-- view danh muc -->

        <div class="content_bottom_view">

            <!-- header  -->

            <div class="content_bottom_view_header">
                <div>
                    <p>Table chức vụ nhân viên</p>
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
                        <p>Thông tin nhân viên</p>
                    </div>
                    <div class="table_hidden table__bottom_center thongtinnhanvien">
                        <p>Chức vụ</p>
                    </div>
                    <div class="table_settin table__bottom_center">
                        <p>Cài đặt</p>
                        <p></p>
                    </div>
                </div>



                <?= $shownhanvien ?>



            </div>
        </div>


    </div>

</div>


<style>
    .thongtinnhanvien {
        position: relative;
        width: 40%;
    }

    .chucvu {
        position: relative;
        width: 40%;
    }

    .tennhanviendt {
        justify-content: center;
        align-items: center;
        left: -1%;
    }

    .content__bottom-adddm a {
        text-decoration: none;
        border: 1px solid black;
        padding: 5px 12px;
        color: black;
        font-weight: 550;
    }

    .content__bottom-adddm a:hover {
        color: white;
        background-color: black;
    }
</style>






<!--================================ Thêm Nhân Viên Vào Quyền ========================== -->

<div class="updatedanhmuc AddDanhMuc">
    <div class="updatedm_view">
        <div class="updatedm_h3">
            <p>Thêm chức vụ nhân viên</p>
        </div>
        <form action="index.php?act=AddChucVuVaoNhanVien" method="post" enctype="multipart/form-data">
            <div class="updatdm_content">
                <div class="updatesp_price">
                    <div class="updatechucvu_nv">
                        <select name="nhanvien" id="dropdownnhanvienchucvu">
                            <?= $listchucvushownhanvien ?>
                        </select>
                        <script>
                            $(document).ready(function () {
                                // Sử dụng Select2 cho dropdown
                                $('#dropdownnhanvienchucvu').select2();
                            });
                        </script>
                    </div>
                    <div class="updatesp_price">
                        <div>
                            <select name="chucvu" id="dropdownchucvu">
                                <?= $listchucvushow ?>
                            </select>
                            <script>
                                $(document).ready(function () {
                                    // Sử dụng Select2 cho dropdown
                                    $('#dropdownchucvu').select2();
                                });
                            </script>
                        </div>
                    </div>
                </div>

                <div class="updatesp_btn">
                    <input class="btnsp_them" type="submit" value="Thêm mới nhân viên" name="add_chucvuvaonhanvien">
                    <input class="btnsp_huy" type="reset" value="Hủy">
                </div>
                <input class="btnsp_close danhmnuc_close_add" type="button" value="Đóng" id="closeButton">
            </div>
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    document.querySelector("#closeButton").addEventListener("click", function () {
                        // Lấy phần tử cha và ẩn nó đi
                        document.querySelector(".AddDanhMuc").style.display = "none";
                    });
                });
            </script>

        </form>
    </div>
</div>

<style>
    .updatesp_price {
        display: flex;
    }

    .updatechucvu_nv {
        margin-right: 5%;
    }

    .updatechucvu_nv select {
        width: 250px;
    }

    #dropdownchucvu {
        width: 200px;
    }

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
        width: 60%;
        height: 70%;
        background-color: #fff;
        box-shadow: rgb(53, 64, 77) 0px 20px 30px -10px;
        display: flex;
        flex-direction: column;
        align-items: center;
        border-radius: 5px;
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
        margin-top: 3%;
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
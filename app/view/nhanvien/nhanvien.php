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
                    <div class="table_name_image table__bottom_center table_name_imagee tendanhmuc">
                        <img src="data:image/png;base64,' . $hinhanh . '" alt="">
                        <p>' . $tennhanvien . '</p>
                    </div>
                    <div class="table_hidden table__bottom_center">
                        <p>
                            <a href="index.php?act=UpdateHienThiNhanVien&idnhanvien=' . $id_nhanvien . '">
                                ' . $showhienthi . '
                            </a>
                        </p>
                    </div>
                    <div class="table_view_category table__bottom_center">
                        <p>' . $sodienthoai . '</p>
                    </div>
                    <div class="table_view_category table__bottom_center email">
                        <p>' . $email . '</p>
                    </div>
                    <div class="table_view_category table__bottom_center">
                        <p>' . $taikhoan . '</p>
                    </div>
                    <div class="table_settin table__bottom_center setting dongphanquyen">
                        <div class="table_show_setting">
                            <p><i class="bi bi-gear-fill"></i></p>
                        </div>
                        <div class="table_show_setting_clone dongphanquyen">

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
                    <img src="data:image/png;base64,<?php echo $_SESSION['nhanvien'][0]['hinhanh'] ?>" alt="">
                    <p><?=$_SESSION['nhanvien'][0]['tennhanvien']?></p>

                </div>
                <div class="content_top_right_admin_view_setting">
                    <p class="hvr-glow">
                        <a href="index.php?act=dangxuat">Đăng xuất</a>
                    </p>
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
            <a href="" style="color: #464646;">Thông tin nhân viên</a>
        </div>

        <div class="content__bottom-adddm dongphanquyen">
            <input type="button" value="+ Thêm nhân viên" class="btn_show_add_danhmuc hvr-grow-shadow">
        </div>

        <!-- view danh muc -->

        <div class="content_bottom_view">

            <!-- header  -->

            <div class="content_bottom_view_header">
                <div>
                    <p>Table nhân viên</p>
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
                    <div class="table_hidden table__bottom_center">
                        <p>Hiển thị</p>
                    </div>
                    <div class="table_hidden table__bottom_center">
                        <p>Số điện thoại</p>
                    </div>
                    <div class="table_hidden table__bottom_center">
                        <p>Email</p>
                    </div>
                    <div class="table_view_category table__bottom_center">
                        <p>Tài khoản</p>
                    </div>
                    <div class="table_settin table__bottom_center dongphanquyen">
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
    .email {
        overflow-x: auto;
    }
</style>







</div>







<!--================================  Nhân Viên update ========================== -->


<div class="updatedanhmuc updatedanhmucjs">
    <div class="updatedm_view">
        <div class="updatedm_h3">
            <p>Thêm nhân viên</p>
        </div>
        <form action="index.php?act=updatenhanvien" method="post" enctype="multipart/form-data">
            <input type="hidden" name="idnhanvien" value="<?= $howNhanVienGetById[0]['id_nhanvien'] ?>">

            <div class="updatdm_content">
                <div class="updatesp_tensp">
                    <input type="text" name="tennhanvien" id="" placeholder="Tên nhân viên" value="<?= $howNhanVienGetById[0]['tennhanvien'] ?>">
                    <div>
                        <input type="date" name="ngaysinh" id="" value="<?= $howNhanVienGetById[0]['ngaysinh'] ?>">
                    </div>
                </div>

                <div class="updatesp_price">
                    <input type="number" name="sodienthoai" id="" placeholder="Số điện thoại" value="<?= $howNhanVienGetById[0]['sodienthoai'] ?>">
                    <input type="email" name="email" id="" placeholder="Địa chỉ email" value="<?= $howNhanVienGetById[0]['email'] ?>">
                </div>

                <div class="update_mota">
                    <textarea name="diachi" id="" placeholder="Nhập địa chỉ"><?= $howNhanVienGetById[0]['diachi'] ?></textarea>
                </div>

                <div class="updatesp_price">
                    <input type="text" name="tentaikhoan" id="" placeholder="Tên tài khoản" value="<?= $howNhanVienGetById[0]['taikhoan'] ?>">
                    <input type="text" name="matkhau" id="" placeholder="Mật khẩu" value="<?= $howNhanVienGetById[0]['matkhau'] ?>">
                    <div>
                        <?php
                        $listchucvushowup = '';
                        $defaultSelectedId = $howNhanVienGetById[0]['id_phanquyen']; // ID của option mà bạn muốn chọn mặc định

                        foreach ($listchucvu as $listchucvuu) {
                            extract($listchucvuu);

                            // Kiểm tra nếu $id_phanquyen bằng với ID mặc định, thêm thuộc tính selected
                            $selected = ($id_phanquyen == $defaultSelectedId) ? 'selected' : '';

                            $listchucvushowup .= '<option value="' . $id_phanquyen . '" ' . $selected . '>' . $tenchucvu . '</option>';
                        }
                        ?>

                        <select name="chucvu" id="dropdownn">
                            <?= $listchucvushowup ?>
                        </select>

                        <script>
                            $(document).ready(function() {
                                // Sử dụng Select2 cho dropdown
                                $('#dropdownn').select2();
                            });
                        </script>

                    </div>
                </div>

                <div class="updatedm_img">
                    <label class="custum-file-upload" for="imaAddnputAdd">
                        <div class="icon">
                            <img id="previewImageAdd" src="data:image/png;base64, <?= $howNhanVienGetById[0]['hinhanh'] ?>" fill="" viewBox="0 0 24 24" width="160px" height="115px" id="previewImage" style="border-radius: 5px; border: 1px solid #333; object-fit: cover;">

                            </img>
                        </div>
                        <input type="file" id="imaAddnputAdd" name="fileimage">
                    </label>

                </div>
                <script>
                    $(document).ready(function() {
                        $("#imaAddnputAdd").change(function() {
                            var input = this;

                            if (input.files && input.files[0]) {
                                var reader = new FileReader();

                                reader.onload = function(e) {
                                    $("#previewImageAdd").attr("src", e.target.result);
                                    $("#previewImageAdd").css("display", "flex");
                                };

                                reader.readAsDataURL(input.files[0]);
                            }
                        });
                    });
                </script>


                <div class="updatesp_btn">
                    <input class="btnsp_them" type="submit" value="Thêm mới nhân viên" name="add_nhanvien">
                    <input class="btnsp_huy" type="reset" value="Hủy">
                </div>
                <input class="btnsp_close danhmnuc_close_add" type="button" value="Đóng" id="closeButtonUpdate">
            </div>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    document.querySelector("#closeButton").addEventListener("click", function() {
                        // Lấy phần tử cha và ẩn nó đi
                        document.querySelector(".AddDanhMuc").style.display = "none";
                    });
                });
            </script>

        </form>
    </div>
</div>
<!-- xóa dấu tăng giảm  -->
<style>
    input[type="number"]::-webkit-outer-spin-button,
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-clear-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Hiển thị dấu mũi tên tăng giảm khi hover */
    input[type="number"]:hover::-webkit-outer-spin-button,
    input[type="number"]:hover::-webkit-inner-spin-button,
    input[type="number"]:hover::-webkit-clear-button {
        display: none;
    }
</style>
<!--================================ Thêm Nhân Viên Mới ========================== -->

<div class="updatedanhmuc AddDanhMuc">
    <div class="updatedm_view">
        <div class="updatedm_h3">
            <p>Thêm nhân viên</p>
        </div>
        <form action="index.php?act=AddNhanVien" method="post" enctype="multipart/form-data">
            <div class="updatdm_content">
                <div class="updatesp_tensp">
                    <input type="text" name="tennhanvien" id="" placeholder="Tên nhân viên">
                    <div>
                        <input type="date" name="ngaysinh" id="">
                    </div>
                </div>

                <div class="updatesp_price">
                    <input type="number" name="sodienthoai" id="" placeholder="Số điện thoại">
                    <input type="email" name="email" id="" placeholder="Địa chỉ email">
                </div>

                <div class="update_mota">
                    <textarea name="diachi" id="" placeholder="Nhập địa chỉ"></textarea>
                </div>

                <div class="updatesp_price">
                    <input type="text" name="tentaikhoan" id="" placeholder="Tên tài khoản">
                    <input type="text" name="matkhau" id="" placeholder="Mật khẩu">
                    <div>
                        <select name="chucvu" id="dropdownnvn">
                            <?= $listchucvushow ?>
                        </select>
                        <script>
                            $(document).ready(function() {
                                // Sử dụng Select2 cho dropdown
                                $('#dropdownnvn').select2();
                            });
                        </script>
                    </div>
                </div>

                <div class="updatedm_img">
                    <label class="custum-file-upload" for="imaAddnputAddd">
                        <div class="icon">
                            <img id="previewImageAddd" src="../public/img/folder.png" fill="" viewBox="0 0 24 24" width="160px" height="115px" id="previewImage" style="border-radius: 5px; border: 1px solid #333; object-fit: cover;">

                            </img>
                        </div>
                        <input type="file" id="imaAddnputAddd" name="fileimage">
                    </label>

                </div>
                <script>
                    $(document).ready(function() {
                        $("#imaAddnputAddd").change(function() {
                            var input = this;

                            if (input.files && input.files[0]) {
                                var reader = new FileReader();

                                reader.onload = function(e) {
                                    $("#previewImageAddd").attr("src", e.target.result);
                                    $("#previewImageAddd").css("display", "flex");
                                };

                                reader.readAsDataURL(input.files[0]);
                            }
                        });
                    });
                </script>


                <div class="updatesp_btn">
                    <input class="btnsp_them" type="submit" value="Thêm mới nhân viên" name="add_nhanvien">
                    <input class="btnsp_huy" type="reset" value="Hủy">
                </div>
                <input class="btnsp_close danhmnuc_close_add" type="button" value="Đóng" id="closeButton">
            </div>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    document.querySelector("#closeButton").addEventListener("click", function() {
                        // Lấy phần tử cha và ẩn nó đi
                        document.querySelector(".AddDanhMuc").style.display = "none";
                    });
                });
            </script>

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


<!-- -------------------SEARCH---------------------- -->

<script>
    $(document).ready(function() {
        // Xử lý sự kiện khi người dùng nhập vào ô tìm kiếm
        $("#searchInput").on("input", function() {
            var searchText = $(this).val().toLowerCase();

            // Hiển thị hoặc ẩn các phần tử phù hợp với từ khóa tìm kiếm
            $(".list-item").each(function() {
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
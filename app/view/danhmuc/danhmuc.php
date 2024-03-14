<!-- php database -->
<?php
$showdm = '';
$showhienthi = '';
foreach ($HienDanhMuc as $HienDanhMucc) {
    extract($HienDanhMucc);
    if ($hienthi == 1) {

        $showhienthi = '<i class="bi bi-eye-fill"></i>';
    } else {
        $showhienthi = '<i class="bi bi-eye-slash-fill"></i>';
    }



    $showdm .= '
        <div class="table_th table_tr list-item">
                    <div class="table_name_image table__bottom_center table_name_imagee tendanhmuc">
                        <img src="data:image/png;base64,' . $hinhanh . '" alt="">
                        <p>' . $tendanhmuc . '</p>
                    </div>
                    <div class="table_hidden table__bottom_center">
                        <p>
                            <a href="index.php?act=updatehienthi&iddanhmuc=' . $id_danhmuc . '">
                                ' . $showhienthi . '
                            </a>
                        </p>
                    </div>
                    <div class="table_view_category table__bottom_center">
                        <p>' . $luotxem . '</p>
                    </div>
                    <div class="table_settin table__bottom_center setting">
                        <div class="table_show_setting">
                            <p><i class="bi bi-gear-fill"></i></p>
                        </div>
                        <div class="table_show_setting_clone">
                            <p>
                                <a href="index.php?act=updatedanhmuc&iddanhmuc=' . $id_danhmuc . '">
                                    <i class="bi bi-arrow-counterclockwise"></i>
                                </a>
                            </p>
                            <p>
                                <a style="color:red" href="index.php?act=deletedanhmuc&iddanhmuc=' . $id_danhmuc . '">
                                    <i class="bi bi-trash-fill"></i>
                                </a>
                            </p>

                        </div>
                    </div>
        </div>
        ';
}

?>



<!-- center -->
<div class="content">

    <div class="content_top">

        <!-- close menu -->
        <div class="Close_nav_menu_content">
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
            <a href="" style="color: #464646;">Trang danh mục</a>
        </div>

        <div class="content__bottom-adddm">
            <input type="button" value="+ Thêm danh mục" placeholder="Thêm danh mục" class="btn_show_add_danhmuc">
        </div>

        <!-- view danh muc -->

        <div class="content_bottom_view">

            <!-- header  -->

            <div class="content_bottom_view_header">
                <div>
                    <p>Table Danh Mục</p>
                </div>
                <div>
                    <a href=""></a>
                </div>
            </div>

            <!-- center  -->

            <div class="content_bottom_table">
                <div class="padding_table"></div>

                <!-- table  -->
                <div class="table_th">
                    <div class="table_name_image table__bottom_center">
                        <p>Thông tin danh mục</p>
                    </div>
                    <div class="table_hidden table__bottom_center">
                        <p>Hiển thị</p>
                    </div>
                    <div class="table_view_category table__bottom_center">
                        <p>Lượt xem</p>
                    </div>
                    <div class="table_settin table__bottom_center">
                        <p>Cài đặt</p>
                        <p></p>
                    </div>
                </div>



                <?= $showdm ?>



            </div>
        </div>


    </div>

</div>







</div>





<!--================================ Danh muc update ========================== -->

<div class="updatedanhmuc updatedanhmucjs">
    <div class="updatedm_view">
        <div class="updatedm_h3">
            <p>Update Danh Mục</p>

        </div>
        <form action="index.php?act=updatedanhmuc" method="post" enctype="multipart/form-data">

            <div class="updatdm_content">
                <input type="text" name="tendanhmuc" id="" placeholder="Tên danh mục" value="<?= $id_onedanhmuc[0]['tendanhmuc'] ?>">
                <div class="updatedm_img">
                    <label for="filedanhmucup">
                        <img height="80px" width="90px" src="data:image/png;base64, <?= $id_onedanhmuc[0]['hinhanh']?>" alt="Add Image" id="filedanhmucsrcup">
                    </label>
                    <input style="display:none;" type="file" name="fileimage" id="filedanhmucup">
                </div>
                <input type="submit" value="Update danh mục" name="btnUpdateDanhMuc">
                <input type="button" class="danhmnuc_close" value="Đóng" id="closeButton">
            </div>


            <input type="hidden" name="iddanhmuc" value="<?= $id_onedanhmuc[0]['id_danhmuc'] ?>">
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#filedanhmucup").change(function() {
            var input = this;

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $("#filedanhmucsrcup").attr("src", e.target.result);
                    $("#filedanhmucsrcup").css("display", "flex");
                };

                reader.readAsDataURL(input.files[0]);
            }
        });
    });
</script>

<!--================================ Thêm danh mục mới ========================== -->

<div class="updatedanhmuc AddDanhMuc">
    <div class="updatedm_view">
        <div class="updatedm_h3">
            <p>Thêm Danh Mục</p>

        </div>
        <form action="index.php?act=AddDanhMuc" method="post" enctype="multipart/form-data">

            <div class="updatdm_content">
                <input type="text" name="tendanhmuc" id="" placeholder="Tên danh mục">
                <div class="updatedm_img">
                    <label for="filedanhmuc">
                        <img height="80px" width="90px" src="../public/img/folder.png" alt="Add Image" id="filedanhmucsrc">
                    </label>
                    <input style="display:none;" type="file" name="fileimage" id="filedanhmuc">
                </div>
                <input type="submit" value="Update danh mục" name="add_danhmuc">
                <input type="button" class="danhmnuc_close_add" value="Đóng" id="closeButton">
            </div>

        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#filedanhmuc").change(function() {
            var input = this;

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $("#filedanhmucsrc").attr("src", e.target.result);
                    $("#filedanhmucsrc").css("display", "flex");
                };

                reader.readAsDataURL(input.files[0]);
            }
        });
    });
</script>


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
        width: 45%;
        height: 70%;
        background-color: #fff;
        box-shadow: rgb(53, 64, 77) 0px 20px 30px -10px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .updatedm_h3 {
        position: relative;
        width: 110%;
        height: 20%;
        display: flex;
        align-items: center;
        background: #000000;
        color: white;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        border-radius: 10px;
        top: -6%;
    }

    .updatedm_h3 p {
        font-size: 1.2rem;
        font-weight: 650;
        display: flex;
        position: relative;
        align-items: center;
        left: 38%;
    }

    .updatdm_content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 20px;
    }

    .updatdm_content input:nth-child(1) {
        width: 115%;
        height: 35px;
        font-size: 1rem;
        margin-top: 15%;
        padding: 6px 12px;
        outline: none;
        caret-color: red;
        font-weight: 500;
        border: none;
        border-bottom: 2px solid black;
    }

    .updatdm_content input:nth-child(4),
    .updatdm_content input:nth-child(3) {
        font-family: "Fira Sans";
        font-weight: 550;
        font-size: 1rem;
        padding: 6px 10px;
        cursor: pointer;
    }

    .updatdm_content input:nth-child(3):hover,
    .updatdm_content input:nth-child(4):hover {
        background-color: black;
        color: white;
        font-weight: 600;
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
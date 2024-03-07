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
        <div class="table_th table_tr">
                    <div class="table_name_image table__bottom_center table_name_imagee">
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
                                <a href="index.php?act=deletedanhmuc&iddanhmuc=' . $id_danhmuc . '">
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
                <input type="text" class="search-input" placeholder="Tìm kiếm..." />
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

<div class="updatedanhmuc">
    <div class="updatedm_view">
        <div class="updatedm_h3">
            <p>Update Danh Mục</p>
        </div>
        <div class="updatdm_content">
        <div class="input-div">
  <input class="input" name="file" type="file">
<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke="currentColor" class="icon"><polyline points="16 16 12 12 8 16"></polyline><line y2="21" x2="12" y1="12" x1="12"></line><path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path><polyline points="16 16 12 12 8 16"></polyline></svg>
</div>
            </div>
            <input type="button" value="Thêm danh mục">
            <input type="button" value="Đóng">
        </div>
    </div>
</div>

<style>
    .updatedanhmuc {
        position: absolute;
        display: flex;
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
        margin-top: 20%;
        margin-bottom: 10%;
        padding: 6px 12px;
        outline: none;
        caret-color: red;
        font-weight: 550;
    }

    .updatdm_content input:nth-child(2),
    .updatdm_content input:nth-child(3) {
        font-family: "Poppins", sans-serif;
        font-weight: 500;
        font-size: 1rem;
        padding: 4px 10px;
    }

    .updatdm_content input:nth-child(3):hover,
    .updatdm_content input:nth-child(4):hover {
        background-color: black;
        color: white;
        font-weight: 600;

    }

    /* add img  */
    .open-file {
        background-color: rgb(255, 255, 255);
        width: 140px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 20px;
        border: 1px solid rgb(217, 217, 217);
        font-size: 15px;
        cursor: pointer;
        transition: all 0.3s;
        border-radius: 10px;
    }

    .file-wrapper {
        width: 15px;
        height: auto;
        display: flex;
        align-items: flex-end;
        justify-content: center;
        position: relative;
    }

    .file-wrapper svg {
        width: 100%;
    }

    .file-front {
        position: absolute;
        width: 100%;
        height: 70%;
        border: 2px solid rgb(0, 0, 0);
        border-bottom: 1px solid black;
        transform: skewX(-40deg);
        transform-origin: bottom right;
        background-color: white;
        transition: all 0.5s;
        bottom: 0;
    }

    .open-file:hover .file-front {
        height: 50%;
        transform-origin: bottom right;
        transform: skewX(-55deg);
    }

    .open-file:hover {
        box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.048);
    }

    .file-wrapper {
        position: absolute;
        z-index: 10;
    }
</style>
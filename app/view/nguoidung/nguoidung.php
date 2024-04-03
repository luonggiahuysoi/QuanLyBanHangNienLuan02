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
            <a href="" style="color: #464646;">Người dùng</a>
        </div>



        <!-- view danh muc -->

        <div class="content_bottom_view">

            <!-- header  -->

            <div class="content_bottom_view_header">
                <div>
                    <p>Table người dùng</p>
                </div>
                <br>
                <div>
                    <div style="display: flex;  align-items: center;">
                        <p style="color: #555;">Tổng số người dùng:</p>
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
                        <p>Số điện thoại</p>
                    </div>
                    <div class="table_hidden table__bottom_center">
                        <p>Địa chỉ</p>
                    </div>
                    <div class="table_hidden table__bottom_center">
                        <p>Email</p>
                    </div>
                    <div class="table_view_category table__bottom_center">
                        <p>Mật khẩu</p>
                    </div>
                    <div class="table_settin table__bottom_center">
                        <p>Cài đặt</p>
                        <p></p>
                    </div>
                </div>


                <?php
                $showkhachhang = '';
                $abilityy = '';
                foreach ($HienKhachHang as $HienKhachHangg) {
                    extract($HienKhachHangg);
                    if($ability == 1) {
                        $abilityy = '   <p><a href="index.php?act=updateabilitykhachhang&idkhachhang='.$id_khachhang.'"><i class="bi bi-unlock-fill"></i></a></p>';
                    } else {
                        $abilityy = '  <p><a href="index.php?act=updateabilitykhachhang&idkhachhang='.$id_khachhang.'"><i class="bi bi-lock-fill"></i></a></p>';
                    }
                    $showkhachhang = '
                    <div class="table_th table_tr list-item producttt" data-price="">
                        <div class="table_name_image table__bottom_center table_name_imagee tendanhmuc">
                            <img src="data:image/png;base64,' . $hinhanh . '" alt="">
                            <p>'.$tenkhachhang.'</p>
                        </div>
                        <div class="table_view_category table__bottom_center">
                            <p>'.$sodienthoai.'</p>
                        </div>
                        <div class="table_view_category table__bottom_center">
                            '.$abilityy.'
                        </div>
                        <div class="table_view_category table__bottom_center email">
                            <p>'.$email.'</p>
                        </div>
                        <div class="table_view_category table__bottom_center">
                            <p>'.$matkhau.'</p>
                        </div>
                        <div class="table_settin table__bottom_center setting">
                            <div class="table_show_setting">
                                <p><i class="bi bi-gear-fill"></i></p>
                            </div>
                            <div class="table_show_setting_clone">
                    
                    
                                <p>
                                    <a href="index.php?act=updatekhachhang&idkhachhang=' . $id_khachhang . '">
                                        <i class="bi bi-arrow-counterclockwise"></i>
                                    </a>
                                </p>
                                <p>
                                    <a style="color:red" href="index.php?act=deletekhachhang&idkhachhang=' . $id_khachhang . '">
                                        <i class="bi bi-trash-fill"></i>
                                    </a>
                                </p>
                    
                            </div>
                        </div>
                    </div>
                    ';
                }

                ?>

                <?=$showkhachhang?>



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
        <div class="content_updatekhachhang">
            <form action="index.php?act=updatekhachhang" method="post">
                <div>
                    
                    <input type="email" name="email" id="" placeholder="email" value="<?=$HienKhachHangId[0]['email']?>">
                    <input type="text" name="sodienthoai" id="" placeholder="Số điện thoại" value="<?=$HienKhachHangId[0]['sodienthoai']?>">
                    <input type="password" name="matkhau" placeholder="Mật khẩu" value="<?=$HienKhachHangId[0]['matkhau']?>">
                </div>
                <div>
                    <input type="submit" value="Cập nhật" name="update_khachhang">
                </div>
                <div>
                    <input type="reset" value="Đóng" class="danhmnuc_close_add">
                </div>
                <input type="hidden" name="idkhachhang" value="<?=$HienKhachHangId[0]['id_khachhang']?>">
            </form>
        </div>



    

    </div>
</div>

<style>

    .show {
        display: flex;
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

    .content_updatekhachhang {
        position: relative;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .content_updatekhachhang form div:nth-child(1) {
        position: relative;
        width: 100%;
        height: 40vh;

    }

    .content_updatekhachhang form div:nth-child(1) input {
        position: relative;
        width: 100%;
        height: 50px;
        margin-top: 10%;
    }

    .content_updatekhachhang form div:nth-child(2) {
        position: relative;
        width: 100%;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .content_updatekhachhang form div:nth-child(2) input {
        position: relative;
        width: 20%;
        height: 30px;
        background-color: #999;
        border: 1px solid #333;
        color: white;
        font-weight: 700;
        border-radius: 5px;

    }

    .content_updatekhachhang form div:nth-child(2) input:hover {
        cursor: pointer;
        background-color: wheat;
        color: #333;

    }

    .content_updatekhachhang form div:nth-child(3) {
        position: relative;
        width: 100%;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .content_updatekhachhang form div:nth-child(3) input {
        position: relative;
        width: 20%;
        height: 30px;
        background-color: #999;
        border: 1px solid #333;
        color: white;
        font-weight: 700;
        border-radius: 5px;

    }

    .content_updatekhachhang form div:nth-child(3) input:hover {
        cursor: pointer;
        background-color: wheat;
        color: #333;

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
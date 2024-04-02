<!-- php database -->



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
                    <p>Table danh sách đơn hàng</p>
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
                        <p>Tình trạng</p>
                    </div>
                    <div class="table_hidden table__bottom_center">
                        <p>Xem chi tiết </p>
                    </div>
                    <div class="table_settin table__bottom_center">
                        <p>Cài đặt</p>
                    </div>
                </div>

                <?php
                $showdonhang = '';
                $trangthaii = '';
                $tinhtrangg = '';

                foreach ($HienDonHang as $HienDonHangg) {

                    extract($HienDonHangg);
                    if ($trangthai == 0) {
                        $trangthaii = ' 
                            <div class="table_view_category table__bottom_center ct_donhang">
                                <p class="ctdonhang__hide">Đang giao</p>
                            </div>
                            ';
                    } else {
                        $trangthaii = ' 
                            <div class="table_view_category table__bottom_center ct_donhang">
                                <p class="ctdonhang__hide">Đã giao</p>
                            </div>
                            ';
                    }

                    if ($tinhtrang == 0) {

                        $tinhtrangg = 'Chưa xem';
                    } else {

                        $tinhtrangg = 'Đã xem';
                    }


                    $showdonhang = '
                        <div class="table_th table_tr list-item producttt" data-price="">
                            <div class="table_name_image table__bottom_center  ">
                                <p>' . $tenkhachhang . '</p>
                            </div>
                            <div class="table_view_category table__bottom_center">
                                <p>' . $trangthaii . '</p>
                            </div>
                            <div class="table_view_category table__bottom_center">
                                <p>' . $ngaytaodon . '</p>
                            </div>
                            <div class="table_view_category table__bottom_center">
                                <p>' . $tinhtrangg . '</p>
                            </div>
                            <div class="table_view_category table__bottom_center ct_donhang">
                                <p class="ctdonhang__hide"><a href="index.php?act=listdonhangbill&iddonhang='.$id_donhang.'" style="color:aliceblue;">Chi tiết</a></p>
                            </div>
                            <div class="table_settin table__bottom_center setting">
                                <div class=" ct_donhang">
                                        <form id="deleteForm" action="delete.php" method="post">
                                        <input type="submit" value="Huỷ đơn" onclick="return confirmDelete()" />
                                    </form>
                                </div>
                            </div>
        
                        </div>
                    ';
                }

                ?>
                <?= $showdonhang ?>
                <!-- Đầu tiên, thêm thư viện SweetAlert vào trang của bạn -->
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

                <!-- Sử dụng onclick để gọi hàm confirmDelete() khi nút "Xoá" được click -->

                <script>
                    function confirmDelete() {
                        // Hiển thị thông báo xác nhận bằng SweetAlert
                        Swal.fire({
                            title: 'Bạn có chắc muốn xoá không?',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Có',
                            cancelButtonText: 'Không'
                        }).then((result) => {
                            // Nếu người dùng chọn "Có", submit form
                            if (result.isConfirmed) {
                                document.getElementById('deleteForm').submit();
                            }
                        });

                        // return false để ngăn chặn hành động mặc định của nút submit
                        return false;
                    }
                </script>




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
        background-color: #118a7e;
        color: white;
    }
</style>

<!-- Hủy đơn  -->
<script>
    function cancelOrder(element) {
        element.innerText = 'Đã hủy đơn';
        element.style.backgroundColor = 'red';
    }
</script>



<!-- Chi tiết đơn hàng  -->

<div class="ctdonhang">
    <div class="ctdonhangg">
        <div class="ctdonhang__title">
            <p>Hóa đơn hàng hóa</p>
        </div>

        <?php
            $hienkhachhang='';
            $tongtienn = 0;
            $tien = 0;
            foreach($showbill as $showbilll) {
                extract($showbilll);
                foreach($khachhanghien as $khachhanghienn) {
                    extract($khachhanghienn);
                    foreach($HienDonHang as $HienDonHangg) {
                        extract($HienDonHangg);
                        $tien = $soluong * $dongia;
                        $tongtienn = $tongtienn + $tien;

                        

                        if($showbilll['id_khachhang'] == $khachhanghienn['id_khachhang'] && $showbilll['id_khachhang'] == $HienDonHangg['id_khachhang']) {
                            $hienkhachhang = '
                                <div class="ctdonhang__main-list">
                                    <div class="ctdonhang__main-item">
                                        <p>Khách hàng: </p>
                                        <p>'.$tenkhachhang.'</p>
                                    </div>
                                    <div class="ctdonhang__main-item">
                                        <p>Ngày đặt hàng: </p>
                                        <p>'.$ngaytaodon.'</p>
                                    </div>
                                    <div class="ctdonhang__main-item">
                                        <p>Số điện thoại: </p>
                                        <p>'.$sodienthoai.'</p>
                                    </div>
                                    <div class="ctdonhang__main-item" style="height: 8vh;">
                                        <p>Địa chỉ: </p>
                                        <p>'.$diachi.'</p>
                                    </div>
                                    <div class="ctdonhang__main-item">
                                        <p>Thanh toán: </p>
                                        <p>'.$hinhthucthanhtoan.'</p>
                                    </div>
                                    <div class="ctdonhang__main-item">
                                        <p>Tổng tiền: </p>
                                        <p>'.number_format($tongtienn).' vnđ</p>
                                    </div>
                                </div>
                            ';
                        }

                    }

                }
                
            }
        ?>
        <div class="ctdonhang__main">
            <p class="ctdonhang__main-headding"><i>Thông tin khách hàng</i></p>
            <?=$hienkhachhang?>
        </div>

        <div class="ctdonhang__table">
            <p class="ctdonhang__table-headding"><i>Chi tiết đơn hàng</i></p>
            <div class="ctdonhang__tablee">
                <div class="ctdonhang__table-th">
                    <div style="width: 10%" class="ctdonhang__table-item ">
                        <p>STT</p>
                    </div>
                    <div class="ctdonhang__table-item">
                        <p>Tên sản phẩm</p>
                    </div>
                    <div class="ctdonhang__table-item">
                        <p>Số lượng</p>
                    </div>
                    <div class="ctdonhang__table-item">
                        <p>Đơn giá</p>
                    </div>
                    <div class="ctdonhang__table-item">
                        <p>Thành tiền </p>
                    </div>
                </div>

                <?php
                    $hienbill='';
                    $stt = 1;
                    $tongtiensp = 0;
                    $tongtien = 0;
                    foreach($showbill as $showbilll) {
                        extract($showbilll);
                        $tongtiensp = $soluong * $dongia;
                        $tongtien = $tongtien + $tongtiensp;
                        $hienbill.='
                            <div class="ctdonhang__table-tr">
                                <div style="width: 10%" class="ctdonhang__table-item">
                                    <p>'.$stt.'</p>
                                </div>
                                <div class="ctdonhang__table-item">
                                    <p>'.$tensanpham.'</p>
                                </div>
                                <div class="ctdonhang__table-item">
                                    <p>'.$soluong.'</p>
                                </div>
                                <div class="ctdonhang__table-item">
                                    <p>'.number_format($dongia).' vnđ</p>
                                </div>
                                <div class="ctdonhang__table-item">
                                    <p>'.number_format($tongtiensp).' vnđ</p>
                                </div>
                            </div>
                        ';
                        $stt++;
                    }

                ?>
                <?=$hienbill?>

   
                <div class="ctdonhang__table-tr" style=" border-top: 1px solid black;">
                    <div style="width: 10%" class="ctdonhang__table-item">
                        <p>Tổng tiền</p>
                    </div>
                    <div class="ctdonhang__table-item">

                    </div>
                    <div class="ctdonhang__table-item">

                    </div>
                    <div class="ctdonhang__table-item">

                    </div>
                    <div class="ctdonhang__table-item">
                        <p><?=number_format($tongtien)?> vnđ</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="ctdonhang__close">
            <p class="icon_show_ctkho"><i class="bi bi-x-circle"></i></p>
        </div>
    </div>
    <style>
        .ctdonhang__close {
            position: absolute;
            top: 11%;
            right: 4%;
            font-size: 1.8rem;
        }

        .ctdonhang__close:hover {
            color: red;
        }
    </style>
    <script>
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                window.print(); // In đơn hàng khi người dùng bấm phím "Enter"
            }
        });
        document.addEventListener('keydown', function(event) {
            if (event.key === 'F2') {
                window.print(); // ĐÓNG HOÁ ĐƠN
            }
        });
        document.addEventListener('keydown', function(event) {
            if (event.key === 'F1') {
                window.history.back();
            }
        });
    </script>
</div>
</div>
<style>
    .ctdonhang {
        width: 100%;
        height: 100vh;
        position: absolute;
        background-color: #3333;
        display: none;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        z-index: 20;
    }

    .ctdonhangg {
        background-color: #fff;
        width: 99%;
        height: 100vh;
        /* overflow: auto; */
        border-radius: 2px;
    }

    .ctdonhang__title {
        width: 100%;
        height: 70px;
        line-height: 70px;
        text-align: center;
        font-size: 2rem;
        font-weight: 550;
        background-color: #2d4059;
        color: #fff;
    }


    .ctdonhang__main {
        width: 95%;
        border: 1px dashed black;
        margin-top: 5%;
        margin-left: 2%;
    }

    .ctdonhang__main-headding {
        font-style: italic;
        text-decoration: underline;
        padding: 10px 20px;
    }

    .ctdonhang__table-headding {
        font-style: italic;
        text-decoration: underline;
        padding: 30px 20px 10px 40px;
    }



    .ctdonhang__main-item {
        display: flex;
        border: 1px dashed black;
        margin: 10px 15px;
        height: 30px;
        line-height: 30px;
        gap: 80px;
    }

    .ctdonhang__main-item p:nth-child(1) {
        width: 30%;
        margin-left: 2%;
    }

    .ctdonhang__main-item p:nth-child(2) {
        border-left: 1px dashed black;
        width: 70%;
        padding-left: 4%;
    }

    .ctdonhang__tablee {
        width: 95%;
        margin-left: 2%;
        border: 1px solid black;
    }

    .ctdonhang__table-item {
        width: 20%;
    }

    .ctdonhang__table-th {
        width: 100%;
        height: 48px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-bottom: 1px solid black;
        background-color: #3333;
    }

    .ctdonhang__table-tr {
        width: 100%;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .inchitietdonhang {
        position: relative;
        width: 100%;
        height: 6%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>













<!-- ẩn hóa đơn  -->


<script>
    $(document).ready(function() {
        $(".icon_show_ctkho").click(function(e) {
            $(".ctdonhang").css("display", "none");

        });
    });
</script>

<!-- mở hóa đơn  -->
<script>
    $(document).ready(function() {
        $(".ctdonhang__hide").click(function(e) {
            $(".ctdonhang").css("display", "flex");

        });
    });
</script>


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
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
        <br>

        <div class="content_bottom_link">
            <a href="" style="color: #999;">Trang chủ</a>
            <p>/</p>
            <a href="" style="color: #999;">Chức vụ nhân viên</a>
            <p>/</p>
            <a href="" style="color: #464646;">Chức vụ </a>
        </div>
        <br>
        <div class="content__bottom-adddm">
            <input type="button" value="+ Thêm chức vụ" class="btn_add_lichlam">
        </div>
        <br>
        <!-- view lịch làm -->
        <div class="view_lichlam">
            <div class="header_view_lichlam">
                <h3>Lịch làm</h3>
            </div>
            <div class="content_view_lichlam">

                <?php
                // Thông tin kết nối đến cơ sở dữ liệu
                $servername = "localhost"; // Địa chỉ máy chủ cơ sở dữ liệu
                $username = "root"; // Tên đăng nhập cơ sở dữ liệu
                $password = ""; // Mật khẩu cơ sở dữ liệu
                $dbname = "QuanLyBanHang"; // Tên cơ sở dữ liệu

                // Tạo kết nối
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Kiểm tra kết nối
                if ($conn->connect_error) {
                    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
                }

                // Lấy ngày hiện tại
                $currentDate = date("Y-m-d");

                // Tìm ngày thứ Hai gần nhất
                $monday = date('Y-m-d', strtotime('last Monday', strtotime($currentDate)));

                // Tính toán ngày trong tuần (từ thứ Hai đến Chủ Nhật)
                for ($i = 0; $i < 7; $i++) {
                    // Tính toán ngày của tuần dựa trên ngày thứ Hai và biến $i
                    $dateOfWeek = date("Y-m-d", strtotime($monday . " +$i days"));

                    // Lấy thứ của ngày trong tuần
                    $dayOfWeek = date('l', strtotime($dateOfWeek));

                    // Truy vấn cơ sở dữ liệu để lấy thông tin thời khóa biểu cho ngày trong tuần
                    $sql = "SELECT * FROM lichlam WHERE ngay = '$dateOfWeek'";
                    $result = $conn->query($sql);

                    // Hiển thị ngày trong tuần và thời khóa biểu
                    echo "<h2>Thời khóa biểu cho $dayOfWeek, ngày $dateOfWeek:</h2>";

                    // Kiểm tra nếu có dữ liệu trả về từ truy vấn
                    if ($result->num_rows > 0) {
                        // Duyệt qua từng hàng kết quả
                        echo "<table class='schedule'>";
                        echo "<tr><th>Thời gian</th><th>Môn học</th></tr>";
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["nhanvien"] . "</td>";
                            echo "<td>" . $row["ca"] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "Không có thời khóa biểu nào cho $dayOfWeek, ngày $dateOfWeek.";
                    }
                    echo "<br>";
                }

                // Đóng kết nối
                $conn->close();
                ?>

            </div>

        </div>
    </div>


</div>



<style>
    .content__bottom-adddm {
        position: relative;
        height: 40px;
        display: flex;
        align-items: center;
    }

    .btn_add_lichlam {
        position: relative;
        width: 10%;
        height: 80%;
        color: #333;
        font-size: 0.8rem;
        font-weight: 600;
        border: 1.5px solid #333;
        border-radius: 5px;
        margin-left: 7%;
    }

    .view_lichlam {
        position: relative;
        background-color: while;
        width: 99%;
        height: 40vh;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        box-shadow: rgba(0, 0, 0, 0.2) 0px 3px 12px;
    }

    .header_view_lichlam {
        width: 100%;
        background-color: #282e3d;
        height: 15%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        border-radius: 5px;
    }

    .content_view_lichlam {
        position: relative;
        width: 98%;
        height: 85%;

    }

    .thu {
        position: relative;
        height: 20%;
        border-bottom: 1px solid #999;
        display: flex;
    }

    .thu div {
        position: relative;
        height: 100%;
        width: 14.3%;
        border-right: 1px solid #999;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .thu div:nth-child(1) {
        border-left: 1px solid #999;
    }

    .thu div p:nth-child(2) {
        font-size: 0.8rem;
    }

    .lich {
        position: relative;
        height: 80%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .lich div {
        position: relative;
        height: 100%;
        width: 14.3%;
        border-right: 1px solid #999;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .lich div:nth-child(1) {
        border-left: 1px solid #333;
    }
</style>




<!-- =============== -->
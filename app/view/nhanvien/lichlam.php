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
               die ("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
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
               echo "<h2 class = 'day_lichlam'  >Thời khóa biểu cho $dayOfWeek, ngày $dateOfWeek:</h2>";

               // Kiểm tra nếu có dữ liệu trả về từ truy vấn
               if ($result->num_rows > 0) {
                  // Duyệt qua từng hàng kết quả
                  echo "<table class='schedule table_show_setting_clone'>";
                  echo "<tr style='background-color: #282e3d;'><th class='lichlam_name' style='color:#fff;'>Nhân viên</th><th class='lichlam_name' style='color:#fff;'>Ca làm</th></tr>";
                  while ($row = $result->fetch_assoc()) {

                     echo " <tr> <td class='lichlam_name'>" . $row["nhanvien"] . "</td>";
                     echo "<td class='lichlam_name'>" . $row["ca"] . "</td>    </tr>";

                  }
                  echo "</table>";
               } else {
                  echo "<p class='day_lichlam1' >Không có thời khóa biểu nào cho $dayOfWeek, ngày $dateOfWeek.</p>";
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
      overflow: auto;
      margin-right: auto;
      position: relative;
      background-color: while;
      width: 99%;
      height: 70vh;
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

   .header_view_lichlam h3 {
      font-size: 1.7rem;
      font-weight: 650;
   }

   .content_view_lichlam {
      position: relative;
      width: 98%;
      height: 85%;
   }

   .day_lichlam {
      font-size: 1.2rem;
      font-weight: 600;
      width: 50%;
      height: 50px;
      background-color: #999;
      display: flex;
      justify-content: center;
      align-items: center;
      left: 50%;
      transform: translateX(50%);
      cursor: pointer;
   }

   .day_lichlam1 {
      font-size: 1rem;
      left: 50%;
      transform: translateX(30%);
   }

   .lichlam_name {
      width: 200px;
      text-align: center;
      font-size: 1rem;
      border: 1px solid black;
   }

   .schedule {
      border-collapse: collapse;
   }

   .schedule tr {
      height: 30px;
   }

   table {
      width: 50%;
      display: flex;
      justify-content: center;
      margin-top: 1%;
      left: 50%;
      transform: translateX(-50%);
      /* display: none; */
   }



   .view_lichlam::-webkit-scrollbar {
      width: 4px;
      height: 4px;
      /* Chiều rộng của thanh cuộn ngang */
   }

   .view_lichlam::-webkit-scrollbar-thumb {
      background-color: #393e46;
      /* Màu nền của thanh cuộn */
      border-radius: 4px;
      /* Đường viền cong của thanh cuộn */
   }

   .view_lichlam::-webkit-scrollbar-thumb:hover {
      background-color: #5585b5;
      /* Màu nền khi rê chuột vào thanh cuộn */
   }

   .view_lichlam::-webkit-scrollbar-track {
      background-color: #eaf6f6;
      /* Màu nền của vùng bên trong thanh cuộn */
   }
</style>

<script>
   $(document).ready(function () {
      // Bắt sự kiện click vào các phần tử h2 có class là 'day_lichlam'
      $('.day_lichlam').click(function () {
         // Tìm phần tử kế tiếp (div) của h2 đang được click
         var content = $(this).next();
         // Ẩn/hiện nội dung của div đó
         content.toggle();
      });
   });
</script>


<!-- =============== -->
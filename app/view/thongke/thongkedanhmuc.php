<script>
    $(document).ready(function () {
        $("#myInput").on("keyup", function () {
            var timKiem = $(this).val().toLowerCase();
            $("#myTable tr:not(.header_tb)").filter(function () {
                var content = $(this).find("td:nth-child(2)").text().toLowerCase(); // Tìm kiếm theo cột Họ tên
                var hoipjwContent = $(this).find("td:last-child").text().toLowerCase();
                $(this).toggle(content.includes(timKiem) || hoipjwContent.includes(timKiem));
            });
        });
    });
</script>
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
                <input type="text" id="myInput" class="search-input" placeholder="Tìm kiếm...">
                <input type="submit" value="Search" class="btn_search_header_content">
            </form>
        </div>

        <!-- nav menu -->
        <div class="content_top_right_admin">
            <div class="content_top_right_admin_view">
                <div class="content_top_right_admin_view_user">
                    <img src="data:image/png;base64,<?php echo $_SESSION['nhanvien'][0]['hinhanh'] ?>" alt="">
                    <p><?= $_SESSION['nhanvien'][0]['tennhanvien'] ?></p>

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
    <div class="view_bieudo">
        <div class="view_bieudo_show">
            <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
        </div>
        <div class="view_bieudo_table">
            <h2>Top lượt xem nhiều nhất</h2>
            <table id="myTable">
                <tr class="header_tb">
                    <th>STT</th>
                    <th>Tên danh mục</th>
                    <th>Lượt xem</th>
                </tr>
                <?php
                $i = 1;
                foreach ($tabledanhmuc as $tabledanhmucc) {
                    extract($tabledanhmucc);
                    echo '
                    <tr>
                        <td>' . $i . '</td>
                        <td>' . $tendanhmuc . '</td>
                        <td>' . $luotxem . '</td>
                    </tr>
                ';
                    $i++;
                }
                ?>
            </table>

        </div>

    </div>


</div>

<style>
    .view_bieudo {
        position: relative;
        margin-top: 10vh;
        width: 100%;
        height: 88vh;
    }

    .view_bieudo_show {
        position: relative;
        width: 100%;
        height: 60%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .view_bieudo_table {
        position: relative;
        width: 100%;
        height: 40%;
        background-color: white;
        overflow: auto;

    }

    .view_bieudo_table h2 {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        color: red;
    }

    table,
    th,
    td {
        border: 1px solid #868585;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        text-align: left;
        padding: 10px;
    }

    table tr:nth-child(odd) {
        background-color: #eee;
    }

    table tr:nth-child(even) {
        background-color: white;
    }

    table tr:nth-child(1) {
        background-color: skyblue;
    }
</style>

<?php
$showbieudo = '';
foreach ($danhmucbieudo as $danhmucbieudoo) {
    extract($danhmucbieudoo);
    $showbieudo .= '"' . $tendanhmuc . '",';
}
?>
<?php
$showbieudosolieu = '';
foreach ($danhmucbieudo as $danhmucbieudoo) {
    extract($danhmucbieudoo);
    $showbieudosolieu .= '' . $luotxem . ',';
}
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script>
    const xValues = [<?= $showbieudo ?>];
    const yValues = [<?= $showbieudosolieu ?>];
    const barColors = [
        "#b91d47",
        "#00aba9",
        "#2b5797",
        "#e8c3b9",
        "#1e7145",
        "red",
    ];

    new Chart("myChart", {
        type: "pie",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            title: {
                display: true,
                text: "Biêu đồ danh mục có lượt xem nhiều nhất"
            }
        }
    });
</script>
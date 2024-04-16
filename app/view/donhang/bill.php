<!-- <body onload="window.print();"> -->
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .invoice {
        width: 80%;
        margin: 20px auto;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    .invoice-header {
        text-align: center;
    }

    .invoice-body {
        margin-top: 20px;
    }

    .invoice-details {
        margin-bottom: 20px;
    }

    .invoice-table {
        width: 100%;
        border-collapse: collapse;
    }

    .invoice-table th,
    .invoice-table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    .invoice-table th {
        background-color: #f5f5f5;
    }

    .invoice-table tfoot td {
        font-weight: bold;
    }

    .invoice-footer {
        margin-top: 20px;
        text-align: center;
    }

    .invoice-footer button {
        padding: 10px 20px;
        background-color: #3498db;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    .item01 {
        display: none;
    }

    @media print {}
</style>
<div class="invoice" id="billToPrint">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .invoice {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .invoice-header {
            text-align: center;
        }

        .invoice-body {
            margin-top: 20px;
        }

        .invoice-details {
            margin-bottom: 20px;
        }

        .invoice-table {
            width: 100%;
            border-collapse: collapse;
        }

        .invoice-table th,
        .invoice-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .invoice-table th {
            background-color: #f5f5f5;
        }

        .invoice-table tfoot td {
            font-weight: bold;
        }

        .invoice-footer {
            margin-top: 20px;
            text-align: center;
        }

        .invoice-footer button {
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .item01 {
            display: none;
        }

        @media print {
            .invoice-footer {
                display: none;
            }
        }
    </style>
    <div class="invoice-header">
        <h1>Hoá đơn</h1>
    </div>
    <div class="invoice-body">
        <div class="invoice-details">
            <p><strong>Niên luận 2 store</strong></p>
            <p><strong>Số hoá đơn:</strong> <?= $madh ?></p>
        </div>

        <table class="invoice-table">
            <thead>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th>Tổng cộng</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $tongsp = 0;
                $tongbill = 0;
                foreach ($hienhoadon as $hienhoadonn) {
                    extract($hienhoadonn);

                    // So sánh giá trị của $madonhang và $madh
                    if ($madonhang == $madh) {
                        $tongsp = $gia * $soluong;
                        $tongbill += $tongsp;
                        echo '
                            <tr>
                                <td>' . $tendonhang . '</td>
                                <td>' . $gia . '</td>
                                <td>' . $soluong . '</td>
                                <td>' . $tongsp . '</td>
                            </tr>
                        ';
                    }
                }
                ?>

                <tr>
                    <td colspan="3">Tổng cộng:</td>
                    <td><?= $tongbill ?></td>
                </tr>
            </tbody>
            <tfoot>
            </tfoot>
        </table>
    </div>
    <div class="invoice-footer">
        <button onclick="printBill();">In hoá đơn</button>
    </div>
    <script>
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                var printContents = document.getElementById("billToPrint").innerHTML;
                var originalContents = document.body.innerHTML;
                document.body.innerHTML = printContents;
                window.print();
                document.body.innerHTML = originalContents;
            }
        });
        document.addEventListener('keydown', function(event) {
            if (event.key === 'F1') {
                window.history.back();
            }
        });
    </script>
    <div class="invoice-footer">
        <button onclick="window.history.back();">Trở về</button>
    </div>

</div>
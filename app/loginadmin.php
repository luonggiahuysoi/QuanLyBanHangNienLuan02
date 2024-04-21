<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập - Admin</title>
</head>

<body>

    <form action="index.php" method="post">
        <h2>Đăng nhập - Admin</h2>
        <input type="text" name="taikhoan" id="" placeholder="Tên đăng nhập">
        <input type="password" name="matkhau" id="" placeholder="Mật khẩu">
        <input type="submit" value="Đăng nhập" name="dangnhapp">
    </form>

</body>

</html>
<style>
    /* Thiết lập font và màu chữ */
    body {
        width: 95%;
        height: 70vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: Arial, sans-serif;
        color: #333;
        background: #E8CBC0;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #636FA4, #E8CBC0);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #636FA4, #E8CBC0);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }

    form {
        width: 300px;
        margin: 0 auto;
        text-align: center;
        background-color: rgba(255, 255, 255, 0.8);
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        /* Hiệu ứng bóng đổ */
    }


    /* Định dạng input */
    input[type="text"],
    input[type="password"],
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        box-sizing: border-box;
        /* Đảm bảo kích thước đúng */
    }

    /* Định dạng nút đăng nhập */
    input[type="submit"] {
        background-color: #007bff;
        /* Màu nền của nút */
        color: #fff;
        /* Màu chữ của nút */
        border: none;
        /* Xóa viền */
        cursor: pointer;
        /* Hiển thị con trỏ khi di chuyển qua nút */
    }

    /* Định dạng khi di chuột qua nút */
    input[type="submit"]:hover {
        background-color: #0056b3;
        /* Màu nền thay đổi khi di chuột qua */
    }

    /* Tiêu đề */
    h2 {
        text-align: center;
        margin-bottom: 20px;
        /* Khoảng cách dưới tiêu đề */
        color: #333;
        /* Màu chữ của tiêu đề */
    }
</style>
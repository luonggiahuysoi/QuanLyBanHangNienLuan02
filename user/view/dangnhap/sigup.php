<div class="signup-container">
    <form action="index.php?act=dangkyy" method="post" class="signup-form">
        <h3>Đăng ký tài khoản</h3>
        <input type="text" name="tenkhachhang" placeholder="Tên khách hàng" class="input-field">
        <div class="gender-options">
            <input type="radio" name="gioitinh" id="nam" value="1" class="custom-radio">
            <label for="nam">Nam</label>
            <input type="radio" name="gioitinh" id="nu" value="0" class="custom-radio">
            <label for="nu">Nữ</label>
        </div>
        <input type="number" name="sodienthoai" placeholder="Số điện thoại" class="input-field">
        <textarea name="diachi" placeholder="Địa chỉ"></textarea>
        <input type="email" name="email" placeholder="Email" class="input-field">
        <input type="text" name="tendangnhap" placeholder="Tên đăng nhập" class="input-field">
        <input type="password" name="matkhau" placeholder="Mật khẩu" class="input-field">
        <input type="submit" value="Đăng ký" name="nhandangky" class="submit-button">
    </form>
</div>

<style>
    .signup-container {
        margin: 20px auto;
        width: 80%;
        max-width: 500px;
        background: linear-gradient(135deg, #2ecc71, #27ae60);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        font-size: 1.3rem;
    }

    .signup-form {
        text-align: center;
    }

    .signup-form h3 {
        font-size: 3rem;
        font-weight: 650;
        font-family: 'Times New Roman', Times, serif;
        color: #333;
        margin-bottom: 20px;
        text-transform: uppercase;
    }

    .input-field {
        width: 100%;
        margin-bottom: 10px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .input-field:focus {
        outline: none;
        border-color: #007bff;
    }

    .gender-options {
        margin-bottom: 10px;
    }

    .custom-radio {
        display: none;
    }

    .custom-radio+label {
        display: inline-block;
        margin-right: 15px;
        cursor: pointer;
    }

    .custom-radio:checked+label::before {
        content: '';
        display: inline-block;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background-color: red;
        margin-right: 5px;
        vertical-align: middle;
    }

    textarea {
        width: 100%;
        margin-bottom: 10px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .submit-button {
        width: 100%;
        padding: 10px;
        background-color: black;
        color: #fff;
        font-size: 1.3rem;
        font-weight: 550;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .submit-button:hover {
        background-color: #f0f2f0;
        color: black;
    }
</style>
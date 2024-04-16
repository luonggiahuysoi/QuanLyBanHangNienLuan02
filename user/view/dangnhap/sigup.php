<div class="dangky">

    <form action="index.php?act=dangkyy" method="post">
            <input type="text" name="tenkhachhang" id="" placeholder="Tên khách hàng">
            <input type="radio" name="gioitinh" id="" value="1"> Nam
            <input type="radio" name="gioitinh" id="" value="0"> Nữ
            <input type="number" name="sodienthoai" id="" placeholder="Số điện thoại">
            <textarea name="diachi" id="" cols="30" rows="10" placeholder="Địa chỉ"></textarea>
            <input type="email" name="email" id="" placeholder="email">
            <input type="text" name="tendangnhap" id="" placeholder="Tên đăng nhập">
            <input type="password" name="matkhau" id="" placeholder="Mật khẩu">
            <input type="submit" value="Đăng ký" name="nhandangky">
    </form>
</div>

<style>
    .dangky {
        position: relative;
        width: 100%;
        height: 100vh;
        background-color: #99999952;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
</style>
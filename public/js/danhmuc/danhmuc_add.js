$(document).ready(function () {
    $(".btn_show_add_danhmuc").click(function (e) { 
        $(".AddDanhMuc").css("display", "flex");
        
    });
});

document.addEventListener("DOMContentLoaded", function () {
    document.querySelector(".danhmnuc_close_add").addEventListener("click", function () {
       // Lấy phần tử cha và ẩn nó đi
       document.querySelector(".AddDanhMuc").style.display = "none";
    });
 });


$(document).ready(function () {
    $(".updatesanphamimg").css("display", "flex");
});

document.addEventListener("DOMContentLoaded", function () {
    document.querySelector(".sanphamimg").addEventListener("click", function () {
       // Lấy phần tử cha và ẩn nó đi
       document.querySelector(".updatesanphamimg").style.display = "none";
    });
 });
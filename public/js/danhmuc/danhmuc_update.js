$(document).ready(function() {
    $(".updatedanhmucjs").css("display", "flex");
});




document.addEventListener("DOMContentLoaded", function () {
    document.querySelector(".danhmnuc_close").addEventListener("click", function () {
       // Lấy phần tử cha và ẩn nó đi
       document.querySelector(".updatedanhmucjs").style.display = "none";
    });
 });
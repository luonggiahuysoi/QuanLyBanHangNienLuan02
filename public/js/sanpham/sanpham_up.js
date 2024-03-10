document.addEventListener("DOMContentLoaded", function () {
    document.querySelector("#closeButtonUpdate").addEventListener("click", function () {
       // Lấy phần tử cha và ẩn nó đi
       document.querySelector(".updatedanhmucjs").style.display = "none";
    });
 });

$(document).ready(function () {
   $(".updatedanhmucjs").css("display", "flex");
});

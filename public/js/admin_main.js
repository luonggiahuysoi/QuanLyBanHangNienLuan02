// nav
$(document).ready(function () {
    $("#item_cha").click(function (e) {
        $("#item-con").fadeIn(500).css("display", "flex"); // 500 milliseconds (0.5s) là thời gian của hiệu ứng
    });
    $("#close_nav").click(function (e) {
        $("#item-con").fadeIn(500).css("display", "none"); // 500 milliseconds (0.5s) là thời gian của hiệu ứng
    });

});

//================= todo: Item 1 ===========================================
$(document).ready(function () {
    $("#item_cha1").click(function (e) {
        $("#item-con1").fadeIn(500).css("display", "flex"); // 500 milliseconds (0.5s) là thời gian của hiệu ứng
    });


});
$(document).ready(function () {
    $("#close_nav1").click(function (e) {
        $("#item-con1").fadeIn(500).css("display", "none"); // 500 milliseconds (0.5s) là thời gian của hiệu ứng
    });


});

//================= todo: Item 2 ===========================================

$(document).ready(function () {
    $("#item_cha2").click(function (e) {
        $("#item-con2").fadeIn(500).css("display", "flex"); // 500 milliseconds (0.5s) là thời gian của hiệu ứng
    });


});
$(document).ready(function () {
    $("#close_nav2").click(function (e) {
        $("#item-con2").fadeIn(500).css("display", "none"); // 500 milliseconds (0.5s) là thời gian của hiệu ứng
    });


});

//================= todo: Item 3 ===========================================

$(document).ready(function () {
    $("#item_cha3").click(function (e) {
        $("#item-con3").fadeIn(500).css("display", "flex"); // 500 milliseconds (0.5s) là thời gian của hiệu ứng
    });


});
$(document).ready(function () {
    $("#close_nav3").click(function (e) {
        $("#item-con3").fadeIn(500).css("display", "none"); // 500 milliseconds (0.5s) là thời gian của hiệu ứng
    });


});



//================= todo: Item 4 ===========================================

$(document).ready(function () {
    $("#item_cha4").click(function (e) {
        $("#item-con4").fadeIn(500).css("display", "flex"); // 500 milliseconds (0.5s) là thời gian của hiệu ứng
    });


});
$(document).ready(function () {
    $("#close_nav4").click(function (e) {
        $("#item-con4").fadeIn(500).css("display", "none"); // 500 milliseconds (0.5s) là thời gian của hiệu ứng
    });


});

//================= todo: Item 5 ===========================================

$(document).ready(function () {
    $("#item_cha5").click(function (e) {
        $("#item-con5").fadeIn(500).css("display", "flex"); // 500 milliseconds (0.5s) là thời gian của hiệu ứng
    });


});
$(document).ready(function () {
    $("#close_nav5").click(function (e) {
        $("#item-con5").fadeIn(500).css("display", "none"); // 500 milliseconds (0.5s) là thời gian của hiệu ứng
    });


});

//================= note: Item setting ===========================================

// $(document).ready(function () {
//     $(".table_show_setting").click(function (e) { 
//         $(this).css("display", "none");
//         $(".table_show_setting_clone").css("display", "flex");
//     });
// });

$(document).ready(function(){
    // Sử dụng hàm click để xử lý sự kiện khi click vào thẻ có class "show_Setting"
    $('.table_show_setting').click(function(){
        // Tìm phần tử cha gần nhất có class "setting"
        var settingContainer = $(this).closest('.setting');

        // Sử dụng hàm toggle để ẩn/hiện div có class "open_Setting" trong phần tử cha
        settingContainer.find('.table_show_setting_clone').toggle().css("display", "flex");
        $(this).toggle();
    });
});


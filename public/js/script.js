// chuyển slider 
document.addEventListener("DOMContentLoaded", function () {
    var slides = document.querySelectorAll('.slide-img');
    var currentSlide = 0;

    function showSlide(index) {
        // Ẩn tất cả các ảnh
        for (var i = 0; i < slides.length; i++) {
            slides[i].style.display = 'none';
        }
        // Hiển thị ảnh ở vị trí index
        slides[index].style.display = 'block';
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    // Hiển thị ảnh đầu tiên
    showSlide(currentSlide);

    // Thiết lập hàm tự động chuyển ảnh sau mỗi 3 giây
    setInterval(nextSlide, 3000);
});

// Timeout 
var endTime = new Date('2024-04-03T00:00:00').getTime();

// Update the countdown every second
var duration = 2 * 60 * 60 * 1000; // 2 hours in milliseconds

// Set the end time by adding the duration to the current time
var endTime = new Date().getTime() + duration;

// Update the countdown every second
var countdown = setInterval(function () {
    // Get the current time
    var now = new Date().getTime();

    // Calculate the remaining time
    var distance = endTime - now;

    // Check if the event has ended
    if (distance < 0) {
        clearInterval(countdown);
        document.getElementById('countdown').innerHTML = 'Sự kiện đã kết thúc';
    } else {
        // Calculate remaining hours, minutes, and seconds
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the countdown
        document.getElementById('countdown').innerHTML = hours + ' giờ ' + minutes + ' phút ' + seconds + ' giây';
    }
}, 1000);



// chuyen anh 

function changeImage(img) {
    img.src = "./public/img/aotheteho.jpg";
}

function restoreImage(img) {
    img.src = "./public/img/giay.jpg"; // Đường dẫn ban đầu của ảnh
}
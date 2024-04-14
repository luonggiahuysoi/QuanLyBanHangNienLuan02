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



// chuyen anh  khi hover

// function changeImage(img) {
//     img.src = "./public/img/aotheteho.jpg";
// }

// function restoreImage(img) {
//     img.src = "./public/img/giay.jpg"; // Đường dẫn ban đầu của ảnh
// }



// tăng giảm số lượng 

function decreaseQuantity(button) {
    var quantityElement = button.nextElementSibling;
    var quantity = parseInt(quantityElement.innerText);
    if (quantity > 1) {
        quantityElement.innerText = quantity - 1;
    }
}

function increaseQuantity(button) {
    var quantityElement = button.previousElementSibling;
    var quantity = parseInt(quantityElement.innerText);
    quantityElement.innerText = quantity + 1;
}


// Đổi ảnh 

// Get all the images within main__detail-left--imgs
const thumbnailImages = document.querySelectorAll('.main__detail-left--imgs img');

// Get the main image container
const mainImage = document.querySelector('.main__detail-left--img img');

// Loop through each thumbnail image and add a click event listener
thumbnailImages.forEach(thumbnail => {
    thumbnail.addEventListener('click', function () {
        // Change the source of the main image to the clicked thumbnail's source
        mainImage.src = this.src;
    });
});





// Hàm JavaScript để hiển thị thông báo
function showLoginAlert() {
    alert("Vui lòng đăng nhập để đăng ký!");
}

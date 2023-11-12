let searchBtn = document.querySelector('#search-btn');
let searchBar = document.querySelector('.search-bar-container');
let formBtn = document.querySelector('#login-btn');
let loginForm = document.querySelector('.login-form-container');
let formClose = document.querySelector('#form-close');
let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');
let imageBtn = document.querySelectorAll('.img-btn');

// Get the current date
var today = new Date();

// Calculate the date for tomorrow
var tomorrow = new Date(today);
tomorrow.setDate(today.getDate() + 1);

// Format the date as YYYY-MM-DD
var formattedDate = tomorrow.toISOString().split('T')[0];

// Set the default value for the "Absent From" field
document.getElementById("startDate").value = formattedDate;
var endDate = new Date(tomorrow);
  endDate.setDate(tomorrow.getDate() + 1);
  var formattedEndDate = endDate.toISOString().split('T')[0];
  document.getElementById("endDate").value = formattedEndDate;

window.onscroll = () =>{
    searchBtn.classList.remove('fa-times');
    searchBar.classList.remove('active');
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    loginForm.classList.remove('active');
}

menu.addEventListener('click', () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
});

searchBtn.addEventListener('click', () =>{
    searchBtn.classList.toggle('fa-times');
    searchBar.classList.toggle('active');
});

formBtn.addEventListener('click', () =>{
    loginForm.classList.add('active');
});

formClose.addEventListener('click', () =>{
    loginForm.classList.remove('active');
});

let imageSlider = document.getElementById('image-slider');
let currentIndex = 0;
let intervalId; // Variable to store the interval ID
let contentItems = document.querySelectorAll('.content-item');

function showContent(index) {
    // Hide all content items
    contentItems.forEach(item => {
        item.style.display = 'none';
    });

    // Show the content corresponding to the current index
    contentItems[index].style.display = 'block';
}

function nextImage() {
    currentIndex = (currentIndex + 1) % imageBtn.length;
    const nextBtn = imageBtn[currentIndex];
    const src = nextBtn.getAttribute('data-src');

    document.querySelector('.controls .active').classList.remove('active');
    nextBtn.classList.add('active');

    imageSlider.style.animation = 'none';
    void imageSlider.offsetWidth;
    imageSlider.style.animation = 'clipPathAnimation 2s ease';

    document.querySelector('#image-slider').src = src;
    showContent(currentIndex);
}

showContent(currentIndex);
intervalId = setInterval(nextImage, 4000);

imageBtn.forEach((btn, index) =>{
    btn.addEventListener('click', () => {
        clearInterval(intervalId); // Stop the automatic slideshow
        currentIndex = index;
        nextImage(); // Show the next image
        intervalId = setInterval(nextImage, 4000); // Restart the automatic slideshow
    });
});

var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    loop:true,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },
  });

$(".review-slider").hover(
    function() {
        swiper.autoplay.stop();
    },
    function() {
        swiper.autoplay.start();
    }
);
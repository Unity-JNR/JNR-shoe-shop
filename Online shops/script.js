var carouselContainer = document.querySelector('.carousel-container');
var slides = document.querySelectorAll('.carousel-slide');

var currentIndex = 0;
var slideWidth = slides[0].clientWidth;

function slideTo(index) {
    carouselContainer.style.transform = 'translateX(' + (-slideWidth * index) + 'px)';
    currentIndex = index;
}

function nextSlide() {
    if (currentIndex === slides.length - 1) {
        slideTo(0);
    } else {
        slideTo(currentIndex + 1);
    }
}

function prevSlide() {
    if (currentIndex === 0) {
        slideTo(slides.length - 1);
    } else {
        slideTo(currentIndex - 1);
    }
}

// Automatically slide to the next image every 3 seconds
setInterval(nextSlide, 3000);

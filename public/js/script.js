// public/js/script.js

const carouselContainer = document.querySelector(".carousel-container");
const totalSlides = document.querySelectorAll(".carousel-slide").length;

let currentIndex = 0;

function nextSlide() {
    currentIndex = (currentIndex + 1) % totalSlides;
    updateCarousel();
}

function prevSlide() {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    updateCarousel();
}

function updateCarousel() {
    const translateX = -currentIndex * 100 + "%";
    carouselContainer.style.transform = `translateX(${translateX})`;
}

// Optional: Auto play the carousel
setInterval(nextSlide, 3000); // Change slide every 3 seconds

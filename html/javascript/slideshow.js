document.addEventListener("DOMContentLoaded", function () {
    let currentSlide = 0;
    const slides = document.querySelectorAll(".myBackground");
    const intervalTime = 5000; // 3 seconds

    function nextSlide() {
        slides[currentSlide].style.opacity = 0; // Hide current slide
        currentSlide = (currentSlide + 1) % slides.length; // Move to the next slide
        slides[currentSlide].style.opacity = 1; // Show the next slide
    }

    // Initial call to show the first slide
    nextSlide();

    // Set interval to change slide every 3 seconds
    setInterval(nextSlide, intervalTime);
});

// slideshow.js


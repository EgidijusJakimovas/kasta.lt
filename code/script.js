document.addEventListener("DOMContentLoaded", () => {
  let carousels = document.querySelectorAll(".carousel");

  carousels.forEach((carousel) => {
    let slides = carousel.querySelectorAll(".slide");
    let slideIndex = 0;
    let slideInterval;

    function startSlides() {
      slideInterval = setInterval(() => showSlides(), 3000); // Change image every 3 seconds
    }

    function showSlides() {
      slides.forEach((slide, index) => {
        slide.style.display = "none";
      });
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1;
      }
      slides[slideIndex - 1].style.display = "block";
    }

    function nextSlide() {
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1;
      }
      showSpecificSlide(slideIndex);
      restartTimer();
    }

    function prevSlide() {
      slideIndex--;
      if (slideIndex < 1) {
        slideIndex = slides.length;
      }
      showSpecificSlide(slideIndex);
      restartTimer();
    }

    function showSpecificSlide(n) {
      slides.forEach((slide, index) => {
        slide.style.display = "none";
      });
      slides[n - 1].style.display = "block";
    }

    function restartTimer() {
      clearInterval(slideInterval);
      startSlides();
    }

    // Initialize slides and controls
    showSlides();
    startSlides();

    // Attach controls
    carousel.querySelector(".prev").addEventListener("click", prevSlide);
    carousel.querySelector(".next").addEventListener("click", nextSlide);
  });
});

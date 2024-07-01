document.addEventListener('DOMContentLoaded', function () {
    let currentSlide = 1;
    const totalSlides = document.querySelectorAll('.slide').length;

    function showSlide(slideIndex) {
        const slides = document.querySelectorAll('.slide');
        slides.forEach((slide, index) => {
            slide.classList.remove('opacity-100');
            slide.classList.add('opacity-0');
            if (index + 1 === slideIndex) {
                slide.classList.remove('opacity-0');
                slide.classList.add('opacity-100');
            }
        });
    }

    document.getElementById('next').addEventListener('click', function () {
        currentSlide = currentSlide === totalSlides ? 1 : currentSlide + 1;
        showSlide(currentSlide);
    });

    document.getElementById('prev').addEventListener('click', function () {
        currentSlide = currentSlide === 1 ? totalSlides : currentSlide - 1;
        showSlide(currentSlide);
    });

    setInterval(() => {
        currentSlide = currentSlide === totalSlides ? 1 : currentSlide + 1;
        showSlide(currentSlide);
    }, 10000);
});

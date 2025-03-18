let index = 0;
const slides = document.querySelectorAll(".slide");
const totalSlides = slides.length;
const slider = document.querySelector(".slider");
const dotsContainer = document.querySelector(".dots-container");

// Create dots
slides.forEach((_, i) => {
    const dot = document.createElement("span");
    dot.classList.add("dot");
    if (i === 0) dot.classList.add("active");
    dot.addEventListener("click", () => moveToSlide(i));
    dotsContainer.appendChild(dot);
});

const dots = document.querySelectorAll(".dot");

function moveSlide(step) {
    index += step;
    if (index >= totalSlides) { index = 0; }
    if (index < 0) { index = totalSlides - 1; }
    updateSlider();
}

function moveToSlide(n) {
    index = n;
    updateSlider();
}

function updateSlider() {
    slider.style.transform = `translateX(-${index * 100}%)`;
    dots.forEach(dot => dot.classList.remove("active"));
    dots[index].classList.add("active");
}

setInterval(() => moveSlide(1), 6000);

document.querySelector(".prev").addEventListener("click", () => moveSlide(-1));
document.querySelector(".next").addEventListener("click", () => moveSlide(1));
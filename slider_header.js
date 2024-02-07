const sliderControls = document.querySelectorAll('#index-slider-controls li');
const prevBtn = document.querySelector('.index-slider-prev');
const nextBtn = document.querySelector('.index-slider-next');
const header = document.querySelector('#index-slider-header');

let currentSlide = 0;

function showSlide(n) {
  sliderControls[currentSlide].classList.remove('active');
  currentSlide = (n + sliderControls.length) % sliderControls.length;
  sliderControls[currentSlide].classList.add('active');
  const selectedColor = sliderControls[currentSlide].getAttribute('data-color');
  header.style.backgroundColor = selectedColor;
  const prevSlide = sliderControls[currentSlide - 1 < 0 ? sliderControls.length - 1 : currentSlide - 1];
  const prevColor = prevSlide.getAttribute('data-color');
  header.style.borderBottomColor = prevColor;

    header.style.color = 'rgb(242, 232, 207)';
  
}

function prevSlide() {
  showSlide(currentSlide - 1);
}

function nextSlide() {
  showSlide(currentSlide + 1);
}

prevBtn.addEventListener('click', prevSlide);
nextBtn.addEventListener('click', nextSlide);

showSlide(currentSlide);

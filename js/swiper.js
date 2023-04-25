// IMPORTANT (for loop)
// Because of nature of how the loop mode works (it will rearrange slides)
// total number of slides must be >= slidesPerView * 2

// Front Page Group Slider
const swiper = new Swiper(".swiper", {
  loop: true,
  spaceBetween: 30,
  speed: 2000,
  slidesPerView: 4,
  allowTouchMove: false,
  autoplay: {
    delay: 0,
  },
});

// Front Page Price Slider
const swiperPrice = new Swiper(".swiper-price", {
  loop: true,
  spaceBetween: 30,
  speed: 5000,
  autoplay: {
    delay: 1500,
    disableOnInteraction: false
  },
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

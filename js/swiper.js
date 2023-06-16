// IMPORTANT (for loop)
// Because of nature of how the loop mode works (it will rearrange slides)
// total number of slides must be >= slidesPerView * 2

// Front Page Group Slider
const swiper = new Swiper(".swiper", {
  loop: true,
  spaceBetween: 30,
  speed: 4000,
  allowTouchMove: false,
  autoplay: {
    delay: 0,
  },
  slidesPerView: 2, // default (mobile)
  breakpoints: {
    // For screens 600px and above (desktop devices)
    600: {
      slidesPerView: 4,
    },
  },
});

// Front Page Price Slider
const swiperPrice = new Swiper(".swiper-price", {
  loop: true,
  spaceBetween: 30,
  speed: 5500,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false
  },
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 1,
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

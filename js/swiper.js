// IMPORTANT (for loop)
// Because of nature of how the loop mode works (it will rearrange slides)
// total number of slides must be >= slidesPerView * 2

// Front Page Group Slider
const swiper = new Swiper(".swiper", {
  loop: true,
  spaceBetween: 30,
  speed: 4000,
  lazy: true,
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
  spaceBetween: 5,
  breakpoints: {
    600: {
      spaceBetween: 30,
    },
  },
  speed: 1500,
  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
  },
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 1,
  // slidesPerView: "auto", // setting this to "auto" is skipping the 2nd slide????
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },
  // lazy: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

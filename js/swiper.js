// IMPORTANT (for loop)	
// Because of nature of how the loop mode works (it will rearrange slides)
// total number of slides must be >= slidesPerView * 2

const swiper = new Swiper('.swiper', {
  loop: true,
  spaceBetween: 30,
  speed: 2000,
  slidesPerView: 4,   
  allowTouchMove: false,   
  autoplay: {
      delay: 0,
  },
})

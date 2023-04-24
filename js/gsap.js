
// Wait for the DOM to be loaded
document.addEventListener("DOMContentLoaded", function() {

  // new timeline
  const tl = gsap.timeline();
  // GSAP animation code
  tl.from(".hero-text", {
    opacity: 0,
    duration: 1.3,
    scale: 0,
    ease: "back",
    delay: 2.5,
  })
  .from(".hero-image-center", {
    opacity: 0,
    duration: 1,
  },
  // ">-0.5"
  )
  .from(".hero-image-left", {
    opacity: 0,
    duration: 1,
  })
  .from(".hero-image-right", {
    opacity: 0,
    duration: 1,
  },
  ">-0.5"
  );
});
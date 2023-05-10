// Wait for the DOM to be loaded
document.addEventListener("DOMContentLoaded", function () {

// new timeline
const tl = gsap.timeline();
// GSAP animation code
tl.from(".service_hero_text > h2", {
  opacity: 0,
  duration: 1.3,
  scale: 0,
  ease: "back",
  delay: 1.5,
})
  .from(
    ".service_hero_text > span",
    {
      opacity: 0,
      duration: 1,
    },
    ">-0.5"
  )
  .from(
    ".service_hero_text > p",
    {
      opacity: 0,
      duration: 1,
    },
    ">-0.5"
  )
  .from(
    ".service_hero_image > img",
    {
      // opacity: 0,
      scale: 0,
      duration: 1,
    },
    ">-0.5"
  );


  // rotate item on scroll
  const width = window.innerWidth;

  gsap.to(".scrotate", {
    scrollTrigger: {
        trigger: ".scrotate",
        scrub: 1,
        start: 'top 80%',
        // markers: true,
        // end: '+=5000',
    },
    rotation: 1440,
    duration: 3,
    x: width,
    ease: "none",
  });

  // Fade-in Up
  const fadeInUpElements = document.querySelectorAll(".fadein-up");

  fadeInUpElements.forEach((element) => {
    gsap.from(element, {
      scrollTrigger: {
        trigger: element,
        start: "top 80%",
        // markers: true,
        // toggleActions: "play none none none",
      },
      opacity: 0,
      y: 100,
      duration: 1.3,
    });
  });


});


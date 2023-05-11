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
        // trigger: ".scrotate",
        scrub: 3,
        // start: 'top 80%',
        // markers: true,
        end: '+=500',
    },
    rotation: 1440,
    duration: 1,
    x: width,
    ease: "none",
  });
  gsap.to(".scrotate2 > figure > img ", {
    scrollTrigger: {
        trigger: ".scrotate2 > figure > img",
        scrub: 3,
        start: 'top 90%',
        // markers: true,
        end: '+=500',
    },
    rotation: '-1440',
    duration: 1,
    x: '-120vw',
    y: '15vh',
    ease: "none",
  });

  // spinner
  gsap.to('#spinner > img', {
    scrollTrigger: {
      trigger: '#spinner > img',
      scrub: 1,
      start: 'top bottom',
      // markers: true,
    },
    rotation: 360,
    duration: 1,

    
  });



  // Fade-in
  const fadeInElements = document.querySelectorAll(".fadein");

  fadeInElements.forEach((element) => {
    gsap.from(element, {
      scrollTrigger: {
        trigger: element,
        start: "top 80%",
        // markers: true,
        // toggleActions: "play none none none",
      },
      opacity: 0,
      duration: 1.6,
      delay: 0.3,
    });
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

  // Scale from 0
  const scaleOut = document.querySelectorAll(".scale-out");

  scaleOut.forEach((element) => {
    gsap.from(element, {
      scrollTrigger: {
        trigger: element,
        start: "top 80%",
      },
      scale: 0,
      ease: "back",
      // ease: "power2.inOut",
      duration: 1.3,
      opacity: 0,
      // delay: 0.3,
    });
  });


});


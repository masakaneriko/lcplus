// new timeline
const tl2 = gsap.timeline();

tl2.from("#service_hero", {
  autoAlpha: 0,
});
// roll the plus image in from the left
tl2.from(".service_title_plus", {
  x: -500,
  rotation: -360,
  duration: 1.7,
  // delay: 1,
  ease: 'easeIn'
})

  // Fade in letters
  // Select the text element and split the text into individual characters
  let textElement = document.querySelector(".service_title h1");
  let textContent = textElement.textContent.trim();

  // Wrap each character in a span element
  let charArray = textContent.split('');
  let newContent = charArray.map(char => `<span>${char}</span>`).join('');
  textElement.innerHTML = newContent;

  // Select all the span elements and animate their opacity
  let charElements = document.querySelectorAll('.service_title h1 span');
  tl2.from(charElements, {
    opacity: 0,
    duration: 1,
    stagger: 0.06
  },
  // ">0.3"
  );

  tl2.from(".service_hero_content", {
    opacity: 0,
    scale: 0,
    ease: "back",
    duration: 1.3,
  },
  ">-0.5"
  );
// // new timeline
// const tl = gsap.timeline();
// // GSAP animation code
// tl.from(".service_hero_text > h2", {
//   opacity: 0,
//   duration: 1.3,
//   scale: 0,
//   ease: "back",
//   delay: 1.2,
// })
//   .from(
//     ".service_hero_text > span",
//     {
//       opacity: 0,
//       duration: 1,
//     },
//     ">-0.5"
//   )
//   .from(
//     ".service_hero_text > p",
//     {
//       opacity: 0,
//       duration: 1,
//     },
//     ">-0.5"
//   )
//   .from(
//     ".service_hero_image > img",
//     {
//       // opacity: 0,
//       scale: 0,
//       duration: 1,
//     },
//     "<"
//   );



// Wait for the DOM to be loaded
document.addEventListener("DOMContentLoaded", function () {

  // for flow section
  const flowItem = document.querySelectorAll("#flow .ark-block-step__item")
  
  gsap.from( flowItem, {
    scrollTrigger: {
        trigger: flowItem,
        start: "top 80%",
        // markers: true,
    },
    y: 250,
    autoAlpha: 0,
    stagger: 0.3,
    duration: 1.3,
});


  // rotate item on scroll
  const width = (window.innerWidth) * (2/3);

  gsap.to(".scrololol", {
    scrollTrigger: {
        // trigger: ".scrololol",
        scrub: 1,
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

  // NEW DIVIDER PART
  const plusDivider = document.querySelectorAll('.plus-divider > span');
  // plusDivider.forEach((span, index) => {
  //   gsap.from(span, {
  //     // rotation: '+=750',
  //     delay: index * 0.3,
  //     duration: 1,
  //     ease: 'Sine.easeOut',
  //     repeat: -1,
  //     // scale: 0.5,
  //     // yoyo: true,
  //     opacity: 0,
  //     y: -100
  //   })
  // })
  gsap.from(plusDivider, {
    scrollTrigger: {
      trigger: '.plus-divider',
      start: 'top bottom',
      // markers: true,
      // toggleActions: 'play none none reset',
    },
    // rotation: '+=1200',
    y: -100,
    stagger: 0.1,
    opacity: 0,
    ease: 'Sine.easeOut',
  });


  // Fade-in
  const fadeInElements = document.querySelectorAll(".fadein");

  fadeInElements.forEach((element) => {
    gsap.from(element, {
      scrollTrigger: {
        trigger: element,
        start: "top 90%",
        // markers: true,
        // toggleActions: "play none none none",
      },
      opacity: 0,
      duration: 1.7,
      delay: 0.3,
    });
  });

  // Fade-in Up
  const fadeInUpElements = document.querySelectorAll(".fadein-up");

  fadeInUpElements.forEach((element) => {
    gsap.from(element, {
      scrollTrigger: {
        trigger: element,
        start: "top 90%",
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
        start: "top 90%",
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


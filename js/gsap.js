// Front Page Animations

gsap.registerPlugin(ScrollTrigger);

// Wait for the DOM to be loaded
document.addEventListener("DOMContentLoaded", function () {

  // new timeline
  const tl = gsap.timeline();
  // GSAP animation code
  tl.from("#hero", {
    autoAlpha: 0,
  })
    .from(".hero-text", {
      opacity: 0,
      duration: 1.3,
      scale: 0,
      ease: "back",
      // delay: 1,
    })
    .from(
      ".hero-image-center",
      {
        opacity: 0,
        duration: 1,
      }
      // ">-0.5"
    )
    .from(
      ".hero-image-left",
      {
        opacity: 0,
        duration: 1,
      }
      // ">-0.5"
    )
    .from(
      ".hero-image-right",
      {
        opacity: 0,
        duration: 1,
      },
      ">-0.5"
    );

  // Fade in letters
  // Select the text element and split the text into individual characters
  let textElement = document.querySelector(".typewriter");
  let textChars = textElement.innerText.split("");

  // Clear the original text content
  textElement.innerText = "";

  // Loop through each character
  for (let i = 0; i < textChars.length; i++) {
    // Create a new span element for each character
    let charElement = document.createElement("span");

    // Set the initial opacity of the character to 0
    // charElement.style.opacity = 0;

    // Add the character to the text element
    textElement.appendChild(charElement);

    // Set the text content of the character
    charElement.innerText = textChars[i];

    // Set up ScrollTrigger to fade in the character when it enters the viewport
    gsap.fromTo(
      charElement,
      { opacity: 0 },
      {
        opacity: 1,
        duration: 1.3,
        delay: i * 0.06,
        scrollTrigger: {
          trigger: charElement,
          start: "top 80%", // start fade-in animation when 80% of the element is visible in the viewport
        },
      }
    );
  }

  // Concerns Section
  const concernItems = document.querySelectorAll(".concern_list_item");
  gsap.from(concernItems, {
    scrollTrigger: {
      trigger: ".concern_list",
      start: "top 90%",
      // markers: true,
      // toggleActions: 'play none none reset',
    },
    y: 100,
    stagger: 0.75,
    opacity: 0,
    duration: 1.3,
    ease: "Sine.easeOut",
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

  // Fade-in Right
  const fadeInRightElements = document.querySelectorAll(".fadein-right");

  fadeInRightElements.forEach((element) => {
    gsap.from(element, {
      scrollTrigger: {
        trigger: element,
        start: "top 90%",
      },
      opacity: 0,
      x: -100,
      duration: 1.3,
    });
  });

  // Fade-in Left
  const fadeInLeftElements = document.querySelectorAll(".fadein-left");

  fadeInLeftElements.forEach((element) => {
    gsap.from(element, {
      scrollTrigger: {
        trigger: element,
        start: "top 90%",
      },
      opacity: 0,
      x: 100,
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
      delay: 0.3,
    });
  });

  // Equals Section highlight text
  // added custom class '.highlight' to arkhe maker '.arkb-marker'
  // using custom styles in _front.scss to control background width
  // i dont think this array is necessary lol
  gsap.utils.toArray(".highlight > span").forEach((span) => { 
    ScrollTrigger.create({
      trigger: span,
      start: "top 90%",
      // toggleClass: "active",
      onEnter: () => span.classList.add("active"),
    });
  });

  // Plus divider
  const plusDivider = document.querySelectorAll(".plus-divider > span");
  gsap.from(plusDivider, {
    scrollTrigger: {
      trigger: ".plus-divider",
      start: "top 80%",
      // markers: true,
      // toggleActions: 'play none none reset',
    },
    // rotation: '+=1200',
    y: -100,
    stagger: 0.1,
    opacity: 0,
    ease: "Sine.easeOut",
  });
});

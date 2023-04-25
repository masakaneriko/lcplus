gsap.registerPlugin(ScrollTrigger);

// Front Page Animations
// Wait for the DOM to be loaded
document.addEventListener("DOMContentLoaded", function () {
  // new timeline
  const tl = gsap.timeline();
  // GSAP animation code
  tl.from(".hero-text", {
    opacity: 0,
    duration: 1.3,
    scale: 0,
    ease: "back",
    delay: 1,
  })
    .from(
      ".hero-image-center",
      {
        opacity: 0,
        duration: 1,
      }
      // ">-0.5"
    )
    .from(".hero-image-left", {
      opacity: 0,
      duration: 1.2,
    })
    .from(
      ".hero-image-right",
      {
        opacity: 0,
        duration: 1.35,
      },
      ">-0.5"
    );


  // Fade in
  const fadeinUpElements = document.querySelectorAll(".fadein-up");

  fadeinUpElements.forEach((element) => {
    gsap.from(element, {
      scrollTrigger: {
        trigger: element,
        start: "top 80%",
        // markers: true,
        // toggleActions: "play none none none",
      },
      opacity: 0,
      y: 100,
      duration: 2,
    });
  });


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
    charElement.style.opacity = 0;

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
        delay: i * 0.1,
        scrollTrigger: {
          trigger: charElement,
          start: "top 80%", // start fade-in animation when 80% of the element is visible in the viewport
        },
      }
    );
  }



  
});

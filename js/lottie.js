document.addEventListener("DOMContentLoaded", function () {
  setTimeout(function () {
    var animation = lottie.loadAnimation({
      container: document.getElementById("lottie"),
      renderer: "svg",
      loop: false,
      autoplay: true,
      path: "https://lc-plus.net/wp-content/themes/lcplus/js/flow_2.json",
    });
  }, 2000);
});

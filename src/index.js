import "bootstrap";
import "/scss/main.scss";

let animation = bodymovin.loadAnimation({
  container: document.getElementById("animContainer"),
  renderer: "svg",
  loop: true,
  autoplay: true,
  path: "https://lottie.host/c4ae0c2e-3bd4-4f62-804c-2aedbc5b604d/kyT7nKGn5s.json", // lottie file path
});

setTimeout(function () {
  particlesJS("particles-js", {
    particles: {
      number: { value: 80, density: { enable: true, value_area: 800 } },
      color: { value: "#111d5a" },
      shape: {
        type: "polygon",
        stroke: { width: 0, color: "#000000" },
        polygon: { nb_sides: 4 },
        image: { src: "img/github.svg", width: 100, height: 100 },
      },
      opacity: {
        value: 0.5,
        random: true,
        anim: { enable: false, speed: 1, opacity_min: 0.1, sync: false },
      },
      size: {
        value: 11.83721462448409,
        random: true,
        anim: { enable: false, speed: 40, size_min: 0.1, sync: false },
      },
      line_linked: {
        enable: false,
        distance: 150,
        color: "#ffffff",
        opacity: 0.4,
        width: 1,
      },
      move: {
        enable: true,
        speed: 3.206824121731046,
        direction: "none",
        random: false,
        straight: false,
        out_mode: "out",
        bounce: false,
        attract: { enable: false, rotateX: 600, rotateY: 1282.7296486924183 },
      },
    },
    interactivity: {
      detect_on: "canvas",
      events: {
        onhover: { enable: true, mode: "repulse" },
        onclick: { enable: true, mode: "push" },
        resize: true,
      },
      modes: {
        grab: { distance: 400, line_linked: { opacity: 1 } },
        bubble: { distance: 400, size: 40, duration: 2, opacity: 8, speed: 3 },
        repulse: { distance: 200, duration: 0.4 },
        push: { particles_nb: 4 },
        remove: { particles_nb: 2 },
      },
    },
    retina_detect: true,
  });
  var count_particles, stats, update;
  stats = new Stats();
  stats.setMode(0);
  stats.domElement.style.position = "absolute";
  stats.domElement.style.left = "0px";
  stats.domElement.style.top = "0px";
  document.body.appendChild(stats.domElement);
  count_particles = document.querySelector(".js-count-particles");
  update = function () {
    stats.begin();
    stats.end();
    if (
      window.pJSDom[0].pJS.particles &&
      window.pJSDom[0].pJS.particles.array
    ) {
      count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
    }
    requestAnimationFrame(update);
  };
  requestAnimationFrame(update);
}, 1000);

// images slide

const images = document.querySelectorAll("#image-container img");
let currentIndex = 0;

setInterval(() => {
  images[currentIndex].classList.remove("active");
  currentIndex = (currentIndex + 1) % images.length;
  images[currentIndex].classList.add("active");
}, 2500);

// scrollable images

const scrollableImages = document.querySelectorAll(".scrollable-image");

scrollableImages.forEach(function (img) {
  let isHovered = false;
  setInterval(function () {
    if (!isHovered) {
      img.classList.add("scrolling");
      setTimeout(function () {
        img.classList.remove("scrolling");
      }, 5000);
    }
  }, 5000);

  img.addEventListener("mouseenter", function () {
    isHovered = true;
  });

  img.addEventListener("mouseleave", function () {
    isHovered = false;
  });
});

// poppers

let popoverTriggerList = [].slice.call(
  document.querySelectorAll('[data-bs-toggle="popover"]')
);
let popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl);
});

// sticky-nav

let navBar = document.querySelector(".sticky-nav");

const scrollFunction = () => {
  let pageHeight = document.documentElement.scrollTop;
  if (pageHeight !== 0) {
    pageHeight = 1;
    navBar.style.opacity = "100%";
  } else if (pageHeight === 0) {
    pageHeight = 0;
    navBar.style.opacity = "0%";
  }
};

window.addEventListener("scroll", scrollFunction);

// Menu Toggle
const menuToggle = document.getElementById('menu-toggle');
const menu = document.getElementById('menu');
const closeMenuBtn = document.getElementById('close-menu');

menuToggle.addEventListener('click', function () {
  menu.classList.toggle('hidden');
});

closeMenuBtn.addEventListener('click', function () {
  menu.classList.add('hidden');
});

// Splide
var splideImg = new Splide(".splideImg", {
  direction: "ltr",
  height: "20rem",
  wheel: true,
  // type: 'loop',
  waitForTransition: true,
  // wheelSleep: 100,
  arrows: false,
  pagination: false,
  // drag: 'free',
  snap: false,
  perPage: 3,
  perMove: 1,
  padding: {
    left: "50vw",
  },
});

splideImg.mount();

// Splide AutoScroll
// window.splide.Extensions
const splideAutoScrollRight = new Splide('.splideAutoScrollRight', {
  type: 'loop',
  drag: 'free',
  focus: 'center',
  perPage: 3,
  autoScroll: {
    speed: 1,
  },
  autoStart: true,
});
splideAutoScrollRight.mount(window.splide.Extensions);

const splideAutoScrollLeft = new Splide('.splideAutoScrollLeft', {
  type: 'loop',
  drag: 'free',
  focus: 'center',
  perPage: 3,
  autoScroll: {
    speed: -1,
  },
  autoStart: true,
});
splideAutoScrollLeft.mount(window.splide.Extensions);

// Show/ hide text Ask
function toggleTextAsk() {
  var hiddenText = document.getElementById('hidden-text');
  hiddenText.classList.toggle("hidden");
  var toggleSvg = document.getElementById("toggle-svg");
  var togglePath = document.getElementById("toggle-path");

  if (togglePath.getAttribute("d") === "M15 12H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z") {
    togglePath.setAttribute("d", "M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z");
  } else {
    togglePath.setAttribute("d", "M15 12H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z");
  }
}

// Video
const videoPlayer = document.querySelector('.video-player')
initCustomVideoPlayer(videoPlayer)
import Splide from 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/+esm'
import { AutoScroll } from 'https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/+esm'


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

// Splide Image
var splideImg = new Splide(".splideImg", {
  direction: "ltr",
  wheel: true,
  waitForTransition: true,
  arrows: false,
  pagination: false,
  snap: false,
  perPage: 3,
  perMove: 1,
  prevNextButtons: false,
  pagination: false,
  padding: {
    left: "50vw",
  },
});

splideImg.mount();


// Splide AutoScroll
const splideAutoScrollRight = new Splide('.splideAutoScrollRight', {
  type: 'loop',
  drag: 'free',
  focus: 'center',
  perPage: 3,
  pagination: false,
  autoStart: true,
  arrows: false,
  autoScroll: {
    speed: 1,
  },
});
splideAutoScrollRight.mount({ AutoScroll });

const splideAutoScrollLeft = new Splide('.splideAutoScrollLeft', {
  type: 'loop',
  drag: 'free',
  focus: 'center',
  perPage: 3,
  pagination: false,
  autoStart: true,
  arrows: false,
  autoScroll: {
    speed: -1,
  },

});
splideAutoScrollLeft.mount({ AutoScroll });
// window.splide.Extensions


// Video
const videoPlayer = document.querySelector('.video-player')
initCustomVideoPlayer(videoPlayer)

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
var splide = new Splide(".splideImg", {
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

splide.mount();

// Splide AutoScroll
document.addEventListener('DOMContentLoaded', function () {
  new Splide('.splideAutoScrollRight', {
    type: 'loop',
    drag: 'free',
    focus: 'center',
    perPage: 3,
    autoScroll: {
      speed: 1,
    },
  }).mount(window.splide.Extensions);
});

document.addEventListener('DOMContentLoaded', function () {
  new splide('.splideAutoScrollLeft', {
    type: 'loop',
    drag: 'free',
    focus: 'center',
    perPage: 3,
    autoScroll: {
      speed: 1,
    },
  }).mount(window.splide.Extensions);
});
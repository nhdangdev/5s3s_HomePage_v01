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
  const splideAutoScrollRight = new Splide('.splideAutoScrollRight', {
    type   : 'loop',
    drag   : 'free',
    focus  : 'center',
    perPage: 3,
    autoScroll: {
      speed: 1,
    },
  });
  splideAutoScrollRight.mount( );

  const splideAutoScrollLeft = new Splide('.splideAutoScrollLeft', {
    type   : 'loop',
    drag   : 'free',
    focus  : 'center',
    perPage: 3,
    autoScroll: {
      speed: -1,
    },
  });
  splideAutoScrollLeft.mount( );

// document.addEventListener('DOMContentLoaded', function () {
//   // Right to Left
//   new Splide('.splideAutoScrollRight', {
//     type: 'loop',
//     drag: 'free',
//     focus: 'center',
//     perPage: 3,
//     autoScroll: {
//       speed: 1,
//     },
//   }).mount(window.splide.Extensions);
  

//   // Left to Right
//   const splideAutoScrollLeft = new Splide('.splideAutoScrollLeft', {
//     type: 'loop',
//     drag: 'free',
//     focus: 'center',
//     perPage: 3,
//     autoScroll: {
//       speed: -1,
//     },
//   });

//   splideAutoScrollLeft.mount();
// });
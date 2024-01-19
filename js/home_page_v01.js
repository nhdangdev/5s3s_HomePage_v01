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

// Show/ hide AskQuestion
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

// Lấy phần tử feature
const feature = document.querySelector('.show-description');

// Gán sự kiện click cho feature
feature.addEventListener('click', () => {
  // Ẩn mô tả (desc) và chuyển màu văn bản và ảnh thành màu đen
  const desc = feature.querySelector('.ml-10');
  const img = feature.querySelector('img');
  desc.style.display = 'none';
  img.style.filter = 'grayscale(100%)';

  // Thay đổi nội dung HTML để chuyển màu văn bản và ảnh thành màu đen
  feature.innerHTML = `
    <div class="flex items-center mb-2">
      <div
        class="bg-black rounded-full hover:bg-[#F37B74] active:bg-[#F37B74] focus:outline-none focus:ring focus:ring-[#F37B74] cursor-pointer"
      >
        <img src="../asset/img/icon/lock-icon.svg" alt="" style="filter: grayscale(100%);" />
      </div>
      <h3 class="title-1-text-bold text-[#000000] ml-2">
        Menu Design Customization:
      </h3>
    </div>`;
});
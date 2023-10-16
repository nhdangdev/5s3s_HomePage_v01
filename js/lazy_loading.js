// [102312Tuan] add lazy loading for template list
// [102315Tuan] fix bug header when scrolling
const listViewItems = document.querySelectorAll(".list-view .view-item");
const gridViewItems = document.querySelectorAll(".grid-view .view-item");

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      entry.target.classList.toggle("show", entry.isIntersecting);
    });
  },
  {
    threshold: 0.5,
    rootMargin: "70px",
    // root: document.querySelector(".view-wrap.list-view"),
  }
);

listViewItems.forEach((viewItem) => {
  observer.observe(viewItem);
});

gridViewItems.forEach((viewItem) => {
  observer.observe(viewItem);
});

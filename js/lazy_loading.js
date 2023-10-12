// [102312Tuan] add lazy loading for template list
const viewItems = document.querySelectorAll(".list-view .view-item");

const observer = new IntersectionObserver(
  (entries) => {
    console.log(entries)
    entries.forEach((entry) => {
      entry.target.classList.toggle("show", entry.isIntersecting);
    });
  },
  {
    threshold: 0.5,
  }
);

viewItems.forEach((viewItem) => {
  observer.observe(viewItem);
});

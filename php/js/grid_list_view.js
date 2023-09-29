var li_links = document.querySelectorAll(".view-select li");
var view_wraps = document.querySelectorAll(".view-wrap");

li_links.forEach(function (link) {
  link.addEventListener("click", function () {
    //inactive all icon
    li_links.forEach(function (item) {
      item.classList.remove("view-select__option--active");
    });

    //active selected icon
    link.classList.add("view-select__option--active");

    var view_mode = link.getAttribute("data-view");

    //hide all view mode
    view_wraps.forEach(function(view_wrap){
        view_wrap.style.display = "none";
    });
    //show selected view mode
    document.querySelector("." + view_mode).style.display = "block";

    // switch (view_mode) {
    //     case "list-view":
    // }
  });
});
